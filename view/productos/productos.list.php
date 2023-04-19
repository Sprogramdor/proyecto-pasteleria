<!--autor: Acosta Jesus-->
<?php require_once HEADER; ?>

<?php
         // session_start();
        if (!isset($_SESSION['usuario']) ) {
            header("Location:index.php?c=index&f=index"); //redirijir
       }
        $rol = (isset($_SESSION['rol'])) ? htmlentities($_SESSION['rol']) : '';
        if($rol !=1){
            
            header("Location:index.php?c=index&f=index"); //redirijir
        }   
?>







<main class="container">


<h2> Lista de productos </h2>


<div class="container"   >
    <div>
        <div style="margin-left: 500px" >
            <form action="index.php?c=Productos&f=search" method="POST">
                <input type="text" name="b" id="busqueda"  placeholder="buscar..."/>
                <button type="submit" class="button" style= "heigth: 10px">Buscar</button>
            </form>       
        </div>
    </div>



<div style= "margin-left: 1000px; margin-botton: 350px"> 
<a class="button" href="index.php?c=Productos&f=view_new">Nuevo producto</a>
<br><br><br>
</div> 

<div class="shadown">
    <table>
        <thead>        
            <th>Codigo producto</th>
            <th>Nombre </th>
            <th>Tipo</th>
            <th>Stock</th>
            <th>Precio</th>
            <th>Descripcion </th>
            <th>Fecha creacion</th>
            <th>Fecha actualizacion</th>
            <th>Usuario actualizacion</th>
            <th>Acciones</th>
        </thead>
        <tbody id="Tbody">


        <?php         
                foreach ($resultados as $fila) {
                  ?>
                <tr>
                    <td><?php echo $fila['cod_producto'];?></td>
                    <td><?php echo $fila['prod_nombre'];?></td>
                    <td><?php echo $fila['tipo'];?></td>
                    <td><?php echo $fila['stock'];?></td>
                    <td><?php echo $fila['prod_precio']."$";?></td>
                    <td><?php echo $fila['prod_descripcion'];?></td>
                    <td><?php echo $fila['prod_fechaCreacion'];?></td>
                    <td><?php echo $fila['prod_fechaActualizacion'];?></td>
                    <td><?php echo $fila['prod_usuarioActualizacion'];?></td>
                
                
              
                <td class="action">

                
                        <a class="btn btn-primary" 
                        href="index.php?c=productos&f=view_edit&id= <?php echo $fila['id_producto'];?> "> <i class="fas fa-marker"></i></a>
                    <a class="btn btn-danger" 
                   onclick="if(!confirm('Esta seguro de eliminar el producto?'))return false;" 
                   href="index.php?c=Productos&f=delete&id=<?php echo $fila['id_producto'];?> ">
                    <i class="fas fa-trash-alt"></i></a>
                    </td>

            </tr>
            <?php  
            }?>

        </tbody>
    </table>
   
</div>

</main>




<script type="text/javascript">
var txtBuscar = document.querySelector("#busqueda");
txtBuscar.addEventListener('keyup', cargarProductos);

function cargarProductos() {
    // leer paramteros
    var bus = txtBuscar.value;
    // realizar la peticion
    var url = "index.php?c=productos&f=searchAjax&b=" + bus;
    var xmlh = new XMLHttpRequest();
    xmlh.open("GET", url, true);
    xmlh.send();
    // lectura de respuesta
    xmlh.onreadystatechange = function () {
        if (xmlh.readyState === 4 && xmlh.status === 200) {
            var respuesta = xmlh.responseText;
            actualizar(respuesta); //actualizar cierta parte de la pagina
        }
    };
}
function actualizar(respuesta) {
    // elemento a actualizar
    var tbody = document.querySelector("#Tbody");
    var productos = JSON.parse(respuesta); // parse de respuesta aformato json
    console.log(productos);
    resultados = '';
    for (var i = 0; i < productos.length; i++) {
        resultados += '<tr>';
        //o tambien  resultados += '<td>' + producto[i]['prod_codigo']+ '</td>';
        resultados += '<td>' + productos[i].cod_producto + '</td>';
        resultados += '<td>' + productos[i].prod_nombre + '</td>';
        resultados += '<td>' + productos[i].tipo + '</td>';
        resultados += '<td>' + productos[i].stock + '</td>';
        resultados += '<td>' + productos[i].prod_precio + '</td>';
        resultados += '<td>' + productos[i].prod_descripcion + '</td>';
        resultados += '<td>' + productos[i].prod_fechaCreacion+ '</td>';
        resultados += '<td>' + productos[i].prod_fechaActualizacion + '</td>';
        resultados += '<td>' + productos[i].prod_usuarioActualizacion + '</td>';
        
        resultados += '<td>' +
            "<a href='index.php?c=productos&f=view_edit&id=" + productos[i].id_producto +
            "' " + "class='btn btn-primary'><i class='fas fa-marker'> </i></a>" +
            "<a href='index.php?c=productos& f=delete&id=" + productos[i].id_producto + "'" +
            "class='btn btn-danger' onclick = 'if (!confirm(\'Desea eliminar la actividad: \')) return false; " + " > <i class='far fa-trash-alt'></i> </a>" + '</td>';
        resultados += '</tr>';
    }
    tbody.innerHTML = resultados;

}


</script>

<?php  require_once FOOTER ?>

