<?php include("includes/head.php"); ?>
<?php include("includes/connexion.php"); // importation de la page conexion .php  ?>
<?php include('includes/auth.php'); ?>
<?php include("includes/users/update.php"); //gère la mise à jours coté php et le formulaire ?>
<script>
    const title = document.getElementById("title");
    document.addEventListener("DOMContentLoaded", function() {
    title.textContent ="Modifier utilisateur -AdnUSer";
    
    });
</script>
<script src="js/users/global.js"></script> 
<script src="js/users/update.js"></script>
<?php include("includes/footer.php"); ?>
