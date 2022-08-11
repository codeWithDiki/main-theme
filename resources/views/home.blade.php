@extends('layouts.app')

@section('title', 'Welcome')
@section('hero-header', 'Welcome')
@section('hero-content', "Hello! I'm Diki Akbar Asyidiq, i'm is a fullstack web developer, and this is my personal blog!")

@section('app-content')
    <div class="py-2 space-y-6">
        @livewire('home-new-post')

        <div class="w-full rounded-lg py-3 space-y-3">
            <h1 class="text-md text-lg font-bold text-primary-500 pb-2 border-b border-gray-300">
                Most Popular Articles
            </h1>
            @if($mostPopularArticles->count() > 0)
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-3">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4713844313996330"
                        crossorigin="anonymous"></script>
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-format="fluid"
                        data-ad-layout-key="-6y+cz-1t-o+if"
                        data-ad-client="ca-pub-4713844313996330"
                        data-ad-slot="1071481193"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    @foreach($mostPopularArticles as $post)
                        @include('components.post-card', ['post' => $post])
                    @endforeach
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4713844313996330"
                        crossorigin="anonymous"></script>
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-format="fluid"
                        data-ad-layout-key="-6y+cz-1t-o+if"
                        data-ad-client="ca-pub-4713844313996330"
                        data-ad-slot="1071481193"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            @else
                @include('components.empty', ["message" => "No data found."])
            @endif
        </div>
    </div>
@endsection
