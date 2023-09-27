<?php 
class student
{
	public $mname,$mwage,$msage;
	function __construct($name,$age)
	{
		$this->mname=$name;
		$this->mwage=$age;
	}
	function setage($sage)
	{
		$this->msage=$sage;
	}
	function display()
	{
		echo "My name is ".$this->mname;
		return $this->mwage-$this->msage;

	}
}
$obj=new student("Sudip",29);
$obj->setage(6);
echo "My age is ".$obj->display();
?>
