<?php


class Editor
{
    public function cut($file, $start, $stop): void
    {
        $temp = file_get_contents($file);
        $temp = substr_replace($temp, '', $start, $stop - $start);
        file_put_contents($file, $temp);
    }

    public function paste($file, $data, $start): void
    {   $temp = file_get_contents($file);
        $temp = substr_replace($temp, $data, $start, 0);
        file_put_contents($file, $temp, $start);
    }
}