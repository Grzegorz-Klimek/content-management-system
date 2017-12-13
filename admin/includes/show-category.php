<?php

$query = "SELECT * FROM categories";
$select_categories = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_categories)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];

    echo "<tr>";
    echo "<td class='col-lg-1'>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td class='col-lg-1'><a href='categories.php?delete={$cat_id}' class='btn btn-sm btn-danger'><span class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></td>";
    echo "<td class='col-lg-1'><a href='categories.php?update={$cat_id}' class='btn btn-sm btn-warning'><span class=\"fa fa-pencil-square\" aria-hidden=\"true\"></span></a></td>";
    echo "<tr>";

}

?>