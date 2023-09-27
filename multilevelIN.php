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
		echo "This is mno fnction";
	}

}
class c extends b
{
	function mnop()
	{
		echo "This is mnop fnction";
	}
	
}
$obj=new c();
$obj->mno();
$obj->abc();
$obj->mnop();
?>