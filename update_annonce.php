<?php include("includes/head.php"); ?>
<?php include("includes/connexion.php"); // importation de la page conexion .php  ?>
<?php include('includes/auth.php'); ?>
<?php include("includes/annonces/update.php"); //gère la mise à jours coté php et le formulaire ?>
<script>
    const title = document.getElementById("title");
    document.addEventListener("DOMContentLoaded", function() {
    title.textContent ="Modifier annonce -AdnUSer";
    
    });
</script>
<?php include("includes/footer.php"); ?>
