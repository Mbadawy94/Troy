<!-- Navbar -->
<nav class=" navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">{{__('form.Home')}}</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <div class="">
                <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="btn btn-info">En</i></a>
                <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}" class="btn btn-info">Ar</i></a>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/admin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{__('form.Dashboard')}}</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{__('form.Log in')}}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">{{__('form.Register')}}</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
