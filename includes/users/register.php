<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inscription - AdnUser</title>

  <!-- Bootstrap CSS -->
  <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
  <link href="../../assets/icons/bootstrap-icons.css" rel="stylesheet" />
  <link rel="shortcut icon" href="../../assets/images/logo.png" type="image/x-icon">

  <style>
    body {
      background: linear-gradient(135deg, #4f8cff 0%, #3358d1 100%);
      min-height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .register-card {
      background: #fff;
      border-radius: 1rem;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
      padding: 1.5rem 2rem;
      width: 100%;
      max-width: 500px; /* plus large */
    }

    .logo {
      width: 60px;
      height: 60px;
      background: #eaf1ff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem auto;
      font-size: 2rem;
      color: #4f8cff;
    }

    .btn-primary {
      background: linear-gradient(90deg, #4f8cff 0%, #3358d1 100%);
      border: none;
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #3358d1 0%, #4f8cff 100%);
    }

    .form-control:focus {
      border-color: #4f8cff;
      box-shadow: 0 0 0 0.15rem rgba(79, 140, 255, 0.2);
    }

    .form-label {
      font-size: 0.9rem;
      margin-bottom: 0.2rem;
    }

    .input-group {
      margin-bottom: 0.75rem;
    }

    @media (max-width: 575.98px) {
      .register-card {
        padding: 1.5rem;
        margin: 1rem;
      }
    }
  </style>
</head>
<body>
 
  <div class="register-card">

    <div class="logo mb-3">
            <img src="../../assets/images/logo.png" alt="Logo" style="width: 50px; height: 50px;">
    </div>
    <h5 class="text-center mb-3">Créer un compte</h5>

    <form method="post" action="traitement.php" id="form">
      <div class="mb-2">
        <label for="nom" class="form-label">Nom :</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-person-vcard text-primary"></i></span>
          <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
        </div>
        <span id="errorN" class="text-danger small"></span>
      </div>

      <div class="mb-2">
        <label for="prenom" class="form-label">Prénom :</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-person text-primary"></i></span>
          <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom">
        </div>
        <span id="errorP" class="text-danger small"></span>
      </div>

      <div class="mb-2">
        <label for="age" class="form-label">Âge :</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-hourglass-split text-primary"></i></span>
          <input type="number" name="age" class="form-control" id="age" placeholder="Âge" min="1">
        </div>
        <span id="errorA" class="text-danger small"></span>
      </div>

      <div class="mb-2">
        <label for="identifiant" class="form-label">Identifiant :</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-envelope text-primary"></i></span>
          <input type="text" name="identifiant" class="form-control" id="identifiant" placeholder="exemple@gmail.com">
        </div>
        <span id="errorI" class="text-danger small"></span>
      </div>
       <div>
    <?php if (isset($_GET['error']) && $_GET['error'] == 'identifiant_exists'): ?>
      <div class="alert alert-danger text-center mb-3">
        L'identifiant existe déjà. Veuillez en choisir autre.
      </div>
    <?php endif; ?>
  </div>
      <div class="mb-2">
        <label for="mot_de_passe" class="form-label">Mot de passe :</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-lock text-primary"></i></span>
          <input type="password" name="mot_de_passe" class="form-control" id="mot_de_passe" placeholder="Mot de passe">
        </div>
        <span id="errorMP" class="text-danger small"></span>
      </div>

      <div class="mb-3">
        <label for="password_confirm" class="form-label">Confirmation :</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-lock-fill text-primary"></i></span>
          <input type="password" name="password_confirm" class="form-control" id="mot_de_passe_C" placeholder="Confirmer">
        </div>
        <span id="errorMPC" class="text-danger small"></span>
      </div>

      <button type="submit" class="btn btn-primary w-100 mb-2">S'inscrire</button>
    </form>

    <div class="text-center">
      <span class="text-muted small">Déjà un compte ?</span>
      <a href="login.php" class="small text-primary">Se connecter</a>
    </div>
  </div>

  <script src="../../js/users/global.js"></script>
  <script src="../../js/users/insc.js"></script>

</body>
</html>
