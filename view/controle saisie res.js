function saisie(){
    var input = document.getElementById('quantité');
    var input = document.getElementById('idmateriel');


// Fonction de validation pour les entiers
function estEntier(valeur) {
  return /^\d+$/.test(valeur);
}

// Fonction de gestion de l'événement de saisie
function onInputChange(event) {
  var valeur = event.target.value;
  if (!estEntier(valeur)) {
    event.target.value = '';
  }
}

// Ajout d'un écouteur d'événement pour la saisie
input.addEventListener('input', onInputChange);





}
