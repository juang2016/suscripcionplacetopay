
<form method="post">
<div class="container">
	<div class="card m-t-25 ">
		<h1 class="card-titile m-t-20 m-l-15"> SUSCRIPCION ANTIVIRUS AVAST </h1>
  		<div class="card-body">
          <h1>A continuacion encontrarás los 4 Tipos de suscripcion anuales a los cuales pueses suscribirte segun tu necesidad.</h1>

          <div class="row">
           <div class="col-md-6">
           	  <div class="card m-t-25 ">
				<h5 class="card-titile m-t-20 m-l-15"> SUSCRIPCION ANTIVIRUS AVAST  PREMIUM</h5>
		  		<div class="card-body">
		          <div class="row">
		          	<div class="col-md-6">
		          		<div class="card">
		          			<div class="card-body">
		          			  <h5>Hasta 5 Equipos a la vez</h5> 
		          			  <img src="Vistas/img/pc.png" height="50" width="50">
		          			</div>
		          			
		          		</div>
		          		
		          	</div>
		          	<div class="col-md-6">
		          		<div class="card">
		          			<div class="card-body">
		          			   <h5>Protegete mientras Navegas</h5> 
		          			  <img src="Vistas/img/navegador.jpg" height="50" width="50">
		          			</div>
		          		</div>
		          	</div>
		          </div>
                  <h5 class="m-t-5">Por solo $30,000</h5>
                  <input type="hidden" name="valor1" value="30000">
                </div>
		  		<br>
		  		<div class="card-footer">
		  			<h5>seleccionar esta oferta</h5>
		          <input type="radio" name="valor" value="30000">				
		      </div>
		       
		     
			</div>
           </div>
           <div class="col-md-6">
           	  <div class="card m-t-25 ">
				<h5 class="card-titile m-t-20 m-l-15"> SUSCRIPCION ANTIVIRUS AVAST  GOLD </h5>
		  		<div class="card-body">
		          <div class="row">
		          	<div class="col-md-4">
		          		<div class="card">
		          			<div class="card-body">
		          			  <h5>Hasta 10 Equipos a la vez</h5> 
		          			  <img src="Vistas/img/pc.png" height="50" width="50">
		          			</div>
		          			
		          		</div>
		          		
		          	</div>
		          	<div class="col-md-4">
		          		<div class="card">
		          			<div class="card-body">
		          			   <h5>Protegete mientras Navegas</h5> 
		          			  <img src="Vistas/img/navegador.jpg" height="50" width="50">
		          			</div>
		          		</div>
		          	</div>
		          	<div class="col-md-4">
		          		<div class="card">
		          			<div class="card-body">
		          			   <h5>Protege transacciones</h5> 
		          			  <img src="Vistas/img/trans.png" height="50" width="50">
		          			</div>
		          		</div>
		          	</div>
		          </div>
                  
		  		</div>
		  		<h5 class="m-t-5 m-l-15">Por solo $50,000</h5>
			</div>
			<div class="card-footer">
				<h5>seleccionar esta oferta</h5>
		          <input type="radio" name="valor" value="50000">				
		      </div>
           </div>
         </div>

         <div class="row">
         	<div class="col-md-6">
         		<div class="form-group">
	          <label for="nombre">Nombre</label>
	          <input type="text" class="form-control col-md-12" name="nombre" required>
          </div>
          <div class="form-group">
	          <label for="apellido">Apellido</label>
	          <input type="text" class="form-control col-md-12" name="apellido" required>
          </div>
          <div class="form-group">
	          <label for="correo">Correo</label>
	          <input type="text" class="form-control col-md-12" name="correo" required>
          </div>
         	</div>
         	<div class="col-md-6">
         		<div class="form-group">
	          <label for="tipodoc">Apellido</label>
	          <select class="form-control col-md-12" name="tipodoc" required>
	          	<option value="CC"> Cedula de ciudadania</option>
	          	<option value="PST">Pasaporte</option>
	          </select>
          </div>
          <div class="form-group">
	          <label for="documento">N. Documento</label>
	          <input type="text" class="form-control col-md-12" name="documento" required>
          </div>
         	</div>
         </div>
         
  		</div>
	</div>
	<div class="card-footer">
		 <button type="submit" class="btn btn-success">Suscribirme</button>				
	</div>
</div>
<?php 
$respuesta = new ControladorCompra();
$respuesta->RealizaSuscripcion();

 ?>
</form>