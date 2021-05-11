<?php
require 'Medoo.php';

use Medoo\Medoo;


$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'Narvarosystem',
    'server'        => 'localhost',
    'username'      => 'Narvaroadmin',
    'password'      => 'grupp4'
]);
