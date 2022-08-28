
<nav class="navbar bg-light">
    <form class="container-fluid justify-content-start">
        <a class="btn btn-outline-success me-2" type="button"  href="{{ route('home') }}">HOME</a>
        <a class="btn btn-sm btn-outline-secondary" type="button" href="{{ route('product') }}">PRODUCT</a>
    </form>
    @if ( Auth::user())
    <form  method="POST" action="{{ route('logout') }}" x-data>
        @csrf

        <x-jet-dropdown-link href="{{ route('logout') }}"
                @click.prevent="$root.submit();">
            {{ __('Log Out') }}
        </x-jet-dropdown-link>
    </form>
    @else
    <span><a href="{{ route('login') }}">Login</a> ||
    <a href="{{ route('register') }}">Register</a></span>
    @endif
</nav>
