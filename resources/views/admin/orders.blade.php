@extends('admin.layout')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Orders</li>
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
                        <h4>Your orders
                            <a target="_blank" href="{{ route('orders.index', ['action' => 'print']) }}" class="pull-right btn btn-sm btn-info ml-5"><i class="fa fa-print"></i>Print</a>
                        </h4>
                        <table class="table table-striped justify-content-center">
                            <thead>
                                <tr>
                                <th scope="col">ORDER N°</th>
                                <th scope="col">CLIENT</th>
                                <th scope="col">PROPERTY ID</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">ORDERED AT</th>
                                <th scope="col">DELIVERED</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <th scope="row">{{ $order->id }}</th>
                                    <td>{{ $order->user['name'] }}</td>
                                    <td>{{ $order->property->id }}</td>
                                    <td>{{ $order->property->address }}</td>
                                    <td>{{ $order->created_at->toDateString() }}</td>
                                    <td>
                                        @if ($order->delivered)
                                            <span class="badge badge-success">Yes</span>
                                        @else
                                            <span class="badge badge-danger">No</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center p-2">
                            {!! $orders->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
