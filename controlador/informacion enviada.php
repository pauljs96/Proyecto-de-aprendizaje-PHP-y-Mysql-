<?php


require_once ("../modelo/objeto_creado.php");
require_once ("../modelo/manipulacion_modelo.php");




try {

$conexion=new PDO("mysql:host=LOCALHOST; dbname=PROYECTOPAUL", "root","");

$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 

if(isset($_FILES["imagen"]["name"])){


   $destino_ruta= "imagenes/";
   
   move_uploaded_file($_FILES["imagen"]["tmp_name"],$destino_ruta .$_FILES["imagen"]["name"]);
   
   
   }


$manejador =new manipular_objeto($conexion);
$objeto=new objectos_coninfo();


$objeto->settitulo(htmlentities(addslashes( $_POST["campo_titulo"]),ENT_QUOTES ));
$objeto->setfecha(Date ("Y-m-d H:i:s"));
$objeto->setcomentario(htmlentities(addslashes( $_POST["parrafo"]),ENT_QUOTES ));
$objeto->setimagen($_FILES["imagen"]["name"]);


$manejador->setcontenido($objeto);


}catch (Exception $e){

   echo "Error: " . $e->getMessage();

    

}









?>