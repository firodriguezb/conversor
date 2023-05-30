function togglePlaza(selectElement) {
    var plazaSelect = document.getElementById("plaza");
    var cpnValue = selectElement.value;

    plazaSelect.disabled = cpnValue === "";

    // Reiniciar la selección en el menú "plaza"
    plazaSelect.selectedIndex = 0;

    // Habilitar o deshabilitar opciones según el valor seleccionado en "cpn"
    if (cpnValue === "003") {
        // Solo se permite seleccionar la opción "SERPRO"
        enableOptions(plazaSelect, ["SERPRO"]);
        disableOptions(plazaSelect, ["PLANTA", "EVEN"]);
    } else if (cpnValue === "001") {
        // Deshabilitar la opción "SERPRO"
        enableOptions(plazaSelect, ["PLAZAS", "EVEN"]);
        disableOptions(plazaSelect, ["SERPRO"]);
    } else {
        // Habilitar todas las opciones
        enableAllOptions(plazaSelect);
    }
}

function disableOptions(selectElement, optionsToDisable) {
    for (var i = 0; i < selectElement.options.length; i++) {
        var option = selectElement.options[i];
        if (optionsToDisable.includes(option.value)) {
            option.disabled = true;
        }
    }
}

function enableOptions(selectElement, optionsToEnable) {
    for (var i = 0; i < selectElement.options.length; i++) {
        var option = selectElement.options[i];
        if (optionsToEnable.includes(option.value)) {
            option.disabled = false;
        }
    }
}
