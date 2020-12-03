let pais = document.getElementById("pais");
let estado = document.getElementById("estado");
let ciudades = document.getElementById("ciudades");

function cargarDatos(selector, selectorAnterior, tabla, id){
    let xhr = new XMLHttpRequest();
    let datos = selectorAnterior.value;

    selector.disabled = false;
    xhr.open('GET', 'servidor.php?datos='+datos+'&tabla='+tabla+'&id='+id,true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            let json = JSON.parse(xhr.responseText);

            for(let key in json){
                let option = document.createElement('option');
                option.text = key
                option.setAttribute('value', json[key])
                selector.add(option);
            }
        }
    }
    xhr.send();
}

function eOpciones(selector){
    for(let i=selector.options.length -1; i>=0; i--){
        selector.remove(i);
    }
}

estado.addEventListener("change", function() {
    eOpciones(ciudades)
    cargarDatos(ciudades, estado, 'ciudades', 'id_estado')
})

pais.addEventListener("change", function(){
    eOpciones(estado)
    eOpciones(ciudades)
    cargarDatos(estado, pais, 'estado', 'id_pais')
})