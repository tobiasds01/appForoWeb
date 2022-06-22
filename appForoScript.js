function porcentaje() {
    var num1 = document.getElementById("votosPos").value;
    var num2 = document.getElementById("total").value;

    document.getElementById("resultado")
        .value = Math.round((num1 * 100) / num2) + "%";
}

function cambiarEstado(elemento) {
    if(elemento.style.display == "" || elemento.style.display == "block") {
        elemento.style.display = "none";
      }
      else {
        elemento.style.display = "block";
      }
}

function cerrarEncuesta() {
    cambiarEstado(document.getElementById("encuestaEnProceso"));
    cambiarEstado(document.getElementById("resultadoPorcentajes"));
}

document.getElementById("cerrarEncuesta").onclick = cerrarEncuesta;