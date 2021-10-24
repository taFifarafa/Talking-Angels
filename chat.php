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
$functions = new Functions();

if(!isset($_SESSION['chat_id'])){
    $chat_id = uniqid('chat');
    $_SESSION['chat_id'] = $chat_id;
    $functions->addChat($_SESSION['session_id'], $_SESSION['chat_id']);
}


$front->navbar2();

if(isset($_POST['addMessage'])){
    if(isset($_SESSION['helper']) && $_SESSION['helper'] == true){
        $functions->addMessage($_SESSION['fullname'],  $_GET['id'], $_POST['message']);
    }else{
        $functions->addMessage($_SESSION['session_id'], $_SESSION['chat_id'], $_POST['message']);
    }
}

if(isset($_POST['closeChat'])){
    session_unset();
    Header('Location: index.php');
}

?>
<script>
var pixelFromTop = 11000;
$('html, body').animate({ scrollTop: pixelFromTop  }, 1);
</script>

    <section id="features" class="features_area pt-100 mb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Czat</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="chat border border-dark" style="min-height: 700px;">
                    <?php

                        if(isset($_SESSION['helper']) && $_SESSION['helper'] == true){
                            $functions->getMessages($_GET['id']);
                        }else{
                            $functions->getMessages($_SESSION['chat_id']);
                        }

                    ?>
                </div>

                <div class="mt-2" style="margin: 0 auto;">
                    <form method="post" style="width: 100%;">
                        <textarea rows="5" placeholder="Wiadomość..." style="padding: 10px;width: 100%;" name="message" required></textarea>
                        <button type="submit" href="przeniesienie" class="btn btn-success mt-2" name="addMessage">Wyślij</button>
                    </form>
                    <?php 

                    if(!isset($_SESSION['helper']) && $_SESSION['helper'] == false){
                        echo '                    <form method="post">
                        <button type="submit" class="btn btn-danger mt-2" name="closeChat">Zamknij</button>
                    </form>';
                    }

                     ?>

                </div>

            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

        setInterval(function(){
            $(document).ready(function() { // ustawienie refreshowania strony
                $(".chat").load(" .chat > *");
            });
        },500); // timer ustawiony co 5 sekund
    </script>

<?=$front->footer()?>