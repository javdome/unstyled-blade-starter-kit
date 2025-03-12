<section>
    <header>
        <h2>{{ __('Delete Account') }}</h2>

        <p>
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.destroy') }}">
        @csrf
        @method('delete')

        <div>
            <label for="password" class="sr-only">{{ __('Password') }}</label>
            <input id="password" name="password" type="password" placeholder="{{ __('Password') }}"/>
            <x-input-error :messages="$errors->userDeletion->get('password')" class="" />
        </div>

        <div>
            <button type="submit" onclick="return confirm('{{ __('Are you sure you want to delete your account?') }}')">{{ __('Delete Account') }}</button>
        </div>
    </form>

</section>
