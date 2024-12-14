<x-layouts.app>
    <div class="container sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 p-6 z-100 bg-gray-300 w-full container">
                <div class="container mx-auto flex justify-end">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 mr-4 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm">Home</a>
                        <form id="logout" action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            {{--                            {{ csrf_field() }}--}}
                            <button type="submit" class="font-semibold text-gray-600 mr-4 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm " >
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm ">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
        @endif
    </div>
</x-layouts.app>
