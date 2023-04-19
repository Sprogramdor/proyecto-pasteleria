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
        fieldset {
            border: none;
            margin-bottom: 20px;
            padding: 15px;
        }

        legend {
            font-size: 25px;
            font-weight: 700;
            color: #ab5300;
            width: 100%;
            text-align: center;
        }

        legend::first-letter {
            text-transform: uppercase;
        }

        fieldset .label {
            font-weight: 500;
            color: #000000;
        }

        .label__error {
            font-size: 18px;
            font-weight: 500;
            color: #ff0000;
        }

        .status {
            visibility: hidden;
        }

        .personal {
            display: flex;
            justify-content: space-around;
        }

        .flex {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .label__personal {
            flex: 0 0 80px;
            text-align: right;
        }

        label[class$=".label__ubication"] {
            margin-bottom: 15px;
        }

        input[class^=".input__personal"] {
            width: 200px;
        }

        div[class*="all"] {
            width: 400px;
            margin: 0 auto;
        }

        [class|="ultimo-fieldset"] {
            margin-bottom: 0;
        }

        .margin-top {
            margin-top: 15px;
        }

        .f-column {
            flex-direction: column;
            margin-left: 10px;
        }

        .label__gender {
            flex: 0 0 80px;
        }

        .label__ubication {
            margin-bottom: 15px;
        }

        .select {
            width: 250px;
        }

        .interests {
            justify-content: space-around;
        }

        .wish>label {
            flex: 0 0 215px;
            margin-bottom: 15px;
        }

        #box {
            visibility: hidden;
        }

        .test2~div {
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        [class~="textarea"] {
            resize: none;
            width: 500px;
            height: 65px;
            border: 1px solid #e5a357;
            border-radius: 5px;
            padding: 5px;
        }

        [class="button"] {
            border: 0;
        }
    </style>
</head>

<?php $img = "suscrip"; // cambia la imagen con una clase de css linea 136
    $titulo ="Comienza tu Suscripción ";
    $descripcion="";
    require_once HERO; ?>;

    <!-- Main -->
    <main class="container">
        <section class="shadown">
            <h1 style="color: #000000;">Suscripción</h1>
            <form id="form">
                <!-- Datos Personales -->
                <fieldset>
                    <legend>Datos personales</legend>
                    <div class="personal">
                        <div id="txtinput">
                            <div class="flex">
                                <label class="label__personal label__name" for="name">Nombres</label>
                                <input class="input__personal" type="text" name="names" id="name" placeholder="Ingresa tu nombre">
                            </div>
                            <label class="label__error"></label>

                            <div class="flex  margin-top">
                                <label class="label__personal" for="lastName">Apellidos</label>
                                <input class="input__personal" type="text" name="lastName" id="lastName" placeholder="Ingresa tu apellido">
                            </div>
                            <label class="label__error"></label>

                            <div class="flex  margin-top">
                                <label class="label__personal" for="age">Edad</label>
                                <input class="input__personal" type="text" name="age" id="age" placeholder="Ingresa tu edad">
                            </div>
                            <label class="label__error"></label>
                            <div style="margin-top: 25px ;">
                                <label class="label__error"><small class="status">*Haz olvidado llenar algun campo</small></label>
                            </div>
                        </div>
                        <!-- Radios - Gender -->
                        <div class="flex gender">
                            <label>Sexo</label>
                            <div class="flex f-column">
                                <div class="flex">
                                    <label class="label" for="male">Masculino </label>
                                    <input type="radio" value="male" name="gender" id="male">
                                </div>
                                <div class="flex">
                                    <label class="label label__gender" for="female">Femenino</label>
                                    <input type="radio" value="female" name="gender" id="female">
                                </div>
                                <label class="label__error"><small class="status">*No se ha seleccionado nada</small></label>
                            </div>
                        </div>

                        <div class="flex f-column align">
                            <div>
                                <label class="flex label__ubication" for="region">Región en la que se encuentra</label>
                                <select class="select" name="region" id="region">
                                    <option value="">- Seleccionar -</option>
                                    <option value="costa">Costa</option>
                                    <option value="sierra">Sierra</option>
                                    <option value="oriente">Oriente</option>
                                </select>
                            </div>
                            <label class="label__error"><small class="status">*No se ha seleccionado nada</small></label>

                            <div id="box">
                                <label class="flex label__ubication" for="provincia">¿En qué Provincia se encuentra?</label>
                                <select class="select" name="province" id="provincias">
                                    <option value="">- Seleccionar -</option>
                                </select>
                            </div>
                            <label class="label__error"><small class="status">*No se ha seleccionado nada</small></label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Me interesa:</legend>
                    <div class="flex interests test">
                        <div>
                            <label class="test2">Deseo tener información de:</label>

                            <div class="flex wish ">
                                <label class="label" for="weekly">Noticias semanales</label>
                                <input type="checkbox" name="suscription" value="noticia-semanal" id="weekly">
                            </div>
                            <div class="flex wish">
                                <label class="label" for="monthly">La revista mensual</label>
                                <input type="checkbox" name="suscription" value="revista-mensual" id="monthly">
                            </div>

                            <div class="flex wish">
                                <label class="label" for="upcomingEvents">Los próximos eventos</label>
                                <input type="checkbox" name="suscription" value="proximo-evento" id="upcomingEvents">
                            </div>
                            <div class="flex wish">
                                <label class="label" for="upcomingpromotions">Las próximas promociones</label>
                                <input type="checkbox" name="suscription" value="proxima-promocion" id="upcomingpromotions">
                            </div>
                            <label class="label__error"><small class="status">*No se ha seleccionado nada</small></label>
                        </div>


                        <div>
                            <label>Deseo estar suscrito por: </label>
                            <div class="flex wish">
                                <label class="label" for="six">6 semanas</label>
                                <input type="radio" name="time" value="6-semanas" id="six">
                            </div>

                            <div class="flex wish">
                                <label class="label" for="one">1 año</label>
                                <input type="radio" name="time" value="1-año" id="one">
                            </div>

                            <div class="flex wish">
                                <label class="label" for="five">5 Años</label>
                                <input type="radio" name="time" value="5-años" id="five">
                            </div>

                            <div class="flex wish">
                                <label class="label" for="always">Hasta que lo desactive</label>
                                <input type="radio" name="time" value="Notificar" id="always">
                            </div>
                            <label class="label__error"><small class="status">*No se ha seleccionado nada</small></label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="ultimo-fieldset">
                    <legend>Contacto y sugerencias</legend>
                    <div class="flex" style="justify-content: center; margin-top: 15px;">
                        <svg xmlns=" http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="28" height="28" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="#7f5345" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <polyline points="3 7 12 13 21 7" />
                        </svg>
                        <input type="text" id="email" name="email" style="width: 250px; text-align: center;" placeholder="ejemplo@email.com">
                    </div>
                    <div style="width: 195px; margin: 0 auto;">
                        <label class="label__error"><small class="status">*El campo está vacío</small></label>
                    </div>
                    <div class="flex" style="flex-direction: column;">
                        <label for="">¿Qué boletín te gustaría que implementemos? <small>(opcional)</small></label>
                        <textarea class="textarea" name="implements" id=""></textarea>
                    </div>
                </fieldset>
                <div class="all">
                    <input class="button" type="submit" value="Enviar" style="width: 400px;">
                </div>
            </form>
        </section>
    </main>

  







    <?php require_once FOOTER; ?>



    <script type="text/javascript">

        // Control de los inputs
        let letters = /^[a-zA-Z ]+$/i;
        let numbers = /^[0-9]+$/i;
        let email = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i;
        const txtName = document.querySelector("#name");
        const txtLastName = document.querySelector("#lastName");
        const txtAge = document.querySelector("#age");
        const txtInput = document.querySelector("#txtinput");
        const lblError = document.querySelectorAll(".label__error");
        const txtArea = document.querySelector(".textarea");
        txtArea.addEventListener("input", function (e) {
            if (letters.test(txtArea.value)) {
                maxLength(e, 250);

            } else {
                e.target.value = e.target.value.substring(0, e.target.value.length - 1)
            }
        });

        txtInput.addEventListener("input", function (e) {
            if (e.target === txtName) {
                if (letters.test(txtName.value)) {
                    maxLength(e, 20);

                } else {
                    e.target.value = e.target.value.substring(0, e.target.value.length - 1)
                    notification(0);
                }
            }
            if (e.target === txtLastName) {
                if (letters.test(txtLastName.value)) {
                    maxLength(e, 20);
                } else {
                    e.target.value = e.target.value.substring(0, e.target.value.length - 1)
                    notification(1);
                }
            }
            if (e.target === txtAge) {
                if (numbers.test(txtAge.value)) {
                    maxLength(e, 2)
                } else {
                    notification(2);
                    e.target.value = e.target.value.substring(0, e.target.value.length - 1)
                }
            }
            if (e.target === txtAge && txtAge.value <= 17) {
                notification(2, true);
            }
        });
        function maxLength(e, number) {
            if (e.target.value.length >= number) {
                e.target.value = e.target.value.substring(0, number);
            }
        }
        function notification(position, underrage = false) {
            if (lblError[position].hasChildNodes() === true) {
                return; // don't create more notification if alredy exist.
            } else {
                const small = document.createElement("small");
                small.textContent = "*No intentes ingresar un número"
                if (position === 2) {
                    small.textContent = "*Este campo no acepta letras"
                }
                if (position == 2 && underrage === true) {
                    small.textContent = "*Debes ser mayor de edad"

                }
                small.style.visibility = "visible";
                lblError[position].appendChild(small);
                setTimeout(() => {
                    small.remove();
                }, 2000);
            }
        }

        // Controlls - selects
        const slcRegion = document.getElementById("region");
        const box = document.getElementById("box")
        const slcProvincias = document.getElementById("provincias");
        const costa = ["- Seleccionar -", "Esmeraldas", "Santo Domingo de los Tsáchilas", "Manabí", "Los Ríos", "Guayas", "Santa Elena", "El Oro"];
        const sierra = ["- Seleccionar -", "Carchi", "Tungurahua", "Chimborazo", "Cañar", "Azuay", "Loja", "Imbabura", "Bolívar", "Cotopaxi"];
        const oriente = ["- Seleccionar -", "Sucumbíos", "Orellana", "Napo", "Pastaza", "Morona", "Santiago", "Zamora"];
        costa.sort();
        sierra.sort();
        oriente.sort();

        slcRegion.addEventListener("click", function (e) {
            if (e.target.value !== "") {
                if (e.target.value === "costa") {
                    addOptions(costa);
                }
                if (e.target.value === "sierra") {
                    addOptions(sierra);
                }

                if (e.target.value === "oriente") {
                    addOptions(oriente);
                }
            } else {
                box.style.visibility = "hidden"
            }
        });
        function addOptions(array) {
            box.style.visibility = "visible";
            for (i in slcProvincias) {
                const option = document.createElement("option")
                slcProvincias.remove(option);
            }
            for (i in array) {
                const option = document.createElement("option")
                option.textContent = array[i];
                option.value = array[i];
                slcProvincias.appendChild(option);
            }
        }

        // SUBMIT
        const form = document.getElementById("form");
        const status = document.getElementsByClassName("status");
        const gender = document.getElementsByName("gender");
        const suscription = document.getElementsByName("suscription");
        const time = document.getElementsByName("time")
        const txtEmail = document.getElementById("email");

        form.addEventListener("submit", function (e) {
            let flag = true;
            // Inputs
            if (txtName.value === "" || txtLastName.value === "" || txtAge.value === "") {
                flag = false;
                status[0].textContent = "*Haz olvidado llenar algun campo"
                status[0].style.visibility = "visible"
                setTimeout(() => {
                    status[0].style.visibility = "hidden"
                }, 2000);

            }

            if (txtAge.value <= 17 && txtAge.value !== "") {
                flag = false;
                status[0].style.visibility = "visible"
                status[0].textContent = "* Debes ser mayor de edad"
                setTimeout(() => {
                    status[0].style.visibility = "hidden"
                }, 2000);
            }
            // Gender
            if (!gender[0].checked && !gender[1].checked) {
                flag = false;
                status[1].style.visibility = "visible"
                setTimeout(() => {
                    status[1].style.visibility = "hidden"
                }, 2000);
            }
            // Region - pronvice
            if (slcRegion.value === "") {
                flag = false;
                status[2].style.visibility = "visible"
                setTimeout(() => {
                    status[2].style.visibility = "hidden"
                }, 2000);
            }

            if (slcProvincias.value === "- Seleccionar -") {
                flag = false;
                status[3].style.visibility = "visible"
                setTimeout(() => {
                    status[3].style.visibility = "hidden"
                }, 2000);
            }

            // interest
            let chcSuscription = 0;
            for (i in suscription) {
                if (suscription[i].checked) {
                    chcSuscription++;
                }
            }

            if (chcSuscription < 1) {
                flag = false;
                status[4].style.visibility = "visible"
                setTimeout(() => {
                    status[4].style.visibility = "hidden"
                }, 2000);
            }

            if (!time[0].checked && !time[1].checked && !time[2].checked && !time[3].checked) {
                flag = false;
                status[5].style.visibility = "visible"
                setTimeout(() => {
                    status[5].style.visibility = "hidden"
                }, 2000);
            }

            if (txtEmail.value === "") {
                flag = false;
                status[6].style.visibility = "visible"
                status[6].textContent = "*Este campo esta vacío"
                setTimeout(() => {
                    status[6].style.visibility = "hidden"
                }, 2000);
            }

            if (txtEmail.value !== "") {
                if (email.test(txtEmail.value)) {
                    console.log("bien");
                } else {
                    flag = false;
                    status[6].style.visibility = "visible"
                    status[6].textContent = "*El correo esta mal escrito"
                    setTimeout(() => {
                        status[6].style.visibility = "hidden"
                    }, 2000);
                }
            }

            if (!flag) {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>