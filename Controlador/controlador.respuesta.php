<?php

 require_once ( "vendor/dnetix/redirection/examples/bootstrap.php");



class ControladorRespuesta
{
	
	static public function ctrValidaEstadoPago($requestId){

		if ($requestId != '') {
			
	
       try {
			    $response = placetopay()->query($requestId);
			   // var_dump($response);

			    if ($response->isSuccessful()) {



			    	$token = $response->subscription()->instrument[0]->value();
			    	$estado = $response->status()->status();

                     $respuesta = new ModeloCompra();
                     $respuesta->EditarSuscripcion($estado,$token,$requestId);
			    	


			    	return $resultado = array('sesion' => $requestId,
			    	                          'estado' => $response->status()->message());

			        // if ($response->status()->isApproved()) {
			        //     // El pago ha sido aprobado.
			        //      $resultado = $requestId . " PAYMENT APPROVED";
			        //       return $resultado;
			        //     //Esta es información adicional al respecto.
			        //      print_r($response->toArray());

			        // } else {
			        //      $resultado = ($requestId . ' ' . $response->status()->message() );

			        //      return $resultado;
			        // }

			    } else {
			        // Hubo algún error con la conexión así que revisa el mensaje.
			        print_r($response->status()->message() . "\n");

			        return $response->status()->message();

			    }
			} catch (Exception $e) {
			    var_dump($e->getMessage());
			}
			 //session_destroy(); 

		}

	} 

}