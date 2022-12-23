<?php 
 $posts = $obj->display_post();
 if(isset($_GET['status'])){
    if($_GET['status']=='delete_post'){
        $deleteID= $_GET['id'];
       $msg =  $obj->DeletePost($deleteID);
    }
}
?>
<h1 class="text-center py-4">Manage Post </h1>
<?php if(isset($msg)){echo $msg; } ?>
<div class="table-responsive">
    <table class="table border">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Thumb</th>
                <th>Author</th>
                <th>Date</th>
                <th>Category</th>
                <th>Status</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($postData= mysqli_fetch_assoc($posts)) { ?>
            <tr>
                <td><?php echo $postData['post_id'];?></td>
                <td><?php echo $postData['post_title'];?></td>
                <td><?php echo $postData['post_content'];?></td>
                <td>
                    <img height="100px" src="../upload/<?php echo $postData['post_img'];?>" alt="" ><br>
                    <a href="edit_img.php?status=editimg&&id=<?php echo $postData['post_id'];?>">Change</a> 
                </td>
                <td><?php echo $postData['post_author'];?></td>
                <td><?php echo $postData['post_date'];?></td>
                <td><?php echo $postData['cat_name'];?></td>
                <td><?php
                    if($postData['post_status']==1){
                        echo "Publish";
                    }
                    else{
                        echo "Unpublish";
                    }
                ?></td>
                <td>
                    <a href="edit_post.php?status=editpost&&id=<?php echo $postData['post_id'];?>" class="btn btn-success rounded mb-2">Edit</a> <br>
                    <a href="?status=delete_post&&id=<?php echo $postData['post_id']; ?>" class="btn btn-danger rounded">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>