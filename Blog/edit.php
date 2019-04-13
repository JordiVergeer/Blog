<?php
    include_once 'databaseconnection.php';
    error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <meta charset="UTF-8" />
    <title>Edit page</title>
</head>
<body>

<div id="header1">
<div class="LoginLogoutButton"> 
    <a href="index.php" id="LogoutButton">Logout</a> 
</div>
    <a>Jordi Vergeer's Blog</a>
</div>

<form action="" method="GET" id="editform">
<div class="ButtonGroup">
    <input id="UpdateButton" type="submit" name="submit" value="update"/>
    <input id="DeleteButton" type="submit" name="delete" value="delete"/>
    <button id="TerugButton" type="submit" formaction="http://localhost/blog/admin.php">Terug</button>
</div>
    <input type = "hidden" name = "id" value="<?php echo $_GET['id']; ?>" />
    <label for="title">Title</label><br>
    <input type="text" name="title" value="<?php echo $_GET['title']; ?>"><br>
    <label for="inhoud">Bericht</label>
    <textarea id="TextareaInhoud2" rows="4" cols="50" name="inhoud"><?php echo $_GET['inhoud']; ?></textarea>
</form>

</body>
</html>


<?php
if($_GET['submit'])
{
  $id = $_GET['id'];
  $title = $_GET['title'];
  $inhoud = $_GET['inhoud'];

  $query = "UPDATE posts SET title='$title' , inhoud='$inhoud' WHERE id='$id'";
  $data = mysqli_query($conn, $query);
  if($data)
  {
    echo "Record updated Succesfully";
    header("refresh:0.5; url=http://localhost/blog/admin.php");
  }
  else
  {
    echo "Record not Updated";
  }
}
?>

<?php 
if($_GET['delete'])
{
  $id = $_GET['id'];
  $title = $_GET['title'];
  $inhoud = $_GET['inhoud'];

  $query = "DELETE FROM posts WHERE id='$id'";
  $data = mysqli_query($conn, $query);
  if($data)
  {
    header("refresh:0.5; url=http://localhost/blog/admin.php");
  }
  else
  {
    echo "Record not Deleted";
  }
}
?>