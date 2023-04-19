<?php
// autor Ramos Mesias Mauro Fabrizio
    require_once HEADER;
    $img = "publicaciones"; // cambia la imagen con una clase de css linea 136
    $titulo ="MyCake.exe, Pastelería venta de tortas y bocaditos";
    $descripcion="El sabor dulce y inigualable, la mejor calidad";
    require_once HERO;
?>;

    <main class="container">
        <section class="shadown">
            <h2>Lo que no te lo puedes perder !</h2>
            <div class="articles">
                <article class="article">
                    <div class="next">
                        <span class="direction">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="40" height="40" viewBox="0 0 24 24" stroke-width="3"
                                stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="15 6 9 12 15 18" />
                            </svg>
                        </span>
                    </div>
                    <picture class="article__img">
                        <img class="assets/img" src="assets/img/torta-chocolate.jpg" alt="Torta de chocolate" />
                    </picture>
                    <div class="article__info padre">
                        <h3 class="day__title">Por el día del padre</h3>
                        <p class="article__text">Los mejores sabores, para para celebrar el día del padre y disfrutar juntos en familia un día especial.</p>
                        <a class="button" href="productos.html#temporada">Ver los productos por el día del padre</a>
                    </div>
                    <div class="next">
                        <span class="direction">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="40" height="40" viewBox="0 0 24 24" stroke-width="3"
                                stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="9 6 15 12 9 18" />
                            </svg>
                        </span>
                    </div>
                </article>
                <article class="article">
                    <div class="article__img">
                        <img class="post__img" src="assets/img/torta-vainilla.jpg" alt="Torta de vainilla" />
                    </div>
                    <div class="discount article__info">
                        <h3 title="descuento" class="discount__tittle">En descuento %</h3>
                        <p class="article__text">
                            Encuentra los diferentes <span>productos disponibles</span> en descuento que te ofrecemos <span>solo por tiempo ilimitado</span>,
                            recuerda que <span>estos productos también cuentan con cupones para ganar diferentes premios que se sortean cada fin de semana.</span>
                        </p>
                        <p class="message">
                            <em>Los bocaditos y tortas de <span style="color: red; text-decoration: line-through;"> $ 10 </span> </em>
                            <span><b>, ahora a tan solo <mark><span id="price"> $ 5.<sup>99</sup></span></mark> .</b>
                            </span>
                            <br />Válido hasta el 25 de Agosto
                            <time datetime="2022-04-29T19:00">19:00</time>
                        </p>
                        <a class="button" href="productos.html">ver productos en descuento</a>
                    </div>
                </article>
                <article class="article">
                    <div class="article__img">
                        <img class="post__img" src="assets/img/bocadillos.jpg" alt="Bocadillos" />
                    </div>
                    <div class="article__info snacks">
                        <h3 class="snacks__title">Bocaditos</h3>
                        <p class="article__text snacks_p">
                            Gran variedad de bocaditos para para degustar en grandes bocados, descubre la magia que algunos guardan en su
                            interior rellenos de sabores explosivos e inigualables que harán que se derrita el paladar.
                        </p>
                        <a class="button" href="productos.html#bocaditos-ref">ver los bocadillos</a>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <section>
        <p style="margin: 0;"> <small style="margin: 0;"><i style="color:#515151; margin: 0;">¿Deseas tener acceso a revistas, noticias, próximos eventos o descuentos?</i></small>
        </p>
        <a class="button" style="display: block; margin: 5px auto 20px auto; width: 550px; text-align: center;" href="index.php?c=index&f=index&p=empezar">Si, comenzar ya</a>
    </section>

    <?php require_once FOOTER; ?>
    <script>
        let arrow = document.querySelectorAll(".direction");
        let articleImage = document.querySelector(".img");
        let articleImgageAlternativeText = document.querySelector(".img");
        let articleTitle = document.querySelector(".day__title");
        let articleText = document.querySelector(".article__text");
        let articleButton = document.querySelector(".button");
        let i = 0;
        const article = [
            {
                src: "assets/img/torta-chocolate.jpg",
                alt: "Torta de chocolate",
                day__title: "Por el día del padre",
                article__text: `Los mejores sabores, para para celebrar el día del padre y disfrutar juntos en familia en un día especial, los cuales
                        serán inolvidables, no te los puedes perder.`,
                button: "Ver los productos por el día del padre",
            },
            {
                src: "assets/img/yellow-cake.jpg",
                alt: "Torta de naranajilla",
                day__title: "Por este fin de semana",
                article__text: `Es momento de descansar y no pensar en lo malo de la semana, con estas nuevas tortas disfrutaras más en plenitud
                        el estar junto a tu familia y amigos. `,
                button: "Ver los productos por fin de semana",
            },
            {
                src: "assets/img/white-cake.jpg",
                alt: "Torta de coco",
                day__title: "Por temporada",
                article__text: `Es momento de aprovechar, estas nuevas tortas están esperando por ti son por la temporada de fiestas de la ciudad!.
                        No te quedes sin las gana de probar nuestros nuevos sabores.`,
                button: "Ver los productos en temporada",
            },
            {
                src: "assets/img/red-velvet-cake.jpg",
                alt: "",
                day__title: "Próximos...",
                article__text: `Sorprende a tu persona favorita con estos dulce sabores, ideal para compartir los grandes momentos con pequeños detalles y
                        para descubrir los nuevos sabores.`,
                button: "Ver los próximos productos por temporada",
            },
        ];
        articleImage.src = article[i].src;
        articleImgageAlternativeText.alt = article[i].alt;
        articleTitle.textContent = article[i].day__title;
        articleText.textContent = article[i].article__text;
        articleButton.textContent = article[i].button;

        arrow[0].addEventListener("click", function () {
            preview("left");
        });
        arrow[1].addEventListener("click", function () {
            preview();
        });

        function preview(u = "right") {
            if (u === "left") {
                if (i == 0) {
                    i = article.length - 1;
                } else {
                    --i;
                }
                articleImage.src = article[i].src;
                articleImgageAlternativeText.alt = article[i].alt;
                articleTitle.textContent = article[i].day__title;
                articleText.textContent = article[i].article__text;
                articleButton.textContent = article[i].button;

                return;
            } else if (u === "right") {
                if (i >= article.length - 1) {
                    i = 0;
                } else {
                    i++;
                }
                articleImage.src = article[i].src;
                articleImgageAlternativeText.alt = article[i].alt;
                articleTitle.textContent = article[i].day__title;
                articleText.textContent = article[i].article__text;
                articleButton.textContent = article[i].button;
            }
        }

        let postImg = document.querySelectorAll(".post__img");

        postImg[0].addEventListener("mouseover", change);

        function change() {
            const date = Date.now();
            let currentDate = null;
            if (i == cakes.length - 1) {
                i = 0;
            } else {
                postImg[0].src = "assets/img/${cakes[i++].src}";
                }
                console.log(i);
                do {
                    currentDate = Date.now();
                } while (currentDate - date < 1000);
                change();
            }

        let discount = document.querySelector(".discount");

        function change() {
            postImg[0].src = "assets/img/red-cake.jpg";
            postImg[0].alt = "red-cake";
        }

        postImg[0].addEventListener("mouseout", function () {
            postImg[0].src = "assets/img/torta-vainilla.jpg";
            postImg[0].alt = "Torta de vainilla";
        });

        postImg[1].addEventListener("mouseover", function () {
            postImg[1].src = "assets/img/muffins.jpg";
            postImg[1].src = "assets/img/muffins.jpg";
            postImg[1].src = "assets/img/muffins.jpg";
            postImg[1].src = "assets/img/muffins.jpg";

            postImg[1].src = "assets/img/muffins.jpg";
            postImg[1].alt = "muffins";
        });
        postImg[1].addEventListener("mouseout", function () {
            postImg[1].src = "assets/img/bocadillos.jpg";
            postImg[1].alt = "bocadillos";
        });
    </script>
</body>

</html>