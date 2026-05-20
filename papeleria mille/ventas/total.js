function calcularTotal() {
    // Obtener los valores de los campos de cantidad y valor
    var cantidad = document.getElementById("cantidad").value;
    var valor = document.getElementById("valor").value;

    // Verificar que los campos no estén vacíos
    if (cantidad && valor) {
        // Calcular la multiplicación
        var total = cantidad * valor;

        // Mostrar el resultado en el campo de descripción
        document.getElementById("descripcion").value = total;
    } else {
        // Limpiar el campo de descripción si faltan datos
        document.getElementById("descripcion").value = "";
    }
}
