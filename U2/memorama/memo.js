
var pos = new Array( 
  {num: '1', estado: false}, {num: '2', estado: false}, 
  {num: '3', estado: false}, {num: '4', estado: false}, 
  {num: '5', estado: false}, {num: '6', estado: false}, 
  {num: '7', estado: false}, {num: '8', estado: false}, 
  {num: '1', estado: false}, {num: '2', estado: false}, 
  {num: '3', estado: false}, {num: '4', estado: false}, 
  {num: '5', estado: false}, {num: '6', estado: false}, 
  {num: '7', estado: false}, {num: '8', estado: false} );
        
var intentos = 0;
var J1 = "";
var J2 = "";
var IJ1 = "";
var IJ2 = "";
var seg=0;
var min=3;


  function Timer(){
            nIntervId=setInterval(correTiempo,1000)
        }
        
        function correTiempo(){
            
            seg--;
            if(seg<0){
                min--;
                seg=59;
            }
            if(min==0 && seg==0){
                alert("Se acabo el tiempo")
                detener();
            }
            document.getElementById("timer").innerHTML="Timpo Restante "+min+":"+seg;
            
        }
function iniciar() {  
  var d = document.getElementById("juego");
  d.style.opacity = 1;

  pos.sort(function() {return Math.random() - 0.5});
  for ( var i = 1 ; i < 16 ; i++ ) {
    var po = pos[i].num;
    var d = document.getElementById( i.toString() );
    d.dataset.valor = po;
  }
  Timer();
};

function resetear () {
  pos.sort(function() {return Math.random() - 0.5});
  for ( var i = 1 ; i < 16 ; i++ ) {
    var po = pos[i].num;
    var d = document.getElementById( i.toString() );
    d.dataset.valor = po;
    colorCambio( i, 'while', '¿ :) ?');
  } 
}

function girar () {
  var evento = window.event;

  J2 = evento.target.dataset.valor;
  IJ2 = evento.target.id;


  if ( J1 !== "" ) {

    if ( J1 === J2 && IJ1 !== IJ2 && pos[parseInt(IJ2)].estado != true &&               pos[parseInt(IJ1)].estado != true) {
      
      pos[parseInt(IJ1)].estado = true;
      pos[parseInt(IJ2)].estado = true;

      colorCambio(IJ2, "grey", J2);
      vaciar();
      comprobar();
    }else if(IJ1 !== IJ2){
      var self = this;
      setTimeout(function(){
        colorCambio(self.IJ1, "while", "¿ :) ?")
        colorCambio(self.IJ2, "while", "¿ :) ?")
        vaciar()
      },200); 

      colorCambio(IJ2, "grey", J2);
    }
  } else if(J2 !== "valor") {

    colorCambio(IJ2, "grey", J2);

    J1 = J2;
    IJ1 = IJ2;
  }
};

function vaciar ()  {
  J1 = ""; 
  J2 = ""; 

  IJ1 = "";
  IJ2 = "";
}

function colorCambio (posicion, color, contenido) {
  document.getElementById(posicion.toString()).style.backgroundColor = color;
  document.getElementById(posicion.toString()).innerHTML = contenido;
}   

function comprobar () {
  var aciertos = 0;
  for( var i = 0 ; i < 16 ; i++ ){
    if ( pos[i].estado == true ) {
      aciertos ++;
    }

  }

  if(aciertos == 16){
    document.getElementById("juego").innerHTML = "GANASTE";
  }
}

function resetear () {
            pos.sort(function() { return Math.random() - 0.5});
            for ( var i = 1; i < 16 ; i++ ) {
                var po = pos[i].num;
                var d = document.getElementById( i.toString() );
                d.dataset.valor = po;
                colorCambio(i, 'while', '¿ :) ?');
            }
        }