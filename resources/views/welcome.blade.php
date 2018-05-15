<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          @auth
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a></a>
            </li>
          </ul>
          @endauth
          <ul class="navbar-nav ml-auto">
            @auth
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hello, {{ auth()->user()->name }}!
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Log me out</a>
              </div>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#registration-modal" href="javascript:void(0)">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#login-modal" href="javascript:void(0)">Login</a>
            </li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8">
          <img class="img-fluid rounded" src="http://placehold.it/900x400" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <h1>Business Name or Tagline</h1>
          <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
          <a class="btn btn-primary btn-lg" href="#">Call to Action!</a>
        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->

      <!-- Call to Action Well -->
      <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Pet One</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Adopt</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Pet Two</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Adopt</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Pet Three</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Adopt</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- Modal -->
    <div class="modal fade" id="registration-modal" tabindex="-1" role="dialog" aria-labelledby="registration-modal-label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registration-modal-label">Sign up</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          {!! Form::open(['url' => url('/register'), 'method' => 'POST', 'class' => 'ajax', 'role' => 'form']) !!}
          <div class="modal-body">
            {!! Form::inputGroup('text', 'Full Name', 'name') !!}
            {!! Form::textAreaGroup('Address', 'address', null, ['rows' => '2']) !!}
            <div class="row">
                <div class="col-sm-6">
                    {!! Form::inputGroup('email', 'Email Address', 'email') !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::inputGroup('date', 'Birthdate', 'birthdate') !!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    {!! Form::selectGroup('Gender', 'gender', ['' => '*SELECT*', 'male' => 'Male', 'female' => 'Female']) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::selectGroup('Civil Status', 'civil_status', ['' => '*SELECT*', 'single' => 'Single', 'married' => 'Married']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    {!! Form::passwordGroup('Password', 'password') !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::passwordGroup('Password, Again', 'password_confirmation') !!}
                </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          {!! Form::close() !!}
        </div>

      </div>
    </div>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal-label" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="login-modal-label">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          {!! Form::open(['url' => '', 'method' => 'POST']) !!}
          <div class="modal-body">
            {!! Form::inputGroup('email', 'Email Address', 'name') !!}
            {!! Form::passwordGroup('Password', 'password') !!}
            <button type="button" class="btn btn-primary btn-block">Submit</button>
            <hr>
            <div class="text-center">
              <a href="#" class="btn btn-info"><i class="fa fa-3x fa-facebook-square"></i></a>
              <a href="#" class="btn btn-danger"><i class="fa fa-3x fa-google"></i></a>
            </div>
          </div>

          {!! Form::close() !!}
        </div>

      </div>
    </div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
