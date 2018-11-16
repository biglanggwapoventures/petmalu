@extends('layouts.admin')

@section('title', 'Adopted Pet Map')
@section('content')
<div id="map" style="height:60vh">

</div>
@endsection

@push('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApzL1AXKwyfJT2tT5c5KkxFqnfv2txpQw&callback=initialize" async defer></script>
<script type="text/javascript">
  var map,  
    data = {!! $data->toJson() !!};
  function initialize() {
    console.log(data)
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 10.3157, lng: 123.8854},
      zoom: 10
    });
    var length = data.length
    for(var x = 0; x<length; x++) {
      putMarker(map, data[x])
    }
  }

  function putMarker (map, item) {
    var marker = new google.maps.Marker({
      position: {lat: item.origin_latitude, lng: item.origin_longitude},
      map: map,
      title: item.name
    });

    var infowindow = new google.maps.InfoWindow({
      content: `</div><img class="rounded mx-auto mb-2" style="width:100px" src="${item.photo_filepath}" />
      <dl class="row">
  <dt class="col-sm-3">Name</dt>
  <dd class="col-sm-9">${item.pet_name}</dd>

  <dt class="col-sm-3">Class</dt>
  <dd class="col-sm-9">
      ${item.species} 
  </dd>
  <dt class="col-sm-3">Breed</dt>
  <dd class="col-sm-9">
      ${item.breed}
  </dd>
  <dt class="col-sm-3">Address</dt>
  <dd class="col-sm-9">
      ${item.origin}
  </dd>
</dl>`,
        position: {lat: item.origin_latitude, lng: item.origin_longitude},
    });

    marker.addListener('click', function() {
      infowindow.open(map);
    });
  }
</script>
@endpush
