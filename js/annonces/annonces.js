

const title = document.getElementById("title");
const btn = document.getElementById("btn");
const insc = document.getElementById("insc");
const btna = document.getElementById("btna"); 
const insca = document.getElementById("insca");
const tete = document.getElementById("tete");
document.addEventListener("DOMContentLoaded", function() {
tete.textContent = "Bienvenue sur la page des annonces";
title.textContent ="Liste des annonces -AdnUser";

btn.addEventListener("click", function() {
            insca.style.display = "none"; 
            btn.style.display = "none";   
            insc.style.display = "block";
            tete.textContent = "Bienvenue sur la page d'ajout d'annonce";
            btna.style.display = "block";
            title.textContent ="Ajouter une annonce -AdnUser";



});
        
btna.addEventListener("click", function() {
        insc.style.display = "none";   
        btna.style.display = "none";  
        insca.style.display = "block";
        tete.textContent = "Bienvenue sur la page des annonces";
        btn.style.display = "block";
        title.textContent ="Liste des annonces -AdnUser";

});

});
