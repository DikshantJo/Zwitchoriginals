{{-- SEO Meta Content --}}
@push('meta')
    <meta name="description" content="@lang('shop::app.customers.signup-form.page-title')"/>

    <meta name="keywords" content="@lang('shop::app.customers.signup-form.page-title')"/>
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
        width: 40%;
        background-repeat: no-repeat;
        background-position: center;
    }
    .signInParent {
        height: 100%;
        width: 100%;
        padding: 0 !important;
        max-width:100%;
    }
    .FormContainer {
        width: 60%;
        max-width: 100%;
        padding: 0 !important;
        margin: 0 auto;
        height: 100%;
        padding:50px 150px !important;
    }
    .signUpParentContainer {
        max-width:100% !important;
    }

    @media (max-width:1000px) {
        .imageContainer {
            display: none;
        }
        .FormContainer {
            padding: 75px !important;
        }
    }

    @media (max-width:500px){
        .FormContainer {
            padding: 15px !important;
            width: 90%;
            border:none;
            margin-top:40px !important;
            margin-bottom: 40px !important
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
        @lang('shop::app.customers.signup-form.page-title')
    </x-slot>

	<div class="container flex signUpParentContainer" style='width:100%; padding:0; margin:0'>
        <div class='imageContainer'>

        </div>
        {{-- Form Container --}}
		<div
			class="FormContainer m-auto px-[30px] py-[30px] border border-[#E9E9E9] rounded-[12px] max-md:py-[30px] "
        >
        {{-- Company Logo --}}
        <div class="flex gap-x-[54px] items-center max-[1180px]:gap-x-[35px]">
            <a
                href="{{ route('shop.home.index') }}"
                class="m-[0_auto_20px_auto]"
                aria-label="Bagisto "
            >
                <!-- <img
                    src="{{ core()->getCurrentChannel()->logo_url ?? bagisto_asset('images/logo.svg') }}"
                    alt="Bagisto "
                    width="131"
                    height="29"
                > -->
                <img
                    src="https://zwitchoriginals.com//storage/channel/1/FinalZwitch.gif"
                    alt="Bagisto "
                    width="131"
                    height="29"
                >
            </a>
        </div>

			<h1 class="text-[40px] font-mulish max-sm:text-[25px]">
                @lang('shop::app.customers.signup-form.page-title')
            </h1>

			<p class="mt-[15px] text-[#6E6E6E] text-[20px] max-sm:text-[16px]">
                @lang('shop::app.customers.signup-form.form-signup-text')
            </p>

            <div class="mt-[60px] rounded max-sm:mt-[30px]">
                <x-shop::form :action="route('shop.customers.register.store')">
                    {!! view_render_event('bagisto.shop.customers.signup_form_controls.before') !!}

                    <x-shop::form.control-group class="mb-4">
                        <x-shop::form.control-group.label class="required">
                            @lang('shop::app.customers.signup-form.first-name')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="text"
                            name="first_name"
                            class="!p-[20px_25px] rounded-lg"
                            :value="old('last_name')"
                            rules="required"
                            :label="trans('shop::app.customers.signup-form.first-name')"
                            :placeholder="trans('shop::app.customers.signup-form.first-name')"
                        >
                        </x-shop::form.control-group.control>

                        <x-shop::form.control-group.error
                            control-name="first_name"
                        >
                        </x-shop::form.control-group.error>
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form_controls.first_name.after') !!}

                    <x-shop::form.control-group class="mb-4">
                        <x-shop::form.control-group.label class="required">
                            @lang('shop::app.customers.signup-form.last-name')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="text"
                            name="last_name"
                            class="!p-[20px_25px] rounded-lg"
                            :value="old('last_name')"
                            rules="required"
                            :label="trans('shop::app.customers.signup-form.last-name')"
                            :placeholder="trans('shop::app.customers.signup-form.last-name')"
                        >
                        </x-shop::form.control-group.control>

                        <x-shop::form.control-group.error
                            control-name="last_name"
                        >
                        </x-shop::form.control-group.error>
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form_controls.last_name.after') !!}

                    <x-shop::form.control-group class="mb-4">
                        <x-shop::form.control-group.label class="required">
                            @lang('shop::app.customers.signup-form.email')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="email"
                            name="email"
                            class="!p-[20px_25px] rounded-lg"
                            :value="old('email')"
                            rules="required|email"
                            :label="trans('shop::app.customers.signup-form.email')"
                            placeholder="email@example.com"
                        >
                        </x-shop::form.control-group.control>

                        <x-shop::form.control-group.error
                            control-name="email"
                        >
                        </x-shop::form.control-group.error>
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form_controls.email.after') !!}

                    <x-shop::form.control-group class="mb-6">
                        <x-shop::form.control-group.label class="required">
                            @lang('shop::app.customers.signup-form.password')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="password"
                            name="password"
                            class="!p-[20px_25px] rounded-lg"
                            :value="old('password')"
                            rules="required|min:6"
                            ref="password"
                            :label="trans('shop::app.customers.signup-form.password')"
                            :placeholder="trans('shop::app.customers.signup-form.password')"
                        >
                        </x-shop::form.control-group.control>

                        <x-shop::form.control-group.error
                            control-name="password"
                        >
                        </x-shop::form.control-group.error>
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form_controls.password.after') !!}

                    <x-shop::form.control-group class="mb-4">
                        <x-shop::form.control-group.label>
                            @lang('shop::app.customers.signup-form.confirm-pass')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="password"
                            name="password_confirmation"
                            class="!p-[20px_25px] rounded-lg"
                            value=""
                            rules="confirmed:@password"
                            :label="trans('shop::app.customers.signup-form.password')"
                            :placeholder="trans('shop::app.customers.signup-form.confirm-pass')"
                        >
                        </x-shop::form.control-group.control>

                        <x-shop::form.control-group.error
                            control-name="password_confirmation"
                        >
                        </x-shop::form.control-group.error>
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form_controls.password_confirmation.after') !!}


                    @if (core()->getConfigData('customer.captcha.credentials.status'))
                        <div class="flex mb-[20px]">
                            {!! Captcha::render() !!}
                        </div>
                    @endif

                    @if (core()->getConfigData('customer.settings.newsletter.subscription'))
                        <div class="flex gap-[6px] items-center select-none">
                            <input
                                type="checkbox"
                                name="is_subscribed"
                                id="is-subscribed"
                                class="hidden peer"
                                onchange="switchVisibility()"
                            />

                            <label
                                class="icon-uncheck text-[24px] text-navyBlue peer-checked:icon-check-box peer-checked:text-navyBlue cursor-pointer"
                                for="is-subscribed"
                            ></label>

                            <label
                                class="pl-0 text-[16] text-[#6E6E6E] max-sm:text-[12px] select-none cursor-pointer"
                                for="is-subscribed"
                            >
                                @lang('shop::app.customers.signup-form.subscribe-to-newsletter')
                            </label>
                        </div>
                    @endif

                    {!! view_render_event('bagisto.shop.customers.signup_form_controls.after') !!}

                    <div class="flex gap-[36px] flex-wrap items-center mt-[30px]">
                        <button style='background: #3e9bd8'
                            class="primary-button block w-full max-w-[374px] py-[16px] px-[43px] mx-auto m-0 ml-[0px] rounded-[18px] text-[16px] text-center"
                            type="submit"
                        >
                            @lang('shop::app.customers.signup-form.button-title')
                        </button>

                        <div class="flex gap-[15px] flex-wrap">
                            {!! view_render_event('bagisto.shop.customers.login_form_controls.before') !!}
                        </div>
                    </div>

                    {!! view_render_event('bagisto.shop.customers.signup_form_controls.after') !!}

                </x-shop::form>
            </div>

			<p class="mt-[20px] text-[#6E6E6E] font-medium">
                @lang('shop::app.customers.signup-form.account-exists')

                <a class="text-navyBlue"
                    href="{{ route('shop.customer.session.index') }}"
                >
                    @lang('shop::app.customers.signup-form.sign-in-button')
                </a>
            </p>
		</div>

        <!-- <p class="mt-[30px] mb-[15px] text-center text-[#6E6E6E] text-xs">
            @lang('shop::app.customers.signup-form.footer', ['current_year'=> date('Y') ])
        </p> -->
	</div>

    @push('scripts')
        {!! Captcha::renderJS() !!}
    @endpush
</x-shop::layouts>
