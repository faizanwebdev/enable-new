<?php

$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'enable';
$con = mysqli_connect( $server, $user, $password, $dbname);

if ( !$con ) {
    die( 'Could not Connect MySql Server:' .mysqli_error() );
}

?>