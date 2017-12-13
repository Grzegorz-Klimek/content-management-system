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
                        Categories
                        <small>create or edit them</small>
                    </h1>


                    <div class="col-xs-6">

                        <?php categoryAdd() ?>


                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Add category</label>
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="add" value="Add category">
                            </div>
                        </form>
                        <br>

                        <?php
                        if(isset($_GET['update'])) {
                            include "includes/categoryUpdates.php";
                        }
                        ?>



                    </div>

                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover table-responsive">
                            <thead class="">
                            <tr>
                                <th>Id</th>
                                <th>Category title</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php findAllCategories(); ?>
                            <?php deleteCategory(); ?>


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
