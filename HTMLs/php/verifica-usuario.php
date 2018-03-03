<?php
include("conexao.php");
$apelido = $_REQUEST['a'];
$email = $_REQUEST['e'];
$nome = $_REQUEST['n'];
$senha = $_REQUEST['s'];
$select = "select apelido, email from usuario";
$sqlQuery = mysqli_query($conexao, $select);
$cont1=0;
$cont2=0;
while($result = mysqli_fetch_array($sqlQuery)){
    if($result['apelido']==$apelido){
        $cont1++;
    }
    if($result['email'] == $email){
      $cont2++;
    }
}
if($cont1 > 0 || $cont2 >0){
    echo" Apelido já cadastrado! ";
}
if($cont2 > 0){
  echo" Email já cadastrado!";
}
if($cont1 == 0 && $cont2 == 0){
  $insertSql = "insert into usuario(nome,apelido,email,senha) values('$nome','$apelido','$email','$senha')";
  mysqli_query($conexao,$insertSql);
  
}
mysqli_close($conexao);
?>
