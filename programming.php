<?php 
    include_once('admin/Class/function.php') ;
    $obj = new adminBlog();
    $getCat = $obj->display_category();
    $posts =$obj->ProgrammingCategory();
?>
<?php include_once('includes/head.php') ;?>

    <!-- ***** Preloader Start ***** -->
    <?php include_once('includes/preloader.php'); ?>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php include_once('includes/header.php'); ?>

 <!-- heading Starts Here -->
 <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
               
                <h2 class="text-center">Programming</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Page Content -->
    <section class="blog-posts">
        <div class="container">
            <div class="row">
            <?php while($postData= mysqli_fetch_assoc($posts)) {   
                ?>
            <div class="col-lg-12">
                <div class="blog-post">
                    <div class="blog-thumb">
                        <img height="350"  width="450" src="upload/<?php echo $postData['post_img'];?>" alt="">
                    </div>
                    <div class="down-content">
                        <span><?php echo $postData['cat_name'];?></span>
                        <a href="single_post.php?view=post_view&&id=<?php echo $postData['post_id'];?>">
                            <h4><?php echo $postData['post_title'];?></h4>
                        </a>
                        <ul class="post-info">
                            <li><a href="#"><?php echo $postData['post_author'];?></a></li>
                            <li><a href="#"><?php echo $postData['post_date'];?></a></li>
                            <li><a href="#"><?php echo $postData['post_comment_count'];?></a></li>
                        </ul>
                        <p><?php echo $postData['post_summary'];?></p>
                        <div class="post-options">
                            <div class="row">
                                <div class="col-6">
                                <?php echo $postData['post_tag'];?>
                                </div>
                                <div class="col-6">
                                    <ul class="post-share">
                                        <li><i class="fa fa-share-alt"></i></li>
                                        <li><a href="#">Facebook</a>,</li>
                                        <li><a href="#"> Twitter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
           
            </div>
            
        </div>
    </section>

    <?php include_once('includes/footer.php') ;?>
    <?php include_once('includes/script.php') ;?>