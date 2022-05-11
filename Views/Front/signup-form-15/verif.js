function verif()
{
    
    username=document.getElementById("username") ; 
    if (username==="")
    {
        alert (" vide") ; 
    
    }
    return true ; 
    

}


if(Notification.permission!=="denied")
{
    Notification.requestPermission();
}

window.addEventListener('load', function () {
    const button = document.getElementById("login");
    button.addEventListener('click', function () {

    if(Notification.permission ==="granted" && verif()===true)
    {
        const notification=new Notification("Notification",{
            body: "Bienvenue Cher Client sur EvenTn",})
    }

}, 200);
}

)