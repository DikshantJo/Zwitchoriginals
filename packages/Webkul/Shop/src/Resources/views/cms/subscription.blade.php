{{-- SEO Meta Content --}}
@push('meta')
    {{-- <meta name="title" content="{{ $page->meta_title }}" />

    <meta name="description" content="{{ $page->meta_description }}" />

    <meta name="keywords" content="{{ $page->meta_keywords }}" /> --}}
@endPush
<style>
    .loader {
        opacity: .5;
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('https://zwitchoriginals.com//storage/channel/1/FinalZwitch.gif') 50% 50% no-repeat rgb(249, 249, 249);
        background-size: 100px;
        display: none;
    }

    * {
        font-family: 'Poppins', sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .displayFlex {
        display: flex;
        flex-wrap: wrap;
    }

    .w-80 {
        width: 80%;
        margin: auto;
    }

    .mt-8 {
        margin-top: 10vh;
    }

    .mt-6 {
        margin-top: 6vh;
    }

    body {
        /* display: flex;
           align-items: center;
           justify-content: center; */
        min-height: 100vh;
        margin: 0;
        padding: 0;
    }

    .contactUsParent {
        /* background: linear-gradient(90deg, rgb(255, 238, 238) 0%, rgb(234, 240, 250) 51%, rgb(255, 240, 252) 79%, rgb(248, 253, 255) 100%) !important; */
        background-color: #3f9ad8;
        padding: 100px;
        /* border-radius: 20px; */
        background-image: radial-gradient(circle, rgb(255 255 255 / 16%) 10%, transparent 10%);
        background-size: 30px 30px;

    }

    .accordion {
        background-color: #fff;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
        /* border-radius: 8px; */
        /* border-bottom: 1px solid #ddd; */
        color: #1a1a1a;
        font-weight: 600;
        font-size: 18px;
    }

    /* .active {
            color: #1a1a1a;
            font-weight: 600;
            font-size: 18px;
        } */

    .panel {
        padding: 35px 18px 0 18px;
        background-color: white;
        max-height: 0px;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    .sectionIContactUS {
        margin: 0 20px 0 0;
        width: 35%;
    }

    .AccordianContainer {
        display: flex;
        flex-direction: column;
        width: 50vw;
        margin: 0 20px 00px 20px;
    }

    .ContactUsPrimary {
        width: 100%;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .ContactUsPrimary h1 {
        font-size: 74px;
        color: #fff;
        font-weight: 600;
    }

    .ContactUsPrimary p {
        font-size: 16px;
        line-height: 32px;
        color: #f2f2f2;
    }

    /* .ContactUsPrimary p:nth-child(1) {
            margin-top: 24px;
        } */

    .sectionIContactUS h2,
    .sectionIIContactUS h2,
    .sectionIIIContactUS h2 {
        font-size: 18px;
    }

    .sectionIContactUS p,
    .sectionIIContactUS p,
    .sectionIIIContactUS p {
        font-size: 14px;
        color: #777;
        margin-top: 5px;
    }


    .FAQContainer {
        padding: 40px 100px;
        /* width: 100%; */
        margin: 0;
    }

    .FAQsubTitle {
        font-size: 34px;
        margin-bottom: 8px;
        font-weight: 600;
        text-align: left;
        line-height: 52px;
    }

    .FAQsubTitleDescription {
        font-size: 16px;
        line-height: 32px;
        margin-top: 10px;
        margin-bottom: 38px;
        display: block;
        /* width: 65%; */
        text-align: left;
        color: #777;
    }

    .ContactUsSubContainer {
        /* padding: 25px 45px 30px 45px; */
        /* background: #fafafa; */
        border-radius: 12px;
        /* width: 65%; */
        margin: auto;
        margin-top: 5vh;
        /* min-height: 15vh; */
        display: flex;
        /* align-items: center; */
        justify-content: center;
    }

    .emailUsCTA {
        background: #fff;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        margin-top: 25px;
        display: block;
        width: 200px;
        margin-left: auto;
        margin-right: auto;
        font-weight: 600;
    }

    .FAQSmallerTitle {
        font-size: 12px;
        text-align: left;
    }


    /* asdasd */
    .card {
        width: 275px;
        height: 275px;
        background: #fff;
        border-radius: 1em;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        gap: 0.4em;
        align-items: flex-start;
        padding: 1em 1.5em;
        transition: all 0.5s ease;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        margin: 15px;
    }

    .card:hover {
        background: #f1f1f1;
    }

    .card-icon svg {
        height: 2rem;
        width: 2rem;
    }

    .card-body {
        text-align: justify;
    }

    .card h2 {
        font-size: 18px;
    }

    .card p {
        font-size: 16px;
    }

    @media (max-width: 768px) {
        .AccordianContainer {
            width: 100%;
        }

        .w-80 {
            width: 100%;
        }

        .displayFlex {
            flex-direction: column;
            align-items: center;
        }

        .contactUsParent {
            padding: 20px;
        }

        .card {
            width: 300px;
            height: 300px;
        }

        .ContactUsPrimary p {
            font-size: 16px;
            line-height: 24px;
            color: #fff;
        }
    }

    .containerC {
        margin: 0 auto;
        padding: 0 4rem 4rem 4rem;
        width: 48rem;
    }

    .accordion .accordion-item {
        border-bottom: 1px solid #e5e5e5;
    }

    .accordion .accordion-item button[aria-expanded=true] {
        border-bottom: 1px solid #03b5d2;
    }

    .accordion button {
        position: relative;
        display: block;
        text-align: left;
        width: 100%;
        padding: 1em 0;
        color: #7288a2;
        font-size: 1.15rem;
        font-weight: 400;
        border: none;
        background: none;
        outline: none;
    }

    .accordion button:hover,
    .accordion button:focus {
        cursor: pointer;
        color: #03b5d2;
    }

    .accordion button:hover::after,
    .accordion button:focus::after {
        cursor: pointer;
        color: #03b5d2;
        border: 1px solid #03b5d2;
    }

    .accordion button .accordion-title {
        padding: 1em 1.5em 1em 0;
    }

    .accordion button .icon {
        display: inline-block;
        position: absolute;
        top: 18px;
        right: 0;
        width: 22px;
        height: 22px;
        border: 1px solid;
        border-radius: 22px;
    }

    .accordion button .icon::before {
        display: block;
        position: absolute;
        content: "";
        top: 9px;
        left: 5px;
        width: 10px;
        height: 2px;
        background: currentColor;
    }

    .accordion button .icon::after {
        display: block;
        position: absolute;
        content: "";
        top: 5px;
        left: 9px;
        width: 2px;
        height: 10px;
        background: currentColor;
    }

    .accordion button[aria-expanded=true] {
        color: #03b5d2;
    }

    .accordion button[aria-expanded=true] .icon::after {
        width: 0;
    }

    .accordion button[aria-expanded=true]+.accordion-content {
        opacity: 1;
        max-height: 9em;
        transition: all 200ms linear;
        will-change: opacity, max-height;
    }

    .accordion .accordion-content {
        opacity: 0;
        max-height: 0;
        overflow: hidden;
        transition: opacity 200ms linear, max-height 200ms linear;
        will-change: opacity, max-height;
    }

    .accordion .accordion-content p {
        font-size: 1rem;
        font-weight: 300;
        margin: 2em 0;
    }


    body {
        font-family: "Poppins", sans-serif;
        color: #444;
        box-sizing: border-box;
        margin: 0px;
    }

    .containerC {
        max-width: 1200px;
        width: 100%;
        padding: 0px 45px;
        margin: auto;
    }

    /**Typeo CSS End**/
    .faq-title {
        text-align: center;
        font-size: 45px;
        font-weight: normal;
    }

    .faq-group {
        display: flex;
        flex-flow: row wrap;
        width: 100%;
    }

    .faq-group .faq-left {
        width: 38%;
    }

    .faq-group .faq-right {
        width: 58%;
        border-left: #ccc 1px solid;
        padding-left: 55px;
        margin-left: 4%;
    }

    .faq-group h3 {
        font-size: 18px;
        font-weight: 500;
        /* font-weight: normal; */
        margin: 55px 0 55px 0;
        color: #777;
    }

    .faq-group h3:first-child {
        margin-top: 0px;
        margin-bottom: 20px;
    }

    .faq-btns {
        margin-bottom: 40px;
    }

    .faq-btn {
        width: 100%;
        display: inline-block;
        border: #000 1px solid;
        border-radius: 4px;
        text-align: center;
        margin: 10px 0;
        background-color: #fff;
        padding: 14px;
        text-decoration: none;
        color: #000;
        transition: 0.5s all;
    }

    .faq-btn:hover {
        background-color: #000;
        color: #fff;
    }

    .faq-item {
        width: 100%;
        margin: 20px 0px;
        border-bottom: #ebebeb 1px solid;
    }

    .faq-item .faq-label {
        position: relative;
        width: 100%;
        padding: 12px 26px 26px 0px;
        cursor: pointer;
        font-size: 16px;
        color: #000;
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        font-weight: 500;
    }

    .faq-item .faq-label i {
        width: 18px;
        height: 100%;
        position: absolute;
        right: 0px;
        top: -10px;
    }

    .faq-item .faq-label i:before {
        content: '';
        position: absolute;
        left: 0px;
        right: 0px;
        top: 0px;
        bottom: 0px;
        margin: auto;
        width: 18px;
        height: 2px;
        background-color: #000;
    }

    .faq-item .faq-label i:after {
        content: '';
        position: absolute;
        left: 0px;
        right: 0px;
        top: 0px;
        bottom: 0px;
        margin: auto;
        width: 2px;
        height: 18px;
        background-color: #000;
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
    }

    .faq-item.faq-item-show .faq-label i:after {
        opacity: 0;
    }

    .faq-cont {
        transition: 0.3s all;
        overflow: hidden;
        height: 0px;
    }

    .faq-item.faq-item-show .faq-cont {
        display: block;
        padding-top: 0px;
        padding-bottom: 20px;
        overflow: auto;
        height: auto;
    }

    .faq-cont p {
        margin: 0px 0 20px 0;
    }

    .faq-cont p:last-child {
        margin-bottom: 0px;
        color: #777;
        font-size: 16px;
        line-height: 28px;
    }

    @media(max-width:992px) {
        .faq-group .faq-left {
            width: 100%;
        }

        .faq-group .faq-right {
            width: 100%;
            border-left: none;
            padding-left: 0;
            margin-left: 0;
        }

        .contactUsParent {
            padding: 100px 10px;
        }
    }




    /* Test */

    .containerC {
        padding: 100px 200px 200px 200px;
    }

    .faq-drawer {
        margin-bottom: 30px;
    }

    .faq-drawer__content-wrapper {
        font-size: 1.25em;
        line-height: 1.4em;
        max-height: 0px;
        overflow: hidden;
        transition: 0.25s ease-in-out;
    }

    .faq-drawer__title {
        border-top: #dfdfdf 1px solid;
        cursor: pointer;
        display: block;
        font-size: 16px;
        font-weight: 500;
        padding: 30px 0 0 0;
        position: relative;
        margin-bottom: 0;
        transition: all 0.25s ease-out;
        color: #1a1a1a;
    }

    .faq-drawer__content p {
        font-size: 16px;
        line-height: 26px;
        margin-top: 14px;
        color: #777;
    }

    .faq-drawer__title::after {
        border-style: solid;
        border-width: 1px 1px 0 0;
        content: " ";
        display: inline-block;
        float: right;
        height: 10px;
        left: 2px;
        position: relative;
        right: 20px;
        top: 2px;
        transform: rotate(135deg);
        transition: 0.35s ease-in-out;
        vertical-align: top;
        width: 10px;
        border-color: #777;
    }

    /* OPTIONAL HOVER STATE */
    .faq-drawer__title:hover {
        color: #4E4B52;
    }

    .faq-drawer__trigger:checked+.faq-drawer__title+.faq-drawer__content-wrapper {
        max-height: 350px;
    }

    .faq-drawer__trigger:checked+.faq-drawer__title::after {
        transform: rotate(-45deg);
        transition: 0.25s ease-in-out;
    }

    input[type="checkbox"] {
        display: none;
    }

    @media(max-width:1980px) {
        .containerC {
            padding: 100px 0;
        }
    }


    @media(max-width:1660px) {
        .containerC {
            padding: 100px 0;
        }
    }

    @media (max-width:1440px) {
        .containerC {
            padding: 100px 0px 100px 0px;
        }
    }

    @media (min-width:900px) and (max-width:1330px) {
        .containerC {
            padding: 100px 50px 100px 50px;
        }
    }

    @media (min-width:601px) and (max-width:899px) {
        .containerC {
            padding: 100px 50px 100px 50px;
        }
    }


    @media only screen and (max-width: 600px) {
        .containerC {
            padding: 25px !important;
        }

        .ContactUsPrimary h1 {
            font-size: 64px;
            line-height: 65px;
            margin-bottom: 14px;
            text-align: left;
        }

        .faq-group h3:first-child {
            margin-bottom: 24px;
        }

        .faq-drawer__title {
            font-size: 16px;
        }

        .FAQsubTitle {
            line-height: 46px;
        }
    }
</style>
{{-- Page Layout --}}
<x-shop::layouts>
    <div class="loader"></div>
    <div class="displayFlex contactUsParent">
        <div class="" style="width: 100%;display:flex; justify-content:center;align-items:center;">
            <div class="ContactUsPrimary">
                <h1> Contact us</h1>
                <div style="margin-top: 0px;">
                    <p style="">Feel free to reach out via email or phone if you have any questions or need
                        assistance
                        with your order.</p>
                    <!-- <p style="font-weight: 600; margin-top: 10px;">Customersupport@zwitchoriginals.com</p> -->
                    <a class="emailUsCTA"></a>
                    <form action="{{ route('subscribe/payment') }}" method="POST">
                        @csrf
                        <button>Subscribe</button>
                    </form>

                </div>
            </div>

        </div>
    </div>


    </div>


    @if (core()->getConfigData('sales.subscription.subscriptiondetails1.active'))
        <div>
            <h1>{{ core()->getConfigData('sales.subscription.subscriptiondetails1.subscription_name') }}</h1>
            <button class="razorpayPaymentBtn"
                data-amount="{{ core()->getConfigData('sales.subscription.subscriptiondetails1.subscription_amount') }}"
                data-plan="{{ core()->getConfigData('sales.subscription.subscriptiondetails1.subscription_time') }}">
                Pay ₹{{ core()->getConfigData('sales.subscription.subscriptiondetails1.subscription_amount') }} for
                {{ core()->getConfigData('sales.subscription.subscriptiondetails1.subscription_time') }}
            </button>
        </div>
    @endif
    @if (core()->getConfigData('sales.subscription.subscriptiondetails2.active'))
        <div>
            <h1>{{ core()->getConfigData('sales.subscription.subscriptiondetails2.subscription_name') }}</h1>
            <button class="razorpayPaymentBtn"
                data-amount="{{ core()->getConfigData('sales.subscription.subscriptiondetails2.subscription_amount') }}"
                data-plan="{{ core()->getConfigData('sales.subscription.subscriptiondetails2.subscription_time') }}">
                Pay ₹{{ core()->getConfigData('sales.subscription.subscriptiondetails2.subscription_amount') }} for
                {{ core()->getConfigData('sales.subscription.subscriptiondetails2.subscription_time') }}
            </button>
        </div>
    @endif
    @if (core()->getConfigData('sales.subscription.subscriptiondetails3.active'))
        <div>
            <h1>{{ core()->getConfigData('sales.subscription.subscriptiondetails3.subscription_name') }}</h1>
            <button class="razorpayPaymentBtn"
                data-amount="{{ core()->getConfigData('sales.subscription.subscriptiondetails3.subscription_amount') }}"
                data-plan="{{ core()->getConfigData('sales.subscription.subscriptiondetails3.subscription_time') }}">
                Pay ₹{{ core()->getConfigData('sales.subscription.subscriptiondetails3.subscription_amount') }} for
                {{ core()->getConfigData('sales.subscription.subscriptiondetails3.subscription_time') }}
            </button>
        </div>
    @endif



    <div id="paymentSection"></div>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
           
    function showLoader() {
        var loader = document.querySelector('.loader');
        loader.style.display = 'block';
    }

    // Function to hide the loader
    function hideLoader() {
        var loader = document.querySelector('.loader');
        loader.style.display = 'none';
    }
        document.addEventListener('DOMContentLoaded', function() {
            var buttons = document.querySelectorAll('.razorpayPaymentBtn');

            buttons.forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    showLoader();
                    var amount = this.getAttribute('data-amount') * 100;
                    var plan = this.getAttribute('data-plan');

                    fetch('{{ route('subscribe/payment') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                amount: amount,
                                plan: plan
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            hideLoader();
                            var options = {
                                key: data.razorpayKey,
                                amount: data.amount,
                                currency: 'INR',
                                name: 'Zwitch Originals',
                                description: 'Payment for ' + plan,
                                image: 'https://zwitchoriginals.com//storage/channel/1/FinalZwitch.gif',
                                order_id: data.orderId,
                                handler: function(response) {
                                    console.log(response);
                                    fetch('{{ route('subscribe/update') }}', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                            },

                                            body: JSON.stringify({...response, 'amount': data.amount/100 , 'subscription_months' : plan})
                                        }).then(response => response.json())
                                        .then(data => console.log(data))
                                    // // Handle success callback
                                    // alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
                                    // // Optionally, redirect to a success page
                                    // window.location.href = '{{ route('payment.callback') }}';
                                },
                                prefill: {
                                    name: 'Your Name',
                                    email: 'your_email@example.com'
                                },
                                theme: {
                                    color: '#F37254'
                                }
                            };

                            var rzp = new Razorpay(options);
                            rzp.open();
                        })
                        .catch(error => console.error('Error:', error));
                });
            });
        });
    </script>
</x-shop::layouts>
