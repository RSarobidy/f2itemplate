var map = L.map('map').setView([48.825, 3.08], 12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);

var marker = L.marker([48.825, 3.08]).addTo(map);

marker.bindPopup("ça sent le coulommiers").openPopup();

