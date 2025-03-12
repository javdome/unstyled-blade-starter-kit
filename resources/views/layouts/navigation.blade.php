<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div>
        <div>
            <div>
                <!-- Logo -->
                <div>
                    <a href="{{ route('dashboard') }}">
                        Logo
                        {{-- <x-application-logo /> --}}
                    </a>
                </div>

                <!-- Navigation Links -->
                <div>
                    {{-- active="request()->routeIs('dashboard') --}}
                    <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                </div>
            </div>

            <!-- Settings -->
            <div>
                <p>{{ Auth::user()->name }}</p>
                
                <a href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">{{ __('Log Out') }}</button>
                </form> 

            </div>
        </div>
    </div>

</nav>
