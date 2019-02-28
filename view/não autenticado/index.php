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
        <?php view('não autenticado/menu'); ?>
        <hr>
        <div class="center">
            <img src="favicon.jpg" width="150" height="150">
            <p>Bem vindo(a) ao meu site.</p>
            <p>Meu nome é Anderson Ismael, sou progrador PHP.</p>
        </div>
        <b>Posts</b>
        <ul>
            <li>
                <a href="1.html">
                    10 mil links no Hacker Brasil
                </a>
            </li>
        </ul>
        <hr>
        <?php view('não autenticado/menu'); ?>
    </div>
</body>
