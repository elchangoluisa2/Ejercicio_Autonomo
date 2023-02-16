<?php
class cuadrado extends figura implements formulas {
	private $lado;

    function __construct($lado){
        $this-> lado = $lado; 
    }
    public function obtener_lado(){
        return $this->lado;
    }
    public function area(){
        $area = ($lado)^2;
    }
    public function perimetro(){
        $perim = 4*$lado;
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
