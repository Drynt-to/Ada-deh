<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Virly</title>

    <link rel="icon" type="image/jpeg" href="{{ asset('images/buat yang diatas.png') }}">

     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
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
                <div class="relative w-full max-w-7xl initial-animation">
                    <div class="relative">
                        <img src="images/bingkai-pink-anda.svg" 
                            class="animate-pop-in transform rotate-5 initial-animation" 
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
                        <!-- Teks dan aset lainnya kayaknya (saya juga lupa) -->
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
                <!-- Panah Scroll (minor tapi berguna) -->
                <div id = "scroll-arrow" class="absolute bottom-10 animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </div>
            </section>
            <!-- Transisi Wave Lebar & Tinggi (ada animasinya cuman ga seberapa keliatan) -->
            <section id = "wave-transition-overlay" class="relative block w-full animate-wave" style="height: 300px; overflow: hidden;">
                <svg viewBox="0 0 1440 320" class="block w-full h-full" preserveAspectRatio="none">
                    <path fill="url(#gradientWave)" fill-opacity="1" 
                        d="M 0 64 L 48 90.7 C 96 117 192 171 288 165.3 C 384 160 480 96 576 90.7 C 672 85 768 139 864 144 C 960 149 1056 107 1099 112 C 1248 117 1220 168 1306 154 L 1363 112 L 1364 324 L 1321 322 C 1344 320 1248 320 1152 320 C 1056 320 960 320 864 320 C 768 320 672 320 576 320 C 480 320 384 320 288 320 C 192 320 96 320 48 320 L 0 320 Z">
                    </path>
                    <defs>
                        <linearGradient id="gradientWave" x1="0" x2="0" y1="0" y2="1">
                            <stop offset="5%" stop-color="#686FC6" />
                            <stop offset="100%" stop-color="#FF8BB0" />
                        </linearGradient>
                    </defs> 
                </svg>
            </section>

            <!-- Bagian About Me Khusus Design (yang photo beda lagi) -->
            <section id="about-me-design" class="bg-[#FF8BB0] bg-pink-grid py-20 sm:py-32 px-6 sm:px-8 relative z-10">
                <div class="animate-on-scroll max-w-[1500px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    <div class="relative w-full max-w-2xl mx-auto z-10 transform hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-5 left-1/2 -translate-x-5 text-[#9BD1FF] wobbly-scribble z-30 decor-item opacity-0">  
                            <svg width="250" height="250" viewBox="0 0 100 140" fill="none">
                                <path class="scribble-path" style="animation-delay: 2s;" d="M 30 90 C 25 39 98 -3 44 90" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
                                <path class="scribble-path" style="animation-delay: 2s;" d="M 58 103 C 85 13 162 124 80 92" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
                                <path class="scribble-path" style="animation-delay: 2s;" d="M 67 115 C 67 109 80 97 85 97" stroke="currentColor" stroke-width="8" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="absolute -bottom-26 left-5 text-[#FF673E] wobbly-scribble z-30 decor-item opacity-0"> 
                            <svg width="300" height="300" viewBox="0 0 100 140" fill="none">
                                <path class="scribble-path" style="animation-delay: 2s;" d="M 0 25 Q 22 -6 35 28 C 38 21 54 -6 72 29 C 74 26 95 -9 110 33" stroke="currentColor" stroke-width="8" fill="none" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="absolute bottom-35 right-30 text-[#646CCD] opacity-0 animate-pop-circle decor-item" style="animation-delay: 2s;"> 
                            <svg width="50" height="40" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="absolute -bottom-15 -right-5 translate-x-1 translate-y-1/5 text-[#FFE479] wobbly-scribble z-30 decor-item opacity-0"> 
                            <svg width="500" height="500" viewBox="0 -50 320 200" fill="none" xmlns="http://www.w.org/2000/svg">
                                <path class="scribble-path" style="animation-delay: 2s; filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.25));" d="M 256 56 C 260 54 297 6 269 -2 C 261 -3 248 11 263 15 C 266 15 287 14 284 -22" stroke="currentcolor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <!-- Foto Virly -->
                        <img src="{{ asset('svg/virly-bunny.svg') }}"
                            class="w-full h-auto relative z-10 translate-y-[-50px]
                                    [filter:drop-shadow(15px_0_0_white)_drop-shadow(-15px_0_0_white)_drop-shadow(0_15px_0_white)_drop-shadow(0_-15px_0_white)]" />
                        <!-- Foto kepala Virly di luar bingkai -->
                        <img src="svg/virly-head.svg" 
                            alt="Kepala Virly luar bingkai" 
                            class="absolute top-68.5 left-82.5 w-[32%] h-auto z-20 -translate-x-4 -translate-y-8 scale-110" />
                    </div>
                    
                    <div class="animate-on-scroll flex flex-col space-y-8" style="animation-delay: 0.2s;">
                        <div>
                            <h2 class="font-drinks-fruit text-5xl md:text-8xl font-brand mb-4 animate-slide-in-up" style="color: #2A8E6B; text-shadow: -4px -4px 0 #FFF, 4px -4px 0 #FFF, -4px 4px 0 #FFF, 4px 4px 0 #FFF, -2px 0 0 #FFF, 2px 0 0 #FFF, 0 -2px 0 #FFF, 0 2px 0 #FFF, 0 4px 8px rgba(0,0,0,0.35);">Hello!</h2>
                            <div class="bg-white backdrop-blur-sm p-6 rounded-2xl shadow-lg w-full max-w-none animate-slide-in-right">
                                <p class="font-poppins font-bold text-2xl md:text-2xl leading-relaxed animate-slide-in-right" style="color: #3267B4">
                                    I'm <span class="italic font-extrabold bg-[#FFEA99] px-1 rounded">Virly</span>, a Graphic Designer based in Surabaya, Indonesia. With a passion for being creative, I love trying different kinds of visual styles that spark joy.
                                </p>
                                 <p class="font-poppins font-bold text-2xl md:text-2xl mb-6 leading-loose animate-slide-in-right" style="color: #3267B4">
                                 In this portfolio, you'll find a curated selection of my work ranging from infographics to mockups. I'm excited on collaborating on future projects and bringing our creative visions to life together!</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <div class="relative inline-block">
                                    <h3 class="font-drinks-fruit text-4xl md:text-5xl font-brand mb-4" style="color: #2A8E6B; text-shadow: -3px -3px 0 #FFF, 3px -3px 0 #FFF, -3px 3px 0 #FFF, 3px 3px 0 #FFF;">Skills</h3>
                                </div>
                                <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg mt-4 font-poppins font-bold text-lg text-[#3267B4]">
                                    <div class="flex justify-between items-center mb-2">
                                        <span>Graphic Design</span>
                                        <span class="text-[#FA643B]">Illustration</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-gradient-to-r from-pink-400 to-orange-400 h-2.5 rounded-full"></div>
                                    </div>
                                    <div class="flex justify-between items-center mt-4 mb-2">
                                        <span>Photography</span>
                                        <span class="text-[#FA643B]">Branding</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-gradient-to-r from-orange-400 to-pink-400 h-2.5 rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                
                            <div>
                                <h3 class="font-drinks-fruit text-4xl md:text-5xl font-brand mb-4" style="color: #2A8E6B; text-shadow: -3px -3px 0 #FFF, 3px -3px 0 #FFF, -3px 3px 0 #FFF, 3px 3px 0 #FFF;">Languages</h3>
                                <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg mt-4 font-poppins text-[#3267B4] space-y-3">
                                    <div>
                                        <div class="flex items-center mb-1">
                                            <span class="text-red-500 text-xl mr-2">✦</span>
                                            <p class="font-bold text-md">Indonesian <span class="text-xs font-medium text-gray-500">Native</span></p>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-3">
                                            <div class="bg-blue-500 h-3 rounded-full" style="width: 95%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center mb-1">
                                            <span class="text-red-500 text-xl mr-2">✦</span>
                                            <p class="font-bold text-md">English <span class="text-xs font-medium text-gray-500">Fluent</span></p>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-3">
                                            <div class="bg-blue-500 h-3 rounded-full" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center mb-1">
                                            <span class="text-red-500 text-xl mr-2">✦</span>
                                            <p class="font-bold text-md">Chinese <span class="text-xs font-medium text-gray-500">Moderate</span></p>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-3">
                                            <div class="bg-blue-500 h-3 rounded-full" style="width: 50%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="contact-links font-poppins font-bold italic text-center text-xl md:text-2xl text-white animate-slide-in-up"
                                style="text-shadow: 1px 1px 1px #2A8E6B;">
                                <p>
                                    <a href="https://www.instagram.com/virlyvc/" target="_blank" rel="noopener noreferrer">IG: @virlyvc</a> | 
                                    <a href="https://line.me/ti/p/~virrvc" target="_blank" rel="noopener noreferrer">Line: virrvc</a> | 
                                    <a href="https://wa.me/62895406377667" target="_blank" rel="noopener noreferrer">WA: +62 895406377667</a>
                                </p>
                                <p>
                                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=virlyvirginia.vv@gmail.com&su=Pertanyaan%20dari%20Website&body=Halo%20Virly%20Selamat%20Ulang%20Tahun!!!" target="_blank" rel="noopener noreferrer">Gmail: virlyvirginia.vv@gmail.com</a>
                                </p>
                            </div>
                            <div class="text-center mt-8">
                                    <button id="more-about-btn" 
                                            class="bg-white text-[#3267B4] font-poppins font-bold py-3 px-8 rounded-full shadow-lg transform hover:scale-105 transition-transform duration-300">
                                        More about me
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bagian My Works Khusus Design (ada slider) -->
            <section id="my-works-section-design" class="w-full h-auto bg-[#FF8BB0] bg-pink-grid py-20 sm:py-32 px-6 sm:px-8 relative z-10 slider-container flex flex-col items-center">
                <h1 class="font-drinks-fruit text-5xl md:text-8xl font-brand mb-12 animate-slide-in-up" style="color: #2A8E6B; text-shadow: -4px -4px 0 #FFF, 4px -4px 0 #FFF, -4px 4px 0 #FFF, 4px 4px 0 #FFF, -2px 0 0 #FFF, 2px 0 0 #FFF, 0 -2px 0 #FFF, 0 2px 0 #FFF, 0 4px 8px rgba(0,0,0,0.35);">My Works</h1>
                <!-- Full gambar Cathalina 3D -->
                <img src="images\Cathalina.png" class="w-2/3 h-auto -rotate-20 absolute z-0 translate-y-[100px] translate-x-[440px]" />
                <img src="images\eliona.png" class="w-1/2 h-auto rotate-15 absolute z-0 translate-y-[70px] -translate-x-[440px]" />
                <div id="category-filters" class="flex space-x-4 mb-12">
                    <button class="category-btn active" data-category="student-council">Student Council</button>
                    <button class="category-btn" data-category="committee">Committee</button>
                </div>
                <div id="slider-student-council" class="slider-wrapper active">
                    <div class="slider mt-16 mr-35 relative flex items-center justify-center">
                        <div class="item">
                            <img src="{{ asset('images/Asset 1@4x.png') }}" alt="Student Council 1">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/Asset 2@4x.png') }}" alt="Student Council 2">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/Asset 3@4x.png') }}" alt="Student Council 3">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/Asset 4@4x.png') }}" alt="Student Council 4">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/Asset 5@4x.png') }}" alt="Student Council 5">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/Asset 6@4x.png') }}" alt="Student Council 6">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/Asset 7@4x.png') }}" alt="Student Council 7">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/Asset 8@4x.png') }}" alt="Student Council 8">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/Asset 9@4x.png') }}" alt="Student Council 9">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/Asset 10@4x.png') }}" alt="Student Council 10">
                        </div>
                        <button class="next absolute top-1/2 right-[20px] transform -translate-y-1/2">></button>

                        <button class="prev absolute top-1/2 left-[20px] transform -translate-y-1/2"><</button>
                    </div>
                </div>
                <div id="slider-committee" class="slider-wrapper hidden">
                    <div class="slider mt-16 mr-35 relative flex items-center justify-center">
                        <div class="item">
                            <img src="{{ asset('images/Asset 13@4x.png') }}" alt="Committee 1">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/Asset 14@4x.png') }}" alt="Committee 2">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/Asset 15@4x.png') }}" alt="Committee 3">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images\pce 1@4x-100.jpg') }}" alt="Committee 3">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images\pce 2@4x-100.jpg') }}" alt="Committee 3">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images\pce 3@4x-100.jpg') }}" alt="Committee 3">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images\asp 1@4x-100.jpg') }}" alt="Committee 3">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images\asp 2@4x-100.jpg') }}" alt="Committee 3">
                        </div>
                        <button class="next absolute top-1/2 left-360 transform translate-y-1">></button>
                        <button class="prev absolute top-1/2 right-250 transform translate-y-1"><</button>
                    </div>
                </div>
                <div id="image-lightbox" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-[900] hidden p-4">
                    <button id="close-lightbox" class="absolute top-4 right-4 text-white text-5xl font-bold">&times;</button>
                    <img id="lightbox-image" src="" alt="Full-size view" class="max-w-full max-h-full">
                </div>
            </section>
            
            <!-- Bagian Footer Khusus Design (seadanya) -->
            <section id="footer-design" class="bg-[#686FC6] py-20 sm:py-20 px-6 sm:px-8 relative z-10">
                <div>
                    <img src="{{ asset('images/cathalina ngintip.gif') }}" alt="Footer Animation" class="w-150 absolute bottom-0 -left-15" />
                </div>

                <div class="font-drinks-fruit text-8xl absolute bottom-20 right-15 flex items-center z-50">
                    <span class="hover-lift text-gradient-custom text-stroke-2 stroke-white">V</span>
                    <span class="hover-lift text-gradient-custom text-stroke-2 stroke-white">i</span>
                    <span class="hover-lift text-gradient-custom text-stroke-2 stroke-white">r</span>
                    <span class="hover-lift text-gradient-custom text-stroke-2 stroke-white">l</span>
                    <span class="hover-lift text-gradient-custom text-stroke-2 stroke-white">y</span>
                    <span class="w-6"></span> 
                    <span class="hover-lift text-gradient-custom text-stroke-2 stroke-white">V</span>
                    <span class="hover-lift text-gradient-custom text-stroke-2 stroke-white">C</span>
                </div>
                 <div class="relative mt-[-4.5rem] h-20">
                    <svg class="absolute top-42 right-2 w-1/4 h-auto" viewBox="0 0 300 40" style="overflow: visible;">
                        <path class="scribble-path wobbly-scribble" style="animation-delay: 2.2s; filter: drop-shadow(2px 5px 4px rgba(0,0,0,0.2)) drop-shadow(0px 1px 0px #FFAEC7);" d="M10 25 C 80 10, 100 40, 150 25 S 220 10, 280 25" stroke="#FFD23F" stroke-width="7" fill="none" stroke-linecap="round"/>
                            <g class="pencil-anim">
                            <image href="images/pencil.svg" x="-15" y="-60" width="60" height="60" style="transform: rotate(335deg); filter: drop-shadow(3px 3px 3px rgba(0,0,0,0.25));" />
                        </g>
                    </svg>
                </div>
                <div class="max-w-4xl mx-auto text-center relative z-10">

                    <div class="flex justify-center mb-2">

                        <!-- {{-- Ikon Instagram --}} -->
                        <a href="https://www.instagram.com/virlyvc/" target="_blank" rel="noopener noreferrer" class="mr-2 w-12 h-12 bg-white rounded-full flex items-center justify-center text-black hover:bg-gray-200 transition-colors duration-300 transform hover:scale-110" aria-label="Instagram">
                            <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-full h-auto">
                        </a> 

                        <!-- {{-- Ikon Line --}} -->
                        <a href="https://line.me/ti/p/~virrvc" target="_blank" rel="noopener noreferrer" class="mr-2 w-12 h-12 bg-white rounded-full flex items-center justify-center text-black hover:bg-gray-200 transition-colors duration-300 transform hover:scale-110" aria-label="Line">
                            <img src="{{ asset('images/line.png') }}" alt="Line" class="w-full h-auto">
                        </a>

                        <!-- {{-- Ikon WhatsApp --}} -->
                        <a href="https://wa.me/62895406377667" target="_blank" rel="noopener noreferrer" class="mr-2 w-12 h-12 bg-white rounded-full flex items-center justify-center text-black hover:bg-gray-200 transition-colors duration-300 transform hover:scale-110" aria-label="WhatsApp">
                            <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="w-full h-auto">
                        </a>

                        <!-- {{-- Ikon Gmail --}} -->
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=virlyvirginia.vv@gmail.com" target="_blank" rel="noopener noreferrer" class="mr-2 w-12 h-12 bg-white rounded-full flex items-center justify-center text-black hover:bg-gray-200 transition-colors duration-300 transform hover:scale-110" aria-label="Gmail">
                            <img src="{{ asset('images/gmail.png') }}" alt="Gmail" class="w-full h-auto">
                        </a>
                    </div>
                    
                    
                    <div class="flex justify-center space-x-8 mb-2 text-lg font-semibold">
                        <a href="#" id="home-link" class="font-poppins hover:text-gray-300 transition-colors">Home</a>
                    </div>

                    <div class="w-full h-px bg-gray-700 mb-3"></div>

                    <p class="font-poppins text-white text-sm font-medium">Copyright ©2025, Designed by Virly Virginia Chandra, Coded by Daryanto Tanawi</p>
                </div>
            </section>
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
            <section id="bridging-photo" class="hidden">
                <div class="tulisan-slider" style="
                    --width: 120px;
                    --height: 50px;
                    --quantity: 10;
                    font-family: 'Plus Jakarta Sans', sans-serif;
                    font-weight: bold;
                ">
                    <div class="list">
                        <div class="item" style="--position: 1; display: flex; justify-content: center; align-items: center;">Virly vc.</div>
                        <div class="item" style="--position: 2; display: flex; justify-content: center; align-items: center;">Virly vc.</div>
                        <div class="item" style="--position: 3; display: flex; justify-content: center; align-items: center;">Virly vc.</div>
                        <div class="item" style="--position: 4; display: flex; justify-content: center; align-items: center;">Virly vc.</div>
                        <div class="item" style="--position: 5; display: flex; justify-content: center; align-items: center;">Virly vc.</div>
                        <div class="item" style="--position: 6; display: flex; justify-content: center; align-items: center;">Virly vc.</div>
                        <div class="item" style="--position: 7; display: flex; justify-content: center; align-items: center;">Virly vc.</div>
                        <div class="item" style="--position: 8; display: flex; justify-content: center; align-items: center;">Virly vc.</div>
                        <div class="item" style="--position: 9; display: flex; justify-content: center; align-items: center;">Virly vc.</div>
                        <div class="item" style="--position: 10; display: flex; justify-content: center; align-items: center;">Virly vc.</div>
                    </div>
                </div>
            </section>
            <section id="about-me-photo" class="relative min-h-screen w-screen hidden flex items-center justify-center p-12 sm:p-16 overflow-hidden">
                <img src="images/plastic-texture.png" alt=""
                    class="absolute inset-0 w-full h-full object-cover opacity-60 pointer-events-none z-20">
                <video autoplay loop muted playsinline
                    class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none z-10">
                    <source src="{{ asset('videos/GR5.mp4') }}" type="video/mp4">
                </video>

                <div class="relative z-30 max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center top-30">
                    <div class="relative w-full h-[500px] flex items-center justify-center top-25">
                        <img src="images/Foto1.png" alt="Foto 1" 
                            class="absolute rounded-lg shadow-2xl w-full max-w-sm h-auto object-cover 
                                    transition-transform duration-300 transform -translate-x-40 -translate-y-24 z-10 hover:scale-105">
                        
                        <img src="images/Foto2.png" alt="Foto 2" 
                            class="absolute rounded-lg shadow-2xl w-full max-w-sm h-auto object-cover 
                                    transition-transform duration-300 transform -translate-x-1 -translate-y-20 z-20 hover:scale-105">
                        
                        <img src="images/Foto3.png" alt="Foto 3" 
                            class="absolute rounded-lg shadow-2xl w-full max-w-sm h-auto object-cover 
                                    transition-transform duration-300 transform translate-x-20 translate-y-1 z-30 hover:scale-105">
                        
                        <img src="images/Foto4.png" alt="Foto 4" 
                            class="absolute rounded-lg shadow-2xl w-full max-w-sm h-auto object-cover 
                                    transition-transform duration-300 transform -translate-x-24 translate-y-12 z-40 hover:scale-105">
                    </div>

                    <div class="ml-28 text-white" style="text-shadow: 1px 1px 6px rgba(0,0,0,0.8);"> 
                        <h2 class="text-6xl sm:text-7xl tracking-tight mb-6">
                            <span class="font-montserrat font-semibold italic">HI!</span>
                        </h2>
                        <div class="font-montserrat text-lg sm:text-2xl space-y-6 leading-relaxed">
                            <p>
                                I’m <span class="underline">Virly Virginia Chandra</span>, a photographer based in Surabaya, Indonesia.
                            </p>
                            <p>
                                In this portfolio, you’ll find a curated selection of
                                my work ranging from street photography to
                                editorial portrait works. I’m excited on
                                collaborating on future projects and bringing our
                                creative visions to life together. I invite you to
                                explore and take your time viewing the world
                                through my lens.
                            </p>
                            <p class="italic">
                                <span class="font-semibold">Editing Platforms : </span>
                                Adobe Lightroom | Adobe Photoshop |
                                Adobe Illustrator | Figma 
                            </p>
                        </div>
                    </div>
                <div class="text-white z-10 -translate-x-36 translate-y-10">
                    <h1 class="text-4xl sm:text-4xl md:text-4xl tracking-tight">
                        <span class="font-montserrat font-medium">Contact me: </span>
                    </h1>
                    <h1 class="text-4xl sm:text-4xl md:text-4xl tracking-tight">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=virlyvirginia.vv@gmail.com&su=Pertanyaan%20dari%20Website&body=Halo%20Virly%20Selamat%20Ulang%20Tahun!!!" target="_blank" rel="noopener noreferrer">
                            <span class="font-montserrat font-medium">virlyvirginia.vv@gmail.com</span>
                        </a>
                    </h1>
                </div>
                <div class="text-white z-10 -translate-x-24 translate-y-12">
                    <h1 class="text-4xl sm:text-4xl md:text-4xl tracking-tight">
                        <a href="https://wa.me/62895406377667" target="_blank" rel="noopener noreferrer">
                            <span class="font-montserrat font-medium">+62 895-4063-77667</span>
                        </a>
                    </h1>
                </div>
                <div class="text-white z-10 translate-x-[540px] -translate-y-10">
                    <h1 class="text-4xl sm:text-4xl md:text-4xl tracking-tight">
                        <span class="font-montserrat font-medium">Instagram handles: </span>
                    </h1>
                    <h1 class="text-4xl sm:text-4xl md:text-4xl tracking-tight">
                        <a href="https://www.instagram.com/virlyvc/" target="_blank" rel="noopener noreferrer">
                            <span class="font-montserrat font-medium">@virlyvc & @by_virrvc</span>
                        </a>
                    </h1>
                </div>
            </section>
            <section id="table-of-contents" class="relative min-h-screen w-screen hidden  overflow-hidden">
                <img src="images/plastic-texture.png" alt=""
                    class="absolute inset-0 w-full h-full object-cover opacity-60 pointer-events-none z-20">
                <video autoplay loop muted playsinline
                    class="absolute inset-0 w-full h-full object-cover opacity-30 pointer-events-none z-10">
                    <source src="{{ asset('videos/GR5.mp4') }}" type="video/mp4">
                </video>
                <div class="grid-3">
                    <div class="autoBLur">TABLE OF CONTENTS</div>
                    <div class="autoBLur">-AUTOMOBILE</div>
                    <div class="autoBLur">-PORTRAIT</div>
                    <div class="autoBLur">-STREET</div>
                    <div class="autoBLur">-FOOD</div>
                </div>
            </section>

            
            
        <!-- </div>   -->
    </main>
    <!-- Elemen animasi kamera dan flash -->
    <div id="animated-camera-container" class="fixed inset-0 z-40 flex items-center justify-center pointer-events-none hidden">
        <img src="images/camera.svg" class="w-48 h-48 drop-shadow-lg" alt="Animasi Kamera">
    </div>
    <div id="flash-overlay" class="fixed inset-0 bg-white z-50 opacity-0 pointer-events-none hidden"></div>

    <button id="music-toggle-btn" class="fixed bottom-6 right-6 z-90 text-white bg-black/20 p-2 rounded-full hover:bg-black/40 transition-all duration-300">
    </button>

    <div id="scribble-transition-overlay" class="fixed inset-0 w-screen h-screen z-40 pointer-events-none hidden">
        <svg viewBox="0 0 100 100" class="w-full h-full" preserveAspectRatio="none">
            <!-- {{-- Liquid-ish(?) tebal yang akan dianimasikan untuk menutupi layar --}} -->
            <path class="scribble-transition-path" stroke="black" stroke-width="200" d="M -50,50 L 150,50" />
        </svg>
    </div>

    <!-- Audio - audio disini bolo -->
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

    <!-- Modal tambahan (about me design) biar ga terlalu panjang -->
    <div id="about-me-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 hidden">
        <div id="modal-overlay" class="absolute inset-0 bg-black/70"></div>

        <div id="modal-card" class="relative bg-[#686FC6] rounded-2xl shadow-xl w-full max-w-4xl p-8 sm:p-12 text-gray-800 transform transition-all duration-300">
            <div id="cloud-frame" class="cloud-frame-container">
                <div class="cloud-frame-body"></div>
            </div>

            <!-- Scribble kiri atas buat modal -->
            <div class="absolute top-10 left-10 -translate-x-1/4 -translate-y-1/3 text-blue-300 opacity-100 wobbly-scribble z-60">
                            <svg width="350" height="350" viewBox="0 0 210 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="scribble-path" style="animation-delay: 3s; filter: drop-shadow(1px 1px 2px rgba(0,0,0,0.25));" d="M 123 156 C 57 125 122 91 113 124 C 103 149 64 119 60 114" stroke="currentcolor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
            </div>

            <!-- Dot kuning di kiri atas -->
            <div class="absolute top-10 -left-10 text-yellow-200 opacity-0 animate-pop-circle" style="animation-delay: 3.8s; animation-fill-mode: both;">
                            <svg width="20" height="20" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50" fill="currentColor" />
                            </svg>
            </div>

            <button id="close-modal-btn" class="absolute top-4 right-4 text-black hover:text-red-900 transition-colors z-20">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            
            
            <div class="relative z-10">
                <div class="bg-white backdrop-blur-sm p-8 rounded-2xl"> 
                    <div class="space-y-10">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
                    
                    <div class="space-y-4">
                        <h3 class="font-drinks-fruit text-5xl" style="color: #E87A9A; text-shadow: -2px -2px 0 #FFF, 2px -2px 0 #FFF, -2px 2px 0 #FFF, 2px 2px 0 #FFF, -1px 0 0 #FFF, 1px 0 0 #FFF, 0 -1px 0 #FFF, 0 1px 0 #FFF, 0 4px 8px rgba(0,0,0,0.35);">Education :</h3>

                        <div class="flex items-start">
                            <span class="text-[#9f224a] text-2xl mr-3 mt-1">✦</span>
                            <div>
                                <p class="font-poppins font-bold text-lg text-[#08316C]">Surabaya Cambridge School</p>
                                <p class="font-poppins text-md text-[#08316C]">(Senior High School)</p>
                                <p class="mt-1"><span class="font-poppins font-bold italic bg-[#FFD0D0] text-[#08316C] text-sm font-bold px-2 py-1 rounded-full">2022 - 2024</span></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <span class="text-[#9f224a] text-2xl mr-3 mt-1">✦</span>
                            <div>
                                <p class="font-poppins font-bold text-lg text-[#08316C]">Petra Christian University</p>
                                <p class="font-poppins text-md text-[#08316C]">(Visual Communication Design)</p>
                                <p class="mt-1"><span class="font-poppins font-bold italic bg-[#FFD0D0] text-[#08316C] text-sm font-bold px-2 py-1 rounded-full">2024 - now</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h3 class="font-drinks-fruit text-5xl" style="color: #E87A9A; text-shadow: -2px -2px 0 #FFF, 2px -2px 0 #FFF, -2px 2px 0 #FFF, 2px 2px 0 #FFF, -1px 0 0 #FFF, 1px 0 0 #FFF, 0 -1px 0 #FFF, 0 1px 0 #FFF, 0 4px 8px rgba(0,0,0,0.35);">Experiences :</h3>
                        
                        <div class="flex items-start">
                            <span class="text-[#9f224a] text-2xl mr-3 mt-1">✦</span>
                            <div>
                                <p class="font-poppins font-bold text-lg text-[#08316C]">Head of Art Department Stuco</p>
                                <p class="font-poppins text-md text-[#08316C]">Senior High Student Council</p>
                                <p class="mt-1"><span class="font-poppins font-bold italic bg-[#FFD0D0] text-[#08316C] text-sm font-bold px-2 py-1 rounded-full">2022 - 2023</span></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <span class="text-[#9f224a] text-2xl mr-3 mt-1">✦</span>
                            <div>
                                <p class="font-poppins font-bold text-lg text-[#08316C]">Industrial Competition 2024 PCU</p>
                                <p class="font-poppins text-md text-[#08316C]">Publication Creative Department</p>
                                <p class="mt-1"><span class="font-poppins font-bold italic bg-[#FFD0D0] text-[#08316C] text-sm font-bold px-2 py-1 rounded-full">August 2024 - October 2024</span></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <span class="text-[#9f224a] text-2xl mr-3 mt-1">✦</span>
                            <div>
                                <p class="font-poppins font-bold text-lg text-[#08316C]">Petra Civil Expo 2025 PCU</p>
                                <p class="font-poppins text-md text-[#08316C]">Publication Creative Sub-Division</p>
                                <p class="mt-1"><span class="font-poppins font-bold italic bg-[#FFD0D0] text-[#08316C] text-sm font-bold px-2 py-1 rounded-full">January 2025 - May 2025</span></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <span class="text-[#9f224a] text-2xl mr-3 mt-1">✦</span>
                            <div>
                                <p class="font-poppins font-bold text-lg text-[#08316C]">And Many More!</p>
                                <p class="font-poppins text-md text-[#08316C]">I think</p>
                                <p class="mt-1"><span class="font-poppins font-bold italic bg-[#FFD0D0] text-[#08316C] text-sm font-bold px-2 py-1 rounded-full">Stay Tune!</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-4 flex items-center gap-6">
                    <div>
                        <h3 class="font-drinks-fruit text-5xl" style="color: #E87A9A; text-shadow: -2px -2px 0 #FFF, 2px -2px 0 #FFF, -2px 2px 0 #FFF, 2px 2px 0 #FFF, -1px 0 0 #FFF, 1px 0 0 #FFF, 0 -1px 0 #FFF, 0 1px 0 #FFF, 0 4px 8px rgba(0,0,0,0.35);">Softwares :</h3>
                        <p class="font-poppins font-bold italic text-md text-[#08316C] mt-1 ml-1">Apps I used for designing</p>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="bg-[#FF673E] w-16 h-16 flex items-center justify-center rounded-2xl shadow-md transform -rotate-6">
                            <span class="font-drinks-fruit font-bold text-3xl text-white">Ps</span>
                        </div>
                        <div class="bg-[#148D6E] w-16 h-16 flex items-center justify-center rounded-2xl shadow-md transform rotate-3 z-10 -ml-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Figma-logo.svg" alt="Figma Logo" class="w-8 h-8">
                        </div>
                        <div class="bg-[#148D6E] w-28 h-16 flex items-center justify-center rounded-2xl shadow-md transform -rotate-2 z-0 -ml-2">
                            <img src="{{ asset('svg/Canva_Logo_0.svg') }}" alt="Logo Canva" class="h-10">
                        </div>
                        <div class="bg-[#FF673E] w-16 h-16 flex items-center justify-center rounded-2xl shadow-md transform rotate-6 z-10 -ml-2">
                            <span class="font-drinks-fruit font-bold text-3xl text-white">Ai</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>