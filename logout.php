<?php
session_start();        // Reprendre la session en cours
session_unset();        // Supprimer toutes les variables de session
session_destroy();      // Détruire la session
header('Location: includes/users/login.php'); // Redirection 
exit();
 ?>