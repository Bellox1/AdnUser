<div class="container pt-4 pb-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 col-12">

      <div class="card shadow">
        <div class="card-header bg-primary text-white text-center d-flex align-items-center justify-content-center gap-2">
          <i class="bi bi-plus-circle-fill fs-4"></i>
          <h2 class="mb-0 fw-semibold">Ajouter une annonce</h2>
        </div>

        <div class="card-body">

          <form action="includes/annonces/traitement.php" method="POST" enctype="multipart/form-data" id="form">

            <div class="mb-3">
              <label for="titre" class="form-label fw-semibold">Titre :</label>
              <div class="input-group">
                <span class="input-group-text bg-primary text-white"><i class="bi bi-card-text"></i></span>
                <input type="text" name="titre" class="form-control" id="titre" placeholder="Titre de l'annonce" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="description" class="form-label fw-semibold">Description :</label>
              <textarea name="description" class="form-control" id="description" rows="4" placeholder="Décrivez votre annonce..." required></textarea>
            </div>

            <div class="mb-3">
              <label for="image" class="form-label fw-semibold">Image :</label>
              <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>

            <div class="d-grid">
              <button class="btn btn-primary fw-semibold" type="submit">
                <i class="bi bi-upload me-2"></i> Publier l’annonce
              </button>
            </div>

          </form>

        </div>
      </div>

    </div>
  </div>
</div>
