<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="screen" href="css/style.css">
    <script src="main.js"></script>
</head>
<body>
    <div id=LoginContainer>
            <a>Login</a> 
        <form action="LoginWaiting.php" method="POST">
            <label for="username">Username</label>
            <input name="username" type="text"><br>
            <label for="password">Password</label>
            <input name="password" type="password"><br>
            <input id="LoginButton2" type="submit" value="Login">
            <button id="TerugButton2" type="submit" formaction="http://localhost/blog/index.php">Terug</button>
        </form>
    </div>
</body>
</html>
