<?php

class ProgrammerPHP implements Observed
{
	private $name;
	private $email;
	private $experience;

	public function __construct($name = 'Иван', $email = 'no@no.no', $exp = 0) 
	{
		$this->name = $name;
		$this->email = $email;
		$this->experience = $exp;
		HandHunter::getInstance()->register($this);
	}

	public function notifyApplicant($data)
	{
		echo "Уважаемый $this->name, для вас имеются вакансии: $data <br>".PHP_EOL;
	}



}