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

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.animal-adoption.index') }}">Impounded Animals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Adoption Requests </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.map') }}">Map</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user"></i> Admin
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Admin List</a>
              <a class="dropdown-item" href="#">Manage Users</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <main class="container mt-2">
    <div class="row align-items-center mb-3">
      <div class="col">
        <h1 class="mb-0">@yield('title', 'Section Title')</h1>
      </div>
      <div class="col text-right">
         @if(MyHelper::resourceMethodIn(['create', 'edit']))
          <a href="{{ MyHelper::resource('index') }}" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Back to list</a>
        @elseif(MyHelper::resourceMethodIn(['index']))
          <a href="{{ MyHelper::resource('create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> New entry</a>
        @endif
      </div>
    </div>

    @yield('content')

  </main>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('js')
</body>
</html>
