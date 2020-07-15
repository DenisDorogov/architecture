<?php
spl_autoload_register(function($classname) {
	include $classname .".php";
});


$applicant1 = new ProgrammerPHP('Игорь', 'igor@gmail.com', 3);
$applicant2 = new ProgrammerPHP('Вася', 'vasya@gmail.com', 2);
$applicant3 = new ProgrammerPHP();


HandHunter::notify('PHP программист');
HandHunter::notify('Java программист');

