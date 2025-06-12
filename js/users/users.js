const btn = document.getElementById("btn");
const title = document.getElementById("title");
document.addEventListener("DOMContentLoaded", function() {
title.textContent ="Liste des utilisateurs -AdnUSer";
btn.addEventListener("click", function() {
            window.location.href = "includes/users/register.php"; // Redirection vers la page d'inscription des utilisateurs
});
});