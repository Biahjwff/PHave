<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Mapa com Leaflet</title>

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin="" />
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../fonts/fonts.css">

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
<body class="jetBrains">
  <!-- Container externo -->
  <div class="relative bg-black flex items-center justify-center min-h-screen">

  <!-- Bloco da Esquerda -->
    <div id="sombra1" class="absolute z-0 left-[10%] bg-[rgb(204,21,226)] ml-64 pt-32 pb-28 pr-[125px] pl-[125px] w-[150px] h-[332px] flex flex-col items-center justify-center rounded-3xl">
      <p class="text-center font-extrabold text-2xl mb-4"  
      style="text-shadow:
      3px 3px 1px white,
      3px 3px 1px white,
      3px 3px 1px white,
      3px 3px 1px white;">QUANDO? </p> <p class="text-4xl font-extrabold jetBrainsBold">17/12</p>   
      <p class="text-center text-black font-extrabold text-2xl mb-4"  
      style="text-shadow:
      3px 3px 1px white,
      3px 3px 1px white,
      3px 3px 1px white,
      3px 3px 1px white;">QUE HORAS?</p> <p class="text-4xl font-extrabold jetBrainsBold">22:00</p>  
    </div>

    <div class="absolute top-[22.5%] left-[42%] bg-[rgb(161,17,178)] z-20 h-[40px] w-[20px]"></div>
    <div class="absolute top-[76.8%] left-[42%] bg-[rgb(161,17,178)] z-20 h-4 w-[20px]"></div>

  <!-- Bloco da Direita -->
    <div id="sombra" class="absolute z-0 right-[10%] bg-[rgb(254,172,1)] p-6 mr-64 w-69 flex flex-col items-center justify-center rounded-3xl">
      <p class="text-center text-black font-extrabold text-2xl"
      style="text-shadow:
      3px 3px 1px white,
      3px 3px 1px white,
      3px 3px 1px white,
      3px 3px 1px white;">ONDE?</p> 
      <p class="text-center text-black font-extrabold mb-4">Centro de eventos <br> Herman Punhagen</p>
      <div id="map"></div>
    </div>

    <div class="absolute top-[22.5%] right-[42%] bg-[rgb(217,149,8)] z-20 h-[40px] w-[20px]"></div>
    <div class="absolute top-[76.8%] right-[42%] bg-[rgb(217,149,8)] z-20 h-4 w-[20px]"></div>
  </div>

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>
  <script>
    const lat = -27.2128211;
    const lng = -49.6434605;
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
      .bindPopup('<b>Hermann Purnhagen</b><br>Rio do Sul - SC')
      .openPopup();
  </script>
</div>
</body>
</html>
