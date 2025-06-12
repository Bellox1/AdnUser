<?php

$success = $error = "";
$id;

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = strip_tags($_GET["id"]);
    $req = $pdo->prepare("SELECT * FROM users WHERE id= :id");
    $req->execute(["id" => $id]);
    $user = $req->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        header("Location: ../../users.php");
        exit();
    }
} else {
    header("Location: ../../users.php");
    exit();
}

if (
    isset($_POST["nom"], $_POST["prenom"], $_POST["age"], $_POST["identifiant"], $_POST["id"]) &&
    !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["age"]) && !empty($_POST["identifiant"]) && !empty($_POST["id"])
) {
    $id = strip_tags($_POST["id"]);
    $nom = strip_tags($_POST["nom"]);
    $prenom = strip_tags($_POST["prenom"]);
    $age = strip_tags($_POST["age"]);
    $identifiant = strip_tags($_POST["identifiant"]);

    $req = $pdo->prepare("UPDATE users SET nom = :nom, prenom = :prenom, age = :age, identifiant = :identifiant WHERE id = :id");
    $stmt = $req->execute([
        "nom" => $nom,
        "prenom" => $prenom,
        "age" => $age,
        "identifiant" => $identifiant,
        "id" => $id
    ]);

    if ($stmt) {
        // Vérification : est-ce l'utilisateur connecté qu'on met à jour ?
        if (isset($_SESSION['user']) && $_SESSION['user']['id'] == $id) {
            $_SESSION['user']['nom'] = $nom;
            $_SESSION['user']['prenom'] = $prenom;
            $_SESSION['user']['age'] = $age;
            $_SESSION['user']['identifiant'] = $identifiant;
        }
        // Redirection vers la page des utilisateurs
        header("Location: users.php");
        exit();
        $success = "Les informations ont été mises à jour avec succès.";
    } else {
        $error = "Erreur lors de la mise à jour.";
    }
}
?>

<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 col-12">

      <div class="card shadow">
        <div class="card-header bg-primary text-white text-center d-flex align-items-center justify-content-center gap-2" style="min-height: 56px;">
          <i class="bi bi-person-badge fs-4" style="color: #bee3f8;"></i>
          <h2 class="mb-0 fw-bold">Mettre à jour l'utilisateur</h2>
        </div>
        <div class="card-body">

          <?php if(!empty($success)): ?>
            <div class="alert alert-success text-center"><?php echo $success; ?></div>
          <?php endif; ?>

          <?php if(!empty($error)): ?>
            <div class="alert alert-danger text-center"><?php echo $error; ?></div>
          <?php endif; ?>

          <form action="" method="POST" id="form">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">

            <div class="mb-3">
              <label for="nom" class="form-label fw-semibold">Nom :</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-vcard text-primary"></i></span>
                <input type="text" name="nom" id="nom" class="form-control" value="<?php echo htmlspecialchars($user['nom']); ?>" required>
              </div>
              <span id="errorN" class="text-danger small"></span>
            </div>

            <div class="mb-3">
              <label for="prenom" class="form-label fw-semibold">Prénom :</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person text-primary"></i></span>
                <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo htmlspecialchars($user['prenom']); ?>" required>
              </div>
              <span id="errorP" class="text-danger small"></span>
            </div>

            <div class="mb-3">
              <label for="age" class="form-label fw-semibold">Âge :</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-hourglass-split text-primary"></i></span>
                <input type="number" name="age" id="age" class="form-control" value="<?php echo htmlspecialchars($user['age']); ?>" min="1" required>
              </div>
              <span id="errorA" class="text-danger small"></span>
            </div>

            <div class="mb-3">
              <label for="identifiant" class="form-label fw-semibold">Identifiant :</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope text-primary"></i></span>
                <input type="text" name="identifiant" id="identifiant" class="form-control" value="<?php echo htmlspecialchars($user['identifiant']); ?>" required>
              </div>
              <span id="errorI" class="text-danger small"></span>
            </div>

            <div class="d-grid">
              <button class="btn btn-primary fw-semibold" type="submit">
                <i class="bi bi-arrow-repeat me-1"></i> Mise à jour
              </button>
            </div>

          </form>

        </div>
      </div>

    </div>
  </div>
</div>
