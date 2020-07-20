<?php

class User
{
    protected $editor; //Объект калькулятора
    private $commands = []; //Объекты команд
    private $current = 0;
    private $buffer = [];

    public function __construct()
    {
        $this->editor = new Editor();
    }

    public function runCommand($type, $start, $value) {

        $command = new EditCommand($this->editor); //Добавить сюда.

        switch ($type) {
            case 'cut':
                $this->buffer[] = $command->cutText($start, $value);
                break;
            case 'paste':
                $command->pasteText($value, $start);
                break;
        }

        $this->commands[] = $command; //Не учитывается параметры команды
        $this->current++;
    }

//    public function down(int $levels) //Отменить количество операций
//    {
//        echo "Отменить $levels операций".PHP_EOL;
//        for ($i = 0; $i < $levels; $i++)
//        {
//            if($this->current > 0){
//                $this->commands[--$this->current]->unExecute();
//            }
//        }
//
//    }

    //TODO Дописать
}