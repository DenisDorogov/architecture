<?php


class MessageEmail implements INotificator
{
    protected $text;
    protected $textObject;

    public function __construct(INotificator $textObj)
    {
        $this->text = $textObj->text;
        $this->textObject = $textObj;
    }

    public function __get($text)
    {
        return $this->text;
    }

    public function sendMessage()
    {
        echo "Email: $this->text".PHP_EOL;
        $this->textObject->sendMessage();
    }
}