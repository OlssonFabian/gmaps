// Samling med butikernas lokalisering
let stores = [
    {
        lat: 55.599880,
        lng: 13.002460
    },
    {
        lat: 55.606620,
        lng: 13.020310
    },
    {
        lat: 55.600320,
        lng: 13.036200
    },
    {
        lat: 55.590510,
        lng: 13.027670
    },
    {
        lat: 55.604280,
        lng: 12.997930
    },
];

// Funktion som kallas av Google för att skapa vår karta
// Denna function anger vi i en callback parameter i script
function initMap() {
    // Sätt latitude och longitud i en variabel
    let pos = {
        lat: 55.604980,
        lng: 13.003822
    };
    // Instansiera en ny Google Maps com är centrerad på ovanstående kordinater
    let map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 12,
            center: pos,
            // gestureHandling: "none",
            // zoomControl: false,
            // disableDefaultUI: true
        }
    );
    // Loopa ut butikerna
    stores.forEach(element => {
        // Sätt ut en marker för varje butik
        var marker = new google.maps.Marker(
            {
                position: element,
                map: map
            }
        );
    });
}