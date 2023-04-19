<!--autor: Acosta Jesus-->

<?php require_once HEADER; 

?>
<main class="containerF">

<h2> Produtos del Carrito  </h2>

<div class="containerF" id="inicio">
           



<div class="shadownF GripShop">
    <table Style="grid-column: 3/5; grid-row:3" id="tp">
        <thead>     
              
            <th>Nombre </th>
            <th>Precio</th>
        </thead>
        <tbody id="Tbody">


        <?php       $total = 0;
                foreach ($productosC as $fila) {
                   $total+=$fila['prod_precio']; 
                    ?>
                
                <tr>
                    
                    <td><?php echo $fila['prod_nombre'];?></td>
                    <td><?php echo number_format($fila['prod_precio'],2);?></td>              
                </tr>
            <?php
        }?>

        </tbody>

        <tfoot>
                    <tr>
                        <td colspan="1" class="is-size-2 has-text-right"><strong>Total</strong></td>
                        <td colspan="1" class="is-size-2">
                            $<?php echo number_format($total, 2) ?>
                        </td>
                    </tr>
        </tfoot>
    </table>

    
      <!--Carga Clientes por AJAX -->
    <div Style="grid-column: 3/5; grid-row:2" >
    <label> Datos del Cliente </label><br><br>
<label> <?php echo "Cliente : $clienteS->cliente_nombre     $clienteS->cliente_apellido";?> </label> <br>
<label> <?php echo "Cedula : $clienteS->cedula ";?> </label>  
<hr>
    </div>

   
    <div style="grid-column: 5; grid-row:2"> 
<a class="button" href="index.php?c=Ventas&f=indexP" id="bn">Aceptar</a>
<br><br><br>
</div> 

                </div>
</main>



<?php  require_once FOOTER ?>