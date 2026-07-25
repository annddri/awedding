<section id="faq" x-data="{ activeFaq: 1 }" class="py-20 lg:py-28 bg-slate-50 border-t border-slate-200/80">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center space-y-4">
            <span class="text-xs uppercase font-bold tracking-widest text-rose-600 bg-rose-50 px-3 py-1 rounded-full border border-rose-200">
                Informasi & Pertanyaan
            </span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-slate-900">
                Sering Ditanyakan (<span class="gold-gradient-text">FAQ</span>)
            </h2>
            <p class="text-slate-600 text-sm sm:text-base">
                Punya pertanyaan seputar cara pembuatan atau fitur Awedding? Temukan jawabannya di bawah ini.
            </p>
        </div>

        <!-- Accordions List -->
        <div class="mt-12 space-y-4">
            
            <!-- Question 1 -->
            <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm">
                <button @click="activeFaq = (activeFaq === 1 ? null : 1)" 
                        class="w-full p-6 text-left font-bold text-base sm:text-lg text-slate-900 flex justify-between items-center space-x-4">
                    <span>Berapa lama proses pembuatan undangan digital sampai siap disebar?</span>
                    <span class="text-rose-600 transition-transform duration-200 text-xl" :class="activeFaq === 1 ? 'rotate-180' : ''">
                        ↓
                    </span>
                </button>
                <div x-show="activeFaq === 1" x-collapse x-cloak class="px-6 pb-6 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-4">
                    Hanya membutuhkan waktu <strong>5 hingga 10 menit</strong>! Setelah Anda mendaftar dan mengisikan data mempelai, undangan akan langsung aktif dan bisa langsung disebarkan ke WhatsApp para tamu.
                </div>
            </div>

            <!-- Question 2 -->
            <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm">
                <button @click="activeFaq = (activeFaq === 2 ? null : 2)" 
                        class="w-full p-6 text-left font-bold text-base sm:text-lg text-slate-900 flex justify-between items-center space-x-4">
                    <span>Apakah nama tamu undangan bisa dibuat tanpa batas?</span>
                    <span class="text-rose-600 transition-transform duration-200 text-xl" :class="activeFaq === 2 ? 'rotate-180' : ''">
                        ↓
                    </span>
                </button>
                <div x-show="activeFaq === 2" x-collapse x-cloak class="px-6 pb-6 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-4">
                    <strong>Ya, benar!</strong> Untuk paket Silver dan Gold VIP, Anda bisa menghasilkan tautan khusus nama tamu tanpa batasan jumlah (`?to=Budi`, `?to=Siti+dan+Pasangan`).
                </div>
            </div>

            <!-- Question 3 -->
            <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm">
                <button @click="activeFaq = (activeFaq === 3 ? null : 3)" 
                        class="w-full p-6 text-left font-bold text-base sm:text-lg text-slate-900 flex justify-between items-center space-x-4">
                    <span>Bagaimana cara kerja fitur Amplop Digital & QRIS?</span>
                    <span class="text-rose-600 transition-transform duration-200 text-xl" :class="activeFaq === 3 ? 'rotate-180' : ''">
                        ↓
                    </span>
                </button>
                <div x-show="activeFaq === 3" x-collapse x-cloak class="px-6 pb-6 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-4">
                    Anda cukup memasukkan nomor rekening bank (BCA, Mandiri, BRI, dll) atau mengunggah foto kode QRIS milik Anda. Hadiah dari tamu akan <strong>langsung 100% masuk ke rekening pribadi Anda</strong> tanpa potongan komisi dari pihak kami.
                </div>
            </div>

            <!-- Question 4 -->
            <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm">
                <button @click="activeFaq = (activeFaq === 4 ? null : 4)" 
                        class="w-full p-6 text-left font-bold text-base sm:text-lg text-slate-900 flex justify-between items-center space-x-4">
                    <span>Apakah bisa memakai lagu atau musik favorit sendiri?</span>
                    <span class="text-rose-600 transition-transform duration-200 text-xl" :class="activeFaq === 4 ? 'rotate-180' : ''">
                        ↓
                    </span>
                </button>
                <div x-show="activeFaq === 4" x-collapse x-cloak class="px-6 pb-6 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-4">
                    Tentu saja! Anda bisa mengunggah file musik MP3 sendiri atau memilih dari koleksi pustaka musik romantis yang telah kami sediakan.
                </div>
            </div>

            <!-- Question 5 -->
            <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm">
                <button @click="activeFaq = (activeFaq === 5 ? null : 5)" 
                        class="w-full p-6 text-left font-bold text-base sm:text-lg text-slate-900 flex justify-between items-center space-x-4">
                    <span>Bagaimana jika ada perubahan jadwal atau lokasi acara di kemudian hari?</span>
                    <span class="text-rose-600 transition-transform duration-200 text-xl" :class="activeFaq === 5 ? 'rotate-180' : ''">
                        ↓
                    </span>
                </button>
                <div x-show="activeFaq === 5" x-collapse x-cloak class="px-6 pb-6 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-4">
                    Anda dapat melakukan edit data kapan saja hingga hari H tanpa dikenakan biaya tambahan. Garansi revisi sepuasnya!
                </div>
            </div>

        </div>

    </div>
</section>
