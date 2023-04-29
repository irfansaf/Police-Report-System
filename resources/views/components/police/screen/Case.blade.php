@extends('police.layouts.app')
@section('container')
    <div class="w-full h-screen flex justify-between items-center mt-5">
        <div class="w-full h-screen flex items-center flex-col gap-20">
            <div class="w-4/5 h-32">
                @include('police.partials.case')
            </div>
        </div>
        <div class="w-full h-screen items-center flex-col">
            @include('police.partials.detailsCase')
        </div>
    </div>
@endsection
