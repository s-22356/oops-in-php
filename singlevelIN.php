<?php 
class A
{
	function abc()
 {
 	echo "This is abc function";
 }
}
class B extends A
{
	function mno()
	{
		echo "This is mno function";
	}
}
$obj=new B();
$obj->mno();
echo "<br>";
$obj->abc();
?>