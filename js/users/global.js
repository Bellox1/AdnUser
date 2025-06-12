 
// Déclaration des écouteurs d'événements pour les id
const form = document.getElementById("form");

const identifiant = document.getElementById("identifiant");
const errorI = document.getElementById("errorI");
const mot_de_passe = document.getElementById("mot_de_passe");
const errorMP = document.getElementById("errorMP");
const nom = document.getElementById("nom");
const errorN = document.getElementById("errorN");
const prenom = document.getElementById("prenom");
const errorP = document.getElementById("errorP");
const age = document.getElementById("age");
const errorA = document.getElementById("errorA");
function validNom(env){
 //Variable nom
    const Vnom = nom.value.trim(); //trim() Supprime les espacements de trop
    const RegexN =/^[A-Za-z\s-]+$/;

    //Nom validation
    if (!RegexN.test(Vnom)) {
       env.preventDefault();
       errorN.innerHTML = 'Le nom ne doit contenir que des lettres (sans accents) et éventuellement des tirets (-).';
       nom.classList.add("is-invalid");
    }else{
        errorN.innerHTML ='';
        nom.classList.remove("is-invalid");
    }
}


function validPrenom(env){
    
    //Variable prenom
    const Vprenom = prenom.value;
    const RegexP =/^[A-Za-zÀ-ÖØ-öø-ÿ\s-]+$/;

    //Prénom validation
    if (!RegexP.test(Vprenom)) {
        env.preventDefault();
        errorP.innerHTML = 'Le prénom ne doit pas contenir de chiffres.';
        prenom.classList.add("is-invalid");
    }else{
        errorP.innerHTML ='';
        prenom.classList.remove("is-invalid");
    }
}

function validAge(env){
    
    //Variable mot de passe
    const Vage = age.value.trim();
    
   if (!Number.isInteger(Number(Vage))) {
    env.preventDefault();
    errorA.innerHTML = "L'âge doit être un nombre entier.";
    age.classList.add("is-invalid");
} else if (Vage < 18) {
    env.preventDefault();
    errorA.innerHTML = "L'âge doit être supérieur ou égal à 18.";
    age.classList.add("is-invalid");
} else if (Vage > 80) {
    env.preventDefault();
    errorA.innerHTML = "L'âge ne doit pas dépasser 80 ans.";
    age.classList.add("is-invalid");
} else {
    errorA.innerHTML = "";
    age.classList.remove("is-invalid");
}



}

// input se déclenche lors de la saisie dans le champ
// blur se déclenche lorsque l'utilisateur quitte le champ
// submit se déclenche lors de l'envoi du formulaire

function validIdentifiant(env){
    
    //Variable identifiant
    const Videntifiant = identifiant.value.trim();
    const RegexE =/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    


    //identifiant validation
    if (!RegexE.test(Videntifiant)) {
        env.preventDefault();
        errorI.innerHTML = "Veuillez entrer une adresse e-mail valide.";
        identifiant.classList.add("is-invalid");

    }else{
        errorI.innerHTML ='';
        identifiant.classList.remove("is-invalid");

    }

}

function validMot_de_passe(env){
    
    //Variable mot de passe
    const Vmot_de_passe = mot_de_passe.value.trim();
    
    
    //Mot de passe validation
    if (Vmot_de_passe.length < 8 ) {
        env.preventDefault();
        errorMP.innerHTML = "Le mot de passe  doit contenir au moins 8 caractères.";
        mot_de_passe.classList.add("is-invalid");

    }else{
        errorMP.innerHTML ='';
        mot_de_passe.classList.remove("is-invalid");

    }

}
