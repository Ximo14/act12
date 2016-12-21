<?php

class act11
{
private $minNumDado=0;
private $maxNumDado=12;
public $tirarDado=0;
private $tiradas=[];

//Propiedades
//Getter
public function getMinNumDado(){
  return $this->minNumDado;
}

public function getMaxNumDado(){
  return $this->maxNumDado;
}


//Setter

public function setMinNumDado($minNumDado)
{
  if ($minNumDado<0) {
    $this->$minNumDado=0;
  }
  else {
    $this->minNumDado=$minNumDado;
  }
}

public function setMaxNumDado($maxNumDado)
{
  if ($maxNumDado>12) {
    $this->maxNumDado=12;
  }
  else {
    $this->maxNumDado=$maxNumDado;
  }
}

//Tirar dado rand
public function tirarDado()
{
  $tirar=rand($this->minNumDado,$this->maxNumDado);
  $this->guardarTirada($tirar);

  return $tirar;

}
//Funcion guardarTirada
   private function guardarTirada($tirar)
  {
    $this->tiradas[]=$tirar;
  }

//Funcion imprimirTiradas
  public function imprimirTiradas()
  {
    print_r($this->tiradas);
  }

//calcularMediasTiradas
  public function calcularMediasTiradas()
  {
$media=array_sum($this->tiradas)/count($this->tiradas);
echo "<br><br>La media de las tiradas es: ".round($media);
  }
}
 ?>
