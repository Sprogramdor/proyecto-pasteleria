<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/styles.css" type="text/css">
    <link rel="shortcut icon" href="assets/img/panlog.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/panlog.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/37d2ed924c.js" crossorigin="anonymous"></script>

    <title>Mycake</title>



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>" />

</head>

<body>

    <header class="header">
        <div class="container menu">
            <a href="#" class="menu__img">
                <img src="assets/img/mycake.exe.png" alt="mycake logo">
            </a>

            <?php 
            session_start();

            $rol = (isset($_SESSION['rol'])) ? htmlentities($_SESSION['rol']) : '';
            $id = (isset($_SESSION['id'])) ? htmlentities($_SESSION['id']) : '';

            if($rol==3 || $rol===""){  ?>
            <nav>
                <a class="menu__link" href="index.php?c=index&f=index">Inicio</a>
                <a class="menu__link" href="index.php?c=Ventas&f=indexP">Productos</a>
                <a class="menu__link" href="index.php?c=index&f=index&p=nosotros">Nosotros</a>
                <a class="menu__link" href="index.php?c=index&f=index&p=contacto">Contacto</a>
            </nav>

            <?php }
            else if($rol==1){ ?>
                <nav>
                <a class="menu__link" href="index.php?c=Publicaciones&f=index">Publicaciones</a>
                <a class="menu__link" href="index.php?c=Productos&f=index">Productos</a>
                <a class="menu__link" href="index.php?c=Usuarios&f=index">Usuarios</a>
            </nav>
            <?php } else if($rol==2) {?>
                <nav>
                <a class="menu__link" href="index.php?c=Ventas&f=index">Inicio</a>
            </nav>
            <?php } ?>





            <?php 
            //session_start();
            if(!empty( $_SESSION['usuario'])){  ?>

            <a class="button" href="index.php?c=index&f=v&op=cerrar"> Cerrar Sesion</a>
               <?php }else{ ?>
                    <a class="button" href="index.php?c=index&f=index&p=login&l=f">Iniciar Sesion</a>
               <?php }?>
            
            
        </div>
    </header>