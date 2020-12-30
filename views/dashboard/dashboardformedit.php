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

if (isset($_GET['id'])) {
    $cons = new conseil_dC();
    $result = $cons->recupererconseil($_GET['id']);
    $id = $result['id'];
    $type = $result['type'];
    $titre = $result['titre'];
    $image = $result['image'];
    $description = $result['description'];
}
if (!empty($_FILES["image"]["name"])) {
    // target dir houwa dossier bech n7otou fih taswira
    $target_dir = "../uploads/";
    // hedha numéro aléa bech mayjich esm mtaa taswira deja mawjoud fel dossier
    $randomNumber = strval(rand(0, 10000));
    // nom de fichier mel pc + el dossier eli bech yet7at fih, exple: /uploads/paris.png
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    // taatina el extension mtaa el fichier (.png, .jpeg...)
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // hedhi naamlouha bech nthabtou ken el fichier eli l utilisateur amalou upload de type image wala type ekher
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        // move_uploaded_file heya eli thez el fichier mel pc mta3 el utilisateur lel serveur mte3na.
        // el parametre louwel houwa l emplacement mtaa el fichier eli bech thezou mel utilisateru
        // el parametre el theni houwa esm el fichier fel serveur mte3na eli houwa n7otou fih el num alea
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . $randomNumber . basename($_FILES["image"]["name"]))) {
            // ken el upload t3adda, n7otou el variable $imageName = el 2esm mtaa el fichier fel dossier uploads mte3na bech neketbouha fel base
            $imageName = $randomNumber . basename($_FILES["image"]["name"]);
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
    }
}
if (isset($_POST['modifier'])) {
    $consModifie = new conseil_d($_POST['id_ini'], $_POST['type'], $_POST['titre'], $imageName ?: $result['image'], $_POST['description']);
    $cons->modifierconseil($consModifie, $_POST['id_ini']);
    header('Location: dashboardform.php');
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
                        <label class="control-label" for="error">saisir le type</label>
                        <input type="text" class="form-control"

                               placeholder="type" name="type" value="<?PHP echo $type ?>"/>
                        <span class="error-message" id="type"></span>
                    </div>
                    <div class="form-group has-error">
                        <label class="control-label" for="error">saisir le titre</label>
                        <input type="text" class="form-control"
                              name="titre" value="<?PHP echo $titre ?>"/>
                        <span class="error-message" id="titre"></span>
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">Image actuelle</label>
                        <br>
                        <image class="col-md-6 img-thumbnail " style="margin: auto;display:block" width='20%'
                               src="<?PHP echo "../uploads/" . $image; ?>"/>
                        <br>
                        <label class="control-label" for="warning">Modifier l'image</label>
                        <input type="file" class="form-control" id="image" name="image"/>
                    </div>
                    <div class="form-group has-error">
                        <label class="control-label" for="error">saisir la description</label>
                        <textarea type="text" class="form-control"
                                  name="description"><?PHP echo $description ?></textarea>
                        <span class="error-message" id="desciption"></span>
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