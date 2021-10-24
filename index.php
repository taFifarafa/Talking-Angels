<?php
ini_set('session.gc_maxlifetime', 24*3600);
session_set_cookie_params(24*3600);
session_start();
if(!isset($_SESSION['session_id'])){
    $_SESSION['session_id'] = uniqid();
}
require_once 'vendor/talkingAngelsFront.php';
require_once 'vendor/talkingAngelsFunctions.php';
$front = new Front();


$front->navbar();;

?>

<section id="#" class="features_area pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 mb-60">
                <div class="section_title text-center">
                    <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Rozmowa</h4>
                    <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Jeżeli masz problem, potrzebujesz wsparcia, pomocy lub po prostu pogadać, napisz do psychologa, pedagoga lub psychoterapeuty szkolnego. Jesteś całkowicie anonimowy. Inni uczniowie nie zobaczą Twoich wpisów. Jeśli nie podasz swoich danych, osoba odpisujaca nie będzie wiedziała z kim rozmawia. Ty decydujesz, ile o sobie napisać.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="contact" class="contact_area bg_cover ">


    <div class="bimg bimg3">
 

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title section_title_2 text-center pb-25">
                    <h4 class="title wow fadeInUp" style="color: #ffffff;" data-wow-duration="1.3s" data-wow-delay="0.2s">Zacznijmy rozmowę</h4>
                    <p class="wow fadeInUp" style="color: #ffffff;" data-wow-duration="1.3s" data-wow-delay="0.4s">Po naciśnięciu guzika automatycznie zostaniesz przekierowany na chat wraz z mentorem.</p>
                </div>
            </div>
        </div>

        <form id="contact-form" action="chat.php" method="post" class="wow fadeInUp"
              data-wow-duration="1.3s" data-wow-delay="0.4s">
            <div class="row">


                <p class="form-message"></p>

                <div class="col-lg-12">
                    <div class="single_form text-center">
                        <button class="main-btn" type="submit">Rozpocznij rozmowę</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
</section>



<section id="services" class="features_area pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s" >O naszych mentorach</h4>
                    <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Ważne informacje na temat ludzi z którymi rozmawiacie.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                     data-wow-delay="0.2s">
                    <i class="lni lni-handshake"></i>
                    <h4 class="features_title">Zaufanie</h4>
                    <p>Zaufanie z rozmówcą jest bardzo ważne, nie bójcie się otworzyć. Może dzięki tej rozmowie Wasze życie <br> obróci się o 180&#176;. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                     data-wow-delay="0.3s">
                    <i class="lni lni-lock-alt"></i>
                    <h4 class="features_title">Przysięga</h4>
                    <p>Pamiętajcie, każdy psycholog jest obowiązany do zachowania tajemnicy na temat Waszych rozmów. Zgodnie z art. 52 ust 1 ustawy z 19 sierpnia 1994r. psycholog ma bezwzględny obowiązek zachowania w tajemnicy zawodowej informacji pozyskanych od swoich klientów.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                     data-wow-delay="0.4s">
                    <i class="lni lni-crown"></i>
                    <h4 class="features_title">Niezawodność</h4>
                    <p>Nasi specjaliści zawsze dążą do rozwiązania Waszego opisanego problemu. </p>
                </div>
            </div>

        </div>
    </div>
</section>


<section id="features" class="features_area pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">O deweloperach</h4>
                    <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Jesteśmy pięcioosobową grupą z Zespołu Szkół Technicznych im. Tadeusza Kościuszki w Radomiu.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7">
                <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                     data-wow-delay="0.2s">
                    <i class="lni lni-certificate"></i>
                    <h4 class="features_title">Więź</a></h4>
                    <p>Nie jesteśmy przypadkowymi ludźmi z internetu. Uczęszczamy razem do jednej klasy o profilu programistycznym.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-7">
                <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                     data-wow-delay="0.4s">
                    <i class="lni lni-cup"></i>
                    <h4 class="features_title">Doświadczenie</a></h4>
                    <p>Można powiedzieć, że mamy zaledwie 2 lata doświadczenia z programowaniem, ale chcemy zapewnić aby Wasze przeżycia na naszej stronie były na najwyższym poziomie.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-7">
                <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                     data-wow-delay="0.6s">
                    <i class="lni lni-infinite"></i>
                    <h4 class="features_title"></a>Dane</h4>
                    <p>Stworzyliśmy tę stronę, aby uczniowie mogli tutaj o wszystkim porozmawiać anonimowo. Nie macie potrzeby bać się o swój wizerunek. Wszystkie dane są szyfrowane, nie ma możliwości, że rozmowy wyjdą na jaw.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-7">
                <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                     data-wow-delay="0.6s">
                    <i class="lni lni-mailchimp"></i>
                    <h4 class="features_title"></a>Poza pracą</h4>
                    <p>Na co dzień jesteśmy zwykłymi graczami. Przeważnie gramy w gry z gatunku FPS, strategiczne i zręcznościowe.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-7">
                <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                     data-wow-delay="0.6s">
                    <i class="lni lni-discord"></i>
                    <h4 class="features_title">Kontakt</a></h4>
                    <p>Jeżeli chcesz się o coś zapytać, możesz pisać w wiadomości prywatnej na discordzie. <br> Kontakt: sтixey2k#1312</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="#" class="features_area pt-120">
    <div class="xxxxxxxxxxxx" style="margin: top 10px;"> </div>
</section>









<?=$front->footer()?>