<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Virly</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @font-face {
            font-family: 'Drinks Fruit';
            src: url("{{ asset('fonts/GANT_DENGAN_NAMA_FILENYA.woff2') }}") format('woff2'),
                 url("{{ asset('fonts/GANT_DENGAN_NAMA_FILENYA.ttf') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            background-color: #686FC6;
            overflow-x: hidden;
        }

        /* ... (Semua CSS dan @keyframes Anda yang lain diletakkan di sini) ... */
        .font-poppins { font-family: 'Poppins', sans-serif; }
        .font-drinks-fruit { font-family: 'Drinks Fruit', cursive; }
        .font-portfolio-size { font-size: clamp(6rem, 15vw, 10rem); }

        .wobbly-scribble { filter: url(#wobble-filter); }
        /* Dst... */

    </style>
</head>
<body class="bg-gray-800">

    <!-- Filter SVG untuk Efek Goyangan (Wobble) -->
    <svg width="0" height="0" style="position:absolute;">
        <filter id="wobble-filter">
            <feTurbulence type="fractalNoise" baseFrequency="0.03" numOctaves="1" result="turbulence">
                <animate attributeName="baseFrequency" dur="0.2s" values="0.03;0.035;0.03" repeatCount="indefinite" />
            </feTurbulence>
            <feDisplacementMap in="SourceGraphic" in2="turbulence" scale="4" xChannelSelector="R" yChannelSelector="G" />
        </filter>
    </svg>

    <main>
        @yield('content')
    </main>

</body>
</html>
