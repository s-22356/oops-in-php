<?php 
class student
{
	function __destruct()
	{
		echo "this is destructor";
	}
}
$obj=new student();
?>