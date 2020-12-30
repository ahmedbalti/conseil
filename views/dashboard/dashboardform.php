<?PHP
include "../../controller/conseilC.php";
session_start();
if ($_SESSION["id_admin"] == "") {
    header('Location: login.php');
}
$conseil_dC = new conseil_dC();
$listeUsers = $conseil_dC->afficherConseil();
if (isset($_POST['logout'])) {
    $_SESSION["id_admin"] = "";
    header('Location: login.php');
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
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../home/index.php">Conseils</a>

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
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover table-bordered table-responsive" align='center'>

                    <tr>
                        <!-- <th>id</th> -->
                        <th>Type</th>
                        <th>Titre</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>

                    <?PHP
                    foreach ($listeUsers as $user) {
                        ?>
                        <tr>
                            <!-- <td><?PHP echo $user['id']; ?></td> -->
                            <td><?PHP echo $user['type']; ?></td>
                            <td><?PHP echo $user['titre']; ?></td>
                            <td>
                                <image width='100' src="<?PHP echo "../uploads/" . $user['image']; ?>"/>
                            </td>
                            <td><?PHP echo $user['description']; ?></td>

                            <td>
                                <a href="dashboardformedit.php?id=<?PHP echo $user['id']; ?>"> Modifier </a>
                            </td>
                            <td>
                                <!--form method="POST" action="supprimerUtilisateur.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form-->
                                <a href="dashboardformdelete.php?id=<?PHP echo $user['id']; ?>" onClick="return confirm('\n'+
'Etes-vous sûr que vous voulez supprimer??');"> Supprimer </a>
                            </td>

                        </tr>
                        <?PHP
                    }
                    ?>
                </table>
                <a href="dashboardformadd.php">
                    <div class="btn btn-success">ajouter un nouveau conseil
                    </div>
                </a>
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