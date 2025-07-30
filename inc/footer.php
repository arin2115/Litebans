    </main>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Add mouse move effect for orbs on larger screens
            document.addEventListener('mousemove', (e) => {
                if (window.innerWidth > 1024) {
                    const orbs = document.querySelectorAll('.floating-orb');
                    const x = e.clientX / window.innerWidth;
                    const y = e.clientY / window.innerHeight;

                    orbs.forEach((orb, index) => {
                        const speed = (index + 1) * 0.3;
                        const xOffset = (x - 0.5) * speed * 10;
                        const yOffset = (y - 0.5) * speed * 10;
                        orb.style.transform = `translate(${xOffset}px, ${yOffset}px)`;
                    });
                }
            });

            // Add loading animations
            const elements = document.querySelectorAll('.slide-up, .fade-in, .scale-in');
            elements.forEach((element, index) => {
                element.style.animationDelay = `${index * 0.1}s`;
            });
        });

        // Touch device optimizations
        if ('ontouchstart' in window) {
            document.body.style.webkitUserSelect = 'none';
            document.body.style.webkitTouchCallout = 'none';
        }
    </script>
</body>
</html>
