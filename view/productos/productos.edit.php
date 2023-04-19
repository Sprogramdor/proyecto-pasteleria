<!--autor: Acosta Jesus-->
<?php require_once HEADER; ?>

<?php
        if (!isset($_SESSION['usuario']) ) {
            header("Location:index.php?c=index&f=index"); //redirijir
       }
        $rol = (isset($_SESSION['rol'])) ? htmlentities($_SESSION['rol']) : '';
        if($rol !=1){
            header("Location:index.php?c=index&f=index"); //redirijir
        }
?>


<div class="container">
    <div class="shadown">

<form action="index.php?c=Productos&f=edit"    onsubmit="return validaciones();" method="POST" name="formProdNuevo" id="formProdNuevo">
                <fieldset class="fieldset">
                    <!-- ID del producto  -->

                <input type="hidden" name="id" id="id" value="<?php echo $prod['id_producto']; ?>"/>

                    <legend>Registrar un Nuevo Producto</legend>
                    <div>
                        <label class="label" for="nomprod">Nombre</label>
                        <input class="input" id="nomprod" name="nomprod" type="text"  value="<?php echo $prod['prod_nombre']; ?>" placeholder="Nombre del producto">
                        <label id="error1"></label>

                        <div style ="margin-left: 50px; display: inline-block;">
                        <label class="label" for="codiprod">Codigo</label>
                        <input class="input" id="codiprod" name="codiprod" type="text" value="<?php echo $prod['cod_producto']; ?>" placeholder="Codigo del producto">
                        <label id="error2"></label>

                    </div>
                    
                    <div style ="margin-left: 50px; display: inline-block;">
                        <label class="label" for="tipoprod">Tipo de Producto</label>
                        <select class="select" name="tipoprod" id="tipoprod">

                        <?php foreach ($tipos as $t) {
                            $selected='';
                            if($t->id_Tipo_producto == $prod['Tipo']){
                                  $selected='selected="selected"';
                            }
                       ?>
                            <option value="<?php echo $t->id_Tipo_producto ?>" <?php echo $selected; ?>>
                            <?php echo $t->tipo; ?>
                            </option>
                        <?php
                        }
                        ?>   

                    </select>
                    <label id="error3"></label>

                        </div>    
                        <br><br>
                        <label class="label" for="fechaprod">Fecha de Creacion del Producto</label>
                        <input type="date" id="fechaprod" name="fechaprod" value="<?php echo $prod['prod_fechaCreacion']; ?>">
                        <label id="error4"></label>

                    <div style ="margin-left: 50px; display: inline-block;">
                        <label class="label" for="preprod">Precio</label>
                        <input class="input" id="preprod" name="preprod" type="text" value="<?php echo $prod['prod_precio']; ?>"   placeholder="Precio del producto">
                        <label id="error5"></label>
                    </div>

                    <div style ="margin-left: 50px; display: inline-block;">
                        <label class="label" for="stock">Stock</label>
                        <input class="input" id="stock" name="stock" type="number"min="1" max="50" step="1" value="<?php echo $prod['stock']; ?>">
                        <label id="error6"></label>

                    </div>
                    
                    <div>
                    <br><br>
                        <label class="label" for="descprod" syle="display: inline-block;" >Descripcion</label>
                        <br><br>
                        <textarea class="textarea" name="descprod" id="detallepro" cols="30" rows="10"  > <?php echo $prod['prod_descripcion']; ?></textarea>
                        <label id="error7"></label>

                    </div>
                
                </div>
                    <button class="button border-none" type="submit">Guardar Cambios</button>
                    <a class="button" href="index.php?c=Productos&f=index">Cancelar</a>
                </fieldset>
            </form>
    </div>
</div>


<?php  require_once FOOTER ?>


<script>
       // var bandera = false;
        var txtnom = document.getElementById("nomprod");
        var txtcod = document.getElementById("codiprod");
        var tipo = document.getElementById("tipoprod");
        var fecha = document.getElementById("fechaprod");
        var precio = document.getElementsByName("preprod");
        var stock= document.getElementById("stock");
        var txtdes = document.getElementById("descprod");
        var form =document.getElementById("formProdNuevo");     
        
        var error1 = document.getElementById("error1");
        var error2 = document.getElementById("error2");
        var error3 = document.getElementById("error3");
        var error4 = document.getElementById("error4");
        var error5 = document.getElementById("error5");
        var error6 = document.getElementById("error6");
        var error7 = document.getElementById("error7");

    

        function validaciones() {
       
if( txtnom.value == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    error1.textContent="Campo Obligatorio";
  return false;
}

if( txtcod.value == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    error2.textContent="Campo Obligatorio";
  return false;
}

if( tipo.selectedIndex == null || tipo.selectedIndex == 0 ) {
    error3.textContent="Seleccione un tipo";
  return false;
}

      var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
      if ((fecha.match(RegExPattern)) && (fecha!='')) {
            return true;
      } else {
            return false;
            error4.textContent="Elegir fecha";
      }



if( txtdes.value == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    error7.textContent="Campo Obligatorio";
  return false;
}
       



if( isNaN(precio.value) ) {
    error5.textContent="Campo Obligatorio";
   return false;

}
        
if( isNaN(stock.value) ) {
    error6.textContent="Campo Obligatorio";
    return false;

}


}


    </script>
