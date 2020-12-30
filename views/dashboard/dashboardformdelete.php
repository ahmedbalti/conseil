<?PHP
include "../../controller/conseilC.php";
$conseil_dC=new conseil_dC();
if (isset($_GET["id"])){
    $conseil_dC->supprimerconseil($_GET["id"]);
    header('Location: dashboardform.php');
}

?>