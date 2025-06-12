<?php
include_once("../connexion.php");
session_start();

if (isset($_POST["nom"]) && !empty($_POST["nom"]) &&isset($_POST["prenom"]) && !empty($_POST["prenom"]) && isset($_POST["age"]) && 
    !empty($_POST["age"]) && isset($_POST["identifiant"]) && !empty($_POST["identifiant"]) && isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"])
) {
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $age = htmlspecialchars($_POST["age"]);
    $identifiant = htmlspecialchars($_POST["identifiant"]);
    $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT);

    $req = $pdo->prepare("INSERT INTO users(nom, prenom, age, identifiant, mot_de_passe)
        VALUES (:nom, :prenom, :age, :identifiant, :mot_de_passe)");

    $stmt = $req->execute([
        "nom" => $nom,
        "prenom" => $prenom,
        "age" => $age,
        "identifiant" => $identifiant,
        "mot_de_passe" => $mot_de_passe
    ]);

    if ($stmt) {
        $_SESSION['auth'] = true;
        $_SESSION['user'] = [
            'id' => $pdo->lastInsertId(),
            'nom' => $nom,
            'prenom' => $prenom,
            'age' => $age,
            'identifiant' => $identifiant
        ];
        header('Location: ../../index.php');
        exit();
    } else {
        echo "Non réussie";
    }

} else {
    header('Location: register.php');
    exit();
}

?>
