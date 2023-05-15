<x-app-layout>
    <div class="container mx-auto px-4 py-5 text-gray-700">
        <h1 class="text-xl font-bold mb-4 text-white">Submit a Report</h1>

        <form action="{{ route('create-report') }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Report title -->
            <div class="mb-4">
                <label for="title" class="block mb-2 text-white">Title</label>
                <input type="text" id="title" name="title" class="w-full rounded border">
            </div>

            <!-- Report description -->
            <div class="mb-4">
                <label for="description" class="block mb-2 text-white">Description</label>
                <textarea id="description" name="description" rows="4" class="w-full rounded border"></textarea>
            </div>

            <!-- Report location -->
            <div class="mb-4">
                <label for="location" class="block mb-2 text-white">Location</label>
                <input type="text" id="location" name="location" class="w-full rounded border">
            </div>

            <!-- Report images -->
            <div class="mb-4">
                <label for="images" class="block mb-2 text-white">Images</label>
                <input type="file" id="images" name="images[]" multiple class="w-full rounded border">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </div>
    @include("layouts.footer")
</x-app-layout>
