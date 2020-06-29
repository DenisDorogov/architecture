<?php


class PostgreSQLFactory  extends AbstractDBMS
{
    public function myDB_connect()
    {
        echo 'Подключаемся к PostgreSQL';
        return new DBConnection();
    }

    public function createQuery() {
        return new DBQueryBuilder();
    }

    public function recordData() {
        return new DBRecord();
    }
}