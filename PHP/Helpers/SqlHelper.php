<?php


class SqlHelper
{
    public function __construct()
    {
        $connection = $this->getConnection();

        if ($connection->connect_error)
        {
            //die("Problem: " . $connection->connect_error);
            $this->makeDatabase($connection);
        }
    }


    public function makeDatabase($connection)
    {
        $sql = "CREATE DATABASE web_quiz_database";
        if ($connection->query($sql) === TRUE)
        {
            echo "Database created successfully";
        }
        else
        {
            echo "Error creating database: " . $connection->error;
        }

        $connection->close();
    }





    public function getConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "web_quiz_database";


        $connection = new mysqli($servername, $username, $password, $dbname);

        return $connection;
    }


}