<section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 overflow-hidden bg-gradient-to-b from-rose-50/60 via-slate-50 to-slate-50">
    <!-- Decorative Ambient Glow Backgrounds -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-tr from-rose-200/40 to-amber-200/40 rounded-full blur-3xl -z-10 pointer-events-none"></div>
    <div class="absolute top-12 right-10 w-72 h-72 bg-rose-300/20 rounded-full blur-2xl -z-10 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Copywriting & Actions -->
            <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                
                <!-- Pill Badge -->
                <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-rose-100 to-amber-100 border border-rose-200/80 px-4 py-1.5 rounded-full text-rose-800 text-xs sm:text-sm font-semibold shadow-sm">
                    <span>Jasa Pembuatan Undangan Digital Elegan</span>
                </div>

                <!-- Main Heading -->
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-slate-900 leading-[1.15]">
                    Bagikan Momen Bahagiamu dalam <span class="gold-gradient-text">Undangan Digital</span> Elegan
                </h1>

                <!-- Subtitle Paragraph -->
                <p class="text-sm sm:text-base text-slate-600 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    Buat website undangan pernikahan elegan dengan mudah dan praktis. Dilengkapi fitur RSVP realtime, musik latar, amplop digital QRIS, navigasi lokasi Google Maps, dan nama tamu khusus tanpa batas.
                </p>

                <!-- CTA Actions -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-3 sm:space-y-0 sm:space-x-4">
                    <a href="#harga" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 rounded-full bg-gradient-to-r from-rose-600 via-rose-500 to-amber-600 text-white font-bold text-base shadow-xl shadow-rose-500/30 hover:shadow-2xl hover:shadow-rose-500/40 hover:scale-[1.02] transition-all duration-200">
                        Buat Undangan Sekarang
                    </a>
                    <a href="#katalog" class="w-full sm:w-auto inline-flex items-center justify-center px-7 py-4 rounded-full bg-white text-slate-700 hover:text-rose-600 font-bold text-base border border-slate-200 hover:border-rose-300 shadow-sm hover:shadow-md transition-all">
                        Lihat Contoh Demo
                    </a>
                </div>

                <!-- Key Feature Checkmarks -->
                <div class="pt-4 grid grid-cols-2 sm:grid-cols-3 gap-3 text-xs sm:text-sm text-slate-600 font-medium">
                    <div class="flex items-center justify-center lg:justify-start space-x-2">
                        <span class="text-emerald-500 font-bold">✓</span>
                        <span>Aktif Seketika (Auto Ready)</span>
                    </div>
                    <div class="flex items-center justify-center lg:justify-start space-x-2">
                        <span class="text-emerald-500 font-bold">✓</span>
                        <span>Sebar Tamu Tanpa Batas</span>
                    </div>
                    <div class="flex items-center justify-center lg:justify-start space-x-2">
                        <span class="text-emerald-500 font-bold">✓</span>
                        <span>Desain Premium & Responsif</span>
                    </div>
                </div>

                <!-- Social Proof Stats -->
                <!-- Bagian stats disembunyikan sementara agar terlihat lebih realistis -->

            </div>

            <!-- Right Column: Interactive Phone Mockup Showcase -->
            <div id="demo" class="lg:col-span-5 relative flex justify-center lg:justify-end">
                
                <!-- Floating Card Badges Around Phone -->
                <div class="absolute -top-4 -left-4 sm:left-6 bg-white/90 backdrop-blur-md p-3 rounded-2xl shadow-lg border border-slate-100 flex items-center space-x-3 z-30 animate-float hidden sm:flex">
                    <div class="w-9 h-9 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center text-lg">
                        🎵
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-900">Custom Song</p>
                        <p class="text-[10px] text-slate-500">Putar Musik Favoritmu</p>
                    </div>
                </div>

                <div class="absolute -bottom-6 -right-2 sm:right-6 bg-white/90 backdrop-blur-md p-3.5 rounded-2xl shadow-xl border border-slate-100 flex items-center space-x-3 z-30 animate-float [animation-delay:2s] hidden sm:flex">
                    <div class="w-9 h-9 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-lg">
                        💳
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-900">Amplop QRIS & Rekening</p>
                        <p class="text-[10px] text-slate-500">Kirim Hadiah Langsung</p>
                    </div>
                </div>

                <!-- Include Phone Preview -->
                @include('components.phone-preview')

            </div>

        </div>
    </div>
</section>
