<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Atrações</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../fonts/fonts.css">
  </head>

<body class="bg-black">
  <form action="atraçao.php" method="post">

    <!-- Título -->
    <div style="background-color: #65fd00; padding: 50px; color: black;" class="flex justify-center">
      <h1 class="nabla text-7xl">Por que ir?</h1>
    </div>

    <!-- Subtítulo e conteúdo -->
    <div class="flex px-8 pt-8 gap-10 flex-wrap lg:flex-nowrap items-center">
      <!-- Texto -->
      <div class="flex flex-col max-w-xl text-left jetBrains">
        <div class="text-white text-4xl">Cama elástica</div>
        <div class="text-orange-400 text-5xl pt-1">Gigante!!</div>
        <div class="jetBrains text-gray-300 text-xl pt-5">
          Nosso evento irá contar com a presença de uma cama elástica gigante.
        </div>
        <div class="pt-6">
          <button id="open-modal" type="button" class="bg-orange-500 text-black px-6 py-2 rounded jetBrains  hover:bg-orange-600 transition">
            Saiba mais
          </button>
        </div>
      </div>

      <!-- Imagem/vídeo -->
      <div class="relative w-full max-w-xl mt-10 lg:mt-0 group">
        <!-- Fundo laranja -->
        <div class="absolute top-4 left-4 w-full h-full bg-orange-500 z-0"></div>

        <!-- Imagem -->
        <div id="thumbnail" class="relative z-10 shadow-2xl w-full aspect-video cursor-pointer overflow-hidden transition-opacity duration-500 opacity-100">
          <img
            src="https://cdn.dooca.store/5819/products/121-altitude-park-campinas-121-1920x1282-800x534.jpg?v=1644183166"
            alt="Cama elástica gigante"
            class="w-full h-full object-cover block"
          />
        </div>

        <!-- Vídeo -->
        <div id="video" class="absolute top-0 left-0 z-10 w-full aspect-video opacity-0 transition-opacity duration-500 pointer-events-none">
          <iframe
            id="video-iframe"
            class="w-full h-full"
            src="https://www.youtube.com/embed/y3fX4XWbKXk?autoplay=1&mute=1&controls=0&showinfo=0&rel=0"
            title="Vídeo cama elástica"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>

    <!-- Espaço extra para rolagem -->
    <div class="pb-40"></div>

    <!-- (popup) -->
    <div id="modal-overlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden flex items-center justify-center z-50">
      <div class="bg-white text-black rounded-xl shadow-lg max-w-md w-full p-6 text-center relative">
        <h2 class="text-2xl mb-4 jetBrains">Mais sobre a cama elástica</h2>
        <p class="text-gray-700 mb-6 jetBrains">
          A cama elástica gigante estará disponível durante todo o evento para todas as idades. Não perca!
        </p>
        <button id="close-modal" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition jetBrains">
          Voltar 
        </button>
      </div>
    </div>

  </form>

  <!-- Scripts -->
  <script>
    // Troca imagem/vídeo com reinício
    const thumbnail = document.getElementById('thumbnail');
    const video = document.getElementById('video');
    const iframe = document.getElementById('video-iframe');
    const originalSrc = iframe.src;

    thumbnail.addEventListener('mouseenter', () => {
      iframe.src = '';
      void iframe.offsetWidth;
      iframe.src = originalSrc;
      thumbnail.classList.add('opacity-0');
      video.classList.remove('opacity-0');
      video.classList.add('opacity-100');
    });

    thumbnail.addEventListener('mouseleave', () => {
      thumbnail.classList.remove('opacity-0');
      video.classList.remove('opacity-100');
      video.classList.add('opacity-0');
    });

    // Controle do Modal
    const openModal = document.getElementById('open-modal');
    const closeModal = document.getElementById('close-modal');
    const modalOverlay = document.getElementById('modal-overlay');

    openModal.addEventListener('click', () => {
      modalOverlay.classList.remove('hidden');
    });

    closeModal.addEventListener('click', () => {
      modalOverlay.classList.add('hidden');
    });

    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) {
        modalOverlay.classList.add('hidden');
      }
    });
  </script>
</body>
</html>
