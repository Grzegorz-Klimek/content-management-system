<?php

if (isset($_POST['add'])) {

    $cat_title = $_POST['cat_title'];

    if ($cat_title == "" || empty($cat_title)) {

        echo "Please choose or write name of category...";

    } else {

        $query = "INSERT INTO categories(cat_title)";
        $query .= "VALUE('{$cat_title}')";

        $create_category_query = mysqli_query($connection, $query);

        if (!$create_category_query) {
            die('Ups...' . mysqli_error($connection));
        }


    }

}

?>


<form action="" method="post">
    <div class="form-group">
        <label for="cat_title">Add category</label>
        <input type="text" class="form-control" name="cat_title">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="add" value="Add category">
    </div>
</form>