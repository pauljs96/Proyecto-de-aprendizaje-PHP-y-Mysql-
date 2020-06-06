<?php


class objectos_coninfo {


private $id;

private $titulo;

private $fecha;

private $comentario;
       
private $imagen;



public function getid(){

    return $this->id;
}

public function setid($id){

$this->id=$id;


}


public function gettitulo(){

    return $this->titulo;
}

public function settitulo($titulo){

$this->titulo=$titulo;


}
public function getcomentario(){

    return $this->comentario;
}

public function setcomentario($comentario){

$this->comentario=$comentario;


}
public function getfecha(){

    return $this->fecha;
}

public function setfecha($fecha){

$this->fecha=$fecha;


}
public function getimagen(){

    return $this->imagen;
}

public function setimagen($imagen){

$this->imagen=$imagen;


}


}





?>