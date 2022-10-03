<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="adminHeader">
        <div class="logo">
            <div class="img-logo"> <img src="{{ asset('img/google.png') }}" /></div>
            <div class="img-logo"><img src="{{ asset('img/factoria-web.png') }}" /></div>
            <div class="img-logo"><img src="{{ asset('img/logofempng.png') }}" /></div>
        </div>    
        <div class="mt-3 space-y-1">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
    </nav>