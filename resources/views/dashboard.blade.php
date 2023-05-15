<x-app-layout>
    <div class="w-full min-h-screen flex items-center flex-col mt-5 px-4">
        <div class="w-full lg:w-4/5 flex flex-col lg:flex-row justify-between items-center gap-5 lg:gap-14">
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
                    @foreach ($reports as $report)
                        <div aria-label="group of cards" tabindex="0" class="focus:outline-none w-full">
                            <div class="lg:flex items-center justify-center w-full">
                                <div tabindex="0" aria-label="card 1"
                                    class="focus:outline-none py-2 px-2 shadow rounded flex justify-center items-center">
                                    <div class="px-2">
                                        <p tabindex="0"
                                            class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">
                                            {{ $report->description }}
                                        </p>
                                    </div>
                                    <div
                                        class="font-medium {{ $report->status == 'rejected' ? 'text-red-600' : ($report->status == 'closed' ? 'text-green-600' : 'text-yellow-500') }}">
                                        {{ ucfirst($report->status) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="w-full lg:w-4/5 px-4 mx-auto">
            <div class="text-2xl font-semibold py-5">CASES</div>
            <div class="grid gap-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                @foreach ($reports as $report)
                    <a href="">
                        <div class="w-full h-auto bg-white bg-opacity-10 rounded-3xl flex flex-col md:flex-row py-2 px-2">
                            <div class="w-full w-3/6 md:w-3/6 h-full flex flex-col justify-center items-center">
                                <img src="{{ asset($report->images->first()->image_path) }}" alt="s"
                                    class="w-full h-44 rounded-3xl mt-8">
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
                                        <span class="font-normal text-base created-at">{{ ($report->created_at) }}</span>
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
        <div class="w-full lg:w-4/5 mt-8 mx-auto flex flex-col gap-8">
            <div class="w-full h-64 lg:h-96">
                @include('partials.dashboard.slider')
            </div>
        </div>

    </div>

    @push('scripts')
        <script>
            const createdAt = document.querySelector('.created-at').textContent;
            const formattedDate = formatDate(createdAt);
            document.querySelector('.created-at').textContent = formattedDate;

            function formatDate(dateString) {
                const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

                const date = new Date(dateString);
                const day = date.getDate();
                const month = months[date.getMonth()];
                const year = date.getFullYear();
                let hours = date.getHours();
                let minutes = date.getMinutes();

                // Pad single-digit hours and minutes with a leading zero
                hours = hours.toString().padStart(2, '0');
                minutes = minutes.toString().padStart(2, '0');

                return `${day} ${month} ${year} at ${hours}:${minutes}`;
            }
        </script>
    @endpush
</x-app-layout>
