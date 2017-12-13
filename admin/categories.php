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

                        <?php include "includes/add-category.php" ?>
                        <br>
                        <?php

                            if(isset($_GET['update'])) {
                                include "includes/update-category.php";
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

                            <?php include "includes/show-category.php" ?>

                            <?php include "includes/delete-category.php" ?>


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
