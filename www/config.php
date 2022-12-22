<?php 

// Change this to your connection info.
$DATABASE_HOST = 'db-server';
$DATABASE_USER = 'root';
$DATABASE_PASS = '123';
$DATABASE_NAME = 'sana';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
