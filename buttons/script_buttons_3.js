document.addEventListener("DOMContentLoaded", function() {
    // Obtener el elemento input
    var input = document.getElementById("miBoton3");

    // Agregar un evento click al input
    input.addEventListener("click", function() {
        // Redirigir a la URL deseada al hacer clic
        window.location.href = "multi.php";
    });
});
