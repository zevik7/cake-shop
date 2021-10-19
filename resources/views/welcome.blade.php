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

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="homeui/assets/css/bootstrap.min.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="homeui/assets/css/templatemo-klassy-cafe.css">

    <!-- Owl slider -->
    <link rel="stylesheet" href="homeui/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="homeui/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="homeui/assets/css/lightbox.css">

    <!--Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Custom Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
                                <a href="#menu">Chọn bánh</a>
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
                        <h6>Danh sách bánh</h6>
                        <h2>Những loại bánh đặc biệt</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel owl-theme">
                    <div class="item slide" data-slide-index="0">
                        <div href="#" class='card card1'>
                            <a href="#">
                                <div class="price"><h6>$14</h6></div>
                                <div class='info'>
                                    <h1 class='title'>Chocolate Cake</h1>
                                    <p class='description'>
                                    Đây là một loại bánh1
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    </p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section">
                                            <a href="#reservation">
                                                Thêm vào giỏ bánh
                                                <i class="fas fa-shopping-cart"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item slide" data-slide-index="1">
                        <div class='card card2'>
                            <div class="price"><h6>$22</h6></div>
                            <div class='info'>
                                <h1 class='title'>CasyCake Pancake</h1>
                                <p class='description'>
                                    Đây là một loại bánh1
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                </p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Thêm vào giỏ bánh
                                            <i class="fas fa-shopping-cart"></i> 
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide" data-slide-index="2">
                        <div class='card card3'>
                            <div class="price"><h6>$18</h6></div>
                            <div class='info'>
                                <h1 class='title'>Tall CasyCake Bread</h1>
                                <p class='description'>
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                </p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Thêm vào giỏ bánh
                                            <i class="fas fa-shopping-cart"></i>    
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide" data-slide-index="3">
                        <div class='card card4'>
                            <div class="price"><h6>$10</h6></div>
                            <div class='info'>
                                <h1 class='title'>Blueberry CheeseCake</h1>
                                <p class='description'>
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                </p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Thêm vào giỏ bánh
                                            <i class="fas fa-shopping-cart"></i>    
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide" data-slide-index="4">
                        <div class='card card5'>
                            <div class="price"><h6>$8.50</h6></div>
                            <div class='info'>
                                <h1 class='title'>CasyCake Cup Cake</h1>
                                <p class='description'>
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                </p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Thêm vào giỏ bánh
                                            <i class="fas fa-shopping-cart"></i>    
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide" data-slide-index="5">
                        <div class='card card1'>
                            <div class="price"><h6>$7.25</h6></div>
                            <div class='info'>
                                <h1 class='title'>Klassic Cake</h1>
                                <p class='description'>
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                </p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Thêm vào giỏ bánh
                                            <i class="fas fa-shopping-cart"></i>    
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide" data-slide-index="6">
                        <div class='card card1'>
                            <div class="price"><h6>$14</h6></div>
                            <div class='info'>
                                <h1 class='title'>Chocolate Cake</h1>
                                <p class='description'>
                                Đây là một loại bánh
                                Đây là một loại bánh
                                Đây là một loại bánh
                                Đây là một loại bánh
                            </p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Thêm vào giỏ bánh
                                            <i class="fas fa-shopping-cart"></i>    
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide" data-slide-index="7">
                        <div class='card card2'>
                            <div class="price"><h6>$22</h6></div>
                            <div class='info'>
                                <h1 class='title'>CasyCake Pancake</h1>
                                <p class='description'>
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                </p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Thêm vào giỏ bánh
                                            <i class="fas fa-shopping-cart"></i>    
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide" data-slide-index="8">
                        <div class='card card3'>
                            <div class="price"><h6>$18</h6></div>
                            <div class='info'>
                                <h1 class='title'>Tall CasyCake Bread</h1>
                                <p class='description'>
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                </p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Thêm vào giỏ bánh
                                            <i class="fas fa-shopping-cart"></i>    
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide" data-slide-index="9">
                        <div class='card card4'>
                            <div class="price"><h6>$10</h6></div>
                            <div class='info'>
                                <h1 class='title'>Blueberry CheeseCake</h1>
                                <p class='description'>
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                </p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Thêm vào giỏ bánh
                                            <i class="fas fa-shopping-cart"></i>    
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide" data-slide-index="10">
                        <div class='card card5'>
                            <div class="price"><h6>$8.50</h6></div>
                            <div class='info'>
                                <h1 class='title'>CasyCake Cup Cake</h1>
                                <p class='description'>
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                </p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Thêm vào giỏ bánh
                                            <i class="fas fa-shopping-cart"></i>    
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide" data-slide-index="11">
                        <div class='card card1'>
                            <div class="price"><h6>$7.25</h6></div>
                            <div class='info'>
                                <h1 class='title'>Klassic Cake</h1>
                                <p class='description'>
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                    Đây là một loại bánh
                                </p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Thêm vào giỏ bánh
                                            <i class="fas fa-shopping-cart"></i>    
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <h6>Về chúng tôi</h6>
                            <h2>Mang đến những chiếc bánh thật ngon</h2>
                        </div>
                        <p>
                            CasyCake được thành lập vào 2021
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
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="homeui/assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <!-- <a href="/">CasyCake</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright CasyCake Co.
                        
                        <br>Design: PMTN</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="homeui/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="homeui/assets/js/popper.js"></script>
    <script src="homeui/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="homeui/assets/js/owl-carousel.js"></script>
    <script src="homeui/assets/js/accordions.js"></script>
    <script src="homeui/assets/js/datepicker.js"></script>
    <script src="homeui/assets/js/scrollreveal.min.js"></script>
    <script src="homeui/assets/js/waypoints.min.js"></script>
    <script src="homeui/assets/js/jquery.counterup.min.js"></script>
    <script src="homeui/assets/js/imgfix.min.js"></script> 
    <script src="homeui/assets/js/slick.js"></script> 
    <script src="homeui/assets/js/lightbox.js"></script> 
    <script src="homeui/assets/js/isotope.js"></script> 
    
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