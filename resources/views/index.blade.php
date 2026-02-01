<!doctype html>
<html lang="cs" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>STIMMEL — Návrh a montáž vzduchotechniky | STIMMEL</title>
    <meta name="description" content="Profesionální návrh a montáž vzduchotechniky pro administrativní a průmyslové budovy. Komplexní služby od projektu přes dodávku až po finální montáž a servis." />
    <meta name="keywords" content="vzduchotechnika, montáž vzduchotechniky, návrh vzduchotechniky, klimatizace, větrání, průmyslová vzduchotechnika, servis vzduchotechniky" />
    <meta name="author" content="STIMMEL vzduchotechnika" />
    <meta name="robots" content="index, follow" />
    <meta property="og:title" content="STIMMEL — Návrh a montáž vzduchotechniky | STIMMEL" />
    <meta property="og:description" content="Profesionální návrh a montáž vzduchotechniky pro administrativní a průmyslové budovy. Komplexní služby od projektu přes dodávku až po finální montáž a servis." />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="cs_CZ" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="STIMMEL — Návrh a montáž vzduchotechniky | STIMMEL" />
    <meta name="twitter:description" content="Profesionální návrh a montáž vzduchotechniky pro administrativní a průmyslové budovy." />
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preload" href="{{ asset('img/hero.webp') }}" as="image" />
    <link rel="preload" href="{{ asset('logo.webp') }}" as="image" />
    <meta name="theme-color" content="#0066CC" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="STIMMEL" />
    <link rel="apple-touch-icon" href="{{ asset('logo.webp') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gradient-to-br from-gray-50 to-blue-50 text-gray-800 leading-relaxed">
<!-- Hero -->
<section class="relative min-h-screen bg-cover bg-center bg-no-repeat text-white overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 via-primary/80 to-secondary/70"></div>
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-72 h-72 bg-accent/20 rounded-xl blur-3xl animate-float"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-primary/20 rounded-xl blur-3xl animate-float" style="animation-delay: 2s"></div>
        <div class="absolute top-1/2 left-1/2 w-80 h-80 bg-secondary/20 rounded-xl blur-3xl animate-float" style="animation-delay: 4s"></div>
    </div>

    <header class="relative bg-white/60 backdrop-blur-md text-white shadow-lg z-50 w-full border-b border-white/20">
        <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">
            <a href="#" class="flex items-center gap-3 group">
                <div class="relative">
                    <img class="h-10" src="logo.webp" alt="logo" width="50" height="40" fetchpriority="high">
                </div>
                <div class="text-left">
                    <h1 class="text-xl font-bold tracking-tight">STIMMEL</h1>
                    <p class="text-sm text-blue-100 font-medium">Vzduchotechnika</p>
                </div>
            </a>

            <nav class="hidden lg:flex gap-8 items-center text-sm font-medium" role="navigation" aria-label="Hlavní navigace">
                <a href="#about" class="hover:text-accent transition-colors duration-300 relative group" aria-label="Přejít na sekci O nás">
                    O nás
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#services" class="hover:text-accent transition-colors duration-300 relative group" aria-label="Přejít na sekci Služby">
                    Služby
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#projects" class="hover:text-accent transition-colors duration-300 relative group" aria-label="Přejít na sekci Projekty">
                    Projekty
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-accent transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="tel:+420770618881" class="bg-gradient-to-r from-primary to-secondary text-white px-6 py-3 rounded-xl font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300" aria-label="Zavolat +420 770 618 881">
                    +420 770 618 881
                </a>
            </nav>

            <div class="lg:hidden">
                <button id="burger" aria-label="Otevřít mobilní menu" aria-expanded="false" aria-controls="mobileMenu" class="p-3 rounded-lg bg-white/20 backdrop-blur-sm border border-white/30 hover:bg-white/30 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobileMenu" class="hidden lg:hidden bg-white/10 backdrop-blur-md text-white border-t border-white/20" role="navigation" aria-label="Mobilní navigace">
            <div class="px-6 py-6 flex flex-col gap-4">
                <a href="#about" class="py-3 px-4 rounded-lg hover:bg-white/20 transition-all duration-300 font-medium" aria-label="Přejít na sekci O nás">O nás</a>
                <a href="#services" class="py-3 px-4 rounded-lg hover:bg-white/20 transition-all duration-300 font-medium" aria-label="Přejít na sekci Služby">Služby</a>
                <a href="#projects" class="py-3 px-4 rounded-lg hover:bg-white/20 transition-all duration-300 font-medium" aria-label="Přejít na sekci Projekty">Projekty</a>
                <a href="tel:+420770618881" class="bg-gradient-to-r from-primary to-secondary text-white px-6 py-3 rounded-xl font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300 text-center" aria-label="Zavolat +420 770 618 881">
                    +420 770 618 881
                </a>
            </div>
        </div>
    </header>
    <img src="{{ asset('img/hero.webp') }}"
         class="absolute inset-0 object-cover w-full h-full"
         alt="Profesionální vzduchotechnika v moderní budově"
         loading="eager" decoding="async"
         fetchpriority="high">
    <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-black/40 to-black/60"></div>

    <div class="relative max-w-7xl mx-auto px-6 pt-40 pb-32 text-center" id="main-content">
        <div class="animate-slide-up">
            <h2 class="text-3xl md:text-7xl font-extrabold leading-tight mb-6 bg-gradient-to-r from-white to-blue-100 bg-clip-text text-transparent">
                Projekce a realizace
                <br>
                <span class="text-accent">vzduchotechniky</span>
            </h2>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed opacity-95">
                Komplexní služby od projektu přes dodávku až po finální montáž a servis.
            </p>
            <div class="mt-12 flex flex-wrap justify-center gap-6">
                <a href="#contact" class="group bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-xl font-semibold text-lg shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition-all duration-300">
                    <span class="flex items-center gap-2">
                        Nezávazná poptávka
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section id="services" class="relative py-24 bg-gradient-to-br from-white via-blue-50/30 to-white" aria-labelledby="services-heading">
    <!-- Background decoration -->
    <div class="absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-accent/10 to-primary/10 rounded-xl blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-secondary/10 to-accent/10 rounded-xl blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h3 id="services-heading" class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent mb-4">
                Naše služby
            </h3>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Komplexní služby od návrhu po servis s důrazem na kvalitu a spolehlivost.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <article class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M20,6.52897986 L20,19.5010024 C20,20.8817143 18.8807119,22.0010024 17.5,22.0010024 L6.5,22.0010024 C5.11928813,22.0010024 4,20.8817143 4,19.5010024 L4,4.50100238 C4,3.1202905 5.11928813,2.00100238 6.5,2.00100238 L15.4720225,2.00100238 C15.6047688,1.99258291 15.7429463,2.03684187 15.8535534,2.14744899 L19.8535534,6.14744899 C19.9641605,6.25805611 20.0084195,6.39623363 20,6.52897986 Z M15,3.00100238 L6.5,3.00100238 C5.67157288,3.00100238 5,3.67257525 5,4.50100238 L5,19.5010024 C5,20.3294295 5.67157288,21.0010024 6.5,21.0010024 L17.5,21.0010024 C18.3284271,21.0010024 19,20.3294295 19,19.5010024 L19,7.00100238 L15.5,7.00100238 C15.2238576,7.00100238 15,6.77714475 15,6.50100238 L15,3.00100238 Z M16,3.70810916 L16,6.00100238 L18.2928932,6.00100238 L16,3.70810916 Z M8.5,10 C8.22385763,10 8,9.77614237 8,9.5 C8,9.22385763 8.22385763,9 8.5,9 L15.5,9 C15.7761424,9 16,9.22385763 16,9.5 C16,9.77614237 15.7761424,10 15.5,10 L8.5,10 Z M8.5,13 C8.22385763,13 8,12.7761424 8,12.5 C8,12.2238576 8.22385763,12 8.5,12 L15.5,12 C15.7761424,12 16,12.2238576 16,12.5 C16,12.7761424 15.7761424,13 15.5,13 L8.5,13 Z M8.5,16 C8.22385763,16 8,15.7761424 8,15.5 C8,15.2238576 8.22385763,15 8.5,15 L13.5,15 C13.7761424,15 14,15.2238576 14,15.5 C14,15.7761424 13.7761424,16 13.5,16 L8.5,16 Z">

                            </path>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors duration-300">Návrh vzduchotechniky</h4>
                    <p class="text-gray-600 leading-relaxed">Projektování, dimenzování a výběr zařízení dle vašich požadavků a norem.</p>
                </div>
            </article>

            <article class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors duration-300">Montáž a instalace</h4>
                    <p class="text-gray-600 leading-relaxed">Kompletní montáž, připojení a uvedení do provozu s odborným dohledem.</p>
                </div>
            </article>

            <article class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors duration-300">Servis & údržba</h4>
                    <p class="text-gray-600 leading-relaxed">Pravidelný servis a opravy pro dlouhodobý a spolehlivý provoz vašeho zařízení.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Why us -->
<section id="about" class="relative py-24 bg-gradient-to-br from-gray-50 to-white">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 right-20 w-64 h-64 bg-gradient-to-br from-accent/10 to-primary/10 rounded-xl blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-64 h-64 bg-gradient-to-br from-secondary/10 to-accent/10 rounded-xl blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h3 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent mb-4">
                Proč si vybrat nás
            </h3>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                S naší společností máte jistotu, že vaše zařízení bude nainstalováno správně a bez problémů.
                Poskytujeme osobní přístup a řešení šitá na míru přesně pro vaše potřeby.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <article class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors duration-300">Zkušený tým profesionálů</h4>
                    <p class="text-gray-600 leading-relaxed">Naši odborníci mají letitou praxi v oboru vzduchotechniky a zaručují profesionální přístup ke každému projektu.</p>
                </div>
            </article>

            <article class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors duration-300">Rychlá a precizní realizace</h4>
                    <p class="text-gray-600 leading-relaxed">Díky našim zkušenostem a modernímu vybavení zajišťujeme rychlou a přesnou realizaci všech projektů v krátkých časových lhůtách.</p>
                </div>
            </article>

            <article class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors duration-300">Včasné a spolehlivé provedení</h4>
                    <p class="text-gray-600 leading-relaxed">Vždy dodržujeme dohodnuté termíny a zaručujeme spolehlivé provedení všech prací s důrazem na kvalitu a detaily.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Projects -->
<section id="projects" class="relative py-24 bg-gradient-to-br from-white via-blue-50/30 to-white" x-data="projectsCarousel">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-10 left-10 w-72 h-72 bg-gradient-to-br from-accent/10 to-primary/10 rounded-xl blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-72 h-72 bg-gradient-to-br from-secondary/10 to-accent/10 rounded-xl blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 space-y-16">
        <div class="text-center">
            <h3 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent mb-4">
                Naše projekty
            </h3>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Ukázky našich úspěšných realizací z praxe.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="relative overflow-hidden h-64">
                    @include('partials.image-carousel', [
                        'images' => [
                            asset('img/projects/project1/vyrobni-hala-kvasiny-1.webp'),
                            asset('img/projects/project1/vyrobni-hala-kvasiny-2.webp'),
                            asset('img/projects/project1/vyrobni-hala-kvasiny-3.webp'),
                            asset('img/projects/project1/vyrobni-hala-kvasiny-4.webp'),
                            asset('img/projects/project1/vyrobni-hala-kvasiny-5.webp'),
                        ],
                        'altPrefix' => 'Výrobní hala - Kvasiny'
                    ])
                </div>
                <div class="p-6">
                    <p class="text-xl font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors duration-300">Výrobní hala - Kvasiny</p>
                    <p class="text-gray-600 leading-relaxed">Kompletní dodávka vzduchotechniky a montáž pro moderní kancelářské prostory.</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="relative overflow-hidden h-64" x-data="{ currentImage: 0 }">
                    @include('partials.image-carousel', [
                        'images' => [
                            asset('img/projects/project2/agroskola-pozdatin-1.webp'),
                            asset('img/projects/project2/agroskola-pozdatin-2.webp'),
                            asset('img/projects/project2/agroskola-pozdatin-3.webp'),
                            asset('img/projects/project2/agroskola-pozdatin-4.webp'),
                        ],
                        'altPrefix' => 'Agroskola - Pozďatin'
                    ])
                </div>
                <div class="p-6">
                    <p class="text-xl font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors duration-300">Agroskola - Pozďatin</p>
                    <p class="text-gray-600 leading-relaxed">Velká zakázka s důrazem na efektivitu a spolehlivost provozu.</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="relative overflow-hidden h-64" x-data="{ currentImage: 0 }">
                    @include('partials.image-carousel', [
                        'images' => [
                            asset('img/projects/project3/rodiny-dum-bucovice-1.webp'),
                            asset('img/projects/project3/rodiny-dum-bucovice-2.webp'),
                            asset('img/projects/project3/rodiny-dum-bucovice-3.webp'),
                            asset('img/projects/project3/rodiny-dum-bucovice-4.webp'),
                        ],
                        'altPrefix' => 'Rodiny dům - Bucovice'
                    ])
                </div>
                <div class="p-6">
                    <p class="text-xl font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors duration-300">Rodiny dům - Bucovice</p>
                    <p class="text-gray-600 leading-relaxed">Kompletní dodávka vzduchotechniky a montáž pro moderní kancelářské prostory.</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Project 4 -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="relative overflow-hidden h-64" x-data="{ currentImage: 0 }">
                    @include('partials.image-carousel', [
                        'images' => [
                            asset('img/projects/project4/bytove-domy-golf-resort-praha-1.webp'),
                            asset('img/projects/project4/bytove-domy-golf-resort-praha-2.webp'),
                            asset('img/projects/project4/bytove-domy-golf-resort-praha-3.webp'),
                            asset('img/projects/project4/bytove-domy-golf-resort-praha-4.webp'),
                            asset('img/projects/project4/bytove-domy-golf-resort-praha-5.webp'),
                        ],
                        'altPrefix' => 'Bytové domy Golf Resort - Praha'
                    ])
                </div>
                <div class="p-6">
                    <p class="text-xl font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors duration-300">Bytové domy Golf Resort - Praha</p>
                    <p class="text-gray-600 leading-relaxed">Modernizace vzduchotechniky v historické budově s zachováním charakteru.</p>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="relative overflow-hidden h-64" x-data="{ currentImage: 0 }">
                    @include('partials.image-carousel', [
                        'images' => [
                            asset('img/projects/project5/chemicka-vyroba-bohumin-1.webp'),
                            asset('img/projects/project5/chemicka-vyroba-bohumin-2.webp'),
                            asset('img/projects/project5/chemicka-vyroba-bohumin-3.webp'),
                            asset('img/projects/project5/chemicka-vyroba-bohumin-4.webp'),
                            asset('img/projects/project5/chemicka-vyroba-bohumin-5.webp'),
                            asset('img/projects/project5/chemicka-vyroba-bohumin-6.webp'),
                        ],
                        'altPrefix' => 'Chemická výroba - Bohumín'
                    ])
                </div>
                <div class="p-6">
                    <p class="text-xl font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors duration-300">Chemická výroba - Bohumín</p>
                    <p class="text-gray-600 leading-relaxed">Velká zakázka s důrazem na efektivitu a spolehlivost provozu.</p>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                <div class="relative overflow-hidden h-64" x-data="{ currentImage: 0 }">
                    @include('partials.image-carousel', [
                        'images' => [
                            asset('img/projects/project6/agroskola-pozdatin-1.webp'),
                            asset('img/projects/project6/agroskola-pozdatin-2.webp'),
                            asset('img/projects/project6/agroskola-pozdatin-3.webp'),
                            asset('img/projects/project6/agroskola-pozdatin-4.webp'),
                        ],
                        'altPrefix' => 'Agroskola Pozďatin'
                    ])
                </div>
                <div class="p-6">
                    <p class="text-xl font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors duration-300">Rekonstrukce — Olomouc</p>
                    <p class="text-gray-600 leading-relaxed">Modernizace vzduchotechniky v historické budově s zachováním charakteru.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('projectsCarousel', () => ({}))
        })
    </script>
</section>

<!-- Contact -->
<section id="contact" class="relative py-24 bg-gradient-to-br from-gray-50 to-white" aria-labelledby="contact-heading">
    <div class="absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute top-20 right-20 w-64 h-64 bg-gradient-to-br from-accent/10 to-primary/10 rounded-xl blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-64 h-64 bg-gradient-to-br from-secondary/10 to-accent/10 rounded-xl blur-3xl"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-6">
        <div class="text-center mb-16">
            <h3 id="contact-heading" class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent mb-4">
                Nezávazná poptávka
            </h3>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Pošlete nám základní informace a my se vám co nejdříve ozveme s nabídkou.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12">
            <form class="grid grid-cols-1 gap-6" action="/send-inquiry" method="post" enctype="multipart/form-data" novalidate>
{{--                <fieldset>--}}
                    <legend class="sr-only">Kontaktní formulář</legend>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Jméno *</label>
                            <input id="name" name="name" placeholder="Vaše jméno" class="w-full p-4 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300" required aria-required="true" autocomplete="name" />
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Telefon *</label>
                            <input id="phone" name="phone" placeholder="+420 123 456 789" class="w-full p-4 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300" required aria-required="true" autocomplete="tel" type="tel" />
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input id="email" name="email" type="email" placeholder="vas@email.cz" class="w-full p-4 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300" autocomplete="email" />
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Krátký popis poptávky</label>
                        <textarea id="message" name="message" rows="5" placeholder="Popište nám vaši poptávku..." class="bg-white w-full p-4 rounded-xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-300" aria-describedby="message-help"></textarea>
                        <small id="message-help" class="text-gray-500 text-sm mt-1">Prosím popište co nejpřesněji vaši poptávku</small>
                    </div>

                    <div>
                        <label for="attachment" class="flex items-center gap-3 text-sm text-gray-600 cursor-pointer hover:text-gray-800 transition-colors duration-300">
                            <input type="file" id="attachment" name="attachment" class="hidden" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" aria-describedby="attachment-help" />
                            <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center border border-gray-200">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                        </div>
                        <span>Nahrát soubor (pokud máte technické podklady)</span>
                    </label>
                </div>

                <div class="flex flex-col sm:flex-row justify-center items-center gap-6 mt-8">
                    <button type="submit" class="bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-xl font-semibold text-lg shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 w-full sm:w-auto">
                        Odeslat poptávku
                    </button>
                    <div class="flex items-center gap-2 text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <a href="tel:+420770618881" class="font-semibold hover:text-primary transition-colors duration-300">+420 770 618 881</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-gray-200 py-16">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-black/20"></div>
        <div class="absolute top-10 right-10 w-64 h-64 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-xl blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-64 h-64 bg-gradient-to-br from-accent/10 to-primary/10 rounded-xl blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-12 mb-12">
            <div>
                <div class="flex items-center gap-3 mb-6">
{{--                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="60" height="30">--}}
{{--                        <path d="M0,30 C20,10 40,50 60,30 C80,10 100,30 100,30" fill="none" stroke="#5EB8F0" stroke-width="5" class="animate-pulse" />--}}
{{--                        <path d="M0,50 C20,30 40,70 60,50 C80,30 100,50 100,50" fill="none" stroke="#0074CC" stroke-width="5" class="animate-pulse" style="animation-delay: 0.5s" />--}}
{{--                        <path d="M0,70 C20,50 40,90 60,70 C80,50 100,70 100,70" fill="none" stroke="#00A1FF" stroke-width="5" class="animate-pulse" style="animation-delay: 1s" />--}}
{{--                    </svg>--}}
{{--                    <h4 class="text-2xl font-bold">STIMMEL</h4>--}}
                    <div class="relative">
                        <img class="h-10" src="logo.webp" alt="logo" width="50" height="40" fetchpriority="high">
                    </div>
                    <div class="text-left">
                        <h1 class="text-xl font-bold tracking-tight">STIMMEL</h1>
                        <p class="text-sm text-blue-100 font-medium">Vzduchotechnika</p>
                    </div>
                </div>
                <p class="text-gray-400 leading-relaxed">
                    Dech života v každém nádechu — kvalitní vzduchotechnika pro vaše pohodlí a zdraví.
                </p>
                <div class="flex gap-4 mt-6">
                    <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-primary hover:text-white transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-primary hover:text-white transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <p class="text-xl font-bold mb-6">Kontakty</p>
                <div class="space-y-4 text-gray-400">
                    <div class="flex items-center gap-3 hover:text-white transition-colors duration-300">
                        <svg class="w-9 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2pa2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>info@STIMMEL.cz</span>
                    </div>
                    <div class="flex items-center gap-3 hover:text-white transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>+420 770 618 881</span>
                    </div>
                    <div class="flex items-center gap-3 hover:text-white transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Černovicke nábřeží 7a, Brno</span>
                    </div>
                </div>
            </div>

            <div>
                <p class="text-xl font-bold mb-6">Rychlé odkazy</p>
                <ul class="space-y-3 text-gray-400">
                    <li><a href="#about" class="hover:text-white transition-colors duration-300">O nás</a></li>
                    <li><a href="#services" class="hover:text-white transition-colors duration-300">Služby</a></li>
                    <li><a href="#projects" class="hover:text-white transition-colors duration-300">Projekty</a></li>
                    <li><a href="#pricing" class="hover:text-white transition-colors duration-300">Ceník</a></li>
                    <li><a href="#contact" class="hover:text-white transition-colors duration-300">Kontakt</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-700 pt-8 text-center text-gray-400">
            <p>&copy; <span id="year"></span> STIMMEL. Všechna práva vyhrazena.</p>
        </div>
    </div>
</footer>

<script>
    document.getElementById('burger').addEventListener('click', function(){
        var m = document.getElementById('mobileMenu');
        m.classList.toggle('hidden');
    });
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
</body>
</html>
