<?php include './partials/head/head.php' ?>



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
                                <h3 class="card-title">جدول داده ۱</h3>
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
                                            <table id="example2" class="table table-bordered table-hover dataTable" role="grid">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="موتور رندر: activate to sort column descending">موتور رندر</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="مرورگر: activate to sort column ascending">مرورگر</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="سیستم عامل: activate to sort column ascending">سیستم عامل</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="ورژن: activate to sort column ascending">ورژن</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="امتیاز: activate to sort column ascending">امتیاز</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">Gecko</td>
                                                        <td>Firefox ۱.۰</td>
                                                        <td>Win ۹۸+ / OSX.۲+</td>
                                                        <td>۱.۷</td>
                                                        <td>A</td>
                                                    </tr>

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">موتور رندر</th>
                                                        <th rowspan="1" colspan="1">مرورگر</th>
                                                        <th rowspan="1" colspan="1">سیستم عامل</th>
                                                        <th rowspan="1" colspan="1">ورژن</th>
                                                        <th rowspan="1" colspan="1">امتیاز</th>
                                                    </tr>
                                                </tfoot>
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