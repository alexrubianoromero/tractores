
function grabarOrdenTractor(){

    var idCliente = document.getElementById('idCliente').value; 
    var idTractor = document.getElementById('idTractor').value; 
    var observaciones = document.getElementById('observaciones').value; 

    const http=new XMLHttpRequest();
    const url = '../ordenes/ordenes.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
              console.log(this.responseText);
           document.getElementById("modalBodyTractores").innerHTML  = this.responseText;
        //    document.getElementById("modalBodyTractores").innerHTML  = 'llego al js';
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("opcion=grabarOrdenTractor"
        +'&idCliente='+idCliente
                +'&idTractor='+idTractor
                +'&observaciones='+observaciones
    );
    resumenInformacionTaller();
}



function agregarItemOrden(idOrden){

    var producto = document.getElementById('producto').value; 
    var cantidad = document.getElementById('cantidad').value; 
    var precio = document.getElementById('precio').value; 

    const http=new XMLHttpRequest();
    const url = '../ordenes/ordenes.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
              console.log(this.responseText);
           document.getElementById("modalBodyDetalleOrden").innerHTML  = this.responseText;
        //    document.getElementById("modalBodyTractores").innerHTML  = 'llego al js';
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("opcion=agregarItemOrden"
        +'&idOrden='+idOrden
        +'&producto='+producto
        +'&cantidad='+cantidad
        +'&precio='+precio
    );
    // setInterval(() => {
    //     resultadosItemOrden(idOrden);
    // }, 300);
        // cabeceraModalTractor(idOrden);
     resumenInformacionTaller();
}
function resultadosItemOrden(idOrden){


    const http=new XMLHttpRequest();
    const url = '../ordenes/ordenes.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
              console.log(this.responseText);
           document.getElementById("divResultadosItemOrden").innerHTML  = this.responseText;
        //    document.getElementById("modalBodyTractores").innerHTML  = 'llego al js';
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("opcion=resultadosItemOrden"
        +'&idOrden='+idOrden
    );
    // resumenInformacionTaller();
}







