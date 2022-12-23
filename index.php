<?php 
    include_once('admin/Class/function.php') ;
    $obj = new adminBlog();
    $getCat = $obj->display_category();
?>
<?php include_once('includes/head.php') ;?>

    <!-- ***** Preloader Start ***** -->
    <?php include_once('includes/preloader.php'); ?>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php include_once('includes/header.php'); ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php include_once('includes/banner.php'); ?>
    <!-- Banner Ends Here -->
    <?php //include_once('includes/cta.php') ;?>
    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <?php include_once('includes/blog_post.php'); ?>
                <?php include_once('includes/siderbar.php') ;?>
            </div>
        </div>
    </section>

    <?php include_once('includes/footer.php') ;?>
    <?php include_once('includes/script.php') ;?>