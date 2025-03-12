<section>
    <header>
        <h2>{{ __('Profile Information') }}</h2>

        <p>{{ __("Update your account's profile information and email address.") }}</p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div>
            <label for="name">{{__('Name')}}</label>
            <input id="name" name="name" type="text" value="{{old('name', $user->name)}}" required autofocus autocomplete="name" />
            <x-input-error class="" :messages="$errors->get('name')" />
        </div>

        <div>
            <label for="email">{{__('Email')}}</label>
            <input id="email" name="email" type="email" value="{{old('email', $user->email)}}" required autocomplete="username" />
            <x-input-error class="" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p>
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p>
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <button>{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <p>{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
