@extends('layouts.base')


@section('favicon', theme_asset('images/logo-colored.png'))

@push('google-ads')
    @if(config('app.env', 'local') == 'production')
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4713844313996330"
        crossorigin="anonymous"></script>
    @endif
@endpush

<!-- Header Section -->
@section('header')

    <nav class="h-20 w-full fixed top-0 bg-white dark:bg-zinc-800 flex justify-center shadow z-50" x-data="mobileSidebarUtilities()">
        <div class="w-full max-w-6xl flex justify-between items-center h-full px-4">
            <figure class="relative h-full">
                <img src="{{ theme_asset('images/logo-colored.png') }}" alt="Site Logo" class="h-full">
                <a href="{{ route('home', [
                        'utm_content' => 'navigation-logo-click'
                    ]) }}" class="absolute inset-0"></a>
            </figure>
            <div class="hidden lg:flex items-center justify-start gap-3">
                @foreach($categories as $category)
                    <div class="relative text-primary-500 font-bold">
                        {{ $category->name }}
                        <a href="{{ route('category.explore', [
                                'category_slug' => $category->slug,
                                'utm_content' => 'navigation-logo-click'
                            ]) }}" class="absolute inset-0">
                        </a>
                    </div>
                @endforeach
                @livewire('search-component')
            </div>
            <button class="lg:hidden p-2 rounded-md" @click="show_sidebar_container = true" @click.debounce.500="show_sidebar_content = true">
                @svg('heroicon-o-menu', 'w-10 h-10 text-primary-500')
            </button>
        </div>
        @include('components.slide-over')
    </nav>

@endsection
<!-- End Header Section -->

@section('hero')
    <figure class="w-full mt-20 relative">
        <img src="@yield('hero-banner', theme_asset('images/banner.jpg'))" 
        class="w-full h-96 object-cover"
        alt="@yield('hero-banner-alt', 'Hero Banner')">
        <div class="absolute inset-0 flex flex-col justify-center items-center bg-gradient-to-r from-pink-400/50 via-purple-400/50 to-primary-500/50  gap-3 px-3 backdrop-blur-sm">
            <div class="w-full max-w-md py-6 px-7 bg-primary-500 bg-opacity-30 flex justify-center items-center">
                <h1 class="text-xl lg:text-4xl text-white font-bold text-center">
                    @yield('hero-header')
                </h1>
            </div>
            <p class="text-md lg:text-lg font-bold text-white max-w-md text-center">
                @yield('hero-content')
            </p>
        </div>
    </figure>
    
@endsection

<!--  Body Section -->
@section('body')
    <div class="flex flex-col lg:flex-row gap-3">
        <div class="w-full lg:w-3/4">
            @yield('app-content')
        </div>
        <div class="w-full lg:w-1/4 lg:py-5">
            <div class="sticky top-24 space-y-4">
                <div class="px-2 py-3 rounded-lg bg-white border space-y-2" data-card-type="Short Profile Card">
                    <figure class="gap-1 flex flex-col items-center">
                        <img src="{{ theme_asset('images/profile.jpg') }}" alt="" class="w-24 h-24 rounded-full border-8 border-opacity-10 border-primary-500">
                        <h1 class="text-xs">Diki Akbar Asyidiq</h1>
                    </figure>
                    <div class="space-y-1 text-sm text-center py-2 border-t">
                        <p>
                            Tech Enthusiast, Fullstack Web Developer, Software Engineer.
                        </p>
                        <div class="flex gap-3 items-center justify-center py-2">
                            <figure class="relative">
                                @svg('fab-gitlab', 'h-8 text-primary')
                                <a href="https://gitlab.com/dikiakbar1304" class="absolute inset-0" target="_BLANK"></a>
                            </figure>
                            <figure class="relative">
                                @svg('fab-github-square', 'h-8 text-primary')
                                <a href="https://github.com/codeWithDiki" class="absolute inset-0" target="_BLANK"></a>
                            </figure>
                            <figure class="relative">
                                @svg('fab-twitter-square', 'h-8 text-primary')
                                <a href="https://twitter.com/AsyidiqDiki" class="absolute inset-0" target="_BLANK"></a>
                            </figure>
                            <figure class="relative">
                                @svg('fab-facebook-square', 'h-8 text-primary')
                                <a href="https://www.facebook.com/codeWithDiki" class="absolute inset-0" target="_BLANK"></a>
                            </figure>
                        </div>
                        <div class="text-left">
                            @livewire('subscribe-email')
                        </div>
                    </div>
                </div>

                @if($tags)
                    <div class="px-2 py-3 rounded-lg bg-white border space-y-2" data-card-type="Post tag card">
                        <h1 class="text-md">
                            Tags
                        </h1>
                        <div class="flex gap-3 flex-wrap max-h-32 overflow-y-auto scrollbar-thin scrollbar-thumb-primary scrollbar-track-primary-300">
                            @foreach($tags as $tag)
                                @include('components.tag-item', ['tag' => $tag])
                            @endforeach
                        </div>
                    </div>
                @endif

                @include('components.share-card')

                @include('components.sidebar-ads')
            </div>
        </div>
    </div>
@endsection
<!-- End Body Section -->

<!-- Footer Section -->
@section('google-analytics')

    @if(config('app.env', 'local') == 'production')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-QW7DLZ6R71"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-QW7DLZ6R71');
        </script>
    @endif

@endsection
<!-- End Footer Section -->

@push('scripts')
    <script>
        function mobileSidebarUtilities()
        {
            return {
                show_sidebar_container : false,
                show_sidebar_content : false,
            };
        }
    </script>
@endpush