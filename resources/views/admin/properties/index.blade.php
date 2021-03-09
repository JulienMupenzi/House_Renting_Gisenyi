@extends('admin.layout')

@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Properties</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Properties</li>
            <li class="breadcrumb-item active">list</li>
        </ol>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <h4>List
            <a target="_blank" href="{{ route('properties.index', ['action' => 'print']) }}" title="Reset" class="btn btn-sm btn-info pull-right btn-action ml-2">Print <i class="fa fa-print"></i></a>
            <a href="{{ route('properties.create') }}" title="Reset" class="btn btn-sm btn-primary pull-right btn-action">Add new <i class="fa fa-plus-circle"></i></a>
        </h4>
        <hr/>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $property->getImage() }}" style="width:370px;height:220px;" alt="{{ $property->address }}" class="card-img-top img-thumbnail">
                        <div class="card-body">
                            <h5 class="card-title">{{ $property->address }}</h5>
                        </div>
                        <div class="card-footer d-flex justify-content-md-between">
                            <a href="{{ route('property', $property) }}" class="btn btn-primary">Show details</a>
                            @if(auth()->user()->isAdmin())
                            <a href="{{ route('properties.edit', $property) }}" title="Edit" class="btn btn-info btn-action "><i class="fa fa-pencil-alt"></i></a>
                            <button title="Delete" class="btn btn-danger btn-action btn-delete" data-url="{{ route('properties.destroy', [$property]) }}">
                                <i class="fa fa-trash"></i>
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="text-center p-2">
            {!! $properties->links() !!}
            </div>
        </div>
    </div>
</section>
@endsection
