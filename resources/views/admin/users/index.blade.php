@extends('admin.layout')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">users</li>
              <li class="breadcrumb-item active">list</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default color-palette-box p-4">
                <h4>
                    <a target="_blank" href="{{ route('users.index', ['action' => 'print']) }}" class="btn btn-sm btn-info pull-right btn-action ml-2">Print <i class="fa fa-print"></i></a>
                    <a href="{{ route('users.create') }}" title="Reset" class="btn btn-sm btn-primary pull-right btn-action">Add new <i class="fa fa-plus-circle"></i></a>
                </h4>
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">N°</th>
                                <th scope="col">PHOTO</th>
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROLE</th>
                                <th scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td><img class="round rounded-pill" src="{{ ($user && $user->photo) ? $user->getImage() :asset('images/avatar_default.png') }}"style="width: 50px; height: 50px;"></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><span class="badge badge-info">{{ $user->role }}</span></td>
                                    <td>
                                        <a href="{{ route('users.edit', $user) }}" title="Edit" class="btn btn-info btn-action"><i class="fa fa-pencil-alt"></i></a>
                                        <button title="Delete" class="btn btn-danger btn-action btn-delete" data-url="{{ route('users.destroy', [$user]) }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center p-2">
                            {!! $users->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
