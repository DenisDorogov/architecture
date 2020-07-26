<?php


class Editor
{
    public function cut($file, $start, $stop): string
    {
        $temp = file_get_contents($file);
        $buffer = substr($temp, $start, $stop - $start);
        $temp = substr_replace($temp, '', $start, $stop - $start);
        file_put_contents($file, $temp);
        echo "Файл: $temp" . PHP_EOL;
        return $buffer;
    }

    public function paste($file, $data, $start): void
    {   $temp = file_get_contents($file);
        $temp = substr_replace($temp, $data, $start, 0);
        file_put_contents($file, $temp, 0);
        echo "Файл: $temp" . PHP_EOL;
    }
}