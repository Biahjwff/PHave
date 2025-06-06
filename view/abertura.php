<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="../fonts/fonts.css">

    <title>Abertura</title>
</head>

<body class="jetBrains bg-black bg-[url('../imgs/abertura.webp')] bg-cover">

    <header class="jetBrainsBold flex justify-center gap-3 text-[#65fd00] text-sm">
        <a href="local.php" class="hover:text-orange-500 transition duration-400 hover:underline">Local</a>
        <a href="atracoes.php" class="hover:text-orange-500 transition duration-400 hover:underline">Atrações</a>
        <a href="orcamento.php" class="hover:text-orange-500 transition duration-400 hover:underline">Orçamento</a>
    </header>

    <div>
        <h1 class="mt-40 fortine text-9xl text-white text-center" style="text-shadow: -6px 7px 0px black"><span
                class="text-[#65fd00]">&lt;?PH</span><span class="text-[#800d8d]">ave</span><span
                class="text-[#65fd00]">&gt;</span></h1>
    </div>


    <div class="flex justify-center items-center gap-5">
        <div class="fortine text-4xl text-white mt-1">
            <h2 style="text-shadow: -4px 4px 0px black">3º Info B</h2>
        </div>

        <div class="flex items-center overflow-hidden">
            <div class="bg-[#65fd00] h-15 w-1"></div>

        <img id="logoIfc" src="../imgs/logo_ifc.png" alt="logo do ifc" class="h-10 pl-2"
            style="opacity: 0; transform: translateX(-100px);">
        </div>
    </div>

    <!--Animação da logo do IFC-->
    <script>
        window.addEventListener("load", () => {
            gsap.to("#logoIfc", {
                duration: 4.0,
                delay: 0.4,
                opacity: 1,
                x: 0,
                ease: "power3.out"
            });
        });
    </script>

    <!--Quadrados de transição entre imagens-->
    <div class="absolute left-10 bottom-10 h-10 w-10 bg-[#ad2fbc]"></div>
    <div class="absolute left-30 bottom-30 h-5 w-10 bg-[#65fd00]"></div>
    <div class="absolute left-50 bottom-50 h-10 w-10 bg-[#FEAC01]"></div>

    <div class="absolute right-30 bottom-10 h-5 w-15 bg-[#ad2fbc]"></div>
    <div class="absolute right-50 bottom-30 h-5 w-5 bg-[#65fd00]"></div>

</body>

</html>