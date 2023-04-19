<!--autor:Acosta Minuche-->
<!DOCTYPE html>
<html lang="es">
<?php require_once HEADERL; ?>
    <meta name="keywords" content="Mycake, pasteles, bocadillos,Pedidos,Productos,Envios,Tematicas,diseños,sabores,cumple,Matrimonios,fiestas">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <style>
        
        .elemento {
            grid-row: 2;
            grid-column: 2/3;
        }

        #GripForm {
            display: grid;
            grid-template-rows: 80px 72px 20px 40px 70px 70px;
            /*altura de las filas*/
            grid-template-columns: 5% 15% 10% 25% 20% 10%;
            /* ancho de las columnas*/
            grid-gap: 15px 20px;
        }

        .errorlabel {
            color: red;
            font-size: small;
            font-style: italic;
            display: block;
            margin-top: 5px;
        }
    </style>


<body>
    
    <main id="inicio">    
        <section id="form" style="background-color :rgb(255, 255, 255);   height: 90vh; ">
            <h1 style="color: black;">Comienza Aquí</h1>

            <div class="shadown" style=" width: 60%; margin: auto;height: 70vh;">
                         
                <form id="GripForm" onsubmit="return validaciones();"  method="post" action="index.php?c=index&f=v">
                        
                    <span style="display: inline-block;width: 210px; height: 80px;  grid-column: 4; grid-row:2;   ">
                        <label for="user">Usuario:</label><br>
                        <input type="text" id="user" name="user" placeholder="Ingrese su Usuario" />
                        <label id="errornombre" class="errorlabel"></label>
                    </span>
                        <br> <br> <br>
                    <span style="display: inline-block;width: 210px; height: 80px; grid-column: 4; grid-row:3">
                        <label for="user">Contraseña:</label><br>
                        <input type="password" id="pass" name="pass" placeholder="Ingrese su Contraseña" />
                        <label id="errorapellido" class="errorlabel"></label>
                    </span>

                    
                    <div style="display:inline-block ;width:120px; padding-left: 10px; grid-column:4; grid-row:5">
                        <input class="button" type="submit" id="BotonEnviar" value="Iniciar Sesión">
                    </div>


                    <input type="hidden" id="pedido" name="pedido"value=" <?php echo $_GET['l'];?> ">
                    
                    <span style="display: inline-block;width: 210px; height: 80px;  grid-column: 4; grid-row:6;   ">
                        <label > Aún no tienes cuenta?</label><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="index.php?c=index&f=index&p=registrocliente">Registrate</a>
                    </span>
                </form>
                    
            </div>
        </section>
    </main>

    

    <?php require_once FOOTER; ?>

    <script>
        var bandera = false;
        var txtname = document.getElementById("user");
        var txtlastname = document.getElementById("pass");
        var form = document.getElementById("GripForm");

        var errornombre = document.getElementById("errornombre");
        var errorapellido = document.getElementById("errorapellido");
        
        txtname.addEventListener('keydown', validartxt);
        txtlastname.addEventListener('keydown', validartxt);


        

        //Validar solo letras y maximo 30 caracteres
        function validartxt(e) {
            if (e.target.getAttribute("id") === "user") {
                errornombre.textContent = "";

            }
            if (e.target.getAttribute("id") === "pass") {
                errorapellido.textContent = "";
            }    
                if (e.target.value.length > 20 && !(e.keyCode == 8)) {
                    e.preventDefault();
                } 
            }
        




        function validaciones() {

               var b1;
               var b2;
            if (txtname.value === "") {
                b1 = false;
                errornombre.textContent = "Datos necesarios !";
            } else if (txtname.value.length < 5) {
                errornombre.textContent = "Deben tener más caracteres ";
            } else {
                errornombre.textContent = "";
                b1=true;
            }

            if (txtlastname.value === "") {
                b2= false;
                errorapellido.textContent = "Datos necesarios !";
            } else if (txtlastname.value.length < 5) {
                errorapellido.textContent = "Deben tener más caracteres ";
            } else {
                errorapellido.textContent = "";
                b2=true;
            }


            if (b1 && b2) {
                bandera = true;
            }

            return bandera;
        }

    </script>

</body>

</html>