
<?php 
/*REALIZAR LAS CLASES USANDO HERENCIA: EJEMPLO ÁRBOL GENEALÓGICO*/
	class padre{
	var $nombre;
	var $colorcabello;
	var $colorojos;
	var $profesion;

	function __construct($n,$o,$p,$q){

		$this->nombre=$n;
	    $this->colorcabello=$o;
	    $this->colorojos=$p;
	    $this->profesion=$q;
	}
    
    function __destruct()
	{
		print $this->nombre."dice : adios, mundo cruel <br>";
	}

    function profesion()
	{
		print "Hola, soy ".$this->nombre." y tengo el pelo color ".$this->colorcabello." mi color de ojos es es ".$this->colorojos." y mi profesion ".$this->profesion."<br>";
	}

	
	}
	//crear la herencia
	class hijo extends padre{}
	class hija extends padre{}
	

	print "padre:pedro"."<br>";
	$pedro =new padre("pedro","rubrio","verdes","abogado");
	$pedro->profesion();

	print "hijo: juan"."<br>";
	$hijo =new hijo("juan","negro","verdes","pintor");
	$hijo->profesion();

	print "hija: maria"."<br>";
	$hija =new hija("maria","negro","verdes","profesora");
	$hija->profesion();



?>

