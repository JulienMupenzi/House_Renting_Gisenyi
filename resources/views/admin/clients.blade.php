@extends('admin.layout')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Clients</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Clients</li>
              <li class="breadcrumb-item active">list</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <hr/>
            <div class="card card-default color-palette-box p-4">
                <div class="row">
                    <div class="col-md-12">
                        Filter :
                        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <a href="{{ route('clients.index', ['page' => 'client', 'filter' => 'all']) }}"  class="btn btn-secondary">All</a>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <a href="{{ route('clients.index', ['page' => 'client', 'filter' => 'client']) }}"  class="btn btn-secondary">NORMAL CLIENTS</a>
                            </div>
                            <div class="btn-group" role="group" aria-label="Third group">
                                <a href="{{ route('clients.index', ['page' => 'client', 'filter' => 'special']) }}"  class="btn btn-dark">SPECIAL CLIENTS</a>
                            </div>
                            <div class="btn-group" role="group" aria-label="Third group" style="  height: 38px;  right: 0; position: absolute;">
                                <a target="_blank" href="{{ URL::full() }}&action=print" class="btn btn-sm btn-info pull-right btn-action ml-2">Print <i class="fa fa-print"></i></a>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">N°</th>
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROLE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><span class="badge badge-info">{{ $user->role }}</span></td>
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
