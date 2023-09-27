<?php 
class student
{
	function abc()
	{
		echo "name ";
	}
	function __construct()
	{
		echo "My ";
	}
	function __destruct()
	{
		echo "Sudip";
	}
	function xyz()
	{
		echo "is ";
	}
}
$obj=new student();
$obj->abc();
$obj->xyz();

?>