<?php namespace App\Controllers;

class CalculadoraControler extends BaseController
{

	public function index(){
		$data = [
			"resultado" => "" 
		];
		
		$vistas = view('Plantillas/header').
		View('Calculadora', $data).
		view('Plantillas/footer');
		return $vistas;
	}

	public function operaciones(){

		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];

		if ($_POST['opciones']=="suma") {
			$resultado = $num1 + $num2;

			$data =[
				"resultado" => "<h3>El resultado es: ".$resultado."</h3>"
			];

			$vistas = view('Plantillas/header').
			View('Calculadora',$data).
			view('Plantillas/footer');

			return $vistas;
		}elseif ($_POST['opciones']=="resta") {
			$resultado = $num1 - $num2;

			$data =[
				"resultado" => "<h3>El resultado es: ".$resultado."</h3>"
			];

			$vistas = view('Plantillas/header').
			View('Calculadora',$data).
			view('Plantillas/footer');
			return $vistas;
		}elseif ($_POST['opciones']=="multi") {
			$resultado = $num1 * $num2;

			$data =[
				"resultado" => "<h3>El resultado es: ".$resultado."</h3>"
			];

			$vistas = view('Plantillas/header').
			View('Calculadora',$data).
			view('Plantillas/footer');
			return $vistas;
		}elseif($_POST['opciones']=="div"){
			$resultado = $num1 / $num2;

			$data =[
				"resultado" => "<h3>El resultado es: ".$resultado."</h3>"
			];

			$vistas = view('Plantillas/header').
			View('Calculadora',$data).
			view('Plantillas/footer');
			return $vistas;
		}
	}


	//--------------------------------------------------------------------

}
