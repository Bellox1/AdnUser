<!DOCTYPE html>
<html lang="fr">
<?php  session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Dashboard -AdnUser</title>
    <!-- Bootstrap 5 -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="assets/icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
</head>

<body>
    <!-- Sidebar -->
    <nav class="sidebar d-flex flex-column position-fixed" id="sidebar">
        <div class="sidebar-header d-flex align-items-center">
            <i class="bi bi-lightning-charge-fill"></i>
            <span>AdnUser</span>
            <button class="sidebar-toggler d-none d-lg-inline" id="sidebarCollapse" title="Réduire le menu">
                <i class="bi bi-chevron-double-left"></i>
            </button>
        </div>

        <ul class="nav flex-column px-2 mt-3">
            <?php
            $currentPage = basename($_SERVER['PHP_SELF']);
            ?>
            <li class="nav-item">
                <a href="index.php" class="nav-link <?php echo ($currentPage === 'index.php') ? 'active' : ''; ?>">
                    <i class="bi bi-house-door"></i>
                    <span>Accueil</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="users.php" class="nav-link <?php echo ($currentPage === 'users.php') ? 'active' : ''; ?>">
                    <i class="bi bi-people"></i>
                    <span>Utilisateurs</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="annonces.php" class="nav-link <?php echo ($currentPage === 'annonces.php') ? 'active' : ''; ?>">
                    <i class="bi bi-megaphone"></i>
                    <span>Annonces</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link <?php echo ($currentPage === 'about.php') ? 'active' : ''; ?>">
                    <i class="bi bi-info-circle"></i>
                    <span>À propos</span>
                </a>
            </li>
        </ul>
        
    </nav>

    <div class="overlay" id="sidebarOverlay"></div>

    <!-- Main content -->
    <div class="main-content min-vh-100">
        <!-- Header -->
        <header class="dashboard-header">
            <button class="btn-burger d-lg-none" id="sidebarMobileBtn" title="Menu">
                <i class="bi bi-list"></i>
            </button>
            <h1 class="h5 mb-0" id="tete"></h1>
            <div class="user-info">
                <img src="assets/images/avatar.jpeg" alt="Avatar">
                <span> <?php if (isset($_SESSION['user'])) {echo htmlspecialchars($_SESSION['user']['nom'] . ' ' . $_SESSION['user']['prenom']);} else {echo "Admin";}?></span>
                <a href="logout.php" class="btn btn-outline-primary btn-sm">Déconnexion</a>
            </div>
        </header>
        <main class="container py-4" id="dashboard-content">
            <div class="row g-4">