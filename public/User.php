<?php

class User
{
    protected $editor;
    private $commands = [];
    private $current = 0;
    private $buffer = [];
    private $reverseCommand = [
        'cutText' => 'pasteText',
        'pasteText' => 'cutText'
    ];

    public function __construct()
    {
        $this->editor = new Editor();
    }

    public function runCommand($type, $start, $value = null) {
        echo "Поступила команда: $type $start $value".PHP_EOL;
        $command = new EditCommand($this->editor); //Добавить сюда.

        switch ($type) {
            case 'cut':
                $this->buffer[] = $command->cutText($start, $value);
                $this->commands[] ='cut';
                break;
            case 'paste':
//                echo '$this->buffer = ' . end($this->buffer) . PHP_EOL;
//                var_dump($this->buffer);
                $command->pasteText( end($this->buffer), $start);
                $this->commands[] ='paste';
                break;
            case 'undo':
                $this->runCommand($this->commands[--$this->current], ); //Дописать параметры. Нужно сохрянять еще и позиции удаления и вставки.

                break;
        }
        var_dump($this->commands);
//        $this->commands[] = $command; //Не учитывается параметры команды
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