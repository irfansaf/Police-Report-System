<nav>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <a href="{{route('dashboard')}}">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="block h-8 w-auto lg:hidden"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                        <img class="hidden h-8 w-auto lg:block"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>
                </a>
                <div class="hidden sm:ml-32 sm:block">
                    <div class="flex space-x-4">
                        <a href="{{route('dailyReport')}}"
                            class="hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">Daily Report </a>
                        <a href="{{route('statistics')}}"
                            class="hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">Statistics</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button
                    class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-8 rounded-full text-base">
                    Login
                </button>
            </div>
        </div>
    </div>
</nav>


{{-- https://tailwindui.com/components/application-ui/navigation/navbars --}}
