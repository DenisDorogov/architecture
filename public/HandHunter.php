<?php

class HandHunter 
{
	private static $instance = null;
	private static $observed = [];

	private function __construct(){}

	private function __wakeup(){}

	private function __clone(){}

	public static function getInstance()
	{
		if (self::$instance == null) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function register(Observed $observed) {
        self::$observed[] = $observed;
	}

	public static function notify($data)
    {
        foreach (self::$observed as $observer) {
            $observer->notifyApplicant("Новая вакансия $data");
        }
    }

}