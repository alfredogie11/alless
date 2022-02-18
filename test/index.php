<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>

    <div class="container-center-column">


        <form action="indexProcess.php" method="post" id="login-form">
            <img src="logo.jpg" width="280" height="320">
            <input type="text" name="uname" placeholder="username" required>
            <input type="password" name="pwd" placeholder="password" required>
            <button type="submit" class="major-button">Login</button>
        </form>
    </div>

</body>
</html>