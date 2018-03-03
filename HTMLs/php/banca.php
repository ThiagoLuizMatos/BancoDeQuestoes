
<html>
<head>
  <title></title>
  <meta charset='UTF-8'>
</head>
<body>
<?php
include("conexao.php");
$select ="select * from Banca";
$sql = mysqli_query($conexao, $select);
?>
    <option value="aleatorio">Aleatório</option>
    <?php
        while($result = mysqli_fetch_array($sql)){
        ?>
        <option value=<?php echo $result['codigo']; ?> > <?php echo $result['nome']?></option>
        <?php } ?>
<?php mysqli_close($conexao); ?>
</body>
</html>
