<?php

// 新規登録
require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Signup();
$app->run();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <form action="" method="post" id="signup">
        <p><input type="text" name="email" placeholder="email"></p>
        <p><input type="password" name="password" placeholder="password"></p>
        <p><input type="submit" onclick="document.getElementById('signup').submit();" value="Sign Up"></p>
        <p><a href="login.php">log in</a></p>
    </form>
</body>

</html>
