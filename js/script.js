const users_list = document.getElementById("users_list"); 
const annonces_list = document.getElementById("annonces_list");

// curseur de main au survol
users_list.style.cursor = "pointer";
annonces_list.style.cursor = "pointer";

users_list.addEventListener("click", function() {
    window.location.href = "users.php";
});

annonces_list.addEventListener("click", function() {

    window.location.href = "annonces.php";
});
