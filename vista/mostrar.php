
<body>



<?php

include_once ("../modelo/manipulacion_modelo.php");


try{

$conexion=new PDO("mysql:host=LOCALHOST; dbname=PROYECTOPAUL", "root","");

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$manejador_mostrara=new manipular_objeto($conexion);


$arreglo_sobreescribematriz= $manejador_mostrara->getcontenidoporfecha();


if (empty($arreglo_sobreescribematriz)){

echo "No hay arreglo". "<br>";

}

else {

    foreach($arreglo_sobreescribematriz as $valor){

echo "<h3  style='background-color:skyblue' align='center'>" . $valor->gettitulo() . "</h3>"." ";
echo $valor->getfecha()." ";
echo "<div align='center' >" .$valor->getcomentario(). "</div>" . " <br>";
//echo $valor->getimagen() . "<br> ";
echo "<img src='../controlador/imagenes/". $valor->getimagen() . "'width='300px' height='200px''' >";

echo "<hr>";
    }



}

}catch (Exception $e){

echo "error:" .$e->getMessage();

}




?>


<br>


<a href="formulario.php"> Regresar al formulario</a>;


</body>