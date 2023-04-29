@extends('client.layouts.app')
@section('container')
    @include('client.partials.navbar')
    <div class="w-full h-screen flex justify-center items-center flex-col">
        <div class="w-full flex justify-between h-full p-8">
            @include('client.partials.news.news')
            <div class="w-full p-10">
                <div class="w-full">
                    <div class="w-full flex items-center flex-col rounded-3xl bg-white bg-opacity-10">
                        <div class="font-bold text-3xl w-full py-2 pl-5"> ON TRENDING</div>
                        <div class="w-5/6 h-56 overflow-auto">
                            @include('client.partials.news.newsTrending')
                            @include('client.partials.news.newsTrending')
                            @include('client.partials.news.newsTrending')
                        </div>
                        <div class="w-5/6 text-right text-base font-medium mt-2 py-2">
                            <a href="{{ route('newsTrending') }}">
                                See More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('client.partials.footer')
@endsection
