<?php


abstract class Command
{
    public abstract function cutText(int $start, int $stop);

    public abstract function pasteText(string $data, int $start);

    public abstract function logCommand(string $data);


}