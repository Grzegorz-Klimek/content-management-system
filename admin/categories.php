<?php include "includes/admin-header.php" ?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin-nav.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header">
                        Blank Page
                        <small>Subheading</small>
                    </h1>


                    <div class="col-xs-6">


                    <?php

                    if(isset($_POST['submit'])) {

                    $cat_title = $_POST['cat_title'];

                    if($cat_title == "" || empty($cat_title)) {

                        echo "This field should not be empty...";

                    } else {

                        $query = "INSERT INTO categories(cat_title)";
                        $query .= "VALUE('{$cat_title}')";

                        $create_category_query = mysqli_query($connection, $query);

                        if(!$create_category_query) {
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
                                <input class="btn btn-primary" type="submit" name="submit" value="Add category">
                            </div>
                        </form>
                    </div>

                    <div class="col-xs-6">
                        <?php
                        $query = "SELECT * FROM categories";
                        $select_categories = mysqli_query($connection, $query);
                        ?>
                        <table class="table table-bordered table-hover  ">
                            <thead class="">
                            <tr>
                                <th>Category id</th>
                                <th>Category title</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $select_all_categories_query = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($select_categories)) {
                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];

                                echo "<tr>";
                                echo "<td class='colx-xs-2'>{$cat_id}</td>";
                                echo "<td>{$cat_title}</td></tr>";
                                echo "<tr>";

                            }

                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/admin-footer.php" ?>
