function showHideDescription(){
    let description = document.getElementById("toggle-description");
    //alert('test')
    description.classList.toggle("text-pres-showed");

    if (description.className === "text-pres-hidden"){
        description.classList.toggle("text-pres-showed");
    }else{
        description.classList.toggle("text-pres-hidden");
    }

}

function showHideGalerie(){
    let galerie = document.getElementById('toggle-galerie');
    galerie.classList.toggle("galerie-showed");

    if (galerie.className === "galerie-hidden"){
        galerie.classList.toggle("galerie-showed");
    }else{
        galerie.classList.toggle("galerie-hidden");
    }
}



