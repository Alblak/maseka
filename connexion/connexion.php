<?php 
session_start();
try {
    $connexion= new PDO('mysql:dbname=web243_safi24; host=mysql.us.cloudlogin.co','web243_safi24','TIhy6y38N@');
    //$connexion= new PDO('mysql:dbname=maseka; host=localhost','root','');
    } catch (Exception $e) {
        echo $e->getMessage();
    }


?>