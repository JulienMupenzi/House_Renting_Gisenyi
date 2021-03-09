@extends('admin.layout')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>users management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">users</li>
              <li class="breadcrumb-item active">add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            @include('flash::message')
            <div class="card card-default color-palette-box p-4">
                <h4>Add new user
                    <a href="{{ route('users.index') }}" title="Reset" class="btn btn-sm btn-primary pull-right btn-action"><i class="fa fa-arrow-circle-left"></i> Back</a>
                </h4>
                <hr/>
                @include('admin.users.form', ['user' => new \App\user])
            </div>
        </div>
    </section>
@endsection
