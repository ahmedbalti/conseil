<?PHP
include "../../controller/forum.php";
session_start();
if ($_SESSION["id_admin"] == "") {
    header('Location: login.php');
}
if (isset($_POST['logout'])) {
    $_SESSION["id_admin"] = "";
    header('Location: login.php');
}

if (isset($_GET['id'])) {
    $cons = new forumC();
    $result = $cons->recupererforum($_GET['id']);
    $id = $result['id'];
    $nom = $result['nom'];
    $prénom = $result['prénom'];
    $message = $result['message'];
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
<script src="../../assets/js/formvalidationedit.js">

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
                <a class="nav-link" href="dashboard.php">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link active" style="    background: darkgreen;" href="dashboardform.php">
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
            <li class="breadcrumb-item active">Gestion conseil</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <form action=""  name="myForm" method="POST" enctype="multipart/form-data"  onsubmit="return validateForm()">
                    <div class="form-group has-success">
                        <label class="control-label" for="success">ID</label>
                        <input type="number" class="form-control" id="success" name="identifient"
                               value="<?PHP echo $id ?>" disabled/>
                    </div>
                    <div class="form-group has-error">
                        <label class="control-label" for="error">saisir le nom</label>
                        <input type="text" class="form-control"

                               placeholder="nom" name="nom" value="<?PHP echo $nom ?>"/>
                        <span class="error-message" id="nom"></span>
                    </div>
                    <div class="form-group has-error">
                        <label class="control-label" for="error">saisir le prénom</label>
                        <input type="text" class="form-control"
                              name="prénom" value="<?PHP echo $prénom ?>"/>
                        <span class="error-message" id="prénom"></span>
                    </div>
                    <div class="form-group has-error">
                        <label class="control-label" for="error">saisir la message</label>
                        <textarea type="text" class="form-control"
                                  name="message"><?PHP echo $message ?></textarea>
                        <span class="error-message" id="message"></span>
                    </div>
                    <div class="d-flex">
                        <input type="submit" name="modifier" class="btn btn-success" value="modifier"
                               style="width: 200px">
                        <a href="dashboardform.php"> <input class="btn btn-success" name="annuler" value="annuler"
                                                            style="margin-left: 20px"></a>
                    </div>

                    <input type="hidden" name="id_ini" value="<?PHP echo $_GET['id']; ?>">
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