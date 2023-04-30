<x-police-layout>
    <div class="w-full h-screen flex justify-between items-center mt-5">
        <div class="w-full h-screen flex items-center flex-col gap-28 overflow-y-auto">
            @if(session('success'))
                <x-alert-success :message="session('success')" class="mb-4" />
            @endif
            @foreach($reports as $report)
            <div class="w-4/5 h-32" onclick="selectReport(event, {{ $report->id }})" data-title="{{ $report->title }}" data-time="{{ $report->created_at }}" data-location="{{ $report->location }}" data-description="{{ $report->description }}" data-image="{{ asset($report->images[0]->image_path) }}">
                <div class="w-full h-44 border-2 border-white rounded-3xl flex">
                    <div class="w-full h-44 ">
                        <img src="{{ asset($report->images->first()->image_path) }}" alt="s" class="w-full h-44 object-cover rounded-3xl">
                    </div>
                    <div class="w-4/6 h-44 pl-4">
                        <div class="w-full flex border-b-2 border-white py-1">
                            <div>
                                <div class="font-medium text-xl">{{ $report->title }}</div>
                                <div class="font-medium text-xl">({{ $report->user->email }})</div>
                            </div>
                            <div class="w-full text-right pr-2">
                                <div class="font-normal text-lg">{{ $report->location }}</div>
                                <div class="font-normal text-lg">{{ $report->created_at }}</div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="font-normal text-base"> Description : {{ $report->description }}</div>
                        </div>
                    </div>
                    <div class="w-16 flex justify-center items-center bg-white rounded-r-3xl">
                        <div class="text-black font-bold cursor-pointer" onclick="toggleOptions(event)">V</div>
                    </div>
                </div>
                <div class="options absolute top-44 left-96 ml-44 w-20 h-28 bg-white text-blue-800 flex flex-col justify-center items-center rounded-2xl gap-2 hidden">
                    <div class="cursor-pointer" data-action="accept" onclick="updateReportStatus(event, {{ $report->id }})"> ACCEPT </div>
                    <div class="cursor-pointer" data-action="reject" onclick="updateReportStatus(event, {{ $report->id }})"> REJECT </div>
                    <div class="cursor-pointer" data-action="close" onclick="updateReportStatus(event, {{ $report->id }})"> CLOSE </div>
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
                    <img id="report-image" src="" alt="report-image" class="w-full h-full object-cover rounded-3xl">
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
            function toggleOptions(event) {
                const targetElement = event.target;
                const optionsElement = targetElement.parentElement.parentElement.nextElementSibling;

                optionsElement.classList.toggle('hidden');
            }

            function selectReport(event, reportId) {
                const targetElement = event.currentTarget;
                const title = targetElement.dataset.title;
                const location = targetElement.dataset.location;
                const time = targetElement.dataset.time;
                const description = targetElement.dataset.description;
                const imageURI = targetElement.dataset.image;

                document.getElementById('report-title').innerText = `${title}`;
                document.getElementById('report-location').innerText = `${location}`;
                document.getElementById('report-time').innerText = `${time}`;
                document.getElementById('report-description').innerText = `${description}`;
                document.getElementById('report-image').src = imageURI;
            }

            function updateReportStatus(event, reportId) {
                const action = event.target.getAttribute('data-action');
                axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                axios.post('/reports/' + reportId + '/update-status', {
                    action: action
                })
                    .then(function (response) {
                        if (response.data.success) {
                            // Reload the page to update the list of reports
                            location.reload();
                        } else {
                            // Show an error message if something went wrong
                            alert(response.data.message);
                        }
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            }
        </script>
    @endpush
</x-police-layout>
