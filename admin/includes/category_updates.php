<form action="" method="post">
    <div class="form-group">
        <label for="cat_title">Update category</label>

        <?php

        if (isset($_GET['update'])) {
            $cat_id = $_GET['update'];

            $query = "SELECT * FROM categories WHERE cat_id= $cat_id";
            $select_categories = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_categories)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];

                ?>

                <input value="<?php if(isset($cat_title)){ echo $cat_title; } ?>" type="text" class="form-control" name="cat_title">


            <?php }} ?>

        <?php

        if(isset($_POST['update'])) {

            $cat_title = $_POST['cat_title'];
            $query = "UPDATE categories SET cat_title = '{$cat_title}' WHERE cat_id = '{$cat_id}' ";
            $update_query = mysqli_query($connection, $query);
        }

        ?>

    </div>
    <div class="form-group">
        <input class="btn btn-warning" type="submit" name="update" value="Update category">
    </div>
</form>

