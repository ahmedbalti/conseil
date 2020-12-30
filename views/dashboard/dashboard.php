<?PHP
include "../../controller/conseilC.php";
session_start();
if ($_SESSION["id_admin"] == "") {
    header('Location: login.php');
}
if (isset($_POST['logout'])) {
    $_SESSION["id_admin"] = "";
    header('Location: login.php');
}
$conseil_dC = new conseil_dC();
$count = $conseil_dC->gettypesname();
$liste = $conseil_dC->gettypecount();

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
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages: ["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    var table = "<?php
        while ($row = $count->fetch(PDO::FETCH_ASSOC)) {
            echo $row['total'] . " ";
        }
        ?>"
    var pourcentage = "<?php
        while ($row = $liste->fetch(PDO::FETCH_ASSOC)) {
            echo $row['total'] . " ";
        }
        ?>"
    var t = 0;

    var pr = pourcentage.split(" ");

    var event = table.split(" ");

    for (var i = 0; i <= event.length - 2; i++) {
        t = t + parseInt(pr[i]);
    }


    window.data = []
    for (var i = 0; i <= event.length - 2; i++) {
        var e = [event[i], (pr[i]*100)/t];
        window.data.push(e);
    }

    function drawChart() {
        var data = google.visualization.arrayToDataTable([['Task', 'Percentage'], ...window.data]);
        var options = {
            title: 'Conseil',
            pieHole: 0.4,
        };
        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }
</script>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../home/index.php">conseils</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="dashboard.php" style="    background: darkgreen;">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="dashboardform.php">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Gestion conseil</span>
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
            <li class="breadcrumb-item active">Statistique</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row justify-content-center align-items-center" style="height: 100vh">
            <div class="col-lg-6">
                <div id="donutchart" style="width: 900px; height: 500px;transform: scale(1.8)"></div>
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
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
</div>
</body>
</html>