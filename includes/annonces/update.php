<?php

// Initialisation des messages de succès/erreur
$success = $error = ""; 

// Variable pour stocker l'ID de l'annonce
$id;

// Vérifie si un ID est passé dans l'URL (GET)
if (isset($_GET["id"])) {
    if (!empty($_GET["id"])) {
        // Nettoie l'ID (supprime balises HTML)
        $id = strip_tags($_GET["id"]);

        // Prépare la requête pour récupérer l'annonce avec cet ID
        $req = $pdo->prepare("SELECT * FROM annonces WHERE id = :id");
        $req->execute(["id" => $id]);

        // Récupère les données de l'annonce
        $annonce = $req->fetch(PDO::FETCH_ASSOC);

        // Si aucune annonce trouvée, redirection
        if (!$annonce) {
            header("Location: ../../annonces.php");
            exit;
        }
    } else {
        // Redirection si ID vide
        header("Location: ../../annonces.php");
        exit;
    }
} else {
    // Redirection si aucun ID dans l'URL
    header("Location: ../../annonces.php");
    exit;
}

// Si le formulaire est soumis
if (
    isset($_POST["titre"]) && !empty($_POST["titre"]) &&   // titre rempli
    isset($_POST["description"]) && !empty($_POST["description"]) && // description remplie
    isset($_POST["id"]) && !empty($_POST["id"])            // id rempli
) {
    // Nettoie les données reçues
    $id = strip_tags($_POST["id"]);
    $titre = strip_tags($_POST["titre"]);
    $description = strip_tags($_POST["description"]);

    // Image actuelle (au cas où on ne téléverse pas de nouvelle image)
    $image = $annonce['image'];

    // Si une nouvelle image est envoyée
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        // Chemin temporaire du fichier
        $tmp_name = $_FILES["image"]["tmp_name"];

        // Nom unique pour le nouveau fichier (évite les doublons)
        $file_name = uniqid() . '_' . basename($_FILES["image"]["name"]);

        // Destination finale du fichier
        $destination = __DIR__ . '/uploads/' . $file_name;

        // Déplace le fichier depuis le dossier temporaire vers le dossier uploads
        if (move_uploaded_file($tmp_name, $destination)) {
            // Supprime l'ancienne image si elle existe
           if (!empty($annonce['image']) && file_exists(__DIR__ . '/uploads/' . $annonce['image'])) {
                unlink(__DIR__ . '/uploads/' . $annonce['image']);
           }
            // Met à jour le nom de l'image dans la variable
            $image = $file_name;
        }
    }

    // Mise à jour de l'annonce dans la base de données
    $req = $pdo->prepare("UPDATE annonces SET titre = :titre, description = :description, image = :image WHERE id = :id");
    $stmt = $req->execute([
        "titre" => $titre,
        "description" => $description,
        "image" => $image,
        "id" => $id
    ]);

    // Si tout s’est bien passé
    if ($stmt) {
        $success = "Annonce mise à jour avec succès.";

        // Recharge les données mises à jour (pour les afficher)
        $req = $pdo->prepare("SELECT * FROM annonces WHERE id = :id");
        $req->execute(["id" => $id]);
        $annonce = $req->fetch(PDO::FETCH_ASSOC);
    } else {
        // Erreur lors de la mise à jour
        $error = "Erreur lors de la mise à jour de l'annonce.";
    }
}
?>
<div>
 <a href="annonces.php" class="btn btn-primary">
   <i class="bi bi-arrow-left-circle-fill"></i>Retourner à la liste des annonces
  </a>
</div>

<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 col-12">

      <div class="card shadow">
        <div class="card-header bg-primary text-white text-center d-flex align-items-center justify-content-center gap-2" style="min-height: 56px;">
          <i class="bi bi-pencil-square fs-4" style="color: #bee3f8;"></i>
          <h2 class="mb-0 fw-bold">Mettre à jour l'annonce</h2>
        </div>
        <div class="card-body">

          <?php if (!empty($success)) : ?>
            <div class="alert alert-success text-center"><?php echo $success; ?></div>
          <?php endif; ?>

          <?php if (!empty($error)) : ?>
            <div class="alert alert-danger text-center"><?php echo $error; ?></div>
          <?php endif; ?>

          <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($annonce['id']); ?>">

            <div class="mb-3">
              <label for="titre" class="form-label fw-semibold">Titre :</label>
              <input type="text" name="titre" id="titre" class="form-control" value="<?php echo htmlspecialchars($annonce['titre']); ?>" required>
            </div>

            <div class="mb-3">
              <label for="description" class="form-label fw-semibold">Description :</label>
              <textarea name="description" id="description" class="form-control" rows="4" required><?php echo htmlspecialchars($annonce['description']); ?></textarea>
            </div>

            <?php if (!empty($annonce['image'])) : ?>
              <div class="mb-3">
                <label class="form-label fw-semibold">Nom du fichier image actuel :</label><br>
                <span class="text-muted"><?php echo htmlspecialchars($annonce['image']); ?></span>
              </div>
            <?php endif; ?>

            <div class="mb-3">
              <label for="image" class="form-label fw-semibold">Changer l'image (optionnel) :</label>
              <input type="file" name="image" id="image" class="form-control" accept="image/*">
            </div>

            <div class="d-grid">
              <button class="btn btn-primary fw-semibold" type="submit">
                <i class="bi bi-arrow-repeat me-1"></i> Mettre à jour
              </button>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>
