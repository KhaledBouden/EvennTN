function verif()
{
    nom=document.getElementById("nom").value;
    id=document.getElementById("id").value;
    prix=document.getElementById("prix").value;
    
    (id=="") ? alert("l'id est vide ") : true;
    (nom=="") ? alert("le nom est vide ") : true;
    (nom.charAt(0)!=nom.charAt(0).toUpperCase()) ?  alert("le nom  doit commancer par une majuscule") :  true;
    (prix=="") ? alert("le champ prix est vide ") : true;
}

function verif2()
{
    nom=document.getElementById("nom_modifier").value;
    id=document.getElementById("id_modifier").value;
    prix=document.getElementById("prix_modifier").value;

    
    (id=="") ? alert("l'id est vide ") : true;
    (nom=="") ? alert("le nom est vide ") : true;
    (nom.charAt(0)!=nom.charAt(0).toUpperCase()) ?  alert("le nom  doit commancer par une majuscule") :  true;
    (prix=="") ? alert("le champ prix est vide ") : true;
}