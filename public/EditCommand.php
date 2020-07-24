<?php


class EditCommand extends Command
{
    private $file;
    private $logFile = LOG_FILE;
    private Editor $editor;


    public function __construct(Editor $editor, $file = WORK_FILE )
    {
        $this->file = $file; //new SplFileObject($file);
        $this->editor = $editor;
    }

    public function cutText(int $start, int $stop):string
    {

        $this->logCommand('Вырезка текста с позиции: ' . $start . ' до позиции ' . $stop);
        return $this->editor->cut($this->file, $start, $stop);
    }

    public function pasteText(string $data, int $start)
    {
        $this->editor->paste($this->file, $data, $start);
        $this->logCommand('Вставка текста: ' . $data);
    }

    public function logCommand(string $data)
    {
        $file = new SplFileObject('log.txt', 'a');
        $file->fwrite(date('d-m-Y H:i:s') . ' Произведена команда: ' . $data . "\r\n");
        echo date('d-m-Y H:i:s') . ' Произведена команда: ' . $data . "\r\n" . PHP_EOL;
    }

    public function undo()
    {

    }
}