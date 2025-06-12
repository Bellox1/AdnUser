

const title = document.getElementById("title");
const btn = document.getElementById("btn");
const insc = document.getElementById("insc");
const btna = document.getElementById("btna"); 
const insca = document.getElementById("insca");

document.addEventListener("DOMContentLoaded", function() {

title.textContent ="Liste des annonces -AdnUSer";
btn.addEventListener("click", function() {
            insca.style.display = "none"; 
            btn.style.display = "none";   
            insc.style.display = "block"; 
            btna.style.display = "block";
            title.textContent ="Ajouter une annonce -AdnUSer";


});
        
btna.addEventListener("click", function() {
        insc.style.display = "none";   
        btna.style.display = "none";  
        insca.style.display = "block";    
        btn.style.display = "block"; 
        title.textContent ="Liste des annonces -AdnUSer";

});

});