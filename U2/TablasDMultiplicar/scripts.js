function Tablas(){
    let colum = document.getElementById("number").value;
    let fila = document.getElementById("multiplicador").value;
    let content = document.getElementById("cont2");

    content.innerHTML = "";

    let table = "<table>";
    let dato = 0;
    for (let i = 0; i <= fila; i++) {
        table += "<tr>";
        dato = colum*i;
        for (let g = 1; g <= 1; g++) {
            table += "<td>" +colum + "</td>";
            table += "<td>" + " x " + "</td>"; 
            table += "<td>" + i + "</td>";
            table += "<td>" + " = " + "</td>";
            table += "<td>" +dato + "</td>";   

        }
        table += "</tr>";
    }
    table += "</table>";
    content.innerHTML = table;

}