<?php 

require_once ("objeto_creado.php");



class manipular_objeto{



    private $conexion;


    public function __construct($conexion){

 
        $this->setconexion($conexion);

    }


    public function setconexion(PDO $conexion){

        $this->conexion=$conexion;

    }


    
    public function getcontenidoporfecha(){

        $matriz=array();

        $contador=0;

        $resultado=$this->conexion->query("SELECT * FROM CONTENIDO ORDER BY FECHA");

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){



            $blog=new objectos_coninfo();

            $blog->setid($registro["ID"]);
            $blog->settitulo($registro["TITULO"]);
            $blog->setfecha($registro["FECHA"]);
            $blog->setcomentario($registro["COMENTARIO"]);
            $blog->setimagen($registro["IMAGEN"]);


            $matriz[$contador]=$blog;
            $contador=$contador+1;

            

        }



        return $matriz;



    }
        

    public function setcontenido(objectos_coninfo $blog){

        $sql="INSERT INTO CONTENIDO (TITULO,FECHA,COMENTARIO,IMAGEN) VALUES ('".$blog->gettitulo() ."','" .$blog->getfecha(). "','" .$blog->getcomentario() . "','" . $blog->getimagen() . "') ";

 

        $this->conexion->exec($sql);


    }
    





}









?>