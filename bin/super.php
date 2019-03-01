<?php
require './basic/basic.php';
inc([
    'auth',
    'db',
    'read'
]);

system('clear');
$name=read('Digite o nome do administrador: ');
system('clear');
$email=read('Digite o email do administrador: ');
system('clear');
$password=read('Digite a senha do administrador: ');
system('clear');
$db=db();
$auth=auth($db);
$user=[
    'type'=>'admin',
    'name'=>$name,
    'email'=>$email,
    'password'=>$password
];
$where=[
    'email'=>$user['email']
];
$usuarioExiste=$db->get("users","*",$where);
if($usuarioExiste){
    print 'O super usuário '.$user['name'].' já está cadastrado'.PHP_EOL;
    var_dump($user);
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
