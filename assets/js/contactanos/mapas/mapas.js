$(document).ready(function () {
    cargarMapaSitio();
    $('#volver-arriba').click(function () { 
        window.scrollTo(0, 0);
    });
});

function cargarMapaSitio() {

    var map = L.map('mapaSitio').setView([4.7659888,-74.0288298], 18);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 23,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([4.7659888,-74.0288298]).addTo(map);
    marker.bindPopup("<b> Multiservis.com </b><br> Encuéntranos aquí <br> Carrera 8 No. 189-08 Norte de Bogotá").openPopup();
}