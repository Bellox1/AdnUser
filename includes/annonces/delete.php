<?php
include_once("../connexion.php");

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = strip_tags($_GET["id"]);

    // Récupérer le nom de l'image avant suppression
    $reqSelect = $pdo->prepare("SELECT image FROM annonces WHERE id = :id");
    $reqSelect->execute(["id" => $id]);
    $annonce = $reqSelect->fetch(PDO::FETCH_ASSOC);

    if ($annonce) {
        // Suppression du fichier image si il existe
        $imagePath = __DIR__ . '/uploads/' . $annonce['image'];
        if (!empty($annonce['image']) && file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Suppression de l'annonce en base
        $reqDelete = $pdo->prepare("DELETE FROM annonces WHERE id = :id");
        $stmt = $reqDelete->execute(["id" => $id]);

        if ($stmt) {
            header("Location: ../../annonces.php");
            exit();
        } else {
            echo "Suppression non réussie.";
        }
    } else {
        // Annonce introuvable
        header("Location: ../../annonces.php");
        exit();
    }
} else {
    // ID non défini ou vide
    header("Location: ../../annonces.php");
    exit();
}
?>
