<?php


class MySQLFactory extends AbstractDBMS
{
    public function myDB_connect()
    {
        echo 'Подключаемся к MySQL';
        return new DBConnection();
    }

    public function createQuery() {
        return new DBQueryBuilder();
    }

    public function recordData() {
        return new DBRecord();
    }
}