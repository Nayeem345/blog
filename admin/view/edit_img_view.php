<?php 
    if(isset($_GET['status'])){
        if($_GET['status']=='editimg'){
            $id = $_GET['id'];
        }
    }
    if(isset($_POST['change_img_btn'])){
       $msg= $obj->edit_img($_POST);
    }
?>

<div class="shadow m-5 p-5">
    <?php if(isset($msg)){echo $msg;} ?>
<form action="" method="post" enctype="multipart/form-data" class="form">
    <input type="hidden" name="editimg_id" id="" value="<?php echo $id; ?>">
<div class="form-group">
            <label class=" mb-1" for="change_img">Change Thumbnail</label><br>
            <input class=" py-4" id="change_img" name="change_img" type="file"  />
        </div>
        <input type="submit" value="Change Thumbnail" name="change_img_btn" class="btn btn-primary">
</form>
</div>