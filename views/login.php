<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="loginarea">
        <form action="" method="post">
            Seu núnero:<br>
            <input type="text" name="number" id=""><br><br>
            Sua senha:<br>
            <input type="text" name="password" id=""><br><br>

            <input type="submit" value="Entrar">
        </form>
    </div>

    <?php if (!empty($msg)): ?>
        <h2>
            <?php echo $msg ?>
        </h2>
    <?php endif; ?>
</body>

</html>