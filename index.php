<?php

require 'index.html';
require 'connection.php';

try{
    $app['db'] = (new Database())->db;
    // print_r($allDetails);
}
catch(PDOException $e){
    die("connection problem");
}