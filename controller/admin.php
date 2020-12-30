<?PHP
include "../../config.php";
require_once "../../model/regime.php";

class admin
{
    function getadmin($name, $password)
    {

        $sql = "SELECT * from admin where name='" . $name . "' and password='" . $password . "'";
        $db = config::getConnexion();
        try {
            $result = $db->query($sql);
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    session_start();
                    $_SESSION["id_admin"] = $row['id'];
                    header('Location: dashboardform.php');
                }
            }
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());

        }
    }


}