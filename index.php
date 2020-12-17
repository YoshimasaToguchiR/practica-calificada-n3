<?php 
session_start();
$_SESSION['detalle'] = array();

require_once 'conexion.php';
require_once 'Producto.php';

$objProducto = new Producto();
$resultado_producto = $objProducto->get();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carrito</title>


<link href="wwwroot/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="wwwroot/css/site.css">
<link rel="stylesheet" href="estilocompras.css">
 <script src="wwwroot/js/jquery.js"></script>
    <script src="wwwroot/js/jquery-1.8.3.min.js"></script>
    <script src="wwwroot/js/bootstrap.min.js"></script>
   	
    <script type="text/javascript" src="wwwroot/ajax.js"></script>
    <link rel="shortcut icon" href="wwwroot/img/carro.png">
	

    <link rel="stylesheet" href="wwwroot/js/alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="wwwroot/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="wwwroot/js/alertify/lib/alertify.min.js"></script>

  </head>

  <body>
	  <header>
		  <center><h1>Busco<h1>
	  </header>
		  
 	<div class="container">
 		
 		<div class="page-header">
			<center><h1><font color="black" size="10" face="Arial">Proceso De Compras</font></h1></center>
		</div>
		<center>
 		<div class="row">


			<div class="col-md-4">	
				<div><font color="black" size="6" face="Arial">Producto:</font>
				<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
					<option value="0">Seleccione un producto</option>
					<?php foreach($resultado_producto as $producto):?>
						<option value="<?php echo $producto['id']?>"><?php echo $producto['descripcion']?></option>
					<?php endforeach;?>
				</select>
				</div>
			</div>




			<div class="col-md-4">
				<div><font color="black" size="6" face="Arial">Cantidad:</font>
				  <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Ingrese cantidad" autocomplete="off" />
				</div>
			</div>




			<div class="col-md-1">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary btn-agregar-producto">AGREGAR</button>
				</div>
			</div>
			<div class="col-md-1">
				<a href="index.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-danger ">REFRESH</button>
				</div>
			    </a>
			</div>
			<div class="col-md-1">
				<a href="detalle.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary ">DETALLES</button>
				</div>
			    </a>
			</div>



		</div>
		</center>
		<br>
		<center>
		<div class="panel panel-info">
			 <div class="panel-heading">
		        <h3 class="panel-title"><font size="6" face="Algerian" >Productos</font></h3>
		      </div>
			<div class="panel-body detalle-producto">
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
					    	foreach($_SESSION['detalle'] as $k => $detalle){ 
					    	?>
					        <tr>
					        	<td><?php echo $detalle['producto'];?></td>
					            <td><?php echo $detalle['cantidad'];?></td>
					            <td><?php echo $detalle['precio'];?></td>
					            <td><?php echo $detalle['subtotal'];?></td>
					            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>
					        </tr>
					        <?php }?>
					    </tbody>
					</table>
				<?php }else{?>
				<div class="panel-body"><font size="3" face="Algerian" > No hay productos agregados </font></div>
				<?php }?>
			</div>
		</div>
	</center>
 	</div>
 	<center>
 	<div class="col-md-12">
				<a href="detalle2.php">
				<div style="margin-top: 20px;">
				<button type="button" class="btn btn-success "><font size="8" face="Arial">COMPRAR</font></button>
				</div>
			    </a>
			</div>
	</center>
	<center>
	<a href="index.html">
				<div style="margin-top: 20px;">
				<button type="button" class="btn btn-success "><font size="8" face="Arial">Volver</font></button>
				</div>
			    </a>
			</div>

	<br>
	<div class="">
		
		<footer>
			<br><p>
			<br><br>
			<p><center>Busco Copyright © 2020<p>
		</footer>
	</div>
  </body>
</html>
