<div class="container">
	<div class="card m-t-25 ">
		<h1 class="card-titile m-t-20 m-l-15"> SUSCRIPCION ANTIVIRUS AVAST </h1>
  		<div class="card-body">
<table class="table">
	<thead>
	<tr>
		<th>Referencia</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Correo</th>
		<th>Valor suscripcion</th>
		<th>Acciones</th>
	</tr>
	</thead>
	<tbody>
		<?php 
            $columna= null;
            $valor= null;
           $buscar = ControladorCompra::BuscarSuscripcion($columna,$valor);


           foreach ($buscar as $key => $value) {
           echo '<tr>
			<td>'. $value["RequestId"].'</td>
			<td>'. $value["Nombre"].'</td>
			<td>'. $value["Apellido"].'</td>
			<td>'. $value["Email"].'</td>
			<td>'. $value["Valor"].'</td>
			<td>
				<a href="index.php?ruta=confirmarecaudo&id='.$value["RequestId"].'" class="btn btn-primary">Recaudar</a>
			</td>
		</tr>';
           }
		 ?>
	</tbody>
	
</table>
</div>
</div>
</div>