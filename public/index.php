<?php
//Anderson Ismael
//28 de fevereiro de 2019
require '../basic/basic.php';
inc([
    'e',
    'controller',
    'segment',
    'view'
]);
$segmento=segment();
$nome_do_controller=$segmento[1];
if($nome_do_controller=='/'){
    $nome_do_controller='index';
}
$arquivo_do_controller=ROOT.'controller/'.$nome_do_controller.'.php';
if(file_exists($arquivo_do_controller)){
    controller($nome_do_controller);
}else{
    controller('not_found');
}
