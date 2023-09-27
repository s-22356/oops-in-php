<?php 
class First
{
	function mno()
	{
		echo "This is a mno function";
	}
	function abc()
	{
		echo "This is abc function";
	}
}
$obj=new First();
$obj->mno();
echo "<br>";
$obj->abc();
?>