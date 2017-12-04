<?php

$connection = mysqli_connect('localhost', 'cms_admin', 'zaq1@WSX', 'cms');

if (!$connection) {
    echo "Database connot be connected";
}
$query = "SELECT * FROM categories";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query problem...");
}

?>