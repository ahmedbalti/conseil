<?PHP
include "../../controller/admin.php";

if (isset($_GET['login'])) {
    $name = $_GET['name'];
    $password = $_GET['password'];
    $admin = new admin();
    $admin->getadmin($name, $password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SAHTY - Index</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="../../assets/img/hhh.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/login.css" rel="stylesheet">
</head>
<script src="../../assets/js/login.js"></script>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                ADMIN PANEL
            </div>
            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form action="" name="myform" method="get" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label class="form-control-label">USERNAME</label>
                            <input type="text" name="name" class="form-control">
                            <span id="name" style="color: white"></span>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">PASSWORD</label>
                            <input type="password" name="password" class="form-control" i>
                            <span id="password" style="color: white"></span>
                        </div>

                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-12 d-flex justify-content-center login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary" name="login">LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>
</body>
</html>
