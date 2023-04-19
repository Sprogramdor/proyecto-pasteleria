<!--autor: Acosta Jesus-->

<?php require_once HEADER; 

// session_start();
        if (!isset($_SESSION['usuario']) ) {
            header("Location:index.php?c=index&f=index"); //redirijir
       }
        $rol = (isset($_SESSION['rol'])) ? htmlentities($_SESSION['rol']) : '';
        if($rol !=2){
            
            header("Location:index.php?c=index&f=index"); //redirijir
        }   
?>

        <main class="container">

<h2> Caja  </h2>

<div class="container" id="inicio">
    

    


<div style= "margin-left: 1000px; margin-botton: 350px;"> 
    <form action="index.php?c=Ventas&f=next"  id="fa" method="post">
        <button type="submit" class="button"  id="bs">Siguente</button>
    </form>
<br><br><br>


</div> 

<div class="shadown GripVentas">
    
    <div Style="grid-column: 3; grid-row:1" >
            <form action="index.php?c=Ventas&f=searchAjax" method="GET">
                <label>Busqueda de Cliente </label> <br>
                <input type="text" name="b" id="busqueda"  style="display:inline-block" placeholder="Ingrese nombre del cliente"/>&nbsp;&nbsp;&nbsp;               
            </form> 

    </div>

      <!--Carga Clientes por AJAX -->
    <div Style="grid-column: 4/6; grid-row:1" >
    <label >Seleccione un Cliente </label> <br>

    <select form="fa" id="listac" name="listac" class="select">
            
    </form>
    </div>

   


                </div>
</main>


<script type="text/javascript">
var txtbuscar = document.querySelector("#busqueda");
txtbuscar.addEventListener('keyup', cargarCliente);
var tp= document.querySelector("#tp");
var selectid = document.querySelector("#listac");


function cargarCliente() {
    // leer paramteros

    
    var bus = txtbuscar.value;
    // realizar la peticion
    var url = "index.php?c=Ventas&f=searchAjax&b=" + bus;
    var xmlh = new XMLHttpRequest();
    xmlh.open("GET", url, true);
    xmlh.send();
    // lectura de respuesta
    xmlh.onreadystatechange = function () {
        if (xmlh.readyState === 4 && xmlh.status === 200) {
            var respuesta = xmlh.responseText;
            actualizarCliente(respuesta); //actualizar cierta parte de la pagina
        }
    };
}


// busqueda de clientes AJAX 
function actualizarCliente(respuesta) {
    // elemento a actualizar
    var select = document.querySelector("#listac");
    var clientes = JSON.parse(respuesta); // parse de respuesta aformato json
    
    resultados = '';
    console.log(clientes);
    while (select.firstChild) {
        select.removeChild(select.firstChild);
        }          
                
    for (var i = 0; i < clientes.length; i++) {
        var option = document.createElement("option");
        option.text=clientes[i].cliente_nombre +"  "+clientes[i].cliente_apellido +" - "+clientes[i].cedula;
        option.value =clientes[i].id_cliente;
        select.appendChild(option);
    }
   

}
    




</script>






















<?php  require_once FOOTER ?>