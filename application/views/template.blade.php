<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biodata</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ base_url('assets/bootstrap/css/bootstrap.css') }}">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 5rem;
        }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="{{ base_url() }}">Web Biodata</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ base_url() }}">Beranda <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ base_url('tentang') }}">Tentang <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ base_url('assets/bootstrap/js/bootstrap.bundle.js') }}"></script>
  </body>
</html>
