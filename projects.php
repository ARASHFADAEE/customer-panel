<?php
require_once ('./config/loader.php');
include './partials/head/head.php';

$sql = "SELECT * FROM `project`";
$hasproject = $conn->query($sql);
$hasproject->execute();
$data = $hasproject->fetchAll(PDO::FETCH_OBJ);
$row_member = $hasproject->rowCount();
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
                                                    aria-label="نام پروژه(نام سایت): activate to sort column descending">
                                                    نام پروژه(نام سایت)
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="هزینه پروژه(تومان): activate to sort column ascending">
                                                    هزینه پروژه(تومان)
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="درصد تکمیلی پروژه: activate to sort column ascending">
                                                    درصد تکمیلی پروژه
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="نماد اعتماد: activate to sort column ascending">نماد اعتماد
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="درگاه پرداخت: activate to sort column ascending">
                                                    درگاه پرداخت
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
                                                <td><?php echo $item->price ?></td>
                                                <td>%<?php echo $item->project_status?> </td>
                                                <td><?php if($item->enamad == 0){

                                                    echo 'اینمادی ثبت نشده';

                                                    }else{


                                                    echo 'اینماد ثبت شده';
                                                    }?></td>


                                                <td><?php if($item->payment == 0){

                                                        echo 'درگاهی ثبت نشده';

                                                    }else{


                                                        echo 'درگاه ثبت شده';
                                                    }?></td>
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
