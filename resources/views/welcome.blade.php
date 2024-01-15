<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no">
    {{-- <title>{{ isset($seo_title) ? $seo_title->value() : ($title ? $title : $title_ar) }}</title> --}}
    <link href="{{ asset('assets/css/output.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('fonts/somarsans-medium.ttf') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('assets/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('assets/js/main-swiper.js') }}" defer></script>
</head>

<body class="overflow-x-hidden relative font-somar">
    <div class="relative rtl:right-10 left-10 cursor-pointer" onclick="scrollToTop()">
        <div
            class="cent bg-white z-50 w-16 h-16 shadow-xl border border-zinc-100 rounded-full drop-shadow-sm bottom-20 fixed">
            <i class="fa-solid fa-chevron-up fa-2xl text-primary"></i>
        </div>
    </div>
    <header x-data="{ open: false }" class="relative">
        <div class=" fixed inset-0 w-full h-[100dvh] bg-white z-[999] p-5" x-show="open"
            x-transition:enter="transition transform ease-out duration-1000"
            x-transition:enter-start="opacity-0 rtl:translate-x-[-100px] ltr:translate-x-[100px]"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition transform ease-in duration-1000"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-[-100px]">
            <div class=" text-end flex justify-between items-center" @click="open =!open">
                <div id="logo">
                    <a href="/"><img
                            src="{{ asset(Statamic\Statamic::tag('glide')->src(Statamic\Facades\GlobalSet::find('logo')->inCurrentSite()->data()['logo'])) }}"
                            alt="logo" class="aspect-square" width="75"></a>
                </div><i class="fa-solid fa-x text-xl text-primary"></i>
            </div>
            {{-- <form class="my-5 relative">
                <input type="search" class="w-full drop-shadow-xl ltr:-mr-10 rtl:-ml-10"
                    placeholder="{{ __('messages.search') }} ....">
                <button class=" button-sec z-50 absolute top-0 ltr:right-0 rtl:left-0"><img
                        src="{{ getImage('assets/img/search-normal.png') }}" alt="search"></button>
            </form>
            <div class="cent gap-4 text-primary font-bold py-2">
                <a href="#" class="hover:scale-105">
                    <div>
                        <div class="text-center leading-[14px] cent gap-2 ltr:order-last ltr:mt-1">
                            <img src="{{ getImage('assets/img/group-red.png') }}" alt="group" />

                        </div>
                    </div>
                </a>
                <img src="{{ getImage('assets/img/line-toggel.png') }}" alt="toggel">
                <a href="#" class="hover:scale-105 ">
                    <div class="cent gap-2 ">
                        <img src="{{ getImage('assets/img/user-red.png') }}" alt="user" />
                        <p class="text-center leading-[14px]">
                            {{ __('messages.Sign in trainees') }}
                        </p>
                    </div>
                </a>
            </div> --}}
            <div class="h-px opacity-50 bg-neutral-200 rounded-[100px] my-5"></div>
            {{-- <nav class="flex flex-col gap-6 text-lg capitalize my-5">
                <ul class="text-center text-neutral-600  font-medium leading-[14px]">
                    @php
                        $title = langContent('title');
                    @endphp
                    @foreach (Statamic::tag('nav:header') as $navItem)
                        <li class="w-full flex justify-between">
                            <a href="{{ URL::to('/' . $navItem['url']) }}">{{ $navItem[$title] }}</a>
                            <i class="fa-solid fa-chevron-left ltr:hidden"></i>
                            <i class="fa-solid fa-chevron-right rtl:hidden"></i>
                        </li>
                    @endforeach
                </ul>
            </nav> --}}
            <div class="h-px opacity-50 bg-neutral-200 rounded-[100px] my-5"></div>
            {{-- <div class="w-full relative">
                <div x-data="{ open: false }">
                    <div @click="open=!open" class="flex justify-between gap-5 cursor-pointer">
                        <div class="cent gap-2">
                            <img src="{{ getImage('assets/img/frame.png') }}" alt="frame"
                                class="aspect-square w-[24px]">
                            <span class="font-semibold" x-text="lang">ENG</span>
                        </div>
                        <i class="fa-solid fa-chevron-left ltr:hidden" x-show="!open"></i>
                        <i class="fa-solid fa-chevron-right rtl:hidden" x-show="!open"></i>
                        <i class="fa-solid fa-chevron-up" x-show="open"></i>
                    </div>
                    <div class="my-2 rtl:right-0 top-8 z-50 rounded-xl overflow-hidden w-full p-0.5 bg-white"
                        x-show="open">
                        <div class="text-start font-semibold">
                            En
                            <a href="{{ route('change.locale', ['lang' => 'en']) }}"
                                class="hover:bg-primary  rounded-xl hover:text-white cursor-pointer p-1">Eng</a>
                            <a href="{{ route('change.locale', ['lang' => 'ar']) }}"
                                class="hover:bg-primary cursor-pointer rounded-xl hover:text-white p-1">عربي</a>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class=" sticky bottom-0">
                <div class="cent gap-8 invert pt-10">
                    @foreach (Statamic\Facades\GlobalSet::find('icon_social')->inCurrentSite()->data()['social_media'] as $social)
                        <a href="{{ $social['url'] }}" target="_blank"><img
                                src="{{ getImage('storage/' . $social['icon']) }}" alt="insta" width="24"
                                height="24" /></a>
                    @endforeach
                </div>
            </div> --}}
        </div>
        {{-- <div class="  bg-neutral-900 py-[14px] hidden md:block">
            <div class="container  flex justify-between items-center  ">
                <div class="cent gap-4 text-white ">
                    <a href="" class="hover:scale-105">
                        <div class="cent gap-2">
                            <p class="text-center text-sm leading-[14px] ltr:order-last ltr:mt-1">
                                {{ __('messages.Sign in trainees') }}
                            </p>
                            <img src="{{ getImage('assets/img/user.png') }}" alt="user" />
                        </div>
                    </a>
                    <img src="{{ getImage('assets/img/line_2.png') }}" alt="">
                    <a href="#" class="hover:scale-105">
                        <div>
                            <div class="text-center text-sm leading-[14px] cent gap-2">
                                <p class="text-center text-sm leading-[14px] ltr:order-last ltr:mt-1">
                                    {{ __('messages.Sign in student') }}
                                </p>
                                <img src="{{ getImage('assets/img/group-users.png') }}" alt="group-users" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cent gap-8">
                    @foreach (getGlobal('icon_social')['social_media'] as $social)
                        <a href="{{ $social['url'] }}" target="_blank"><img
                                src="{{ getImage('storage/' . $social['icon']) }}"
                                alt="{{ $social['icon']['alt'] ?? '' }}" width="24" height="24" /></a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container py-4 flex justify-between items-center">
            <div class="cent gap-6">
                <div id="logo">
                    <a href="/"><img src="{{ getImage('storage/' . getGlobal('logo')['logo']) }}"
                            alt="logo" class="aspect-square" width="75"></a>
                </div>
                <nav
                    class="md:flex justify-center items-center hidden lg:gap-6 md:gap-3 opacity-70 text-center lg:text-lg md:text-sm capitalize">
                    @foreach (Statamic::tag('nav:header') as $navItem)
                        <a href="{{ URL::to('/' . $navItem['url']) }}"
                            class="hover:text-black hover:font-semibold duration-500 hover:text-xl">
                            {{ $navItem[$title] }}
                        </a>
                    @endforeach
                </nav>
            </div>

            <div class="cent gap-6">
                <img src="{{ getImage('assets/img/vision2030.png') }}" alt="Signature"
                    class="aspect-[2/1] w-[80px]">
                <button class="hidden md:inline-flex"><img src="{{ getImage('assets/img/search-icon.png') }}"
                        alt="search" class=" aspect-square w-[24px]"></button>
                <img class="hidden md:inline-flex" src="{{ getImage('assets/img/line.png') }}" alt="line">
                <div class="hidden md:block relative">
                    <div x-data="{ open: false }">
                        <div @click="open=!open" class="cent gap-5 cursor-pointer">
                            <img src="{{ getImage('assets/img/frame.png') }}" alt="frame"
                                class="aspect-square w-[24px]">
                            @if (app()->getLocale() == 'ar')
                                <span class="font-semibold">En</span>
                            @elseif(app()->getLocale() == 'en')
                                <span class="font-semibold">AR</span>
                            @endif
                            <i class="fa-solid fa-chevron-down" x-show="!open"></i>
                            <i class="fa-solid fa-chevron-up" x-show="open"></i>
                        </div>
                        <div class="absolute rtl:right-0 top-8 z-50 rounded-xl overflow-hidden w-full p-0.5 bg-white border"
                            x-show="open">
                            <div class="text-center font-semibold">
                                <div class="hover:bg-primary rounded-xl hover:text-white cursor-pointer p-1"><a
                                        href="{{ route('change.locale', ['lang' => 'en']) }}">Eng</a></div>
                                <div class="hover:bg-primary rounded-xl hover:text-white cursor-pointer p-1"><a
                                        href="{{ route('change.locale', ['lang' => 'ar']) }}">عربي</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <button @click="open =!open" class="inline-flex md:hidden order-last relative">
                    <img src="{{ getImage('assets/img/toggel.png') }}" width="35" height="35"
                        alt="toggel">
                </button>
            </div>
        </div> --}}
    </header>
</body>

</html>
