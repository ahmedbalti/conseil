<?PHP

require_once "../../model/forum.php";

class forumC {



    function afficherforum(){

        $sql="SELECT * FROM forum";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function ajouterForum($forum)
    {
        $sql = "INSERT INTO forum (id, nom, prenom, message) 
			VALUES (:id, :nom, :prenom, :message)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'id' => $forum->getId(),
                'nom' => $forum->getNom(),
                'prenom' => $forum->getPrenom(),
                'message' => $forum->getMessage(),
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function recupererforum($id){
        $sql="SELECT * from forum where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $liste=$query->fetch();
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



}

?>