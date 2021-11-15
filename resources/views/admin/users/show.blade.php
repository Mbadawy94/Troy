@extends('admin.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> {{__('form.User Details')}} </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{__('form.Home')}}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">{{__('form.Users')}}</a></li>
              <li class="breadcrumb-item active">{{ $user->name }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">

              <h3 class="d-inline-block ">{{__('form.Name')}} : {{ $user->name }}</h3>

            </div>
          <div class="row">

              <h3 class="d-inline-block ">{{__('form.Email')}} : {{ $user->email }}</h3>
            </div>

            <div class="row">

              <h3 class="d-inline-block ">{{__('form.Phone')}} : {{ $user->phone }}</h3>

            </div>
          <div class="row">

              <h3 class="d-inline-block ">{{__('form.Country')}} : {{ $user->country }}</h3>
            </div>
            <div class="row">

              <h3 class="d-inline-block ">{{__('form.City')}} : {{ $user->city }}</h3>

            </div>
          <div class="row">

              <h3 class="d-inline-block ">{{__('form.Address')}} : {{ $user->address}}</h3>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
