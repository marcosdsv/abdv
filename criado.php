<?php
include_once "conectar.php";
$email = filter_input(INPUT_POST,"email");
$senha = filter_input(INPUT_POST,"senha");
$sql = "INSERT INTO login(email, senha) VALUES ('$email', '$senha')";
$query = mysqli_query($conn, $sql);
if($query){
print "<script>";
print "alert('cadastrado');";
print "location='index.php'";
print "</script>";
}else{
print "<script>";
print "alert('não cadastrado');";
print "location='login.php'";
print "</script>";
}
?>