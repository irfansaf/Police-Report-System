<x-app-layout>
    <div class="w-full min-h-screen flex items-center flex-col mt-5 px-4">
        <div class="w-full h-full lg:w-4/5 flex flex-col lg:flex-row justify-between items-center gap-5 lg:gap-14">
            <div
                class="w-full rounded-3xl flex justify-center items-center flex-col gap-5 bg-white bg-opacity-10 py-8 mb-5 lg:mb-0">
                <div>
                    <div class="pl-5 py-2 font-semibold text-4xl">Report your complaints
                        <span class="text-semibold text-red-600">efficiently</span>
                        <span class="text-semibold text-red-600">easily</span>
                        <span class="text-semibold text-red-600">with us</span>
                    </div>
                    <div class="pl-5 font-medium text-xl">make your neighborhood safe and comfortable</div>
                </div>
                <a href="{{ route('create-report-form') }}">
                    <button
                        class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-8 rounded-full text-base">
                        Report Now
                    </button>
                </a>
            </div>
            <div class="w-full h-64 rounded-3xl bg-white bg-opacity-10">
                <div class="font-bold text-3xl border-b-2 border-white w-full text-center py-2"> My Report</div>
                <div class="w-full h-56 overflow-auto">
                    @foreach ($userReports as $userReport)
                        <div aria-label="group of cards" tabindex="0" class="focus:outline-none w-full">
                            <div class="lg:flex items-center justify-center w-full">
                                <div tabindex="0" aria-label="card 1"
                                    class="focus:outline-none py-2 px-2 shadow rounded flex justify-center items-center">
                                    <div class="px-2">
                                        <p tabindex="0"
                                            class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">
                                            {{ $userReport->description }}
                                        </p>
                                    </div>
                                    <div
                                        class="font-medium {{ $userReport->status == 'rejected' ? 'text-red-600' : ($userReport->status == 'closed' ? 'text-green-600' : 'text-yellow-500') }}">
                                        {{ ucfirst($userReport->status) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="w-full lg:w-4/5 px-4 mx-auto">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-semibold py-5">CASES</div>
                <form method="GET" action="{{ route('dashboard') }}" class="flex items-center">
                    <label for="status" class="mr-2 text-white">Status:</label>
                    <select name="status" id="status" class="rounded p-1 bg-white text-gray-700">
                        <option value="">All</option>
                        <option value="approved">Approved</option>
                        <option value="investigation">Investigation</option>
                        <option value="rejected">Rejected</option>
                        <option value="closed">Closed</option>
                    </select>
                    <button type="submit" class="ml-2 bg-blue-500 text-white rounded p-1 hover:bg-blue-700">Filter</button>
                </form>
            </div>
            <div class="grid gap-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                @foreach ($reports as $report)
                    <a href="{{ route('report.show', $report->id) }}">
                        <div class="w-full h-auto bg-white bg-opacity-10 rounded-3xl flex flex-col md:flex-row py-2 px-2">
                            <div class="w-full w-3/6 md:w-3/6 h-full flex flex-col justify-center items-center">
                                @if($report->images->first())
                                    <img src="{{ asset($report->images->first()->image_path) }}" alt="s" class="w-full h-44 rounded-3xl mt-8">
                                @else
                                    <img src="{{ asset('images/default.jpg') }}" alt="s" class="w-full h-44 rounded-3xl mt-8">
                                @endif
                            </div>
                            <div class="w-full md:w-4/6 h-auto pl-4">
                                <div class="w-full flex flex-col border-b-2 border-white py-1 gap-2">
                                    <div>
                                        <div class="font-base text-base">{{ $report->title }}</div>
                                        <div class="w-full font-base text-md text-right text-white">({{ $report->user->email }})
                                        </div>
                                    </div>
                                    <div class="pr-2">
                                        <div class="font-normal text-base">{{ $report->location }}</div>
                                        <span class="font-normal text-base created-at">{{ ($report->created_at->format('d F Y \a\t h:i A')) }}</span>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="font-normal text-base"> Description : {{ Illuminate\Support\Str::limit($report->description, 100, '...') }} </div>
                                </div>
                                <div class="flex justify-end mt-4">
                                    @if($report->status === 'approved')
                                        <span class="text-green-500 font-bold">{{ $report->status }}</span>
                                    @elseif($report->status === 'investigation')
                                        <span class="text-yellow-500 font-bold">{{ $report->status }}</span>
                                    @elseif($report->status === 'rejected')
                                        <span class="text-red-500 font-bold">{{ $report->status }}</span>
                                    @elseif($report->status === 'closed')
                                        <span class="text-blue-600-500 font-bold">{{ $report->status }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            {{ $reports->links() }}
        </div>
        <div class="w-full lg:w-4/5 mt-8 mx-auto flex flex-col gap-8">
            <div class="w-full h-64 lg:h-96">
                @include('partials.dashboard.slider')
            </div>
        </div>
        @include('layouts.footer')
    </div>
</x-app-layout>
