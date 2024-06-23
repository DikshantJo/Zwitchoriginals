@component('shop::emails.layout')
    <div style="margin-bottom: 34px;">
        <p style="font-weight: bold;font-size: 20px;color: #121A26;line-height: 24px;margin-bottom: 24px">
            @lang('shop::app.emails.dear', ['customer_name' => $fullName]), 👋
        </p>

       
    </div>

    <p style="font-size: 16px;color: #384860;line-height: 24px;margin-bottom: 40px">
        We are thrilled to welcome you to Zwitch Originals! Thank you for subscribing to our services. Your support means a lot to us, and we are excited to have you on board.
    </p>
    <p style="font-size: 16px;color: #384860;line-height: 24px;margin-bottom: 20px">
        Here are the details of your subscription:
    </p>
    <p style="font-size: 16px;color: #384860;line-height: 24px;margin-bottom: 10px">
        Subscription Ammount: ₹{{$subscription_amount}}
    </p>
    <p style="font-size: 16px;color: #384860;line-height: 24px;margin-bottom: 10px">
        Subscription Plan: {{$subscription_months}} months
    </p>
    <p style="font-size: 16px;color: #384860;line-height: 24px;margin-bottom: 10px">
        Subscription Start Date: {{date('"F j, Y', strtotime($subscription_start_date))}}
    </p>
    <p style="font-size: 16px;color: #384860;line-height: 24px;margin-bottom: 10px">
        Subscription End Date: {{date('"F j, Y', strtotime($subscription_end_date))}}
    </p>
   

   
@endcomponent