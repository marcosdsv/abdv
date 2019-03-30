//<!-- logar.js --!>
// JavaScript Document
function ativarcampo(div){
	div.style.backgroundColor="#FF9999";
	div.style.border="thin dotted #FF0000";
	var id_span=div.id+"_span";
	var obj_span=document.getElementById(id_span);
	obj_span.style.display="block";
	var id_field=div.id+"_field";
	var obj_field=document.getElementById(id_field);
	obj_field.style.backgroundColor="#FFFFCC";
}

function liberarcampo(div){
	div.style.backgroundColor="";
	div.style.border="";
	var id_span=div.id+"_span";
	var obj_span=document.getElementById(id_span);
	obj_span.style.display="none";
	var id_field=div.id+"_field";
	var obj_field=document.getElementById(id_field);
	obj_field.style.backgroundColor="#C0C0C0";
}