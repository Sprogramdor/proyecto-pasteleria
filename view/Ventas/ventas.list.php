<!--autor: Acosta Jesus-->

<?php require_once HEADER; 

// session_start();
        if (!isset($_SESSION['usuario']) ) {
            header("Location:index.php?c=index&f=index"); //redirijir
       }
        $rol = (isset($_SESSION['rol'])) ? htmlentities($_SESSION['rol']) : '';
        if($rol !=2){
            
            header("Location:index.php?c=index&f=index"); //redirijir
        }   

        $gc= $_SESSION['idc'];
  
?>

        <main class="container">

<h2> Ventas de Productos </h2>

<div class="container" id="inicio">
    
<?php 
$color;
$v="hidden";
$font;
$m="";
$bandera=false;
if(!empty($_SESSION['mensaje'])){
    $color="white";
    $font;
    if( strpos($_SESSION['mensaje'],"Se agrego al carrito")!==false){
        $m=$_SESSION['mensaje'];
        $font="white";
        $color="#6CA206";
    }else{
        $m=$_SESSION['mensaje'];
        $color="#FA6545";
        $font="white";
    }?>
<?php sleep(2);
$bandera=true;
if($bandera){
    $v="visible";
}
$_SESSION['mensaje']="";
echo $_SESSION['mensaje'];
}?>    

<div  id="dm" style =" background-color:<?php echo $color; ?> ; margin-left: 120px; width:400px; height=800px; visibility=<?php echo $v;?> ">
            <label style="color:<?php echo $font;?> " > &nbsp;&nbsp;<?php echo $m; ?> </label>
             <div style=" display: inline-block; margin-left:50px; color:white; cursor:pointer;" id="x">cerrar</div>
</div>
    


<div style= "margin-left: 1000px; margin-botton: 350px;"> 
        <form action="index.php?c=Ventas&f=viewShop" method="post">
            <input type="hidden" name="idcarrito" value="<?php echo $gc?>" >
            <button type="submit" class="button" href="=" id="bs">Ver Carrito</button>
        </form>
<br><br><br>
</div> 

<div class="shadownF GripVentas">
    <table Style="grid-column: 3/5; grid-row:2" id="tp">
        <thead>        
            <th>Codigo</th>
            <th>Nombre </th>
            <th>Stock</th>
            <th>Precio</th>
            <th>Descripcion </th>
            <th>Añadir</th>
        </thead>
        <tbody id="Tbody">


        <?php       
                foreach ($resultados as $fila) {?>
                <tr>
                    <td><?php echo $fila['cod_producto'];?></td>
                    <td><?php echo $fila['prod_nombre'];?></td>
                    <td><?php echo $fila['stock'];?></td>
                    <td><?php echo number_format($fila['prod_precio'],2);?></td>
                    <td><?php echo $fila['prod_descripcion'];?></td>              
                <td class="action">
                        
                        
                       <form  action="index.php?c=Ventas&f=add" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto']?>">
                            <input type="hidden" name="nombre" value="<?php echo $fila['prod_nombre']?>">
                            <input type="hidden" name="idcliente" value="<?php echo $gc?>">
                            <button  class="button is-primary" type="submit">
                                <i class="fa fa-cart-plus"></i>
                            </button>
                            
                        </form>

                </td>
            </tr>
            <?php
        }?>

        </tbody>
    </table>

   
   


                </div>
</main>


<script type="text/javascript">

var cerrar = document.querySelector("#x");
var dm = document.querySelector("#dm");
var tp= document.querySelector("#tp");
var selectid = document.querySelector("#listac");
cerrar.addEventListener('click',close);


function close(event){
    event.preventDefault();
    dm.style.visibility = "hidden";
}



</script>

<?php  require_once FOOTER ?>