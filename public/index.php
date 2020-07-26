<?php
require_once ('const.php');
spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});
file_put_contents('text.txt', '111222333444555666');

$user = new User();

$user->runCommand('cut', 3, 6);
$user->runCommand('paste', 12);
$user->runCommand('undo');
$user->runCommand('undo');
$user->runCommand('undo');
$user->runCommand('redo');
$user->runCommand('redo');
$user->runCommand('redo');






