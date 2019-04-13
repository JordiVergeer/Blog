<?php include_once 'databaseconnection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
            $id= $row["id"];
            session_start();
            $_SESSION["id"] = id;
    }
    header("Location: admin.php");
}
else
{
    echo "Invalid email or password you dum dum";
    header("refresh:2.0; url=http://localhost/blog/index.php");

}

?>
