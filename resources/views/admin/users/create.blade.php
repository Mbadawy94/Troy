@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper" style="min-height: 1342.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{__('form.Create User')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> {{__('form.Home')}}</a></li>
                            <li class="breadcrumb-item active"> {{__('form.Create User')}}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{ route('admin.users.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">
                                            {{__('form.Name')}}
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               id="name"
                                               name="name"
                                               placeholder="{{__('form.Enter Name')}}"
                                               value="{{ old('name') }}"
                                               required
                                               >
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="email">
                                            {{__('form.Email')}}
                                        </label>
                                        <input type="email"
                                               class="form-control"
                                               name="email"
                                               placeholder="{{__('form.Enter Email')}}"
                                               value="{{ old('email') }}"
                                               required
                                               >
                                    </div>
                                    <div class="form-group">
                                        <label for="password">
                                            {{__('form.Password')}}
                                        </label>
                                        <input type="password"
                                               class="form-control"
                                               name="password"
                                               placeholder="{{__('form.Enter Password')}}"
                                               value="{{ old('password') }}"
                                               required
                                               >
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">
                                            {{__('form.Phone')}}
                                        </label>
                                        <input type="number"
                                            class="form-control"
                                            id="phone"
                                            name="phone"
                                            placeholder="{{__('form.Enter Your Phone')}}"
                                            value="{{ old('phone') }}"
                                            required
                                            >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="country">
                                            {{__('form.Country')}}
                                        </label>
                                        <input type="text"
                                            class="form-control"
                                            id="country"
                                            name="country"
                                            placeholder="{{__('form.Enter Your Country')}}"
                                            value="{{ old('country') }}"
                                            required
                                            >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="city">
                                            {{__('form.City')}}
                                        </label>
                                        <input type="text"
                                            class="form-control"
                                            id="city"
                                            name="city"
                                            placeholder="{{__('form.Enter Your City')}}"
                                            value="{{ old('city') }}"
                                            required
                                            >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="address">
                                            {{__('form.Address')}}
                                        </label>
                                        <input type="text"
                                            class="form-control"
                                            id="address"
                                            name="address"
                                            placeholder="{{__('form.Enter Your Address')}}"
                                            value="{{ old('address') }}"
                                            required
                                            >
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{__('form.Submit')}}</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
