@extends('layouts.app')

@section('content')
    <!-- ======================================================== -->
    <!-- == HALAMAN 2: PORTFOLIO FOTOGRAFI == -->
    <!-- ======================================================== -->
    <section id="photo-page" class="min-h-screen flex items-center justify-center p-4 sm:p-8 overflow-hidden">
         <div class="relative w-full max-w-7xl">
            <div class="relative">
                 <!-- Bingkai Biru -->
                <img src="{{ asset('images/bingkai-biru-anda.svg') }}" class="transform -rotate-3 w-full h-auto" alt="Bingkai">
                <div class="absolute inset-0 flex items-center justify-center transform -rotate-3">
                    <div class="bg-gray-800 w-[calc(100%-20rem)] h-[calc(100%-24rem)] p-12 sm:p-16">
                        <!-- Konten Halaman Fotografi -->
                        <div class="text-center">
                            <h2 class="font-drinks-fruit text-5xl sm:text-6xl text-cyan-300" style="text-shadow: 0 2px 4px rgba(0,0,0,0.5);">Photography</h2>
                            <p class="text-white mt-4 font-poppins text-xl">Galeri Foto Menakjubkan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
