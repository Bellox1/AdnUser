<?php
// Vérification si la session d'authentification existe ou si l'utilisateur est authentifié
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    // Redirection vers la page de connexion si l'utilisateur n'est pas authentifié
    header("Location: includes/users/login.php"); 
    exit();
}
?>
