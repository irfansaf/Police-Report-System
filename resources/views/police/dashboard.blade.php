<x-police-layout>
    <div class="w-full h-screen flex justify-between items-center mt-10">
        <div class="w-full h-screen flex items-center flex-col gap-14 overflow-y-auto">

            @if (session('success'))
                <x-alert-success :message="session('success')" class="mb-4" />
            @endif
            @foreach ($reports as $report)
                <div class="w-4/5 h-32" onclick="selectReport(event, {{ $report->id }})"
                    data-title="{{ $report->title }}" data-time="{{ $report->created_at }}"
                    data-location="{{ $report->location }}" data-description="{{ $report->description }}"
                    data-image="{{ asset($report->images[0]->image_path) }}">
                    <div class="w-full h-44 border-2 border-white rounded-3xl flex justify-between">
                        <div class="w-full h-44 flex justify-center items-center gap-2">
                            <div class="w-2/6 h-36 pl-2">
                                <img src="{{ asset($report->images->first()->image_path) }}" alt="image"
                                    class="w-full h-full rounded-3xl">
                            </div>
                            <div class="w-4/6 h-44 flex flex-col justify-center items-center">
                                <div class="w-full flex flex-col border-b-2 border-white ">
                                    <div>
                                        <div class="font-medium text-lg">{{ $report->title }}</div>
                                        <div class="font-medium text-normal">{{ $report->user->name }}</div>
                                    </div>
                                    <div class="w-full text-right pr-2">
                                        <span class="font-normal text-lg created-at">{{ $report->created_at }}</span>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="font-normal text-normal">{{ $report->location }}</div>
                                </div>
                            </div>
                            <div class="w-8 flex h-full justify-center rounded-r-3xl">
                                <div class="w-8 h-8 text-black font-bold cursor-pointer bg-white rounded-full flex justify-center items-center"
                                    onclick="toggleOptions()">V</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="options absolute top-44 left-96 ml-44 w-20 h-28 bg-white text-blue-800 flex flex-col justify-center items-center rounded-2xl gap-2 hidden">
                        <div class="cursor-pointer" data-action="accept"
                            onclick="updateReportStatus(event, {{ $report->id }})"> ACCEPT </div>
                        <div class="cursor-pointer" data-action="reject"
                            onclick="updateReportStatus(event, {{ $report->id }})"> REJECT </div>
                        <div class="cursor-pointer" data-action="close"
                            onclick="updateReportStatus(event, {{ $report->id }})"> CLOSE </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="w-full h-screen items-center flex-col">
            <div class="w-full min-h-screen flex items-center flex-col gap-5 px-10">
                <div class="text-2xl font-semibold text-left w-full">TITLE OF CASE :
                    <span id="report-title" class="text-xl">Title</span>
                </div>
                <div class="w-4/5 h-44 border-2 border-white rounded-3xl flex justify-center items-center">
                    <img id="report-image" src="" alt="report-image"
                        class="w-full h-full object-cover rounded-3xl">
                </div>
                <div class="text-2xl font-semibold text-left w-full">Time :
                    <span id="report-time" class="text-xl">Time</span>
                </div>
                <div class="text-2xl font-semibold text-left w-full">Location :
                    <span id="report-location" class="text-xl">Location</span>
                </div>
                <div class="text-xl font-semibold text-left w-full pt-4 border-t border-white">Description :
                    <span id="report-description" class="text-base">Description</span>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            const createdAt = document.querySelector('.created-at').textContent;
            const formattedDate = formatDate(createdAt);
            document.querySelector('.created-at').textContent = formattedDate;

            function toggleOptions() {
                const optionsElement = document.querySelector('.options');
                optionsElement.classList.toggle('hidden');
            }

            function selectReport(event, reportId) {
                const targetElement = event.currentTarget;
                const title = targetElement.dataset.title;
                const location = targetElement.dataset.location;
                const timeString = targetElement.dataset.time;
                const description = targetElement.dataset.description;
                const imageURI = targetElement.dataset.image;

                const time = formatDate(timeString);

                document.getElementById('report-title').innerText = `${title}`;
                document.getElementById('report-location').innerText = `${location}`;
                document.getElementById('report-time').innerText = `${time}`;
                document.getElementById('report-description').innerText = `${description}`;
                document.getElementById('report-image').src = imageURI;
            }

            function updateReportStatus(event, reportId) {
                const action = event.target.getAttribute('data-action');
                axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute(
                    'content');

                axios.post('/reports/' + reportId + '/update-status', {
                        action: action
                    })
                    .then(function(response) {
                        if (response.data.success) {
                            // Reload the page to update the list of reports
                            location.reload();
                        } else {
                            // Show an error message if something went wrong
                            alert(response.data.message);
                        }
                    })
                    .catch(function(error) {
                        console.log(error);
                    })
            }

            function formatDate(dateString) {
                const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ];

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
</x-police-layout>
