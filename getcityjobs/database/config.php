<?php
session_start();

// Database configuration.....
$dbHost = 'localhost';
$dbName = 'mydb';
$dbUsername = 'root';
$dbPassword = '';

// Create database connection....
$dbc = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
