function seleccionar(link){
    let opciones = document.querySelectorAll('#links a')
    opciones[0].className = "";
    opciones[1].className = "";
    opciones[2].className = "";
    opciones[3].className = "";
    link.className = "selecionado";
    let x = document.getElementById("nav");
    x.className = ""

}

function responsiveMenu(){
    var x = document.getElementById("nav");
    if(x.className===""){
        x.className = "responsive";
    }else{
        x.className = "";
    }
}

window.onscroll = function(){
    efectoHabilidades()
};

