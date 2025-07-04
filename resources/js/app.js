import gsap from "gsap";

document.addEventListener('DOMContentLoaded', () => {

    // --- Elemen & Variabel ---
    const cameraTrigger = document.getElementById('camera-trigger');
    const backTrigger = document.getElementById('back-trigger');
    const cameraContainer = document.getElementById('animated-camera-container');
    const flashOverlay = document.getElementById('flash-overlay');
    const designPage = document.querySelector('section');
    const photoPage = document.getElementById('photo-page');
    const body = document.body;
    const musicDesign = document.getElementById('music-design');
    const musicPhoto = document.getElementById('music-photo');
    const musicToggleButton = document.getElementById('music-toggle-btn');
    const sfxShutter = document.getElementById('sfx-shutter');
    const liquidOverlay = document.getElementById('liquid-transition-overlay');
    const sfxLiquid = document.getElementById('sfx-liquid');

    let isTransitioning = false;
    let isMuted = true;
    let currentMusic = musicDesign;
    const targetVolume = 0.5;

    // Inisialisasi speaker icon & volume
    const speakerOnIcon = `<svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 0 1 0 12.728M16.463 8.288a5.25 5.25 0 0 1 0 7.424M6.75 8.25l4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z" /></svg>`;
    const speakerOffIcon = `<svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 9.75 19.5 12m0 0 2.25 2.25M19.5 12l2.25-2.25M19.5 12l-2.25 2.25M6.75 8.25l4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z" /></svg>`;
    if (musicToggleButton) musicToggleButton.innerHTML = speakerOffIcon;
    if (musicDesign) musicDesign.volume = 0;
    if (musicPhoto) musicPhoto.volume = 0;
    if (sfxShutter) sfxShutter.volume = 0.5;
    if (sfxLiquid) sfxLiquid.volume = 0.3;


    // --- FUNGSI AUDIO ---
    const fadeOut = (audio) => {
        let currentVolume = audio.volume;
        if (currentVolume === 0) {
            audio.pause();
            return;
        }
        const fadeInterval = setInterval(() => {
            currentVolume -= 0.02;
            if (currentVolume <= 0) {
                audio.volume = 0;
                audio.pause();
                clearInterval(fadeInterval);
            } else {
                audio.volume = currentVolume;
            }
        }, 50);
    };

    const fadeIn = (audio) => {
        audio.play().then(() => {
            audio.volume = 0;
            let currentVolume = 0;
            const fadeInterval = setInterval(() => {
                currentVolume += 0.01;
                if (currentVolume >= targetVolume) {
                    audio.volume = targetVolume;
                    clearInterval(fadeInterval);
                } else {
                    audio.volume = currentVolume;
                }
            }, 50);
        }).catch(error => console.error("Autoplay was prevented:", error));
    };

    const aboutSection = document.getElementById('about-me-design');
    const waveTransition = document.getElementById('wave-transition-overlay');

    // --- FUNGSI TRANSISI KAMERA ---
    const performCameraTransition = () => {
        if (isTransitioning) return;
        isTransitioning = true;
        if (!isMuted) { fadeOut(musicDesign); fadeIn(musicPhoto); }
        currentMusic = musicPhoto;

        cameraContainer.classList.remove('hidden');
        cameraContainer.classList.add('animate-camera-slide');
        setTimeout(() => {
            sfxShutter.currentTime = 0; 
            sfxShutter.play();
            cameraContainer.classList.add('animate-shutter-click');

            designPage.classList.add('hidden');
            designPage.classList.remove('flex');
            if (aboutSection) aboutSection.classList.add('hidden');

            if (waveTransition) waveTransition.classList.add('hidden');


            designPage.classList.add('hidden'); 
            designPage.classList.remove('flex');
            photoPage.classList.remove('hidden'); 
            photoPage.classList.add('flex');
            body.style.backgroundColor = '#000000';

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

    // --- FUNGSI TRANSISI LIQUID (Photo -> Design) ---
    const performLiquidTransition = () => {
        if (isTransitioning) return;
        isTransitioning = true;
        
        // PERUBAHAN: Mainkan suara transisi liquid
        if (sfxLiquid) {
            sfxLiquid.currentTime = 0;
            sfxLiquid.play();
        }

        if (!isMuted) { 
            fadeOut(musicPhoto); 
            fadeIn(musicDesign); 
        }

        currentMusic = musicDesign;
        body.classList.add('liquid-transition-active');
        liquidOverlay.classList.add('is-active');

        setTimeout(() => {
            photoPage.classList.add('hidden'); 
            photoPage.classList.remove('flex');
            designPage.classList.remove('hidden'); 
            designPage.classList.add('flex');
            if (aboutSection) aboutSection.classList.remove('hidden');
            body.style.backgroundColor = '#686FC6';
            if (waveTransition) waveTransition.classList.remove('hidden');
            liquidOverlay.classList.remove('is-active');
            setTimeout(() => {
                body.classList.remove('liquid-transition-active');
                isTransitioning = false;
            }, 100);
        }, 1800);
    };

    // --- EVENT LISTENERS ---
    if (cameraTrigger) { cameraTrigger.addEventListener('click', performCameraTransition); }
    if (backTrigger) { backTrigger.addEventListener('click', performLiquidTransition); }
    if (musicToggleButton) {
        musicToggleButton.addEventListener('click', () => {
            isMuted = !isMuted;
            if (isMuted) { 
                fadeOut(currentMusic); 
            } else { 
                fadeIn(currentMusic); 
            }
            musicToggleButton.innerHTML = isMuted ? speakerOffIcon : speakerOnIcon;
        });
    }
    const scrollArrow = document.getElementById('scroll-arrow');

    window.addEventListener('scroll', () => {
        // Jika user scroll lebih dari 50px, sembunyikan panah
        if (window.scrollY > 50) {
            scrollArrow.style.display = 'none';
        } else {
            scrollArrow.style.display = 'block';
        }
    });
});