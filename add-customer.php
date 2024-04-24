<?php include './partials/head/head.php';
include_once './config/loader.php';
$auth->is_login();

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
                    <h3 class="card-title">افزودن مشتری</h3>
                </div>


                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="action/save-customer.php" role="form">

                    <div class="card-body">
                        <div class="form-group ">
                            <label for="product-name">نام مشتری</label>
                            <input type="text" name="name" class="form-control"
                                   placeholder="نام مشتری را به صورت کامل وارد کنید">
                        </div>
                        <div class="form-group ">
                            <label for="product-price">شماره تلفن</label>
                            <input type="text" class="form-control" name="phone" id="exampleInputPassword1"
                                   placeholder="شماره تلفن  را با 0 وارد کنید">
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
                        <div class="form-group ">
                            <label for="product-name">معرف</label>
                            <input type="text" name="referencer" class="form-control"
                                   placeholder="اسم معرف کارفرما را وراد کنید">


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