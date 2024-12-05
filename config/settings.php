<?php

class dbFunc
{
    function dbConn()
    {

        require_once('../potfolio/config/dbparamsportfolio.php');

        $db = pg_connect("host=$host port=$port user=$user dbname=$dbname password=$password")
            or die('Не удалось подключиться к БД: ' . pg_last_error($db));

        return $db;
    }
}
