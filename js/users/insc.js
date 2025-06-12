const mot_de_passe_C = document.getElementById("mot_de_passe_C");
const errorMPC = document.getElementById("errorMPC");

function validMot_de_passe_C(env){
    
    //Variable mot de passe de confimation
    const Vmot_de_passe_C = mot_de_passe_C.value.trim();
    //Mot de passe confimation validation
    if (Vmot_de_passe_C !== mot_de_passe.value.trim()) {
        env.preventDefault();
        errorMPC.innerHTML = "Le mot de passe n'est pas conforme.";
        mot_de_passe_C.classList.add("is-invalid");

    }else{
        errorMPC.innerHTML ='';
        mot_de_passe_C.classList.remove("is-invalid");

    }

}


form.addEventListener("submit", function(evenement) {
  validNom(evenement)
  validPrenom(evenement)
  validIdentifiant(evenement)
  validMot_de_passe(evenement)
  validMot_de_passe_C(evenement)
  validAge(evenement)
});