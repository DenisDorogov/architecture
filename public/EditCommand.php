<?php


class EditCommand extends Command
{
    private $file;
    private $logFile = LOG_FILE;
    private Editor $editor;

    public function __construct($file = WORK_FILE, Editor $editor )
    {
        $this->file = $file; //new SplFileObject($file);
        $this->editor = $editor;
    }

    public function cutText(int $start, int $stop)
    {
        $this->editor->cut($this->file, $start, $stop);
        $this->logCommand('Вырезка текста с позиции: ' . $start);
    }

    public function pasteText($data, int $start)
    {
        $this->editor->paste($this->file, $data, $start);
        $this->logCommand('Вставка текста: ' . $data)
    }

    public function logCommand(string $data)
    {
        $file = new SplFileObject('log.txt', 'a');
        $file->fwrite('d-m-Y H:i:s' . 'Произведена команда: ' . $data);
    }
}