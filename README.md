# 🛡️ AdnUser - Système de Gestion d'Utilisateurs & Annonces

<p align="center">
  <img src="assets/images/logo.png" width="150" alt="AdnUser Logo">
</p>

Une application web robuste développée en **PHP** pour la gestion centralisée des utilisateurs et des annonces. Conçue avec une architecture modulaire, AdnUser offre une interface d'administration intuitive pour piloter vos données en toute simplicité.

---

## ✨ Fonctionnalités Principales

### 👥 Gestion des Utilisateurs
*   **Contrôle Total** : Ajoutez, modifiez et supprimez des profils utilisateurs en quelques clics.
*   **Authentification Sécurisée** : Système de connexion robuste pour protéger l'accès au tableau de bord.
*   **Visualisation Claire** : Liste détaillée des utilisateurs avec recherche et filtres.

### 📢 Système d'Annonces
*   **Publication d'Annonces** : Créez des annonces avec titres, descriptions et images d'illustration.
*   **Gestion du Contenu** : Mettez à jour vos annonces en temps réel pour une communication efficace.
*   **Historique** : Suivez la chronologie des publications grâce au marquage temporel automatique.

### 📊 Tableau de Bord (Dashboard)
*   **Vue d'Ensemble** : Accédez rapidement aux statistiques globales dès la connexion.
*   **Interface Moderne** : Navigation fluide basée sur des cartes interactives et des raccourcis rapides.
*   **Responsive Design** : Administrez votre plateforme depuis n'importe quel appareil (PC, Tablette, Mobile).

---

## 🛠️ Stack Technique

*   **Backend** : PHP 8.x
*   **Base de données** : MySQL / MariaDB (via PDO)
*   **Frontend** :
    *   **HTML5 / CSS3** (Styles personnalisés)
    *   **Bootstrap 5** (Layout & Composants)
    *   **Bootstrap Icons** (Iconographie)
*   **Scripting** : JavaScript (Vanilla JS pour l'interactivité dynamique)

---

## 🚀 Installation et Configuration

### 1. Prérequis
*   Un serveur web (Apache/Nginx)
*   PHP >= 7.4
*   MySQL / MariaDB

### 2. Cloner le projet
```bash
git clone https://github.com/Bellox1/AdnUser.git
cd AdnUser
```

### 3. Base de données
1. Créez une base de données nommée `test` (ou modifiez `includes/connexion.php`).
2. Importez le schéma SQL situé dans `db/sql.txt`.

### 4. Lancement
Si vous utilisez PHP en local :
```bash
php -S localhost:8000
```
L'application sera accessible sur `http://localhost:8000`.

---

## 📄 Licence

Ce projet est sous licence MIT. Développé par **BELLOX**.
