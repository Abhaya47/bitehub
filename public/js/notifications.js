// Notification System JavaScript
class NotificationManager {
    constructor() {
        this.notificationPanel = null;
        this.refreshInterval = null;
        this.init();
    }

    init() {
        // Find the notification panel component
        this.findNotificationPanel();

        // Start polling for new notifications every 30 seconds
        this.startPolling();

        // Listen for custom events
        this.setupEventListeners();
    }

    findNotificationPanel() {
        // Try to find the Livewire notification panel
        const panels = document.querySelectorAll('[wire\\:id*="notification-panel"]');
        if (panels.length > 0) {
            this.notificationPanel = panels[0];
        }
    }

    startPolling() {
        // Poll for new notifications every 30 seconds
        this.refreshInterval = setInterval(() => {
            this.refreshNotifications();
        }, 30000);
    }

    stopPolling() {
        if (this.refreshInterval) {
            clearInterval(this.refreshInterval);
            this.refreshInterval = null;
        }
    }

    refreshNotifications() {
        if (this.notificationPanel) {
            // Trigger Livewire refresh
            this.notificationPanel.__livewire?.call('refreshNotifications');
        }
    }

    setupEventListeners() {
        // Listen for page visibility changes
        document.addEventListener('visibilitychange', () => {
            if (!document.hidden) {
                // Refresh notifications when page becomes visible
                this.refreshNotifications();
            }
        });

        // Listen for custom notification events
        document.addEventListener('new-notification', (event) => {
            this.handleNewNotification(event.detail);
        });

        // Clean up on page unload
        window.addEventListener('beforeunload', () => {
            this.stopPolling();
        });
    }

    handleNewNotification(data) {
        // Show browser notification if permission is granted
        if ('Notification' in window && Notification.permission === 'granted') {
            this.showBrowserNotification(data);
        }

        // Refresh the notification panel
        this.refreshNotifications();

        // Update the notification badge
        this.updateNotificationBadge();
    }

    showBrowserNotification(data) {
        const notification = new Notification(data.title, {
            body: data.message,
            icon: '/images/bitehublogo.png',
            badge: '/images/bell_notification.png',
            tag: 'bitehub-notification'
        });

        notification.onclick = () => {
            window.focus();
            notification.close();
        };

        // Auto-close after 5 seconds
        setTimeout(() => {
            notification.close();
        }, 5000);
    }

    updateNotificationBadge() {
        // Find and update the notification badge
        const badges = document.querySelectorAll('.notification-badge');
        badges.forEach(badge => {
            // Add pulse animation
            badge.classList.add('animate-pulse');

            // Remove animation after 2 seconds
            setTimeout(() => {
                badge.classList.remove('animate-pulse');
            }, 2000);
        });
    }

    // Request notification permission
    static requestPermission() {
        if ('Notification' in window && Notification.permission === 'default') {
            Notification.requestPermission().then(permission => {
                console.log('Notification permission:', permission);
            });
        }
    }
}

// Initialize the notification manager when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.notificationManager = new NotificationManager();

    // Request notification permission after a short delay
    setTimeout(() => {
        NotificationManager.requestPermission();
    }, 2000);
});

// Export for use in other scripts
window.NotificationManager = NotificationManager;