<?php

    function categoryAdd() {

        global $connection;
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

    }

    function findAllCategories() {

        global $connection;
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
    }

    function deleteCategory() {
        global $connection;
        if (isset($_GET['delete'])) {

            $the_cat_id = $_GET['delete'];
            $query = "DELETE from categories WHERE cat_id = {$the_cat_id}";

            $delete_query = mysqli_query($connection, $query);
            header("Location: categories.php");

        }
    }

    function checkQuery($result) {

        global $connection;

        if(!$result) {
            die('Query failed...' . mysqli_error($connection));
        }
    }

?>