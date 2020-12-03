function calcularIMC(){
	let vPeso =document.getElementById('peso');
	let vAltura =document.getElementById('altura');
	let vIMC =document.getElementById('imc');
	let vLec =document.getElementById('lec');

	let imc= Math.round (vPeso.value/(vAltura.value*vAltura.value)*100)/100;

	

	vIMC.innerText+=imc;
}