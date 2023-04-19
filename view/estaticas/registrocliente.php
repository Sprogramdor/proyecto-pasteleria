<!--autor: Ramos Mesias Mauro Fabrizio-->
<!DOCTYPE html>
<html lang="es">
<?php require_once HEADER; ?>
         
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/panlog.ico" type="image/x-icon">
    <meta name="description" content="Formulario para acceder a nuestra comunidad en donde informamos sobre diversos temas, tales como:
        las noticias semanales, la revista mensual, los proximos eventos y las próximas promociones. Es decir, una suscrición a nuestros boletines.">
    <meta name="keywords" content="Mycake, pasteles, bocadillos, pastel de chocolate, caracoles, ofertas en pasteles, descuentos en pasteles">
    <meta name="author" content="">
    <link rel="icon" href="img/panlog.ico" type="image/x-icon">
    <title>Mycake</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
   
    <style>
        #GripForm {
            display: grid;
            grid-template-rows: 70px 65px 30px 70px 70px 70px 70px 100px 70px;
            /*altura de las filas*/
            grid-template-columns: 5% 15% 20% 20% 20% 10%;
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

<?php $img = "suscrip"; // cambia la imagen con una clase de css linea 136
    $titulo ="Registrate y obten tú cuenta  ";
    $descripcion="";
    require_once HERO; ?>;

<section id="form" style="background-color :rgb(255, 255, 255);   height: 150vh; ">
            <h1 style="color: black;">Formulario de Registro </h1>

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

                    <span style="display: inline-block;width: 210px; height: 80px; grid-column: 5/6; grid-row:1; ">
                        <label for="ftelf">Edad</label><br>
                        <input type="text" id="edad" name="edad" placeholder="Ingrese su edad " />
                        <label id="errortelf" class="errorlabel"></label>
                    </span>

                    <span style=" display: inline-block;width: 210px; height: 80px; grid-column: 2; grid-row:2">
                        <label style="display:block ; width: 170px;" for="fcedula">Nùmero de Cedula</label>
                        <input type="text" id="fcedula" name="cedula" placeholder="Ingrese su N.cedula" />
                        <label id="errorcedula" class="errorlabel"></label>
                    </span>

                    <span style="display: inline-block; grid-column: 4; grid-row:2;width: 180px; height: 88px; margin-left: 10px;">
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


                    <span id="textAreadiv" style=" grid-column: 4; grid-row:4">
                        <label style="display:block ;">Dirección </label>
                        <textarea id="direccion" rows="5" cols="30" placeholder="Tu direccion y referencias para llegar con el pedido"></textarea>
                        <label id="errordireccion" class="errorlabel"></label>
                    </span>

                    <span style="display:inline-block; grid-column: 2; grid-row:4; width: 250px; height: 133px;  ">
                    <label for="fname">Correo Electrónico:</label><br>
                        <input type="text" id="correo" name="correo" placeholder="Ingrese su Correo" />
                        <label id="errorcorreo" class="errorlabel"></label>
                    </span>

                    <span style="display:inline-block; grid-column: 2; grid-row:5; width: 250px; height: 90px; padding-right:15px;  ">
                    <label for="fname">Contraseña:</label><br>
                        <input type="text" id="password" name="password" placeholder="Ingrese sus contraseña" />
                        <label id="errorpassword" class="errorlabel"></label>
                    </span>


                    <div style="display:inline-block ;width:120px; padding-left: 10px; grid-column:4/6; grid-row:7">
                        <input class="button" type="submit" id="BotonEnviar" value="Registrarse">
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
        var txtedad = document.getElementById("edad");
        var txtcedula = document.getElementById("fcedula");
        var txtcorreo = document.getElementById("correo");
        var txtpassword = document.getElementById("password");

        var form = document.getElementById("GripForm");
        var txtarea = document.getElementById("direccion");
        var ciudad = document.getElementById("ciudades");

        var errornombre = document.getElementById("errornombre");
        var errorapellido = document.getElementById("errorapellido");
        var errorcedula = document.getElementById("errorcedula");
        var errorciudad = document.getElementById("errorciudad");
        var errorcorreo = document.getElementById("errorcorreo");
        var errorpassword = document.getElementById("errorpassword");
        var errordireccion = document.getElementById("errordireccion");

        txtname.addEventListener('keydown', validartxt);
        txtlastname.addEventListener('keydown', validartxt);
        txtcedula.addEventListener('keydown', validarnum);
        txttelf.addEventListener('keydown', validarnum);

        
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
            if (e.target.getAttribute("id") === "edad") {
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
        
            var e1,e2,e3,e4,e5,e6,e7;

            if (txtname.value === "") {
                e1 = false;
                errornombre.textContent = "Datos necesarios !";
            } else if (txtname.value.length < 5) {
                e1=false;
                errornombre.textContent = "Deben tener más caracteres ";
            } else {
                e1=true;
                errornombre.textContent = "";
            }





            if (txtlastname.value === "") {
                e2= false;
                errorapellido.textContent = "Datos necesarios !";
            } else if (txtlastname.value.length < 5) {
                e2= false;
                errorapellido.textContent = "Deben tener más caracteres ";
            } else {
                e2= true;
                errorapellido.textContent = "";
            }

           

            if (txtcedula.value === "") {
                e3= false;
                errorcedula.textContent = "Datos necesarios !";
            } else if (txtcedula.value.length != 10) {
                e3= false;
                errorcedula.textContent = "Deben tener 10 numeros ";
            } else {
                e3= true;
                errorcedula.textContent = "";
            }

            if (txtedad.value === "") {
                e4 = false;
                errortelf.textContent = "Datos necesarios !";
            } else if ( parseInt(txttelf.value)> 17) {
                e4 = false;
                errortelf.textContent = "No es mayor de edad ";
            } else {
                e4 = true;
                errortelf.textContent = "";
            }

        
            if (ciudad.value === null || ciudad.value === '0') {
                e5 = false;
                //window.alert("ciudad"+bandera);
                errorciudad.textContent = "Seleccione una ciudad !";

            } else {
                e5 = true;
                errorciudad.textContent = "";
            }
            

            let area = false;
            
                if (txtarea.value === "") {
                    area = false;
                    errordireccion.textContent = "Necesitamos tu dirección para el envio !";
                } else {
                    area = true;
                    errordireccion.textContent = "";
                }
            
            if (txtcorreo.value === "") {
                e6 = false;
                errorcorreo.textContent = "Datos necesarios !";
            } else if (txtcorreo.value.length < 5) {
                e6=false;
                errorcorreo.textContent = "Deben tener más caracteres ";
            } else {
                e6=true;
                errorcorreo.textContent = "";
            }

            if (txtpassword.value === "") {
                e7 = false;
                errorpassword.textContent = "Datos necesarios !";
            } else if (txtpassword.value.length < 5) {
                e7=false;
                errorpassword.textContent = "Deben tener más caracteres ";
            } else {
                e7=true;
                errorpassword.textContent = "";
            }

            

            if (e1 && e2  && e3  && e4 && e5 &&e6 && e7 && area) {
                bandera = true;
            }

            return bandera;
        }

    </script>


</body>

</html>