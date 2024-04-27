<?php include './partials/head/head.php';
include_once './config/loader.php';
$auth->is_login();

$sql = "SELECT * FROM `project` WHERE `id`=1 ";
$sql_user = "SELECT * FROM `customers` ";

$hasproject = $conn->prepare($sql);
$hasproject->execute();
$data = $hasproject->fetch(PDO::FETCH_OBJ);
$row_member = $hasproject->rowCount();




$user_name = $conn->query($sql_user);
$user_name->execute();
$data_name = $user_name->fetchAll(PDO::FETCH_OBJ);

?>


<body class="hold-transition sidebar-mini">
<?php if (isset($_GET['number']) && $_GET['number'] == 0) { ?>

    <script>
        Swal.fire({
            icon: "error",
            title: "اووووپس...",
            text: "شماره مورد نظر نامعتبر میباشد",
            footer: 'ناموسا شماره رو از کجات در اوردی؟'
        });
    </script>
<?php } ?>


<?php if (isset($_GET['add_customer']) && $_GET['add_customer'] == true) { ?>
    <script>

        Swal.fire({
            icon: "success",
            title: "        مشتری با موفقیت افزوده شد",
            showConfirmButton: false,
            timer: 1500
        });

    </script>


    <?php
}
?>


<?php if (isset($_GET['usernot']) && $_GET['usernot'] == true) { ?>

    <script>
        Swal.fire({
            icon: "error",
            title: "اووووپس...",
            text: "این مشتری قبلا اضافه شده",
            footer: 'کم تر بزن!!'
        });
    </script>

    <?php
}
?>
<div class="wrapper">

    <!-- Navbar Start  -->
    <?php include './partials/navbar/navbar.php'; ?>
    <!-- /.navbar End -->

    <!-- Main Sidebar Container -->
    <?php include './partials/sidebar/sidebar.php'; ?>

    <!--  END Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">اویرایش پروژه</h3>
                </div>


                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="action/save-customer.php" role="form">

                    <div class="card-body">
                        <div class="form-group ">
                            <label for="product-name">نام پروژه :</label>
                            <input value="<?php echo $data->name?>" type="text" name="name" class="form-control"
                                   placeholder="نام پروژه را به صورت کامل وارد کنید">
                        </div>
                        <div class="form-group ">
                            <label for="product-price">هزینه پروژه(تومان)</label>
                            <input value="<?php echo $data->price?>" type="number" class="form-control" name="phone" id="exampleInputPassword1"
                                   placeholder="هزینه پروژه را به توماان وارد کنید">
                        </div>
                        <div class="form-group ">
                            <label for="product-price">درصد تکمیلی پروژه	</label>
                            <input value="<?php echo $data->project_status?>" type="number" class="form-control" name="phone" id="exampleInputPassword1"
                                   placeholder="به درصد وارد کنید برای مثال 80">
                        </div>
                        <div class="form-group">
                            <label>آیا نماد اعتماد ثبت شده؟</label>
                            <select value="<?php echo $data->name?>" name="project_type" class="form-control select2 select2-hidden-accessible"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option>بله</option>
                                <option>اخیر</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>آیا در گاه پرداخت ثبت شده؟</label>
                            <select name="project_type" class="form-control select2 select2-hidden-accessible"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option>بله</option>
                                <option>اخیر</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>نوع پروژه</label>
                            <select name="project_type" class="form-control select2 select2-hidden-accessible"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option>وردپرسی</option>
                                <option>اختصاصی</option>
                                <option>نامعلوم</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>انتخاب مشتری</label>
                            <select name="project_type" class="form-control select2 select2-hidden-accessible"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <?php
                                foreach ($data_name

                                         as $key => $item){

                                    ?>
                                    <option><?php echo $item->name?></option>

                                <?php }?>

                            </select>
                        </div>



                    </div>


                    <div class="card-footer">
                        <button type="submit" name="save_customer" class="btn btn-primary">ذخیره مشتری</button>
                    </div>

                </form>






            </div>

        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>