<div class="w-full">
    <div class="py-5">
        <form class="space-y-2 md:space-y-4" action="#">
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    username</label>
                <input type="username" name="username" id="username"
                    class="bg-white border text-sm rounded-lg block w-full p-1.5  dark:placeholder-black-300"
                    placeholder="company123" required="">
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    email</label>
                <input type="email" name="email" id="email"
                    class="bg-white border text-sm rounded-lg block w-full p-1.5  dark:placeholder-black-300"
                    placeholder="name@company.com" required="">
            </div>
            <div>
                <label for="password"
                    class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••"
                    class="bg-white border text-sm rounded-lg block w-full p-1.5  dark:placeholder-black-300"
                    required="">
            </div>
            <div>
                <label for="phoneNumber" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Your Phone
                    Number</label>
                <input type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="089812345"
                    class="bg-white border text-sm rounded-lg block w-full p-1.5  dark:placeholder-black-300"
                    required="">
            </div>
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="terms" aria-describedby="terms" type="checkbox"
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                        required="">
                </div>
                <div class="ml-3 text-sm">
                    <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a
                            class="font-medium text-primary-600 hover:underline dark:text-primary-500"
                            href="#">Terms and Conditions</a></label>
                </div>
            </div>
            <button type="submit"
                class="w-full text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Create
                an account</button>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                Already have an account? <a href="#"
                    class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
            </p>
        </form>
    </div>
</div>
