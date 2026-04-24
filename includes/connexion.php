<?php
try {
    $pdo = new
   PDO('mysql:host=localhost;dbname=adnuser;charset=utf8',
   'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
   } catch (PDOException $e) {
    echo " " . $e->getMessage();
   }

?>