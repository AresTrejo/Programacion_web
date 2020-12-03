function tab(){
	let num = document.getElementById('tabla').value;
	let res = document.getElementById('resultados').value;
	let con = document.getElementById('m');
	con.innerHTML ="";
	let t="<table>";
	 if  (num<1 || num > 50){
	 	 window.alert("En el campo tabla el valor debe de estar en un rango entre 1 y 50");

	 }else{

	 	for(var i=1; i<=res;i ++){

	 	m=num*i;

	 	document.write(num + "*" + i + "=" + m + "<br>");
	 }

	 }
	 if (res<1 || res > 20){
	 	window.alert("En el campo resultado el valor debe de estar en un rango entre 1 y 20");

	 }else{
	 	for(var i=1; i<=res;i ++){
	 	m=num*i;
	 	con.innerHTML(num + "*" + i + "=" + m + "<br>");
	 }
	 }
	 
}