var txtBuscar = document.querySelector("#busquedaAjax");
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
    var tbody = document.querySelector('.tabladatos');
    var productos = JSON.parse(respuesta); // parse de respuesta aformato json
    console.log(productos);
    resultados = '';
    for (var i = 0; i < productos.length; i++) {
        resultados += '<tr>';
        resultados += '<td>' + productos[i].prod_codigo + '</td>';
        //o tambien  resultados += '<td>' + producto['prod_codigo']+ '</td>';
        resultados += '<td>' + productos[i].prod_nombre + '</td>';
        resultados += '<td>' + productos[i].cat_nombre + '</td>';
        resultados += '<td>' + productos[i].prod_precio + '</td>';
        resultados += '<td>' +
            "<a href='index.php?c=Productos&a=editar&id=" + productos[i].prod_id +
            "' " + "class='btn btn-primary'><i class='fas fa-marker'></i></a>" +
            "<a href='index.php?c=Productos&a=eliminar&id=" + productos[i].prod_id + "'" +
            "class='btn btn-danger' onclick = 'if (!confirm(\'Desea eliminar la actividad: '" + productos[i].prod_nombre
            + " \')) return false; " + " ><i class='far fa-trash-alt'></i> </a>" + '</td>';
        resultados += '</tr>';
    }
    tbody.innerHTML = resultados;

}



