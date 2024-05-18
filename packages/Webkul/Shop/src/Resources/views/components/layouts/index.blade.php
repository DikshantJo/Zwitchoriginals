@props([
    'hasHeader'  => true,
    'hasFeature' => true,
    'hasFooter'  => true,
])

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ core()->getCurrentLocale()->direction }}">
    <head>
        <title>{{ $title ?? '' }}</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="base-url" content="{{ url()->to('/') }}">
        <meta name="currency-code" content="{{ core()->getCurrentCurrencyCode() }}">
        <meta http-equiv="content-language" content="{{ app()->getLocale() }}">

        @stack('meta')

        <link
            rel="icon"
            sizes="16x16"
            href="{{ core()->getCurrentChannel()->favicon_url ?? bagisto_asset('images/favicon.ico') }}"
        />

        @bagistoVite(['src/Resources/assets/css/app.css', 'src/Resources/assets/js/app.js'])

        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" as="style">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

        <link href="https://api.fontshare.com/v2/css?f[]=general-sans@701,200,500,301,201,300,601,600,401,501,400,700&display=swap" rel="stylesheet">


        <link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" as="style">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap">

        <link rel = 'stylesheet' href='/resources/css/app.css'>

        @stack('styles')

        <style>
            {!! core()->getConfigData('general.content.custom_scripts.custom_css') !!}
            body {
                font-family:'General Sans', sans-serif !important;
                /* max-width:1680px !important; */
                margin:auto;
            }
            .featuresBladeIcon {
                background:'f2f2f2';
                border:none;
                border-radius:6px;
                display:none;
            }

            /* Carousel */
            @media (min-width:1320px){
            .carouselImageShadow, .carouselImage {
                width: 100%;
                /* height: 100vh; */
            }
           }


           /* Mini Cart */
           /* .miniCartZwitch {
            border-radius: 24px 0 0 24px;
           } */

            /* Footer */
            .footerSocialIcon{
                /* --bg-color: rgba(255,255,255,0.15); */
                border-radius: 50%;
                border: 1px solid rgba(255, 255, 255, 0.25);
                color: #f2f2f2;
                width: 2.5rem ;
                height: 2.5rem;
                font-size: calc(1.25rem);
                display: flex;
                -webkit-box-align: center;
                align-items: center;
                -webkit-box-pack: center;
                justify-content: center;
                overflow: hidden;
                position: relative;
                z-index: 0;
                margin: 0px;
            }

            .footerLinksContainer li a {
                font-size:16px;
                font-weight: 400;
                color: #f2f2f2;
                text-decoration: none;
                transition: all 0.3s ease;
            }
            .businessLogo {
                position: absolute;
                left:50%;
                top:50%;
                transform:translate(-50%,-50%);
                z-index: 999;
            }

            .icon-heart-fill:before {
                color:#3e9ad9;
            }

            .socialProofContainer {
                padding: 30px !important;
            }
            .footerContainerSubscription {
                margin-bottom:20px;
            }


            /* Leads pop up form */
             /* Popup box BEGIN */

            h1 {
            text-align: center;
            font-family: Tahoma, Arial, sans-serif;
            color: #06D85F;
            margin: 80px 0;
            }

            .box {
            width: 40%;
            margin: 0 auto;
            background: rgba(255,255,255,0.2);
            padding: 35px;
            border: 2px solid #fff;
            border-radius: 20px/50px;
            background-clip: padding-box;
            text-align: center;
            }

            .button {
            font-size: 1em;
            padding: 10px;
            color: #fff;
            border: 2px solid #06D85F;
            border-radius: 20px/50px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease-out;
            }
            .button:hover {
            background: #06D85F;
            }

            .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: visible;
            opacity: 1;
            }
            /* .overlay:target {
            visibility: visible;
            opacity: 1;
            } */

            .popup {
            margin: 150px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 30%;
            position: relative;
            transition: all 5s ease-in-out;
            }

            .popup h2 {
                margin-top: 0;
                color: #333;
                font-family: 'Poppins';
                font-size: 28px;
                font-weight: 600;
                margin-bottom: 20px;
            }
            .popup .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
            }
            .popup .close:hover {
            color: #06D85F;
            }
            .popup .content {
            max-height: 30%;
            overflow: auto;
            }

            .hbspt-form {
                width: 100%;
            }


            @media(max-width:550px) {
                .categorySliderParent,.categorySliderImg {
                    width: 80px;
                    height:80px;
                }
                .catergorySliderContainer {
                    gap: 0;
                    height: 120px;
                }
                .categoryLeftArrow,.categoryRightArrow {
                    width: 40px;
                    height:40px;
                    font-size:18px;
                }
                .categoryRightArrow {
                    right: -45px !important;
                }
                .categoryLeftArrow {
                    Left: -45px !important;
                }
                .socialProofContainer  {
                    padding: 30px 0 !important;
                }
                .footerContainerSubscription {
                    margin-bottom:100px !important;
                }
                .staticContent {
                    width: 95%;
                }
                .popup {
                    margin: 40px auto;
                    width: 95%;
                    overflow-y:auto;
                }
                .popup h2 {
                    margin-top: 0;
                    font-size: 28px;
                    font-weight: 600;
                    margin-bottom: 25px;
                    color: #333;
                    font-family: 'Poppins';
                }
                .container {
                    padding: 0 15px !important;
                }
            }


        </style>

        {!! view_render_event('bagisto.shop.layout.head') !!}
    </head>

    <body>
        {!! view_render_event('bagisto.shop.layout.body.before') !!}

        <div id="app">

            <div id="popup1" class="overlay" style='z-index:999'>
                <div class="popup">
                    <h2>Zwitch originals</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                         <!--   <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
                    <script>
                    hbspt.forms.create({
                        region: "eu1",
                        portalId: "144669902",
                        formId: "39db11a8-dbfc-48b0-9b11-7cac6a4ae26f"
                    }); -->
                     <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
                    <script>
                    hbspt.forms.create({
                        region: "eu1",
                        portalId: "144688746",
                        formId: "54201212-334a-4f7d-84f6-1669cdf57e33"
                    }); 
                 
                    </script>
                    </script>
                    </script>
                    </div>
                </div>
            </div>


            {{-- Flash Message Blade Component --}}
            <x-shop::flash-group />

            {{-- Confirm Modal Blade Component --}}
            <x-shop::modal.confirm />

            {{-- Page Header Blade Component --}}
            @if ($hasHeader)
                <x-shop::layouts.header />
            @endif

            {!! view_render_event('bagisto.shop.layout.content.before') !!}

            {{-- Page Content Blade Component --}}
            {{ $slot }}

            {!! view_render_event('bagisto.shop.layout.content.after') !!}

            {{-- Page Features Blade Component --}}
            @if ($hasFeature)
                <x-shop::layouts.features />
            @endif

            {{-- Page Footer Blade Component --}}
            @if ($hasFooter)
                <x-shop::layouts.footer />
            @endif
        </div>

        {!! view_render_event('bagisto.shop.layout.body.after') !!}

        @stack('scripts')

        <script type="text/javascript">
            {!! core()->getConfigData('general.content.custom_scripts.custom_javascript') !!}
        </script>
    </body>
</html>
