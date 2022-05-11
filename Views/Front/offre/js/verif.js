
function verif()
{
   
nom=document.getElementById("nom").value;
prenom=document.getElementById("prenom").value;
numero_carte=document.getElementById("numero_carte").value;

if(prenom ==='')
{
    alert("le prenom est vide ");
    return false;
}else if(nom===''){
    alert("le nom est vide ");
    return false;
}else if(numero_carte===''){
    alert("le numero est vide ");
    return false;

}
 return true;
}
