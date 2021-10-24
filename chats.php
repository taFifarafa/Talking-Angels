<?php
session_start();

if(!isset($_SESSION['helper'])) {
    header('Location: login.php');
    exit();
}

require_once 'vendor/talkingAngelsFront.php';
require_once 'vendor/talkingAngelsFunctions.php';
$front = new Front();
$functions = new Functions();

$front->navbar2();;

?>
    <head>
        <style>
 body {
    background: rgb(2,0,36);
background: -moz-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,41,1) 0%, rgba(0,212,255,1) 100%);
background: -webkit-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,41,1) 0%, rgba(0,212,255,1) 100%);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,41,1) 0%, rgba(0,212,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#020024",endColorstr="#00d4ff",GradientType=1);
 }

        </style>
</head>

    <section id="features" class="features_area pt-120 mb-100"> 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Czaty</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <table class="table table-bordered text-center">
                    <thead>
                    <th>#</th>
                    <th>Numer Sesji Użytkownika</th>
                    <th>Akcje</th>
                    </thead>
                    <tbody style="font-size: 25px;">
                    <?=$functions->activeChats()?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>





<?=$front->footer()?>