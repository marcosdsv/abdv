<?php
include_once "conectar.php";
$tabela = "select * from tipodeficiencia";
$deletado = mysqli_query($conn, $tabela);
while($dados = mysqli_fetch_assoc($deletado)){
	echo $dados['tipodeficiencia'];
}
?>