<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Available Quarters</title>
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
                        <h4 class="text-center mb-3">Quarters</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">QUARTER N°</th>
                                <th scope="col">NAME</th>
                                <th scope="col">CREATED AT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($quarters as $Quarter)
                                <tr>
                                    <th scope="row">{{ $quarters->id }} </th>
                                    <td>{{ $quarters->name }}</td>
                                    <td>{{ $quarters->created_at->toDateString() }}</td>
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
