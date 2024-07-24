

document.getElementById('formulario').addEventListener('submit', function(event) {
    var name = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;
    var telefono = document.getElementById('telefono').value;
    
    if (nombre === '' || email === '' || telefono === '') {
        event.preventDefault();
        alert('Todos los campos son obligatorios.');
    }
});