
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/login-style.css">
    <link rel="stylesheet" href="dist/css/bootstrap533.min.css">

    <title>login and register with otp</title>
</head>

<body>
<div class="container" id="container">
    <div class="form-container sign-up">


    </div>
    <div class="form-container sign-in">
        <!----------------------------------Login-------------------------------------->
        <?php include_once './inc/login-form.php'?>
        <!----------------------------------End Login-------------------------------------->

    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>ورود به پنل!</h1>
                <p>Enter your Personal details to use all of site features</p>
                <button class="hidden" id="login">Sign In</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>به پنل مدیریتی آریاس کد خوش آمدید</h1>
                <p>برای استقاده از سرویس نام کاربری و رمز عبور خود را وارد کنید</p>

            </div>
        </div>
    </div>
</div>
</body>
<script src="dist/js/login-js.js"></script>

</html>