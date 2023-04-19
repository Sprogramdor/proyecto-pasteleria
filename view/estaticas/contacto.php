<!--autor:Milena Cruz-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mycake</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

    <style>
        #contactenos {
            width: 70%;
            margin: 35px auto;
            -webkit-box-shadow: 0px 0px 18px -4px rgba(0, 0, 0, 0.67);
            -moz-box-shadow: 0px 0px 18px -4px rgba(0, 0, 0, 0.67);
            box-shadow: 0px 0px 18px -4px rgba(0, 0, 0, 0.67);
            padding: 2rem;
            border-radius: .5rem;
        }

        .comunicacion img {
            width: 40px;
            height: 40px;
        }

        .comunicacion {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 5px;
        }

        #canales {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            text-align: center;
        }

        .campo {
            margin: 15px auto;
        }

        .label {
            font-size: 25px;
            font-weight: 700;
            font-family: 'Roboto', sans-serif;
        }

        .field {
            flex-direction: column;
            font-size: 20px;
            background-color: #d9b897;
            border: 0;
            border-bottom: 2.5px solid #AB5300;
            padding: 15px;
            width: 50%;
            border-radius: 5px;
            margin-left: 25px;
            resize: none;
            font-family: 'Roboto', sans-serif;
        }

        [class="field"] {
            font-family: 'Roboto', sans-serif;
        }

        div[class~="especial"] {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Roboto', sans-serif;
        }

        label[class$="je"] {
            margin-top: 15px;
        }

        textarea[class^="area"] {
            width: 800px;
        }

        .margen {
            margin-bottom: 25px;
        }

       

        .enlaces {
            border-radius: 70px;
            padding: 20px;
            min-width: 205px;
            margin-left: 10px;
            margin-top: 10px;
            display: inline-block;
            width: 35%;

        }
    </style>
</head>



<?php require_once HEADER; ?>

<?php $img = "con"; // cambia la imagen con una clase de css linea 136
    $titulo ="Contactenos ";
    $descripcion="";
    require_once HERO; ?>;


    <main id="contactenos">
       

        <h1 style="color: #000;">Contáctenos</h1>
        <div id="canales" style="background-color:#d9b897; width:80%; height:400px; margin:0 auto; border-radius: 5px;">
            <div class="comunicacion">
                <h2>Email</h2>
                <img src="assets/img/correo1.png" alt="correo" />
                <p><b>Escribenos</b></p>
                <br /><a class="button" href="mailto:contacto@mycake.com>">Enviar correo</a>
            </div>
            <div class="comunicacion">
                <h2>Llámanos</h2>
                <img src="assets/img/llamadas.png" alt="llamadas" />
                <p><b>Telefono: 04258934 </b></p>
                <br /><a class="button" href="#">Llamada</a>
            </div>
            <div class="comunicacion">
                <h2>Mensaje</h2>
                <img src="assets/img/chat.png" alt="chat" />
                <p><b>Chat</b></p>
                <br /><a class="button" href="#">Chat</a>
            </div>
        </div>
        <div id="referencia " style=" display: flex; justify-content: center; align-items: center; background-color:white; width:100%; height:90%; ">
            <div class="enlaces" style="display: flex; flex-direction: column; width: 30%;">
                <h2>Califique Nuestro Servicio</h2>
                <img class="opin_img" src="assets/img/califique.webp" alt="califique" height="100px" style="width: 50%; align-self: center;" /><br />
                <br /><a class="button" href="#" style="text-align: center;">Llenar Encuesta </a>
            </div>
            <div class="enlaces" style="display: flex; flex-direction: column; width: 30%;">
                <h2>Deseas ser Proveedor</h2>
                <img class="opin_img" src="assets/img/proveedores.webp" alt="proveedores" height="100px" style="width: 50%; align-self: center;"><br />
                <br /><a class="button" href="#" style="text-align: center;">Formulario para proveedores</a>

            </div>
        </div>
    </main>

    








    <script>
        let opinImg = document.querySelectorAll(".opin_img");
        opinImg[0].addEventListener("mouseover", change);

        function change() {
            const date = Date.now();
            let currentDate = null;
            if (i == opinion.length - 1) {
                i = 0;
            } else {
                opinImg[0].src = `img/${opinion[i++].src}`;
                console.log(i);
                do {
                    currentDate = Date.now();
                } while (currentDate - date < 1000);
                change();
            }
        }
        let enlaces = document.querySelector(".enlaces");

        function change() {
            opinImg[0].src = "assets/img/califique.webp";
            opinImg[0].alt = "califique";
        }

        opinImg[0].addEventListener("mouseout", function () {
            opinImg[0].src = "assets/img/opinion2.jpg";
            opinImg[0].alt = "opinion";
        });

        opinImg[1].addEventListener("mouseover", function () {
            opinImg[1].src = "assets/img/proveedores.webp";
            opinImg[1].src = "assets/img/proveedores.webp";
            opintImg[1].src = "assets/img/proveedores.webp";
            opintImg[1].src = "assets/img/proveedores.webp";

            opinImg[1].src = "assets/img/proveedores.webp";
            opinImg[1].alt = "proveedores";
        });
        opinImg[1].addEventListener("mouseout", function () {
            opinImg[1].src = "assets/img/proveedores1.jpg";
            opinImg[1].alt = "proveedores1";
        });
    </script>
</body>

</html>