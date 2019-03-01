<?php
require './basic/basic.php';
inc([
    'db',
    'migrate'
]);
system("clear");
$dbCfg=require ROOT.'config/db.php';
if(createDB($dbCfg)){
    print 'db criado com sucesso'.PHP_EOL;
    migrar_tabelas();
}else{
    migrar_tabelas();
}
function migrar_tabelas(){
    $db=db();
    if(migrateAll($db)){
        echo 'migração ok'.PHP_EOL;
    }
}
