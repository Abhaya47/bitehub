{{-- Restaurant Menus Section --}}
<div class="w-full max-w-full mx-auto px-4 py-6">
    <div class="bg-white rounded-xl p-5 shadow-sm">
        <div class="flex items-center justify-between gap-4 flex-wrap">
            <h2 class="text-[22px] font-normal leading-[28px] text-[#004225]">
                Restaurant Menus
            </h2>
            <p class="text-sm text-[#555]">
                Tap any card to view the menu inline.
            </p>
        </div>

        {{-- Divider --}}
        <hr class="border-t border-[rgba(197,197,197,0.5)] my-5">

        @if($menus->isEmpty())
            <div class="text-center py-8">
                <p class="text-base text-[#666]">The owner hasn’t uploaded any menus yet. Please check back later.</p>
            </div>
        @else
            {{-- Menu Cards --}}
            <div class="flex overflow-x-auto space-x-4 pb-4">
                @foreach($menus as $index => $menu)
                    @php
                        $preview = $menu->preview_url ?? asset('images/restaurant1.jpg');
                        $file = $menu->file_url ?? '#';
                    @endphp
                    <button onclick="openMenuModal({{ $index }})"
                            class="group relative rounded-xl overflow-hidden shadow-[0px_10px_34px_rgba(20,20,43,0.1)] hover:shadow-xl transition-all duration-200 bg-white flex-shrink-0 w-48">
                        <img src="{{ $preview }}"
                             alt="{{ $menu->title }}"
                             class="w-full h-[160px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200"></div>
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

{{-- Modal for viewing menus --}}
<div id="menuModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 max-w-4xl w-full mx-4 max-h-[90vh] overflow-hidden relative">
        <button onclick="closeMenuModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        <div id="menuContent" class="flex flex-col items-center">
            <iframe id="menuFrame" src="" class="w-full h-[70vh] border-0"></iframe>
        </div>
        <div id="menuNavigation" class="flex justify-between mt-4 hidden">
            <button onclick="prevMenu()" class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded">Previous</button>
            <button onclick="nextMenu()" class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded">Next</button>
        </div>
    </div>
</div>

<script>
    var menus = @json($menus);
    var currentIndex = 0;

    function openMenuModal(index) {
        currentIndex = index;
        var menu = menus[currentIndex];
        document.getElementById('menuFrame').src = menu.file_url;
        document.getElementById('menuModal').classList.remove('hidden');
        if (menus.length > 1) {
            document.getElementById('menuNavigation').classList.remove('hidden');
        }
    }

    function closeMenuModal() {
        document.getElementById('menuModal').classList.add('hidden');
        document.getElementById('menuFrame').src = '';
        document.getElementById('menuNavigation').classList.add('hidden');
    }

    function prevMenu() {
        currentIndex = (currentIndex - 1 + menus.length) % menus.length;
        var menu = menus[currentIndex];
        document.getElementById('menuFrame').src = menu.file_url;
    }

    function nextMenu() {
        currentIndex = (currentIndex + 1) % menus.length;
        var menu = menus[currentIndex];
        document.getElementById('menuFrame').src = menu.file_url;
    }

    // Close modal when clicking outside
    document.getElementById('menuModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeMenuModal();
        }
    });
</script>
