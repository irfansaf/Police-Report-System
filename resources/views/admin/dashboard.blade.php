<x-admin-layout>
    <div class="container mx-auto px-4 py-5">
        <h1 class="text-xl font-bold mb-4">Admin Dashboard - All Reports</h1>

        @if(session('success'))
            <x-alert-success :message="session('success')" class="mb-4" />
        @endif


        <div class="mt-4 flex flex-col gap-8">
            <ul class="flex">
                <li class="-mb-px mr-1">
                    <a onclick="changeTab('pending')" class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#pending">Pending</a>
                </li>
                <li class="mr-1">
                    <a onclick="changeTab('approved')" class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#approved">Approved</a>
                </li>
                <li class="mr-1">
                    <a onclick="changeTab('rejected')" class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#rejected">Rejected</a>
                </li>
            </ul>

            <!-- In the "Pending" tab -->
            <div id="pending" class="tab-content grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach($pendingReports as $report)
                    <x-report-card :report="$report" />
                @endforeach
            </div>

            <!-- In the "Approved" tab -->
            <div id="approved" class="tab-content grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach($approvedReports as $report)
                    <x-report-card :report="$report" />
                @endforeach
            </div>

            <!-- In the "Rejected" tab -->
            <div id="rejected" class="tab-content grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach($rejectedReports as $report)
                    <x-report-card :report="$report" />
                @endforeach
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            const createdAt = document.querySelector('.created-at').textContent;
            const formattedDate = formatDate(createdAt);
            document.querySelector('.created-at').textContent = formattedDate;

            function changeTab(tabName) {
                // Get all tab content elements
                const tabContents = document.getElementsByClassName('tab-content');

                // Hide all tab content elements
                for (let i = 0; i < tabContents.length; i++) {
                    tabContents[i].classList.add('hidden');
                }

                // Show the selected tab content
                document.getElementById(tabName).classList.remove('hidden');
            }

            // Set the initial tab to "pending"
            changeTab('pending');

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
</x-admin-layout>
