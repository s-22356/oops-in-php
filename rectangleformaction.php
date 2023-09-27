<?php 
$length=$_REQUEST["length"];
$breadth=$_REQUEST["breadth"];
class Rectangle
{
	public $marea,$mperimeter;     
	function getdata($len,$brea)
	{
		$this->marea=2*($len+$brea);
		$this->mperimeter=($len*$brea);
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
$obj->getdata($length,$breadth);
echo "The area of rectangle is :";
$obj->Area();
echo "The perimeter of rectangle is :";
$obj->perimeter();
?>