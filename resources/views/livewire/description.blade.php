<div class="relative w-full min-h-screen bg-[#F8FAFC]">
    @section('title', $restaurant->name . ' - BiteHub')

    {{-- Main Header --}}
    @include('livewire.home_components.header')

    <main class="pt-24 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Breadcrumbs --}}
            <nav class="flex mb-8 text-sm font-medium" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-[#F9443D] transition-colors">Home</a></li>
                    <li>
                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"/></svg>
                    </li>
                    <li class="text-[#0f172a]">Restaurant Details</li>
                </ol>
            </nav>

            {{-- Grid Layout --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                {{-- Left & Center Column (Main Info) --}}
                <div class="lg:col-span-2 space-y-8">
                    
                    {{-- Hero / Image Gallery Section --}}
                    <section class="bg-white rounded-[2.5rem] overflow-hidden shadow-sm border border-gray-100">
                        @include('livewire.description_components.hero')
                    </section>

                    {{-- Dynamic Tabs Section (Menu, Reviews, Info) --}}
                    <div x-data="{ activeTab: 'menu' }" class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100">
                        <div class="flex border-b border-gray-100">
                            <button @click="activeTab = 'menu'" 
                                    :class="activeTab === 'menu' ? 'text-[#F9443D] border-[#F9443D]' : 'text-gray-400 border-transparent'"
                                    class="flex-1 py-6 text-sm font-black uppercase tracking-widest border-b-2 transition-all">
                                Menu
                            </button>
                            <button @click="activeTab = 'reviews'" 
                                    :class="activeTab === 'reviews' ? 'text-[#F9443D] border-[#F9443D]' : 'text-gray-400 border-transparent'"
                                    class="flex-1 py-6 text-sm font-black uppercase tracking-widest border-b-2 transition-all">
                                Reviews
                            </button>
                            <button @click="activeTab = 'about'" 
                                    :class="activeTab === 'about' ? 'text-[#F9443D] border-[#F9443D]' : 'text-gray-400 border-transparent'"
                                    class="flex-1 py-6 text-sm font-black uppercase tracking-widest border-b-2 transition-all">
                                About
                            </button>
                        </div>

                        <div class="p-8">
                            <div x-show="activeTab === 'menu'" class="animate-fade-in">
                                @include('livewire.description_components.restaurant_menu')
                            </div>
                            <div x-show="activeTab === 'reviews'" class="animate-fade-in">
                                @include('livewire.description_components.reviews')
                            </div>
                            <div x-show="activeTab === 'about'" class="animate-fade-in space-y-6">
                                <h3 class="text-2xl font-black text-[#0f172a]">About {{ $restaurant->name }}</h3>
                                <p class="text-gray-500 leading-relaxed font-medium">
                                    Experience the finest culinary delights at {{ $restaurant->name }}. Located in the heart of {{ $restaurant->address }}, we offer a unique blend of traditional and modern flavors that will tantalize your taste buds.
                                </p>
                                <div class="grid grid-cols-2 gap-6 pt-6">
                                    <div class="p-6 rounded-3xl bg-gray-50 border border-gray-100">
                                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Opening Hours</p>
                                        <p class="text-sm font-black text-[#0f172a]">10:00 AM - 11:00 PM</p>
                                    </div>
                                    <div class="p-6 rounded-3xl bg-gray-50 border border-gray-100">
                                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Location</p>
                                        <p class="text-sm font-black text-[#0f172a] truncate">{{ $restaurant->address }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right Column (Sidebar) --}}
                <div class="space-y-8">
                    
                    {{-- Offers Card --}}
                    <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-xl font-black text-[#0f172a]">Available Offers</h3>
                            <span class="px-3 py-1 rounded-full bg-[#F9443D]/10 text-[#F9443D] text-[10px] font-black uppercase tracking-widest">
                                {{ $offers->count() }} Active
                            </span>
                        </div>
                        @include('livewire.description_components.available_offers')
                    </div>

                    {{-- Contact / Action Card --}}
                    <div class="bg-[#0f172a] rounded-[2.5rem] p-8 shadow-xl text-white relative overflow-hidden group">
                        <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-40 h-40 bg-[#F9443D]/20 rounded-full blur-3xl group-hover:bg-[#F9443D]/30 transition-colors"></div>
                        
                        <h3 class="text-2xl font-black mb-4 relative z-10">Need a table?</h3>
                        <p class="text-gray-400 text-sm font-medium mb-8 relative z-10">Contact the restaurant directly to reserve your spot.</p>
                        
                        <div class="space-y-4 relative z-10">
                            <button class="w-full py-4 bg-[#F9443D] text-white rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-[#ff5a54] transition-all shadow-lg shadow-[#F9443D]/20">
                                Call Now
                            </button>
                            <button class="w-full py-4 bg-white/10 text-white rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-white/20 transition-all backdrop-blur-md">
                                Send Message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white/80 backdrop-blur-xl pt-32 pb-16 border-t border-gray-100 mt-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="flex flex-col md:flex-row justify-between items-center pt-12 border-t border-gray-100 gap-6">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">&copy; {{ date('Y') }} Bitehub Labs. All rights reserved.</p>
                <div class="flex items-center space-x-6">
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-100 flex items-center justify-center text-[#0f172a] hover:bg-[#0f172a] hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-100 flex items-center justify-center text-[#0f172a] hover:bg-[#0f172a] hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.336 3.608 1.31s1.248 2.242 1.31 3.608c.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.336 2.633-1.31 3.608s-2.242 1.248-3.608 1.31c-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.336-3.608-1.31s-1.248-2.242-1.31-3.608c-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.336-2.633 1.31-3.608s2.242-1.248 3.608-1.31c1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.073 4.948.073s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.059-1.281.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.058-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <livewire:description.review-form :restaurantId="$restaurant->id" />

    {{-- Root Level Modal for Full-Screen View (Generic Gallery) --}}
    <div id="galleryModal" class="hidden fixed inset-0 z-[99999] bg-black/95 transition-all duration-300 opacity-0 overflow-hidden">
        <div class="relative w-full h-full flex flex-col">
            {{-- Top Bar --}}
            <div class="flex justify-between items-center px-6 py-6 text-white w-full absolute top-0 left-0 z-[100000]">
                <div class="text-sm font-black uppercase tracking-widest text-white/60">
                    <span id="galleryCounter">1 / 1</span>
                </div>
                <button onclick="closeGalleryModal()" class="w-12 h-12 rounded-full bg-white/10 hover:bg-[#F9443D] text-white transition-all flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{-- Main Content --}}
            <div class="flex-1 flex items-center justify-center p-4 relative w-full h-full">
                <button id="prevGalleryBtn" onclick="prevGallery()"
                    class="absolute left-4 md:left-10 z-[100000] w-14 h-14 rounded-full bg-white/5 border border-white/10 text-white hover:bg-[#F9443D] hover:border-[#F9443D] transition-all flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <div id="galleryImageContainer"
                    class="w-full h-full flex items-center justify-center cursor-grab active:cursor-grabbing">
                    <img id="galleryImage" src="" alt="Gallery Image" draggable="false"
                        class="max-w-full max-h-screen object-contain shadow-2xl select-none transition-transform duration-100 ease-out origin-center">
                </div>

                <button id="nextGalleryBtn" onclick="nextGallery()"
                    class="absolute right-4 md:right-10 z-[100000] w-14 h-14 rounded-full bg-white/5 border border-white/10 text-white hover:bg-[#F9443D] hover:border-[#F9443D] transition-all flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            {{-- Bottom Caption --}}
            <div class="absolute bottom-10 left-0 right-0 text-center text-white z-[100000] pointer-events-none">
                <h3 id="galleryTitle" class="text-xl font-black tracking-tight drop-shadow-lg"></h3>
            </div>
        </div>
    </div>

    @push('scripts')
        @php
            $menuJson = $menus->map(function ($menu) {
                return [
                    'file_url' => $menu->file_url,
                    'title' => $menu->title,
                ];
            });
        @endphp
        <script>
            (function() {
                let currentGallery = [];
                let currentIndex = 0;
                const menus = @json($menuJson);

                const modal = document.getElementById('galleryModal');
                const galleryImage = document.getElementById('galleryImage');
                const galleryCounter = document.getElementById('galleryCounter');
                const galleryTitle = document.getElementById('galleryTitle');
                const prevBtn = document.getElementById('prevGalleryBtn');
                const nextBtn = document.getElementById('nextGalleryBtn');

                window.openGalleryModal = function(images, index = 0) {
                    currentGallery = images;
                    currentIndex = index;
                    updateGalleryContent();
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                    setTimeout(() => {
                        modal.classList.remove('opacity-0');
                        modal.classList.add('opacity-100');
                    }, 10);
                    document.body.style.overflow = 'hidden';
                }

                window.openMenuModal = function(index) {
                    window.openGalleryModal(menus, index);
                }

                window.closeGalleryModal = function() {
                    modal.classList.add('opacity-0');
                    modal.classList.remove('opacity-100');
                    setTimeout(() => {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                    }, 300);
                    document.body.style.overflow = '';
                }

                function updateGalleryContent() {
                    if (currentGallery.length === 0) return;
                    const item = currentGallery[currentIndex];
                    galleryImage.src = item.file_url;
                    galleryTitle.textContent = item.title || '';
                    galleryCounter.textContent = `${currentIndex + 1} / ${currentGallery.length}`;

                    if(prevBtn) prevBtn.style.visibility = currentGallery.length > 1 ? 'visible' : 'hidden';
                    if(nextBtn) nextBtn.style.visibility = currentGallery.length > 1 ? 'visible' : 'hidden';
                }

                window.nextGallery = function() {
                    if (currentGallery.length === 0) return;
                    currentIndex = (currentIndex + 1) % currentGallery.length;
                    updateGalleryContent();
                }

                window.prevGallery = function() {
                    if (currentGallery.length === 0) return;
                    currentIndex = (currentIndex - 1 + currentGallery.length) % currentGallery.length;
                    updateGalleryContent();
                }

                window.addEventListener('keydown', (e) => {
                    if (modal && !modal.classList.contains('hidden')) {
                        if (e.key === 'Escape') closeGalleryModal();
                        if (e.key === 'ArrowRight') nextGallery();
                        if (e.key === 'ArrowLeft') prevGallery();
                    }
                });
            })();
        </script>
    @endpush

    <style>
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fade-in 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>
</div>
