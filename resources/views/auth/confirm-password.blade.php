<x-guest-layout>
    <div>
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <label for="password">{{__('Password')}}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="" />
        </div>

        <div>
            <button type="submit">{{ __('Confirm') }}</button>
        </div>
    </form>
</x-guest-layout>
