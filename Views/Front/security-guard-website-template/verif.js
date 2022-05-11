 
function verif()
{   
if(document.getElementById("date").value.length == 0 || document.getElementById("objet").value.length == 0 || document.getElementById("description").value.length == 0)
{
    alert("vide")

        return false ; 
    } else  
    return true ; 
}

window.addEventListener('load', function () {
    const button = document.getElementById("a");
    button.addEventListener('click', function () {

        if( verif()===false)
    {
        const notification=new Notification("Notification",{
            body: "reclamation NON envoyer  ",})
    }else 
    if( verif()===true)
    {alert("bien envoyer")
        const notification=new Notification("Notification",{
            body: "reclamation envoyer  ",})
    }

}, 200);
}

)