<?php


class MessageEmail implements INotificator
{
    private $text;

    public function __construct(INotificator $textObj)
    {
        $this->text = $textObj->text;
    }

    public function sendEmail($text) {

    }

    public function sendMessage()
    {

    }
}