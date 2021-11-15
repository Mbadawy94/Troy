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
                <a href="{{route('logout')}}" class="btn btn-block btn-secondary">{{__('form.Logout')}}</a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
