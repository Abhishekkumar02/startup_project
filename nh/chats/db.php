<?php


$host = "localhost";
$user = "root";
$pass = "ticat";
$db_name = "chats";

    $con = new mysqli($host,$user,$pass,$db_name);

    function formatDate($date)
    {
        return date('g:i a',strtotime($date));
    }


?>
