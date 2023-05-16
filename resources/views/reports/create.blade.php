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

                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white dark:hover:bg-bray-800 dark:bg-white hover:bg-blue-50-100 dark:border-gray-600 dark:hover:border-white dark:hover:bg-white">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>

            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-800">Submit</button>
        </form>
    </div>
    @include("layouts.footer")
</x-app-layout>
