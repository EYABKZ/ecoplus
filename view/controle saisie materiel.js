function saisie(){
    var nom=document.getElementById("nom").value; 
    var error=document.querySelector("#error");
    var letters = /^[A-Za-z]+$/; // expression régulière pour les lettres seulement

    
    var impact_environmental=document.getElementById("impact_environmental").value;
    var error1=document.querySelector("#error1");
   
    

    
    
    if (nom.length == 0){
        error.innerHTML="Veuillez saisir le nom de votre materiel.";
        error.style.color="red";
    }
   
   
   
    else if (!nom.match(letters)){
        error.innerHTML="Veuillez saisir seulement des lettres.";
        error.style.color="red";
   
   
    }
    else
    {
        error.innerHTML="Correct";
        error.style.color="green";
    }
    
    
    if (impact_environmental.length == 0){
        error1.innerHTML="Veuillez saisir l'impact.";
        error1.style.color="red";
    }
    else
    {
        error1.innerHTML="Correct";
        error1.style.color="green";  
    }

    
    
}





   
