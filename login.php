<?php
ini_set('session.gc_maxlifetime', 24*3600);
session_set_cookie_params(24*3600);
session_start();

if(isset($_SESSION['helper']) && $_SESSION['helper'] == true){
    header('Location: chats.php');
}

require_once 'vendor/talkingAngelsFunctions.php';
require_once 'vendor/db.php';

$dbClass = new Database();
$db = $dbClass->db();

if(isset($_POST['sumbit'])){
    if(isset($_POST['email'])){
        if(isset($_POST['pass'])){
            $email = htmlspecialchars($_POST['email']);
            $pass = htmlspecialchars($_POST['pass']);
            if($conc = $db->query("SELECT * FROM ta_helpers WHERE email = '$email'")){
                $row = $conc->fetch_assoc();
                if(password_verify($pass, $row['pass']) == true){
                    $_SESSION['helper'] = true;
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['surname'] = $row['surname'];
                    $_SESSION['fullname'] = $row['name'].' '.$row['surname'];
                    $_SESSION['job_location'] = $row['job_location'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['job_type'] = $row['job_type'];
                    $conc->free_result();
                    header('Location: chats.php');
                }else{
                    $_SESSION['error'] = 'Podano błędne hasło!';
                }
            }else{
                $_SESSION['error'] = 'Konto na taki email nie istnieje!';
            }
        }else{
            $_SESSION['error'] = 'Wpisz hasło!';
        }
    }else{
        $_SESSION['error'] = 'Podaj adres email!';
    }
}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Talking Angels - rejestracja</title>
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
    <link rel="stylesheet" href="assets/css/logowanie.css">
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
                                    <a href="/">Strona główna</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll active" href="#">Psycholodzy</a>
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
                        <div class="container3">
                            <div class="wrapper3">

                                <?php
                                if(isset($_SESSION['error'])){
                                    echo '<p style="color: white; font-size: 27px;" class="text-center">'.$_SESSION['error'].'</p>';
                                     unset($_SESSION['error']);
                                }
                                ?>

                                <form action="login.php" method="post">
                                    <div class="input-area3">
                                        <input type="email" id="email" autocomplete="off" name="email" required>
                                        <label for="email">E-mail</label>
                                    </div>

                                    <div class="input-area3">
                                        <input type="password" id="password" name="pass" required>
                                        <label for="password">Hasło</label>
                                    </div>

                                    <div class="password-show-btn3">
                                        <input type="checkbox" id="checkbox" value="false">
                                        <label for="checkbox">Pokaż hasło</label>
                                    </div>

                                    <div class="button-area3">
                                        <button type="submit" name="sumbit">Zaloguj się</button>
                                    </div>
                                </form>

                                <div class="signup-link3">
                                    <p>Nie masz konta? <a href="register.php">Zarejestruj się</a></p>
                                </div>
                            </div>
                        </div>
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



<script src="assets/js/bootstrap.bundle-5.0.0-beta1.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/preloader.js"></script>
<script src="assets/js/logowanie.js"></script>

</body>
</html>

