<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Virly</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
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
        <div id="design-page-wrapper">
            <section class="min-h-screen flex items-center justify-center p-4 sm:p-8 overflow-hidden bg-[#686FC6]">
                <!-- Tombol Kamera -->
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
                        <!-- Teks -->
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
                <!-- Panah Scroll -->
                <div id = "scroll-arrow" class="absolute bottom-10 animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </div>
            </section>
            <!-- Transisi Wave Lebar & Tinggi -->
            <section id = "wave-transition-overlay" class="relative block w-full" style="height: 300px; overflow: hidden;">
                <svg viewBox="0 0 1440 320" class="block w-full h-full" preserveAspectRatio="none">
                    <path fill="url(#gradientWave)" fill-opacity="1" 
                        d="M 0 64 L 48 90.7 C 96 117 192 171 288 165.3 C 384 160 480 96 576 90.7 C 672 85 768 139 864 144 C 960 149 1056 107 1152 112 C 1248 117 1340 185 1389 149 L 1461 105 L 1440 320 L 1392 320 C 1344 320 1248 320 1152 320 C 1056 320 960 320 864 320 C 768 320 672 320 576 320 C 480 320 384 320 288 320 C 192 320 96 320 48 320 L 0 320 Z">
                    </path>
                    <defs>
                        <linearGradient id="gradientWave" x1="0" x2="0" y1="0" y2="1">
                            <stop offset="5%" stop-color="#686FC6" />
                            <stop offset="100%" stop-color="#FF8BB0" />
                        </linearGradient>
                    </defs>
                </svg>
            </section>


            <!-- Bagian About Me Khusus Design -->
            <section id="about-me-design" class="py-20 sm:py-32 px-6 sm:px-8 relative z-10 bg-[#FF8BB0]">
                <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="relative animate-on-scroll">
                        <img src="images/virly-bunny.png" alt="Foto Virly" class="rounded-3xl shadow-2xl w-full h-auto z-10 relative transform hover:scale-105 transition-transform duration-300">
                        <div class="absolute -top-4 -left-4 w-full h-full bg-red-300 rounded-3xl transform -rotate-3 z-0"></div>
                    </div>
                    <div class="text-gray-800 animate-on-scroll" style="animation-delay: 0.2s;">
                        <h2 class="text-6xl md:text-7xl font-brand mb-4" style="color: #6a994e;">Hello!</h2>
                        <div class="bg-white/70 backdrop-blur-sm p-6 rounded-2xl shadow-lg">
                            <p class="text-lg md:text-xl mb-4 leading-relaxed">I'm <strong>Virly</strong>, a Graphic Designer based in Surabaya, Indonesia. With a passion for being creative, I love trying different kinds of visual styles that spark joy.</p>
                            <p class="text-lg md:text-xl mb-6 leading-relaxed">In this portfolio, you'll find a curated selection of my work ranging from infographics to mockups. I'm excited on collaborating on future projects and bringing our creative visions to life together!</p>
                            <div class="font-semibold text-base md:text-lg space-y-2 text-gray-700">
                                <p><strong>IG:</strong> @virlyvc | <strong>Line:</strong> virrvc | <strong>WA:</strong> +62 895406377667</p>
                                <p><strong>Gmail:</strong> virlyvirginia.vv@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Portfolio Photography Virly -->
        <section id="photo-page" class="relative min-h-screen w-screen hidden items-end justify-start p-12 sm:p-16 overflow-hidden">
            <img src="images/plastic-texture.png" alt=""
                 class="absolute inset-0 w-full h-full object-cover opacity-60 pointer-events-none z-20">
            <video autoplay loop muted playsinline
                class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none z-10">
                <source src="{{ asset('videos/GR5.mp4') }}" type="video/mp4">
            </video>

            <button id="back-trigger" class="fixed top-6 left-4 z-30 text-white hover:text-black transition-colors duration-300">
                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m 16.862 4.487 l 1.687 -1.688 a 1.875 1.875 0 1 1 2.652 2.652 L 10.582 16.07 a 4.5 4.5 0 0 1 -1.897 1.13 L 6 18 l 0.8 -2.685 a 4.5 4.5 0 0 1 1.13 -1.897 l 8.932 -8.931 Z m 0 0 L 19.5 7.125" />
                </svg>
            </button>

            <div class="text-white z-10">
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

    {{-- SVG BARU UNTUK TRANSISI KEMBALI --}}
    <div id="scribble-transition-overlay" class="fixed inset-0 w-screen h-screen z-40 pointer-events-none hidden">
        <svg viewBox="0 0 100 100" class="w-full h-full" preserveAspectRatio="none">
            {{-- Garis tebal yang akan dianimasikan untuk menutupi layar --}}
            <path class="scribble-transition-path" stroke="black" stroke-width="200" d="M -50,50 L 150,50" />
        </svg>
    </div>

    {{-- KODE BARU: ELEMEN AUDIO DAN TOMBOL KONTROL MUSIK --}}
    <audio id="music-design" loop>
        <source src="{{ asset('music/design-music.mp3') }}" type="audio/mpeg">
    </audio>
    <audio id="music-photo" loop>
        <source src="{{ asset('music/photo-music.mp3') }}" type="audio/mpeg">
    </audio>
    <audio id="sfx-shutter">
        <source src="{{ asset('sfx/camera-shutter.mp3') }}" type="audio/mpeg">
    </audio>
    <audio id="sfx-liquid">
        <source src="{{ asset('sfx/liquid_swoosh.mp3') }}" type="audio/mpeg">
    </audio>
    

    <button id="music-toggle-btn" class="fixed bottom-6 right-6 z-50 text-white bg-black/20 p-2 rounded-full hover:bg-black/40 transition-all duration-300">
        {{-- Ikon akan diisi oleh JavaScript --}}
    </button>
    <div id="liquid-transition-overlay">
        <div class="liquid-blob"></div>
        <div class="liquid-blob"></div>
        <div class="liquid-blob"></div>
    </div>

    <svg style="position:absolute; width:0; height:0;">
        <defs>
            <filter id="liquid-filter">
                <feGaussianBlur in="SourceGraphic" stdDeviation="15" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 30 -10" result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
            </filter>
        </defs>
    </svg>
</body>
</html>