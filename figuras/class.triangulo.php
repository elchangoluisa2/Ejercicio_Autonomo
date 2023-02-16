<?php
class triangulo extends figura implements formulas{
	private $base;
    private $altura;
    private $lado;

    function __construct($base,$altura,$lado){
        $this->base = $base;
        $this->altura = $altura;
        $this->lado = $lado;
    }
    
    public function obtener_base(){
        return $this->$base;
    }
    public function obtener_altura(){
        return $this->$altura;
    }
    public function obtener_lado(){
        return $this->$lado;
    }
    
    public function area(){
        $area = ($base*$altura)/2;
    }
    public function perimetro(){
        $perim = (2*$lado)+$base;
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

