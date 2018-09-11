@extends('front.layout.main')
@section('script_extend')
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
<script>
//GoogleMaps start
$( document ).ready(function() {
	initMap();
});
function initMap() {
    var mapDiv = document.getElementById('google-map');
    var map = new google.maps.Map(mapDiv, {
      center: {lat: 10.7717778, lng: 106.6868165},
      zoom: 17,
		scrollwheel: false,
    });
    var marker = new google.maps.Marker({
        position: {lat: 10.7717778, lng: 106.6868165},
        map: map,
        title: 'Hùng Đại Dương'
      });
}
//GoogleMaps end
</script>
@endsection
@section('content')
	<!-- Section: about -->
    @include('front.layout.about')
	<!-- /Section: about -->
	

	<!-- Section: services -->
    @include('front.layout.service')
	<!-- /Section: services -->
	
	<!-- Section: contact -->
    @include('front.layout.contact')
	<!-- /Section: contact -->

@endsection