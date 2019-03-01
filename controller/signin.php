<?php
inc([
    'method'
]);
$method=method();
if($method=='POST'){

}else{
    imprimir_tela();
}

function autenticar(){
    
}

function imprimir_tela($data=false){
    $data['title']='Entrar';
    view("não autenticado/signin",$data);
}
?>
