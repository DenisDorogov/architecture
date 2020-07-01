<?php

spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

// 1 задание.
//$text = "Собрание в 9:00";
//$notification = new Message($text);
//$notification = new MessageEmail($notification);
//$notification = new MessageTelegram($notification);
//$notification = new MessageWhatsApp($notification);
//$notification->sendMessage();


// 2 задание.

