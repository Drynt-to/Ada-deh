<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Virly</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Plus+Jakarta+Sans:ital,wght@1,200&family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body class="overflow-x-hidden">

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
        <section class="min-h-screen flex items-center justify-center p-4 sm:p-8 overflow-hidden">
            <button id="camera-trigger" class="fixed top-4 left-4 z-50 text-white hover:text-black transition-colors duration-300">
                <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/></svg>
            </button>
            <!-- Portfolio Design Virly -->
            <div class="relative w-full max-w-7xl">
                <div class="relative">
                    <img src="images/bingkai-pink-anda.svg" 
                         class="animate-pop-in transform rotate-5" 
                         style="width: 100%; height: 100%; animation-delay: 0.2s; animation-fill-mode: both;" 
                         alt="Bingkai">
                    <!-- Elemen atas kiri coretan itu -->
                    <div class="absolute top-40 left-40 -translate-x-1/4 -translate-y-1/3 text-blue-300 opacity-100 wobbly-scribble">
                        <svg width="400" height="400" viewBox="0 0 210 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="scribble-path" style="animation-delay: 3s; filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.25));" d="M 59 198 C 20 120 91 115 75 151 C 33 187 56 61 106 83 C 114 92 98 114 87 109 C 68 94 97 68 125 64" stroke="currentcolor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <!-- Elemen bawah kanan coretan itu -->
                    <div class="absolute bottom-15 right-1 translate-x-1/5 translate-y-1/5 text-blue-300 opacity-100 wobbly-scribble z-30">
                        <svg width="300" height="300" viewBox="0 0 210 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="scribble-path" style="animation-delay: 3.5s; filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.25));" d="M 31 189 C 100 189 86 91 49 128 C 35 167 155 142 106 83 C 94 73 65 89 84 107 C 104 118 124 108 147 69" stroke="currentcolor" stroke-width="13" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <!-- Elemen atas kanan bulet itu -->
                    <div class="absolute top-22 -right-10 text-yellow-200 opacity-0 animate-pop-circle" style="animation-delay: 3.8s; animation-fill-mode: both;">
                        <svg width="130" height="130" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="50" fill="currentColor" />
                        </svg>
                    </div>
                    <!-- Elemen bawah kiri bulet itu -->
                    <div class="absolute bottom-25 -left-10 text-yellow-200 opacity-0 animate-pop-circle" style="animation-delay: 4.0s; animation-fill-mode: both;">
                        <svg width="130" height="130" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="50" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="absolute inset-0  flex items-center justify-center transform rotate-5">
                        <div class="bg-rose-50 animate-pop-in w-[calc(100%-23rem)] h-[calc(100%-27rem)] p-12 sm:p-16" 
                             style="animation-delay: 0.7s; animation-fill-mode: both;">
                            <div class="text-left animate-slide-in-up" style="animation-delay: 1.2s; animation-fill-mode: both;">
                                <h2 class="font-drinks-fruit text-5xl sm:text-6xl" style="color: #138B6B; text-shadow: -4px -4px 0 #FFF, 4px -4px 0 #FFF, -4px 4px 0 #FFF, 4px 4px 0 #FFF, -2px 0 0 #FFF, 2px 0 0 #FFF, 0 -2px 0 #FFF, 0 2px 0 #FFF, 0 4px 8px rgba(0,0,0,0.35);">
                                    creative
                                </h2>
                            </div>
                            <div class="text-center -mt-2 animate-slide-in-up" style="animation-delay: 1.6s; animation-fill-mode: both;">
                                <h1 class="font-drinks-fruit font-portfolio-size leading-none" style="color: #FA643B; text-shadow: -4px -4px 0 #FFF, 4px -4px 0 #FFF, -4px 4px 0 #FFF, 4px 4px 0 #FFF, -3px 0 0 #FFF, 3px 0 0 #FFF, 0 -3px 0 #FFF, 0 3px 0 #FFF, 0 6px 10px rgba(0,0,0,0.4);">
                                    Portfolio
                                </h1>
                            </div>
                            <div class="relative mt-[-4.5rem] h-36">
                                <svg class="absolute top-0 left-0 w-full h-full" viewBox="0 0 300 40" style="overflow: visible;">
                                    <path class="scribble-path wobbly-scribble" style="animation-delay: 2.2s; filter: drop-shadow(2px 5px 4px rgba(0,0,0,0.2)) drop-shadow(0px 1px 0px #FFAEC7);" d="M10 25 C 80 10, 100 40, 150 25 S 220 10, 280 25" stroke="#FFD23F" stroke-width="7" fill="none" stroke-linecap="round"/>
                                    <g class="pencil-anim">
                                        <image href="images/pencil.svg" x="-15" y="-60" width="60" height="60" style="transform: rotate(335deg); filter: drop-shadow(3px 3px 3px rgba(0,0,0,0.25));" />
                                    </g>
                                </svg>
                                <div class="absolute -bottom-[2.5rem] w-full text-right pr-4 sm:pr-8 transform -rotate-10 animate-slide-in-right" style="animation-delay: 2.8s; animation-fill-mode: both;">
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
        <!-- Portfolio Photography Virly -->
        <section id="photo-page" class="relative min-h-screen w-screen hidden items-end justify-start p-12 sm:p-16 overflow-hidden">
            <img src="images/plastic-texture.png" alt=""
                 class="absolute inset-0 w-full h-full object-cover opacity-60 pointer-events-none z-10">
            <video autoplay loop muted playsinline
                class="absolute inset-0 w-full h-full object-cover opacity-100 pointer-events-none z-20">
                <source src="{{ asset('videos/GR5.mov') }}" type="video/mov">
                <!-- Browser Anda tidak mendukung tag video. -->
            </video>
            <!-- <img src="images/grain-texture.png" alt=""
                 class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none z-20"> -->

            <button id="back-trigger" class="fixed top-6 left-4 z-30 text-white hover:text-black transition-colors duration-300">
                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m 16.862 4.487 l 1.687 -1.688 a 1.875 1.875 0 1 1 2.652 2.652 L 10.582 16.07 a 4.5 4.5 0 0 1 -1.897 1.13 L 6 18 l 0.8 -2.685 a 4.5 4.5 0 0 1 1.13 -1.897 l 8.932 -8.931 Z m 0 0 L 19.5 7.125" />
                </svg>
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
    
    <div id="animated-camera-container" class="fixed inset-0 z-40 flex items-center justify-center pointer-events-none hidden">
        <img src="images/camera.svg" class="w-48 h-48 drop-shadow-lg" alt="Animasi Kamera">
    </div>
    <div id="flash-overlay" class="fixed inset-0 bg-white z-50 opacity-0 pointer-events-none hidden"></div>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cameraTrigger = document.getElementById('camera-trigger');
            const backTrigger = document.getElementById('back-trigger');
            const cameraContainer = document.getElementById('animated-camera-container');
            const flashOverlay = document.getElementById('flash-overlay');
            const designPage = document.querySelector('section');
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
                    fromPage.classList.add('hidden');
                    fromPage.classList.remove('flex');
                    toPage.classList.remove('hidden');
                    toPage.classList.add('flex');
                    body.style.backgroundColor = newBgColor;
                    flashOverlay.classList.remove('hidden');
                    flashOverlay.style.opacity = '1';
                    flashOverlay.classList.add('animate-flash');
                    cameraContainer.classList.add('hidden');
                    cameraContainer.classList.remove('animate-camera-slide', 'animate-shutter-click');
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
</body>
</html>