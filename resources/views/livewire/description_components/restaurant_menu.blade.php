<div>
    {{-- Restaurant Menus Section --}}
    <div class="w-full px-4 py-6">
        <div class="bg-white rounded-xl p-6 sm:p-8 shadow-sm w-full">
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2 sm:gap-4">
                <h2 class="text-[22px] font-normal leading-[28px] text-[#004225]">
                    Restaurant Menus
                </h2>
                <p class="text-sm text-[#555]">
                    Tap any card to view the menu inline.
                </p>
            </div>

            {{-- Divider --}}
            <hr class="border-t border-[rgba(197,197,197,0.5)] my-5">

            @if ($menus->isEmpty())
                <div class="text-center py-8">
                    <p class="text-base text-[#666]">The owner hasn’t uploaded any menus yet. Please check back later.
                    </p>
                </div>
            @else
                {{-- Menu Cards --}}
                <div class="flex overflow-x-auto space-x-4 pb-4">
                    @foreach ($menus as $index => $menu)
                        @php
                            $preview = $menu->preview_url ?? asset('images/restaurant1.jpg');
                        @endphp
                        <button onclick="openMenuModal({{ $index }})"
                            class="group relative rounded-xl overflow-hidden shadow-[0px_10px_34px_rgba(20,20,43,0.1)] hover:shadow-xl transition-all duration-200 bg-white flex-shrink-0 w-48 text-left">
                            <img src="{{ $preview }}" alt="{{ $menu->title }}"
                                class="w-full h-[160px] object-cover">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-3">
                                <p class="text-white text-sm font-semibold leading-tight">
                                    {{ $menu->title }}
                                </p>
                                <p class="text-white/80 text-xs">
                                    {{ $menu->page_count ? $menu->page_count . ' pages' : 'View menu' }}
                                </p>
                            </div>
                        </button>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    {{-- Full Screen Modal --}}
    <div id="menuModal" class="hidden fixed inset-0 z-[9999] bg-black/90 transition-opacity duration-300 opacity-0">
        {{-- Top Bar --}}
        <div class="flex justify-between items-center px-6 py-4 text-white w-full absolute top-0 left-0 z-20">
            <div class="text-lg font-medium">
                <span id="menuCounter">1 / 1</span>
            </div>
            <button onclick="closeMenuModal()" class="text-white hover:text-gray-300 focus:outline-none p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Main Content (Image) --}}
        <div class="flex-1 flex items-center justify-center p-4 relative w-full h-full overflow-hidden">
            {{-- Prev Button --}}
            <button id="prevBtn" onclick="prevMenu()"
                class="absolute left-4 md:left-8 z-20 text-white/70 hover:text-white focus:outline-none p-2 transition-colors bg-black/20 hover:bg-black/40 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            {{-- Image Container --}}
            <div id="imageContainer"
                class="relative w-full h-full flex items-center justify-center overflow-hidden cursor-grab active:cursor-grabbing">
                <img id="menuImage" src="" alt="Menu" draggable="false"
                    class="max-w-full max-h-[85vh] object-contain shadow-2xl rounded-sm select-none transition-transform duration-100 ease-out origin-center">
            </div>

            {{-- Next Button --}}
            <button id="nextBtn" onclick="nextMenu()"
                class="absolute right-4 md:right-8 z-20 text-white/70 hover:text-white focus:outline-none p-2 transition-colors bg-black/20 hover:bg-black/40 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        {{-- Bottom Caption --}}
        <div class="absolute bottom-8 left-0 right-0 text-center text-white/90 pointer-events-none z-20">
            <h3 id="menuTitle" class="text-xl font-medium"></h3>
        </div>
    </div>

    @push('scripts')
        @php
            $menuJson = $menus->map(function ($menu) {
                return [
                    'file_url' => $menu->file_url,
                    'title' => $menu->title,
                    'preview_url' => $menu->preview_url ?? asset('images/restaurant1.jpg'),
                ];
            });
        @endphp
        <script>
            const menus = @json($menuJson);

            let currentIndex = 0;
            let scale = 1;
            let pointX = 0;
            let pointY = 0;
            let isDragging = false;
            let startX = 0;
            let startY = 0;

            const modal = document.getElementById('menuModal');
            const menuImage = document.getElementById('menuImage');
            const imageContainer = document.getElementById('imageContainer');
            const menuCounter = document.getElementById('menuCounter');
            const menuTitle = document.getElementById('menuTitle');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            function openMenuModal(index) {
                currentIndex = index;
                updateModalContent();
                modal.classList.add('flex', 'flex-col'); // Add flex utilities when showing
                modal.classList.remove('hidden');
                // Small delay to allow display:block to apply before opacity transition
                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                }, 10);
                document.body.style.overflow = 'hidden';
                resetZoom();
            }

            function closeMenuModal() {
                modal.classList.add('opacity-0');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex', 'flex-col'); // Remove flex utilities when hiding
                }, 300); // Match transition duration
                document.body.style.overflow = '';
            }

            function updateModalContent() {
                if (menus.length === 0) return;
                const menu = menus[currentIndex];
                menuImage.src = menu.file_url;
                menuTitle.textContent = menu.title;
                menuCounter.textContent = `${currentIndex + 1} / ${menus.length}`;

                prevBtn.style.display = menus.length > 1 ? 'block' : 'none';
                nextBtn.style.display = menus.length > 1 ? 'block' : 'none';
            }

            function nextMenu() {
                currentIndex = (currentIndex + 1) % menus.length;
                updateModalContent();
                resetZoom();
            }

            function prevMenu() {
                currentIndex = (currentIndex - 1 + menus.length) % menus.length;
                updateModalContent();
                resetZoom();
            }

            // Zoom and Drag Logic
            function resetZoom() {
                scale = 1;
                pointX = 0;
                pointY = 0;
                updateTransform();
            }

            function updateTransform() {
                menuImage.style.transform = `translate(${pointX}px, ${pointY}px) scale(${scale})`;
            }

            imageContainer.addEventListener('wheel', (e) => {
                e.preventDefault();
                const rect = imageContainer.getBoundingClientRect();
                const containerCenterX = rect.width / 2;
                const containerCenterY = rect.height / 2;

                // Mouse position relative to container center
                const mouseX = e.clientX - rect.left - containerCenterX;
                const mouseY = e.clientY - rect.top - containerCenterY;

                const delta = e.deltaY > 0 ? -0.1 : 0.1;
                const newScale = Math.min(Math.max(1, scale + delta), 4);

                if (newScale === 1) {
                    pointX = 0;
                    pointY = 0;
                } else {
                    // Zoom to cursor formula
                    // t_new = M * (1 - s_new/s) + t * (s_new/s)
                    const ratio = newScale / scale;
                    pointX = mouseX * (1 - ratio) + pointX * ratio;
                    pointY = mouseY * (1 - ratio) + pointY * ratio;
                }

                scale = newScale;
                updateTransform();
            });

            imageContainer.addEventListener('mousedown', (e) => {
                e.preventDefault(); // Prevent native drag/selection
                isDragging = true;
                startX = e.clientX - pointX;
                startY = e.clientY - pointY;
                imageContainer.style.cursor = 'grabbing';
            });

            window.addEventListener('mousemove', (e) => {
                if (!isDragging) return;
                e.preventDefault();
                pointX = e.clientX - startX;
                pointY = e.clientY - startY;
                updateTransform();
            });

            window.addEventListener('mouseup', (e) => {
                if (!isDragging) return;
                isDragging = false;
                imageContainer.style.cursor = 'grab';

                // Swipe Logic
                if (scale === 1) {
                    // pointX is updated during move, so we just check pointX
                    // When scale is 1, pointX represents the drag distance

                    if (Math.abs(pointX) > 50) {
                        if (pointX > 0) {
                            prevMenu();
                        } else {
                            nextMenu();
                        }
                    } else {
                        // Snap back
                        pointX = 0;
                        pointY = 0;
                        updateTransform();
                    }
                }
            });

            // Touch events for mobile
            imageContainer.addEventListener('touchstart', (e) => {
                if (e.touches.length === 1) {
                    isDragging = true;
                    // For swipe, we want to track from where we started
                    startX = e.touches[0].clientX - pointX;
                    startY = e.touches[0].clientY - pointY;
                }
            });

            window.addEventListener('touchmove', (e) => {
                if (!isDragging) return;
                // Prevent scrolling page while dragging image
                if (scale > 1 || Math.abs(pointX) > 10) e.preventDefault();

                pointX = e.touches[0].clientX - startX;
                pointY = e.touches[0].clientY - startY;
                updateTransform();
            }, {
                passive: false
            });

            window.addEventListener('touchend', () => {
                if (!isDragging) return;
                isDragging = false;

                // Swipe Logic
                if (scale === 1) {
                    if (Math.abs(pointX) > 50) {
                        if (pointX > 0) {
                            prevMenu();
                        } else {
                            nextMenu();
                        }
                    } else {
                        // Snap back
                        pointX = 0;
                        pointY = 0;
                        updateTransform();
                    }
                }
            });

            // Keyboard navigation
            window.addEventListener('keydown', (e) => {
                if (modal.classList.contains('hidden')) return;
                if (e.key === 'Escape') closeMenuModal();
                if (e.key === 'ArrowRight') nextMenu();
                if (e.key === 'ArrowLeft') prevMenu();
            });

            // Close on click outside image (if not dragging)
            modal.addEventListener('click', (e) => {
                if (e.target === modal || e.target === imageContainer) {
                    closeMenuModal();
                }
            });
        </script>
    @endpush
</div>
