<x-app-layout>
    <div class="w-full min-h-screen flex flex-col items-center text-white">
        <div class="w-5/6 flex justify-between items-center gap-20">
            <div class="w-full h-3/5  flex  justify-center items-center gap-10 flex-col">
                <div class="ml-6 flex  flex-col gap-5">
                    <div class="font-medium text-3xl text-left">
                        Report your complaints, create
                        a comfortable and safe our
                        environment.
                    </div>
                    <div class="font-normal text-lg  text-left">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, nobis. Ab pariatur saepe
                        sunt
                        voluptas
                    </div>
                </div>
                <div class="w-full flex justify-center items-center gap-5">
                    <a href="{{ route('register') }}">
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-8 rounded-full text-base">
                            Register
                            <i class="ml-2 fa fa-arrow-right"></i>
                        </button>
                    </a>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-5 rounded-full text-base">
                        Learn More
                    </button>
                </div>
            </div>
            <div class="w-full flex justify-center items-center">
                <div class="w-4/5">
                    <img src="image/icon.png" alt="">
                </div>
            </div>
        </div>
        <div class="w-full py-5 bg-white bg-opacity-20 flex flex-col justify-center gap-4">
            <div class="font-medium text-2xl text-white pl-16">Latest News</div>
            <div class="w-full overflow-hidden flex justify-center items-center  px-16">
                @include('partials.landing.slider')
            </div>
        </div>
        <div class="w-full min-h-screen flex items-center p-5 flex-col gap-5">
            <div class="w-full flex flex-col items-center gap-8">
                <div class="font-semibold text-3xl"> OUR SERVICE</div>
                <div class="w-3/5 h-32 flex justify-center items-center gap-8">
                    @include('partials.landing.service')
                    @include('partials.landing.service')
                    @include('partials.landing.service')
                </div>
            </div>
            <div class="w-4/5 flex justify-between items-center">
                <div class="w-4/5 "><img src="image/started.png" alt=""></div>
                <div
                    class="w-4/5 h-52 border border-white-200 mb-20 flex flex-col justify-center items-center rounded-xl bg-gradient-to-r from-gray-500 to-transparent
                ">
                    <div class="font-medium text-2xl">GET STARTED NOW</div>
                    <div class="w-full p-5">
                        @include('partials.landing.getStarted')
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
