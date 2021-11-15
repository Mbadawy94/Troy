<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin" class="nav-link">{{__('form.Home')}}</a>
        </li>
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

</div>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <div class="">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    @foreach(config('app.available_locales') as $locale)
                       
                            <a href="{{ request()->url()}}?language={{ $locale }}"
                                class="@if (app()->getLocale() == $locale) border-indigo-400 @endif inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out">
                                [{{ strtoupper($locale) }}]  
                            </a>
                       
                    @endforeach
                </div>
                <a href="{{route('logout')}}" class="btn btn-block btn-secondary">{{__('form.Logout')}}</a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
