
<?php include './partials/head/head.php' ?>



<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar Start  -->
<?php include './partials/navbar/navbar.php';?>
  <!-- /.navbar End -->

  <!-- Main Sidebar Container -->
  <?php include './partials/sidebar/sidebar.php';?>

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
              <h3 class="card-title">افزودن محصول جدید</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  role="form">
              <div class="card-body">
                    <div class="form-group ">
                        <label for="product-name">نام محصول</label>
                        <input type="text" class="form-control"  placeholder="نام محصول یا دوره آموزشی خود را وارد کنید">
                      </div>
                      <div class="form-group ">
                        <label for="product-price">قیمت محصول </label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="قیمت محصول یا دوره آموزشی خود را وارد کنید(تومان)">
                      </div>

                      <div class="form-group">
                        <label>نوع محصول :</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                          <option>دوره آموزشی(اسپات پلیر)</option>
                          <option>محصول فیزیکی</option>
                        </select>
                      </div>
                      <div class="form-group ">
                        <label for="product-name">شناسه محصول در اسپات پلیر :</label>
                        <input type="text" class="form-control"  placeholder="شناسه دوره آموزشی خود را در اسپات پلیر وارد کنید">
                        <p class="mt-3">نمیدونی از کجا شناسه رو باید تهیه کنی ؟ این آموزش رو ببین  !!<a href="https://google.com">برای آموزش کلیک کنید</a></a></p>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">عکس محصول</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>

</div>
</form>


              <div class="card-footer">
                <button type="submit" class="btn btn-primary">ذخیره محصول</button>
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
