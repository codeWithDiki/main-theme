@extends('layouts.app')

@section('title', $post->title)
@section('hero-banner', $post_banner)
@section('hero-banner-alt', $post->title)
@section('hero-header', $post->title)
@section('hero-content', $post->excerpt)


@section('app-content')
    <div class="py-2 space-y-6">
        <div class="w-full rounded-lg py-3 space-y-3">
            <div class="py-3 rounded-xl border bg-white">
                <div class="prose lg:prose-xl mx-auto px-4">
                    {!! $post->content !!}
                </div>
            </div>
            <div class="flex justify-end text-primary-500 px-4">
                <h1 class="flex justify-between gap-3 items-center">
                    @svg('heroicon-o-clock', 'w-5 h-5')
                    <div class="text-sm font-bold">
                        {{ $post->published_at?->format('d/m/Y H:i') }}
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4713844313996330"
                            crossorigin="anonymous"></script>
                        <ins class="adsbygoogle"
                            style="display:block; text-align:center;"
                            data-ad-layout="in-article"
                            data-ad-format="fluid"
                            data-ad-client="ca-pub-4713844313996330"
                            data-ad-slot="5920396500"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </h1>
            </div>
        </div>
    </div>
@endsection
