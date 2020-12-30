<?php
require_once '../../Controller/forum.php';
require_once '../../Model/forum.php';

$forumC =  new forumC();
session_start();
if ($_SESSION["id_admin"] == "") {
    header('Location: login.php');
}
if (isset($_POST['logout'])) {
    $_SESSION["id_admin"] = "";
    header('Location: login.php');
}
if (isset($_POST['submit'])) {
    $forum = new forum(0,$_POST['nom'],  $_POST['prénom'], $_POST['message']);
    // $forumC->addforum($forum);
    header('Location:dashboardform.php');
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
    <link href="../../assets/css/dashboard.css" rel="stylesheet">
</head>
<script src="../../assets/js/formvalidation.js">

</script>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../home/index.php">forum</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link active" style="    background: darkgreen;" href="dashboardform.php">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Gestion forum</span>
                </a>
            </li>
        </ul>


    </div>
    <form method="post">
        <button type="submit" style="color: white;border: none;background-color: transparent;" name="logout">logout
        </button>
    </form>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Gestion forum</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <form action=""   name="myForm" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">

                    <div class="form-group has-error">
                        <div class="control-label">
                            <label>Nom</label>
                        </div>
                        <div class="col-75">
                            <input type="text" class="form-control" name="nom"   placeholder="nom">
                        </div>
                        <span class="error-message" id="type" ></span>
                    </div>
                    <div class="form-group has-error">
                        <div class="control-label">
                            <label>Prénom</label>
                        </div>
                        <div class="col-75">
                            <input type="text" class="form-control" name="prénom"  placeholder="prénom">
                        </div>
                        <span class="error-message" id="titre" ></span>
                    </div>
                    <br>
                    <div class="form-group has-error">
                        <div class="control-label">
                            <label>Message</label>
                        </div>
                        <textarea type="text" class="form-control"  name="message" placeholder="veuillez ..." style="height: 350px"></textarea>
                        <span class="error-message" id="description" ></span>
                        <br>
                        <div class="form-group has-error">
                            <input type="submit" " class="form-control btn btn-success" value="Submit" id="submit" name="submit">
                        </div>
                </form>
            </div>
        </div>
        <!-- Area Chart Example-->

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">

            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->

</div>
</body>
</html>