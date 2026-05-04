<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquino Portfolio</title>
    <link rel="stylesheet" href="/dist/output.css">
</head>
<body class="bg-[#0a1a2f] font-sans text-[#d1cb95] text-base leading-7 overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-[rgba(4,55,59,0.95)] px-4 sm:px-8 py-4 shadow-[0_2px_10px_rgba(0,0,0,0.3)] z-50">
        <ul class="list-none flex flex-wrap justify-center gap-4 sm:gap-8">
            <li><a href="#hero" class="text-[#d1cb95] no-underline font-medium transition-colors duration-300 hover:text-[#40985e] text-sm sm:text-base">Home</a></li>
            <li><a href="#about" class="text-[#d1cb95] no-underline font-medium transition-colors duration-300 hover:text-[#40985e] text-sm sm:text-base">About</a></li>
            <li><a href="#projects" class="text-[#d1cb95] no-underline font-medium transition-colors duration-300 hover:text-[#40985e] text-sm sm:text-base">Projects</a></li>
            <li><a href="#contact" class="text-[#d1cb95] no-underline font-medium transition-colors duration-300 hover:text-[#40985e] text-sm sm:text-base">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="flex items-center justify-center text-center min-h-screen px-4 sm:px-8 pt-24 pb-16 bg-gradient-to-br from-[#04373b] to-[#0a1a2f]">
        <div class="max-w-[1200px] w-full">
            <div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-6 sm:mb-8 text-[#40985e] animate-in fade-in slide-in-from-top duration-1000">Full-Stack Developer</h1>
                <p class="text-lg sm:text-xl md:text-2xl mb-6 sm:mb-8 px-4">Crafting digital experiences with passion and precision</p>
                <a href="#projects" class="inline-block py-3 sm:py-4 px-6 sm:px-8 text-sm sm:text-base text-[#d1cb95] bg-[#1a644e] no-underline border-2 border-[#1a644e] rounded-md transition-all duration-300 hover:bg-transparent hover:border-[#40985e] hover:text-[#40985e] hover:-translate-y-0.5">View My Work</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="flex items-center justify-center text-center min-h-screen px-4 sm:px-8 pt-24 pb-16 bg-[#0a1a2f]">
        <div class="max-w-[1200px] w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div class="text-left px-4 sm:px-0">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl text-[#40985e] mb-4 sm:mb-6 font-bold">About Me</h2>
                    <p class="text-base sm:text-lg mb-4 sm:mb-6">I'm Victor, a Computer Science graduate from the University of Caloocan City — and honestly, I just really enjoy building things that work well.</p>
                    <p class="text-base sm:text-lg mb-4 sm:mb-6">My background is mostly full-stack web development. I'm most comfortable in Laravel and Java, but I've picked up a pretty wide stack over time — from embedded C++ for IoT sensors to Flutter for mobile. I tend to gravitate toward projects where the backend logic actually has to think, not just move data around.</p>
                    <p class="text-base sm:text-lg mb-4 sm:mb-6">Most recently, I interned as a Full Stack Developer at Automobile Association Philippines, where I helped build internal tools for HR and customer management. Before that, I led development on Aeroson — an air quality monitoring system that combined hardware sensors, real-time web dashboards, and a mobile app. That one taught me a lot.</p>
                    <p class="text-base sm:text-lg mb-4 sm:mb-6">I'm currently looking for opportunities where I can keep growing, contribute to a solid team, and work on problems that are actually worth solving.</p>
                    <div class="flex flex-wrap gap-3 sm:gap-4 mt-2">
                        <span class="bg-[#04373b] py-2 px-3 sm:px-4 border border-[#1a644e] rounded-2xl text-sm sm:text-base">Cloud Services</span>
                        <span class="bg-[#04373b] py-2 px-3 sm:px-4 border border-[#1a644e] rounded-2xl text-sm sm:text-base">PHP</span>
                        <span class="bg-[#04373b] py-2 px-3 sm:px-4 border border-[#1a644e] rounded-2xl text-sm sm:text-base">Laravel</span>
                        <span class="bg-[#04373b] py-2 px-3 sm:px-4 border border-[#1a644e] rounded-2xl text-sm sm:text-base">Java</span>
                        <span class="bg-[#04373b] py-2 px-3 sm:px-4 border border-[#1a644e] rounded-2xl text-sm sm:text-base">Spring Boot</span>
                        <span class="bg-[#04373b] py-2 px-3 sm:px-4 border border-[#1a644e] rounded-2xl text-sm sm:text-base">JavaScript</span>
                        <span class="bg-[#04373b] py-2 px-3 sm:px-4 border border-[#1a644e] rounded-2xl text-sm sm:text-base">Tailwind</span>
                        <span class="bg-[#04373b] py-2 px-3 sm:px-4 border border-[#1a644e] rounded-2xl text-sm sm:text-base">MySQL</span>
                    </div>
                </div>
                <div class="flex justify-center mt-8 lg:mt-0">
                    <svg class="w-[250px] h-[250px] sm:w-[350px] sm:h-[350px] lg:w-[400px] lg:h-[400px]" viewBox="0 0 400 400">
                        <circle cx="200" cy="200" r="150" fill="#1a644e" opacity="0.3"/>
                        <circle cx="200" cy="200" r="120" fill="#40985e" opacity="0.5"/>
                        <circle cx="200" cy="200" r="90" fill="#d1cb95" opacity="0.3"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="flex items-center justify-center text-center min-h-screen px-4 sm:px-8 pt-24 pb-16 bg-[#04373b]">
        <div class="max-w-[1200px] w-full">
            <div class="mb-8 sm:mb-12 text-center">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl text-[#40985e] font-bold mb-4 sm:mb-8">Featured Projects</h2>
                <p class="text-base sm:text-lg px-4">A selection of my recent work</p>
            </div>

            <div class="grid gap-6 sm:gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <!-- Aeroson Project -->
                <a href="https://aeroson-monitoring.com/" target="_blank" class="bg-[#0a1a2f] rounded-[10px] overflow-hidden border border-[#1a644e] transition-transform duration-300 hover:-translate-y-[10px]">
                    <div class="flex items-center justify-center w-full h-[180px] sm:h-[200px] text-[3rem] text-[#d1cb95] bg-[linear-gradient(135deg,#1a644e_0%,#40985e_100%)] p-6 sm:p-8">
                        <img src="img/aeroson_logo.png" alt="Aeroson Logo" class="h-[120px] sm:h-[150px] w-auto object-contain" />
                    </div>
                    <div class="p-4 sm:p-6 text-left">
                        <h3 class="text-[#40985e] text-lg sm:text-xl mb-2 font-bold">Aeroson (Air Quality and Noise Pollution Monitoring System)</h3>
                        <p class="text-sm sm:text-base">A smart, real-time air quality and noise pollution monitoring system that delivers actionable insights through predictive analysis.</p>
                    </div>
                </a>

                <!-- EduPortal Project -->
                <a href="https://eduportal.aki-dev.online/" target="_blank" class="bg-[#0a1a2f] rounded-[10px] overflow-hidden border border-[#1a644e] transition-transform duration-300 hover:-translate-y-[10px]">
                    <div class="flex items-center justify-center w-full h-[180px] sm:h-[200px] text-[3rem] text-[#d1cb95] bg-[linear-gradient(135deg,#1a644e_0%,#40985e_100%)] p-6 sm:p-8">
                        <img src="img/eduportal_logo.png" alt="EduPortal Logo" class="h-[110px] sm:h-[130px] w-auto object-contain brightness-110 contrast-125 saturate-150 drop-shadow-[0_0_30px_rgba(100,220,130,0.8)]" />
                    </div>
                    <div class="p-4 sm:p-6 text-left">
                        <h3 class="text-[#40985e] text-lg sm:text-xl mb-2 font-bold">EduPortal (Learning Management System)</h3>
                        <p class="text-sm sm:text-base">A modern learning management system that streamlines teaching, learning, and progress tracking in one intuitive platform.</p>
                    </div>
                </a>

                <!-- Quiz Pixel Project -->
                <a href="#" target="_blank" class="bg-[#0a1a2f] rounded-[10px] overflow-hidden border border-[#1a644e] transition-transform duration-300 hover:-translate-y-[10px]">
                    <div class="flex items-center justify-center w-full h-[180px] sm:h-[200px] text-[3rem] text-[#d1cb95] bg-[linear-gradient(135deg,#1a644e_0%,#40985e_100%)] p-6 sm:p-8">
                        <img src="img/quiz_pixel_logo.png" alt="Quiz Pixel Logo" class="h-[140px] sm:h-[180px] w-auto object-contain drop-shadow-[0_0_30px_rgba(100,220,130,0.6)]" />
                    </div>
                    <div class="p-4 sm:p-6 text-left">
                        <h3 class="text-[#40985e] text-lg sm:text-xl mb-2 font-bold">Quiz Pixel (Multiplayer Quiz System)</h3>
                        <p class="text-sm sm:text-base">An interactive live multiplayer quiz system that brings learning and competition together with real-time participation and instant scoring.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="flex items-center justify-center text-center min-h-screen px-4 sm:px-8 pt-24 pb-16 bg-[#0a1a2f]">
        <div class="max-w-[1200px] w-full">
            <div class="max-w-[600px] mx-auto px-4">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl text-[#40985e] font-bold mb-6 sm:mb-8">Let's Work Together</h2>
                <p class="text-base sm:text-lg mb-6 sm:mb-8">I'm always interested in hearing about new projects and opportunities. Whether you have a question or just want to say hi, feel free to reach out!</p>
                <a href="#" class="inline-block py-3 sm:py-4 px-6 sm:px-8 text-sm sm:text-base text-[#d1cb95] bg-[#1a644e] no-underline border-2 border-[#1a644e] rounded-md transition-all duration-300 hover:bg-transparent hover:border-[#40985e] hover:text-[#40985e] hover:-translate-y-0.5">Get In Touch</a>
                <div class="flex flex-wrap justify-center gap-4 sm:gap-8 mt-6 sm:mt-8">
                    <a href="#" class="text-[#d1cb95] no-underline text-base sm:text-lg transition-colors duration-300 hover:text-[#40985e]">Email</a>
                    <a href="#" class="text-[#d1cb95] no-underline text-base sm:text-lg transition-colors duration-300 hover:text-[#40985e]">LinkedIn</a>
                    <a href="#" class="text-[#d1cb95] no-underline text-base sm:text-lg transition-colors duration-300 hover:text-[#40985e]">GitHub</a>
                    <a href="#" class="text-[#d1cb95] no-underline text-base sm:text-lg transition-colors duration-300 hover:text-[#40985e]">Facebook</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#04373b] text-center p-6 sm:p-8 text-[#d1cb95]">
        <p class="text-sm sm:text-base">&copy; 2026 Aquino Portfolio. All rights reserved.</p>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.project-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s, transform 0.6s';
            observer.observe(card);
        });
    </script>
</body>
</html>