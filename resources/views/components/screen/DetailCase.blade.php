@extends('layouts.app')
@section('container')
    @include('partials.navbar')
    <div class="w-full min-h-screen flex flex-col justify-center items-center">
        <div class="text-3xl font-semibold">TITLE OF CASE </div>
        <div class="w-4/5 h-full flex justify-center gap-10 mt-10 border border-white">
            <img src="image/p.jpg" alt="" class="w-full rounded-lg">
            <div class="text-xl font-semibold text-left w-full pt-4 border-t border-white border border-white">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, quaerat
                doloremque dolor illum odio exercitationem praesentium iste numquam in beatae aut asperiores
                neque tempore, ad earum expedita velit nobis facere?
            </div>
        </div>
        <div class="w-4/5 h-full flex items-center flex-col mt-8">
            <div class="w-full flex items-center flex-col gap-5">
                <div class="text-2xl font-semibold text-left w-full">
                    Medan Merdeka, no 77
                </div>
                <div class="text-2xl font-semibold text-left w-full">
                    9.34 am
                </div>
            </div>
        </div>
        <div class="w-4/5 flex justify-end items-end">
            uploaded by irfan at 10.11 AM
        </div>
    </div>
    @include('partials.footer')
@endsection
