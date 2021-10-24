<?php


class Database{

    public function db(){
        $host = "127.0.0.1";
        $db_user = "sTixey2k";
        $db_password = "Adamkowy95pl";
        $db_name = "stixey2k";
        $db = new mysqli($host, $db_user, $db_password, $db_name);
        $db->set_charset("utf8");
        return $db;
    }


}