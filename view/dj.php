<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DJ Rafinha</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../fonts/fonts.css" />
</head>
<body class="relative h-screen w-screen overflow-hidden">
  <!-- Fundo com imagem -->
<div class="absolute inset-0 -z-10">
  <img src="https://s3.playbpm.com.br/images/wonder.2e16d0ba.fill-1140x450.jpg"
       alt="Fundo Wonder"
       class="w-full h-full object-cover scale-105" /> <!-- Sem blur -->

  <!-- Sobreposição preta uniforme -->
  <div class="absolute inset-0 bg-black bg-opacity-60 pointer-events-none"></div>
</div>


    <!-- Gradiente escuro nas bordas -->
    <div class="absolute inset-0 pointer-events-none"
         style="background: radial-gradient(circle at center, transparent 60%, rgba(0,0,0,0.6) 100%);">
    </div>
  </div>

  <!-- Conteúdo -->
  <div class="flex justify-end pt-16 pr-16">
    <div class="text-white text-right">
      <h1 class="pixel-font text-7xl mb-6 drop-shadow-md nabla">
        <span class="text-lime-400">DJ</span>
        <span class="text-fuchsia-500"> RAFINHA</span>
      </h1>
      <br><br>

      <p class="text-2xl mb-4 drop-shadow-md jetBrains">
        <span class=" font-bold" style="color: #65fd00">Top 1º</span> DJ mais famosa de SC
      </p>

      <p class="text-2xl mb-4 drop-shadow-md jetBrains">
        🕒 <span class="font-bold" style="color: #cc15e2">+ 6 horas</span> de música
      </p>

      <p class="text-2xl drop-shadow-md jetBrains">
        🎵 <span class="text-fuchsia-500 font-bold" style="color: #cc15e2">Eletrônica</span>, pop e funk
      </p>
    </div>
  </div>

</body>
</html>
