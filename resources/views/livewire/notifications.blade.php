<div>
    <div class="max-w-4xl mx-auto p-6">
        <div class="bg-white rounded-lg shadow-lg">
            <!-- Header -->
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-900">All Notifications</h1>
                @if ($notifications->count() > 0)
                    <button wire:click="markAllAsRead"
                        class="text-sm text-blue-600 hover:text-blue-800 transition-colors font-medium">
                        Mark all as read
                    </button>
                @endif
            </div>

            <!-- Notifications List -->
            <div class="divide-y divide-gray-200">
                @if ($notifications->count() > 0)
                    @foreach ($notifications as $notificationRead)
                        <div
                            class="px-6 py-4 hover:bg-gray-50 {{ !$notificationRead->is_read ? 'bg-blue-50' : '' }} transition-colors">
                            <div class="flex justify-between items-start">
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <h3
                                            class="font-semibold text-gray-900 {{ !$notificationRead->is_read ? 'font-bold' : '' }}">
                                            {{ $notificationRead->notice->title }}
                                        </h3>
                                        @if (!$notificationRead->is_read)
                                            <span
                                                class="bg-blue-500 text-white text-xs px-2 py-1 rounded-full">New</span>
                                        @endif
                                    </div>
                                    <p class="text-gray-700 mb-2">
                                        {{ $notificationRead->notice->message }}
                                    </p>
                                    <p class="text-sm text-gray-500">
                                        {{ $notificationRead->created_at->diffForHumans() }}
                                    </p>
                                </div>
                                <div class="flex space-x-2 ml-4">
                                    @if (!$notificationRead->is_read)
                                        <button wire:click="markAsRead({{ $notificationRead->id }})"
                                            class="text-blue-600 hover:text-blue-800 transition-colors p-2"
                                            title="Mark as read">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </button>
                                    @endif
                                    <button wire:click="deleteNotification({{ $notificationRead->id }})"
                                        class="text-red-600 hover:text-red-800 transition-colors p-2" title="Delete">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                    <div class="px-6 py-12 text-center">
                        <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                            </path>
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">No notifications</h3>
                        <p class="text-gray-500">You don't have any notifications yet.</p>
                    </div>
                @endif
            </div>

            <!-- Pagination -->
            @if ($notifications->hasPages())
                <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                    {{ $notifications->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
