<header x-data="{ mobileMenuOpen: false, scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="scrolled ? 'bg-cream/95 backdrop-blur-md shadow-sm py-3' : 'bg-transparent py-5'"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            
            <!-- Brand Logo -->
            <a href="#" class="flex items-center space-x-2.5 group">
                <!-- Nanti icon custom diletakkan di sini -->
                <div class="flex flex-col">
                    <span class="font-serif font-bold text-2xl tracking-tight text-navy group-hover:text-navy-light transition-colors">
                        Awedding
                    </span>
                    <span class="text-[10px] uppercase font-bold tracking-widest text-amber-gold -mt-1">Digital Invitation</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8 text-sm font-semibold text-slate-600">
                <a href="#fitur" class="hover:text-navy transition-colors">Fitur Utama</a>
                <a href="#katalog" class="hover:text-navy transition-colors">Katalog Template</a>
                <a href="#harga" class="hover:text-navy transition-colors">Paket Harga</a>
                {{-- <a href="#testimoni" class="hover:text-navy transition-colors">Testimoni</a> --}}
                <a href="#faq" class="hover:text-navy transition-colors">FAQ</a>
            </nav>

            <!-- CTA Buttons (Desktop) -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="/templates" class="text-sm font-semibold text-navy hover:text-navy-light transition-colors px-3 py-2">
                    Lihat Demo
                </a>
                <a href="#harga" class="inline-flex items-center justify-center px-5 py-2.5 rounded-full bg-gradient-to-r from-navy to-navy-light hover:from-navy-light hover:to-navy text-white font-semibold text-sm shadow-md shadow-navy/25 hover:shadow-lg hover:shadow-navy/35 transition-all transform hover:-translate-y-0.5">
                    Buat Undangan Sekarang
                </a>
            </div>

            <!-- Hamburger Button (Mobile) -->
            <div class="flex md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        type="button" 
                        class="p-2 rounded-xl text-navy hover:text-navy-light hover:bg-cream-dark focus:outline-none transition-colors"
                        aria-label="Toggle Navigation">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         x-cloak
         class="md:hidden bg-cream/95 backdrop-blur-lg border-b border-cream-dark px-4 pt-4 pb-6 space-y-4 shadow-xl">
        <nav class="flex flex-col space-y-3 font-semibold text-slate-700">
            <a href="#fitur" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-lg hover:bg-cream-dark hover:text-navy transition-colors">Fitur Utama</a>
            <a href="#katalog" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-lg hover:bg-cream-dark hover:text-navy transition-colors">Katalog Template</a>
            <a href="#harga" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-lg hover:bg-cream-dark hover:text-navy transition-colors">Paket Harga</a>
            {{-- <a href="#testimoni" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-lg hover:bg-cream-dark hover:text-navy transition-colors">Testimoni Manten</a> --}}
            <a href="#faq" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-lg hover:bg-cream-dark hover:text-navy transition-colors">Pertanyaan FAQ</a>
        </nav>
        <div class="pt-2 flex flex-col space-y-2">
            <a href="#harga" @click="mobileMenuOpen = false" class="w-full text-center px-5 py-3 rounded-full bg-navy text-white font-semibold shadow-md text-sm">
                Buat Undangan Sekarang
            </a>
        </div>
    </div>
</header>
