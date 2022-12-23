<?php
$categoryName =$obj->display_category();
if(isset($_POST['add_post'])){
  $msg = $obj->add_post($_POST);
}
?>

<h1 class="text-center">Add Post</h1>
<?php if(isset($msg)){echo $msg;} ?>
<form action="" method="post" enctype="multipart/form-data" class="w-75">
        <div class="form-group">
            <label class=" mb-1" for="post_title">Post Title</label>
            <input class="form-control py-4" id="cat_name" name="post_title" type="text" />
        </div>
        <div class="form-group">
            <label class=" mb-1" for="post_content">Post Content</label>
            <textarea class="form-control py-4" id="post_content" name="post_content" ></textarea> 
        </div>
        
        <div class="form-group">
            <label class=" mb-1" for="post_img">Upload Thumbnail</label><br>
            <input class=" py-4" id="post_img" name="post_img" type="file"  />
        </div>
        <div class="form-group">
            <label class=" mb-1" for="post_cat">Select Post Category </label>
            <select class="form-control" name="post_cat" id="post_cat">
                <?php
                while($category=mysqli_fetch_assoc($categoryName)) {?>

                <option value="<?php echo $category['cat_id'] ;?>"><?php echo $category['cat_name'] ;?></option>
                    <?php } ?>
                
            </select>
        </div>
        <div class="form-group">
            <label class=" mb-1" for="post_summary">Post Summary</label>
            <input class="form-control py-4" id="post_summary" name="post_summary" type="text"  />
        </div>
        <div class="form-group">
            <label class=" mb-1" for="post_tag">Post Tag</label>
            <input class="form-control py-4" id="post_tag" name="post_tag" type="text"  />
        </div>
        <div class="form-group">
            <label class=" mb-1" for="post_status">Post Status</label>
            <select name="post_status" id="post_status" class="form-control">
                <option value="1">Publish</option>
                <option value="0">Unpublish</option>
            </select>
        </div>
        
        <input type="submit" value="Add Post" name="add_post" class="form-control btn btn-block btn-primary my-4">
</form>