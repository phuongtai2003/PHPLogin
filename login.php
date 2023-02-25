<?php 
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <script src = "./js/index.js"></script>
    <div class = "body-container">
        <form action="" method="post">
            <div class="login-form">
                <h1>LOGIN PHP</h1>
                <div class="form-group">
                <label for="username">Username</label>
                <input
                    class="form-control"
                    type="text"
                    name="username"
                    id="username"
                    placeholder="Enter your username"
                    value = <?= $username ?>
                    disabled
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
                    disabled
                />
                </div>
                <div class = "message"></div>
                <button id="submit-button" type="button">Submit</button>
            </div>
        </form>
        <div class="test-login">
            <p>User: Test & Password: Test.1234 for Testing Login</p>
        </div>
    </div>
</body>
</html>