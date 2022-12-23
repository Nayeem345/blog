<?php 
    include_once('admin/Class/function.php') ;
    $obj = new adminBlog();
    $getCat = $obj->display_category();

    if(isset($_GET['view'])){
        if($_GET['view']=='post_view'){
            $id = $_GET['id'];
            $single_post = $obj->edit_post($id);
        }
    }
?>
<?php include_once('includes/head.php') ;?>

    <!-- ***** Preloader Start ***** -->
    <?php include_once('includes/preloader.php'); ?>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php include_once('includes/header.php'); ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h2 class="text-center">Post Details</h2>
               
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Banner Ends Here -->
  
    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <img src="upload/<?php echo $single_post['post_img']; ?>" alt="" class="img-fluid">
                    <h2><?php echo $single_post['post_title']; ?></h2>
                    <p><?php echo $single_post['post_content']; ?></p>
                </div>
                <?php include_once('includes/siderbar.php') ;?>
            </div>
        </div>
    </section>

    <?php include_once('includes/footer.php') ;?>
    <?php include_once('includes/script.php') ;?>