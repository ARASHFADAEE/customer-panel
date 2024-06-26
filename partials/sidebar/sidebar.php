<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت مشتریان</span>
    </a>

    <!-- Sidebar  -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="./img/3db2bb65-5da9-4487-b713-0bd00035f201.jpg" class="img-circle elevation-2"
                         alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?php if (isset($_SESSION['user_name'])) {
                            echo $_SESSION['user_name'] . ' ' . 'خوش آمدید ';
                        } ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="/panel" class="nav-link active">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                داشبورد
                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                مشتریان
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./customers.php?all_customers=1"
                                   class="nav-link  <?php if (isset($_GET['all_customers'])) { ?><?php echo "active";
                                   }; ?>">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>همه مشتریان</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./add-customer.php?add=1"
                                   class="nav-link <?php if (isset($_GET['add'])) { ?><?php echo "active";
                                   }; ?>">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>افزودن مشتری</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ارسال یاد اور(پیامک)</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-newspaper-o"></i>
                            <p>
                                پروژه ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./projects.php?all-project=1"
                                   class="nav-link  <?php if (isset($_GET['all-project'])) { ?><?php echo "active";
                                   }; ?>">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>همه پروژه ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./add-project.php?add-project=1"
                                   class="nav-link <?php if (isset($_GET['add-project'])) { ?><?php echo "active";
                                   }; ?>">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>افزودن پروژه</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="./log-out.php" class="nav-link">
                            <i class="nav-icon fa fa-power-off"></i>
                            <p>
                                خروج از پنل
                                <span class="right badge badge-danger">خروج از ماتریکس</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>