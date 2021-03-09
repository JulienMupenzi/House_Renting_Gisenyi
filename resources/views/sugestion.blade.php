@extends('admin.layout')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Suggestions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Suggestions</li>
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
                        <h4>Your Suggestions
                           
                        </h4>
                        <table class="table table-striped justify-content-center">
                            <thead>
                                <tr>
                                <th scope="col">SUGGEST N°</th>
                                <th scope="col">FIRST-NAME</th>
                                <th scope="col">LAST-NAME</th>
                                <th scope="col">TELEPHONE</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">SUBJECT</th>
                                <th scope="col">MESSAGE</th>
                                <th scope="col">SUGGESTED</th>
                                <th scope="col">RESPONDED</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sugestions as $sendsuggest)
                                <tr>
                                    <th scope="row">{{ $sendsuggest->id }}</th>
                                    <td>{{ $sendsuggest->fname }}</td>
                                    <td>{{ $sendsuggest->lname }}</td>
                                    <td>{{ $sendsuggest->telephone }}</td>
                                    <td>{{ $sendsuggest->email }}</td>
                                    <td>{{ $sendsuggest->subject }}</td>
                                    <td>{{ $sendsuggest->message }}</td>
                                    <td>{{ $sendsuggest->created_at->toDateString() }}</td>
                                    <td>
                                    <a href="" title="Read" class="btn btn-info btn-action"><i class="fas fa-book-reader"></i></a>
                                        <button title="Respond" data-toggle="modal" data-target="#modal-body" class="btn btn-danger btn-action" data-url="">
                                            <i class="fas fa-reply"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center p-2">
                            {!! $sugestions->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modal-body" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <img src="{{asset('../img/avatar5.png')}}" class="rounded-circle mx-auto d-block" alt="...">
                    <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">
                            <label class="text-center" style="color: black; font-family: cursive; font-weight: bold;">{{ $sendsuggest->fname }}<span> <i>{{$sendsuggest->lname}}</i></span></label>
                        </div>
                    </div>
                      
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
