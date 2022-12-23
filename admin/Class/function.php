<?php 
Class adminBlog{
    private $conn;
    public function __construct()
    {
        $dbhost= "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "blog";
        $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(!$this->conn){
            die("database connection error");
        }
    }
    public function admin_login($data){
        $adminEmail = $data['admin_email'];
        $adminPass = md5($data['admin_pass']);

        $query = "SELECT * FROM admin_info WHERE admin_email='$adminEmail' && admin_pass= '$adminPass' ";
        if(mysqli_query($this->conn, $query)){
            $adminInfo = mysqli_query($this->conn, $query);
            if($adminInfo){
                header('location:dashboard.php');
                $adminData = mysqli_fetch_assoc($adminInfo);
                session_start();
                $_SESSION['adminID'] = $adminData['id'];
                $_SESSION['adminName'] = $adminData['admin_name'];

            }
        }

    }
    public function admin_logout(){
        unset( $_SESSION['adminID']);
        unset($_SESSION['adminName']);
        header('location:index.php');
    }
    public function add_category($data){
        $cat_name = $data['cat_name'];
        $cat_des = $data['cat_des'];

        $query = "INSERT INTO category(cat_name,cat_des) VALUE ('$cat_name','$cat_des')";
        if(mysqli_query($this->conn,$query)){
            return "Category added successfully";
        }

    }
    public function display_category(){
        $query = "SELECT * FROM category";
        if(mysqli_query($this->conn,$query)){
            $category =mysqli_query($this->conn,$query);
            return $category;
        }
    }
    public function delete_category($id){
        $query = "DELETE FROM category WHERE cat_id ='$id' ";
        if(mysqli_query($this->conn , $query)){
            return "Category deleted successfully!";
        }
    }
    public function add_post($data){
        $postTitle = $data['post_title'];
        $postContent = $data['post_content'];
        $postImg = $_FILES['post_img']['name'];
        $postImgTemp = $_FILES['post_img']['tmp_name'];
        $postCategory = $data['post_cat'];
        $postSummary = $data['post_summary'];
        $postTag = $data['post_tag'];
        $postStatus = $data['post_status'];

        $query = "INSERT INTO post (post_title,post_content,post_img,post_cat,post_author,
        post_comment_count,post_summary,post_tag,post_status,post_date) VALUES ('$postTitle','$postContent','$postImg',$postCategory,
        'Nayeem',3,'$postSummary','$postTag','$postStatus',now() )";
        if(mysqli_query($this->conn,$query)){
            move_uploaded_file($postImgTemp,'../upload/'.$postImg);
            return "Post Added Successful";
        }

    }
    public function display_post(){
        $query = "SELECT * FROM post_with_category LIMIT 3";
        if(mysqli_query($this->conn, $query)){
            $post = mysqli_query($this->conn, $query);
            return $post;
        }
    }
    public function display_post_public(){
        $query = "SELECT * FROM post_with_category  WHERE post_status=1 LIMIT 5";
        if(mysqli_query($this->conn, $query)){
            $post = mysqli_query($this->conn, $query);
            return $post;
        }
    }
    public function edit_img($data){
       $id = $data ['editimg_id'];
       $imgname = $_FILES['change_img']['name'];
       $tmp_name = $_FILES['change_img']['tmp_name'];

       $query = "UPDATE post SET post_img='$imgname' WHERE post_id=$id";
       if(mysqli_query($this->conn, $query)){
        move_uploaded_file($tmp_name,'../upload/'.$imgname);
        return "Thumbnail Updated SuccessFully!";
       }
    }
    public function edit_post($id){
        $query = "SELECT * FROM post_with_category WHERE post_id=$id";
        if(mysqli_query($this->conn,$query)){
            $post_info= mysqli_query($this->conn,$query);
            $post = mysqli_fetch_assoc($post_info);
            return $post;
        }
    }
    public function update_post($data){
        $postTitle = $data['change_title'];
        $postContent = $data['change_content'];
        $postID = $data['editpost_id'];
      
        $query = "UPDATE post SET post_title='$postTitle',post_content='$postContent' WHERE post_id=$postID";
        if(mysqli_query($this->conn,$query)){
            return "Post Updatet Successfully!";
        }

    }
    public function SportsCategory(){
        $query = "SELECT * FROM post_with_category WHERE cat_name='Sports' ";
        if(mysqli_query($this->conn, $query)){
            $post = mysqli_query($this->conn, $query);
            return $post;
        }
    }
    public function NatureCategory(){
        $query = "SELECT * FROM post_with_category WHERE cat_name='Nature' ";
        if(mysqli_query($this->conn, $query)){
            $post = mysqli_query($this->conn, $query);
            return $post;
        }
    }
    public function ProgrammingCategory(){
        $query = "SELECT * FROM post_with_category WHERE cat_name='Programming' ";
        if(mysqli_query($this->conn, $query)){
            $post = mysqli_query($this->conn, $query);
            return $post;
        }
    }
    public function DeletePost($id){
        $query = "DELETE FROM post WHERE post_id ='$id' ";
        if(mysqli_query($this->conn , $query)){
            return "Post deleted successfully!";
        }
    }
}




?>