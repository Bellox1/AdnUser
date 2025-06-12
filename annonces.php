<?php include("includes/head.php"); ?>
<?php include_once("includes/connexion.php");?>
<?php include('includes/auth.php'); ?>

<div class="d-flex mb-3">
  <button class="btn btn-success me-2" type="button" id="btn">
    <i class="bi bi-plus-circle-fill"></i> Ajouter une annonce
  </button>

  <button class="btn btn-primary" style="display: none;" type="button" id="btna">
    <i class="bi bi-card-list"></i> Afficher la liste des annonces
  </button>
</div>

<div style="display: none;" id="insc">
  <?php include("includes/annonces/ajout.php"); ?>
</div>

<div style="display: block;" id="insca">
  <?php include("includes/annonces/affichage.php"); ?>
</div>

<script src="js/annonces/annonces.js"></script>
<script src="js/script.js"></script>
<?php include("includes/footer.php"); ?>
