<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Page articles!</title>
  </head>
  <body>
    <div class="container">
      <h1>Liste des articles!</h1>
      <div class="row">
        <div class="col-md-6">
          @foreach($posts as $post)
            <div class="card mb-3">
              <div class="card-header">
                {{ $post->title }}<br/>
                <small>Created at: {{ $post->created_at->format('d/m/Y') }}</small>
              </div>             
              <div class="card-body">
                {{ $post->content }}
              </div>
            </div>
          @endforeach
        </div>        
        <div class="col-md-6">

          @if(session('message'))
            <div class="alert alert-success"> {{ session('message') }}</div>
          @endif          


          @if($errors->any())
            <div class="alert alert-danger"> 
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ url('/articles') }}" method="POST">
            @csrf 
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" value="{{ old('title') }}" name="title">
            </div>            
            <div class="form-group">
              <label for="content">Content</label>
              <textarea name="content" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn btn-success">Save</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>