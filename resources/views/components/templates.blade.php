<section id="katalog" x-data="{ currentFilter: 'all' }" class="py-20 lg:py-28 bg-cream-dark border-t border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between space-y-4 md:space-y-0">
            <div class="space-y-3">
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900">
                    Katalog Template <span class="gold-gradient-text">Terpopuler</span>
                </h2>
                <p class="text-slate-600 text-base max-w-xl">
                    Pilih desain tema undangan digital yang sesuai dengan kepribadian & konsep pernikahan impian kalian.
                </p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap gap-2 bg-white p-1.5 rounded-2xl border border-slate-200 shadow-sm self-start">
                <button @click="currentFilter = 'all'" 
                        :class="currentFilter === 'all' ? 'bg-navy text-white shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold transition-all">
                    Semua (3)
                </button>
                <button @click="currentFilter = 'elegant'" 
                        :class="currentFilter === 'elegant' ? 'bg-navy text-white shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold transition-all">
                    Elegant Gold
                </button>
                <button @click="currentFilter = 'rustic'" 
                        :class="currentFilter === 'rustic' ? 'bg-navy text-white shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold transition-all">
                    Rustic & Nature
                </button>
                <button @click="currentFilter = 'agamis'" 
                        :class="currentFilter === 'agamis' ? 'bg-navy text-white shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold transition-all">
                    Agamis
                </button>
            </div>
        </div>

        <!-- Template Cards Grid -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card 1: Royal Gold -->
            <div id="tema-royal-gold" x-show="currentFilter === 'all' || currentFilter === 'elegant'" 
                 x-transition:enter="transition ease-out duration-300 transform"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 class="scroll-mt-28 bg-white rounded-3xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="relative aspect-[4/3] bg-stone-900 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80" 
                             alt="Template Royal Gold" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-amber-500 text-stone-900 font-bold text-[10px] uppercase tracking-wider px-3 py-1 rounded-full shadow">
                            ★ Best Seller
                        </span>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="text-amber-300 text-xs font-serif italic">Seri Elegant Gold</span>
                            <h3 class="text-white font-bold text-xl">Royal Gold Luxury</h3>
                        </div>
                    </div>
                    <div class="p-6 space-y-3">
                        <p class="text-xs text-slate-500">Nuansa mewah bertema warna emas dan floral elegan. Cocok untuk konsep pernikahan bertema gedung / ballroom.</p>
                        <div class="flex flex-wrap gap-1.5 pt-1">
                            <span class="bg-slate-100 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">Full Music</span>
                            <span class="bg-slate-100 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">QRIS Gift</span>
                            <span class="bg-slate-100 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">Gallery Slider</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="#harga" class="w-full py-3 px-4 rounded-xl border border-navy text-navy font-bold text-sm flex items-center justify-center space-x-2 hover:bg-navy hover:text-white transition-colors">
                        <span>Pilih Template Ini</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

            <!-- Card 2: Aesthetic Floral -->
            <div id="tema-botanical-rustic" x-show="currentFilter === 'all' || currentFilter === 'rustic'" 
                 x-transition:enter="transition ease-out duration-300 transform"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 class="scroll-mt-28 bg-white rounded-3xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="relative aspect-[4/3] bg-stone-900 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&w=800&q=80" 
                             alt="Template Botanical Rustic" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-emerald-500 text-white font-bold text-[10px] uppercase tracking-wider px-3 py-1 rounded-full shadow">
                            Trending
                        </span>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="text-emerald-300 text-xs font-serif italic">Seri Rustic & Nature</span>
                            <h3 class="text-white font-bold text-xl">Botanical Rustic</h3>
                        </div>
                    </div>
                    <div class="p-6 space-y-3">
                        <p class="text-xs text-slate-500">Kombinasi dedaunan hangat & warna earthy wood. Sangat pas untuk konsep outdoor party / garden wedding.</p>
                        <div class="flex flex-wrap gap-1.5 pt-1">
                            <span class="bg-slate-100 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">Earth Tone</span>
                            <span class="bg-slate-100 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">Countdown</span>
                            <span class="bg-slate-100 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">RSVP Realtime</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="#harga" class="w-full py-3 px-4 rounded-xl border border-navy text-navy font-bold text-sm flex items-center justify-center space-x-2 hover:bg-navy hover:text-white transition-colors">
                        <span>Pilih Template Ini</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

            <!-- Card 3: Islamic Emerald -->
            <div id="tema-emerald-mubarak" x-show="currentFilter === 'all' || currentFilter === 'agamis'" 
                 x-transition:enter="transition ease-out duration-300 transform"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 class="scroll-mt-28 bg-white rounded-3xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                <div>
                    <div class="relative aspect-[4/3] bg-stone-900 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544077960-604201fe74bc?auto=format&fit=crop&w=800&q=80" 
                             alt="Template Islamic Emerald" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="text-teal-200 text-xs font-serif italic">Seri Agamis</span>
                            <h3 class="text-white font-bold text-xl">Emerald Mubarak</h3>
                        </div>
                    </div>
                    <div class="p-6 space-y-3">
                        <p class="text-xs text-slate-500">Ornamen arsitektur Islami yang anggun dipadu dengan surah pernikahan Ar-Rum 21 yang menyejukkan hati.</p>
                        <div class="flex flex-wrap gap-1.5 pt-1">
                            <span class="bg-slate-100 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">Ayat Al-Quran</span>
                            <span class="bg-slate-100 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">Ornamen Arabesque</span>
                            <span class="bg-slate-100 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">Maps Integration</span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="#harga" class="w-full py-3 px-4 rounded-xl border border-navy text-navy font-bold text-sm flex items-center justify-center space-x-2 hover:bg-navy hover:text-white transition-colors">
                        <span>Pilih Template Ini</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- View All Button -->
        <div class="mt-12 flex justify-center">
            <a href="/templates" class="inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-white text-slate-700 hover:text-navy font-bold text-base border border-slate-200 hover:border-navy-light shadow-sm hover:shadow-md transition-all">
                Lihat Semua Template Desain
            </a>
        </div>

    </div>
</section>
