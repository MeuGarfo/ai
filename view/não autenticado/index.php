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
        <h1 class="center">
            Anderson Ismael
        </h1>
        <?php view('não autenticado/menu'); ?>
        <hr>
        <h2>Blog</h2>
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
