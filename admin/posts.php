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
                        Posts
                        <small>create or edit them</small>
                    </h1>

                    <table class="table table-bordered table-hover table-responsive ">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Category id</th>
                            <th>Image</th>
                            <th>Tags</th>
                            <th>Comments</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        $query = "SELECT * FROM posts";
                        $select_categories = mysqli_query($connection, $query);

                        while ($row = mysqli_fetch_assoc($select_categories)) {
                            $post_id = $row['post_id'];
                            $post_author = $row['post_author'];
                            $post_title = $row['post_title'];
                            $post_category_id = $row['post_category_id'];
                            $post_image = $row['post_image'];
                            $post_tags = $row['post_tags'];
                            $post_comments = $row['post_comment_count'];
                            $post_date = $row['post_date'];

                            echo "<tr>";
                            echo "<td>{$post_id}</td>";
                            echo "<td>{$post_author}</td>";
                            echo "<td>{$post_title}</td>";
                            echo "<td>{$post_category_id}</td>";
                            echo "<td><img src='../media/$post_image'></td>";
                            echo "<td>{$post_tags}</td>";
                            echo "<td>{$post_comments}</td>";
                            echo "<td>{$post_date}</td>";
                            echo "<tr>";

                        }

                        ?>
                        </tbody>
                    </table>
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
