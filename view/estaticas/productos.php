<!--autor: Acosta Jesus-->
<?php 
require_once HEADER; 

 if(!isset($_SESSION)){ session_start();};
if($rol==""){ 
   $er="index.php?c=index&f=index&p=login&l=f"; 
}
else{
    if($rol==3){
            $er="index.php?c=index&f=index&p=pedidosproductos";
        }
}?>
    <main id="inicio">


    <input type="hidden" id="idcliente" value="<?php echo $id ?>">
        <section class="parallax " style="background-color: rgba(0, 0, 0, 0.887);">

            <div class="divGrip fondoimge ">
                <!-- Div Grande   -->

                <!-- Div con Elementos  -->
                <div id="divBanner1" class="div1">

                    <div class="elemento" style="height: 220px;">
                        <h1 style="color: white; margin-top:12px ; margin-bottom:12px ;">No puedes comprar la felicidad, pero sí nuestras tortas.</h1>
                        <p style="color: white">Las mejores tortas y bocaditos en un solo lugar </p>
                    </div>

                    <div class="elemento" style="height: 50px; margin: auto;">
                        <a class="boton" href="#s2"> Descubre más </a>
                    </div>
                </div>

                <!-- Div con promocion  -->
                <div id="divBanner2" class="div2">

                    <div class="elemento" style="height: 220px;">
                        <h1 style="color: white;margin-top:12px ;">Sabor, color, arte, alegría, amor…</h1>
                        <p style="color: white">Lo que busques de una torta para tí lo hornearemos </p>
                    </div>

                    <div class="elemento" style="height: 50px; margin: auto;">
                        <a id="BotonpedidoS" href="<?php echo $er;?>">Pedido especial</a>
                    </div>
                </div>

            </div>

            <br><br>
            <br><br>
        </section>
        <section id="s2" style="align-content: center;">

            <h2>Nuestros Productos </h2>


            <hr style="width: 45%;">

            <div style="display:flex; justify-content:center;  width: 60% ;height:280px; margin: auto ; ">

                <a href="#pasteles">
                    <div class="card">
                        <img src="assets/img/icoCake2.png" alt="icono_cake" />
                        <h3 class="font1" style="color: rgb(0, 0, 0);font-style: italic ; font-size:  21px; padding: 2px;">Pasteles</h3>
                    </div>
                </a>

                <a href="#bocaditos">
                    <div class="card">
                        <img src="assets/img/icobocadito.png" alt="icono_bocadito" />
                        <h3 class="font1" style="color: rgb(0, 0, 0);font-style: italic ; font-size:  21px; padding: 2px;">Bocaditos</h3>
                    </div>
                </a>

                <a href="#bebidas">
                    <div class="card">
                        <img src="assets/img/icoBebida.png" alt="icono_bebida" />
                        <h3 class="font1" style="color: rgb(0, 0, 0);font-style: italic ; font-size:  21px; padding: 2px;">Bebidas</h3>
                    </div>
                </a>

            </div>
            <br><br><br><br><br>

        </section>

        <!-- Banner Pasteles -->
        <section id="pasteles">
            <div class="containerflex" style=" width: 100%; height: 55vh;">
                <div id="TortaGrip" style="background-color: rgb(175, 96, 0); height:55vh ;width:660px;">
                    <h1 style="grid-column: 4/6; grid-row: 1; color: rgb(255, 255, 255);  margin-top: 40px;margin-bottom: 18px;">Un pastel para cada ocacion</h1>
                    <p class="pnormal" style="margin-bottom: 10px; grid-column: 2/4; grid-row: 2; color:rgb(255, 255, 255) ;word-wrap: break-word;">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Pellentesque est velit,
                        accumsan fermentum mollis eu, cursus quis ligula </p>
                </div>
            </div>

        </section>

        <!-- Productos Pasteles -->
        <section id="temporada" style="background-color :rgb(255, 255, 255);">
            <h2>Pasteles pequeños, medianos o grandes. </h2>

            <div class="shadown" style="width: 90%; height:160vh ; margin: auto;display: flex; flex-wrap:wrap; padding-top: 50px; padding-left: 50px;">
        <?php       
                foreach ($resultados as $fila) {
                    if($fila['Tipo']==1){ // Solo productos Tipo Tortas 
                    ?>
                <div class="Producto">
                        <div class="divCard">
                            <img class="imgcard" src="assets/img/<?php echo $fila['img'];?>" alt="icono_cake" />
                            <h3 class="txtcard"><?php echo $fila['prod_nombre'];?></h3>
                            <h3 class="txtprecio"><?php echo number_format($fila['prod_precio'],2);?></h3>
                            
                            <form  class="ubi" action="index.php?c=Ventas&f=addEstatic" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto']?>">
                            <input type="hidden" name="nombre" value="<?php echo $fila['prod_nombre']?>">
                            <input type="hidden"  name="id" value="<?php echo $id?>">     
                            <button  class="button is-primary" type="submit">Comprar</button>
                           </form>
                        
                        </div>
                    </div>
    
                
            <?php
             }
        }?> 
          
            </div>
            <br><br><br><br><br>
        </section>


       
            <a style="display:block  width: 100%; height:100%;" href="index.php?c=Ventas&f=viewShopP&id=<?php echo $id?>" > <div class="shopbutton" >       </div> </a>
  
        <!-- Banner bocaditos -->
        <section id="bocaditos">

            <div class="containerflex" style=" width: 100%; height: 55vh;">
                <div id="bocaditoGrip" style="background-color: rgb(250, 210, 171); height:55vh ;width:660px;margin-left:auto; padding-top: 30px;">
                    <h1 style="grid-column: 2/4; grid-row: 1/3; color: rgb(0, 0, 0); margin-top: 60px; margin-bottom: 10px;">Hay de dulce y de sal</h1>
                    <p class="pnormal" style="grid-column: 4/6; grid-row: 2/3;  color:rgb(0, 0, 0) ;word-wrap: break-word;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Pellentesque est velit,
                        accumsan fermentum mollis eu, cursus quis ligulaconsectetur adipiscing elit. Pellentesque est velit, accumsan fermentum mollis eu, cursus quis ligula
                    </p>
                </div>
            </div>

        </section>

        <!-- Productos bocaditos  -->
        <section id="bocaditos-ref" style="background-color :rgb(255, 255, 255);">
            <h2>Bocaditos Por unidad o por Mayor </h2>
            <div class="shadown" style="width: 90%; height:160vh ; margin: auto;display: flex; flex-wrap:wrap; padding-top: 50px; padding-left: 50px;">
        <?php       
                foreach ($resultados as $fila) {
                    if($fila['Tipo']==2){ // Solo productos Tipo Bocaditos 
                    ?>
               
                <div class="Producto">
                        <div class="divCard">
                            <img class="imgcard" src="assets/img/<?php echo $fila['img'];?>" alt="icono_cake1" />
                            <h3 class="txtcard"><?php echo $fila['prod_nombre'];?></h3>
                            <h3 class="txtprecio"><?php echo number_format($fila['prod_precio'],2);?></h3>
                            <form  class="ubi" action="index.php?c=Ventas&f=addEstatic" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto']?>">
                            <input type="hidden" name="nombre" value="<?php echo $fila['prod_nombre']?>">
                            <input type="hidden"  name="id" value="<?php echo $id?>">     
                            <button  class="button is-primary" type="submit">Comprar</button>
                           </form>
                        </div>
                    </div>
    
                
            <?php
             }
        }?>        
            </div>
            <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br>
        </section>


        <section id="pedidos">
            <div class="containerflex" style=" width: 100%; height: 55vh;">
                <div id="pedidoGrip" style="background-color: rgb(2, 2, 3); height:55vh ;width:560px;">
                    <h1 style="grid-column: 2/6; grid-row: 1; color: rgb(255, 255, 255);  margin-top: 40px;margin-bottom: 18px;">No encuentras lo que buscas?</h1>
                    <p class="pnormal" style="margin-bottom: 10px; grid-column: 2/6; grid-row: 3; color:rgb(255, 255, 255) ;word-wrap: break-word;">Sabor, color, arte, alegría,
                        amor… <br>Lo que busques de una torta para tí lo hornearemos</p>




                    <div id="secElement2" style="grid-column: 3; grid-row: 5;">
                        <a id="BotonpedidoS2" href="<?php echo $er;?>">Haz tu pedido Ya!</a>
                    </div>
                </div>
            </div>
        </section>

        <div style="width: 100%; height: 30vh; background-color:white  "></div>

        <section id="bebidas">
            <br><br><br><br><br>
            <div class="containerflex" style=" width: 100%; height: 55vh;">
                <div id="bebidaGrip" style="background-color: rgb(244, 186, 98); height:55vh ;width:680px;margin-left:auto;">

                    <h1 style="grid-column: 4/6; grid-row: 1/2;   color: rgb(0, 0, 0);  margin-top: 60px;margin-bottom: 18px;">Bebidas</h1>
                    <p class="pnormal" style="grid-column: 3/6; grid-row: 2/4; color:rgb(0, 0, 0) ;word-wrap: break-word; padding: 10px;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Pellentesque est velit,
                        accumsan fermentum mollis eu, cursus quis ligulaconsectetur adipiscing elit. Pellentesque est velit, accumsan fermentum mollis eu, cursus quis ligula
                    </p>

                </div>
            </div>
        </section>

        <section id="b" style="background-color :rgb(255, 255, 255);">
            <h2>Bebidas Calientes y frias </h2>
            <div class="shadown" style="width: 90%; height:160vh ; margin: auto;display: flex; flex-wrap:wrap; padding-top: 50px; padding-left: 50px;">
        <?php       
                foreach ($resultados as $fila) {
                    if($fila['Tipo']==3){ // Solo productos Tipo Bebidas 
                    ?>
               
                <div class="Producto">
                        <div class="divCard">
                            <img class="imgcard" src="assets/img/<?php echo $fila['img'];?>" alt="icono_cake1" />
                            <h3 class="txtcard"><?php echo $fila['prod_nombre'];?></h3>
                            <h3 class="txtprecio"><?php echo number_format($fila['prod_precio'],2);?></h3>
                            <form  class="ubi" action="index.php?c=Ventas&f=addEstatic" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto']?>">
                            <input type="hidden" name="nombre" value="<?php echo $fila['prod_nombre']?>">
                            <input type="hidden"  name="id" value="<?php echo $id?>">     
                            <button  class="button is-primary" type="submit">Comprar</button>
                           </form>
                        </div>
                    </div>
    
                
            <?php
             }
        }?>        
        </div>
            <br><br><br><br><br>
        </section>

    </main>

   

    <script>
        var c1 = document.getElementById("divBanner1");
        var c2 = document.getElementById("divBanner2");
        var sec1 = document.querySelector(".parallax")


        setInterval(() => {
            c1.style.visibility = "hidden";
            c2.style.visibility = "visible";
            sec1.style.backgroundImage = "url(assets/img/banner2.png)";
        }, 4000);

        setInterval(() => {
            c2.style.visibility = "hidden";
            c1.style.visibility = "visible";
            sec1.style.backgroundImage = "url(assets/img/cake11.jpg)";
        }, 6000);

        var idcliente=document.getElementById("idclientes");
        var carrito = document.getElementById("shopbutton");
        var span = document.createElement("span");
        var div = document.createElement("div");
        var inicio = document.getElementById("inicio");
        div.style.height = "500px";
        div.style.width = "900px";
        div.style.backgroundColor = "black";
        div.style.position = "fixed";
        span.className = "contador";
        var c = 0;

        document.addEventListener("click", function (e) {
            if (e.target.className == "botonComprar") {
                console.log("boton press");
                c = c + 1;
                if (c <= 10) {
                    span.textContent = c;
                }
                carrito.appendChild(span);

            }
        });







    </script>


<?php require_once FOOTER; ?>
</body>

</html>