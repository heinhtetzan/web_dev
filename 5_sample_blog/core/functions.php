<?php

// common start

    function alert($data,$color="danger"){
        return "<p class='alert alert-$color'>$data</p>";
    }

    function runQuery($sql){
        if(mysqli_query(con(),$sql)){
            return true;
        }else{
            die("Query Fail : ".mysqli_error());
        }
    }

    function fetch($sql){
        $query = mysqli_query(con(),$sql);
        $row  = mysqli_fetch_assoc($query);
        return $row;
    }

    function fetchAll($sql){
        $query = mysqli_query(con(),$sql);
        $rows = [];
        while ($row = mysqli_fetch_assoc($query)){
            array_push($rows,$row);
        }
        return $rows;
    }

    function redirect($l){
        header("location:$l");
    }

    function linkTo($l){
        echo "<script>location.href='$l'</script>";
    }

    function showTime($timestamp,$format = "d-m-y"){
        return date($format,strtotime($timestamp));
    }

    function countTotal($table){
        $sql = "SELECT COUNT(id) FROM $table WHERE 1";
        $total = fetch($sql);
        return $total['COUNT(id)'];
    }

    function short($str,$length="100"){
        return substr($str,0,$length)."...";
    }

    function textFilter($text){
        $text = trim($text);
        $text = htmlentities($text,ENT_QUOTES);
        $text = stripcslashes($text);
        return $text;
    }



// common end

// auth start

function register(){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    if($password == $cpassword){

        $sPass = password_hash($password,PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$sPass')";

        if(runQuery($sql)){
            redirect("login.php");
        }

    }else{

        return alert("Password don't match");

    }

}

function login(){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $query = mysqli_query(con(),$sql);
    $row = mysqli_fetch_assoc($query);

    if(!$row){

        return alert("Email or Password don't match");

    }else{

        if(!password_verify($password,$row['password'])){

            return alert("Email or Password don't match");

        }else{
            session_start();
            $_SESSION['user'] = $row;
            redirect("dashboard.php");

        }

    }
}

// auth end

// user start

    function user($id){
        $sql = "SELECT * FROM users WHERE id = $id";
        return fetch($sql);
    }

// user end

// category start

    function categoryAdd(){

        $title = $_POST['title'];
        $user_id = $_SESSION['user']['id'];

        $sql = "INSERT INTO categories (title,user_id) VALUES ('$title','$user_id')";

        if(runQuery($sql)){
            linkTo("category_add.php");
        }

    }

    function category($id){
        $sql = "SELECT * FROM categories WHERE id = $id";
        return fetch($sql);
    }

    function categories(){
        $sql = "SELECT * FROM categories";
        return fetchAll($sql);
    }

    function categoryDelete($id){
        $sql="DELETE FROM categories WHERE id = $id";
        return runQuery($sql);

    }

    function categoryUpdate(){
        $title = $_POST['title'];
        $id = $_POST['id'];
        $sql = "UPDATE categories SET title='$title' WHERE id=$id";
        return runQuery($sql);
    }

// category end

// post start

    function postAdd(){

        $title = textFilter($_POST['title']);
        $description = textFilter($_POST['description']);
        $category_id = $_POST['category_id'];
        $user_id = $_SESSION['user']['id'];

        $sql = "INSERT INTO posts (title,description,category_id,user_id) VALUES ('$title','$description','$category_id','$user_id')";

        if(runQuery($sql)){
            linkTo("post_add.php");
        }

    }

    function post($id){
        $sql = "SELECT * FROM posts WHERE id = $id";
        return fetch($sql);
    }

    function posts(){
        $sql = "SELECT * FROM posts";
        return fetchAll($sql);
    }

    function postDelete($id){
        $sql="DELETE FROM posts WHERE id = $id";
        return runQuery($sql);

    }

    function postUpdate(){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category_id = $_POST['category_id'];
        $id = $_POST['id'];

        $sql = "UPDATE posts SET title='$title',category_id='$category_id',description='$description' WHERE id=$id";

        return runQuery($sql);

    }



// post end
