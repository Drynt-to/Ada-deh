<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Virly</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Plus+Jakarta+Sans:ital,wght@1,200&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Drinks Fruit'; /* Nama font diubah */
            /* Menggunakan helper asset() dari Laravel untuk path yang benar */
            src: url("{{ asset('fonts/GANT_DENGAN_NAMA_FILENYA.woff2') }}") format('woff2'),
                 url("{{ asset('fonts/GANT_DENGAN_NAMA_FILENYA.ttf') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            background-color: #686FC6;
            overflow: hidden; /* Mencegah scroll yang tidak perlu */
            transition: background-color 0.5s ease-in-out;
        }

        /* Menggunakan font kustom */
        .font-poppins { font-family: 'Poppins', sans-serif; }
        .font-drinks-fruit { font-family: 'Drinks Fruit', cursive; }
        .font-montserrat { font-family: 'Montserrat', sans-serif; }
        .font-plus-jakarta-sans { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-portfolio-size { font-size: clamp(4rem, 15vw, 10rem); }

        @keyframes pop-in {
            0% { transform: rotate(5deg) scale(0.5); opacity: 0; }
            80% { transform: rotate(5deg) scale(1.05); opacity: 1; }
            100% { transform: rotate(5deg) scale(1); opacity: 1; }
        }
        .animate-pop-in { animation: pop-in 0.7s ease-out forwards; }

        @keyframes fade-in { from { opacity: 0; } to { opacity: 1; } }
        @keyframes slide-in-up { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }
        .animate-slide-in-up { animation: slide-in-up 0.6s ease-out forwards; }
        @keyframes slide-in-right { from { opacity: 0; transform: translateX(50%); } to { opacity: 1; transform: translateX(0); } }

        .animate-fade-in { animation: fade-in 0.6s ease-out forwards; }
        .animate-slide-in-up { animation: slide-in-up 0.6s ease-out forwards; }
        .animate-slide-in-right { animation: slide-in-right 0.7s ease-out forwards; }

        .scribble-path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: draw-scribble 4.5s ease-out forwards;
        }

        @keyframes draw-scribble {
            to { stroke-dashoffset: 0; }
        }

        .pencil-anim {
            offset-path: path('M 10 25 C 80 10, 100 40, 150 25 S 220 10, 300 25');
            animation: move-pencil 2.5s ease-out forwards;
            animation-delay: 2.2s;
            opacity: 0;
        }

        @keyframes move-pencil {
            0% { offset-distance: 0%; opacity: 1; }
            98% { offset-distance: 200%; opacity: 1; }
            100% { offset-distance: 200%; opacity: 1; }
        }
        
        @keyframes pop-circle {
            0% { transform: scale(0); opacity: 0; }
            80% { transform: scale(1.1); opacity: 1; }
            100% { transform: scale(1); opacity: 1; }
        }
        .animate-pop-circle { animation: pop-circle 0.5s ease-out forwards; }

        .wobbly-scribble {
            filter: url(#wobble-filter);
        }

        @keyframes camera-slide-in {
            from { transform: translateY(100vh) scale(0.3) rotate(-15deg); opacity: 0; }
            to { transform: translateY(0) scale(1) rotate(0deg); opacity: 1; }
        }
        .animate-camera-slide { animation: camera-slide-in 0.8s cubic-bezier(0.25, 1, 0.5, 1) forwards; }

        @keyframes shutter-click {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(0.95); }
        }
        .animate-shutter-click { animation: shutter-click 0.2s ease-in-out; }

        @keyframes screen-flash {
            0% { opacity: 0; }
            20% { opacity: 1; }
            100% { opacity: 0; }
        }
        .animate-flash { animation: screen-flash 0.7s ease-out forwards; }
        

    </style>
</head>
<body class="overflow-x-hidden">

    <!-- Filter SVG untuk Efek Goyangan (Wobble) -->
    <svg width="0" height="0" style="position:absolute;">
        <filter id="wobble-filter">
            <feTurbulence 
                type="fractalNoise" 
                baseFrequency="0.03" 
                numOctaves="1" 
                result="turbulence">
                <animate 
                    attributeName="baseFrequency" 
                    dur="0.2s" 
                    values="0.03;0.035;0.03" 
                    repeatCount="indefinite" />
            </feTurbulence>
            <feDisplacementMap 
                in="SourceGraphic" 
                in2="turbulence" 
                scale="4" 
                xChannelSelector="R" 
                yChannelSelector="G" />
        </filter>
    </svg>

    <main>
        <!-- Section 1: Hero (Halaman Depan yang sudah kita buat) -->
        <section class="min-h-screen flex items-center justify-center p-4 sm:p-8 overflow-hidden">
            <!-- Tombol Kamera -->
            <button id="camera-trigger" class="fixed top-4 left-4 z-50 text-white hover:text-black transition-colors duration-300">
                <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/></svg>
            </button>

            <div class="relative w-full max-w-7xl">
                <!-- Kontainer untuk menumpuk bingkai dan konten -->
                <div class="relative">

                    <!-- 1. Bingkai Pink (dari file SVG Anda) -->
                    <img src="images/bingkai-pink-anda.svg" 
                        class="animate-pop-in transform rotate-5" 
                        style="width: 100%; height: 100%; animation-delay: 0.2s; animation-fill-mode: both;" 
                        alt="Bingkai">

                    <!-- Hiasan Coretan Kiri Atas dengan Efek Wobble -->
                    <div class="absolute top-20 left-20 -translate-x-1/3 -translate-y-1/3 text-blue-300 opacity-100 wobbly-scribble">
                        <svg width="400" height="400" viewBox="0 0 210 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="scribble-path" style="animation-delay: 3s; filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.25));" d="M 59 198 C 20 120 91 115 75 151 C 33 187 56 61 106 83 C 114 92 98 114 87 109 C 68 94 97 68 125 64" stroke="currentcolor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <!-- Hiasan Coretan Kanan Bawah dengan Efek Wobble -->
                    <div class="absolute bottom-20 right-20 translate-x-1/3 translate-y-1/3 text-blue-300 opacity-100 wobbly-scribble">
                        <svg width="300" height="300" viewBox="0 0 210 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="scribble-path" style="animation-delay: 3.5s; filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.25));" d="M 31 189 C 100 189 86 91 49 128 C 35 167 155 142 106 83 C 94 73 65 89 84 107 C 104 118 124 108 147 69" stroke="currentcolor" stroke-width="13" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    
                    <!-- Hiasan Lingkaran Kuning Kanan Atas -->
                    <div class="absolute top-14 -right-4 text-yellow-200 opacity-0 animate-pop-circle" style="animation-delay: 3.8s; animation-fill-mode: both;">
                        <svg width="100" height="100" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="50" fill="currentColor" />
                        </svg>
                    </div>

                    <!-- Hiasan Lingkaran Kuning Kiri Bawah -->
                    <div class="absolute bottom-14 left-4 text-yellow-200 opacity-0 animate-pop-circle" style="animation-delay: 4.0s; animation-fill-mode: both;">
                        <svg width="100" height="100" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="50" fill="currentColor" />
                        </svg>
                    </div>

                    <!-- 2. Kontainer Konten Putih (diposisikan di atas bingkai) -->
                    <div class="absolute inset-0  flex items-center justify-center transform rotate-5">
                        <!-- Ukuran area putih diperkecil agar bingkai pink terlihat lebih tebal -->
                        <div class="bg-rose-50 animate-pop-in w-[calc(100%-23rem)] h-[calc(100%-27rem)] p-12 sm:p-16" 
                             style="animation-delay: 0.7s; animation-fill-mode: both;">
                            
                            <!-- 3. Teks "creative" -->
                            <div class="text-left animate-slide-in-up" style="animation-delay: 1.2s; animation-fill-mode: both;">
                                <h2 class="font-drinks-fruit text-5xl sm:text-6xl" style="color: #138B6B; text-shadow: -4px -4px 0 #FFF, 4px -4px 0 #FFF, -4px 4px 0 #FFF, 4px 4px 0 #FFF, -2px 0 0 #FFF, 2px 0 0 #FFF, 0 -2px 0 #FFF, 0 2px 0 #FFF, 0 4px 8px rgba(0,0,0,0.35);">
                                    creative
                                </h2>
                            </div>

                            <!-- 4. Teks "Portfolio" -->
                            <div class="text-center -mt-2 animate-slide-in-up" style="animation-delay: 1.6s; animation-fill-mode: both;">
                                <h1 class="font-drinks-fruit font-portfolio-size leading-none" style="color: #FA643B; text-shadow: -4px -4px 0 #FFF, 4px -4px 0 #FFF, -4px 4px 0 #FFF, 4px 4px 0 #FFF, -3px 0 0 #FFF, 3px 0 0 #FFF, 0 -3px 0 #FFF, 0 3px 0 #FFF, 0 6px 10px rgba(0,0,0,0.4);">
                                    Portfolio
                                </h1>
                            </div>

                            <!-- 5. Coretan dan pensil -->
                            <div class="relative mt-[-4.5rem] h-36">
                                <svg class="absolute top-0 left-0 w-full h-full" viewBox="0 0 300 40" style="overflow: visible;">
                                    <path class="scribble-path wobbly-scribble" style="animation-delay: 2.2s; filter: drop-shadow(2px 5px 4px rgba(0,0,0,0.2)) drop-shadow(0px 1px 0px #FFAEC7);" d="M10 25 C 80 10, 100 40, 150 25 S 220 10, 280 25" stroke="#FFD23F" stroke-width="7" fill="none" stroke-linecap="round"/>
                                    <g class="pencil-anim">
                                        <image href="images/pencil.svg" x="-15" y="-60" width="60" height="60" style="transform: rotate(335deg); filter: drop-shadow(3px 3px 3px rgba(0,0,0,0.25));" />
                                    </g>
                                </svg>

                                <!-- 6. Nama Virly -->
                                <div class="absolute bottom-[1rem] w-full text-right pr-4 sm:pr-8 transform rotate-10 animate-slide-in-right" style="animation-delay: 2.8s; animation-fill-mode: both;">
                                    <p class="font-poppins text-2xl font-extrabold italic" style="color: #3267B5; text-shadow: -2px -2px 0 #FFF, 2px -2px 0 #FFF, -2px 2px 0 #FFF, 2px 2px 0 #FFF;">
                                        Virly vc.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section id="photo-page" class="relative min-h-screen w-screen hidden items-end justify-start p-12 sm:p-16 overflow-hidden">
            <!-- Plastic Texture -->
            <img src="images/plastic-texture.png" alt=""
                class="absolute inset-0 w-full h-full object-cover opacity-60 pointer-events-none z-10">

            <!-- Grain Texture -->
            <img src="images/grain-texture.png" alt=""
                class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none z-20">

            <!-- Tombol Kembali ke Halaman Desain -->
            <button id="back-trigger" class="fixed top-4 left-4 z-30 text-white hover:text-black transition-colors duration-300">
                <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
            </button>

            <div class="text-white">
                <h1 class="text-7xl sm:text-8xl md:text-8xl tracking-tight">
                    <span class="font-plus-jakarta-sans font-extralight italic">photography </span><span class="font-montserrat font-medium">portfolio.</span>
                </h1>
                <div class="flex justify-between items-center mt-4 text-base sm:text-lg tracking-widest font-montserrat">
                    <p class="font-medium uppercase">BY VIRLY VC</p>
                    <p class="font-normal">2025</p>
                </div>
            </div>
        </section>

    </main>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cameraTrigger = document.getElementById('camera-trigger');
            const backTrigger = document.getElementById('back-trigger');
            const cameraContainer = document.getElementById('animated-camera-container');
            const flashOverlay = document.getElementById('flash-overlay');
            const designPage = document.querySelector('section'); // asumsikan section pertama
            const photoPage = document.getElementById('photo-page');
            const body = document.body;

            let isTransitioning = false;

            const performTransition = (fromPage, toPage, newBgColor) => {
                if (isTransitioning) return;
                isTransitioning = true;

                cameraContainer.classList.remove('hidden');
                cameraContainer.classList.add('animate-camera-slide');

                setTimeout(() => {
                    cameraContainer.classList.add('animate-shutter-click');

                    // Langsung ganti halaman di balik flash
                    fromPage.classList.add('hidden');
                    fromPage.classList.remove('flex');
                    toPage.classList.remove('hidden');
                    toPage.classList.add('flex');
                    body.style.backgroundColor = newBgColor;

                    // Munculkan flash
                    flashOverlay.classList.remove('hidden');
                    flashOverlay.style.opacity = '1';
                    flashOverlay.classList.add('animate-flash');

                    // Sembunyikan kamera
                    cameraContainer.classList.add('hidden');
                    cameraContainer.classList.remove('animate-camera-slide', 'animate-shutter-click');

                    // Setelah flash selesai, hilangkan overlay
                    flashOverlay.addEventListener('animationend', () => {
                        flashOverlay.classList.add('hidden');
                        flashOverlay.classList.remove('animate-flash');
                        flashOverlay.style.opacity = '0';

                        isTransitioning = false;
                    }, { once: true });

                }, 800);
            };

            cameraTrigger.addEventListener('click', () => {
                performTransition(designPage, photoPage, '#000000');
            });

            backTrigger.addEventListener('click', () => {
                performTransition(photoPage, designPage, '#686FC6');
            });
        });
    </script>
    <!-- Kamera dan flash untuk transisi -->
    <div id="animated-camera-container" class="fixed inset-0 z-40 flex items-center justify-center pointer-events-none hidden">
        <!-- Kamera besar untuk animasi (SVG diganti dengan file Anda) -->
        <img src="{{ asset('images/camera.svg') }}" class="w-48 h-48 drop-shadow-lg" alt="Animasi Kamera">
    </div>
    <div id="flash-overlay" class="fixed inset-0 bg-white z-50 opacity-0 pointer-events-none hidden"></div>
    
    <!-- Flash putih layar -->
    <div id="flash-overlay" class="hidden fixed inset-0 bg-white z-40 opacity-0 pointer-events-none"></div>


</body>
</html>
