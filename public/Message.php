<?php


class Message implements INotificator
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function __get($text)
    {
        return $this->text;
    }

    public function sendMessage()
    {
        echo "Текст сообщения: $this->text".PHP_EOL;
    }
}