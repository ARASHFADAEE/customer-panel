<?php


include '../config/database.php';
include '../config/sms-panel.php';


if (isset($_POST['save_customer'])) {
    $phone_number = $_POST['phone'];
    if (preg_match("/^([0][9][0-9]{9})$/", $phone_number)) {

        //verify customer
        try {
            $name = $_POST['name'];
            $phone = $_POST['phone'];

            // Check if the name or phone already exists in the database
            $sql_v = "SELECT * FROM `customers` WHERE name = :name OR phone = :phone";
            $stmt = $conn->prepare($sql_v);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->execute();

            $hasuser = $stmt->rowCount();
            if ($hasuser > 0) {
                header('location: ../add-customer.php?usernot=1');
                exit();
            }else{
                //  save customer
                try {
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $project_type = $_POST['project_type'];
                    $referencer = $_POST['referencer'];

                    //sql
                    $query = "INSERT INTO customers SET  name=? , phone=? , project_type=?  , referencer=?";
                    //stmt
                    $stmt = $conn->prepare($query);

                    //bind
                    $stmt->bindValue(1, $name);
                    $stmt->bindValue(2, $phone);
                    $stmt->bindValue(3, $project_type);
                    $stmt->bindValue(4, $referencer);

                    //exe
                    $stmt->execute();

                    $sms->send_sms_welcome($phone ,$name,9714 );

                    //redirect
                    header('location: ../add-customer.php?add_customer=true');
                } catch (PDOException $e) {
                    echo $e;
                }

            }
        } catch (PDOException $e) {
            echo $e;
        }





    } else {
        header('location: ../add-customer.php?number=0');
    }


};