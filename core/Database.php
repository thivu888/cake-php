<?php

class Database
{
    const HOST = 'localhost';
    // const USERNAME = 'root';
    const USERNAME = 'id19008286_thivu888';
    // const PASSWORD = '';
    const PASSWORD = 'Vu12062000!!';
    // const DB_NAME = 'hang';
    const DB_NAME = 'id19008286_cake';

    public function connect()
    {
        $connect = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME);
        mysqli_set_charset($connect, 'utf8');
        if (mysqli_connect_errno() === 0) {
            return $connect;
        }
        return false;
    }
}
