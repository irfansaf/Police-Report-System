<form action="{{ route('register') }}" method="GET" class="flex items-center justify-center items-center borde border-gray-900">
    <label for="email" class="sr-only">Email</label>
    <div class="relative w-4/5">
        <input type="text" id="email" name="email"
            class="text-sm rounded-full text-gray-700  focus:border-blue-500 block w-full pl-10 py-2.5 opacity-30"
            placeholder="Enter your email address" required>
    </div>
    <button type="submit"
        class="py-2 rounded-full border border-white px-5 text-sm bg-red-500 hover:bg-red-700 text-white absolute right-52 ">
        SIGN UP
    </button>
</form>
