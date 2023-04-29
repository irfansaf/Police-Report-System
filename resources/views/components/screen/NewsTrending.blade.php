@extends('client.layouts.app')
@section('container')
    @include('client.partials.navbar')
    <div class="w-full px-10">
        <div class="text-2xl font-semibold py-5">NEWS TRENDING</div>
        <div class="grid gap-10 grid-cols-1 sm:grid-cols-2 md-grid-cols-2 lg:grid-cols-2">
            <a href="{{ route('detailsNews') }}">
                @include('client.partials.news.allNewsTrending')
            </a>
            <a href="{{ route('detailsNews') }}">
                @include('client.partials.news.allNewsTrending')
            </a>
            <a href="{{ route('detailsNews') }}">
                @include('client.partials.news.allNewsTrending')
            </a>
            <a href="{{ route('detailsNews') }}">
                @include('client.partials.news.allNewsTrending')
            </a>
        </div>
    </div>
    @include('client.partials.footer')
@endsection
