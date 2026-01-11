<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#FDCFFA] to-[#DD7BDF] px-4">

        <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8">
            
            <!-- Logo & Brand -->
            <div class="text-center mb-6">
                <img src="{{ asset('img/logo.svg') }}" alt="Purple Creations"
                     class="w-20 mx-auto mb-3">
                <h1 class="text-2xl font-bold text-purple-700">Purple Creations</h1>
                <p class="text-sm text-gray-500">Admin Panel Login</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-center" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" value="Email" />
                    <x-text-input id="email"
                        class="block mt-1 w-full rounded-lg"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" value="Password" />
                    <x-text-input id="password"
                        class="block mt-1 w-full rounded-lg"
                        type="password"
                        name="password"
                        required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mt-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox"
                            class="rounded border-gray-300 text-purple-600 shadow-sm focus:ring-purple-500"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-purple-600 hover:underline"
                           href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <!-- Button -->
                <div class="mt-6">
                    <button type="submit"
                        class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2 rounded-lg transition">
                        Login
                    </button>
                </div>
            </form>

            <!-- Footer -->
            <p class="text-center text-xs text-gray-400 mt-6">
                © {{ date('Y') }} Purple Creations. All rights reserved.
            </p>

        </div>
    </div>
</x-guest-layout>
