<?php


class SqlHelper
{



    public function getConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "flatpack_store_ad";


        $connection = new mysqli($servername, $username, $password, $dbname);
    }


}