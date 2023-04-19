<!--autor: Acosta Jesus-->

<?php require_once HEADER; 
// session_start();
        if (!isset($_SESSION['usuario']) ) {
            header("Location:index.php?c=index&f=index"); //redirijir
       }
        $rol = (isset($_SESSION['rol'])) ? htmlentities($_SESSION['rol']) : '';
        if($rol !=3){
            
            header("Location:index.php?c=index&f=index"); //redirijir
        }   
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Realiza pedidos por nuestra web ">
    <meta name="keywords" content="Mycake, pasteles, bocadillos,Pedidos,Productos,Envios,Tematicas,diseños,sabores,cumple,Matrimonios,fiestas">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <style>
        .parallax {
            width: 100%;
            height: 60vh;
            background-image: url(assets/img/form1.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fondoimge {
            opacity: 0.8;
            filter: alpha(opacity=20);
            /* For IE8 and earlier */
        }

        section[id^="Pe"] {

            display: grid;
            grid-template-rows: 160px 150px 160px;
            /*altura de las filas*/
            grid-template-columns: 5% 15% 20% 20% 20% 10%;
            /* ancho de las columnas*/
            grid-gap: 15px 20px;

        }

        .elemento {
            grid-row: 2;
            grid-column: 2/3;
        }

        #GripForm {
            display: grid;
            grid-template-rows: 70px 65px 30px 70px 70px 70px 70px 100px 70px;
            /*altura de las filas*/
            grid-template-columns: 5% 15% 30% 20% 20% 10%;
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
</head>

<body>
    

<?php require_once HEADER; ?>


    <main id="inicio">

        <section class="parallax " style="background-color: rgba(0, 0, 0, 0.887);">
            <div id="divBanner1" class="div1">

                <div class="elemento" style="height: 220px;">
                    <h1 style="margin-top:12px ; color: white;">Tu lo pides, nosotros lo hacemos</h1>
                </div>
            </div>
            <br><br>
            <br><br>
        </section>


        <section id="form" style="background-color :rgb(255, 255, 255);   height: 150vh; ">
            <h1 style="color: black;">Formulario para Pedidos</h1>

            <div class="shadown" style=" width: 60%; margin: auto;height: 120vh;">

                <form id="GripForm" onsubmit="return validaciones();">

                    <span style="display: inline-block;width: 210px; height: 80px;  grid-column: 2; grid-row:1;   ">
                        <label for="fname">Nombres:</label><br>
                        <input type="text" id="fname" name="name" placeholder="Ingrese sus Nombres" />
                        <label id="errornombre" class="errorlabel"></label>
                    </span>

                    <span style="display: inline-block;width: 210px; height: 80px; grid-column: 4; grid-row:1">
                        <label for="fname">Apellidos:</label><br>
                        <input type="text" id="flastname" name="lastname" placeholder="Ingrese sus Apellidos" />
                        <label id="errorapellido" class="errorlabel"></label>
                    </span>

                    <span style="display: inline-block;width: 210px; height: 80px; grid-column: 4; grid-row:2">
                        <label for="ftelf">Nùmero de Telefono</label><br>
                        <input type="text" id="ftelf" name="telf" placeholder="Ingrese num de Telefono " />
                        <label id="errortelf" class="errorlabel"></label>
                    </span>

                    <span style=" display: inline-block;width: 210px; height: 80px; grid-column: 2; grid-row:2">
                        <label style="display:block ; width: 170px;" for="fcedula">Nùmero de Cedula</label>
                        <input type="text" id="fcedula" name="cedula" placeholder="Ingrese su N.cedula" />
                        <label id="errorcedula" class="errorlabel"></label>
                    </span>

                    <span style="display: inline-block; grid-column: 5/6; grid-row:1; width: 180px; height: 88px; margin-left: 10px;">
                        <label style="display:block ;">Ciudad : </label>
                        <select id="ciudades">
                            <option value="0">-Seleccion-</option>
                            <option value="1">Guayaquil</option>
                            <option value="2">Quito</option>
                        </select>
                        <label id="errorciudad" class="errorlabel"></label>
                    </span>

                    <span style="grid-column: 1/7; grid-row:3;width: 90%;">
                        <hr style="width: 90%;">
                    </span>

                    <span style="display: inline-block; grid-column: 4; grid-row:6; width: 250px; height: 100px;">
                        <label style="display:block ;">Seleccione una tematica : </label>
                        <select id="tematica">
                            <option value="0">-Seleccion-</option>
                            <option value="1">Fiesta infantil</option>
                            <option value="2">Matrimonios</option>
                            <option value="3">Evento formal</option>
                        </select>
                        <label id="errortematica" class="errorlabel"></label>
                    </span>

                    <span style="display: inline-block; grid-column: 4/5; grid-row:4; width: 250px; height: 133px; ">
                        <label style="display:block ;">Sabor del Relleno :</label><br>
                        <label style="display: inline-block; margin-right: 10px; " for="sabor1"> Chocolate</label>
                        <input type="checkbox" id="sabor1" name="sabor1" value="1"><br>
                        <label for="sabor2">Mermelada</label>
                        <input type="checkbox" id="sabor2" name="sabor2" value="2"><br>
                        <label style="display: inline-block; margin-right: 35px; " for="sabor3">Manjar </label>
                        <input type="checkbox" id="sabor3" name="sabor3" value="3">
                        <label id="errorsabor" class="errorlabel"></label>
                    </span>

                    <span id="textAreadiv" style="visibility:hidden; grid-column: 2; grid-row:9">
                        <label style="display:block ;">Dirección </label>
                        <textarea id="direccion" rows="5" cols="30" placeholder="Tu direccion y referencias para llegar con el pedido"></textarea>
                        <label id="errordireccion" class="errorlabel"></label>
                    </span>

                    <span style="display:inline-block; grid-column: 2; grid-row:4; width: 250px; height: 133px;  ">
                        <label>Elige el Tamaño de la torta :</label> <br> <br>
                        <label for="Gsize"> Grande </label>
                        <input type="radio" id="Gsize" name="Sizecake" value="1"><br>
                        <label for="Msize">Mediano</label>
                        <input type="radio" id="Msize" name="Sizecake" value="2"><br>
                        <label for="Ssize">Pequeño</label>
                        <input type="radio" id="Gsize" name="Sizecake" value="3">
                        <label id="errorsize" class="errorlabel"></label>
                    </span>

                    <span style="display:inline-block; grid-column: 2; grid-row:8; width: 250px; height: 90px; padding-right:15px;  ">
                        <input type="radio" id="envio" name="envio" value="1">
                        <label style="font-size:medium ; display: inline-block; margin-right: 42px;" for="envio">Enviar pedido a Domicilio </label>
                        <br>
                        <input type="radio" id="local" name="envio" value="2">
                        <label style="font-size:medium " for="local">Recoger pedido personalmente</label>
                        <label id="errorenvio" class="errorlabel"></label>
                    </span>

                    <span style="display:inline-block ; width:250px; grid-column: 2; grid-row:6">
                        <label style="display:block;" for="myfile">Adjuntar foto del modelo deseado (Opcional)</label>
                        <input type="file" id="myfile" name="myfile">
                    </span>

                    <div style="display:inline-block ;width:120px; padding-left: 10px; grid-column:4/6; grid-row:9">
                        <input class="button" type="submit" id="BotonEnviar" value="Enviar Pedido">
                    </div>
                </form>

            </div>

            <br><br><br><br><br>
        </section>
    </main>

    

    <?php require_once FOOTER; ?>

    <script>
        var bandera = false;
        var txtname = document.getElementById("fname");
        var txtlastname = document.getElementById("flastname");
        var txttelf = document.getElementById("ftelf");
        var txtcedula = document.getElementById("fcedula");
        var pedido = document.getElementsByName("envio");
        var form = document.getElementById("GripForm");
        var txtareadiv = document.getElementById("textAreadiv");
        var txtarea = document.getElementById("direccion");
        var ciudad = document.getElementById("ciudades");
        var tematica = document.getElementById("tematica");
        var sabor1 = document.getElementById("sabor1");
        var sabor2 = document.getElementById("sabor2");
        var sabor3 = document.getElementById("sabor3");
        var sizetorta = document.getElementsByName("Sizecake");

        var errornombre = document.getElementById("errornombre");
        var errorapellido = document.getElementById("errorapellido");
        var errortelf = document.getElementById("errortelf");
        var errorcedula = document.getElementById("errorcedula");
        var errorciudad = document.getElementById("errorciudad");
        var errorenvio = document.getElementById("errorenvio");
        var errorsabor = document.getElementById("errorsabor");
        var errorsize = document.getElementById("errorsize");
        var errortematica = document.getElementById("errortematica");
        var errordireccion = document.getElementById("errordireccion");

        txtname.addEventListener('keydown', validartxt);
        txtlastname.addEventListener('keydown', validartxt);
        txtcedula.addEventListener('keydown', validarnum);
        txttelf.addEventListener('keydown', validarnum);

        // ocultar textArea de direccion si es pedido a domicilio
        form.addEventListener('click', function (e) {

            if (e.target.type == "radio") {
                if (pedido[0].checked) {
                    txtareadiv.style.visibility = "visible";
                    console.log("enviar a pedido");
                } else {
                    txtareadiv.style.visibility = "hidden";
                    console.log("recoger");
                }
            }
        })

        //Validar solo letras y maximo 30 caracteres
        function validartxt(e) {
            if (e.target.getAttribute("id") === "fname") {
                errornombre.textContent = "";

            }
            if (e.target.getAttribute("id") === "flastname") {
                errorapellido.textContent = "";
            }

            if (!(e.keyCode >= 65 && e.keyCode <= 90 || e.keyCode >= 97 && e.keyCode <= 122) && !(e.keyCode == 32 || e.keyCode == 8)) {
                e.preventDefault();
                console.log("if");

                console.log("if" + e.keyCode);
            } else {
                if (e.target.value.length > 30 && !(e.keyCode == 8)) {
                    e.preventDefault();
                } console.log("else" + e.keyCode);
            }
        }

        //Validar solo numeros y maximo 10 caracteres

        function validarnum(e) {

            var dato = fechaselect.value;
            var fechaN = new Date(dato);
            var fechaActual = new Date();// fecha actual

            if (e.target.getAttribute("id") === "ftelf") {
                errortelf.textContent = "";
            }

            if (e.target.getAttribute("id") === "fcedula") {
                errorcedula.textContent = "";
            }

            if (!(e.keyCode >= 48 && e.keyCode <= 57) && !(e.keyCode == 8)) {
                e.preventDefault();
                console.log("Escribe numeros");
            } else {
                if ((e.target.value.length >= 10) && !(e.keyCode == 8)) {
                    e.preventDefault();
                }
                console.log("Ya se lleno");
            }
        }


        function validaciones() {

            if (sabor1.checked || sabor2.checked || sabor3.checked) {
                bandera = true;
                errorsabor.textContent = "";
            } else {
                bandera = false;
                errorsabor.textContent = "Seleccione al menos un sabor";
                //window.alert("chechk :"+bandera);
            }

            if (txtname.value === "") {
                bandera = false;
                errornombre.textContent = "Datos necesarios !";
            } else if (txtname.value.length < 5) {
                errornombre.textContent = "Deben tener más caracteres ";
            } else {
                errornombre.textContent = "";
            }

            if (txtlastname.value === "") {
                bandera = false;
                errorapellido.textContent = "Datos necesarios !";
            } else if (txtlastname.value.length < 5) {
                errorapellido.textContent = "Deben tener más caracteres ";
            } else {
                errorapellido.textContent = "";
            }

            if (txtcedula.value === "") {
                bandera = false;
                errorcedula.textContent = "Datos necesarios !";
            } else if (txtcedula.value.length != 10) {
                errorcedula.textContent = "Deben tener 10 numeros ";
            } else {
                errorcedula.textContent = "";
            }

            if (txttelf.value === "") {
                bandera = false;
                errortelf.textContent = "Datos necesarios !";
            } else if (txttelf.value.length != 10) {
                errortelf.textContent = "Deben tener 10 numeros ";
            } else {
                errortelf.textContent = "";
            }

            if (tematica.value === null || tematica.value === '0') {
                bandera = false;
                //window.alert("tematica"+bandera);
                errortematica.textContent = "Seleccione tematica !";
            } else {
                errortematica.textContent = "";
            }

            if (ciudad.value === null || ciudad.value === '0') {
                bandera = false;
                //window.alert("ciudad"+bandera);
                errorciudad.textContent = "Seleccione una ciudad !";

            } else {
                errorciudad.textContent = "";
            }
            //-------- verificar el tamaño de la torta
            let check = false;

            if (sizetorta[0].checked || sizetorta[1].checked || sizetorta[2].checked) {
                check = true;
                errorsize.textContent = "";
            } else {
                check = false;
                errorsize.textContent = "Seleccione un tamaño  !";
            }

            let area = false;
            if (txtareadiv.style.visibility === "visible") {
                if (txtarea.value === "") {
                    area = false;
                    errordireccion.textContent = "Necesitamos tu dirección para el envio !";
                } else {
                    area = true;
                    errordireccion.textContent = "";
                }
            }

            let check2 = false;

            if (pedido[0].checked || pedido[1].checked) {
                check2 = true;
                errorenvio.textContent = "";
            } else {
                check = false;
                errorenvio.textContent = "Seleccione un Envio  !";
            }

            if (check && bandera && check2 && area) {
                bandera = true;
            }

            return bandera;
        }

    </script>

</body>

</html>