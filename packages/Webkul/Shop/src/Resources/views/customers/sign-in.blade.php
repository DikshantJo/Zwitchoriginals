{{-- SEO Meta Content --}}
@push('meta')
    <meta name="description" content="@lang('shop::app.customers.login-form.page-title')"/>

    <meta name="keywords" content="@lang('shop::app.customers.login-form.page-title')"/>
@endPush

<style>
    .brandLoginTitle {
        font-family:'Mulish';
        font-weight: 700;
        font-size: 28px !important;
        text-align:center;
    }
    .brandLoginDescription {
        font-family:'Mulish';
        text-align:center;
    }
    .imageContainer {
        background-image: url('/themes/shop/default/build/assets/signInImageNew.png');
        width: 50%;
        background-repeat: no-repeat;
        background-position: center;
    }
    .signInParent {
        height: 100%;
        width: 100%;
        padding: 0 !important;
        max-width:100%;
    }

    @media (max-width:1000px) {
        .imageContainer {
            display: none;
        }
    }
</style>

<x-shop::layouts
    :has-header="false"
    :has-feature="false"
    :has-footer="false"
>
    {{-- Page Title --}}
    <x-slot:title>
        @lang('shop::app.customers.login-form.page-title')
    </x-slot>

    <div class="container flex signInParent" style='width:100%; max-width:100%; height:100%: padding:0'>

        <div class='imageContainer'>

        </div>
        {{-- Form Container --}}
        <div
            class="w-full max-w-[595px] flex flex-col justify-center m-auto px-[30px] py-[60px] rounded-[12px] max-md:px-[30px] max-md:py-[30px] h-full" style="background:#fff;. border:none!"
        >
        {{-- Company Logo --}}
        <div class="flex gap-x-[54px] items-center max-[1180px]:gap-x-[35px]">
            <a
                href="{{ route('shop.home.index') }}"
                class="m-[0_auto_20px_auto]"
                aria-label="Bagisto "
            >
                <img
                    src="{{ core()->getCurrentChannel()->logo_url ?? bagisto_asset('images/logo.svg') }}"
                    alt="Bagisto "
                    width="131"
                    height="29"
                >
            </a>
        </div>
            <h1 class="text-[40px] max-sm:text-[25px] brandLoginTitle">
                @lang('shop::app.customers.login-form.page-title')
            </h1>

            <p class="mt-[5px] text-[#6E6E6E] text-[18px] max-sm:text-[14px] brandLoginDescription">
                @lang('shop::app.customers.login-form.form-login-text')
            </p>

            {!! view_render_event('bagisto.shop.customers.login.before') !!}

            <div class="mt-[30px] rounded max-sm:mt-[30px]">
                <x-shop::form :action="route('shop.customer.session.create')">

                    {!! view_render_event('bagisto.shop.customers.login_form_controls.before') !!}

                    <x-shop::form.control-group class="mb-4">
                        <x-shop::form.control-group.label class="required">
                            @lang('shop::app.customers.login-form.email')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="email"
                            name="email"
                            class="!p-[20px_25px] rounded-lg"
                            value=""
                            rules="required|email"
                            :label="trans('shop::app.customers.login-form.email')"
                            placeholder="email@example.com"
                        >
                        </x-shop::form.control-group.control>

                        <x-shop::form.control-group.error
                            control-name="email"
                        >
                        </x-shop::form.control-group.error>
                    </x-shop::form.control-group>

                    <x-shop::form.control-group class="mb-4">
                        <x-shop::form.control-group.label class="required">
                            @lang('shop::app.customers.login-form.password')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="password"
                            name="password"
                            class="!p-[20px_25px] rounded-lg"
                            value=""
                            id="password"
                            rules="required|min:6"
                            :label="trans('shop::app.customers.login-form.password')"
                            :placeholder="trans('shop::app.customers.login-form.password')"
                        >
                        </x-shop::form.control-group.control>

                        <x-shop::form.control-group.error
                            control-name="password"
                        >
                        </x-shop::form.control-group.error>
                    </x-shop::form.control-group>

                    <div class="flex justify-between">
                        <div class="select-none items-center flex gap-[6px]">
                            <input
                                type="checkbox"
                                id="show-password"
                                class="hidden peer"
                                onchange="switchVisibility()"
                            />

                            <label
                                class="icon-uncheck text-[24px] text-navyBlue peer-checked:icon-check-box peer-checked:text-navyBlue cursor-pointer"
                                for="show-password"
                            ></label>

                            <label
                                class="text-[16] text-[#6E6E6E] max-sm:text-[12px] pl-0 select-none cursor-pointer"
                                for="show-password"
                            >
                                @lang('shop::app.customers.login-form.show-password')
                            </label>
                        </div>

                        <div class="block">
                            <a
                                href="{{ route('shop.customers.forgot_password.create') }}"
                                class="text-[16px] cursor-pointer text-black max-sm:text-[12px]"
                            >
                                <span>
                                    @lang('shop::app.customers.login-form.forgot-pass')
                                </span>
                            </a>
                        </div>
                    </div>

                    {!! view_render_event('bagisto.shop.customers.login_form_controls.after') !!}

                    @if (core()->getConfigData('customer.captcha.credentials.status'))
                        <div class="flex mt-[20px]">
                            {!! Captcha::render() !!}
                        </div>
                    @endif

                    <div class="flex gap-[36px] flex-wrap mt-[30px] items-center">
                        <button
                            class="primary-button block w-full max-w-[374px] py-[16px] px-[43px] m-0 ml-[0px] mx-auto rounded-[18px] text-[16px] text-center"
                            type="submit"
                        >
                            @lang('shop::app.customers.login-form.button-title')
                        </button>

                        {!! view_render_event('bagisto.shop.customers.login.after') !!}

                        <!-- {!! view_render_event('bagisto.shop.customers.login_form_controls.before') !!} -->
                    </div>
                </x-shop::form>
            </div>

            <p class="mt-[20px] text-[#6E6E6E] font-medium flex justify-between">
                @lang('shop::app.customers.login-form.new-customer')

                <a
                    class="text-navyBlue"
                    href="{{ route('shop.customers.register.index') }}"
                >
                    @lang('shop::app.customers.login-form.create-your-account')
                </a>
            </p>
        </div>

        <!-- <p class="mt-[30px] mb-[15px] text-center text-[#6E6E6E] text-xs">
            @lang('shop::app.customers.login-form.footer', ['current_year'=> date('Y') ])
        </p> -->
    </div>

    @push('scripts')
        {!! Captcha::renderJS() !!}

        <script>
            function switchVisibility() {
                let passwordField = document.getElementById("password");

                passwordField.type = passwordField.type === "password"
                    ? "text"
                    : "password";
            }
        </script>
    @endpush
</x-shop::layouts>
