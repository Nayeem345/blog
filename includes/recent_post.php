<?php
 $posts = $obj->display_post(); 
 
?>

<div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                        <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                    <?php while($postData= mysqli_fetch_assoc($posts)) { ?>
                        <ul>
                            <li><a href="./single_post.php?view=post_view&&id=<?php echo $postData['post_id'];?>">
                                    
                                    <h5><?php echo $postData['post_title'];?></h5>
                                    <span><?php echo $postData['post_date'];?></span>
                                    <img src="./upload/<?php echo $postData['post_img'];?>" alt="" class="img-fluid">
                                </a></li>
                            
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>