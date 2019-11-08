// Samling med butikernas lokalisering
let stores = [
  {
    lat: 55.59988,
    lng: 13.00246
  },
  {
    lat: 55.60662,
    lng: 13.02031
  },
  {
    lat: 55.60032,
    lng: 13.0362
  },
  {
    lat: 55.59051,
    lng: 13.02767
  },
  {
    lat: 55.60428,
    lng: 12.99793
  }
];

// Funktion som kallas av Google för att skapa vår karta
// Denna function anger vi i en callback parameter i script
function initMap() {
  // Sätt latitude och longitud i en variabel
  let pos = {
    lat: 55.60498,
    lng: 13.003822
  };
  // Instansiera en ny Google Maps com är centrerad på ovanstående kordinater
  let map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: pos,
    disableDefaultUI: true
    // gestureHandling: "none",
    // zoomControl: false,
    // disableDefaultUI: true
  });
  // Loopa ut butikerna
  stores.forEach(element => {
    // Sätt ut en marker för varje butik
    var marker = new google.maps.Marker({
      position: element,
      map: map,
      animation: google.maps.Animation.DROP
    });
  });
}
