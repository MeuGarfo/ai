<?php
require './basic/basic.php';
inc([
    'auth',
    'db',
    'read'
]);
system('clear');
echo 'Digite o nome do administrador:'.PHP_EOL;
$nome=read();
system('clear');
echo 'Digite o email do administrador:'.PHP_EOL;
$email=read();
system('clear');
echo 'Digite a senha do administrador:'.PHP_EOL;
$senha=read();
system('clear');
$db=db();
$auth=auth($db);
$user=[
    'type'=>'admin',
    'name'=>$_ENV['ADMIN_NAME'],
    'email'=>$_ENV['ADMIN_EMAIL'],
    'password'=>$_ENV['ADMIN_PASSWORD']
];
$where=[
    'email'=>$user['email']
];
$usuarioExiste=$db->get("users","*",$where);
if($usuarioExiste){
    print 'O super usuário '.$user['name'].' já está cadastrado'.PHP_EOL;
}else{
    $result=$auth->signup($user);
    if($result){
        print 'Usuário '.$user['name'].' adicionado com sucesso'.PHP_EOL;
        var_dump($result);
        print PHP_EOL;
    }else{
        print 'Erro ao adicionar o usuário '.$user['name'].PHP_EOL;
        var_dump($db->last());
    }
}
