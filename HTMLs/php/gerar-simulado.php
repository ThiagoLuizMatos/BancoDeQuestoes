<html>
<head>
  <title></title>
  <meta charset='utf-8'>
</head>
<body>
</body>
</html>

<?php
include('conexao.php');
include('minhas_classes.php');
$nivel = $_REQUEST['n'];
$ano = $_REQUEST['a'];
$disciplina = $_REQUEST['d'];
$banca = $_REQUEST['b'];



$select ="select t.texto, a.a, a.b, a.c, a.d, a.e, d.codigo, d.nivel, b.nome as 'nome_banca', dis.nome as 'disciplina', d.ano_de_lancamento as 'ano' from texto t, assertiva a, Descricao d, Banca b,Disciplina dis where t.codigo=a.codigo && a.codigo=d.codigo && b.codigo=d.cod_banca && dis.codigo = d.cod_disciplina";

//$select = "select texto from texto";
if($nivel != 'aleatorio'){
      $select = $select ." && d.nivel='$nivel'";
}

if($ano != 'aleatorio'){
    $select = $select . " && d.ano_de_lancamento='$ano'";
}
if($disciplina != 'aleatorio'){
    $select = $select ." && d.cod_disciplina='$disciplina'";
}
if($banca != 'aleatorio'){
   $select = $select . " && d.cod_banca='$banca'";
}

//$select ="select d.codigo as 'cod' from Descricao d";
$result = mysqli_query($conexao, $select);
$max = 0;
/*
$instituicao = new Instituico();
$banca = new Banca();
$descricao =  new Descricao();
$assertiva = new Assertiva();
$descricao_simulado = new Descrica();
$texto = new TextoEscrito();
$textoImagem = new TextoImagem();
$certoErrado =  new CertoErrado();
$afirmativas = new Afirmativas();
$simulado = new Simulado();
$usuario = new Usuario();
*/

while($row = mysqli_fetch_array($result)){
  $max++;
  echo "<strong> Banca [".$row['nome_banca']."]"."&nbsp;&nbsp;&nbsp; Nível[".$row['nivel']."]&nbsp;&nbsp;&nbsp; Disciplina[".$row['disciplina']."]&nbsp;&nbsp;&nbsp; Ano[".$row['ano']."]</strong>".
  "<br><br><font color='blue' size='4'>".($max).")</font>&nbsp;&nbsp;".$row['texto']."<br><br> <input type='radio' id='r1' name='resp".$max."'> )&nbsp;&nbsp;".$row['a']."<br><br>
  <input type='radio' id='r2'name='resp".$max."'> )&nbsp;&nbsp;".$row['b']."<br><br> <input type='radio' id='r3' name='resp".$max."'> )&nbsp;&nbsp;".$row['c']."<br><br> <input type='radio' id='r4' name='resp".$max."'> )&nbsp;&nbsp;".$row['d'].
  "<br><br> <input type='radio' id='r5' name='resp".$max."'> )&nbsp;&nbsp;".$row['e']."<br><br><br>";
  //$descricao = new Descricao($result['d.codigo'],$result['d.ano'],$result['b.nome'],$result['d.nivel'],$result['disc.nome']);
  //$afirmativas = new Afirmativas($result['a'], $result['b'],$result['c'],$result['d'],$result['e']);
}
$random =  rand(0,$max);
//echo($random);
mysqli_close($conexao);

?>
