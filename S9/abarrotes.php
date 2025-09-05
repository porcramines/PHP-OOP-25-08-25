/**registro de productos en una tienda de abarrotes*/
<?php 
	class producto{
		public $cantidad="";
		public $descripcion;
		public $preciounitario;
		public $total="Si";
		
		function __construct($a="",$b="",$c=""){
		$this->cantidad=$a;
		$this->descripcion=$b;
		$this->preciounitario=$c;
		$this->total=$a*$c;
		}
	    
	    function __destruct(){
	    }
	   
	public function productoregistrado(){
		print "el producto fue registrado";
		print $this->cantidad."<br>";
		print $this->descripcion."<br>";
		print $this->preciounitario."<br>";
		print $this->total."<br>";
	    }
}
	$arroz =new producto(150,"arroz",3);
	$arroz->productoregistrado();

	$atun =new producto(150,"atun",4);
	$atun->productoregistrado();
	
	unset($cucho);
	unset($benito);

?>
