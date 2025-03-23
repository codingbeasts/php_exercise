<?php
declare(strict_types=1);
class School
{
	private int $id;
	public string $name;
	public function __construct(int $id, string $name)
	{
		$this->id = intval($id);
		$this->name = $name;
	}
	public function message(): string
	{
		return 'This ' . $this->name . ' has id no. ' . $this->id;
	}
}

class Student extends School
{
	// public function __construct(){

	// }
	public function stu_details(int $roll, string $st_name)
	{
		return "$st_name is study in $this->name and his roll no. : $roll";
	}
}

$dipanshu = new Student(10, "KVS");
echo '<a href="/">Homepage</a>';
echo '<br>'.$dipanshu->stu_details(024, 'dipanshu');
echo '<br>'.$dipanshu->name;


// $mySchool = new School(11, 'KV');
// echo '<pre>';
// var_dump($mySchool);
// echo '</pre>';
// echo 'gettype of class based contructor function : ' . gettype($mySchool);
// echo '<br>' . $mySchool->message(); ?>