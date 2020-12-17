<!DOCTYPE html>

<html>
<head>
	<title>Carrito</title>

	<link href="wwwroot/css/bootstrap.css" rel="stylesheet">
 <script src="wwwroot/js/jquery.js"></script>
    <script src="wwwroot/js/jquery-1.8.3.min.js"></script>
    <script src="wwwroot/js/bootstrap.min.js"></script>
   	
    <script type="text/javascript" src="wwwroot/ajax.js"></script>
    <link rel="shortcut icon" href="carro.png">
	<link rel="stylesheet" href="wwwroot/css/site.css">

    <link rel="stylesheet" href="wwwroot/js/alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="wwwroot/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="wwwroot/js/alertify/lib/alertify.min.js"></script>

    <link rel="stylesheet" type="text/css" href="wwwroot/css/estilocompra.css">

</head>
<body>
<header>
	<h1>Busco<h1>
</header>

</body>
</html>
<center>
<?php 
@session_start();
?>
<?php if(count($_SESSION['detalle'])>0){?>
	<table class="table">
	    <thead>
	        <tr>
	            <th>Descripci&oacute;n</th>
	            <th>Cantidad</th>
	            <th>Precio</th>
				<th>Subtotal</th>
	            <th></th>
	        </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    	$total = 0;
	    	foreach($_SESSION['detalle'] as $k => $detalle){ 
			$total += $detalle['subtotal'];
	    	?>
	        <tr>
	        	<td><?php echo $detalle['producto'];?></td>
	            <td><?php echo $detalle['cantidad'];?></td>
	            <td><?php echo $detalle['precio'];?></td>
				<td><?php echo $detalle['subtotal'];?></td>
	            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>

	            <td><a href="index.php"><button type="button" class="btn btn-primary "><font size="" color="" face="">Volver</font></button></a></td>


	        </tr>
	        <?php }?>
	        <tr>
	        	<td colspan="3" class="text-right">Total</td>
	        	<td><?php echo $total;?></td>
	        	<td></td>
	        </tr>
	    </tbody>
	</table>
	
		<div class="form">
			<form action="conexioncompra.php" method="POST">
<center>
<br>
<br>
<div class="contenedor">
<input type="text" name="descripción" placeholder="Nombre" required>
<br>
<input type="text" name="cantidad" placeholder="Numero de Tarjeta" required>
<br>
<input type="text" name="precio" placeholder="Fecha de Vencimiento" required>
<br>
<input type="text" name="subtotal" placeholder="CCV" required>
</div>
<br>
<br>
<input type="submit" value="Comprar">


</center>
			</form>
		</div>


<?php }else{?>
	<br>
	<br>
	<center>
<div class="panel-body"><font size="4" color="" face="Algerian"> No hay productos agregados</font></div>
<br>
<a href="index.php">
			<button type="button" class="btn btn-primary"><font size="5" color="" face="">Regresar</font></button>
</a>
    </center>			
<?php }?>

<script type="text/javascript" src="libs/ajax.js"></script>