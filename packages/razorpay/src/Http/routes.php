<?php

Route::group([
    //  'prefix'     => 'razorpay',
       'middleware' => ['web']
   ], function () {

       Route::get('razorpay-redirect','shubhammishra\Razorpay\Http\Controllers\RazorpayController@redirect')->name('razorpay.process');
       Route::post('razorpaycheck','shubhammishra\Razorpay\Http\Controllers\RazorpayController@verify')->name('razorpay.callback'); 
});