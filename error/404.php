<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>404 - Strona nie znaleziona | UPO-SMP V2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'SF Pro Display', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        /* Dynamic viewport height handling */
        :root {
            --vh: 1vh;
        }
        
        .min-h-screen-dynamic {
            min-height: 100vh;
            min-height: calc(var(--vh, 1vh) * 100);
        }
        
        .h-screen-dynamic {
            height: 100vh;
            height: calc(var(--vh, 1vh) * 100);
        }
        
        body {
            background: #000000;
            background-image: 
                radial-gradient(circle at 30% 40%, rgba(120, 119, 198, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 70% 80%, rgba(255, 100, 100, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 60% 20%, rgba(255, 255, 255, 0.03) 0%, transparent 50%);
        }
        
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(40px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 
                0 25px 50px -12px rgba(0, 0, 0, 0.8),
                0 0 0 1px rgba(255, 255, 255, 0.05),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }
        
        .glass-button {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 
                0 8px 32px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }
        
        .premium-button {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.4),
                0 8px 16px rgba(0, 0, 0, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
            color: #1a1a1a;
            font-weight: 600;
        }
        
        .error-button {
            background: rgba(255, 100, 100, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 100, 100, 0.2);
            box-shadow: 
                0 8px 32px rgba(255, 100, 100, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            color: #ff6464;
        }
        
        .slide-up {
            animation: slideUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        
        .fade-in {
            animation: fadeIn 1.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        
        .scale-in {
            animation: scaleIn 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        
        .float {
            animation: float 8s ease-in-out infinite;
        }
        
        .glitch {
            animation: glitch 2s infinite linear alternate-reverse;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-10px) rotate(0.5deg); }
            50% { transform: translateY(-5px) rotate(-0.5deg); }
            75% { transform: translateY(-15px) rotate(0.25deg); }
        }
        
        @keyframes glitch {
            0% {
                text-shadow: 
                    1px 0 0 #ff6464,
                    -1px 0 0 #64b5f6;
            }
            25% {
                text-shadow: 
                    -1px 0 0 #ff6464,
                    1px 0 0 #64b5f6;
            }
            50% {
                text-shadow: 
                    1px 0 0 #ff6464,
                    -1px 0 0 #64b5f6;
            }
            75% {
                text-shadow: 
                    -1px 0 0 #ff6464,
                    1px 0 0 #64b5f6;
            }
            100% {
                text-shadow: 
                    1px 0 0 #ff6464,
                    -1px 0 0 #64b5f6;
            }
        }
        
        .button-hover {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        
        .button-hover:hover {
            transform: translateY(-2px);
            box-shadow: 
                0 16px 32px rgba(0, 0, 0, 0.5),
                0 8px 16px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.9);
        }
        
        .glass-button-hover {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        
        .glass-button-hover:hover {
            transform: translateY(-1px);
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(255, 255, 255, 0.2);
            box-shadow: 
                0 8px 20px rgba(0, 0, 0, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }
        
        .error-button-hover {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        
        .error-button-hover:hover {
            transform: translateY(-1px);
            background: rgba(255, 100, 100, 0.15);
            border-color: rgba(255, 100, 100, 0.3);
            box-shadow: 
                0 8px 20px rgba(255, 100, 100, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }
        
        .title-gradient {
            background: linear-gradient(135deg, #ffffff 0%, rgba(255, 255, 255, 0.8) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .error-gradient {
            background: linear-gradient(135deg, #ff6464 0%, #ff9999 50%, #ffffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .subtitle-gradient {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.6) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .icon-glow {
            filter: drop-shadow(0 0 15px rgba(255, 100, 100, 0.4));
        }
        
        .luxury-shadow {
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.6),
                0 10px 20px rgba(0, 0, 0, 0.4),
                0 4px 8px rgba(0, 0, 0, 0.3);
        }
        
        .floating-orb {
            position: fixed;
            border-radius: 50%;
            pointer-events: none;
            z-index: -1;
        }
        
        .orb-1 {
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(255, 100, 100, 0.05) 0%, transparent 70%);
            top: 20%;
            left: 10%;
            animation: float 12s ease-in-out infinite;
        }
        
        .orb-2 {
            width: 150px;
            height: 150px;
            background: radial-gradient(circle, rgba(120, 119, 198, 0.08) 0%, transparent 70%);
            bottom: 20%;
            right: 15%;
            animation: float 15s ease-in-out infinite reverse;
        }
        
        .orb-3 {
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.02) 0%, transparent 70%);
            top: 60%;
            left: 70%;
            animation: float 10s ease-in-out infinite;
        }
        
        /* Main container height optimization */
        .main-container {
            min-height: calc(var(--vh, 1vh) * 100);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 1rem 0;
        }
        
        /* Height-aware responsive design */
        @media (max-height: 800px) {
            .content-wrapper {
                padding: 0.75rem 0;
            }
            
            .main-container .glass {
                padding: 2rem 1.5rem;
            }
        }
        
        @media (max-height: 700px) {
            .content-wrapper {
                padding: 0.5rem 0;
            }
            
            .main-container .glass {
                padding: 1.5rem 1.25rem;
            }
            
            .error-gradient {
                font-size: clamp(3rem, 12vw, 5rem) !important;
                margin-bottom: 1rem !important;
            }
            
            .icon-container {
                width: 2.5rem !important;
                height: 2.5rem !important;
                margin-bottom: 1rem !important;
            }
            
            .icon-container svg {
                width: 1.25rem !important;
                height: 1.25rem !important;
            }
        }
        
        @media (max-height: 600px) {
            .content-wrapper {
                padding: 0.25rem 0;
            }
            
            .main-container .glass {
                padding: 1.25rem 1rem;
            }
            
            .error-gradient {
                font-size: clamp(2.5rem, 10vw, 4rem) !important;
                margin-bottom: 0.75rem !important;
            }
            
            .float {
                animation: none;
            }
            
            .icon-container {
                width: 2rem !important;
                height: 2rem !important;
                margin-bottom: 0.75rem !important;
            }
            
            .icon-container svg {
                width: 1rem !important;
                height: 1rem !important;
            }
            
            .error-section h3 {
                font-size: clamp(1rem, 4vw, 1.25rem) !important;
                margin-bottom: 0.5rem !important;
            }
            
            .error-section p {
                font-size: clamp(0.75rem, 3vw, 0.875rem) !important;
            }
            
            .button-section {
                gap: 0.5rem !important;
            }
            
            .button-section button,
            .button-section a {
                padding: 0.5rem 1rem !important;
                font-size: 0.75rem !important;
            }
        }
        
        @media (max-height: 500px) {
            .main-container .glass {
                padding: 1rem 0.75rem;
            }
            
            .error-gradient {
                font-size: clamp(2rem, 8vw, 3rem) !important;
                margin-bottom: 0.5rem !important;
            }
            
            .icon-container {
                width: 1.5rem !important;
                height: 1.5rem !important;
                margin-bottom: 0.5rem !important;
            }
            
            .icon-container svg {
                width: 0.75rem !important;
                height: 0.75rem !important;
            }
            
            .error-section h3 {
                font-size: clamp(0.875rem, 3vw, 1rem) !important;
                margin-bottom: 0.25rem !important;
            }
            
            .error-section p {
                font-size: clamp(0.625rem, 2.5vw, 0.75rem) !important;
                line-height: 1.3 !important;
            }
            
            .additional-info {
                margin-top: 0.75rem !important;
                padding-top: 0.75rem !important;
            }
            
            .additional-info p {
                font-size: 0.625rem !important;
            }
        }
        
        /* Landscape phone optimization */
        @media (max-height: 450px) and (orientation: landscape) {
            .icon-container {
                display: none !important;
            }
            
            .error-gradient {
                font-size: clamp(1.5rem, 6vw, 2.5rem) !important;
                margin-bottom: 0.5rem !important;
            }
            
            .error-section {
                margin-bottom: 0.75rem !important;
            }
            
            .button-section {
                flex-direction: row !important;
                flex-wrap: wrap !important;
                gap: 0.5rem !important;
            }
            
            .button-section button,
            .button-section a {
                flex: 1 !important;
                min-width: 100px !important;
                padding: 0.375rem 0.5rem !important;
                font-size: 0.625rem !important;
            }
            
            .additional-info {
                margin-top: 0.5rem !important;
                padding-top: 0.5rem !important;
            }
        }
        
        /* Very short screens */
        @media (max-height: 400px) {
            .footer-section {
                display: none;
            }
            
            .content-wrapper {
                padding: 0;
                justify-content: flex-start;
                padding-top: 0.5rem;
            }
            
            .main-container .glass {
                padding: 0.75rem 0.5rem;
            }
            
            .error-gradient {
                font-size: clamp(1.25rem, 5vw, 2rem) !important;
                margin-bottom: 0.25rem !important;
            }
            
            .error-section h3 {
                font-size: clamp(0.75rem, 2.5vw, 0.875rem) !important;
                margin-bottom: 0.25rem !important;
            }
            
            .error-section p {
                font-size: clamp(0.5rem, 2vw, 0.625rem) !important;
                margin-bottom: 0.5rem !important;
            }
            
            .button-section {
                gap: 0.25rem !important;
            }
            
            .additional-info {
                display: none;
            }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .floating-orb {
                display: none;
            }
            
            .glass {
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
            }
            
            .button-hover:hover {
                transform: none;
            }
            
            .glass-button-hover:hover {
                transform: none;
            }
            
            .error-button-hover:hover {
                transform: none;
            }
        }
        
        @media (max-width: 640px) {
            .button-section {
                flex-direction: column !important;
            }
            
            .button-section button,
            .button-section a {
                width: 100% !important;
            }
        }
        
        @media (max-width: 480px) {
            .luxury-shadow {
                box-shadow: 
                    0 10px 20px rgba(0, 0, 0, 0.6),
                    0 5px 10px rgba(0, 0, 0, 0.4);
            }
            
            .main-container .glass {
                margin: 0.5rem;
            }
        }
        
        /* Touch device optimizations */
        @media (hover: none) and (pointer: coarse) {
            .button-hover:hover,
            .glass-button-hover:hover,
            .error-button-hover:hover {
                transform: none;
            }
        }
        
        /* Pulse animation for 404 */
        .pulse-glow {
            animation: pulseGlow 3s ease-in-out infinite;
        }
        
        @keyframes pulseGlow {
            0%, 100% {
                filter: drop-shadow(0 0 10px rgba(255, 100, 100, 0.3));
            }
            50% {
                filter: drop-shadow(0 0 20px rgba(255, 100, 100, 0.6));
            }
        }
    </style>
</head>
<body class="main-container relative overflow-hidden">
    <!-- Floating Orbs -->
    <div class="floating-orb orb-1 hidden lg:block"></div>
    <div class="floating-orb orb-2 hidden lg:block"></div>
    <div class="floating-orb orb-3 hidden lg:block"></div>
    
    <div class="content-wrapper">
        <div class="w-full max-w-xs sm:max-w-sm md:max-w-lg lg:max-w-xl xl:max-w-2xl mx-auto px-3 sm:px-4 lg:px-6 relative z-10">
            <!-- Main Container -->
            <div class="glass rounded-lg sm:rounded-xl md:rounded-2xl lg:rounded-3xl p-4 sm:p-6 md:p-8 lg:p-10 luxury-shadow scale-in">
                
                <!-- 404 Content -->
                <div class="text-center">
                    <!-- Error Icon -->
                    <div class="icon-container w-10 h-10 sm:w-12 sm:h-12 md:w-14 md:h-14 lg:w-16 lg:h-16 mx-auto mb-3 sm:mb-4 md:mb-6 glass rounded-lg sm:rounded-xl md:rounded-2xl flex items-center justify-center icon-glow float pulse-glow ">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7 lg:w-8 lg:h-8 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>

                    <!-- Large 404 Number -->
                    <div class="mb-3 sm:mb-4 md:mb-6 " style="animation-delay: 0.2s;">
                        <h2 class="error-gradient font-black tracking-tight text-5xl sm:text-6xl md:text-7xl lg:text-8xl leading-none glitch pulse-glow">404</h2>
                    </div>

                    <!-- Error Message -->
                    <div class="error-section mb-4 sm:mb-6 md:mb-8 " style="animation-delay: 0.4s;">
                        <h3 class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold text-white mb-2 sm:mb-3 md:mb-4 tracking-tight leading-tight">Strona nie została znaleziona</h3>
                        <p class="text-white/70 text-xs sm:text-sm md:text-base lg:text-lg leading-relaxed max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg mx-auto font-light px-2 sm:px-0">
                            Ups! Wygląda na to, że straciłeś się w cyfrowym świecie. Strona, której szukasz, została przeniesiona, usunięta lub nigdy nie istniała.
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="button-section space-y-2 sm:space-y-3 md:space-y-4 " style="animation-delay: 0.6s;">
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3 md:gap-4 justify-center items-center">
                            <a href="../index.php" class="glass-button glass-button-hover px-3 sm:px-4 md:px-6 lg:px-8 py-2 sm:py-2.5 md:py-3 lg:py-4 rounded-lg sm:rounded-xl font-medium text-xs sm:text-sm md:text-base tracking-wide w-full sm:w-auto text-white">
                                🏠 Powrót do strony głównej
                            </a>
                            <a href="https://discord.gg/uposmp" class="error-button error-button-hover px-3 sm:px-4 md:px-6 lg:px-8 py-2 sm:py-2.5 md:py-3 lg:py-4 rounded-lg sm:rounded-xl font-medium text-xs sm:text-sm md:text-base tracking-wide w-full sm:w-auto">
                                💬 Discord UPO-SMP V2
                            </a>
                        </div>
                    </div>

                    <!-- Additional Info -->
                    <div class="additional-info mt-4 sm:mt-6 md:mt-8 pt-3 sm:pt-4 md:pt-6 border-t border-white/10 " style="animation-delay: 0.8s;">
                        <p class="text-white/40 text-xs mt-1 font-light">
                            Prawdopodobnie nie powinno Cię tutaj być. <a href="../" class="text-white/70 hover:text-white">Litebans Panel</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer-section text-center mt-3 sm:mt-4 md:mt-6 " style="animation-delay: 1s;">
                <p class="text-white/40 text-xs font-light tracking-widest uppercase">© 2025 UPO-SMP V2 - Premium Minecraft Experience</p>
            </div>
        </div>
    </div>

    <script>
        function setViewportHeight() {
            const vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        }

        setViewportHeight();
        window.addEventListener('resize', setViewportHeight);
        window.addEventListener('orientationchange', () => {
            setTimeout(setViewportHeight, 100);
        });

        document.addEventListener('DOMContentLoaded', function() {
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
        });

        if ('ontouchstart' in window) {
            document.body.style.webkitUserSelect = 'none';
            document.body.style.webkitTouchCallout = 'none';
        }
    </script>
</body>
</html>