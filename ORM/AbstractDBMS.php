<?php


abstract class AbstractDBMS
{
    abstract public function myDB_connect();
    abstract public function createQuery();
    abstract public function recordData();
}