<style>
    .brandMyAccountTitle {
        font-size:34px;
        font-weight: 600;
        margin-top: 30px;
    }
</style>

@php
    $menu = \Webkul\Core\Tree::create();

    foreach (config('menu.customer') as $item) {
        $menu->add($item, 'menu');
    }

    $menu->items = core()->sortItems($menu->items);

    $customer = auth()->guard('customer')->user();
@endphp

<x-shop::layouts>
    {{-- Page Title --}}
    <x-slot:title>
        {{ $title ?? '' }}
    </x-slot>

    {{-- Page Content --}}
    <div class="container px-[60px] max-lg:px-[30px] max-sm:px-[15px]">
        <h1 class='block w-full text-center mt-[20px] font-semibold brandMyAccountTitle '>My Account</h1>
        <x-shop::layouts.account.breadcrumb />

        {{-- Account Profile Hero Section --}}

       

        <div class="flex flex-col gap-[40px] items-center mt-[30px] max-lg:gap-[20px] max-md:grid" style='background: rgb(250, 250, 250);padding: 40px;border-radius:24px;'>
            <div class="grid grid-cols-[auto_1fr] gap-[15px] items-center px-[20px] py-[25px] rounded-[12px]">
                <div class="">
                    <img
                        src="{{ $customer->image_url ??  bagisto_asset('images/user-placeholder.png') }}"
                        class="w-[60px] h-[60px] rounded-full"
                        alt="Profile Image"
                    >
                </div>

                <div class="flex flex-col justify-between">
                    <p class="text-[25px] font-semibold">Hello! {{ $customer->first_name }}</p>

                    <p class="text-[#6E6E6E] ">{{ $customer->email }}</p>
                </div>
            </div>
            <div class='flex gap-[40px] items-start max-lg:gap-[20px] max-md:grid w-full'>
                <x-shop::layouts.account.navigation />

                <div class="flex-auto">
                    {{ $slot }}
                </div>
            </div>
           
        </div>
    </div>
</x-shop::layouts>
