<?php
inc([
    'method'
]);
$method=method();
if($method=='GET'){
    $data=[
        'title'=>"Entrar"
    ];
    view("não autenticado/signin",$data);
}
?>
