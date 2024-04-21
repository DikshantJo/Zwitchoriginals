{!! view_render_event('bagisto.shop.layout.footer.before') !!}

{{--
    The category repository is injected directly here because there is no way
    to retrieve it from the view composer, as this is an anonymous component.
--}}
@inject('themeCustomizationRepository', 'Webkul\Shop\Repositories\ThemeCustomizationRepository')

{{--
    This code needs to be refactored to reduce the amount of PHP in the Blade
    template as much as possible.
--}}
@php
    $customization = $themeCustomizationRepository->findOneWhere([
        'type'       => 'footer_links',
        'status'     => 1,
        'channel_id' => core()->getCurrentChannel()->id,
    ]); 
@endphp




<footer class="mt-[36px]  max-sm:mt-[30px] zwitchoriginalsFooter flex justify-center items-center flex-col relative" style="background:#1a1a1a; min-height:70vh;border-radius:  24px 24px 0 0">
    <div class="container max-lg:px-[30px] max-sm:mt-[30px]" style = 'margin-top:20px'>
        <div class="flex gap-[25px] justify-between max-lg:flex-wrap" style='border-radius: 12px;padding: 30px;'>
            <div class="flex flex-col items-start justify-center gap-[20px]">
                <span class="icon-truck flex items-center justify-center w-[60px] h-[60px] bg-white border border-black rounded-full text-[42px] text-navyBlue p-[10px] featuresBladeIcon"></span>

                <div class="">
                    <p class="text-[16px] font-semibold font-dmserif" style='font-size:24px; color:#fff'>customization available</p>
                </div>
            </div>

            <div class="flex  flex-col items-start justify-center gap-[20px]">
                <span class="icon-support flex items-center w-[60px] h-[60px] bg-white p-[10px] justify-center border border-black rounded-full text-[42px] text-navyBlue featuresBladeIcon"></span>

                <div class="">
                    <p class="text-[16px] font-semibold font-dmserif" style='font-size:24px; color:#fff'>Sustainable</p>
                </div>
            </div>

            <div class="flex flex-col items-start justify-center gap-[20px]">
                <span class="icon-dollar-sign flex items-center rounded-full w-[60px] h-[60px] p-[10px] justify-center border border-black bg-white text-[42px] text-navyBlue featuresBladeIcon"></span>

                <div class="">
                    <p class="text-[16px] font-semibold font-dmserif" style='font-size:24px; color:#fff'>Premium quality</p>
                </div>
            </div>

            <div class="flex flex-col items-start justify-center gap-[20px]">
                <span class="icon-product flex items-center w-[60px] h-[60px] bg-white p-[10px] justify-center border border-black rounded-full text-[42px] text-navyBlue featuresBladeIcon"></span>

                <div class="">
                    <p class="text-[16px] font-semibold font-dmserif" style='font-size:24px; color:#fff'>24/7 Support</p>
                </div>
            </div>
        </div>
    </div>

    @if ($customization)
        <div class="flex gap-x-[25px] gap-y-[30px] justify-between p-[60px] max-1060:flex-wrap max-1060:flex-col-reverse max-sm:px-[15px]" style="max-width:1440px; width:85%; padding-top:20px">
            <div class='flex flex-col'>
                <h3 class="zwitchFooterTitleLeft" style='font-size:34px;font-weight:600;color:#fff'>Get the latest from Zwitch</h3>
                <div class = "zwitchFooterSocial flex gap-x-[10px] mt-4">
                    <a href="https://www.facebook.com/zwitchapparels/" class='footerSocialIcon'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 155 155"><path fill="currentColor" d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"></path></svg>
                    </a>
                    <a href="https://www.instagram.com/getzwitched/" class='footerSocialIcon'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"></path></svg>
                    </a>
                    <!-- <a href="" class='footerSocialIcon'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 22 25"><path fill="currentColor" d="M19.644 5.709a4.293 4.293 0 0 0 1.803-2.392 7.955 7.955 0 0 1-2.606 1.05A3.995 3.995 0 0 0 15.846 3c-2.265 0-4.101 1.937-4.101 4.325 0 .34.034.67.104.985-3.409-.18-6.432-1.9-8.457-4.52a4.496 4.496 0 0 0-.555 2.176c0 1.5.724 2.824 1.825 3.602a3.956 3.956 0 0 1-1.859-.541v.053c0 2.097 1.413 3.845 3.293 4.241a3.82 3.82 0 0 1-1.083.152c-.264 0-.522-.026-.77-.076.52 1.717 2.036 2.97 3.832 3.003A7.968 7.968 0 0 1 2 18.192a11.192 11.192 0 0 0 6.29 1.943c7.548 0 11.673-6.591 11.673-12.307 0-.188-.002-.375-.01-.56A8.575 8.575 0 0 0 22 5.028a7.867 7.867 0 0 1-2.356.681z"></path></svg>
                    </a>
                    <a href="" class='footerSocialIcon'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M20.112 10.092a5.339 5.339 0 0 1-4.959-2.39v8.222a6.076 6.076 0 1 1-6.077-6.077c.127 0 .251.012.376.02v2.994c-.125-.015-.247-.038-.376-.038a3.101 3.101 0 0 0 0 6.203c1.713 0 3.226-1.35 3.226-3.063L12.332 2h2.865a5.336 5.336 0 0 0 4.918 4.764v3.328"></path></svg>
                    </a> -->
                </div>
                {{-- News Letter subscription --}}
                @if(core()->getConfigData('customer.settings.newsletter.subscription'))
                    <div class="grid gap-[10px] mt-20">
                        <p class="max-w-[288px] leading-[45px] text-[30px] italic" style='color:#fff' >
                            @lang('shop::app.components.layouts.footer.newsletter-text')
                        </p>

                        <p class="text-[12px]" style='color:#fff'>
                            @lang('shop::app.components.layouts.footer.subscribe-stay-touch')
                        </p>

                        <x-shop::form
                            :action="route('shop.subscription.store')"
                            class="mt-[10px] rounded max-sm:mt-[30px]"
                        >
                            <label for="organic-search" class="sr-only">Search</label>

                            <div class="relative w-full">

                            <x-shop::form.control-group.control
                                type="email"
                                name="email"
                                class=" blockw-[420px] max-w-full px-[20px] py-[20px] pr-[110px] bg-[#F1EADF] border-[2px] border-[#E9DECC] rounded-[12px] text-xs font-medium max-1060:w-full"
                                rules="required|email"
                                label="Email"
                                placeholder="email@example.com"
                            >
                            </x-shop::form.control-group.control>

                            <x-shop::form.control-group.error
                                control-name="email"
                            >
                            </x-shop::form.control-group.error>

                                <button
                                    type="submit"
                                    class=" absolute flex items-center top-[8px] w-max px-[26px] py-[13px] bg-white rounded-[12px] text-[12px] font-medium rtl:left-[8px] ltr:right-[8px]"
                                >
                                    @lang('shop::app.components.layouts.footer.subscribe')
                                </button>
                            </div>
                        </x-shop::form>
                    </div>
                @endif
            </div>
            <div class="flex gap-[85px] items-start flex-wrap max-1180:gap-[25px] max-1060:justify-between">
                @if ($customization->options)
                    @foreach ($customization->options as $footerLinkSection)
                        <ul class="grid gap-[20px] text-[14px] footerLinksContainer">
                            @php
                                usort($footerLinkSection, function ($a, $b) {
                                    return $a['sort_order'] - $b['sort_order'];
                                });
                            @endphp
                            
                            @foreach ($footerLinkSection as $link)
                                <li style='color:#fff'>
                                    <a href="{{ $link['url'] }}">
                                        {{ $link['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>    
                    @endforeach
                @endif
            </div>
            
        </div>
    @endif

    <div class="flex justify-between  px-[60px] py-[13px] bg-[#77777] absolute bottom-0 left-0 w-full" style='background:#fff'>
        <p class="text-[14px] text-center block w-full" style='color:#000'>
            @lang('shop::app.components.layouts.footer.footer-text')
        </p>
    </div>
</footer>

{!! view_render_event('bagisto.shop.layout.footer.after') !!}
