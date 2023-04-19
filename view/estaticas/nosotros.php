<!--autor:AUSTIN SALGUERO-->        
<!DOCTYPE html>
<html lang="es">

<?php require_once HEADER; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="vision mision e historia de la pasteleria MYCAKE.">
    <meta name="keywords" content="Mycake, historia, vision, mision, galeria, servicios">
    
    <title>Nosotros</title>


    <style>
        * {
            background-color: transparent;
        }

        .Grid_container {
            display: grid;
            grid-template-areas:
                "grid-imagen"
                "article1"
                "article2"
                "article3"
                "article4"
                "galery_tittle"
                "galery"
                "frase";
        }

        .grid-imagen {
            grid-area: grid-imagen;
            background-image: url(img/nosotros.png);
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
            height: 500px;

        }

        .imagen_content {
            background-color: #000000bf;
            height: 500px;
            width: 100%;
            justify-content: center;
            align-items: center;
            position: relative;
            display: flex;
        }

        .article1 {
            color: #000000;
            background-color: #ffffff;
            grid-area: article1;
            display: flex;
            height: 400px;
            padding-left: 170px;
        }

        .article2 {
            color: #fff;
            background-color: #140d05;
            grid-area: article2;
            display: flex;
            height: 400px;
            padding-right: 170px;
        }

        .article3 {
            color: rgb(0, 0, 0);
            background-color: #ffffff;
            grid-area: article3;
            display: flex;
            height: 400px;
            padding-left: 170px;
        }

        .article4 {
            background-color: bisque;
            display: flex;
            height: 200px;
        }

        /*.galery{
        grid-area: galery;
        background-color: #ffffff;
        height: auto;
        padding-left: 50px;
        padding-right: 50px;
        padding-bottom: 50px;
    }*/
        .frase {
            grid-area: frase;
            font-style: italic;
            font-weight: bold;
            height: auto;
            font-size: 50px;
            font-family: 'Dancing Script', cursive;
        }

        .frase h3 {
            font-size: 50px;
            background-color: bisque;
        }

        .galery h2 {
            text-align: center;
            font-size: 70px;
        }

        /*.galery h3, h4{
        text-align: left;
        background-color: bisque;
        
    }*/
        .img_empresa {
            padding: 70px 0 0 200px;
            border: 40px;
            width: 400px;
            height: 300px;
        }

        .article_content1 {
            width: 500px;
        }

        .article_content2 {
            width: 500px;
            padding-left: 200px;
        }

        .article_content3 {
            width: 500px;
        }

        .mision {
            margin: 0 100px 0 50px;
            text-align: center;
        }

        .vision {
            margin: 0 100px 0 50px;
            text-align: center;
        }

        .article4 p {
            font-size: 20px;
            font-weight: bold;
        }

        .article4 h2 {
            margin-bottom: 10px;
        }

        /*.img_comunion{
       width: 350px;
       height: 350px;
   }
   .img_postres{
       width: 700px;
       height: 500px;
   }
   .img_cumple{
       width: 470px;
   }*/
        .frase figure:nth-of-type(1) {
            height: 600px;
            width: 800px;
            padding-left: 350px;
        }

        .frase cite:last-child {
            padding-left: 350px;
            font-size: 30px;
        }


        /*GAALERIA DE IMG*/
        #galeria {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: relative;
            display: grid;
            grid-template-columns: repeat(3, 1fr);

            grid-gap: 15px;
            max-width: 900px;
            min-width: 900px;
            padding: 0 10px;

        }

        #galeria img {
            width: 300px;
            height: 300px;
            border-radius: 50px;
            cursor: pointer;
        }

        #img-activa {
            width: 100%;
            height: auto;
        }

        #contenedor-principal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10;
            width: 100%;
            height: 100%;
            display: none;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.65);
        }

        #contenedor-interno {
            width: 800px;
            height: 700px;
            border: 2px #f3f3f3 solid;
            padding: 2px;
            display: flex;
            justify-content: center;
            position: relative;

        }

        button {
            cursor: pointer;
            background: transparent;
            border: none;
            color: #f3f3f3;

        }

        #btn-cierra {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 3rem;
        }

        #btn-retrocede {
            position: absolute;
            top: 50%;
            left: 0;
            font-size: 3rem;

        }

        #btn-retrocede img {
            transform: rotate(-180deg);
        }

        #btn-adelantar {
            position: absolute;
            top: 50%;
            right: 0;
            font-size: 3rem;
        }

        .galery_tittle {
            display: flex;
            justify-content: center;
            background-color: bisque;
            margin: 20px 0;
        }

        [class="social-network"]:hover {
            background-color: #000000;
            color: #ffffff;
        }
    </style>
</head>

<body>
   



<?php $img = "nosotros"; // cambia la imagen con una clase de css linea 136
    $titulo ="Sobre Nosotros";
    $descripcion="";
    require_once HERO; ?>;

<main class="Grid_container">
        <div class="article1">
            <article class="article_content1">
                <h2>NUESTRA EMPRESA</h2>
                <p>Es disfrutar conversaciones entre amigos acompañados de un buen café o ese dulce
                    que te levantó el ánimo en un mal día. Hablar de nuestra marca es hablar de su labor fuera de los locales
                    , donde a través de proyectos nos esforzamos por crear un impacto positivo en nuestra comunidad. Sweet &
                    <strong>MY CAKE</strong> es la sonrisa y entusiasmo de nuestro equipo, la excelente calidad y sabor de nuestros productos,
                    pero sobre todo <strong>MY CAKE</strong> es un buen ambiente para hacer una pausa y disfrutar el momento
                </p>
            </article>
            <img class="img_empresa" src="assets/img/panaderia.png" alt="empresa" />
        </div>
        <div class="article2">
            <img class="img_empresa" src="assets/img/fotoantigua.png" alt="empresa" />
            <article class="article_content2">
                <h2>NUESTRA HISTORIA</h2>
                <p>La idea empezó en 1997 cuando Richard Peet y Soledad Hanna aún eran novios. Los dulces
                    que ella le preparaba con cariño sirvieron de inspiración para crear un lugar especializado tanto en cafés
                    como en postres. Al casarse, hicieron realidad su proyecto abriendo el primer <strong>MY CAKE</strong> en el centro
                    comercial Mall del Sol de Guayaquil, con un equipo de 15 personas.
                </p>
            </article>
        </div>
        <div class="article3">
            <article class="article_content3">
                <h2>NUESTRA FILOSOFIA</h2>
                <p>
                    En <strong>MY CAKE</strong> estamos siempre en una constante búsqueda de brindar a nuestros clientes productos de
                    la mejor calidad acompañado de un cordial servicio y buen ambiente que se vive en todos los locales.
                </p>
                <ul>
                    <li>Capital Humano.</li>
                    <li>Responsabilidad social.</li>
                    <li>Valores.</li>
                </ul>
            </article>
            <img class="img_empresa" src="assets/img/nuestrafilosofia.png" alt="empresa" />
        </div>
        <div class="article4">
            <article class="mision">
                <h2>NUESTRA MISIÓN</h2>
                <p>Atender a nuestros clientes de manera personalizada, brindando el mejor servicio para
                    crear momentos especiales.
                </p>
            </article>
            <article class="vision">
                <h2>NUESTRA VISIÓN</h2>
                <p>Ser una cafetería en constante búsqueda de la excelencia, con una organización basada en
                    el amor, respeto y responsabilidad.
                </p>
            </article>
        </div>
        <div class="galery_tittle">
            <h2>GALERIA</h2>
        </div>
        <div class="galery" id="galeria">

            <img class="img_postres" src="assets/img/galeria1.png" alt="postre1" />
            <img class="img_postres" src="assets/img/galeria2.png" alt="postre2" />
            <img class="img_comunion" src="assets/img/galeria3.png" alt="postre3" />
            <img class="img_comunion" src="assets/img/galeria4.png" alt="postre4" />
            <img class="img_comunion" src="assets/img/galeria5.png" alt="postre5" />
            <img class="img_comunion" src="assets/img/galeria6.png" alt="postre6" />
            <img class="img_cumple" src="assets/img/cumple1.png" alt="cumple1" />
            <img class="img_cumple" src="assets/img/cumple2.png" alt="cumple2" />
            <img class="img_cumple" src="assets/img/cumple3.png" alt="cumple3" />
            <img class="img_postres" src="assets/img/cumple4.png" alt="cumple4" />
            <img class="img_postres" src="assets/img/cumple5.png" alt="cumple5" />
            <img class="img_postres" src="assets/img/cumple6.png" alt="cumple6" />
        </div>
        <section id="contenedor-principal">
            <div id="contenedor-interno">
                <img class="img_postres" id="imagen-activa" src="assets/img/galeria1.png" alt="postre1" />
                <button id="btn-cierra" type="button"><img src="assets/img/cerrar.png" alt="cerrar"></button>
                <button id="btn-retrocede" type="button"><img src="assets/img/adelante.png" alt="atras"></button>
                <button id="btn-adelantar" type="button"><img src="assets/img/adelante.png" alt="adelante"></button>


            </div>
        </section>
        <div class="frase" style="display: flexbox;">
            <h3>Nuestro personal.</h3>
            <figure>
                <img src="assets/img/foto_agradecimiento.png" alt="agradecimiento" />
            </figure>
            <blockquote style="border-top: #645353 solid; padding-top: 40px;">

               
            </blockquote>

        </div>

    </main>
    
    <script>
        const btncierra = document.querySelector('#btn-cierra');
        const btnadelantar = document.querySelector('#btn-adelantar');
        const btnretrocede = document.querySelector('#btn-retrocede');
        const imagenes = document.querySelectorAll('#galeria img');
        const ligthbox = document.querySelector('#contenedor-principal');
        const imagenactiva = document.querySelector('#imagen-activa');
        let indiceImagen = 0;
        /*abrir ligthbox*/
        const abreligthbox = (event) => {
            imagenactiva.src = event.target.src;
            ligthbox.style.display = 'flex';
            indiceImagen = Array.from(imagenes).indexOf(event.target);
        }
        imagenes.forEach((image) => {
            image.addEventListener('click', abreligthbox);
        });
        /*CERRAR LIGTHBOX*/
        btncierra.addEventListener('click', () => {
            ligthbox.style.display = 'none';
        });
        /*Adelanta imagen*/
        const adelantaimagen = () => {
            if (indiceImagen === imagenes.length - 1) {
                indiceImagen = -1;
            }
            imagenactiva.src = imagenes[indiceImagen + 1].src;
            indiceImagen++;
        };
        btnadelantar.addEventListener('click', adelantaimagen);
        /*RETROCEDER imagen*/
        const retrocedeimagen = () => {
            if (indiceImagen === 0) {
                indiceImagen = imagenes.length;
            }
            imagenactiva.src = imagenes[indiceImagen - 1].src;
            indiceImagen--;
        };
        btnretrocede.addEventListener('click', retrocedeimagen);

    </script>


    <?php require_once FOOTER; ?>
</body>


























