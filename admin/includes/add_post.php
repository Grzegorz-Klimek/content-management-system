<?php

    if(isset($_POST['add_post'])) {

        $post_title = $_POST['post_title'];
        $post_author = $_POST['post_author'];
        $post_category_id = $_POST['post_category_id'];
        $post_status = $_POST['post_status'];

        $post_image = $_FILES['post_image']['name'];
        $post_image_temp = $_FILES['post_image']['tmp_name'];

        $post_tags = $_POST['post_tags'];
        $post_content = $_POST['post_content'];
        $post_date = date('d-m-y');
        
        $post_comment_count = 4;

    }

?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group row">
        <div class="col-lg-10">
            <label for="title">Post Title</label>
            <input type="text" class="form-control" name="post_title">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-10">
        <label for="post_category_id">Post Category Id</label>
        <input type="text" class="form-control" name="post_category_id">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-10">
        <label for="post_author">Post Author</label>
        <input type="text" class="form-control" name="post_author">
    </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-10">
        <label for="post_status">Post Status</label>
        <input type="text" class="form-control" name="post_status">
    </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-10">
        <label for="post_image">Post Image</label>
        <input type="file" name="post_image">
    </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-10">
        <label for="post_tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-10">
        <label for="post_content">Post Content</label>
            <textarea class="form-control" name="post_content" cols="20" rows="10" ></textarea>
    </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-10">
            <input class="btn btn-md btn-success" type="submit" name="add_post" value="Add post">
        </div>
    </div>

</form>