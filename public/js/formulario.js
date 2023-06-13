// Función para habilitar o deshabilitar opciones en el menú "plaza"
function togglePlaza(selectElement) {
    var plazaSelect = document.getElementById("plaza");
    var cpnValue = selectElement.value;

    // Habilitar todas las opciones
    enableAllOptions(plazaSelect);

    if (cpnValue === "003") {
        // Deshabilitar las opciones "PLANTA" y "EVEN"
        disableOptions(plazaSelect, ["PLANTA", "EVEN"]);
    } else if (cpnValue === "001") {
        // Deshabilitar la opción "SERPRO"
        disableOptions(plazaSelect, ["SERPRO"]);
    }
}

// Función para deshabilitar opciones en el menú "plaza"
function disableOptions(selectElement, optionsToDisable) {
    for (var i = 0; i < selectElement.options.length; i++) {
        var option = selectElement.options[i];
        if (optionsToDisable.includes(option.value)) {
            option.disabled = true;
        }
    }
}

// Función para habilitar todas las opciones en el menú "plaza"
function enableAllOptions(selectElement) {
    for (var i = 0; i < selectElement.options.length; i++) {
        var option = selectElement.options[i];
        option.disabled = false;
    }
}

// Función para limpiar los campos de selección y recargar la página
function limpiarCamposYRecargar() {
    document.getElementById("cpn").selectedIndex = 0;
    document.getElementById("periodo").selectedIndex = -1;
    document.getElementById("plaza").selectedIndex = 0;
    location.reload(); // Recargar la página actual
}

// Agregar un evento al formulario para limpiar los campos y recargar la página después de enviarlo
document.getElementById("formulario").addEventListener("submit", function (event) {
    event.preventDefault();
    limpiarCamposYRecargar();
    event.target.reset();
});
