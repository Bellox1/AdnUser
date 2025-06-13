const title = document.getElementById("title");
    const tete = document.getElementById('tete');
    document.addEventListener("DOMContentLoaded", function() {
    title.textContent ="Modifier utilisateur -AdnUser";
    tete.textContent = "Bienvenue sur la page de modification d'utilisateur";
    form.addEventListener("submit", function(evenement) {
  validNom(evenement)
  validPrenom(evenement)
  validAge(evenement)
  validIdentifiant(evenement)
  
});

});