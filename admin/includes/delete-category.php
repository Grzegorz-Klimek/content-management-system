<?php

if (isset($_GET['delete'])) {

    $the_cat_id = $_GET['delete'];
    $query = "DELETE from categories WHERE cat_id = {$the_cat_id}";

    $delete_query = mysqli_query($connection, $query);
    header("Location: categories.php");

}

?>