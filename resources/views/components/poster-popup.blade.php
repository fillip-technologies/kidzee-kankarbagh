<!-- Poster Popup Modal -->
<div id="posterPopup" 
     class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/80 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 ease-out"
     aria-modal="true" 
     role="dialog">
     
    <!-- Modal Container -->
    <div id="posterContainer" 
         class="relative max-w-[92vw] max-h-[85vh] sm:max-w-lg md:max-w-xl lg:max-w-2xl bg-white rounded-2xl shadow-2xl p-2 md:p-3 transform scale-95 opacity-0 transition-all duration-300 ease-out flex flex-col items-center">
        
        <!-- Close Button (Top Right) -->
        <button id="closePosterBtn" 
                class="absolute -top-3 -right-3 md:-top-4 md:-right-4 z-[10000] bg-yellow-400 hover:bg-yellow-500 text-purple-900 font-bold w-9 h-9 md:w-11 md:h-11 rounded-full flex items-center justify-center shadow-lg transition-all duration-200 hover:scale-110 cursor-pointer focus:outline-none focus:ring-2 focus:ring-purple-600"
                aria-label="Close dialog">
            <!-- FontAwesome 'X' icon (falls back to SVG if font awesome is not ready) -->
            <i class="fa-solid fa-xmark text-lg md:text-xl hidden sm:inline"></i>
            <span class="sm:hidden text-lg font-extrabold">&times;</span>
        </button>

        <!-- Poster Image Container with Max-Height constraints to avoid overflow -->
        <div class="w-full h-full rounded-xl overflow-hidden flex justify-center items-center bg-purple-50">
            <img src="{{ asset('gallery/poster.jpeg') }}" 
                 alt="School Announcement Poster" 
                 class="w-full max-h-[75vh] object-contain rounded-xl hover:scale-[1.01] transition-transform duration-500"
                 loading="eager" />
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const popup = document.getElementById('posterPopup');
        const container = document.getElementById('posterContainer');
        const closeBtn = document.getElementById('closePosterBtn');
        
        if (!popup || !container) return;

        // Check if the user is previewing or has already seen it this session
        const urlParams = new URLSearchParams(window.location.search);
        const isPreview = urlParams.has('preview_poster');
        const hasShown = sessionStorage.getItem('kidzee_poster_popup_shown');

        // Helper function to open modal with animations
        function openModal() {
            // Disable body scroll when modal is open
            document.body.classList.add('overflow-hidden');
            
            // Trigger transition
            popup.classList.remove('pointer-events-none');
            popup.classList.add('opacity-100');
            
            // Small timeout for scale transition to kick in nicely
            setTimeout(() => {
                container.classList.remove('scale-95', 'opacity-0');
                container.classList.add('scale-100', 'opacity-100');
            }, 50);

            // Record display status in sessionStorage (unless in preview mode)
            if (!isPreview) {
                sessionStorage.setItem('kidzee_poster_popup_shown', 'true');
            }
        }

        // Helper function to close modal with animations
        function closeModal() {
            // Re-enable body scroll
            document.body.classList.remove('overflow-hidden');
            
            // Reverse animation
            container.classList.remove('scale-100', 'opacity-100');
            container.classList.add('scale-95', 'opacity-0');
            
            setTimeout(() => {
                popup.classList.remove('opacity-100');
                popup.classList.add('pointer-events-none');
            }, 300);
        }

        // Close triggers
        if (closeBtn) {
            closeBtn.addEventListener('click', closeModal);
        }

        // Close on clicking backdrop
        popup.addEventListener('click', function (e) {
            if (e.target === popup) {
                closeModal();
            }
        });

        // Close on escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !popup.classList.contains('pointer-events-none')) {
                closeModal();
            }
        });

        // Open popup after a short, premium delay (1 second after page load) if not shown yet
        if (!hasShown || isPreview) {
            setTimeout(openModal, 1000);
        }
    });
</script>
