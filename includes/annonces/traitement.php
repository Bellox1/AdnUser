<?php
require_once "../connexion.php";

// On vérifie que le formulaire a bien été envoyé en POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // On récupère et sécurise les données du formulaire
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);

    // On vérifie qu’une image a bien été envoyée et qu’il n’y a pas d’erreur
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

        // On récupère le fichier temporaire
        $nomTemporaire = $_FILES['image']['tmp_name'];

        // On donne un nouveau nom unique au fichier avec un timestamp
        $nomFichier = time() . '_' . basename($_FILES['image']['name']);

        // On définit l’endroit où on veut enregistrer l’image
        $cheminDestination = "uploads/" . $nomFichier;

        // On déplace l’image vers le dossier final
        if (move_uploaded_file($nomTemporaire, $cheminDestination)) {

            // Si l’image a bien été enregistrée, on ajoute les infos dans la base
            $sql = "INSERT INTO annonces (titre, description, image) VALUES (:titre, :description, :image)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                'titre' => $titre,
                'description' => $description,
                'image' => $nomFichier
            ]);

            // Une fois terminé, on retourne à la page des annonces
            header("Location: ../../annonces.php");
            exit;

        } else {
            // Si le fichier n’a pas pu être déplacé
            echo "Erreur lors du téléchargement de l'image";
        }

    } else {
        // Si aucune image n’a été envoyée ou qu’il y a une erreur
        echo "Aucune image valide n'a été envoyée";
    }

} else {
    // Si on accède à cette page sans passer par le formulaire
    header("Location: ajout.php");
    exit;
}
?>
