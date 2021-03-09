<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Orders</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body onload="window.print()" class="hold-transition skin-blue sidebar-mini">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default color-palette-box p-4">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center mb-3">YOUR ORDERS</h4>
                        <table class="table table-striped">
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
                                    <th scope="row" style="text-align: center;">{{ $order->id }}</th>
                                    <td>{{ $order->user->name }}</td>
                                    <td style="text-align: center;">{{ $order->property->id }}</td>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
