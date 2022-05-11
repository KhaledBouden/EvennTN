

if(Notification.permission!=="denied")
{
    Notification.requestPermission();
}

window.addEventListener('load', function () {
    const button = document.getElementById("commander");
    button.addEventListener('click', function () {

    if(Notification.permission ==="granted" && verif()===true)
    {
        const notification=new Notification("Notification",{
            body: "une nouvelle commande a été ajouté",})
    }

}, 200);
}

)
