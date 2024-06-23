@component('shop::emails.layout')
    <div style="margin-bottom: 34px;">
        <p style="font-weight: bold;font-size: 20px;color: #121A26;line-height: 24px;margin-bottom: 24px">
            @lang('shop::app.emails.dear', ['customer_name' => $fullName]), 👋
        </p>

       
    </div>

    <p style="font-size: 16px;color: #384860;line-height: 24px;margin-bottom: 40px">
        We are thrilled to welcome you to Zwitch Originals! Thank you for subscribing to our services. Your support means a lot to us, and we are excited to have you on board.
    </p>
    <p style="font-size: 16px;color: #384860;line-height: 24px;margin-bottom: 40px">
        Here are the details of your subscription:
    </br>
        Subscription Ammount: ₹{{$subscription_amount}}</br>
        Subscription Plan: {{$subscription_months}} months</br>
        Subscription Start Date: {{date('"F j, Y', strtotime($subscription_start_date))}}</br>
        Subscription End Date: {{date('"F j, Y', strtotime($subscription_end_date))}}</br>
    </p>
    <p style="font-size: 16px;color: #384860;line-height: 24px;margin-bottom: 40px">
        Should you have any questions or require assistance with your subscription, feel free to reach out to our customer support team at sales@zwitchoriginals.com.
    </p>

   
@endcomponent