<?php
// autor Ramos Mesias Mauro Fabrizio
require_once HEADER;
         // session_start();
        if (!isset($_SESSION['usuario']) ) {
            header("Location:index.php?c=index&f=index"); //redirijir
       }
        $rol = (isset($_SESSION['rol'])) ? htmlentities($_SESSION['rol']) : '';
        if($rol !=1){
            
            header("Location:index.php?c=index&f=index"); //redirijir
        }   
?>

<h2>Agregar una publicación:</h2>

<main class="container">
    <div class="shadown">
       
    <form action="index.php?c=publicaciones&f=new" method="POST">
        <div>

                     <div style ="margin-left: 10px; display: inline-block;">
                        <label class="label" for="titulo"> Titulo de Publicación </label> <br>
                        <input class="input" id="titulo" name="titulo" type="text"  value=""
">
                    </div>

                    <div style ="margin-left: 50px; display: inline-block;">
                        <label class="label" for="nump">Número de Publicación </label> <br>
                        <input class="input" type="number" name="nump" id="nump" min="1" max="240" step="1" value=""> 
                    </div>
                    
        
                        <br><br>

                    <div style ="margin-left: 10px; display: inline-block;">
                        <label class="label" for="fecha">Fecha de Publicación</label>
                        <br>
                        <input type="date" id="fecha" name="fecha" value="">
                    </div>

                    <div style ="margin-left: 50px; display: inline-block;">
                        <label class="label" for="cate">Categoria de Publicación</label>
                        <select id="cate" name="cate" class="select">
                       
                       <?php foreach ($cate as $c) {
                            ?>
                            <option value="<?php echo $c->id_categ_publicacion ?>">
                            <?php echo $c->categ_nombre; ?>
                            </option>

                        <?php
                        }
                        ?>   

                    </select>


                    </div>   
                   
                    <div style ="margin-left: 544px;margin-bottom: 14px;display: inline-block;">
                        <label class="label" for="cont" syle="display: inline-block;" >Contenido de publicación</label>
                        <br><br>
                        <textarea class="textarea" name="cont" id="cont" cols="45" rows="10"></textarea>
                    </div>
                
                </div>
 
                <div style ="margin-left: 590px; margin-top: 10px;margin-bottom: 14px; display: inline-block;">
                <input class="button" type=submit>
                    <a class="button" href="index.php?c=publicaciones&f=index">Cancelar</a>
                </div>    
        </form>









    </div>
</main>

<?php  require_once FOOTER ?>