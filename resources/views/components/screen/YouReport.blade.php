@extends('client.layouts.app')
@section('container')
    @include('client.partials.navbar')
    <div class="w-full h-screen flex flex-col items-center gap-5 mt-5">
        <div class="w-full h-44 pl-44 bg-white bg-opacity-20 flex justify-center flex-col">
            <div class="w-full font-bold text-4xl"> My Report</div>
            <div class="w-full flex font-medium text-xl gap-8 py-4">
                <div id="allBtn" class="cursor-pointer">All Case</div>
                <div id="investigationBtn" class="cursor-pointer">Investigations</div>
                <div id="finishedBtn" class="cursor-pointer">Finished</div>
            </div>
        </div>
        <div id="allCase" class="w-full flex flex-col pl-44">
            @include('client.partials.case.all')
        </div>
        <div id="investigationsCase" class="w-full flex flex-col pl-44 hidden">
            @include('client.partials.case.investigations')
        </div>
        <div id="finishedCase" class="w-full flex flex-col pl-44 hidden">
            @include('client.partials.case.finished')
        </div>
    </div>
    @include('client.partials.footer')
@endsection
