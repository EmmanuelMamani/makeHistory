// Obtener los elementos
var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");
var closeBtn = document.getElementById("closeModalBtn");
var inputField = document.getElementById("classCode");

// Cuando el usuario hace clic en el botón, abrir el modal
btn.onclick = function() {
    modal.style.display = "block";
    inputField.value = ""; // Limpiar el campo de entrada
}

// Cuando el usuario hace clic en el botón "Cancelar", cerrar el modal
closeBtn.onclick = function() {
    modal.style.display = "none";
}

// Cuando el usuario hace clic fuera del modal, cerrarlo
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Cuando el usuario hace clic en el botón "Unirse", redirigir a la página de Literatura
joinClassBtn.onclick = function() {
    // Aquí puedes validar el código de la clase si es necesario
    window.location.href = "literature.html";
}

