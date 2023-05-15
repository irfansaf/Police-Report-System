<x-app-layout>
    <div class="w-full min-h-screen flex flex-col justify-center items-center">
        <div class="text-3xl font-semibold">{{ $report->title }}</div>
        <div class="w-4/5 h-full flex justify-center gap-10 mt-10 border border-white">
            <div class="w-1/2">
                @if($report->images->first())
                    <img src="{{ asset($report->images->first()->image_path) }}" alt="Report Image" class="w-full h-64 object-cover rounded-lg">
                @else
                    <img src="{{ asset('images/default.jpg') }}" alt="Default Image" class="w-full h-64 object-cover rounded-lg">
                @endif
            </div>
            <div class="w-1/2 text-xl font-semibold text-left pt-4 border-t border-white">
                Description: {{ $report->description }}
            </div>
        </div>
        <div class="w-4/5 h-full flex items-center flex-col mt-8">
            <div class="w-full flex items-center flex-col gap-5">
                <div class="text-2xl font-semibold text-left w-full">
                    Location: {{ $report->location }}
                </div>
                <div class="text-2xl font-semibold text-left w-full">
                    Time: {{ $report->created_at->format('d F Y \a\t h:i A') }}
                </div>
            </div>
        </div>
        <div class="w-4/5 flex justify-end items-end">
            Reported by: {{ $report->user->email }}
        </div>
    </div>
</x-app-layout>
