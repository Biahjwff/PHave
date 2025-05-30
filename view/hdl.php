<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Mapa com Leaflet</title>

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin="" />
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    #map {
      height: 190px;
      width: 190px;
      border: 1px solid #ccc;
      box-shadow: 8px 8px 0px rgba(170, 143, 22, 0.39); /* sombra! */
    }

    #sombra {
         box-shadow: 12px 12px 0px rgb(255, 255, 255); /* sombra! */
    }

    #sombra1 {
         box-shadow: -12px 12px 0px rgb(255, 255, 255); /* sombra! */
    }
  </style>
</head>
<body class="">
  <!-- Container externo -->
  <div class="bg-black flex items-center justify-center min-h-screen">

    <div id="sombra1" class="bg-purple-700 m-24 pt-32 pb-28 pr-28 pl-32 w-40 h-[332px] flex flex-col items-center justify-center rounded-3xl">
      <p class="text-center text-white mb-4">QUANDO? <br> 17/12 <br> QUE HORAS? <br> 22:00 </p>
    </div>

    <!-- Bloco da Direita -->
    <div id="sombra" class="bg-yellow-500 p-6 m-24 w-69 flex flex-col items-center justify-center rounded-3xl">
      <p class="font-bold text-white mb-2">ONDE?</p> 
      <p class="text-center text-white mb-4">Centro de eventos <br> Herman Punhagen</p>
      <div id="map"></div>
    </div>

  </div>

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>
  <script>
    const lat = -23.55052;
    const lng = -46.633308;
    const zoomLevel = 15;

    const map = L.map('map', {
      center: [lat, lng],
      zoom: zoomLevel,
      zoomControl: false
    });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map)
      .bindPopup('<b>São Paulo</b><br>Você está aqui.')
      .openPopup();
  </script>
</div>
</body>
</html>
