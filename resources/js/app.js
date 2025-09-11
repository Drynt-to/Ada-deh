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
    const aboutSection = document.getElementById('about-me-design');
    const worksSection = document.getElementById('my-works-section-design');
    const footerSection = document.getElementById('footer-design');
    const waveTransition = document.getElementById('wave-transition-overlay');
    const scrollArrow = document.getElementById('scroll-arrow');

    // Modal elements
    const moreAboutBtn = document.getElementById('more-about-btn');
    const aboutMeModal = document.getElementById('about-me-modal');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const modalOverlay = document.getElementById('modal-overlay');
    const modalCard = document.getElementById('modal-card');

    let isTransitioning = false;
    let isMuted = true;
    let currentMusic = musicDesign;
    const targetVolume = 0.5;

    // Inisialisasi speaker icon & volume
    const speakerOnIcon = `<svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 0 1 0 12.728M16.463 8.288a5.25 5.25 0 0 1 0 7.424M6.75 8.25l4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z" /></svg>`;
    const speakerOffIcon = `<svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 9.75 19.5 12m0 0 2.25 2.25M19.5 12l2.25-2.25M19.5 12l-2.25 2.25M6.75 8.25l4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z" /></svg>`;

    const initializeAudio = () => {
        if (musicToggleButton) musicToggleButton.innerHTML = speakerOffIcon;
        if (musicDesign) musicDesign.volume = 0;
        if (musicPhoto) musicPhoto.volume = 0;
        if (sfxShutter) sfxShutter.volume = 0.5;
        if (sfxLiquid) sfxLiquid.volume = 0.3;
    };

    const initializeToDesignPage = () => {
        // Set kondisi sama seperti setelah liquid transition
        photoPage.classList.add('hidden');
        photoPage.classList.remove('flex');
        designPage.classList.remove('hidden');
        designPage.classList.add('flex');
        if (aboutSection) aboutSection.classList.remove('hidden');
        body.style.backgroundColor = '#686FC6';

        // Pastikan transisi tidak aktif
        liquidOverlay.classList.remove('is-active');
        body.classList.remove('liquid-transition-active');

        // Atur audio langsung ke musicDesign jika unmuted
        if (!isMuted) {
            fadeIn(musicDesign);
            currentMusic = musicDesign;
        }
    };

    // --- FUNGSI AUDIO ---
    const fadeOut = (audio) => {
        if (!audio || audio.volume === 0) {
            if (audio) audio.pause();
            return;
        }
        let currentVolume = audio.volume;
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
        if (!audio) return;
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

    // --- FUNGSI TRANSISI ---
    const performCameraTransition = () => {
        if (isTransitioning) return;
        isTransitioning = true;

        if (!isMuted) {
            fadeOut(musicDesign);
            fadeIn(musicPhoto);
        }
        currentMusic = musicPhoto;

        cameraContainer.classList.remove('hidden');
        cameraContainer.classList.add('animate-camera-slide');

        setTimeout(() => {
            if (sfxShutter) {
                sfxShutter.currentTime = 0;
                sfxShutter.play();
            }
            cameraContainer.classList.add('animate-shutter-click');

            designPage.classList.add('hidden');
            designPage.classList.remove('flex');
            if (aboutSection) aboutSection.classList.add('hidden');
            if (waveTransition) waveTransition.classList.add('hidden');
            if (worksSection) worksSection.classList.add('hidden');
            if (footerSection) footerSection.classList.add('hidden');

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

    const performLiquidTransition = () => {
        if (isTransitioning) return;
        isTransitioning = true;

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
            if (worksSection) worksSection.classList.remove('hidden');
            if (footerSection) footerSection.classList.remove('hidden');

            liquidOverlay.classList.remove('is-active');

            setTimeout(() => {
                body.classList.remove('liquid-transition-active');
                isTransitioning = false;
            }, 100);
        }, 1800);
    };


    // --- FUNGSI MODAL & FRAME AWAN ---
    function createCloudFrame() {
        const frame = document.getElementById('cloud-frame');
        if (!frame) return;

        // FIX: Clear existing bumps before creating new ones.
        // This is crucial for the 'resize' event listener to work correctly.
        frame.innerHTML = '';

        const width = frame.offsetWidth;
        const height = frame.offsetHeight;
        const bumpSize = 100;
        const overlap = 40;

        // Create bumps on LEFT and RIGHT sides
        for (let i = 0; i < height; i += (bumpSize - overlap)) {
            // Left Side
            const leftBump = document.createElement('div');
            leftBump.className = 'cloud-bump';
            leftBump.style.width = `${bumpSize}px`;
            leftBump.style.height = `${bumpSize}px`;
            leftBump.style.top = `${i - 15}px`;
            leftBump.style.left = `-${bumpSize / 2}px`;
            frame.appendChild(leftBump);

            // Right Side
            const rightBump = document.createElement('div');
            rightBump.className = 'cloud-bump';
            rightBump.style.width = `${bumpSize}px`;
            rightBump.style.height = `${bumpSize}px`;
            rightBump.style.top = `${i - 15}px`;
            rightBump.style.right = `-${bumpSize / 2}px`;
            frame.appendChild(rightBump);
        }

        // Create bumps on TOP and BOTTOM sides
        const horizontalPadding = bumpSize / 2;
        for (let i = horizontalPadding; i < width - horizontalPadding; i += (bumpSize - overlap)) {
            // Top Side
            const topBump = document.createElement('div');
            topBump.className = 'cloud-bump';
            topBump.style.width = `${bumpSize}px`;
            topBump.style.height = `${bumpSize}px`;
            topBump.style.top = `-${bumpSize / 2}px`;
            topBump.style.left = `${i - 40}px`;
            frame.appendChild(topBump);

            // Bottom Side
            const bottomBump = document.createElement('div');
            bottomBump.className = 'cloud-bump';
            bottomBump.style.width = `${bumpSize}px`;
            bottomBump.style.height = `${bumpSize}px`;
            bottomBump.style.bottom = `-${bumpSize / 2}px`;
            bottomBump.style.left = `${i - 40}px`;
            frame.appendChild(bottomBump);
        }
    }

    const openModal = () => {
        if (aboutMeModal) {
            aboutMeModal.classList.remove('hidden');
            if (modalCard) modalCard.classList.add('animate-slide-up');
            document.body.style.overflow = 'hidden';
            // Call createCloudFrame after a short delay to ensure modal is visible
            setTimeout(createCloudFrame, 50);
        }
    };

    const closeModal = () => {
        if (aboutMeModal) {
            aboutMeModal.classList.add('hidden');
            if (modalCard) modalCard.classList.remove('animate-slide-up');
            document.body.style.overflow = '';
        }
    };

    // --- EVENT LISTENERS ---
    if (cameraTrigger) cameraTrigger.addEventListener('click', performCameraTransition);
    if (backTrigger) backTrigger.addEventListener('click', performLiquidTransition);

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

    window.addEventListener('scroll', () => {
        if (scrollArrow) {
            scrollArrow.style.display = (window.scrollY > 50) ? 'none' : 'block';
        }
    });

    // Modal Event Listeners
    if (moreAboutBtn) moreAboutBtn.addEventListener('click', openModal);
    if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
    if (modalOverlay) modalOverlay.addEventListener('click', closeModal);

    // Make cloud frame responsive on window resize
    window.addEventListener('resize', createCloudFrame);

    // === Animasi Scroll Masuk (About Section) ===
    const animateOnScrollElements = document.querySelectorAll('#about-me-design .animate-on-scroll');
    if (animateOnScrollElements.length > 0) {
        const scrollObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');

                    const decorItems = document.querySelectorAll('#about-me-design .decor-item');
                    decorItems.forEach(item => {
                        item.classList.remove('opacity-0');
                        item.classList.add('start-animation');
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        animateOnScrollElements.forEach(el => {
            el.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700', 'ease-out');
            scrollObserver.observe(el);
        });
    }

    // --- INISIALISASI ---
    initializeAudio();
    initializeToDesignPage();

        // --- KODE BARU UNTUK SLIDER ---
    const sliderItems = document.querySelectorAll('.slider .item');
    const nextButton = document.getElementById('next');
    const prevButton = document.getElementById('prev');

    if (sliderItems.length > 0) {
        let active = Math.floor(sliderItems.length / 2); // Mulai dari slide tengah

        function loadShow() {
            let stt = 0;
            sliderItems[active].style.transform = `none`;
            sliderItems[active].style.zIndex = 1;
            sliderItems[active].style.filter = 'none';
            sliderItems[active].style.opacity = 1;
            for (var i = active + 1; i < sliderItems.length; i++) {
                stt++;
                sliderItems[i].style.transform = `translateX(${120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(-1deg)`;
                sliderItems[i].style.zIndex = -stt;
                sliderItems[i].style.filter = 'blur(5px)';
                sliderItems[i].style.opacity = stt > 2 ? 0 : 0.6;
            }
            stt = 0;
            for (var i = active - 1; i >= 0; i--) {
                stt++;
                sliderItems[i].style.transform = `translateX(${-120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(1deg)`;
                sliderItems[i].style.zIndex = -stt;
                sliderItems[i].style.filter = 'blur(5px)';
                sliderItems[i].style.opacity = stt > 2 ? 0 : 0.6;
            }
        }

        loadShow();

        if (nextButton) {
            nextButton.onclick = function() {
                active = active + 1 < sliderItems.length ? active + 1 : active;
                loadShow();
            }
        }

        if (prevButton) {
            prevButton.onclick = function() {
                active = active - 1 >= 0 ? active - 1 : active;
                loadShow();
            }
        }
    }
    // --- KODE BARU UNTUK KATEGORI DAN SLIDER GANDA ---

    const categoryButtons = document.querySelectorAll('.category-btn');
    const sliderWrappers = document.querySelectorAll('.slider-wrapper');

    // Fungsi untuk menginisialisasi sebuah slider
    function initializeSlider(sliderWrapper) {
        const sliderItems = sliderWrapper.querySelectorAll('.slider .item');
        const nextButton = sliderWrapper.querySelector('.next');
        const prevButton = sliderWrapper.querySelector('.prev');

        if (sliderItems.length > 0) {
            let active = Math.floor(sliderItems.length / 2); // Mulai dari slide tengah

            function loadShow() {
                let stt = 0;
                sliderItems[active].style.transform = `none`;
                sliderItems[active].style.zIndex = 1;
                sliderItems[active].style.filter = 'none';
                sliderItems[active].style.opacity = 1;
                for (var i = active + 1; i < sliderItems.length; i++) {
                    stt++;
                    sliderItems[i].style.transform = `translateX(${120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(-1deg)`;
                    sliderItems[i].style.zIndex = -stt;
                    sliderItems[i].style.filter = 'blur(5px)';
                    sliderItems[i].style.opacity = stt > 2 ? 0 : 0.6;
                }
                stt = 0;
                for (var i = active - 1; i >= 0; i--) {
                    stt++;
                    sliderItems[i].style.transform = `translateX(${-120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(1deg)`;
                    sliderItems[i].style.zIndex = -stt;
                    sliderItems[i].style.filter = 'blur(5px)';
                    sliderItems[i].style.opacity = stt > 2 ? 0 : 0.6;
                }
            }

            loadShow();

            if (nextButton) {
                nextButton.onclick = function() {
                    active = active + 1 < sliderItems.length ? active + 1 : active;
                    loadShow();
                }
            }

            if (prevButton) {
                prevButton.onclick = function() {
                    active = active - 1 >= 0 ? active - 1 : active;
                    loadShow();
                }
            }
        }
    }

    // Inisialisasi setiap slider
    sliderWrappers.forEach(initializeSlider);

    // Event listener untuk tombol kategori
    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (isTransitioning) return; // Mencegah klik ganda saat transisi

            const category = button.dataset.category;
            const targetSlider = document.getElementById(`slider-${category}`);

            // Hapus kelas 'active' dari semua tombol dan slider
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            
            isTransitioning = true;

            // Animasi fade out untuk slider yang sedang aktif
            const activeSlider = document.querySelector('.slider-wrapper.active');
            if (activeSlider) {
                activeSlider.classList.add('fade-out');
                setTimeout(() => {
                    activeSlider.classList.remove('active', 'fade-out');
                    activeSlider.classList.add('hidden');
                    
                    // Tambahkan kelas 'active' ke tombol dan slider yang dituju
                    button.classList.add('active');
                    targetSlider.classList.remove('hidden');
                    targetSlider.classList.add('active', 'fade-in');

                    setTimeout(() => {
                        targetSlider.classList.remove('fade-in');
                        isTransitioning = false; // Transisi selesai
                    }, 500);

                }, 500);
            }
        });
    });
    // --- KODE BARU UNTUK LIGHTBOX/POP-UP ---
    const imageLightbox = document.getElementById('image-lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const closeLightboxBtn = document.getElementById('close-lightbox');
    const sliderImages = document.querySelectorAll('.slider .item img');

    // Fungsi untuk membuka lightbox
    function openLightbox(event) {
        const imageUrl = event.target.src;
        if (imageLightbox && lightboxImage) {
            lightboxImage.src = imageUrl;
            imageLightbox.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Mencegah scrolling saat lightbox terbuka
        }
    }

    // Fungsi untuk menutup lightbox
    function closeLightbox() {
        if (imageLightbox) {
            imageLightbox.classList.add('hidden');
            document.body.style.overflow = ''; // Mengembalikan fungsi scrolling
        }
    }

    // Tambahkan event listener klik ke semua gambar slider
    sliderImages.forEach(img => {
        img.addEventListener('click', openLightbox);
        img.style.cursor = 'pointer'; // Mengubah kursor untuk menandakan gambar bisa diklik
    });

    // Event listener untuk tombol close
    if (closeLightboxBtn) {
        closeLightboxBtn.addEventListener('click', closeLightbox);
    }

    // Event listener untuk menutup saat mengklik area di luar gambar
    if (imageLightbox) {
        imageLightbox.addEventListener('click', (event) => {
            if (event.target === imageLightbox) {
                closeLightbox();
            }
        });
    }
});
    // --- AKHIR KODE SLIDER ---