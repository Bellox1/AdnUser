<?php
include_once("../connexion.php");
if(isset($_GET["id"]))
{
    if(!empty($_GET["id"]))
    {
        $id=strip_tags($_GET["id"]);
        $req=$pdo->prepare("DELETE FROM users WHERE id= :id");
        $stmt=$req->execute(["id"=>$id]);
        
            if($stmt)
            {
                //Identifiant de l'utilisateur supprimé
              header('Location:../../users.php');
            }
            else{
                echo"Supression non réussie";
            }
    }
    else
    {
        //Identiant de l'utilisateur non renseigné
    header('Location:../../users.php');

    }

}
else{
    // Aucun identifiant de l'utilisateur n'a été fourni
    header('Location:../../users.php');
}


?>