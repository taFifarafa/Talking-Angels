<?php
require_once "db.php";

$dbClass = new Database();
$db = $dbClass->db();

class Functions{

    public function addChat($session_id, $chat_id){
        $host = "127.0.0.1";
        $db_user = "sTixey2k";
        $db_password = "Adamkowy95pl";
        $db_name = "stixey2k";
        $db = new mysqli($host, $db_user, $db_password, $db_name);

        $db->query("INSERT INTO ta_chats (session_id, chat_id) VALUES ('$session_id', '$chat_id')");
    }

    public function activeChats(){
        $host = "127.0.0.1";
        $db_user = "sTixey2k";
        $db_password = "Adamkowy95pl";
        $db_name = "stixey2k";
        $db = new mysqli($host, $db_user, $db_password, $db_name);

        $chats = $db->query("SELECT * FROM ta_chats");

        while($row = mysqli_fetch_assoc($chats)){
            ?>

            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['session_id']?></td>
                <td><a href="chat.php?id=<?=$row['chat_id']?>" class="btn btn-success"">Dołącz</a></td>
            </tr>


                <?php
        }
    }


    public function getMessages($id){

        $host = "127.0.0.1";
        $db_user = "sTixey2k";
        $db_password = "Adamkowy95pl";
        $db_name = "stixey2k";
        $db = new mysqli($host, $db_user, $db_password, $db_name);

        $messages = $db->query("SELECT * FROM ta_messages WHERE chat_id = '$id'");

        while($row = mysqli_fetch_assoc($messages)){
            if($row['acc_type'] == 1){
                ?>
                <div class="col-lg-12 admin">
                    <p class="author"><?=$row['user_id']?></p>
                    <p class="text"><?=$row['message']?></p>
                </div>
                <?php
            }else{
?>
                <div class="col-lg-12 user">
                    <p class="text"><?=$row['message']?></p>
                </div>
<?php
            }
        }


    }


    public function addMessage($user, $chat, $message){
        $host = "127.0.0.1";
        $db_user = "sTixey2k";
        $db_password = "Adamkowy95pl";
        $db_name = "stixey2k";
        $db = new mysqli($host, $db_user, $db_password, $db_name);

        if(isset($_SESSION['helper']) && $_SESSION['helper'] == true){
            $db->query("INSERT INTO ta_messages (user_id, chat_id, message, acc_type) VALUES ('$user', '$chat', '$message', 1)");
        }else{
            $db->query("INSERT INTO ta_messages (user_id, chat_id, message, acc_type) VALUES ('$user', '$chat', '$message', 0)");

        }
    }


}