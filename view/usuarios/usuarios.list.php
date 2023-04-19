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


<h2> Administración de usuarios  </h2>


<div class="container"   >
 


<div style= "margin-left: 1000px; margin-botton: 350px"> 
<a class="button" href="index.php?c=Usuarios&f=indexc">Ver Clientes</a>
<br><br><br>
</div> 

<div class="shadown">
    <table>
        <thead>        
            <th>Rol</th>
            <th>Nombre </th>
            <th>Password</th>
            <th>Estado</th>
            <th>Correo</th>
            <th>Acciones</th>
        </thead>
        <tbody id="Tbody">


        <?php         
                foreach ($resultados as $fila) {
                  ?>
                <tr>
                    <td><?php echo $fila['rol'];?></td>
                    <td><?php echo $fila['usuario_nombre'];?></td>
                    <td><?php echo $fila['usuario_password'];?></td>
                    <td><?php echo $fila['usuario_estado'];?></td>
                    <td><?php echo $fila['usuario_correo'];?></td>
            
                
              
                <td class="action">

                        <a class="btn btn-primary" 
                        href="index.php?c=Usuarios&f=view_edit&id= <?php echo $fila['id_usuario'];?> "> <i class="fas fa-marker"></i></a>
                    <a class="btn btn-danger" 
                   onclick="if(!confirm('Esta seguro de eliminar el producto?'))return false;" 
                   href="index.php?c=Usuarioss&f=delete&id=<?php echo $fila['id_usuario'];?> ">
                    <i class="fas fa-trash-alt"></i></a>
                    </td>

            </tr>
            <?php  
            }?>

        </tbody>
    </table>
   
</div>

</main>





<?php  require_once FOOTER ?>

