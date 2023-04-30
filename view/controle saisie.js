function saisie(){
    let idReservationInput = document.getElementById("id_reservation");

idReservationInput.addEventListener("blur", function() {
  let id = idReservationInput.value;

  if (!/^\d+$/.test(id)) {
    alert("L'identifiant saisi est invalide. Veuillez saisir un nombre entier.");
    idReservationInput.value = "";
    idReservationInput.focus();
  }
});
    
    let datedebInput = document.getElementById("date_deb");

datedebInput.addEventListener("blur", function() {
  let dateStr = datedebInput.value;
  let [day, month, year] = dateStr.split('/');
  let date = new Date(year, month - 1, day);

  if (date.getDate() != day || date.getMonth() != month - 1 || date.getFullYear() != year) {
    alert("La date saisie est invalide. Veuillez saisir une date au format jj/mm/aaaa.");
    datedebInput.value = "";
    datedebInput.focus();
  }
});
let datefinInput = document.getElementById("date_fin");

dateDebInput.addEventListener("blur", function() {
  let dateStr = datefinInput.value;
  let [day, month, year] = dateStr.split('/');
  let date = new Date(year, month - 1, day);

  if (date.getDate() != day || date.getMonth() != month - 1 || date.getFullYear() != year) {
    alert("La date saisie est invalide. Veuillez saisir une date au format jj/mm/aaaa.");
    datefinInput.value = "";
    datefinInput.focus();
  }
});








   
