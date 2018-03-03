<?php

include('conexao.php');
$email = $_REQUEST['usu'];
$senha = $_REQUEST['sen'];

$select = "select * from usuario where email='$email' && senha='$senha'";
$sqlQuery = mysqli_query($conexao, $select);
$result = mysqli_fetch_array($sqlQuery);
if($result['senha'] == $senha && $result['email'] == $email){
    session_start();
    $_SESSION['usuario'] = $result['apelido'];
    $_SESSION['senha'] = $result['senha'];
    echo"<span><font color='blue'>Seja bem vindo</font><p><font size='10'>",$_SESSION['usuario'],"</font></span>";
      //header("location: ../index.html");
}else{
  echo"<font color='red'>Usuário não cadastrado</font>";
}



mysqli_close($conexao);


?>
