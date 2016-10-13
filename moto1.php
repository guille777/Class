<?php
class Moto
{
  public $ruedas=3;
  public $color='negro';
  public $tipo ='scooter';
  public $espejos=2;



//getters
  public function getruedas(){
    return $this->ruedas;
  }
  public function getcolor(){
    return $this->color;
  }
  public function gettipo(){
    return $this->tipo;
  }
  public function getespejos(){
    return $this->espejos;
  }

//setters
  public function setruedas($rue){
    $this->ruedas=$rue;
  }
  public function setcolor($col){
    $this->color=$col;
  }
  public function settipo($tpo){
    $this->tipo=$tpo;
  }
  public function setespejos($esp){
    $this->espejos=$esp;
  }
}


$moto1= new Moto;
sdfsd
$colorMoto1 = $moto1->getcolor();
echo $colorMoto1;

 ?>


