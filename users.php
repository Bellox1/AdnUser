<?php include("includes/head.php"); ?>
<?php include_once("includes/connexion.php");?>
<?php include('includes/auth.php'); ?>
<div class="d-flex mb-3">
  <button class="btn btn-success me-2" type="button" id="btn">
    <i class="bi bi-plus-circle-fill"></i> Créer un autre compte
  </button>
</div>
<div>
  <?php include("includes/users/affichage.php"); ?>
</div>
<script src="js/users/users.js"></script>
<script src="js/script.js"></script>
<script src="js/users/global.js"></script>
<script src="js/users/insc.js"></script>
<?php include("includes/footer.php"); ?>

