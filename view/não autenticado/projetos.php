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
        <h2>Projetos</h2>
        <ul>
            <li>
                <a href="http://hackerbrasil.com" target="_blank">hackerbrasil.com</a> -
                Agregador de notícias em português sobre TI
            </li>
            <!--<li><a href="http://pastecsv.com" target="_blank">pastecsv.com</a> -
            Compartilhador de arquivos CSV</li>-->
        </ul>
    <?php view('não autenticado/menu'); ?>
</div>
</body>
