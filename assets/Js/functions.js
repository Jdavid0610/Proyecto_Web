var modals =  new Array();
var btns = new Array();
var sapn = new Array();
var reservas=[];
var items=[];
var xhr = new XMLHttpRequest();

function insertAfter(e,i){ 
    if(e.nextSibling){ 
        e.parentNode.insertBefore(i,e.nextSibling); 
    } else { 
        e.parentNode.appendChild(i); 
    }
}

function CreateCarruselItem2(tipo,marca_Tipo_cable,numero_iteracion){
    
    
    var carruselContainer = document.getElementById("Reservar");
    var containerDiv = document.createElement("div");
    var Img = document.createElement("img");
    var infoDiv = document.createElement("div");
    var infoP = document.createElement("p");
    var infoP1 = document.createElement("p");
    var btnInfo = document.createElement("button");

    containerDiv.className="carrusel__item_r";
    Img.className ="carrusel__item__info-img";
    infoDiv.className="carrusel__item__info";
    infoP.className="carrusel__item__info-title";
    infoP1.className="carrusel__item__info-title";
    btnInfo.className="carrusel__item__info-boton";
    btnInfo.textContent="Mas...";
    btnInfo.id="MyBnt"+numero_iteracion;
    btnInfo.setAttribute("onclick","CreatePopUp(this)");
    infoP.textContent=tipo;
    infoP1.textContent=marca_Tipo_cable;
    if(tipo=="Parlante"){
        Img.src="assets/img/parlante.png";
    }else if(tipo=="Portatil"){
        Img.src="assets/img/portatil.png";
    }else if(Tipo=="VideoBeem"){
        Img.src="assets/img/videobeam.png";
    }else{
        if(marca_tipo_cable=="UTP"){
            Img.src="assets/img/cable.png";
        }else{
            Img.src="assets/img/cable_extencion.png";
        }
    }

    infoDiv.appendChild(btnInfo);
    infoDiv.appendChild(infoP);
    infoDiv.appendChild(infoP1);
    containerDiv.appendChild(Img);
    containerDiv.appendChild(infoDiv);
    insertAfter(carruselContainer,containerDiv);


}

function CreateCarruselItem(tipo,marca_Tipo_cable,numero_iteracion){

    var carruselContainer = document.getElementById("divHistorial");
    var containerDiv = document.createElement("div");
    var Img = document.createElement("img");
    var infoDiv = document.createElement("div");
    var infoP = document.createElement("p");
    var infoP1 = document.createElement("p");
    var btnInfo = document.createElement("button");

    containerDiv.className="carrusel__item";
    Img.className ="carrusel__item__info-img";
    infoDiv.className="carrusel__item__info";
    infoP.className="carrusel__item__info-title";
    infoP1.className="carrusel__item__info-title";
    btnInfo.className="carrusel__item__info-boton";
    btnInfo.textContent="Mas...";
    btnInfo.id="MyBnt"+numero_iteracion;
    btnInfo.setAttribute("onclick","CreatePopUp(this)");
    infoP.textContent=tipo;
    infoP1.textContent=marca_Tipo_cable;
    if(tipo=="Parlante"){
        Img.src="assets/img/parlante.png";
    }else if(tipo=="Portatil"){
        Img.src="assets/img/portatil.png";
    }else if(tipo=="VideoBeem"){
        Img.src="assets/img/videobeam.png";
    }else{
        if(marca_tipo_cable=="UTP"){
            Img.src="assets/img/cable.png";
        }else{
            Img.src="assets/img/cable_extencion.png";
        }
    }

    infoDiv.appendChild(btnInfo);
    infoDiv.appendChild(infoP);
    infoDiv.appendChild(infoP1);
    containerDiv.appendChild(Img);
    containerDiv.appendChild(infoDiv);
    carruselContainer.appendChild(containerDiv);
}

function CreateModalItem(tipo,cod_item,fecha,hora_i,hora_f,Marca_tipoCable,Modelo,numero_iteracion){

    var divReferencia = document.getElementById("divReservasActivas");
    var divModal = document.createElement("div");
    var divModalContent = document.createElement("div");
    var divImgContent = document.createElement("div");
    var divTitleConten = document.createElement("div");
    var divAtrrContent = document.createElement("div");
    var img = document.createElement("img");
    var p1 = document.createElement("p");
    var p2 = document.createElement("p");
    var p3 = document.createElement("p");
    var p4 = document.createElement("p");
    var p5 = document.createElement("p");
    var p6 = document.createElement("p");
    var Atrr1 = document.createElement("p");
    var Atrr2 = document.createElement("p");
    var Atrr3 = document.createElement("p");
    var Atrr4 = document.createElement("p");
    var Atrr5 = document.createElement("p");
    var Atrr6 = document.createElement("p");
    var span = document.createElement("span");

    divModal.className="modal";
    divModalContent.className="modal-content";
    divTitleConten.style="margin-left: 50px;";
    divAtrrContent.style="margin-left: 50px;";
    img.className="carrusel__item__info-img";
    p1.style="font-weight: bold;";
    p2.style="font-weight: bold;";
    p3.style="font-weight: bold;";
    p4.style="font-weight: bold;";
    p5.style="font-weight: bold;";
    p6.style="font-weight: bold;";
    Atrr1.style="white-space: nowrap;";
    Atrr2.style="white-space: nowrap;";
    Atrr3.style="white-space: nowrap;";
    Atrr4.style="white-space: nowrap;";
    Atrr5.style="white-space: nowrap;";
    Atrr6.style="white-space: nowrap;";
    span.className="close";

    divModal.id="myModal"+numero_iteracion;
    span.id="close"+numero_iteracion;

    if(tipo=="Parlante"){
        img.src="assets/img/parlante.png";
    }else if(tipo=="Portatil"){
        img.src="assets/img/portatil.png";
    }else if(tipo=="VideoBeem"){
        img.src="assets/img/videobeam.png";
    }else{
        if(marca_tipo_cable=="UTP"){
            img.src="assets/img/cable.png";
        }else{
            img.src="assets/img/cable_extencion.png";
        }
    }

    if(tipo=="Cable"){
        p1.textContent="Tipo Cable:";
        p2.textContent="Codigo Articulo:";
        p3.textContent="Fecha de Reserva:";
        p4.textContent="Hora Inicio:";
        p5.textContent="Hora Fin:";
        p6.textContent="";
        Atrr1.textContent=Marca_tipoCable;
        Atrr2.textContent=cod_item;
        Atrr3.textContent=fecha;
        Atrr4.textContent=hora_i;
        Atrr5.textContent=hora_f;
    }else{
        p1.textContent="Marca:";
        p2.textContent="Modelo:";
        p3.textContent="Codigo Articulo:";
        p4.textContent="Fecha de Reserva:";
        p5.textContent="Hora Inicio:";
        p6.textContent="Hora Fin:";
        Atrr1.textContent=Marca_tipoCable;
        Atrr2.textContent=Modelo;
        Atrr3.textContent=cod_item;
        Atrr4.textContent=fecha;
        Atrr5.textContent=hora_i;
        Atrr6.textContent=hora_f;
    }
    span.textContent="X";

    divImgContent.appendChild(img);
    divTitleConten.appendChild(p1);
    divTitleConten.appendChild(p2);
    divTitleConten.appendChild(p3);
    divTitleConten.appendChild(p4);
    divTitleConten.appendChild(p5);
    divTitleConten.appendChild(p6);
    divAtrrContent.appendChild(Atrr1);
    divAtrrContent.appendChild(Atrr2);
    divAtrrContent.appendChild(Atrr3);
    divAtrrContent.appendChild(Atrr4);
    divAtrrContent.appendChild(Atrr5);
    divAtrrContent.appendChild(Atrr6);

    divModalContent.appendChild(divImgContent);
    divModalContent.appendChild(divTitleConten);
    divModalContent.appendChild(divAtrrContent);
    divModalContent.appendChild(span);

    divModal.appendChild(divModalContent);

    var parentDiv = document.getElementById("divReservasActivas").parentNode;

    parentDiv.insertBefore(divModal,divReferencia);
}

function CreatePopUp(btnE){
    var btnid = btnE.id
    var cad = btnid.slice(-1);

    
    var btn = document.getElementById(btnid);
	var modal = document.getElementById("myModal"+cad);
    var span = document.getElementById("close"+cad);

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }
    
    window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
    }
}



function categorizacion(){
    for( i in reservas){
        var cod_i=reservas[i].Codigo_Item;
        for(j in items){
            if(items[j].Codigo==cod_i){
                if(items[j].Tipo=="Cable"){
                    if(reservas[i].Activa){
                        CreateCarruselItem2(items[j].Tipo,items[j].Tipo_Cable,i);
                        CreateModalItem(items[j].Tipo,items[j].Codigo,reservas[i].Fecha,reservas[i].Hora_Inicio,reservas[i].Hora_Fin,items[j].Tipo_Cable,null,i);
                    }else{
                        CreateCarruselItem(items[j].Tipo,items[j].Tipo_Cable,i);
                        CreateModalItem(items[j].Tipo,items[j].Codigo,reservas[i].Fecha,reservas[i].Hora_Inicio,reservas[i].Hora_Fin,items[j].Tipo_Cable,null,i);
                    }
                }else{
                    if(reservas[i].Activa){
                        CreateCarruselItem2(items[j].Tipo,items[j].Marca,i);
                        CreateModalItem(items[j].Tipo,items[j].Codigo,reservas[i].Fecha,reservas[i].Hora_Inicio,reservas[i].Hora_Fin,items[j].Marca,items[j].Modelo,i);
                    }else{
                        CreateCarruselItem(items[j].Tipo,items[j].Marca,i);
                        CreateModalItem(items[j].Tipo,items[j].Codigo,reservas[i].Fecha,reservas[i].Hora_Inicio,reservas[i].Hora_Fin,items[j].Marca,items[j].Modelo,i);
                    }
                }
            }
        }
    }
}


function onLoad(){
    xhr.open("GET", "datosReservas.php",false);
    xhr.onreadystatechange= function(){ 
        if(this.readyState==4 && this.status==200){
            res=JSON.parse(this.responseText);
            reservas=res;  
        }
    }
    xhr.send();

    var xhr1 = new XMLHttpRequest();
    xhr1.open('GET', 'datosItems.php',false);
    xhr1.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            it=JSON.parse(this.responseText);
            items=it;
        }
    }
    xhr1.send();
    categorizacion();

}
