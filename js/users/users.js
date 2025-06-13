const btn = document.getElementById("btn");
const title = document.getElementById("title");
 const tete = document.getElementById('tete');

document.addEventListener("DOMContentLoaded", function() {
title.textContent ="Liste des utilisateurs";
tete.textContent = "Bienvenue sur la page des Utilisateurs";

btn.addEventListener("click", function() {
            window.location.href = "includes/users/register.php"; // Redirection vers la page d'inscription des utilisateurs
});
});
