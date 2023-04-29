@extends('client.layouts.app')
@section('container')
    @include('client.partials.navbar')
    <div class="w-full h-screen flex flex-col justify-center items-center">
        <div class="w-4/5 flex text-4xl gap-5">
            <div id="photo" class="cursor-pointer"><i class="fa fa-camera"></i></div>
            <div class="mt-5 w-2/5 h-1 border-t-4 border-white"></div>
            <div id="category" class="cursor-pointer"><i class="fa fa-list-check"></i></div>
            <div class="mt-5 w-2/5 h-1 border-t-4 border-white"></div>
            <div id="description" class="cursor-pointer"><i class="fa fa-pen"></i></i></div>
        </div>
        <div  id="photoField" class="w-4/5 py-10">
            @include('client.partials.report.upload')
        </div>
        <div id="categoryField" class="w-4/5 py-10 hidden" >
            @include('client.partials.report.category')
        </div>
        <div id="descriptionField" class="w-4/5 py-10 hidden" >
            @include('client.partials.report.description')
        </div>
    </div>
    @include('client.partials.footer')
@endsection
