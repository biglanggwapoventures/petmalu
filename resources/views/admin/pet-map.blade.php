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
      zoom: 15
    });
    var length = data.length
    for(var x = 0; x<length; x++) {
      console.log(data[x])
      var marker = new google.maps.Marker({
        position: {lat: data[x].origin_latitude, lng: data[x].origin_longitude},
        map: map,
        title: 'Hello World!'
      });
    }
  }
</script>
@endpush
