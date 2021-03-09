<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>properties</title>
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
                        <h4 class="text-center mb-3">YOUR PROPERTIES</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">PROPERTY N°</th>
                                <th scope="col">GROUND SIZE</th>
                                <th scope="col">BEDROOM</th>
                                <th scope="col">BATHROOM</th>
                                <th scope="col">GARAGE</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">QUARTER</th>
                                <th scope="col">CREATED AT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($properties as $property)
                                <tr>
                                    <th scope="row">{{ $property->id }}</th>
                                    <td>{{ $property->ground_size }}</td>
                                    <td>{{ $property->bedrooms }}</td>
                                    <td>{{ $property->bathrooms }}</td>
                                    <td>{{ $property->garages }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>{{ $property->address }}</td>
                                    <td>{{ $property->quarter->name }}</td>
                                    <td>{{ $property->created_at->toDateString() }}</td>
                                    <td>
                                        @if ($property->delivered)
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
