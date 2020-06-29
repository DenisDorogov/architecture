<?php


class DBConnection extends AbstractDBComponent
{
    public function connectDB() {
        $mysqli = mysqli_connect(
            $configConnect['db_host'],
            $configConnect['db_user'],
            $configConnect['db_pass'],
            $configConnect['db_name']
        );
        return $mysqli;
    }
}