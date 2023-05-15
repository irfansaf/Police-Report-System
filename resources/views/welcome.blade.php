<x-app-layout>
    <div class="w-full min-h-screen flex flex-col items-center text-white">
        <div class="w-5/6 flex justify-between items-center gap-20">
            <div class="w-full h-3/5  flex  justify-center items-center gap-10 flex-col">
                <div class="ml-6 flex  flex-col gap-5">
                    <div class="circle2 rounded-full blur-3xl"></div>
                    <div class="font-semibold text-3xl text-left z-10">
                        Report your complaints, create
                        a comfortable and safe our
                        environment.
                    </div>
                    <div class="font-medium text-lg  text-left z-10">
                        Make your environment comfortable
                        and peaceful by reporting easily and simply through our website
                    </div>
                </div>
                <div class="w-full flex justify-center items-center gap-5 z-10">
                    <a href="{{ route('register') }}">
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-8 rounded-full text-base">
                            Register
                            <i class="ml-2 fa fa-arrow-right"></i>
                        </button>
                    </a>
                    <button
                        class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-5 rounded-full text-base">
                        Learn More
                    </button>
                </div>
            </div>

            <div class="w-full flex justify-center items-center">
                <div class="circle rounded-full blur-2xl"></div>
                <div class="w-4/5 z-10">
                    <img src="image/icon.png" alt="">
                </div>
            </div>
        </div>
        <div class="w-full py-5 bg-white bg-opacity-10 flex flex-col justify-center gap-4">
            <div class="font-medium text-2xl text-white pl-16">Latest News</div>
            <div class="w-full overflow-hidden flex justify-center items-center  px-16">
                @include('partials.landing.slider')
            </div>
        </div>
        <div class="w-full min-h-screen flex items-center p-5 flex-col gap-5 mt-8">
            <div class="w-full flex flex-col items-center gap-8">
                <div class="font-semibold text-3xl"> OUR SERVICE</div>
                <div class="w-3/5 h-32 flex justify-center items-center gap-8">
                    @include('partials.landing.service')
                </div>
            </div>
            <div class="w-4/5 flex justify-between items-center">
                <div class="circle4 rounded-full blur-2xl"></div>
                <div class="w-4/5 z-10"><img src="image/started.png" alt=""></div>
                <div class="circle5 rounded-full blur-2xl"></div>
                <div
                    class="w-4/5 h-52 border border-white-200 mb-20 flex flex-col justify-center items-center rounded-xl containerss
                z-10">
                    <div class="font-medium text-2xl">GET STARTED NOW</div>
                    <div class="w-full p-5">
                        @include('partials.landing.getStarted')
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
