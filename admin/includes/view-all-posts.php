<table class="table table-bordered table-hover table-responsive table-posts">
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
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>

    <?php

    $query = "SELECT * FROM posts";
    $select_posts = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_posts)) {
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
        echo "<td class='col-lg-2'>{$post_tags}</td>";
        echo "<td>{$post_comments}</td>";
        echo "<td>{$post_date}</td>";
        echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}' class='btn btn-sm btn-warning'><i class=\"fa fa-pencil-square\" aria-hidden=\"true\"></i></a></td>";
        echo "<td><a href='posts.php?delete={$post_id}' class='btn btn-sm btn-danger'><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></td>";
        echo "<tr>";

    }


    if(isset($_GET['delete'])) {

        $post_id = $_GET['delete'];
        $query = "DELETE FROM posts WHERE post_id = {$post_id}";
        $delete_query = mysqli_query($connection, $query);

    }

    ?>

    </tbody>
</table>