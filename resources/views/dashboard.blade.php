<x-app-layout>
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
                <a href="{{ route('create-report-form') }}">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-8 rounded-full text-base">
                        Report Now
                    </button>
                </a>
            </div>
            <div class="w-full flex items-center flex-col h-64 rounded-3xl bg-white bg-opacity-10">
                <div class="font-bold text-3xl border-b-2 border-white w-full text-center py-2"> My Report</div>
                <div class="w-full h-56 overflow-auto">
                    @foreach($reports as $report)
                    <div aria-label="group of cards" tabindex="0" class="focus:outline-none w-full">
                        <div class="lg:flex items-center justify-center w-full">
                            <div tabindex="0" aria-label="card 1" class="focus:outline-none py-2 px-2 shadow rounded flex justify-center items-center">
                                <div class="px-2">
                                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">
                                        {{ $report->description }}
                                    </p>
                                </div>
                                <div class="font-medium {{ $report->status == 'rejected' ? 'text-red-600' : ($report->status == 'closed' ? 'text-green-600' : 'text-yellow-500') }}">
                                    {{ ucfirst($report->status) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="w-full px-6 text-right text-base font-medium py-1">
                    <a href="">
                        See More
                    </a>
                </div>
            </div>
        </div>
        <div class="w-4/5">
            <div class="text-2xl font-semibold py-5">CASES</div>
            <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md-grid-cols-2 lg:grid-cols-2">
                @foreach($reports as $report)
                <a href="">
                    <div class="w-full h-48 bg-white bg-opacity-10 rounded-3xl flex py-2">
                        <div class="w-3/6 h-44">
                            <img src="{{ asset($report->images->first()->image_path) }}" alt="s" class="w-full h-44 rounded-3xl">
                        </div>
                        <div class="w-4/6 h-44 pl-4 overflow-hidden">
                            <div class="w-full flex border-b-2 border-white py-1">
                                <div>
                                    <div class="font-medium text-xl">{{ $report->title }}</div>
                                    <div class="font-medium text-xl">({{ $report->user->email }})</div>
                                </div>
                                <div class="w-full text-right pr-2">
                                    <div class="font-normal text-lg">{{ $report->location }}</div>
                                    <div class="font-normal text-lg">{{ $report->created_at }}</div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="font-normal text-base"> Description : {{ $report->description }} </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        <div class="w-4/5 min-h-screen mt-8 flex flex-col gap-8">
            <div class="w-full h-64">
                @include('partials.dashboard.slider')
            </div>
{{--            <div class="w-full flex flex-col gap-4">--}}
{{--                <a href="">--}}
{{--                    @include('layouts.footer')--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </div>
</x-app-layout>
