<?php 
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="login-form">
            <h1>LOGIN FORM</h1>
            <div class="form-group">
            <label for="username">Username</label>
            <input
                class="form-control"
                type="text"
                name="username"
                id="username"
                placeholder="Enter your username"
                value = <?= $username ?>
            />
            </div>
            <div class="form-group">
            <label for="pwd">Password</label>
            <input
                class="form-control"
                type="text"
                name="pwd"
                id="pwd"
                placeholder="Enter your password"
                value = <?= $pwd ?>
            />
            </div>
            <button id="submit-button" type="submit">Submit</button>
        </div>
    </form>


</body>
</html>