window.onload = function() {
    agregarDatos();
};

function agregarDatos() {
    // Obtener los valores del formulario y generar el ticket
    var tipoServicio = document.getElementById('tipo-servicio').value;
    var montoServicio = document.getElementById('monto-servicio').value;
    var descuento = document.getElementById('descuento').value;
    var montoEfectivo = document.getElementById('monto-efectivo').value;
    var fecha = new Date().toLocaleDateString();
    var hora = new Date().toLocaleTimeString();

    // Crear el ticket
    var ticketHTML = '<h3>Ticket</h3>';
    ticketHTML += '<p>Titulo: Eme nutrucion</p>';
    ticketHTML += '<p>Direccion: Chilapa Alvarez calle 4 norte #### No. Colonia del dulce nombre</p>';
    ticketHTML += '<hr>';
    ticketHTML += '<p>Atendido por: <input type="text"></p>';
    ticketHTML += '<p>A la fecha de: ' + fecha + '</p>';
    ticketHTML += '<p>A la hora de: ' + hora + '</p>';
    ticketHTML += '<hr>';
    ticketHTML += '<div style="display: flex; justify-content: space-between;">';
    ticketHTML += '<div>';
    ticketHTML += '<p>Descripcion:</p>';
    ticketHTML += '<ul>';
    ticketHTML += '<li>Tipo de servicio: ' + tipoServicio + '</li>';
    ticketHTML += '<li>Monto del servicio: ' + montoServicio + '</li>';
    ticketHTML += '<li>Descuento del servicio: ' + descuento + '</li>';
    ticketHTML += '</ul>';
    ticketHTML += '</div>';
    ticketHTML += '<div>';
    ticketHTML += '<p>Precio:</p>';
    ticketHTML += '<ul>';
    // Calcular precio
    var precio = parseFloat(montoServicio) - parseFloat(descuento);
    ticketHTML += '<li>' + precio.toFixed(2) + '</li>';
    ticketHTML += '</ul>';
    ticketHTML += '</div>';
    ticketHTML += '</div>';
    ticketHTML += '<hr>';
    ticketHTML += '<p>Total: ' + precio.toFixed(2) + '</p>';
    ticketHTML += '<p>Pago en efectivo: ' + montoEfectivo + '</p>';
    ticketHTML += '<p>Cambio: ' + (parseFloat(montoEfectivo) - precio).toFixed(2) + '</p>';
    ticketHTML += '<p>¡Gracias!</p>';

    // Mostrar el ticket en la página
    document.getElementById('ticket').innerHTML = ticketHTML;
}

function limpiarDatos() {
    // Limpiar los campos del formulario y el ticket
    document.getElementById('formulario-ticket').reset();
    document.getElementById('ticket').innerHTML = '';
}

function volver() {
    // Redireccionar o hacer alguna acción para volver
    alert('Implementa la funcionalidad de volver');
}

function guardar() {
    // Realizar alguna acción para guardar los datos (puedes enviarlos a un servidor, etc.)
    alert('Implementa la funcionalidad de guardar');
}

function generarPDF() {
    var ticketElement = document.getElementById('ticket');

    html2canvas(ticketElement).then(function(canvas) {
        var imgData = canvas.toDataURL('image/png');
        var doc = new jsPDF();

        doc.addImage(imgData, 'PNG', 10, 10);
        doc.save('ticket.pdf');
    });
}
