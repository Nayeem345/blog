 <?php 
    $cat_data =  $obj->display_category();
    if(isset($_GET['status'])){
        if($_GET['status']=='delete'){
            $deleteID= $_GET['id'];
           $msg =  $obj->delete_category($deleteID);
        }
    }

 ?>
<h1>Manage Category</h1>
<?php if(isset($msg)){echo $msg; } ?>
<table class="table border">
    <thead>
        <tr>
   
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        while($cat = mysqli_fetch_assoc($cat_data)){
        ?>
        <tr>
          
            <td><?php echo $cat['cat_name']; ?></td>
            <td><?php echo $cat['cat_des']; ?></td>
            <td>
                <a href="" class="btn btn-success">Edit</a>
                <a href="?status=delete&&id=<?php echo $cat['cat_id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>