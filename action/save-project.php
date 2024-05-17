<?php


require_once '../config/loader.php';


$auth->is_login();


if (isset($_POST['project-name']) && isset($_POST['project-price']) && isset($_POST['project_status']) && isset($_POST['customer_select'])) {

    //select customet

    $customer_phone = $_POST['customer_select'];
    $sql = "SELECT * FROM `customers` WHERE `phone`= :phone";

    $hasproject = $conn->prepare($sql);
    $hasproject->bindParam(':phone', $customer_phone);
    $hasproject->execute();
    $customer = $hasproject->rowCount();
    $customer_id=$hasproject->fetch(PDO::FETCH_OBJ);

    if(!$customer){
        header('location: ../add-project.php?alert=true');
    }

    //  save project
    try {
        $project_name = $_POST['project-name'];
        $project_price = $_POST['project-price'];
        $project_status = $_POST['project_status'];
        $project_payment = $_POST['is_dargah'];
        $project_enamad = $_POST['is_enamad'];
        $project_type = $_POST['project_type'];
        $customer_phone=$_POST['customer_select'];
        $customer_id_int=$customer_id->id;

        //sql
        $query = "INSERT INTO project SET  customer_id=? , name=? , price=? , project_status=? , payment=?, enamad=? , project_type=? ";
        //stmt
        $stmt = $conn->prepare($query);

        //bind
        $stmt->bindValue(1, $customer_id_int);
        $stmt->bindValue(2, $project_name);
        $stmt->bindValue(3, $project_price);
        $stmt->bindValue(4, $project_status);
        $stmt->bindValue(5, $project_payment);
        $stmt->bindValue(6, $project_enamad);
        $stmt->bindValue(7, $project_type);





        //exe
        $stmt->execute();
        $sms->send_sms_create_project($customer_phone, $project_name, 9703);

        //redirect
        header('location: ../add-project.php?add_project=true');
    } catch (PDOException $e) {
        echo $e;
    }
} else {
    header('location: ../add-project.php?add_project=false');
}
