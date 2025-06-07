<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alerta IFC</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../fonts/fonts.css" />
</head>
<body class="bg-black min-h-screen flex items-center justify-center p-4">
  <!-- Alerta -->
  <div class="bg-white rounded-2xl p-10 flex items-start gap-8 max-w-4xl shadow-2xl">
    <!-- Triângulo de alerta -->
    <div class="w-0 h-0 border-l-[60px] border-r-[60px] border-b-[100px] border-l-transparent border-r-transparent border-b-yellow-300 relative">
      <span class="absolute text-4xl font-extrabold left-1/2 top-10 -translate-x-1/2 text-black">!</span>
    </div>
    <!-- Texto -->
    <div class="text-black jetBrains text-xl leading-relaxed max-w-xl">
      <p>
        Este evento é destinado apenas a 
        <span class="text-red-600 font-bold">estudantes</span>, 
        <span class="text-red-600 font-bold">familiares</span> e 
        <span class="text-red-600 font-bold">servidores</span> 
        do Instituto Federal Catarinense campus Rio do Sul.
      </p>
      <!-- Link que abre o pop-up -->
      <button onclick="document.getElementById('popup').classList.remove('hidden')" 
              class="mt-4 inline-block text-blue-600 underline font-medium">
        Consulte a documentação
      </button>
    </div>
  </div>
  <!-- pop-up -->
  <div id="popup" class="jetBrains hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-2xl max-w-lg w-full relative shadow-xl">
      <h2 class="text-2xl font-bold mb-4 text-center">Documentos necessários para menores de idade</h2>
      <ul class="list-disc pl-6 text-gray-800 space-y-2">
        <li>Autorização por escrito dos responsáveis legais</li>
        <li>Cópia do RG dos responsáveis</li>
        <li>Cópia do RG ou documento oficial do estudante</li>
        <li>Comprovante de matrícula no IFC</li>
        <li>Telefone de emergência dos responsáveis</li>
      </ul>
      <br>
        <button onclick="document.getElementById('popup').classList.add('hidden')" 
          class="mt-6 bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 block mx-auto">
            Fechar
      </button>
    </div>
  </div>
</body>
</html>
