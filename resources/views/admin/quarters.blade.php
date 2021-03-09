@extends('admin.layout')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quarters</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quarters</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            @include('flash::message')
            <div class="card card-default color-palette-box p-4">
                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">NAME</th>
                            <th scope="col">CREATED AT</th>
                            <th scope="col">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($quarters as $loopQuarter)
                            <tr>
                            <th scope="row">{{ $loopQuarter->id }}</th>
                            <td>{{ $loopQuarter->name }}</td>
                            <td>{{ $loopQuarter->created_at->toDateString() }}</td>
                            <td>
                                <a href="{{ route('quarters.edit', $loopQuarter) }}" title="Edit" class="btn btn-info btn-action"><i class="fa fa-pencil-alt"></i></a>
                                <button title="Delete" class="btn btn-danger btn-action btn-delete" data-url="{{ route('quarters.destroy', [$loopQuarter]) }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h5>{{ $quarter->id ? 'Edit quarter' : 'Add a new quarter' }}
                            <a href="{{ route('quarters.index') }}" title="Reset" class="btn btn-default pull-right btn-action"><i class="fa fa-sync-alt"></i></a>
                        </h5>
                        @if ($quarter->id)
                            <form method="POST" action="{{ route('quarters.update', $quarter) }}">
                            @method('PUT')
                        @else
                            <form method="POST" action="{{ route('quarters.store') }}">
                        @endif
                        @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input value="{{ $quarter->name ? $quarter->name : old('name') }}" name="name" type="text" class="form-control @error('name') is-invalid @enderror radius-5">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button class="btn btn-primary">{{ $quarter->id ? 'Update' : 'Add' }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
