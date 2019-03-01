<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="style.css" id="css_master">
    <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon" />
    <title><?php e($title); ?></title>
</head>
<body>
    <div id="container">
        <?php view('não autenticado/topo'); ?>
        <h2><?php e($title); ?></h2>
        <form class="" action="/signin" method="post">
            Email<br>
            <input type="text" name="email" value=""><br>
            Senha<br>
            <input type="password" name="password" value=""><br>
            <button type="submit"><?php e($title); ?></button>
        </form>
    </div>
</body>
