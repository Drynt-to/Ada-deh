<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Virly</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /*
        LANGKAH 1: MEMUAT FONT KUSTOM ANDA
        - Pastikan Anda sudah meletakkan file font (misal: NeulisCursive.woff2)
          di dalam folder `public/fonts/` pada proyek Laravel Anda.
        - Ganti 'GANT_DENGAN_NAMA_FILENYA.woff2' di bawah ini dengan nama file font Anda.
        */
        @font-face {
            font-family: 'Neulis Cursive';
            /* Menggunakan helper asset() dari Laravel untuk path yang benar */
            src: url("{{ asset('fonts/GANT_DENGAN_NAMA_FILENYA.woff2') }}") format('woff2'),
                 url("{{ asset('fonts/GANT_DENGAN_NAMA_FILENYA.ttf') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            background-color: #686FC6; 
        }

        /* Menggunakan font kustom */
        .font-poppins { font-family: 'Poppins', sans-serif; }
        .font-neulis { font-family: 'Neulis Cursive', cursive; } 

        .font-portfolio-size {
             font-size: clamp(6rem, 15vw, 10rem);
        }
        
        /* Bingkai Pink */
        .stamp-frame {
            background-color: #FB83A9;
            position: relative;
            padding: 7rem;
            transform: rotate(5deg);
        }
        
        /* Animasi masuk untuk elemen utama */
        @keyframes pop-in {
            0% {
                transform: rotate(5deg) scale(0.5);
                opacity: 0;
            }
            80% {
                transform: rotate(5deg) scale(1.05);
                opacity: 1;
            }
            100% {
                transform: rotate(5deg) scale(1);
                opacity: 1;
            }
        }

        .animate-pop-in {
            animation: pop-in 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
        }

        /* Properti untuk animasi coretan SVG */
        .scribble-path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: draw-scribble 4.5s ease-out forwards;
            animation-delay: 0.8s;
        }

        /* Keyframes untuk animasi 'menggambar' coretan */
        @keyframes draw-scribble {
            to {
                stroke-dashoffset: 0;
            }
        }

        /* Properti untuk animasi pensil */
        .pencil-anim {
            /* Perintahkan pensil untuk mengikuti path yang sama dengan garis */
            offset-path: path('M10 25 C 80 10, 100 40, 150 25 S 220 10, 300 25');
            animation: move-pencil 2.5s ease-out forwards;
            animation-delay: 0.8s;
            opacity: 0; /* Sembunyikan pensil di awal */
        }

        /* Keyframes untuk animasi pensil bergerak */
        @keyframes move-pencil {
            0% {
                offset-distance: 0%;
                opacity: 1; /* Munculkan pensil saat animasi mulai */
            }
            98% {
                offset-distance: 200%;
                opacity: 1;
            }
            100% {
                offset-distance: 200%;
                opacity: 100; 
            }
        }

    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 sm:p-8 overflow-hidden">

    <!-- Kontainer utama diperbesar untuk desktop -->
    <div class="relative w-full max-w-6xl">
        
        <!-- Bingkai berbentuk Persegi Panjang Membulat -->
        <div class="stamp-frame animate-pop-in" style="animation-delay: 0.2s;">
            <!-- Konten di dalam, yang sedikit miring (padding diperbesar) -->
            <div class="bg-rose-50 p-12 sm:p-16 shadow-xl">
                
                <!-- Teks "creative" (shadow diperhalus) -->
                <div class="text-left">
                    <h2 class="font-neulis text-5xl sm:text-6xl font-black"
                        style="color: #138B6B; 
                               text-shadow:
                                   -4px -4px 0 #FFF, 4px -4px 0 #FFF,
                                   -4px 4px 0 #FFF, 4px 4px 0 #FFF,
                                   -2px 0 0 #FFF, 2px 0 0 #FFF,
                                   0 -2px 0 #FFF, 0 2px 0 #FFF,
                                   0 4px 8px rgba(0,0,0,0.35);">
                        creative
                    </h2>
                </div>
                <!-- Teks "Portfolio" (tengah, jarak dikurangi, shadow diperhalus) -->
                <div class="text-center -mt-2">
                    <h1 class="font-neulis font-portfolio-size font-black leading-none"
                        style="color: #FA643B;
                               text-shadow:
                                   -4px -4px 0 #FFF, 4px -4px 0 #FFF,
                                   -4px 4px 0 #FFF, 4px 4px 0 #FFF,
                                   -3px 0 0 #FFF, 3px 0 0 #FFF,
                                   0 -3px 0 #FFF, 0 3px 0 #FFF,
                                   0 6px 10px rgba(0,0,0,0.4);">
                        Portfolio
                    </h1>
                </div>

                <!-- Coretan, pensil, dan nama (dikembalikan ke satu container) -->
                <div class="relative mt-[-4.5rem] h-36">
                     <!-- Coretan garis dan pensil dalam satu SVG -->
                    <svg class="absolute top-0 left-0 w-full h-full" viewBox="0 0 300 40" overflow="visible">
                        <!-- Path garis yang terlihat -->
                        <path 
                            class="scribble-path" 
                            style="filter: drop-shadow(2px 5px 4px rgba(0,0,0,0.2)) drop-shadow(0px 1px 0px #FFAEC7);" 
                            d="M10 25 C 80 10, 100 40, 150 25 S 220 10, 280 25" 
                            stroke="#FFD23F" 
                            stroke-width="7" 
                            fill="none" 
                            stroke-linecap="round"/>
                        
                        <!-- PENSIL: Sekarang menggunakan file SVG eksternal Anda -->
                        <g class="pencil-anim">
                           <image 
                                href="{{ asset('images/pencil.svg') }}" 
                                x="-15" y="-60" width="60" height="60" 
                                style="transform: rotate(335deg); 
                                       filter: drop-shadow(3px 3px 3px rgba(0,0,0,0.25));" />
                        </g>
                    </svg>
                     <!-- Nama (posisinya diturunkan lebih jauh lagi) -->
                    <div class="absolute bottom-[-1.5rem] w-full text-right pr-4 sm:pr-8 transform -rotate-6">
                        <p class="font-poppins text-2xl font-extrabold italic" style="color: #3267B5; text-shadow: -2px -2px 0 #FFF, 2px -2px 0 #FFF, -2px 2px 0 #FFF, 2px 2px 0 #FFF;">Virly vc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
