@extends('layouts.main')

@section('body')

<link rel="stylesheet" href="css/kontak.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

{{-- GALKA INFO --}}
<div class="tabs-content-2 container">
    <div class="galka-info text-center">
        <div class="row justify-content-center">
            <div class="col-lg-3 addres d-flex justify-content-center" data-aos="flip-left" data-aos-duration="1000">
                <i class='fas fa-map-marker-alt' ></i>Jl. Raya Puputan No.86, Dangin Puri Klod, Kec. Denpasar Tim., Kota Denpasar, Bali 80234
            </div>
            <div class="col-lg-3 email d-flex justify-content-center" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100">
                <i class='fas fa-envelope'></i>galkarent@gmail.com
            </div>
            <div class="col-lg-3 telp d-flex justify-content-center" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="150">
                <i class='fas fa-phone' ></i>+62 8595-3929-150
            </div>
        </div>
        <div class="sosmed">
            <div class="row justify-content-center">
                <div class="col-lg-2 d-flex justify-content-center" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
                    <i class='fab fa-instagram-square'></i> @Galka_rental
                </div>
                <div class="col-lg-2 d-flex justify-content-center" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="250">
                    <i class='fab fa-twitter' ></i> @Galka_MotorBike
                </div>
                <div class="col-lg-2 d-flex justify-content-center" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">
                    <i class='fab fa-facebook' ></i> @GalangKauh
                </div>
            </div>
        </div>
        <div class="map mt-5" id="map" style="height:500px" data-aos="fade-right" data-aos-offset="300">

        </div>
    </div>    
</div>

<script>
    var mapStyle = [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#1d2c4d"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8ec3b9"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1a3646"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#4b6878"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#64779e"
      }
    ]
  },
  {
    "featureType": "administrative.province",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#4b6878"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#334e87"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#023e58"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#283d6a"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#6f9ba5"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1d2c4d"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#023e58"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#3C7680"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#304a7d"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#98a5be"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1d2c4d"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#2c6675"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#255763"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#b0d5ce"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#023e58"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#98a5be"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1d2c4d"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#283d6a"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#3a4762"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#0e1626"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#4e6d70"
      }
    ]
  }
];
    function initMap(){
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom : 15,
            // center : {lat : 38.897701, lng : -77.036537},
            center : {lat : -8.673240168207064, lng : 115.22657704761126},
            style: mapStyle
        });
        // var marker = new google.maps.Marker({position: {lat : 38.897701, lng: -77.036537}, map: map});
        var marker = new google.maps.Marker({position: {lat : -8.673240168207064, lng: 115.22657704761126}, map: map});

    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRV1ZKExrDoFXmjUdflEMs2Q-FKapt1Vo&callback=initMap"></script>


{{-- SCRIPT FORM CONTACT US --}}
<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbxxZ58QA5-_TsnqOz0ykqgiKZuFaE8k1SwdDwVGelEg_w8MFP4VMZ72m3Hbcc6lcZiF/exec';
  const form = document.forms['galka-contact-us'];
  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const alert = document.querySelector('.alert');

  form.addEventListener('submit', e => {
    e.preventDefault()
    //toggle button
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');
    // alert

    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {  
        //toggle button 
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        // alert
        alert.classList.toggle('d-none');
        //reset form
        form.reset();
        console.log('Success!', response)
      })
      .catch(error => console.error('Error!', error.message))
  })
</script>
    
@endsection