<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <link rel="icon" href="assets/image/logo.png" sizes="32x32">
    <title>Homepage | WEB3</title>
</head>
<body class="bg-slate-950 text-slate-100 antialiased">
    <nav class="fixed inset-x-0 top-0 z-50 border-b border-white/10 bg-slate-900/75 backdrop-blur">
        <div class="mx-auto flex h-20 max-w-6xl items-center justify-between px-4 sm:px-6">
            <a href="#home" class="flex items-center gap-3">
                <img src="assets/image/logo.png" alt="logo" class="h-12 w-12 rounded-lg object-cover">
                <span class="text-base font-semibold tracking-wide">TEKOM D 25</span>
            </a>

            <button id="menu-toggle" class="inline-flex items-center rounded-md border border-white/20 p-2 text-slate-100 md:hidden" aria-label="Toggle menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <ul class="hidden items-center gap-6 text-sm font-medium md:flex">
                <li><a href="#home" class="transition hover:text-cyan-300">Home</a></li>
                <li><a href="#about" class="transition hover:text-cyan-300">About</a></li>
                <li><a href="#contact" class="transition hover:text-cyan-300">Contact</a></li>
                <li><a href="login.php" class="transition hover:text-cyan-300">Sign In</a></li>
                <li><a href="register.php" class="rounded-md border border-white/30 px-3 py-2 transition hover:border-cyan-300 hover:text-cyan-300">Sign Up</a></li>
            </ul>
        </div>

        <div id="mobile-menu" class="hidden border-t border-white/10 md:hidden">
            <ul class="space-y-1 px-4 py-3 text-sm font-medium">
                <li><a href="#home" class="block rounded px-3 py-2 transition hover:bg-white/10">Home</a></li>
                <li><a href="#about" class="block rounded px-3 py-2 transition hover:bg-white/10">About</a></li>
                <li><a href="#contact" class="block rounded px-3 py-2 transition hover:bg-white/10">Contact</a></li>
                <li><a href="login.php" class="block rounded px-3 py-2 transition hover:bg-white/10">Sign In</a></li>
                <li><a href="register.php" class="block rounded px-3 py-2 transition hover:bg-white/10">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="relative flex min-h-screen items-center justify-center bg-cover bg-center px-4 text-center" style="background-image: linear-gradient(to bottom, rgba(2, 6, 23, 0.68), rgba(15, 23, 42, 0.85)), url('assets/image/gambar3.png');">
        <div class="mx-auto max-w-3xl pt-20">
            <p class="mb-4 text-xs font-semibold uppercase tracking-[0.32em] text-cyan-300">Welcome</p>
            <h1 class="text-4xl font-bold leading-tight sm:text-5xl">Selamat Datang di TEKOM D 25</h1>
            <p class="mx-auto mt-5 max-w-2xl text-base text-slate-200 sm:text-lg">Akses informasi, jadwal, materi, dan dokumentasi kegiatan dalam satu tempat.</p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
                <a href="login.php" class="rounded-md bg-cyan-400 px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-300">Join</a>
                <a href="#about" class="rounded-md border border-white/40 px-5 py-3 text-sm font-semibold text-white transition hover:border-cyan-300 hover:text-cyan-300">About Us</a>
            </div>
        </div>
    </section>

    <section id="about" class="relative overflow-hidden bg-slate-900 px-4 py-24 sm:px-6">
        <div class="pointer-events-none absolute -left-20 top-16 h-52 w-52 rounded-full bg-cyan-500/15 blur-3xl"></div>
        <div class="pointer-events-none absolute -right-24 bottom-10 h-64 w-64 rounded-full bg-blue-500/15 blur-3xl"></div>

        <div class="relative mx-auto grid max-w-6xl gap-10 md:grid-cols-2 md:items-center">
            <div>
                <p class="inline-flex rounded-full border border-cyan-300/40 bg-cyan-400/10 px-4 py-1 text-xs font-semibold uppercase tracking-wide text-cyan-300">About TEKOM D 25</p>
                <h2 class="mt-5 text-3xl font-bold leading-tight sm:text-4xl">Dokumentasi Kegiatan Dalam Galeri yang Lebih Hidup</h2>
                <p class="mt-4 text-slate-300">Kami menyimpan momen penting kelas TEKOM D 25 dalam format visual yang mudah dinikmati. Galeri ini dirancang agar pengunjung bisa melihat perjalanan kegiatan dengan cepat dan nyaman.</p>
                <div class="mt-7 grid grid-cols-3 gap-3">
                    <div class="rounded-xl border border-white/10 bg-slate-950/70 p-4 text-center">
                        <p class="text-2xl font-bold text-cyan-300">1</p>
                        <p class="mt-1 text-xs text-slate-400">Event Utama</p>
                    </div>
                    <div class="rounded-xl border border-white/10 bg-slate-950/70 p-4 text-center">
                        <p class="text-2xl font-bold text-cyan-300">50+</p>
                        <p class="mt-1 text-xs text-slate-400">Dokumentasi</p>
                    </div>
                    <div class="rounded-xl border border-white/10 bg-slate-950/70 p-4 text-center">
                        <p class="text-2xl font-bold text-cyan-300">100%</p>
                        <p class="mt-1 text-xs text-slate-400">Aktif Kelas</p>
                    </div>
                </div>
            </div>

            <div id="about-carousel" class="relative overflow-hidden rounded-3xl border border-white/10 bg-slate-950 shadow-2xl shadow-cyan-500/10 ring-1 ring-white/5">
                <div id="carousel-track" class="flex h-[460px] transition-transform duration-700 ease-out">
                    <figure>
                        <img src="" alt="">
                    </figure>
                    <figure class="relative min-w-full">
                        <img src="assets/image/gambar1.png" alt="Gallery 1" class="h-full w-full object-cover">
                        <figcaption class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-950/95 to-transparent p-6">
                            <p class="text-lg font-semibold">Kegiatan Pembuka Semester</p>
                        </figcaption>
                    </figure>
                    <figure class="relative min-w-full">
                        <img src="assets/image/gambar3.png" alt="Gallery 3" class="h-full w-full object-cover">
                        <figcaption class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-950/95 to-transparent p-6">
                            <p class="text-lg font-semibold">Kegiatan Kelas Pertama di Lamacca</p>
                        </figcaption>
                    </figure>
                </div>

                <div class="absolute inset-x-0 top-0 flex items-center justify-between p-4">
                    <button id="prev-slide" class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/20 bg-slate-900/70 text-lg text-white transition hover:border-cyan-300 hover:text-cyan-300" aria-label="Previous slide">&#10094;</button>
                    <button id="next-slide" class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/20 bg-slate-900/70 text-lg text-white transition hover:border-cyan-300 hover:text-cyan-300" aria-label="Next slide">&#10095;</button>
                </div>

                <div class="absolute inset-x-0 bottom-4 z-10 flex items-center justify-center gap-2">
                    <button class="carousel-dot h-2.5 w-8 rounded-full bg-cyan-300" data-slide="0" aria-label="Go to slide 1"></button>
                    <button class="carousel-dot h-2.5 w-2.5 rounded-full bg-white/40" data-slide="1" aria-label="Go to slide 2"></button>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-slate-950 px-4 py-20 sm:px-6">
        <div class="mx-auto grid max-w-6xl gap-8 rounded-2xl border border-white/10 bg-slate-900/60 p-8 backdrop-blur md:grid-cols-2">
            <div>
                <h3 class="text-2xl font-bold">Hubungi Kami</h3>
                <p class="mt-3 text-slate-300">Punya pertanyaan tentang jadwal, materi, atau dokumentasi kegiatan? Kirim pesan ke tim TEKOM D 25.</p>
                <div class="mt-6 space-y-2 text-sm text-slate-200">
                    <p>Email: info@tekomd25.id</p>
                    <p>Instagram: @tekomd25</p>
                    <p>Lokasi: Kampus Teknologi</p>
                </div>
            </div>
            <form class="space-y-4">
                <input type="text" placeholder="Nama" class="w-full rounded-md border border-white/20 bg-slate-800 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-cyan-300">
                <input type="email" placeholder="Email" class="w-full rounded-md border border-white/20 bg-slate-800 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-cyan-300">
                <textarea rows="4" placeholder="Pesan" class="w-full rounded-md border border-white/20 bg-slate-800 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-cyan-300"></textarea>
                <button type="submit" class="w-full rounded-md bg-cyan-400 px-4 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-300">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <footer class="border-t border-white/10 bg-slate-950 py-6 text-center text-sm text-slate-400">
        <p>&copy; 2026 TEKOM D 25. All rights reserved.</p>
    </footer>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuToggle && mobileMenu) {
            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        const carouselRoot = document.getElementById('about-carousel');
        const carouselTrack = document.getElementById('carousel-track');
        const prevButton = document.getElementById('prev-slide');
        const nextButton = document.getElementById('next-slide');
        const dots = document.querySelectorAll('.carousel-dot');

        if (carouselRoot && carouselTrack && prevButton && nextButton && dots.length) {
            const slides = carouselTrack.children;
            let currentSlide = 0;
            let autoPlayTimer = null;

            function updateDots(index) {
                dots.forEach((dot, i) => {
                    const active = i === index;
                    dot.classList.toggle('w-8', active);
                    dot.classList.toggle('w-2.5', !active);
                    dot.classList.toggle('bg-cyan-300', active);
                    dot.classList.toggle('bg-white/40', !active);
                    dot.setAttribute('aria-current', active ? 'true' : 'false');
                });
            }

            function renderSlide(index) {
                carouselTrack.style.transform = `translateX(-${index * 100}%)`;
                updateDots(index);
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                renderSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                renderSlide(currentSlide);
            }

            function startAutoplay() {
                if (autoPlayTimer) {
                    return;
                }
                autoPlayTimer = setInterval(nextSlide, 4500);
            }

            function stopAutoplay() {
                if (autoPlayTimer) {
                    clearInterval(autoPlayTimer);
                    autoPlayTimer = null;
                }
            }

            function restartAutoplay() {
                stopAutoplay();
                startAutoplay();
            }

            nextButton.addEventListener('click', () => {
                nextSlide();
                restartAutoplay();
            });

            prevButton.addEventListener('click', () => {
                prevSlide();
                restartAutoplay();
            });

            dots.forEach((dot) => {
                dot.addEventListener('click', () => {
                    currentSlide = Number(dot.dataset.slide);
                    renderSlide(currentSlide);
                    restartAutoplay();
                });
            });

            carouselRoot.addEventListener('mouseenter', stopAutoplay);
            carouselRoot.addEventListener('mouseleave', startAutoplay);
            carouselRoot.addEventListener('focusin', stopAutoplay);
            carouselRoot.addEventListener('focusout', (event) => {
                if (carouselRoot.contains(event.relatedTarget)) {
                    return;
                }
                startAutoplay();
            });

            renderSlide(currentSlide);
            startAutoplay();
        }
    </script>
</body>
</html>
