<?php include './partials/head/head.php' ?>


<?php include './config/loader.php' ?>



<?php

$sql = "SELECT * FROM `customers`";
$hasuser = $conn->query($sql);
$hasuser->execute();
$data = $hasuser->fetchAll(PDO::FETCH_OBJ);
$row_member = $hasuser->rowCount();


?>
<body class="hold-transition sidebar-mini">
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
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">مشتریان</h3>
                            <h4 class="card-title" style="float: left;">تعداد مشتریان : <?php echo $row_member;?></h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable"
                                               role="grid">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="نام و نام خانوادگی: activate to sort column descending">
                                                    نام و نام خانوادگی
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="شماره تلفن همراه: activate to sort column ascending">
                                                    شماره تلفن همراه
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="معرف: activate to sort column ascending">
                                                    معرف
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="نوع پروژه: activate to sort column ascending">نوع پروژه
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="عملیات: activate to sort column ascending">
                                                    عملیات
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>



                                            <?php
                                            foreach ($data

                                            as $key => $item){

                                            ?>

                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo $item->name ?></td>
                                                <td><?php echo $item->phone ?></td>
                                                <td><?php if ($item->referencer == null) {
                                                        echo "معرفی ندارد";
                                                    } else {
                                                        echo $item->referencer;
                                                    } ?></td>
                                                <td><?php echo $item->project_type ?></td>


                                                <td>حذف</td>
                                            </tr>

                                            </tbody>

                                            <?php
                                            }
                                            ?>

                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
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