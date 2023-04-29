@extends('client.layouts.app')
@section('container')
    @include('client.partials.navbar')
    <div class="w-full min-h-screen flex items-center flex-col mt-5 ">
        <div class="w-4/5 flex justify-between items-center gap-14">
            <div class="w-full rounded-3xl flex justify-center items-center flex-col gap-5 bg-white bg-opacity-20 py-8">
                <div>
                    <div class="pl-5 py-2 font-semibold text-4xl">Report your complaints
                        <span class="text-semibold text-red-600">efficiently</span>
                        <span class="text-semibold text-red-600">easily</span>
                        <span class="text-semibold text-red-600">with us</span>
                    </div>
                    <div class="pl-5 font-medium text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. </div>
                </div>
                <a href="{{ route('report') }}">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-8 rounded-full text-base">
                        Report Now
                    </button>
                </a>
            </div>
            <div class="w-full flex items-center flex-col h-64 rounded-3xl bg-white bg-opacity-10">
                <div class="font-bold text-3xl border-b-2 border-white w-full text-center py-2"> My Report</div>
                <div class="w-full h-56 overflow-auto">
                    @include('client.partials.home.report')
                    @include('client.partials.home.report')
                    @include('client.partials.home.report')
                </div>

                <div class="w-full px-6 text-right text-base font-medium py-1">
                    <a href="{{ route('yourReport') }}">
                        See More
                    </a>
                </div>
            </div>
        </div>
        <div class="w-4/5">
            <div class="text-2xl font-semibold py-5">CASES</div>
            <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md-grid-cols-2 lg:grid-cols-2">
                <a href="{{ route('detailsCase') }}">
                    @include('client.partials.home.userCase')
                </a>
                <a href="{{ route('detailsCase') }}">
                    @include('client.partials.home.userCase')
                </a>
            </div>
        </div>
        <div class="w-4/5 min-h-screen mt-8 flex flex-col gap-8">
            <div class="w-full h-64">
                @include('client.partials.home.slider')
            </div>
            <div class="w-full flex flex-col gap-4">
                <a href="{{ route('detailsNews') }}">
                    @include('client.partials.home.news')
                </a>
                <a href="{{ route('detailsNews') }}">
                    @include('client.partials.home.news')
                </a>
            </div>

        </div>
    </div>
    @include('client.partials.footer')
@endsection
