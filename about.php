
<?php include("includes/head.php"); ?>
<?php include('includes/auth.php'); ?>

<!-- Animation bulles dynamiques -->
<div class="animated-bg">
    <?php for($i=0;$i<12;$i++): ?>
        <div class="bubble" style="
            left: <?= rand(5,95) ?>vw;
            width: <?= rand(60,160) ?>px;
            height: <?= rand(60,160) ?>px;
            animation-delay: <?= rand(0,18) ?>s;
            animation-duration: <?= rand(12,24) ?>s;
            opacity: <?= rand(12,22)/100 ?>;
        "></div>
    <?php endfor; ?>
</div>

<div class="main-bg py-5 position-relative" style="z-index:1;">
    <div class="container">
        <!-- Présentation de la plateforme (garde l'ancien style) -->
             <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 intro-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4 d-none d-md-block">
                            <img src="assets/images/logo.png" class="img-fluid rounded-start h-100" alt="Plateforme AdnUser" style="object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title text-primary fw-bold mb-3">AdnUser</h1>
                                <p class="card-text lead mb-2">Plateforme moderne de gestion d’annonces et d’utilisateurs.</p>
                                <ul class="list-unstyled mb-2">
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Authentification sécurisée obligatoire</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Gestion CRUD des annonces</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Gestion CRUD des utilisateurs</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Interface intuitive et responsive</li>
                                </ul>
                                <p class="card-text small text-muted">Développé avec PHP, MySQL, Bootstrap, JavaScript.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fonctionnalités principales -->
    <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="row g-4 text-center">
                    <div class="col-md-4">
                        <div class="feature-card p-4 h-100 shadow-sm rounded bg-white">
                            <i class="bi bi-person-lock display-4 text-primary mb-3"></i>
                            <h5 class="fw-bold">Sécurité</h5>
                            <p class="mb-0">Authentification obligatoire avant tout accès au tableau de bord ou aux informations sensibles.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card p-4 h-100 shadow-sm rounded bg-white">
                            <i class="bi bi-card-list display-4 text-success mb-3"></i>
                            <h5 class="fw-bold">Gestion des Annonces</h5>
                            <p class="mb-0">Créez, modifiez, supprimez et consultez facilement toutes vos annonces.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card p-4 h-100 shadow-sm rounded bg-white">
                            <i class="bi bi-people-fill display-4 text-info mb-3"></i>
                            <h5 class="fw-bold">Gestion des Utilisateurs</h5>
                            <p class="mb-0">Administration complète des comptes utilisateurs avec gestion des droits.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Équipe de développement -->
        <h2 class="text-center mb-4 fw-bold">Notre Équipe d'Architectes Logiciels</h2>
        <div class="row g-4 justify-content-center">
            <!-- Mohammed -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm team-card">
                    <img src="assets/images/salou.jpg" class="card-img-top" alt="Mr SALOU Mohammed">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-primary">Mr SALOU Mohammed</h5>
                        <h6 class="text-muted mb-2">Architecte Logiciel</h6>
                        <p class="card-text">Visionnaire et chef de projet, il insuffle l’innovation et l’excellence technique à AdnUser.</p>
                    </div>
                </div>
            </div>
            <!-- Denise -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm team-card">
                    <img src="assets/images/damasso.jpg" class="card-img-top" alt="Mme Damosso Denise">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-primary">Mme Damasso Denise</h5>
                        <h6 class="text-muted mb-2">Architecte Logiciel</h6>
                        <p class="card-text">Passionnée par l’architecture logicielle, elle conçoit des solutions robustes et performantes.</p>
                    </div>
                </div>
            </div>
            <!-- BELLO -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm team-card">
                    <img src="assets/images/bello.jpg" class="card-img-top" alt="Mr BELLO Matinou">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-primary">Mr BELLO Matinou</h5>
                        <h6 class="text-muted mb-2">Architecte Logiciel</h6>
                        <p class="card-text">Fondateur de <strong>BELLOX</strong> : création d’apps web/mobile, solutions no-code (WordPress) et développement sur-mesure.</p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <img src="assets/images/bellox.jpg" alt="BELLOX Entreprise" class="img-fluid rounded">
                    </div>
                </div>
            </div>
            <!-- Maelle -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm team-card">
                    <img src="assets/images/degan.jpg" class="card-img-top" alt="Mme DEGAN Maelle">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-primary">Mme DEGAN Maelle</h5>
                        <h6 class="text-muted mb-2">Architecte Logiciel</h6>
                        <p class="card-text">Architecte logicielle, elle apporte expertise, créativité et rigueur à chaque étape du projet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body, .main-bg {
        background: linear-gradient(135deg, #f8fafc 0%, #e9ecef 100%);
        min-height: 100vh;
        position: relative;
        overflow-x: hidden;
    }
    /* Animation bulles dynamiques */
    .animated-bg {
        position: fixed;
        top: 0; left: 0; width: 100vw; height: 100vh;
        z-index: 0;
        pointer-events: none;
        overflow: hidden;
    }
    .bubble {
        position: absolute;
        bottom: -180px;
        background: radial-gradient(circle at 30% 30%, #0d6efd 80%, #0dcaf0 100%);
        border-radius: 50%;
        filter: blur(1.5px);
        animation-name: floatBubble;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }
    @keyframes floatBubble {
        0% { transform: translateY(0) scale(1);}
        50% { transform: translateY(-60vh) scale(1.08);}
        100% { transform: translateY(-120vh) scale(1);}
    }

    .intro-card {
        background: rgba(255,255,255,0.98);
        border-radius: 18px;
        position: relative;
        z-index: 1;
    }
    .feature-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border: 1.5px solid #e3e6ea;
        background: rgba(255,255,255,0.97);
        box-shadow: 0 2px 8px rgba(13,110,253,0.07);
    }
    .feature-card:hover {
        transform: translateY(-7px) scale(1.04);
        box-shadow: 0 12px 32px rgba(13,110,253,0.13);
        border-color: #0d6efd33;
    }
    .team-card {
        transition: transform 0.4s cubic-bezier(.4,2,.3,1), box-shadow 0.4s;
        border-radius: 18px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 2px 8px rgba(13,110,253,0.07);
        position: relative;
        z-index: 1;
    }
    .team-card:hover {
        transform: translateY(-12px) scale(1.06) rotate(-1deg);
        box-shadow: 0 24px 48px rgba(13,110,253,0.18), 0 0 0 4px #0d6efd22;
        border: 2px solid #0d6efd33;
    }
    .team-card img.card-img-top {
        height: 220px;
        object-fit: cover;
        border-bottom: 1px solid #f1f1f1;
        transition: filter 0.3s, box-shadow 0.3s;
        box-shadow: 0 2px 8px #0dcaf033;
    }
    .team-card:hover img.card-img-top {
        filter: brightness(1.12) saturate(1.25);
        box-shadow: 0 8px 32px #0d6efd33;
    }
    .card-footer img {
        max-height: 50px;
        width: auto;
        display: block;
        margin: 0 auto;
    }
    h1, h2, h5 {
        font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
    }
</style>

<script>
  const tete = document.getElementById('tete');
  const title = document.getElementById("title");

  document.addEventListener('DOMContentLoaded', function() {
    tete.textContent = "En savoir plus sur AdnUser";
    title.textContent = "À propos de nous - AdnUser";
  });
</script>
<!-- N'oubliez pas d'inclure Bootstrap Icons dans votre head.php pour les icônes -->
<?php include("includes/footer.php"); ?>