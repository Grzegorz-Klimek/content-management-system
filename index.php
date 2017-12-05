
    <?php include "includes/header.php" ?>
    <?php include "includes/db.php" ?>

    <!-- Navigation -->
    <?php include "includes/nav.php" ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php

                        $query_posts = "SELECT * FROM posts";

                        $select_all_posts_query = mysqli_query($connection, $query_posts);

                        while($row = mysqli_fetch_assoc($select_all_posts_query)) {

                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_content = $row['post_content'];
                ?>

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a bref="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a bref="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                <img class="img-responsive img-custom" src="media/<?php echo $post_image;?>" alt="">
                <br>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" bref="#">Read More <span
                            class="glyphicon glyphicon-chevron-right"></span></a>

                <?php } ?>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <br>
<?php include "includes/footer.php"; ?>