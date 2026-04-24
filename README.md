# 🛡️ AdnUser - Système de Gestion d'Utilisateurs & Annonces

<p align="center">
  <img src="assets/images/logo.png" width="150" alt="AdnUser Logo">
</p>

**AdnUser** est un projet de type **CRUD** (Create, Read, Update, Delete) conçu spécifiquement pour approfondir la maîtrise des interactions web modernes. Ce projet met l'accent sur l'utilisation des **Event Listeners en JavaScript**, la logique **PHP Native** pour le traitement serveur, et la manipulation de bases de données **SQL** via PDO.

---

## 🎯 Objectif du Projet
L'objectif principal est de démontrer une compréhension solide des fondamentaux du développement web :
1.  **JavaScript Interactif** : Gestion dynamique des formulaires et validations en temps réel via des écouteurs d'événements.
2.  **PHP Natif** : Structuration d'une application sans framework pour comprendre les rouages du backend (sessions, routage, traitement de fichiers).
3.  **SQL & Persistance** : Conception de schémas de base de données et exécution de requêtes sécurisées.

---

## ✨ Fonctionnalités Principales

### 👥 Gestion des Utilisateurs
*   **Contrôle Total** : Ajoutez, modifiez et supprimez des profils utilisateurs en quelques clics.
*   **Authentification Sécurisée** : Système de session PHP pour protéger l'accès au tableau de bord.
*   **Validation Dynamique** : Feedback immédiat lors de la saisie grâce aux écouteurs d'événements JS.

### 📢 Système d'Annonces
*   **Publication avec Upload** : Créez des annonces avec titres, descriptions et téléchargement d'images.
*   **Gestion du Contenu** : Mise à jour en temps réel des publications existantes.
*   **Historique Automatique** : Suivi temporel précis de chaque annonce.

---

## 🛡️ Validations JavaScript (Event Listeners)

Pour ce projet, une attention particulière a été portée à la validation côté client via des **EventListeners** :

*   **Nom/Prénom** : Validation du format textuel via Regex lors des événements `input`.
*   **Âge** : Vérification de la majorité (18-80 ans) pour garantir la conformité des données.
*   **Identifiant (Email)** : Validation rigoureuse du format e-mail pour l'authentification.
*   **Mot de passe** : Sécurisation minimale avec une contrainte de 8 caractères.

Chaque champ déclenche des événements `input` ou `blur` pour une interactivité maximale et un guidage utilisateur sans rechargement de page.

---

## 🛠️ Stack Technique

*   **Backend** : PHP 8.2+ (Natif)
*   **Base de données** : MySQL / MariaDB (PDO)
*   **Frontend** : HTML5, CSS3, Bootstrap 5
*   **Logique Client** : Vanilla JavaScript (ES6)

---

## 🚀 Installation et Configuration

### 1. Cloner le projet
```bash
git clone https://github.com/Bellox1/AdnUser.git
cd AdnUser
```

### 2. Base de données
1. Créez une base de données nommée `adnuser`.
2. Importez le schéma SQL : `mysql -u root -p adnuser < db/sql.txt`.
3. Configurez `includes/connexion.php`.

### 3. Lancement
```bash
php -S localhost:8000
```

---

## 📄 Licence
Ce projet est sous licence MIT.
