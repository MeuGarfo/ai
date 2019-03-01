<?php
require './basic/basic.php';
inc([
    'auth',
    'db'
]);

function read ($prompt = '') {
    if ( function_exists('readline') ) {
        $line = trim(readline($prompt));
        if (!empty($line)) {
            readline_add_history($line);
        }
    } else {
        echo $prompt;
        $line = trim(fgets(STDIN));
    }
    return $line;
}

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
