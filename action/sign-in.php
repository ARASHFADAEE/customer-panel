<?php


global $conn;
require_once('../config/loader.php');


if (isset($_POST['signin'])) {

    try {
        $key = $_POST['key'];
        $password = $_POST['password'];

        //sql
        $query = "SELECT * FROM `users` WHERE (username = :key OR mobile = :key OR email = :key) AND (password = :password)";
        //stmt
        $stmt = $conn->prepare($query);

        //bind
        $stmt->bindValue(":key", $key);
        $stmt->bindValue(':password', $password);


        //exe
        $stmt->execute();

        $hasuser = $stmt->rowCount();
        $data_person = $stmt->fetchAll(PDO::FETCH_ASSOC);







        if ($hasuser === 1) {

            session_start();
            session_regenerate_id();
            $_SESSION["login"]=true;
            $_SESSION['user_name'] = $data_person[0]['username'];

            header('location:../index.php?userlogin==ok');


        } else {
            header('location:../login.php?notuser==ok');
        }

        //redirect
//        header('location:../index.php');
    } catch (PDOException $e) {
        echo $e;
    }


}

