<div class="relative group" id="notification-container">
    <!-- Notification Bell Icon -->
    <button id="notification-bell" class="relative p-1 sm:p-2 text-gray-600 group-hover:text-[#F9423C] transition-colors duration-200"
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
        class="absolute right-0 sm:right-0 top-full pt-6 w-72 sm:w-80 md:w-96 z-50 transform transition-all duration-300 ease-out origin-top-right
        opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible">

        <div class="bg-white backdrop-blur-sm bg-opacity-95 rounded-xl shadow-2xl border border-gray-100 overflow-hidden flex flex-col max-h-[80vh] sm:max-h-96 max-w-[90vw] sm:max-w-none">
            <!-- Header -->
            <div class="bg-gray-50/50 px-4 py-3 border-b border-gray-100 flex justify-between items-center">
                <h3 class="font-semibold text-gray-900">Notifications</h3>
                <div class="flex space-x-2">
                    @if ($unreadCount > 0)
                    <button wire:click="markAllAsRead"
                        class="text-sm text-blue-600 hover:text-blue-800 transition-colors">
                        Mark all read
                    </button>
                    @endif
                </div>
            </div>

            <!-- Notifications List -->
            <div class="flex-1 overflow-y-auto">
                @if ($notifications->count() > 0)
                @foreach ($notifications as $notificationRead)
                <div
                    class="px-4 py-3 hover:bg-gray-50 border-b border-gray-100 {{ !$notificationRead->is_read ? 'bg-blue-50/50' : '' }} transition-colors">
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
                                {{ Str::limit($notificationRead->notice->message, 100) }}
                            </p>
                            <p class="text-xs text-gray-400 mt-2">
                                {{ $notificationRead->created_at->diffForHumans() }}
                            </p>
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
            <div class="bg-gray-50/50 px-4 py-2 border-t border-gray-100 text-center">
                <a href="{{ route('profile', ['tab' => 'notifications']) }}" class="text-sm text-blue-600 hover:text-blue-800 transition-colors">
                    View all notifications ({{ $totalNotifications }})
                </a>
            </div>
            @endif
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const notificationContainer = document.getElementById('notification-container');
            const notificationBell = document.getElementById('notification-bell');
            const notificationPanel = document.getElementById('notification-panel');

            // Mobile toggle functionality
            let isMobileOpen = false;

            notificationBell.addEventListener('click', (e) => {
                // On mobile, we might want to toggle a class to force visibility
                if (window.innerWidth < 768) {
                    e.stopPropagation();
                    isMobileOpen = !isMobileOpen;
                    if (isMobileOpen) {
                        notificationPanel.classList.add('mobile-open');
                        // We must manually duplicate the 'visible' logic classes
                        notificationPanel.classList.remove('invisible', 'opacity-0', 'scale-95');
                        notificationPanel.classList.add('opacity-100', 'scale-100');
                    } else {
                        closeMobile();
                    }
                }
            });

            document.addEventListener('click', (e) => {
                if (isMobileOpen && !notificationContainer.contains(e.target)) {
                    closeMobile();
                }
            });

            function closeMobile() {
                isMobileOpen = false;
                notificationPanel.classList.remove('mobile-open');
                // Revert to default hidden state (letting hover take over if applicable)
                notificationPanel.classList.add('invisible', 'opacity-0', 'scale-95');
                notificationPanel.classList.remove('opacity-100', 'scale-100');
            }
        });
    </script>
    @endpush
</div>