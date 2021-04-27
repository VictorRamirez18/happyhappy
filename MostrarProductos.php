<?php  
include("ConexionProducts.php");
$query = "SELECT * FROM productos";
$resultado = $con->query($query);

$precioTotal = 0;

if(!$resultado){
	echo "<h2 class='text-center text-danger'>No se logró cargar los productos</h2>";
} else {
	echo '<div class="row row-cols-1 row-cols-md-4 p-3 container mx-auto text-center" id="cont-products">';
	while($row = $resultado->fetch_assoc()){;?>
		<div class="col ">
		    <div class="card h-100 scale2 aniCardProducto">
		      <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>" class="card-img-top h-100" alt="<?php echo $row['producto'];?>">
		      <div class="card-body">
		        <h5 class="card-title"><?php echo $row['producto'];?></h5>
		        <p class="card-text">$<?php echo $row['precio'];?> MXN</p>
			  </div>
			</div>
	  </div>
	<?php  
		$precioTotal += $row['precio'];
		}
	?>
	</div>
<?php 
} 
?>