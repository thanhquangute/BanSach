<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <script src ="Javascript/jquery.min.js"></script>
    <script src ="bootstrap/js/bootstrap.min.js "></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/login.css"/>
    <script src="Javascript/cart.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
</head>
<body>
    <div style="background-color: #D6DADC;height: 660px;">
    	<div class="container" style="text-align: center;">
            <div class="col-md-8 body-login">
                <form  class="form-horizontal" action="" method="post" id="">
                    <p id="txtDN">Đăng nhập</p>
                    <p id="txt-mota-DN">Đăng nhập hoặc đăng ký thành viên nhanh bằng tài khoản</p>
                    <div class="row" style="text-align: center;padding-left: 160px;padding-right: 80px;padding-top: 20px;">
                        <div class="col-md-5">
                            <button type="button" class="btn btn-facebook-login"><span class="fa fa-facebook" style="color: white"></span> &nbsp; Facebook</button>
                        </div>
                        <div class="col-md-5">
                            <button type="button" class="btn btn-google-login"><span class="fa fa-google" style="color: white"></span>&nbsp; Google</button>
                        </div>
                    </div>
                    <div class="form-login"><br><hr>
                        <p id="txt-mota-DN">Đăng nhập bằng tài khoản PIBOOK</p><br>
                        <div class="form-group" style="padding-left: 100px;padding-right: 100px;">
                            <input type="text" class="form-control" id="email" style="height: 40px;">
                        </div>
                        <div class="form-group" style="padding-left: 100px;padding-right: 100px;">
                            <input type="password" class="form-control" id="password" style="height: 40px;">
                        </div>
                            <a href="#" class="forgot-pass" style="float: left;padding-left: 100px;padding-bottom: 10px;">Quên mật khẩu?</a><br>
                        <button type="button" class="btn btn-warning btn-login" style="padding-right: 100px;padding-left: 100px;height: 40px; font-weight: bold;width: 70%;">Đăng nhập</button>
                        <hr>
                        <p id="txt-signup">Chưa có tài khoản? <a href="#" class="txt-sign-up">Đăng ký ngay</a></p>
                        <br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>