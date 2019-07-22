<?php 

/**
 * 
 */
class ModeloCompra 
{
	
	static public function GuardarSuscripcion($datos){

      $stmt = Conexion::conectar()->prepare("INSERT INTO datossuscripcion(RequestId,Valor,Token,Estado,Documento,TipoDocumento,Nombre,Apellido,Email) VALUES (:requestid, :valor, :token, :estado, :ducumento, :tipodocumento, :nombre, :apellido, :email)");

		$stmt->bindParam(":requestid", $datos["requestid"], PDO::PARAM_INT);
		$stmt->bindParam(":valor", $datos["valor"], PDO::PARAM_INT);
		$stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":ducumento", $datos["documento"], PDO::PARAM_STR);
		$stmt->bindParam(":tipodocumento", $datos["tipo"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";	

		}else{

			return $stmt->errorInfo();
		
		}

		$stmt->close();
		
		$stmt = null;
	}
	static public function EditarSuscripcion($estado,$token,$requestid){

      $stmt = Conexion::conectar()->prepare("UPDATE datossuscripcion SET Token =:token,Estado =:estado WHERE RequestId =:requestid");

		$stmt->bindParam(":token", $token, PDO::PARAM_STR);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_STR);
		$stmt->bindParam(":requestid", $requestid, PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";	

		}else{

			return $stmt->errorInfo();
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	static public function BuscarSuscripcion($columna,$valor){

		if ($columna != null) {
			$stmt = Conexion::conectar()->prepare("SELECT * FROM datossuscripcion WHERE $columna=:valor");

            $stmt->bindParam(":valor", $valor, PDO::PARAM_STR);
			$stmt -> execute();

			return $stmt -> fetch();
		}else{
		   $stmt = Conexion::conectar()->prepare("SELECT * FROM datossuscripcion");

			$stmt -> execute();

			return $stmt -> fetchAll();

             	
		}

		$stmt->close();
			$stmt = null;
	}
}