<?php 
class Rectangle
{
	public $marea,$mperimeter;     
	function getdata($length,$width)
	{
		$this->marea=2*($length+$width);
		$this->mperimeter=($length*$width);
	}
	function Area()
	{
		echo $this->marea,"<br>";
	}
	function perimeter()
	{
		echo $this->mperimeter;
	}
}
$obj=new Rectangle();
$obj->getdata(10,20);
$obj->Area();
$obj->perimeter();
echo "<br>";
$obj->Area();
$obj->perimeter();

?>