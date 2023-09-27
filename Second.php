<?php 
class Student
{
	public $mname,$mage;
	function getdata($name,$age)
	{
		$this->mname=$name;
		$this->mage=$age;
	}
	function showdata()
	{
		echo "My name is ".$this->mname."<br>";
		echo "My age is ".$this->mage;
	}
}
$obj=new Student();
$obj->getdata("Sudip",24);
$obj->showdata();
echo "<br>";
$obj->showdata();

?>