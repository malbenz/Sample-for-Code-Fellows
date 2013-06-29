<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
class Person {
public $firstName = 'firstName';
public $middleName = 'middleName';
public $lastName = 'lastName';

public function __construct($firstName, $middleName, $lastName){
$this->firstName = $firstName;
$this->middleName = $middleName;
$this->lastName = $lastName;
}

public function hello(){
return 'Thanks for joining the mailing list '. $this->firstName .' '. $this->middleName.' '.$this->lastName.'!';
}
}

//in the case there is a server set up, this could pass the user input data as a new person on that server
$newPerson = new Person($_POST["firstName"], $_POST["middleName"], $_POST["lastName"];


?>
</body>
</html>