<?PHP
    include "../../config.php";
	require_once "../../model/conseil.php";


	class conseil_dC {
		
		function afficherConseil(){
			
			$sql="SELECT * FROM conseil_d";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
	
		function ajouterConseil($conseil_d){
			$sql="INSERT INTO conseil_d (id, type, titre, image, description ) 
			VALUES (:id, :type, :titre, :image, :description )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
                    'id' => $conseil_d->getId(),
					'type' => $conseil_d->getType(),
					'titre' => $conseil_d->getTitre(),
					'image' => $conseil_d->getImage(),
					'description' => $conseil_d->getDescription()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererconseil($id){
			$sql="SELECT * from conseil_d where id=$id";
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

		
		public function addconseil($conseil_d) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO conseil_d (type,titre,  image ,description ) 
                VALUES (:type, :titre, :image, :description )'
				);
				echo $query->queryString;
                $rd = $query->execute([
					'type' => $conseil_d->getType(),
					'titre' => $conseil_d->getTitre(),
					'image' => $conseil_d->getImage(),
					'description' => $conseil_d->getDescription()
					
				]);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
		}
		
		function gettypesname(){

            $sql="SELECT DISTINCT type as total FROM conseil_d group  by type";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
		}
		
		function gettypecount(){

            $sql="SELECT type,count(*) as total FROM conseil_d group  by type ";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

	function supprimerconseil($id){
		$sql="DELETE FROM conseil_d WHERE id= :id";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
			$req->execute();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}} 
	
	
		function modifierConseil($conseil_d,$id){
			$sql="UPDATE conseil_d SET type=:type,titre=:titre, image=:image, description=:description   WHERE id=:id";
	
			$db = config::getConnexion();
			//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{
			$req=$db->prepare($sql);
			$id=$conseil_d->getId();
			$type=$conseil_d->getType();
			$titre=$conseil_d->getTitre();
			$image=$conseil_d->getImage();
			$description=$conseil_d->getDescription();
			$datas = array(':id'=>$id,':type'=>$type,':titre'=>$titre, ':image'=>$image,':description'=>$description   );
			$req->bindValue(':id',$id); 
			$req->bindValue(':type',$type);
			$req->bindValue(':titre',$titre);
			$req->bindValue(':image',$image);
			$req->bindValue(':description',$description);
			$s=$req->execute();
			}
			catch (Exception $e){
				echo " Erreur ! ".$e->getMessage();
	   echo " Les datas : " ;
	  print_r($datas);
			}
	
		}
}
?>