<?php
require_once ('const.php');
spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

$command = new EditCommand(new Editor());

//$command->pasteText('test' , 0);
$command->cutText(1 , 3);
