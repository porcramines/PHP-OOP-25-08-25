<?php
class suma
{
	public $a;
	public $b;
function set_a($a)
 {
    $this->a = $a;
 }
 function set_b($b)
 {
    $this->b = $b;
 }
 function get_suma()
 {
    return $this->a+$this->b;
 }
}//fin de la clase

$suma = new suma();
$suma->set_a(50);
$suma->set_b(60);
echo $suma->get_suma();


?>