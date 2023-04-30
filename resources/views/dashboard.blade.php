<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto px-4 py-5">
                    <h1 class="text-xl font-bold mb-4 text-gray-700">My Reports</h1>

                    @if(session('success'))
                        <x-alert-success :message="session('success')" class="mb-4" />
                    @endif

                    <div class="grid grid-cols-1 gap-4">
                        @foreach($reports as $report)
                            <x-report-card :report="$report" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
