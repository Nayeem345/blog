<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
               
                <a class="nav-link" href="dashboard.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="add_category.php"><i class="fas fa-plus mr-2"> </i>  Add Category</a>
                        <a class="nav-link" href="manage_category.php"><i class="fas fa-trash mr-2"></i>  Manage Category</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsx"
                    aria-expanded="false" aria-controls="collapseLayoutsx">
                    <div class="sb-nav-link-icon"><i class="fas fa-pen"></i></div>
                    Post
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutsx" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="add_post.php"><i class="fas fa-plus mr-2"> </i>Add Post</a>
                        <a class="nav-link" href="manage_post.php"><i class="fas fa-trash mr-2"></i>Manage Post</a>
                    </nav>
                </div>
                
              
                
            </div>
        </div>

    </nav>
</div>