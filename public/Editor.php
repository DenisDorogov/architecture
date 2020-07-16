<?php


class Editor
{
    public function cut($file, $start, $stop)
    {

    }

    public function paste($file, $data, $start)
    {
        file_put_contents($file, $data, $start);
    }
}