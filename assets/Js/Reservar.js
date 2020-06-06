function reservar(){
    var xhr = new XMLHttpRequest();
    var res = document.getElementById("Respuesta");
    var tipo = document.getElementsByClassName("container")[0].id;
    var date = document.getElementById("fecha");
    var hora_inicioI = document.getElementById("hora_inicio").selectedIndex;
    var hora_inicioO = document.getElementById("hora_inicio").options;
    var hora_inicio = hora_inicioO[hora_inicioI].text;
    var hora_finI = document.getElementById("hora_fin").selectedIndex;
    var hora_finO = document.getElementById("hora_fin").options;
    var hora_fin = hora_finO[hora_finI].text;
    
    if(hora_fin=="Hora Devolución"||hora_inicio=="Hora Reclamación"||date.value==""){
        res.textContent="Porfavor llene todos los campos";
        res.style="color:red;";
    }else{
        res.textContent="";
        if(tipo=="Cable"){
            var tipoCable = document.getElementsByClassName("header_title")[0].id;
            var reserva = {
                "Tipo":tipo,
                "Tipo_Cable":tipoCable,
                "Fecha":date.value,
                "Hora_Inicio":hora_inicio,
                "Hora_Fin":hora_fin
            };
            xhr.onreadystatechange= function(){ 
                if(this.readyState==4 && this.status==200){
                   res.textContent=this.responseText;
                }
            }
            var parametros = JSON.stringify(reserva);
            xhr.open("POST", "GenerarReserva.php",true);
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xhr.send("reserva="+parametros);
            
        }else{
            var reserva = {
                "Tipo":tipo,
                "Fecha":date.value,
                "Hora_Inicio":hora_inicio,
                "Hora_Fin":hora_fin
            };
            xhr.onreadystatechange= function(){ 
                if(this.readyState==4 && this.status==200){
                   res.textContent=this.responseText;
                }
            }
            var parametros = JSON.stringify(reserva);
            xhr.open("POST", "GenerarReserva.php",true);
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xhr.send("reserva="+parametros);
        }
    }
}