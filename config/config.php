<?php

// controlador y funcion predefinida
define("CONTROLADOR_PRINCIPAL", "index");
define("FUNCION_PRINCIPAL", "index");


// * TEMPLATES
define("HEADER", "view/templates/header.php");
define("HEADERL", "view/templates/headerLogin.php");
define("HERO", "view/templates/hero.php");
define("FOOTER", "view/templates/footer.php");
define("FUNCION", "controller/FuncionesController.php");
// ? VIEW: modulo productos
//define("VPUBLICACIONES", "view/publicaciones/publicaciones.");
define("VPRODUCTOS", "view/productos/productos.");
define("VPUBLICACIONES", "view/publicaciones/publicaciones.");
define("VPROVEEDORES","view/proveedores/proveedores." );
define("VUSUARIOS", "view/Usuarios/usuarios.");
define("VVENTAS", "view/Ventas/ventas.");
define("VSHOP", "view/Ventas/shop.");
define("VSHOPF", "view/Ventas/shopfront.");
define("VLISTCLIENTE", "view/Ventas/shopcliente.");
define("VESTATICPRODUC", "view/estaticas/productos.");
define("VUSER", "view/usuarios/usuarios.");
define("VCLIENTES", "view/usuarios/clientes.");
// ? VIEW: modulo categorias


// ! Conection BDD
define("DBNAME", "PasteleriaMVC");
define("DBUSER", "root");
define("DBPASSWORD", "");
define("VALIDAR", "sesion/validar.php");
?>
