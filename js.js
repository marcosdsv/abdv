function escolhertrabalho(){
var trabalha = document.getElementById("trabalha").value;

if(trabalha == "sim"){
document.getElementById("cargo").style.display = 'block';
document.getElementById("beneficio").style.display = 'none';
}else{
document.getElementById("cargo").style.display = 'none';
document.getElementById("beneficio").style.display = 'block';
}
if(trabalha == "0"){
document.getElementById("cargo").style.display = 'none';
document.getElementById("beneficio").style.display = 'none';
}

}