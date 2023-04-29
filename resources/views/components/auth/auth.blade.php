@extends('client.layouts.app')
@section('container')
    <section class="min-h-screen">
        @include('client.partials.navbar')
        <div class="flex flex-col items-center justify-center px-6 py-4 mx-auto ">
            <div class="w-3/5 border-b-2 border-white flex gap-6 py-2">
                <div id='signUpBtn'
                    class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-8 rounded-full text-base border border-white cursor-pointer">
                    Sign Up</div>
                <div id="signInBtn"
                    class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-8 rounded-full text-base border border-white cursor-pointer">
                    Sign In</div>
            </div>
            <div id='signUp' class="w-3/6">
                @include('auth.signUp')
            </div>
            <div id='signIn' class="w-3/6 hidden ">
                @include('auth.signIn')
            </div>
        </div>
    </section>
@endsection
