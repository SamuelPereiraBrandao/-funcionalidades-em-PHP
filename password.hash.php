<?php 

$senha = "123456";
$senha_db = '$2y$10$H6QKmb13JQAiFZ6GhExaiufL.mX8/JrJR/fa389YIW4Qe3kCbL2zi';
if(password_verify($senha,$senha_db)){
    echo "Senha correta! <br>";
}else{
    echo "Senha Inválida!";
}

$options = [
    'cost' => 10,
];

$senhasegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo "Senha hash = ".$senhasegura;

?>