

<?php

?>


<form method="post" action="./action/sign-in.php">
    <h1>ورود به پنل</h1>

    <input type="text" name="key" placeholder="موبایل / ایمیل / نام کاربری">
    <input type="password" name="password" placeholder="رمز عبور">

    <button type="submit" name="signin">ورود به پنل</button>


    <?php
    if(isset($_GET['notuser'])){?>
    <p class="alert alert-danger  ">کاربری با این مضخصات وجود ندارد</p>
    <?php
    }elseif (isset($_GET['userlogin'])){?>
        <p class="alert alert-success  ">login to website</p>
<?php
    }


    ?>




</form>
