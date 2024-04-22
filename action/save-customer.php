<?php


include '../config/database.php';



if(isset($_POST['save_customer'])){
    $phone_number=$_POST['phone'];
    if(preg_match("/^([0][9][0-9]{9})$/",$phone_number)){

        try {
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $project_type=$_POST['project_type'];
            $referencer=$_POST['referencer'];
            //sql
            $query="INSERT INTO customers SET  name=? , phone=? , project_type=?  , referencer=?";
            //stmt
            $stmt = $conn->prepare($query);

            //bind
            $stmt->bindValue(1 , $name);
            $stmt->bindValue(2 , $phone);
            $stmt->bindValue(3 , $project_type);
            $stmt->bindValue(4 , $referencer);

            //exe
            $stmt->execute();


            //redirect
            header('location: ../add-customer.php?add_customer=true');
        }catch (PDOException $e){
            echo $e;
        }    try {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            //sql
            $query="INSERT INTO users SET  username=? , password=? , mobile=?  , email=?";
            //stmt
            $stmt = $conn->prepare($query);

            //bind
            $stmt->bindValue(1 , $username);
            $stmt->bindValue(2 , $password);
            $stmt->bindValue(3 , $phone);
            $stmt->bindValue(4 , $email);

            //exe
            $stmt->execute();


            //redirect
            header('location:../index.php');
        }catch (PDOException $e){
            echo $e;
        }




    }else{
        header('location: ../add-customer.php?number=0');
    }


};