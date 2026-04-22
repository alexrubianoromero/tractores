
function formuNuevaOrden(){

    // var idCliente = document.getElementById('idCliente').value; 
    // var idTractor = document.getElementById('idTractor').value; 
    // var observaciones = document.getElementById('observaciones').value; 

    const http=new XMLHttpRequest();
    const url = '../dashboard/dashboard.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
              console.log(this.responseText);
           document.getElementById("modalBodyTractores").innerHTML  = this.responseText;
        //    document.getElementById("modalBodyTractores").innerHTML  = 'llego al js';
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("opcion=formuNuevaOrden"
        // +'&idCliente='+idCliente
        //         +'&idTractor='+idTractor
        //         +'&observaciones='+observaciones
    );
}
function tablaResultadosOrdenes(){

    // var idCliente = document.getElementById('idCliente').value; 
    // var idTractor = document.getElementById('idTractor').value; 
    // var observaciones = document.getElementById('observaciones').value; 

    const http=new XMLHttpRequest();
    const url = '../dashboard/dashboard.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
              console.log(this.responseText);
           document.getElementById("div_resultados_dashboard").innerHTML  = this.responseText;
        //    document.getElementById("modalBodyTractores").innerHTML  = 'llego al js';
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("opcion=tablaResultadosOrdenes"
        // +'&idCliente='+idCliente
        //         +'&idTractor='+idTractor
        //         +'&observaciones='+observaciones
    );
}


function mostrar()
{
    alert('mostrar aviso');
}



 function toggleMenu() {
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('overlay');
                
                sidebar.classList.toggle('active');
                overlay.classList.toggle('active');
                }

                // Control de navegación
                document.querySelectorAll('.sidebar .nav-link').forEach(link => {
                    link.addEventListener('click', (e) => {
                        // 1. Mostrar spinner de carga
                        const loader = document.getElementById('loader');
                        loader.style.display = 'block';

                        // 2. Si estamos en móvil, cerramos el menú
                        if (window.innerWidth <= 768) {
                            toggleMenu();
                        }

                        // 3. Simular carga de datos (luego lo quitas cuando tengas PHP real)
                        setTimeout(() => {
                            loader.style.display = 'none';
                        }, 800);
                    });
                });