// script.js

// Función para cambiar de pestaña
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tab-link");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Validación antes de enviar
document.getElementById('multiTabForm').onsubmit = function(e) {
    let inputs = document.querySelectorAll('.required-field');
    let valid = true;
    let primeraPestañaError = null;

    inputs.forEach(input => {
        if (input.value.trim() === "") {
            valid = false;
            input.classList.add('error');
            // Identificar en qué pestaña está el error para avisar al usuario
            if (!primeraPestañaError) {
                primeraPestañaError = input.closest('.tab-content').id;
            }
        } else {
            input.classList.remove('error');
        }
    });

    if (!valid) {
        e.preventDefault(); // Detener el envío
        alert("Por favor, completa todos los campos obligatorios en la pestaña: " + primeraPestañaError);
    }
};