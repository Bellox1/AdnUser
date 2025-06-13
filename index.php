<?php include("includes/head.php"); ?>
<?php include('includes/auth.php'); ?>
                    <div class="col-md-4">
                        <div class="card p-4 text-center" id="users_list">
                            <i class="bi bi-people display-5 text-primary mb-2"></i>
                            <h5>Utilisateurs</h5>
                            <p class="mb-0">Gérez vos utilisateurs facilement.</p>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="card p-4 text-center" id="annonces_list">
                            <i class="bi bi-megaphone display-5 text-success mb-2"></i>
                            <h5>Annonces</h5>
                            <p class="mb-0">Visualisez vos annonces</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 text-center" id="about_list">
                            <i class="bi bi-info-circle display-5 text-warning mb-2"></i>
                            <h5>À propos</h5>
                            <p class="mb-0">En savoir plus sur nous.</p>
                        </div>
                    </div>

<script src="js/script.js"></script>
<script>
  const tete = document.getElementById('tete');
  document.addEventListener('DOMContentLoaded', function() {
    tete.textContent = "Bienvenue sur le Dashboard";
  });
</script>
<?php include("includes/footer.php"); ?>
