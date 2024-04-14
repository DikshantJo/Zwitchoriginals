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
                max-width:1680px !important;
                margin:auto;
            }
            .featuresBladeIcon {
                background:'f2f2f2';
                border:none;
                border-radius:6px;
            }

            /* Carousel */
            @media (min-width:1320px){
            .carouselImageShadow, .carouselImage {
                width: 100%;
                height: 100vh;
            }
           }


           /* Mini Cart */
           .miniCartZwitch {
            border-radius: 24px 0 0 24px;
           }

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
        </style>

        {!! view_render_event('bagisto.shop.layout.head') !!}
    </head>

    <body>
        {!! view_render_event('bagisto.shop.layout.body.before') !!}

        <div id="app">
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
