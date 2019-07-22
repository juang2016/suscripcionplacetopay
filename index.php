<?php
 /*=============================================
      =            CONTROLADOR            =
  =============================================*/
 
 require_once("Controlador/controlador.plantilla.php");
 require_once("Controlador/controlador.compra.php");
  require_once("Controlador/controlador.respuesta.php");
  require_once("Controlador/controlador.recaudo.php");

/*=============================================
      =            MODELO           =
  =============================================*/

  // require_once ("Modelo/Modelo.usuarios.php");
  require_once ("Modelos/conexion.php");
  require_once ("Modelos/Modelo.compra.php");
  // require_once ("Modelo/Modelo.productos.php");
  require('vendor/autoload.php');



  $dotenv = Dotenv\Dotenv::create(__DIR__);
  $dotenv->load();
  


 $platilla = new ControladorPlantilla();
 $platilla ->crtPlantilla();
