<x-guest-layout>
    <div>
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

<!-- Session Status -->
    <!-- Inform the user about the status of the login attempt (like a message for password reset) -->
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">{{__('Email')}}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="" />
        </div>

        <div>
            <button type="submit">{{ __('Email Password Reset Link') }}</button>
        </div>
    </form>
</x-guest-layout>
