<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="bg-gray-100 overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    
    <!-- Left: Image -->
        <div class="w-1/2 h-screen hidden lg:block">
        <img src="{{asset('Images/books.jpg')}}" alt="Placeholder Image" class="object-cover w-full h-full">
        </div>   
    <!-- Right: Login Form --> 
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">  
            <div  class="flex items-center justify-center mx-auto">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-red-500" />
                </a>
            </div>
             <h1 class=" text-2xl font-semibold mb-4">Bienvenue sur la plateforme de gestion de documents</h1> 
             <h2 class=" text-xl text-blue-500 font-semibold mb-4">Connectez vous!!</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
