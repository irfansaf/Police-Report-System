@extends('client.layouts.app')
@section('container')
    @include('client.partials.navbar')
    <div class="w-4/5 min-h-screen flex flex-col justify-center items-center mt-5 ">
        <div class="w-3/5 flex justify-center items-center flex-col py-5">
            <form action="">
                <div class="w-full h-full flex justify-center items-center gap-10  ">
                    <div class="rounded-full border border-white">
                        <img src="" alt="profile" class="w-32 h-32">
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <div class="font-medium text-lg">Clear frontal face photos are important way for us to validate
                            your identity</div>
                        <div><input id="image" name="image" type="file"></div>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-end gap-4">
                    <div class="font-medium text-2xl w-4/5 text-left mt-4"> Public Profile</div>
                    <div class="w-4/5 col-span-6 sm:col-span-3">
                        <label for="title" class="block text-sm font-medium">Username</label>
                        <input type="text" name="title" autocomplete="given-name"
                            class="mt-1 focus:ring-indigo-500 border border-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md bg-transparent py-1">
                    </div>
                    <div class="w-4/5 col-span-6 sm:col-span-3">
                        <label for="title" class="block text-sm font-medium">First Name</label>
                        <input type="text" name="title" autocomplete="given-name"
                            class="mt-1 focus:ring-indigo-500 border border-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md bg-transparent py-1">
                    </div>
                    <div class="w-4/5 col-span-6 sm:col-span-3">
                        <label for="title" class="block text-sm font-medium">Last Name</label>
                        <input type="text" name="title" autocomplete="given-name"
                            class="mt-1 focus:ring-indigo-500 border border-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md bg-transparent py-1">
                    </div>
                    <div class="font-medium text-2xl w-4/5 text-left">Private Information</div>
                    <div class="font-medium text-md w-4/5 text-left">We do not share this information with other users unless explicit
                        permission is given by you</div>
                    <div class="w-4/5 col-span-6 sm:col-span-3">
                        <label for="title" class="block text-sm font-medium">Email Address</label>
                        <input type="text" name="title" autocomplete="given-name"
                            class="mt-1 focus:ring-indigo-500 border border-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md bg-transparent py-1">
                    </div>
                    <div class="w-4/5 col-span-6 sm:col-span-3">
                        <label for="title" class="block text-sm font-medium">Password</label>
                        <input type="text" name="title" autocomplete="given-name"
                            class="mt-1 focus:ring-indigo-500 border border-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md  bg-transparent py-1">
                    </div>
                    <div class="w-4/5 col-span-6 sm:col-span-3">
                        <label for="title" class="block text-sm font-medium">Address</label>
                        <input type="text" name="title" autocomplete="given-name"
                            class="mt-1 focus:ring-indigo-500 border border-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md bg-transparent py-1">
                    </div>
                    <div class="w-4/5 col-span-6 sm:col-span-3">
                        <label for="title" class="block text-sm font-medium">ID Card Number</label>
                        <input type="text" name="title" autocomplete="given-name"
                            class="mt-1 focus:ring-indigo-500 border border-black focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md text-black bg-transparent py-1">
                    </div>
                    <div class="w-4/5 flex justify-between items-end h-20">
                        <div></div>
                        <a href="">
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-8 rounded-full text-base">
                                Submit
                            </button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
