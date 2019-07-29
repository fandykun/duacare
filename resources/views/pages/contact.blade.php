@extends('layouts.landing')

@section('style')
  <style>
.media-body h2 {
  font-size: 28px;
}

.media-body h2 a{
  color: #2a2a2a;
}

  </style>
@endsection

@section('content')
  <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner-sm contact-banner magic-ball magic-ball-banner">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Hubungi Kami</h1>
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->

  <!-- ================ contact section start ================= -->
  <section class="section-margin">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4 wow bounceInDown" data-wow-delay="0.3s">
        <div id="map" style="height: 480px;"></div>
      </div>

      <h2 class="text-center contact-title mb-5 wow bounceInUp" data-wow-duration="1.0s" data-wow-delay="1.2s">Hubungi Kami disini!</h2>
      
      <div class="row justify-content-center">
        <div class="col-lg-4 wow bounceInLeft" data-wow-duration="1.0s" data-wow-delay="1.5s">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-map-alt"></i></span>
            <div class="media-body">
              <h2>Alamat</h2>
              <h3>Jl Kawi 001/024 No. 20 Kel. Tompokersan</h3>
              <h3>Kec. Lumajang Kab. Lumajang 67311</h3>
            </div>
          </div>
        </div>

        <div class="col-lg-4 wow bounceInRight" data-wow-duration="1.0s" data-wow-delay="1.5s">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-mobile"></i></span>
            <div class="media-body">
              <h2>+62 857-3687-8402</h2>
              <h3>(Fety Vanda Yunita)</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4 wow bounceInLeft" data-wow-duration="1.0s" data-wow-delay="2.0s">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h2>Kantor Cabang</h2>
              <h3>Jl Kejawan Gebang I No. 20</h3>
              <h3>Kec. Sukolilo Kota Surabaya 60117</h3>
            </div>
          </div>
        </div>

        <div class="col-lg-4 wow bounceInRight" data-wow-duration="1.0s" data-wow-delay="2.0s">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h2><a href="mailto:duacare2care@gmail.com">dua2care@gmail.com</a></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
@endsection

@section('script')
<script src="{{ asset('safario/vendors/Magnific-Popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('safario/js/jquery.form.js') }}"></script>
<script src="{{ asset('safario/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('safario/js/contact.js') }}"></script>
<script src="{{ asset('safario/js/mail-script.js') }}"></script>
<script src="{{ asset('safario/js/jquery.magnific-popup.min.js') }}"></script>	
<script src="{{ asset('safario/js/main.js') }}"></script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{ asset('gmap3/dist/gmap3.min.js') }}"></script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtPXIecGS2fe-Zl3klCCWY2c3XhCH7kpE&callback=initMap">
</script>

<script>
    $("#nav-contact").addClass("active");

    function initMap() {
      var uluru = {lat: -8.11379, lng: 113.21317};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: {lat: -8.1188374, lng: 113.21317},

      });

      var contentString = '<div>'+
          '<div>'+
          '</div>'+
          '<h4>Duacare Basecamp</h4>'+
          '<div style="font-size:16px">'+
          '<p>Jl Kawi 001/024 No. 20</p>' +
          '<p>67311 Lumajang</p>' +
          '</div>'+
          '</div>';

      var infowindow = new google.maps.InfoWindow({
        content: contentString,
      });

      var marker = new google.maps.Marker({
        position: uluru,
        map: map,
        title: 'Duacare'
      });
      infowindow.open(map, marker);
      marker.addListener('click', function() {
        infowindow.open(map, marker);
      });
    }   
  </script>
@endsection