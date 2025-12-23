<div class="relative" id="notification-container">
    <!-- Notification Bell Icon -->
    <button id="notification-bell" class="relative p-1 sm:p-2 text-gray-600 hover:text-[#F9423C] transition-colors duration-200"
        title="Notifications">
        <svg class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
            </path>
        </svg>

        <!-- Notification Badge -->
        @if ($unreadCount > 0)
            <span
                class="absolute -top-0 -right-1 bg-[#F9423C] text-white text-xs rounded-full h-4 w-4 sm:h-5 sm:w-5 flex items-center justify-center animate-pulse">
                {{ $unreadCount > 99 ? '99+' : $unreadCount }}
            </span>
        @endif
    </button>

    <!-- Notification Panel -->
    <div id="notification-panel"
        class="absolute right-0 mt-5.5 w-80 sm:w-96 bg-white rounded-lg shadow-lg border border-gray-200 z-50 max-h-80 sm:max-h-96 overflow-hidden hidden flex flex-col">
        <!-- Header -->
        <div class="bg-gray-50 px-4 py-3 border-b border-gray-200 flex justify-between items-center">
            <h3 class="font-semibold text-gray-900">Notifications</h3>
            <div class="flex space-x-2">
                @if ($unreadCount > 0)
                    <button wire:click="markAllAsRead"
                        class="text-sm text-blue-600 hover:text-blue-800 transition-colors">
                        Mark all read
                    </button>
                @endif
                <button id="close-notification-panel" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Notifications List -->
        <div class="flex-1 overflow-y-auto">
            @if ($notifications->count() > 0)
                @foreach ($notifications as $notificationRead)
                    <div
                        class="px-4 py-3 hover:bg-gray-50 border-b border-gray-100 {{ !$notificationRead->is_read ? 'bg-blue-50' : '' }} transition-colors">
                        <div class="flex justify-between items-start">
                            <div class="flex-1">
                                <div class="flex items-center space-x-2">
                                    <h4
                                        class="font-medium text-gray-900 {{ !$notificationRead->is_read ? 'font-semibold' : '' }}">
                                        {{ $notificationRead->notice->title }}
                                    </h4>
                                    @if (!$notificationRead->is_read)
                                        <span class="bg-blue-500 text-white text-xs px-2 py-0.5 rounded-full">New</span>
                                    @endif
                                </div>
                                <p class="text-sm text-gray-600 mt-1">
                                    {{ Str::limit($notificationRead->notice->message, 100) }}</p>
                                <p class="text-xs text-gray-400 mt-2">
                                    {{ $notificationRead->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="flex space-x-1 ml-2">
                                @if (!$notificationRead->is_read)
                                    <button wire:click="markAsRead({{ $notificationRead->id }})"
                                        class="text-blue-600 hover:text-blue-800 transition-colors"
                                        title="Mark as read">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </button>
                                @endif
                                <button wire:click="deleteNotification({{ $notificationRead->id }})"
                                    class="text-red-600 hover:text-red-800 transition-colors" title="Delete">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="px-4 py-8 text-center text-gray-500">
                    <svg class="w-12 h-12 mx-auto mb-3 text-gray-300" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                        </path>
                    </svg>
                    <p class="text-sm">No notifications yet</p>
                </div>
            @endif
        </div>

        <!-- Footer -->
        @if ($totalNotifications > 5)
            <div class="bg-gray-50 px-4 py-2 border-t border-gray-200 text-center">
                <a href="{{ route('profile', ['tab' => 'notifications']) }}" class="text-sm text-blue-600 hover:text-blue-800 transition-colors">
                    View all notifications ({{ $totalNotifications }})
                </a>
            </div>
        @endif
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const notificationContainer = document.getElementById('notification-container');
                const notificationBell = document.getElementById('notification-bell');
                const notificationPanel = document.getElementById('notification-panel');
                const closePanelBtn = document.getElementById('close-notification-panel');

                let isOpen = @json($isOpen);
                let hideTimeout;

                function showPanel() {
                    clearTimeout(hideTimeout);
                    notificationPanel.classList.remove('hidden');
                    notificationPanel.style.opacity = '0';
                    notificationPanel.style.transform = 'scale(0.95)';

                    requestAnimationFrame(() => {
                        notificationPanel.style.transition = 'all 0.2s ease-out';
                        notificationPanel.style.opacity = '1';
                        notificationPanel.style.transform = 'scale(1)';
                    });

                    isOpen = true;
                }

                function hidePanel() {
                    notificationPanel.style.transition = 'all 0.15s ease-in';
                    notificationPanel.style.opacity = '0';
                    notificationPanel.style.transform = 'scale(0.95)';

                    setTimeout(() => {
                        notificationPanel.classList.add('hidden');
                    }, 150);

                    isOpen = false;
                }

                function togglePanel() {
                    if (isOpen) {
                        hidePanel();
                    } else {
                        showPanel();
                        // Trigger Livewire togglePanel method
                        @this.togglePanel();
                    }
                }

                // Event listeners
                notificationBell.addEventListener('click', togglePanel);
                notificationBell.addEventListener('mouseenter', showPanel);

                closePanelBtn.addEventListener('click', hidePanel);

                notificationPanel.addEventListener('mouseenter', () => {
                    clearTimeout(hideTimeout);
                });

                notificationPanel.addEventListener('mouseleave', () => {
                    hideTimeout = setTimeout(hidePanel, 300);
                });

                notificationContainer.addEventListener('mouseleave', () => {
                    hideTimeout = setTimeout(hidePanel, 300);
                });
            });
        </script>
    @endpush
</div>
