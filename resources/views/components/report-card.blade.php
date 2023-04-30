@props(['report'])

<div class="w-full h-auto border-2 border-white rounded-3xl flex flex-col p-4">
    <div class="w-full h-44">
        @if ($report->images->count() > 0)
            <img src="{{ asset($report->images->first()->image_path) }}" alt="Report image" class="w-full h-44 object-cover">
        @else
            <img src="https://via.placeholder.com/150" alt="No image available" class="w-full h-44 object-cover">
        @endif
    </div>
    <div class="w-full mt-4 flex flex-col justify-between flex-grow">
        <div class="flex justify-between items-start">
            <div>
                <div class="font-medium text-xl">{{ $report->title }}</div>
                <div class="font-medium text-base">{{ $report->user->email }}</div>
            </div>
            <div class="text-right">
                <div class="font-normal text-lg">{{ $report->location }}</div>
                <div class="font-normal text-lg">{{ $report->created_at->format('Y-m-d H:i') }}</div>
            </div>
        </div>
        <div class="font-normal text-base mt-2">Description: {{ $report->description }}</div>
        <div class="flex justify-end mt-4">
            <form action="{{ route('admin.approve', $report->id) }}" method="post">
                @csrf
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Approve</button>
            </form>
            <form action="{{ route('admin.reject', $report->id) }}" method="post" class="ml-2">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Reject</button>
            </form>
        </div>
    </div>
</div>
