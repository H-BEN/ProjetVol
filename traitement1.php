<?php

class traitement_1
{
    function db_connect()
    {
        $PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
        $PDO->setAttribute();

        return $PDO;
    }

    function Test($db)
    {
        $test = $db->prepare("SELECT * FROM user");
        $test->execute();
        }
}