<?php 
    if(isset($_POST['add_cat'])){
       $return_msg =  $obj->add_category($_POST);
    }


?>

<h1 class="text-center py-4">Add Category</h1>
<?php 
    if(isset($return_msg)){ 
        echo $return_msg;
     } 
?>
<form action="" method="post" class="w-75 m-auto">
        <div class="form-group">
            <label class=" mb-1" for="cat_name">Category Name</label>
            <input class="form-control py-4" id="cat_name" name="cat_name" type="text"  />
        </div>
        <div class="form-group">
            <label class=" mb-1" for="cat_des">Category Description</label>
            <input class="form-control py-4" id="cat_des" name="cat_des" type="text"  />
        </div>
        <input type="submit" value="Add Category" name="add_cat" class="form-control btn btn-block btn-primary">
</form>