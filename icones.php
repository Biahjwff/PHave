<?php
// Exemplo básico de estrutura PHP com HTML embutido
?>
<!DOCTYPE html>
<html lang="en" x-data="{ open: false }">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Icons</title>
    <!-- Link para Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Import Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Animação personalizada para bounce mais baixo e lento -->
    <style>
        @keyframes bounce-custom {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px); /* Altura do pulo */
            }
        }

        .bounce-slow {
            animation: bounce-custom 2s infinite; /* Duração e repetição */
        }
    </style>
</head>
<body class="relative">
    <div class="py-14">
        <div class="max-w-screen-xl mx-auto px-8 md:px-8">
            <h3 class="font-semibold text-sm text-gray-600 text-center">
            </h3>
            <div class="mt-6">
                <ul class="flex gap-y-6 flex-wrap items-center justify-center [&>*]:px-12 lg:divide-x">
                    <!-- LOGO 1 - Verde -->
                    <li class="flex-none">
                        <button
                            @click="open = true"
                            class="flex flex-col items-center justify-center space-y-2 focus:outline-none focus:ring-2 focus:ring-white rounded-xl text-white px-8 mt-20"
                            style="background-color: #65FD00; box-shadow: 15px 15px 0px #41A300;"
                            onmouseover="this.style.backgroundColor='#52C000'"
                            onmouseout="this.style.backgroundColor='#65FD00'"
                        >
                            <img src="icons/hamburger@1x-1.0s-200px-200px.png" alt="Logo Hamburger" class="bounce-slow mx-auto mt-8" />
                            <svg class="w-28" viewBox="0 0 163 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M45.0503 14.0131H52.6724C..." fill="black" />
                                <path d="M18.8522 14.0132L9.42611..." fill="#0061FF" />
                            </svg>
                        </button>
                    </li>

                    <!-- LOGO 2 - Roxo -->
                    <li class="flex-none">
                        <button
                            @click="open = true"
                            class="flex flex-col items-center justify-center space-y-2 focus:outline-none focus:ring-2 focus:ring-white rounded-xl text-white px-8 mt-20"
                            style="background-color: #CC15E2; box-shadow: 15px 15px 0px #980FA8;"
                            onmouseover="this.style.backgroundColor='#9D0EB9'"
                            onmouseout="this.style.backgroundColor='#CC15E2'"
                        >
                            <img src="icons/beer@1x-1.0s-200px-200px.png" alt="Logo Beer" class="bounce-slow mx-auto mt-8"/>
                            <svg class="w-28" viewBox="0 0 129 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M44.9356 34.7749V20.2199H..." fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.71206 12.0326C6.79023..." fill="black" />
                            </svg>
                        </button>
                    </li>

                    <!-- LOGO 3 - Verde -->
                    <li class="flex-none">
                        <button
                            @click="open = true"
                            class="flex flex-col items-center justify-center space-y-2 focus:outline-none focus:ring-2 focus:ring-white rounded-xl text-white px-8 mt-20"
                            style="background-color: #65FD00; box-shadow: 15px 15px 0px #41A300;"
                            onmouseover="this.style.backgroundColor='#52C000'"
                            onmouseout="this.style.backgroundColor='#65FD00'"
                        >
                            <img src="icons/socks@1x-1.0s-200px-200px (2).png" alt="Logo Socks" class="bounce-slow mx-auto mt-8" />
                            <svg class="w-28" viewBox="0 0 135 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.43 5C7.79992..." fill="#24292E" />
                                <path d="M81.2557 30.843H81.2151C..." fill="#24292E" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div
        x-show="open"
        x-transition
        class="fixed inset-0 w-full h-full bg-black bg-opacity-40 flex items-center justify-center"
        @click.outside="open = false"
        style="display: none;"
    >
        <div class="bg-white rounded-md shadow-lg max-w-lg w-full mx-4">
            <div class="flex items-center justify-between p-4 border-b">
                <h2 class="text-lg font-medium text-gray-800">Terms and agreements</h2>
                <button @click="open = false" class="p-2 text-gray-400 rounded-md hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="space-y-2 p-4 mt-3 text-[15.5px] leading-relaxed text-gray-500">
                <p>Commodo eget a et diisaim dignissim morbi vitae, mi. Mi aliquam sit ultrices enim cursus. Leo sapien, pretium duis est eu volutpat interdum eu non. Odio eget nullam elit laoreet. Libero at felis nam at orci venenatis rutrum nunc. Etiam mattis ornare pellentesque iaculis enim.</p>
                <p>Felis eu non in aliquam egestas placerat. Eget maecenas ornare venenatis lacus nunc, sit arcu. Nam pharetra faucibus eget facilisis pulvinar eu sapien turpis at. Nec aliquam aliquam blandit eu ipsum.</p>
            </div>
        </div>
    </div>
</body>
</html>
