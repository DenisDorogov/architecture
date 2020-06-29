<?php


abstract class AbstractDBComponent
{
    private $configConnect;

    public function __construct(array $configConnect)
    {
        $this->configConnect = $configConnect;
    }
}