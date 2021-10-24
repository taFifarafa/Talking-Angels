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
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $jobLocation = htmlspecialchars($_POST['job_location']);
    $email = htmlspecialchars($_POST['email']);
    $jobType = htmlspecialchars($_POST['job_type']);
    $pass = htmlspecialchars($_POST['pass']);
    $passHash = password_hash($pass, PASSWORD_DEFAULT);

    if($db->query("INSERT INTO ta_helpers (name, surname, job_location, email, job_type, pass) VALUES ('$name', '$surname', '$jobLocation', '$email', '$jobType', '$passHash')") == true){
        $_SESSION['helper'] = true;
        header('Location: chats.php');
    }else{
        $_SESSION['error'] = 'Coś poszło nie tak';
    }
}

?>

<!doctype html>
<html class="no-js" lang="pl">

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
                        <a class="navbar-brand" href="index.html">

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
                                    <a href="index.php">Strona główna</a>
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

                                <form action="register.php" method="post">

                                    <div class="input-area3">
                                        <input type="text" id="Name" name="name" placeholder="Podaj swoje imię"  required>
                                        <label for="name">Imię</label>
                                    </div>

                                    <div class="input-area3">
                                        <input type="text" id="Name" name="surname"  placeholder="Podaj swoje nazwisko"  required>
                                        <label for="name">Nazwisko</label>
                                    </div>

                                    <div class="input-area3">
                                        <input type="text" id="Name" name="job_location"  placeholder="Podaj swoje miejsce pracy"  required>
                                        <label for="name">Miejsce pracy</label>
                                    </div>

                                    <div class="input-area3">
                                        <input type="email" name="email" id="email" autocomplete="off" required>
                                        <label for="email">E-mail</label>
                                    </div>

                                    <div class="zawod" style="margin-top: 25px;">
                                        <select name="job_type" required>
                                            <option value="Psycholog">Psycholog</option>
                                            <option value="Psychiatra">Psychiatra</option>
                                            <option value="Psychoterapeuta">Psychoterapeuta</option>
                                        </select>
                                    </div>

                                    <div class="input-area3">
                                        <input type="password" name="pass" id="password" required>
                                        <label for="password">Hasło</label>
                                    </div>

                                    <div class="password-show-btn3">
                                        <input type="checkbox" id="checkbox" value="false">
                                        <label for="checkbox">Pokaż hasło</label>
                                    </div>

                                    <div class="button-area3">
                                        <button type="submit" name="sumbit">Wyślij rejestrację</button>
                                    </div>
                                </form>

                                <div class="signup-link3">
                                    <p>Masz konto? <a href="login.php">Zaloguj się</a></p>
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
