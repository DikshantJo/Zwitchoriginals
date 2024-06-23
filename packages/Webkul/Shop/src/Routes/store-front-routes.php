<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use Webkul\Customer\Models\Customer;
use Webkul\Shop\Http\Controllers\CMS\PagePresenterController;
use Webkul\Shop\Http\Controllers\CompareController;
use Webkul\Shop\Http\Controllers\HomeController;
use Webkul\Shop\Http\Controllers\ProductController;
use Webkul\Shop\Http\Controllers\ProductsCategoriesProxyController;
use Webkul\Shop\Http\Controllers\SearchController;
use Webkul\Shop\Http\Controllers\SubscriptionController;


Route::group(['middleware' => ['locale', 'theme', 'currency']], function () {
    /**
     * CMS pages.
     */
    Route::get('page/{slug}', [PagePresenterController::class, 'presenter'])
        ->name('shop.cms.page')
        ->middleware('cacheResponse');

    Route::get('contact-us/', function () {
        return view('shop::cms.contact');
    });
    Route::get('about-us/', function () {
        return view('shop::cms.about');
    });



    Route::get('subscribe/', function () {
        return view('shop::cms.subscription');
    })->middleware(['customer']);

    Route::post('subscribe/payment', function (Request $request) {
        $api = new Api(core()->getConfigData('sales.payment_methods.razorpay.key_id'), core()->getConfigData('sales.payment_methods.razorpay.secret'));
        $amount = $request->input('amount');
        $plan = $request->input('plan');
        $orderData = [
            'receipt'         => 'receipt_id_' . uniqid(),
            'amount'          => $amount,
            'currency'        => 'INR',
            'payment_capture' => 1 // auto capture
        ];
        $order = $api->order->create($orderData);
        return response()->json([
            'orderId' => $order['id'],
            'razorpayKey' => core()->getConfigData('sales.payment_methods.razorpay.key_id'),
            'amount' => $orderData['amount'],
            'currency' => $orderData['currency'],
        ]);
    })->name('subscribe/payment');

    Route::post('/subscribe/update', function (Request $request) {
        $paymentId = $request->input('razorpay_payment_id');
        $amount = $request->input('amount'); 
        $subscriptionMonths = $request->input('subscription_months'); 
        $customerId = auth()->user()->id; 
        $customer = Customer::find($customerId);
        $subscriptionStartDate = now()->toDateTimeString(); // Current date and time
        $subscriptionEndDate = now()->addMonths($subscriptionMonths)->toDateTimeString();
        $customer->is_subscribed = true;
        $customer->subscription_amount = $amount;
        $customer->subscription_months = $subscriptionMonths;
        $customer->subscription_start_date = $subscriptionStartDate;
        $customer->subscription_end_date = $subscriptionEndDate;
        $customer->razorpay_payment_id = $paymentId;
        $customer->save();
        return response()->json(true);

    })->name('subscribe/update');

    Route::post('/payment/callback', function () {
        $success = true; // Check payment success or failure logic here

        if ($success) {
            echo "done";
        } else {
            echo "fail";
        }
    })->name('payment.callback');


    // ->name('shop.cms.page')
    // ->middleware('cacheResponse');

    /**
     * Fallback route.
     */
    Route::fallback(ProductsCategoriesProxyController::class . '@index')
        ->name('shop.product_or_category.index')
        ->middleware('cacheResponse');

    /**
     * Store front home.
     */
    Route::get('/', [HomeController::class, 'index'])
        ->name('shop.home.index')
        ->middleware('cacheResponse');

    /**
     * Store front search.
     */
    Route::get('search', [SearchController::class, 'index'])
        ->name('shop.search.index')
        ->middleware('cacheResponse');

    Route::post('search/upload', [SearchController::class, 'upload'])->name('shop.search.upload');

    /**
     * Subscription routes.
     */
    Route::controller(SubscriptionController::class)->group(function () {
        Route::post('subscription', 'store')->name('shop.subscription.store');

        Route::get('subscription/{token}', 'destroy')->name('shop.subscription.destroy');
    });

    /**
     * Compare products
     */
    Route::get('compare', [CompareController::class, 'index'])
        ->name('shop.compare.index')
        ->middleware('cacheResponse');

    /**
     * Downloadable products
     */
    Route::controller(ProductController::class)->group(function () {
        Route::get('downloadable/download-sample/{type}/{id}', 'downloadSample')->name('shop.downloadable.download_sample');

        Route::get('product/{id}/{attribute_id}', 'download')->defaults('_config', [
            'view' => 'shop.products.index',
        ])->name('shop.product.file.download');
    });
});
