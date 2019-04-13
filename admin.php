<?php
    include_once 'databaseconnection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="screen" href="css/style.css">
</head>
<body>

<div id="header1">
<div class="LoginLogoutButton"> 
    <a href="index.php" id="LogoutButton">Logout</a> 
</div>
    <a>Jordi Vergeer's Blog</a>
</div>
<div id="header2">
    <h2>Posts</h2>
</div>

<div id="blad">

<?php include_once 'databaseconnection.php';


$query ="SELECT * FROM posts ORDER BY id DESC ";
$result = $conn->query($query);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $id=$row['id']. "<br>";
        $title=$row['title']. "<br>";
        $inhoud=$row['inhoud']. "<br>";
        echo "<div id='title'>" . $title ."</div>";
        echo "<div id='inhoud'>" . $inhoud . "<button id='EditButton' onclick='window.location.href = `edit.php?id=$row[id]&title=$row[title]&inhoud=$row[inhoud]`;'>Edit</button></div>";
    }
} else {
    echo "No data :(";
}

?>

</div>


<div id="formdiv">
<form action="insert.php" method="POST">
    <label for="title">Title</label>
    <input name="title" size="50"><br>
    <label for="inhoud">Bericht</label>
    <textarea id="TextareaInhoud1" rows="4" cols="50" name="inhoud"></textarea>
    <div id=EditButtonDiv>
    <input id="AdminEditButton" type="submit" value="oke">
    </div>
</form>
</div>

</body>
</html>