
function cal(){
		
	 	let n =document.getElementById('fac') 	;
	 	let resf =document.getElementById('resf');
	 	let r = 1;
	    let b =document.getElementById('ba');
	 	let p =document.getElementById('pot');
	 	let resp =document.getElementById('resp');    
	 	for(let i = n.value; i>0; i--){r *= i;}
	 	resf.innerText+=r;
	 	r = b.value;
	    for(let i = p.value; i>1; i--){r *= b.value;}
	    		
	    resp.innerText+=r; 
	   document.getElementById('reset').reset();

	   document.getElementById('resp').reset();
	 
}
 /* document.write("pot:" + pot(prompt("numero p1 : "),prompt("numero2 p: ")));
 document.write("Fac:" + fac(prompt("numero 1 : ")));
 document.write("suma:" + suma(prompt("numero 1 : "),prompt("numero2 : ")));*/