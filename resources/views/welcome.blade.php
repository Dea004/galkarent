@extends('layouts.main')

@section('body')

<link rel="stylesheet" href="css/welcome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    {{-- HEADER // NAMA TOKO --}}
    <div class="banner1 d-flex">
        <div class="tab-content container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-content text-center animate__animated animate__fadeInDown">
                        <br>
                        <h5>Best Rental Motor!</h5>
                        <h1 class="fw-bold" >GALANG KAUH RENTAL</h1>
                        <h6>Wanna Try To Rent Motorbike More Easily?</h6>
                        <br>
                        <button class="rent "><a href="/rent">Try Now!</a></button>
                    </div>
                </div>
                <div class="col-lg-5 animate__animated animate__fadeInDown">
                    <div class="banner-image">
                        <img style="margin-top: -60px" class="img-fluid" src="{{ $image1 }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- ARTIKEL GALKA RENT --}}
    <div class="banner2">
        <div class="tabs-content">
            <div class="galka-deskp text-center animate__animated animate__slideInLeft">
                <div class="galka-sosmed container">
                    <div class="row justify-content-center">
                        <div class="col-lg-2 d-flex justify-content-center">
                            <i class="fab fa-instagram"></i>
                            <p>| @Galka_rental</p>
                        </div>
                        <div class="col-lg-2 d-flex justify-content-center">
                            <i class="fab fa-facebook-f"></i>
                            <p>| @GalangKauh</p>
                        </div>
                        <div class="col-lg-2 d-flex justify-content-center">
                            <i class='fab fa-twitter' ></i>
                            <p>| @Galka_MotorBike</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="articel-content">
                    <div class="row justify-content-between">
                        <div class="col-lg-7" data-aos="fade-right" data-aos-duration="1000">
                            <h4 class="fw-bold">Welcome to Galka-Rental BALI</h4>
                            <p>With Bikago renting motorbikes and scooter on Bali becomes easy and straightforward. Our high quality motorbikes and even higher safety standards we make sure your motorbike and scooter rental experiences will be more comfortable and convenient than ever before. Say goodbye to shady motorbike rental deals on street corners that can ruin your entire holiday. Say Hello to Bikago! We made professional, reliable, convenient and safe motorbike and scooter rental services the new industry standards on Bali since 2014.</p>
                            <h4 class="fw-bold">Motorbike Rentals with Free Delivery</h4>
                            <p>Have your motorbike or scooter rental delivered at your hotel, resort or Airbnb location. Bikago offers motorbike insurance packages, so whatever happens with your motorbike during the rental period you are covered. Optional accessories include 4G pocket WI-Fi, hard cases and surf racks. All Bikago motorbikes have a first aid kit on board. Our Customer Care Center is available 24/7 during your motorbike rental period with Bikago.
                                Our friendly Customer Care and Road Side Assistance Teams speak English fluently. Bikago is always here to assist you so your motorbike rental experience with us will be an unforgettable one! If you have any questions about renting a motorbike or scooter with Bikago, let us know. You can contact our Customer Care team easily through our Online Chat or send us a quick message by clicking HERE.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-aos="fade-left" data-aos-delay="100">
                                <div class="carousel-inner">
                                    {{-- @foreach ($motor as $m) --}}
                                        <div class="carousel-item active" data-bs-interval="3000">
                                            <img src="{{ $vespaPrimavera }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="3000">
                                            <img src="{{ $vario125 }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="3000">
                                            <img src="{{ $scoopy125 }}" class="d-block w-100" alt="...">
                                        </div>
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="why-galkarent">
            <div class="tabs-content container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-3"><i class="fas fa-check"></i>High quality bikes</div>
                    <div class="col-lg-3"><i class="fas fa-check"></i>Free Delivery & Pickup</div>
                    <div class="col-lg-3"><i class="fas fa-check"></i>Best Price Start From 50k</div>
                </div>
            </div>
        </div>
    </div>


    {{-- TOP PICK MOTORSCYLE --}}
    <div class="banner3">
        <div class="tab-content">
            <div class="judul">
                <h5 class="text-center fw-bold pt-5" style="font-family: Roboto; color:#3D37F1;">TOP PICK</h5>
                <h2 class="text-center pt-3" style="font-family: Roboto; color:#5A5454; font-size:25px;" >Motorbike with Highest Rating</h2>
                <h6 class="text-center pt-2" style="font-family: Roboto; color:#5A5454; font-size:14px;">Some of The Motorbike With High Rented Precentage From Our Customers</h6>
                <h6 class="text-center" style="font-family: Roboto; color:#5A5454; font-size:14px;">Guaranteed and Trusted Motorbike Quality!</h6>
            </div>

            <div class="mt-5 container">
                <div class="tabs-content">
                    <div class="invisible-tabs" >
                        <div class="row product-content">
                            @if (count($motor) < 4)
                            @foreach ($klx as $k)
                            <div class="col-sm-6 col-lg-3 motor d-flex justify-content-center" >
                                <div class="card" data-aos="fade-down" data-aos-offset="100">
                                    <img class="card-img-top" src="img/manual-bike/KLXHijau.png" alt="Card image cap">
                                        <h5 class="text-center">KLX</h5>
                                    <div class="d-flex justify-content-center">
                                        <img src="img/brand/kawasaki.png" width="70" height="50"  alt="Brand Image">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="/rent/{{ $k->name }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @foreach ($nmax as $n)
                            <div class="col-sm-6 col-lg-3 motor d-flex justify-content-center" >
                                <div class="card" data-aos="fade-down" data-aos-offset="100">
                                    <img class="card-img-top" src="img/matic-bike/N-MAX.png" alt="Card image cap">
                                        <h5 class="text-center">N-MAX 2016</h5>
                                    <div class="d-flex justify-content-center">
                                        <img src="img/brand/yamaha.png" width="70" height="50"  alt="Brand Image">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="/rent/{{ $n->name }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @foreach ($vespaa as $v)
                            <div class="col-sm-6 col-lg-3 motor d-flex justify-content-center" >
                                <div class="card" data-aos="fade-down" data-aos-offset="100">
                                    <img class="card-img-top" src="img/matic-bike/PiaggioVespa125Primavera.png" alt="Card image cap">
                                        <h5 class="text-center">Piaggio Vespa 125</h5>
                                    <div class="d-flex justify-content-center">
                                        <img src="img/brand/piaggio.png" width="70" height="50"  alt="Brand Image">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="/rent/{{ $v->name }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @foreach ($vixion as $x)
                            <div class="col-sm-6 col-lg-3 motor d-flex justify-content-center" >
                                <div class="card" data-aos="fade-down" data-aos-offset="100">
                                    <img class="card-img-top" src="img/manual-bike/YamahaVixion.png" alt="Card image cap">
                                        <h5 class="text-center">Yamaha Vixion</h5>
                                    <div class="d-flex justify-content-center">
                                        <img src="img/brand/yamaha.png" width="70" height="50"  alt="Brand Image">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="/rent/{{ $x->name }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            @foreach ($motor as $m)
                            <div class="col-sm-6 col-lg-3 motor d-flex justify-content-center" >
                                <div class="card" data-aos="fade-down" data-aos-offset="100">
                                    @if ($m->motor->transmition == "Autometic")
                                        <img class="card-img-top" src="/storage/{{ $m->motor->image }}" alt="Card image cap">
                                    @else
                                        <img class="card-img-top" src="/storage/{{ $m->motor->image }}" alt="Card image cap">
                                    @endif
                                    <h5 class="text-center">{{ $m->motor->name }}</h5>
                                    <div class="d-flex justify-content-center">
                                        <img src="img/brand/{{ $m->motor->merk }}.png" width="70" height="50"  alt="Brand Image">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="/rent/{{ $m->motor->name }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- HOW DOES IT WORK --}}
    <div class="banner4" data-aos="fade-right" data-aos-offset="400">
        <div class="tab-content">
            <div class="container">
                <div class="row">
                    <div class="judul"  style="margin-bottom:100px;">
                        <h6 class="text-center fw-bold" style="font-family: Roboto; color:#3D37F1; font-size:20px;">HOW DOES IT WORK?</h6>
                    </div>
                    <div class="pb-3 col-lg-4 col-12 step d-flex justify-content-center text-center text-light">
                        <div class="it-work">
                            <i class="fas fa-paper-plane"></i>
                            <h5>BOOK ONLINE</h5>
                            <p>Easy, fast and safe. We offer many international payment methods so you do not have to worry about foreign cash.</p>
                        </div>
                    </div>
                    <div class="pb-3 col-lg-4 col-12 step d-flex justify-content-center text-center text-light">
                        <div class="it-work">
                            <i class='fas fa-truck' ></i>
                            <h5>DELIVERY SERVICE</h5>
                            <p>Just tell us where you are staying and we will deliver the bikes and accessories to your accomodation free of charge.</p>
                        </div>
                    </div>
                    <div class="pb-3 col-lg-4 col-12 step d-flex justify-content-center text-center text-light">
                        <div class="it-work">
                            <i class='fas fa-map-marked-alt'></i>
                            <h5>ENJOY YOUR ADVENTURE</h5>
                            <p>Discover breathtaking sceneries and vibrant cities. Just leave the bike for us to pick up by the end of your adventure.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/welcome.js"></script>


@endsection