<?php

class User
{
    protected $editor;
    private $commands = [];
    private $current = 0;
    private $buffer = [];
//    private $reverseCommand = [
//        'cut' => 'paste',
//        'paste' => 'cut'
//    ];

    public function __construct()
    {
        $this->editor = new Editor();
    }

    public function runCommand($type, $start = null, $value = null) {
        echo PHP_EOL . "Поступила команда: '$type' / $start / $value".PHP_EOL;
        $command = new EditCommand($this->editor);

        switch ($type) {
            case 'cut':
                $buffer = $command->cutText($start, $value);
                $this->commands[$this->current] =['paste', $start, $buffer];
                echo "current commands " . ($this->current) . " -  " . $this->commands[$this->current][0] . '/' . $this->commands[$this->current][1] . '/' . $this->commands[$this->current][2] . PHP_EOL;
                $this->current++;
                break;
            case 'paste':
                if ($value === null) {
                    $string = $this->commands[$this->current - 1][2];
                } else {
                    $string = $value;
                }
                $command->pasteText( $string, $start);
                $this->commands[$this->current] =['cut', $start, $start + strlen($string)];
                echo "current commands " . ($this->current) . " -  " . $this->commands[$this->current][0] . '/' . $this->commands[$this->current][1] . '/' . $this->commands[$this->current][2] . PHP_EOL;
                $this->current++;
                break;
            case 'undo':
                --$this->current;
                $this->runCommand(
                    $this->commands[$this->current][0],
                    $this->commands[$this->current][1],
                    $this->commands[$this->current][2]
                );
                --$this->current;
                array_pop($this->commands);
                break;
            case 'redo':
                if ($this->current < count($this->commands) - 1) {

                }
                break;
        }
    }
}