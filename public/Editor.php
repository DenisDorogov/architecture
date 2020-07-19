<?php


class Editor
{
    public function cut($file, $start, $stop): void
    {
        $temp = file_get_contents($file);
        substr_replace($temp, '', $start, $stop - $start);
        file_put_contents($file, $temp);
    }

    public function paste($file, $data, $start): void
    {
        file_put_contents($file, $data, $start);
    }
}