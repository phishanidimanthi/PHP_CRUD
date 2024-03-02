<?php

$con = new mysqli('localhost', 'root', '', 'crud_operation', '3307');

if ($con->connect_error) {
    die(mysqli_error( $con ));
}

?>

