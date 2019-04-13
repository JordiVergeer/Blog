<?php 

$con = mysqli_connect('127.0.0.1','root','' );

if(!$con){
echo "Not Connected To Server";
}

if(!mysqli_select_db($con, 'db_blog')){
    echo 'Database Not selected';
}

$title = $_POST['title'];
$inhoud = $_POST['inhoud'];

$sql = "INSERT INTO posts (title, inhoud) VALUES ('$title','$inhoud')";

if(!mysqli_query($con,$sql)){
    echo 'Not Inserted';
}
else{
    echo 'Inserted';
}

header("refresh:0.5; url=http://localhost/blog/admin.php")



?>