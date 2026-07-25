<header x-data="{ mobileMenuOpen: false, scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="scrolled ? 'bg-white/85 backdrop-blur-md shadow-sm border-b border-slate-100 py-3' : 'bg-transparent py-5'"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            
            <!-- Brand Logo -->
            <a href="#" class="flex items-center space-x-2.5 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-rose-500 to-amber-500 flex items-center justify-center shadow-md shadow-rose-500/20 group-hover:scale-105 transition-transform">
                    <span class="text-xl">💍</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-serif font-bold text-2xl tracking-tight text-slate-900 group-hover:text-rose-600 transition-colors">
                        Awedding<span class="text-rose-500">.id</span>
                    </span>
                    <span class="text-[10px] uppercase font-bold tracking-widest text-amber-600 -mt-1">Digital Invitation</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8 text-sm font-semibold text-slate-600">
                <a href="#fitur" class="hover:text-rose-600 transition-colors">Fitur Utama</a>
                <a href="#katalog" class="hover:text-rose-600 transition-colors">Katalog Template</a>
                <a href="#harga" class="hover:text-rose-600 transition-colors">Paket Harga</a>
                <a href="#testimoni" class="hover:text-rose-600 transition-colors">Testimoni</a>
                <a href="#faq" class="hover:text-rose-600 transition-colors">FAQ</a>
            </nav>

            <!-- CTA Buttons (Desktop) -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#demo" class="text-sm font-semibold text-slate-700 hover:text-rose-600 transition-colors px-3 py-2">
                    Lihat Demo
                </a>
                <a href="#harga" class="inline-flex items-center justify-center px-5 py-2.5 rounded-full bg-gradient-to-r from-rose-600 to-rose-500 hover:from-rose-500 hover:to-rose-600 text-white font-semibold text-sm shadow-md shadow-rose-500/25 hover:shadow-lg hover:shadow-rose-500/35 transition-all transform hover:-translate-y-0.5">
                    Buat Undangan Sekarang
                </a>
            </div>

            <!-- Hamburger Button (Mobile) -->
            <div class="flex md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        type="button" 
                        class="p-2 rounded-xl text-slate-700 hover:text-rose-600 hover:bg-slate-100 focus:outline-none transition-colors"
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
         class="md:hidden bg-white/95 backdrop-blur-lg border-b border-slate-200 px-4 pt-4 pb-6 space-y-4 shadow-xl">
        <nav class="flex flex-col space-y-3 font-semibold text-slate-700">
            <a href="#fitur" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-lg hover:bg-rose-50 hover:text-rose-600 transition-colors">Fitur Utama</a>
            <a href="#katalog" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-lg hover:bg-rose-50 hover:text-rose-600 transition-colors">Katalog Template</a>
            <a href="#harga" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-lg hover:bg-rose-50 hover:text-rose-600 transition-colors">Paket Harga</a>
            <a href="#testimoni" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-lg hover:bg-rose-50 hover:text-rose-600 transition-colors">Testimoni Manten</a>
            <a href="#faq" @click="mobileMenuOpen = false" class="px-3 py-2 rounded-lg hover:bg-rose-50 hover:text-rose-600 transition-colors">Pertanyaan FAQ</a>
        </nav>
        <div class="pt-2 flex flex-col space-y-2">
            <a href="#harga" @click="mobileMenuOpen = false" class="w-full text-center px-5 py-3 rounded-full bg-rose-600 text-white font-semibold shadow-md text-sm">
                Buat Undangan Sekarang
            </a>
        </div>
    </div>
</header>
