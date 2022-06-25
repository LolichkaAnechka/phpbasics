<?php

$a = 10;
echo $a;

$a = "Test";
print $a." ";

$c = "iem_katowice_2022_проти_akuma";

$d = explode("_", $c);

print implode(" ", $d)." ";

$dict = ["key1" => "value1", "key2" => "value2"];
print $dict["key2"]." ";
$dict["key2"] = "new value2";
print $dict["key2"]." ";

function dosomethingstupid(int $val1, int $val2){
	return rand(min($val1, $val2), $val1*$val2);
}

print dosomethingstupid("10", 20)." ";

class TestParentClass {
	public $name;

	function __construct ($new_name){
		$this->name = $new_name;
	}

	function getName(){
		return $this->name;
	}

	function introduce_yourself(){
		print "My name is $this->name"." ";
	}

	function __destruct(){
		print "Parent class dead"." ";
	}
}

class TestChildClass extends TestParentClass{
	public $surname;

	function __construct ($new_name, $new_surname){
		parent::__construct($new_name);
		$this->surname = $new_surname;
	}

	

	function getSurname(){
		return $this->surname;
	}

	function introduce_yourself(){
		parent::introduce_yourself();
		print "My surname is $this->surname"." ";
	}

	function __destruct(){
		print "Child class dead"." ";
	}
}

$parent = new TestParentClass("Zahar");
print $parent->getName()." ";
$parent->introduce_yourself();

$child = new TestChildClass("Zahar", "Abobenko");
print $child->getName()." ";
print $child->getSurname()." ";
$child->introduce_yourself();



class Singleton{
	public $name;
	private static $instance;
	private function __construct (){
		print "Constructing instance"." ";
	}

	public static function getInstance(){
		if (!isset(self::$instance)){
			self::$instance = new self();
		}
		return self::$instance;
	}
}


$singleton1 = Singleton::getInstance();
$singleton1->name = "Instance1 ";

$singleton2 = Singleton::getInstance();
print $singleton2->name;
