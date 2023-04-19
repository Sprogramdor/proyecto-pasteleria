<!--autor: Acosta Jesus-->
<?php require_once HEADER; 
// session_start();
        if (!isset($_SESSION['usuario']) ) {
            header("Location:index.php?c=index&f=index"); //redirijir
       }
        $rol = (isset($_SESSION['rol'])) ? htmlentities($_SESSION['rol']) : '';
        if($rol !=1){
            
            header("Location:index.php?c=index&f=index"); //redirijir
        }   
?>

<div class="container"  >
    <div class="shadown">

<form   action="index.php?c=Productos&f=new" onsubmit="return validar()" method="POST" name="formProdNuevo" id="formProdNuevo">
                

<fieldset class="fieldset">

<legend>Registrar un Nuevo Producto</legend>
<div >
                        <label class="label" for="nomprod">Nombre</label>
                        <input class="input" id="nomprod" name="nomprod" type="text" placeholder="Nombre del producto">
                        <label id="error1"></label>
                    
                        <div style ="margin-left: 50px; display: inline-block;">
                        <label class="label" for="codiprod">Codigo</label>
                        <input class="input" id="codiprod" name="codiprod" type="text" placeholder="Codigo del producto">
                        <label id="error2"></label>
                    </div>
                    
                    <div style ="margin-left: 50px; display: inline-block;">
                        <label class="label" for="tipoprod">Tipo de Producto</label>
                        <select id="tipoprod" name="tipoprod" class="select">
                       <?php foreach ($tipos as $tp) {
                            ?>
                            <option value="<?php echo $tp->id_Tipo_producto ?>">
                            <?php echo $tp->tipo; ?>
                            </option>

                        <?php
                        }
                        ?>   

                    </select>
                    <label id="error3"></label>
                        </div>    
                        <br><br>

                        <label class="label" for="fechaprod">Fecha de Creacion del Producto</label>
                        <input type="date" id="fechaprod" name="fechaprod">
                        <label id="error4" style="color:black"></label>

                    <div style ="margin-left: 50px; display: inline-block;">
                        <label class="label" for="preprod">Precio</label>
                        <input class="input" id="preprod" name="preprod" type="text" placeholder="Precio del producto">
                        <label id="error5"></label>
                    </div>

                    <div style ="margin-left: 50px; display: inline-block;">
                        <label class="label" for="stock">Stock</label>
                        <input class="input" id="stock" name="stock"type="number" min="0" max="50" step="1" value="0">
                        <label id="error6"></label>
                        
                    </div>
                    
                    <div>
                    <br><br>
                        <label class="label" for="descprod" syle="display: inline-block;" >Descripcion</label>
                        <br><br>
                        <textarea class="textarea" name="descprod" id="detallepro" cols="30" rows="10">Descripcion del producto</textarea>
                        <label id="error7"></label>
                    </div>
                
                </div>

                <div style="margin-left:400px">
                    <input class="button border-none" type="submit"  > 
                    <a class="button" href="index.php?c=Productos&f=index">Cancelar</a>
                </div>
                </fieldset>
                    
            </form>
    </div>
</div>




<script>
        var b1,b2,b3,b4,b5,b6,b7,bandera;
        var txtnom = document.getElementById("#nomprod");
        var txtcod = document.getElementById("#codiprod");
        var tipo = document.getElementById("#tipoprod");
        var fecha = document.getElementById("#fechaprod");
        var precio = document.getElementsByName("preprod");
        var stock= document.getElementById("#stock");
        var txtdes = document.getElementById("#descprod");
        
        var error1 = document.getElementById("#error1");
        var error2 = document.getElementById("#error2");
        var error3 = document.getElementById("#error3");
        var error4 = document.getElementById("#error4");
        var error5 = document.getElementById("#error5");
        var error6 = document.getElementById("#error6");
        var error7 = document.getElementById("#error7");

    

function validar() {
       
     var n= txtnom.value;

if(n === "" || n.length == 0  ) {
   b1=false;
   return false;
}else{
    console.log(b1);
    b1=true;
}

if( txtcod.value == null || txtcod.value.length == 0 || /^\s+$/.test(txtcod.value) ) {
  b2=false;
}else{
    b2=true;
}

if( tipo.selectedIndex == null || tipo.selectedIndex == 0 ) {
    error3.textContent="Seleccione un tipo";
    b3=false;
}else{
    b3=true;
}

      var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
      if ((fecha.match(RegExPattern)) && (fecha!='')) {
            b4= true;
      } else {
        b4=false;
      }



if( txtdes.value == null || txtdes.value.length == 0 || /^\s+$/.test(txtdes.value) ) {
    b7=false;
}else{
    b7=true;
}
        
var p=parseInt(precio.value);
if( isNaN(precio.value) ) {
    b5=false;
}else{
   if (p != 0 ){
    b5=true;}
}
   

        
if( isNaN(stock.value) ) {
    b6=false;
}else{
    b6=true;
}
    


if ( b1 && b2 && b3 && b4 && b5 && b6 && b7){
    bandera =true;
}else{
    bandera =false;
}

return bandera;

}





    </script>


<?php  require_once FOOTER ?>
