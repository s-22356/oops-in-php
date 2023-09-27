<?php 
trait A
{
	function abc()
	{
		echo "this is abc function";
	}
}
trait B
{
	function mno()
	{
		echo " this is mno function";
	}
	
}
class C 
{
	use A,B;
	function xyz()
	{
		echo "this is xyz function";
	}
	
}
$obj=new C();
$obj->mno();
echo "<br>";
$obj->abc();
echo "<br>";
$obj->xyz();
?>