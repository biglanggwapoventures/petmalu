@extends('layouts.user')

@section('content')
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
      <h4 class="pb-2 border-bottom mb-3">Animals for Adoption</h4>

      <!-- Content Row -->
      <div class="row">
        @foreach($items as $item)
          <div class="col-sm-3">
            <div class="card">
            <div style="height: 150px;background-image: url('{{ $item->photo_filepath }}');background-repeat: no-repeat;background-size: cover;background-position: center center">
            </div>
              <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <p class="card-text">{{ $item->description }}</p>
                <dl class="row">
                  <dt class="col-sm-6">Type</dt>
                  <dd class="col-sm-6">{{ ucfirst($item->animal_type) }}</dd>
                  <dt class="col-sm-6">Vaccinated</dt>
                  <dd class="col-sm-6">{{ $item->vaccination_status ? 'Yes' : 'No' }}</dd>
                </dl>
                <a href="" class="btn btn-info mb-0 btn-sm btn-block mb-1">More Details</a>
                <a href="" class="btn btn-success mt-0 btn-sm btn-block" >Adopt me</a>
              </div>
            </div>
          </div>
        @endforeach

      </div>
      <!-- /.row -->

  </div>
@endsection
