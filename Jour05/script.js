

function Inscription(){
    console.log("bouton inscription");
    //Promise.all([fetch('Jour05/inscription.php').then(x => x.text())]) 
}
function Connexion(){
    console.log("bouton Connexion");
}


document.addEventListener("DOMContentLoaded",() => {
    const buttonInscription = document.querySelector('#buttonInscription');
    const buttonConnexion = document.querySelector('#buttonConnexion');

    buttonInscription.addEventListener("click",Inscription);
    buttonConnexion.addEventListener("click",Connexion);
 
 
  });
