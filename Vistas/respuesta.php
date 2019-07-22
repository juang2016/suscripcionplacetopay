<?php 
$requestId = $_SESSION["requestId"];
$respuesta = ControladorRespuesta::ctrValidaEstadoPago($requestId);
 ?>

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-body">
                     <?php  
                      
                     ?>
                       <h1>Transaccion : <?php echo $respuesta["sesion"] ?></h1>

                    <div class="alert alert-info" role="alert" style ="font-size:19pt; margin-top:22px;">
                         <strong>Informacion de la suscripción!</strong> <?php echo $respuesta["estado"] ?>
                     </div>

                     <a href="compra" class="btn btn-primary">Volver</a>
                  </div>
            </div>
        </div>
    </div>
</div>

