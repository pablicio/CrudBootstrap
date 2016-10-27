<?php

$nome = $_POST['nome'];
echo "nada".$_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = mysql_query("INSERT INTO tbl_pablicio (nome, email, telefone) VALUES ($nome, $email, $telefone) ");
if($sql){
    echo 'dados gravados com sucesso!!';
}  else {
    echo 'Erro ao gravar dados';
}
?>
<a href="pablicio">Dados</a>