<!-- Interactive Mobile Phone Preview Frame -->
<div x-data="{ activeTab: 'home', musicPlaying: true }" class="relative mx-auto w-full max-w-[320px] sm:max-w-[360px] aspect-[9/18.5] bg-slate-900 rounded-[48px] p-3 shadow-2xl shadow-rose-950/20 border-4 border-slate-800 ring-1 ring-slate-900/5 transition-transform hover:scale-[1.01] duration-300">
    
    <!-- Phone Top Notch / Dynamic Island -->
    <div class="absolute top-5 left-1/2 -translate-x-1/2 w-28 h-5 bg-slate-900 rounded-full z-30 flex items-center justify-center space-x-2">
        <div class="w-2.5 h-2.5 rounded-full bg-slate-800"></div>
        <div class="w-2 h-2 rounded-full bg-rose-500/80 animate-pulse"></div>
    </div>

    <!-- Phone Inner Screen -->
    <div class="relative w-full h-full bg-stone-900 rounded-[38px] overflow-hidden flex flex-col justify-between text-stone-100 select-none">
        
        <!-- Invitation Screen Header Banner -->
        <div class="relative h-2/5 w-full bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80');">
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-stone-900"></div>
            
            <!-- Music Player Pill Floating Top Right -->
            <button @click="musicPlaying = !musicPlaying" class="absolute top-9 right-4 bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-[11px] font-medium flex items-center space-x-1.5 border border-white/30 z-20">
                <span x-show="musicPlaying" class="flex space-x-0.5 items-end h-3">
                    <span class="w-0.5 h-3 bg-rose-400 animate-bounce"></span>
                    <span class="w-0.5 h-2 bg-amber-300 animate-bounce delay-75"></span>
                    <span class="w-0.5 h-3.5 bg-rose-300 animate-bounce delay-150"></span>
                </span>
                <span x-show="!musicPlaying" class="text-stone-300">🎵 Off</span>
                <span x-show="musicPlaying">Perfect - Ed Sheeran</span>
            </button>

            <!-- Custom Guest Name Greeting Tag -->
            <div class="absolute bottom-3 left-4 right-4 bg-white/10 backdrop-blur-md p-2.5 rounded-2xl border border-white/20 text-center">
                <p class="text-[10px] uppercase tracking-wider text-amber-200 font-semibold">Kepada Yth. Bapak/Ibu/Saudara</p>
                <p class="text-xs font-bold text-white tracking-wide">Budi & Partner</p>
            </div>
        </div>

        <!-- Invitation Main Content Area -->
        <div class="px-5 py-3 flex-1 flex flex-col justify-between text-center space-y-3 bg-stone-900">
            <div>
                <p class="font-serif text-amber-300 text-xs italic tracking-widest uppercase">The Wedding Of</p>
                <h3 class="font-serif font-bold text-2xl text-stone-100 tracking-tight my-1">
                    Romeo & Juliet
                </h3>
                <p class="text-[11px] text-stone-400">Sabtu, 24 Oktober 2026</p>
            </div>

            <!-- Countdown Timer Card -->
            <div class="grid grid-cols-4 gap-1.5 bg-stone-800/80 p-2 rounded-xl border border-amber-500/20 text-stone-200">
                <div class="flex flex-col">
                    <span class="font-bold text-amber-400 text-sm">88</span>
                    <span class="text-[9px] text-stone-400">Hari</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-amber-400 text-sm">14</span>
                    <span class="text-[9px] text-stone-400">Jam</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-amber-400 text-sm">42</span>
                    <span class="text-[9px] text-stone-400">Menit</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-amber-400 text-sm">30</span>
                    <span class="text-[9px] text-stone-400">Detik</span>
                </div>
            </div>

            <!-- Quick Action Interactive Buttons -->
            <div class="space-y-2 pt-1">
                <button class="w-full py-2 rounded-xl bg-gradient-to-r from-rose-600 to-amber-600 text-white font-semibold text-xs shadow-lg shadow-rose-900/40 hover:opacity-95">
                    💌 Buka Undangan Digital
                </button>
                <div class="grid grid-cols-2 gap-2 text-[10px]">
                    <span class="bg-stone-800 py-1.5 px-2 rounded-lg border border-stone-700 text-stone-300 flex items-center justify-center">
                        📍 Google Maps
                    </span>
                    <span class="bg-stone-800 py-1.5 px-2 rounded-lg border border-stone-700 text-amber-300 font-semibold flex items-center justify-center">
                        💳 Amplop QRIS
                    </span>
                </div>
            </div>
        </div>

        <!-- Phone Bottom Navigation Simulation -->
        <div class="h-10 bg-stone-950 border-t border-stone-800 flex items-center justify-around text-stone-400 text-[10px]">
            <span class="text-rose-400 font-bold flex flex-col items-center">🏠 Home</span>
            <span class="flex flex-col items-center">📍 Lokasi</span>
            <span class="flex flex-col items-center">📷 Galeri</span>
            <span class="flex flex-col items-center">💬 RSVP</span>
        </div>

        <!-- Home Indicator Bar -->
        <div class="absolute bottom-1 left-1/2 -translate-x-1/2 w-28 h-1 bg-stone-600 rounded-full"></div>
    </div>
</div>
