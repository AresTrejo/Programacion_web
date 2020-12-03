function guardar(){
   
   	let proid = document.getElementById("producto");
   	let protx = document.getElementById("producto");
	let selected = protx.options[protx.selectedIndex].text;
    let pre = document.getElementById("precio");
    let cant = document.getElementById("ca");
    let iba =document.getElementById('iva');
    let sub =document.getElementById('sub');
    let total =document.getElementById('total');
    let fila="<tr><td>"+proid+"<tr><td>"+selected+"</td><td>"+cant+"</td><td>"+pre+"</td></tr>";
    var sub1 = pre.value;
    
    sub.innerHTML+=sub1;
    var iba1 =(.16 * sub1)/100;
    iba.innerHTML+=iba1;
    
    var total1 = (sub1 + iba1);
    total.innerHTML+=total1;
    let btn = document.createElement("TR");
   	btn.innerHTML=fila;
    document.getElementById("tab").appendChild(btn);
}