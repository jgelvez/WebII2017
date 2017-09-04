<?php

	require 'Form.php';
	
	class ActividadIIForm extends Form {
		
		//categorias del tag <select>
		public $nacionalidad;
		
		public function __construct() {
			$this->nacionalidad = [1 => "Argentino", 2 => "Chileno", 3 => "Boliviano", 4=> "Paraguayo", 5=> "Otro"];
		}
		
		protected function procesarCampos() {
			$this->procesarNombre('nombre');
			$this->procesarNacionalidad('nacionalidad');
			$this->procesarApellido('apellido');
			$this->procesarFecha('nacimiento');
		}
		
		protected function procesarNombre($campo) {
			$nombre = $this->getValor($campo);
			
			//valido parametro
			if(empty($nombre)) {
				$this->setError($campo, "Faltó ingresar el nombre");
				return;	//si hay error, no seguir validando
			}
			
			//otra validacion
			if(strlen($nombre) < 3) {
				$this->setError($campo, "El nombre es muy corto");
			}
			
			if (!ctype_alpha($nombre)) {
				$this->setError($campo, "El valor ingresado debe contener sólo letras");
			}
		
		}
		
		protected function procesarApellido($campo) {
			$apellido = $this->getValor($campo);
			
			//valido parametro
			if(empty($apellido)) {
				$this->setError($campo, "Faltó ingresar el apellido");
				return;	//si hay error, no seguir validando
			}
			
			//otra validacion
			if(strlen($apellido) < 3) {
				$this->setError($campo, "El apellido es muy corto");
			}
			
			if (!ctype_alpha($apellido)) {
				$this->setError($campo, "El valor ingresado debe contener sólo letras");
			}
		
		}
		
		protected function procesarFecha($campo){
			$nacimiento = $this->getValor($campo);
			
			//valido parametro
			if(empty($nacimiento)) {
				$this->setError($campo, "Faltó ingresar la fecha de nacimiento");
				return;	
			}
			
			$valores = explode('-', $nacimiento);
			
			if(checkdate($valores[1], $valores[0], $valores[2])){
				$this->setError($campo, "la fecha ingresada no posee el formato mm-dd-yyyy");
				return;
				}		
					
		}
		
		protected function procesarNacionalidad($campo) {
			$nacionalidad = $this->getValor($campo);
			
			//valido parametro
			if(empty($nacionalidad)) {
				$this->setError($campo, "Falta seleccionar nacionalidad");
			}
		}
	}
