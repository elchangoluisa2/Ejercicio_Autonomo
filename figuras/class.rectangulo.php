<?php
class rectangulo extends figura implements formulas{
	private $base;
    private $altura;

    function __construct($base,$altura){
        $this-> base = $base;
        $this-> altura = $altura;
    }
    public function obtener_base(){
        return $this->base;
    }
    public function obtener_altura(){
        return $this->altura;
    }
    public function area(){
        $area = $base*$altura;
    }
    public function perimetro(){
        $perim = 2*$base + 2*$altura;
    }

    //METODOS ABSTRACTOS
    public function GetArea(){

    }
    public function GetPerimetro(){

    }
    public function GetTipo(){
        
    }
}
?>
