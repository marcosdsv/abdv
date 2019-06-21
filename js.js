function imprimir(){
var imprimir = window.print();
alert(imprimir);
}
function cancelar(){
var cancelar = confirm("Tem serteza que deseja cancelar o cadastro?, pressione enter para continuar");
if(cancelar == '1'){
window.location.href="visualizar.php";
}
}
function trabalha(){
var trabalha = document.getElementById("sim").selected;

alert(trabalha);


}