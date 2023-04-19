    <?php
    // autor Ramos Mesias Mauro Fabrizio
require_once HEADER;
         // session_start();
        if (!isset($_SESSION['usuario']) ) {
            header("Location:index.php?c=index&f=index"); //redirijir
       }
        $rol = (isset($_SESSION['rol'])) ? htmlentities($_SESSION['rol']) : '';
        if($rol !=1){
            
            header("Location:index.php?c=index&f=index"); //redirijir
        }   
?>


<h2>Listado de las publibaciones</h2>

<main class="container">
    <div class="shadown">
    <form action="index.php?c=publicaciones&f=search" method="POST">
        <input type="text" name="b" id="busqueda" placeholder="buscar...">
        <button type="submit" class="button">Buscar</button>
    </form>
    <br><br>
    <a href="index.php?c=publicaciones&f=view_new" class="button">Nuevo</a>
    <br><br>
        <table>
            <thead>
                <th>N publicacion</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Detalle</th>
                <th>Usuario</th>
                <th>Fecha de actualizacion</th>
                <th>Acciones</th>
            </thead>
            <tbody id="tb">
                <?php foreach ($resultados as $fila) {?>
                <tr>
                    <td> <?php echo $fila["num_publicacion"]; ?></td>
                    <td> <?php echo $fila["publi_titulo"]; ?></td>
                    <td> <?php echo $fila["publi_categoria"]; ?></td>
                    <td> <?php echo $fila["publi_detalle"]; ?></td>
                    <td> <?php echo $fila["publi_usuarioActualizacion"]; ?></td>
                    <td> <?php echo $fila["publi_fechaActualizacion"]; ?></td>
                    <td class="action">
                            <a class=" action__icon action__icon-edit" href="index.php?c=publicaciones&f=view_edit&id=<?php echo $fila['id_publicacion'];?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                    <line x1="16" y1="5" x2="19" y2="8" />
                                </svg>
                            </a>
                            <a class=" action__icon action__icon-delete" href="index.php?c=publicaciones&f=delete&id=<?php echo $fila['id_publicacion'];?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="4" y1="7" x2="20" y2="7" />
                                    <line x1="10" y1="11" x2="10" y2="17" />
                                    <line x1="14" y1="11" x2="14" y2="17" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </a>
                        </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</main>

<?php  require_once FOOTER ?>


<script type="text/javascript">
var txtBuscar = document.querySelector("#busqueda");
txtBuscar.addEventListener('keyup', cargarpublicaciones);

function cargarpublicaciones() {
    // leer paramteros
    var bus = txtBuscar.value;
    // realizar la peticion
    var url = "index.php?c=publicaciones&f=searchAjax&b="+ bus;
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

//console.log(respuesta);
function actualizar(respuesta) {
    // elemento a actualizar
    var tbody = document.querySelector("#tb");
    var publicaciones = JSON.parse(respuesta); // parse de respuesta aformato json

    console.log(publicaciones);
    console.log(publicaciones);
    resultados = '';
    for (var i = 0; i < publicaciones.length; i++) {
        resultados += '<tr>';
        resultados += '<td>' + publicaciones[i].id_publicacion + '</td>';
        //o tambien  resultados += '<td>' + producto[i]['prod_codigo']+ '</td>';
        resultados += '<td>' + publicaciones[i].publi_titulo+ '</td>';
        resultados += '<td>' + publicaciones[i].publi_categoria + '</td>';
        resultados += '<td>' + publicaciones[i].publi_detalle + '</td>';
        resultados += '<td>' + publicaciones[i].publi_usuarioActualizacion + '</td>';
        resultados += '<td>' + publicaciones[i].publi_fechaActualizacion + '</td>';
        resultados += '<td>' +
            "<a href='index.php?c=publicaciones&a=view_edit&id=" + publicaciones[i].id_publicacion +
            "' " + "class='btn btn-primary'><i class='fas fa-marker'></i></a> &nbsp;&nbsp;" +
            "<a href='index.php?c=publicaciones&a=eliminar&id=" + publicaciones[i].id_publicacion + "'" +
            "class='btn btn-danger' onclick = 'if (!confirm('Desea eliminar la actividad: '" + publicaciones[i].publi_titulo
            + " ')) return false; " + " ><i class='far fa-trash-alt'></i> </a>" + '</td>';
       
            resultados += '</tr>';
    }
    tbody.innerHTML = resultados;

}


</script>

<?php  require_once FOOTER ?>

