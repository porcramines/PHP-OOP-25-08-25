/*DISEÑAR LA SIGUIENTE CLASE CON ATRIBUTOS PRIVADOS Y UNA CLASE HEREDADA*/
<?php 
	class administrador{
		public $nombre;
		private $dni;
		private $contrasena;
		public function __construct($a="",$b="",$c=""){
		$this->nombre=$a;
		$this->dni=$b;
		$this->contrsena=$c;
		}
     private function mostrardatosdocente()
		{
			print "Hola, estimado Docente: ".$this->nombre." <br> su numero de dni es: ".$this->dni."<br> su contraseña es: ".$this->contrasena."<br> favor de no olvidar sus datos, gracias";
		}
	 private function mostrardatosestudiante()
		{
			print "Hola, estimado Estudiante: ".$this->nombre." <br> su numero de dni es: ".$this->dni."<br> su contraseña es: ".$this->contrasena."<br> favor de no olvidar sus datos, gracias";
		}
	public	function solicitardatosdocente()
		{
			$this->mostrardatosdocente();
		}
	public	function solicitardatosestudiante()
		{
			$this->mostrardatosestudiante();
		}
	}
	//herencia 
	
	
	
	$docente=new administrador("pablo","123456","91234@@9");
	$alumno=new administrador("pedro","45678912","999345+*5");
	
	$docente->solicitardatosdocente();
	$alumno->solicitardatosestudiante();
	

?>