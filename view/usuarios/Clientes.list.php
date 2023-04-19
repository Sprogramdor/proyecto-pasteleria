<!--autor: Acosta Jesus-->
<?php require_once HEADER; ?>

<?php
         // session_start();
        if (!isset($_SESSION['usuario']) ) {
            header("Location:index.php?c=index&f=index"); //redirijir
       }
        $rol = (isset($_SESSION['rol'])) ? htmlentities($_SESSION['rol']) : '';
        if($rol !=1){
            
            header("Location:index.php?c=index&f=index"); //redirijir
        }   
?>







<main class="container">


<h2> Clientes  </h2>


<div class="container"   >
 




<div class="shadown">
    <table>
        <thead>        
            <th>Rol</th>
            <th>Nombre </th>
            <th>Password</th>
            <th>Correo</th>
           
        </thead>
        <tbody id="Tbody">


        <?php         
                foreach ($resultados as $fila) {
                  ?>
                <tr>
                    <td><?php echo $fila->rol;?></td>
                    <td><?php echo $fila->cliente_nombre." ".$fila->cliente_apellido?></td>
                    <td><?php echo $fila->password ?></td>
                    <td><?php echo $fila->cliente_correo?></td>
            
                
              
                
            <?php  
            }?>

        </tbody>
    </table>
   
</div>

</main>





<?php  require_once FOOTER ?>

