<?php


class Front{

    public function navbar(){

        echo '
        
        <!doctype html>
<html class="no-js" lang="pl">

<head>
    <meta charset="utf-8">
    <title>Talking Angels - porozmawiaj z nami!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Psycholog online, psycholog, terapeuta online, terapeuta, TalkingAngels, talking angels, fifarafa team">
    <meta name="author" content="Fifarafa Team">
    <link rel="shortcut icon" href="assets/images/logo-mozg.png" type="image/png">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/tiny-slider.css">
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta1.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/zegar.css">
    <link rel="stylesheet" href="assets/css/preloader.css">
    
</head>

<body>

<svg class="loader-container" viewBox="0 0 1350 600">
        <text x="50%" y="50%" fill="transparent" text-anchor="middle">Talking Angels</text>
    </svg>


    <section id="home" class="header_area">
        <div id="header_navbar" class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg ">
                            
                            <a class="navbar-brand" href="/">
                            <p class="navbar-nav" style="font-size: 32px; color: #030303; ;"> Talking <span class="napislogo"> Angels</span> </p>
                            </a>
                      
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home">Strona główna</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Nasi eksperci</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">O deweloperach</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Opisz swój problem</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dla psychologów</a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding: 5px;">
                                        <li><a class="dropdown-item" href="login.php" style="color: black;">Logowanie</a></li>
                                        <li><a class="dropdown-item" href="register.php" style="color: black;">Rejestracja</a></li>
                                        ';

                                        if(isset($_SESSION['helper']) && $_SESSION['helper'] == true){
                                            echo '<li><a class="dropdown-item" href="vendor/logout.php" style="color:black;">Wyloguj</a></li>';
                                        }

        echo '
                                      </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_hero">
            <div class="single_hero bg_cover d-flex align-items-center" style="background-image: url(assets/images/tlogora.png)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="hero_content text-center">
                                <h2 class="hero_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Witaj!</br> </h2>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Cieszymy się, że widzimy Cię <br class="d-none d-xl-block"> na naszej stronie.</p>
                                <a href="#features" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s" >Zobacz więcej!</a>
                                <div id="myPageContent" class="container-fluid">
                                    <section id="home">
                                                 
                                              </div>
                                            
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
        
        ';

    }


    public function navbar2(){

        echo '
        
        <!doctype html>
<html class="no-js" lang="pl">

<head>
    <meta charset="utf-8">
    <title>Talking Angels - porozmawiaj z nami!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/png">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/tiny-slider.css">
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta1.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/zegar.css">
    <link rel="stylesheet" href="assets/css/preloader.css">

    
</head>

<body>



    <section id="home" class="header_area">
        <div id="header_navbar" class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                           
                            <a class="navbar-brand" href="/">
                           
                            <p class="navbar-nav" style="font-size: 32px; color: #030303; ;"> Talking <span class="napislogo"> Angels</span> </p>
                    
                </a>
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="" href="/">Strona główna</a>
                                    </li>
                                    ';

                                    if(isset($_SESSION['helper']) && $_SESSION['helper'] == true){
                                        echo '<li class="nav-item"> <a class="active" href="chats.php">Czaty</a> </li>';
                                    }

    echo '
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dla psychologów</a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding: 5px;">
                                        ';

                                        if(isset($_SESSION['helper']) && $_SESSION['helper'] == true){
                                            echo '<li><a class="dropdown-item" href="vendor/logout.php" style="color:black;">Wyloguj</a></li>';
                                        }

        echo '
                                      </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    
    </section>
        
        ';

    }


    


    public function footer(){

        echo '
        
        <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

        <script src="assets/js/bootstrap.bundle-5.0.0-beta1.min.js"></script>
        <script src="assets/js/tiny-slider.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/preloader.js"></script>
        
        </body>
        </html>

        
        ';

    }


}

