<form method="post">
<div class="container">
	<div class="card m-t-25 ">
		<h1 class="card-titile m-t-20 m-l-15">RECAUDO SUSCRIPCION </h1>
  		<div class="card-body">
  			<?php 

            
            $columna= "RequestId";
            $valor= $_GET["id"];
           $buscar = ControladorCompra::BuscarSuscripcion($columna,$valor);
  			 ?>
<label>Transaccion: <strong><?php echo $_GET["id"]; ?></strong></label>
<br>
<label>Nombre : <strong><?php echo $buscar["Nombre"].$buscar["Apellido"] ?></strong></label>
<br>
<label>Valor de la suscripcion <strong><?php echo $buscar["Valor"] ?></strong></label>

<input type="hidden" name="sesion" value="<?php echo $_GET["id"]?>">
<input type="hidden" name="token" value="<?php echo $buscar["Token"] ?>">
<input type="hidden" name="documento" value="<?php echo $buscar["Documento"] ?>">
<input type="hidden" name="tipodoc" value="<?php echo $buscar["TipoDocumento"] ?>">
<input type="hidden" name="nombre" value="<?php echo $buscar["Nombre"] ?>">
<input type="hidden" name="apellido" value="<?php echo $buscar["Apellido"] ?>">
<input type="hidden" name="correo" value="<?php echo $buscar["Email"] ?>">
<input type="hidden" name="total" value="<?php echo $buscar["Valor"] ?>">

<div class="form-group">
  <label for="tipodoc">Tipo moneda</label>
  <select class="form-control col-md-12" name="tipmon" required>
  	<option>selecciona</option>
  	<option value="COP"> Pesos colombianos</option>
  	<option value="US">Dolares</option>
  </select>
</div>

</div>
<div class="card-footer">
		 <button type="submit" class="btn btn-success">Continuar</button>				
	</div>
</div>
</div>
<?php 
				 $respuesta = new ControladorRecaudo();
				$respuesta->RecaudoSuscripcion();
				 ?>


</form>