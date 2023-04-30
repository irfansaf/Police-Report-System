<x-app-layout>
    <div class="container mx-auto px-4 py-5">
        <h1 class="text-xl font-bold mb-4">Admin Dashboard - All Reports</h1>

        @if(session('success'))
            <x-alert-success :message="session('success')" class="mb-4" />
        @endif


        <div class="mt-4">
            <ul class="flex border-b">
                <li class="-mb-px mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#pending">Pending</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#approved">Approved</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#rejected">Rejected</a>
                </li>
            </ul>

            <!-- In the "Pending" tab -->
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach($pendingReports as $report)
                    <x-report-card :report="$report" />
                @endforeach
            </div>

            <!-- In the "Approved" tab -->
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach($approvedReports as $report)
                    <x-report-card :report="$report" />
                @endforeach
            </div>

            <!-- In the "Rejected" tab -->
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach($rejectedReports as $report)
                    <x-report-card :report="$report" />
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
