<?php 
// require_once 'vendor/autoload.php';

// use Dnetix\Redirection\PlacetoPay;


class ControladorRecaudo
{
	
	static public function RecaudoSuscripcion(){
		if (isset($_POST["tipmon"])) {
			
 require_once ( "vendor/dnetix/redirection/examples/bootstrap.php");

// Creating a random reference for the test
$reference = 'TEST_' . time();

// Request Information
$request = [
    'payer' => [
        'name' => $_POST["nombre"],
        'surname' => $_POST["apellido"],
        'email' => $_POST["correo"],
        'document' => $_POST["documento"],
        'documentType' => $_POST["tipodoc"],
        'mobile' => '3006108300'
    ],
    'payment' => [
        'reference' => $reference,
        'description' => 'Testing payment',
        'amount' => [
            'currency' => $_POST["tipmon"],
            'total' => $_POST["total"],
        ],
    ],
    'instrument' => [
        'token' => [
            'token' => $_POST["token"]
        ]
    ]
];

try {
    $response = placetopay()->collect($request);

    if ($response->isSuccessful()) {

        $requestId = $response->requestId();

        if ($response->status()->isApproved()) {

            // var_dump($response->payment[0]);
            $referenciainterna = $response->payment[0]->internalReference();
            $estado = $response->payment[0]->status()->message();
            $total = $response->payment[0]->amount()->from()->total();


            echo "<div class='container'>
					<div class='card m-t-25 '>
						<h1 class='card-titile m-t-20 m-l-15'>RESPUESTA DEL RECAUDO</h1>
				  		<div class='card-body'>
				          <h5>TRANSACCION : ".$requestId ." APROBADA </h5>
				          <br>
				          <h5>POR VALOR DE : ".$total."</h5>
				          <br>
				          <h5>REFERENCIA PARA REVERSO : ".$referenciainterna."</h5>
				          <br>
				          <h5>FECHA : ".date("Y-m-d H:i:s")."</h5>
				  		</div>
				  	</div>
				</div>";
        }else{
            if ($response->status()->isRejected()) {
                // This is why it has been rejected
                print_r($response);
            } else{
                // Is pending so make a query for it later (see information.php example)
                print_r($requestId . " PAYMENT PENDING\n");
            }
        }
    } else {
        // There was some error so check the message
        print_r($response->status()->message() . "\n");
    }
} catch (Exception $e) {
    var_dump($e->getMessage());
}
		}


































  }

	}
