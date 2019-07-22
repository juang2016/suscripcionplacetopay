<?php 
// require_once 'vendor/autoload.php';

// use Dnetix\Redirection\PlacetoPay;

class ControladorCompra 
{
	
	static public function RealizaSuscripcion(){
		if (isset($_POST["valor"])) {

			 echo $_POST["valor"];

			//en este archivo se encuentra los datos para la autenticacion;

          require_once ( "vendor/dnetix/redirection/examples/bootstrap.php");

           $reference =time();
          $request = [					
          				"subscription"=> [
				        "reference"=> $reference,
				        "description"=> "Una suscripción de prueba"
				    ],
				    "expiration"=> date('c', strtotime('+1 hour')),
				    "returnUrl"=> "http://localhost/Suscripcion/index.php?ruta=respuesta",
				    "ipAddress"=> '127.0.0.1',
				    "userAgent"=> "PlacetoPay Sandbox"
					];


          try {

					    $placetopay = placetopay();
					    $response = $placetopay->request($request);

					    // var_dump ($response);

					    if ($response->isSuccessful()) {

					        // Se redirecciona el cliente ala pagina
                              $_SESSION["requestId"] =$response->requestId;

                              $datos = array('requestid' =>$response->requestId ,
                                             'valor' =>$_POST["valor"],
                                             'token' =>0,
                                             'estado' =>0,
                                             'documento' =>$_POST["documento"],
                                             'tipo' =>$_POST["tipodoc"],
                                             'nombre' =>$_POST["nombre"],
                                             'apellido' =>$_POST["apellido"],
                                             'email' =>$_POST["correo"]);

                              $respuesta = new ModeloCompra();
                              $respuesta->GuardarSuscripcion($datos);

					        echo '<script>
                                 window.location = "'.$response->processUrl().'";

					        </script>';
                            

					    } else {
					        // si hay algun error
					          
					         echo '<div class="alert alert-danger" role="alert" style ="font-size:16pt; margin-top:7px;">
				                 <strong>Error !</strong> '.$response->status()->message().'
				                </div>'	;
					    }
					
					} catch (Exception $e) {
					    var_dump($e->getMessage());
					}

		}

	}

	static public function BuscarSuscripcion($columna,$valor){
      
      $respuesta = ModeloCompra::BuscarSuscripcion($columna,$valor);
      return $respuesta;

	}
}