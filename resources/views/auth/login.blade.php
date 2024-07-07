<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" style="direction: rtl" />

        <x-splade-form action="{{ route('login') }}" class="space-y-4">
            <!-- Email Address -->
            <x-splade-input id="email" type="email" name="email" :label="__('البريد الإلكتروني')" required autofocus />
            <x-splade-input id="password" type="password" name="password" :label="__('كلمة المرور')" required autocomplete="current-password" />
            {{-- <x-splade-checkbox id="remember_me" name="remember" :label="__('تذكرني')" /> --}}

            <div class="flex items-center justify-start">
                {{-- @if (Route::has('password.request'))
                    <Link class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('هل نسيت كلمة المرور ؟') }}
                    </Link>
                @endif --}}

                <x-splade-submit class="ml-3 primary-button" :label="__('دخول')" />
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout>
