@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper" style="min-height: 1299.69px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{__('form.Users Table')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{__('form.Home')}}</li>
                            <li class="breadcrumb-item active">\{{__('form.Users Table')}}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{__('form.Users')}}</h3>
                                <div class="card-tools">
                                    <ul class="pagination pagination-sm float-right">
                                        {{ $users->links('vendor.pagination.default') }}
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>{{__('form.ID')}}</th>
                                        <th> {{__('form.Name')}} </th>
                                        <th> {{__('form.Email')}} </th>
                                        <th> {{__('form.Phone')}} </th>
                                        <th> {{__('form.Country')}} </th>
                                        <th> {{__('form.City')}} </th>
                                        <th> {{__('form.Show/Edit/Delete')}} </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->country }}</td>
                                            <td>{{ $user->city }}</td>
                                            <td><a href="users/{{ $user->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                                @if( $user->id != 1)
                                                    <a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger"
                                                       data-toggle="modal" data-target="#deleteModal{{$user->id}}"><i class="fas fa-trash"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                                                  <div class="modal-body">
                                                    @csrf
                                                    @method('DELETE')
                                                    <h5 class="text-center">Are you sure you want to delete this User?</h5>
                                                  </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-danger">Yes, Delete Product</button>
                                                    </div>
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
