<?php 
    if(isset($_GET['status'])){
        if($_GET['status']=='editpost'){
            $id = $_GET['id'];
          $postDatas = $obj->edit_post($id);
        }
    }
    if(isset($_POST['update_post'])){
       $msg = $obj->update_post($_POST);
      
    }
   
?>

<div class="shadow m-5 p-5">
<?php if(isset($msg)){echo $msg;} ?>
    <form action="" method="post" class="form">
        <input type="hidden" name="editpost_id" id="" value="<?php echo $id; ?>">
        <div class="form-group">
            <label class=" mb-1 " for="change_title">Change Title</label><br>
            <input class=" py-4 form-control"  id="change_title" value="<?php echo $postDatas['post_title']; ?>"
                name="change_title" type="text" />
        </div>
        <div class="form-group">
            <label class=" mb-1 " for="change_content">Change Content</label><br>
            <textarea name="change_content" id="change_content" cols="30" rows="10" class="form-control">
            <?php echo $postDatas['post_content']; ?>
            </textarea>
        </div>
        
        <input type="submit" value="Update Post" name="update_post" class="btn btn-primary">
    </form>
</div>