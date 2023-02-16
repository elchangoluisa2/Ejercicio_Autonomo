<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
			
			<div style="display:grid; place-items:center;height:100vh">
			<div class="card border-warning mb-3" style="width:400px; heigth:500px;">
			<form name="figuras" method="POST" action="" >
			<div class="card-header bg-warning">
					<h4>INGRESO DATOS DE LA FIGURA</h4>
			</div>
			<div class="card-body">
			<table border=0 align="center">
				<tr>
					<td>Tipo </td>
					<td>
					<div class="form-group">
						<select  class="form-select " name="tipo" Id="fig" OnChange="deshabilitar()">
							<option value="0">Seleccione...</option>
							<option value="1">Cuadrado</option>
							<option value="2">Rectángulo</option>
							<option value="3">Triángulo</option>
						</select>
					</div>
					</td>
				</tr>
				<tr>
					<td>Altura</td>
					<td><input type="text" class="form-control" name="Altura" id="Altura" size="4"></td>
				</tr>
				<tr>
					<td>Base</td>
					<td><input type="text" class="form-control" name="Base" id ="Base" size="4"></td>
				</tr>
				<tr>
					<td>Lado</td>
					<td><input type="text" class="form-control" name="Lado" id="Lado" size="4"></td>
				</tr>							
				<tr>
					<th colspan="2"><input type="submit" class="btn btn-primary" name="calcular" value="Calcular" disabled></th>
				</tr>
			</table>
			</div>
			</form>
			</div>
			</div>
			<script>
			function deshabilitar() {
				var fig = document.getElementById("fig").value;
				var alto = document.getElementById("Alto");
				var base = document.getElementById("Base");
				var lado = document.getElementById("Lado");
				if(fig==0){
					alto.disabled = true;
					base.disabled = true;
					lado.disabled = true;
				}else{
					if(fig==1){
						alto.disabled = false;
						base.disabled = true;
						lado.disabled = true;
					}
					if(fig==2){
						alto.disabled = false;
						base.disabled = false;
						lado.disabled = true;
					}
					if(fig==3){
						alto.disabled = false;
						base.disabled = false;
						lado.disabled = false;
					}
				}
				
			}
			</script>
			';
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
