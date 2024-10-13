<?php  
// error_reporting(0);
$varsession =  $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
  header("Location: ../Admin.php");
  die();
}
?>
<table class="table table-primary table-hover table-bordered text-center align-middle table-striped overflow-scroll my-1 border border-dark ">
	<thead>
		<tr>
			<th>Id</th>
			<th>Producto</th>
			<th>Imagen</th>
			<th>Precio (MXN)</th>
      <th colspan="2">Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php  
		include("Conexion.php");
		$query = "SELECT * FROM productos";
		$resultadoOne = $con->query($query);
    
    if(!$resultadoOne){

      header("Location: Error.php");

    } else {

      $count = 1; //dato necesario para pasar datos en modales

      $rs = mysqli_query($con,"SELECT MAX(id) AS id FROM productos");
      if ($rowLastId = mysqli_fetch_row($rs)) {
        $lastId = trim($rowLastId[0]);
      }

      $query = "SELECT * FROM productos WHERE id=".$lastId;
      $result = $con->query($query);

      while ($lastRow = $result->fetch_assoc()){;
      ?>
      <tr class="text-success fw-bold">
        <td><?php echo $lastRow['id'];?></td>
        <td><?php echo $lastRow['producto'];?></td>
        <td><img height="70px" src="../<?php echo $lastRow['imagen'];?>" alt=""></td>
        <td><?php echo $lastRow['precio'];?></td>
        <td>
          <form action="Modificar.php" method="POST">
            <input type="number" value="<?php echo $lastRow['id'];?>" name="id" hidden>
            <input type="submit" value="Modificar" class="btn btn-secondary">
          </form>
        </td>
        <td>
          <form action="Eliminar.php" method="post" name="formulario<?php echo $count;?>">
            <input type="number" value="<?php echo $lastRow['id'];?>" name="id" hidden>
             <button type="button" class="btn btn-danger" id="<?php echo $count;?>" data-bs-toggle="" data-bs-target="#staticBackdrop" onclick="crearModal(this.id)">
              Eliminar
            </button>
          </form>
        </td>
      </tr>
      <?php
      }
      $count+=1;

      $query = "SELECT * FROM productos";
      $resultado = $con->query($query);

  		while($row = $resultado->fetch_assoc()){
        if($row['id'] == $lastId){continue;}
  		?>
  		<tr class="bg-primary">
  			<td><?php echo $row['id'];?></td>
  			<td><?php echo $row['producto'];?></td>
  			<td><img height="70px" src="../<?php echo $row['imagen'];?>" alt=""></td>
        <td><?php echo $row['precio'];?></td>
  			<td>
          <form action="Modificar.php" method="post">
            <input type="number" value="<?php echo $row['id'];?>" name="id" hidden>
            <input type="submit" value="Modificar" class="btn btn-secondary">
          </form>
        </td>
  			<td>
          <form action="Eliminar.php" method="post" name="formulario<?php echo $count;?>">
            <input type="number" value="<?php echo $row['id'];?>" name="id" hidden>
             <button type="button" class="btn btn-danger" id="<?php echo $count;?>" data-bs-toggle="modal" data-bs-target="#modalEliminarProducto" onclick="crearModal(this.id);">
              Eliminar
            </button>
          </form>
        </td>
  		</tr>
  		<?php 
        $count += 1;
    		}
      }
		?>
  </tbody>
</table>