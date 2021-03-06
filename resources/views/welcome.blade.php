<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'CakeApp') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="homeui/assets/css/bootstrap.min.css">

    <!-- Owl slider -->
    <link rel="stylesheet" href="homeui/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="homeui/assets/css/owl.theme.default.min.css">

    <!--Custom Styles -->
    <link rel="stylesheet" href="homeui/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
    
<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('layouts.navigation')
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>CasyCake</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a class="main-page-button" href="#menu">Ch???n b??nh</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('storage/images/wallaper1.jpg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('storage/images/wallaper2.jpg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('storage/images/wallaper3.jpg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('storage/images/wallaper4.jpg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Danh s??ch b??nh</h6>
                        <h2>Nh???ng lo???i b??nh ?????c bi???t</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel owl-theme">
                    @foreach ($cakes as $index => $cake)
                    <div class="item slide" data-slide-index="{{$index}}" onclick="window.location='./cake/{{$cake->id}}'">
                        <div class='card card1' style="background-image: url({{$cake->thumb()->url}})">
                            <div class="price">
                                <h6>{{$cake->price}} VND</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>
                                    {{$cake->name}}
                                </h1>
                                <p class='description'>
                                    {{$cake->desc}}
                                </p>
                                <!-- <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Th??m v??o gi??? b??nh
                                            <i class="fab fa-shopping-cart"></i> 
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>
                                V??? ch??ng t??i
                            </h6>
                            <h2>
                                Mang ?????n nh???ng chi???c b??nh th???t ngon
                            </h2>
                        </div>
                        <p>
                            CasyCake l?? th????ng hi???u b??nh ng???t Vi???t. 
                            ???????c th??nh l???p t??? n??m 2021 t???i qu???n Ninh Ki???u, C???n Th??. 
                            C??c s???n ph???m CasyCake ???????c l??m t??? c??c nguy??n li???u nh???p kh???u c???a c??c n?????c c?? truy???n th???ng l??m b??nh nh??: 
                            Newzeland, M???, Ph??p, B???. 
                            V???i h????ng v??? th??m ngon ?????c tr??ng c???a c??c lo???i kem, b??, s???a, ph?? mai, h???t h???nh nh??n, chocolate... 
                            d?????i b??n tay kh??o l??o c???a nh???ng ng?????i th??? l??m b??nh gi??u kinh nghi???m. 
                        </p>
                        <div class="row">
                            <div class="col-6">
                                <img src="/homeui/assets/images/menu-item-01.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img src="/homeui/assets/images/menu-item-02.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fas fa-play"></i></a>
                            <img src="homeui/assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    @include('layouts.footer')

    <!-- jQuery -->
    <script src="homeui/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="homeui/assets/js/popper.js"></script>
    <script src="homeui/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="homeui/assets/js/owl-carousel.js"></script>
    <script src="homeui/assets/js/jquery.counterup.min.js"></script>
    <script src="homeui/assets/js/slick.js"></script> 
    
    <!-- Global Init -->
    <script src="homeui/assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
</body>
</html>