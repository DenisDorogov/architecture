<?php
require_once ('const.php');
spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

//$command = new EditCommand(new Editor());
//
//
//$command->cutText(0 , 5);
//$command->pasteText('test0test1' , 0);
file_put_contents('text.txt', '111222333444555666');
$user = new User();

$user->runCommand('cut', 3, 6);
$user->runCommand('paste', 12);





