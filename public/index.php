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
            <li><a href="#about" class="text-[#d1cb95] no-underline font-medium transition-colors duration-300 hover:text-[#40985e] text-sm sm:text-base">About</a></li>
            <li><a href="#experience" class="text-[#d1cb95] no-underline font-medium transition-colors duration-300 hover:text-[#40985e] text-sm sm:text-base">Experience</a></li>
            <li><a href="#projects" class="text-[#d1cb95] no-underline font-medium transition-colors duration-300 hover:text-[#40985e] text-sm sm:text-base">Projects</a></li>
            <li><a href="#contact" class="text-[#d1cb95] no-underline font-medium transition-colors duration-300 hover:text-[#40985e] text-sm sm:text-base">Contact</a></li>
        </ul>
    </nav>

    <!-- About Section -->
    <section id="about" class="flex items-center justify-center text-center min-h-screen px-4 sm:px-8 pt-24 pb-16 bg-[#0a1a2f]">
        <div class="max-w-[1200px] w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div class="text-left px-4 sm:px-0">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl text-[#40985e] mb-4 sm:mb-6 font-bold">About Me</h2>
                    <p class="text-base sm:text-lg mb-4 sm:mb-6">I'm Sir Victor Aquino, a Computer Science graduate from the University of Caloocan City — and honestly, I just really enjoy building things that work well.</p>
                    <p class="text-base sm:text-lg mb-4 sm:mb-6">My background is mostly full-stack web development. I'm most comfortable in Laravel and Java, but I've picked up a pretty wide stack over time — spanning everything from IoT systems to mobile apps. I tend to gravitate toward projects where the backend logic actually has to think, not just move data around.</p>
                    <p class="text-base sm:text-lg mb-4 sm:mb-6">I'm currently looking for opportunities where I can keep growing, contribute to a solid team, and work on problems that are actually worth solving.</p>

                    <!-- Education one-liner -->
                    <p class="text-sm text-[#d1cb95] opacity-60 mb-8">
                        BS Computer Science, Cum Laude · GWA 1.26 · TESDA NC III Java (2024)
                    </p>

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

                <!-- Profile image over circle -->
                <div class="flex justify-center mt-8 lg:mt-0">
                    <div class="relative flex items-center justify-center
                        w-[250px] h-[250px]
                        sm:w-[350px] sm:h-[350px]
                        lg:w-[400px] lg:h-[400px]">

                        <!-- Background Circles -->
                        <div class="absolute inset-0 z-0">
                            <div class="absolute inset-0 rounded-full bg-[#1a644e] opacity-30"></div>
                            <div class="absolute inset-[15%] rounded-full bg-[#40985e] opacity-40"></div>
                            <div class="absolute inset-[30%] rounded-full bg-[#d1cb95] opacity-30"></div>
                        </div>

                        <!-- Profile Image -->
                        <img
                            src=""
                            alt="Victor Aquino"
                            class="relative z-10
                                w-[160px] h-[160px]
                                sm:w-[220px] sm:h-[220px]
                                lg:w-[260px] lg:h-[260px]
                                rounded-full object-cover
                                border-4 border-[#40985e]
                                shadow-[0_0_30px_rgba(64,152,94,0.4)]"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="flex items-center justify-center text-center min-h-screen px-4 sm:px-8 pt-18 pb-16 bg-[#04373b]">
        <div class="max-w-[1200px] w-full">
            <div class="mb-8 sm:mb-12 text-center">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl text-[#40985e] font-bold mb-4 sm:mb-8">Experience</h2>
                <p class="text-base sm:text-lg px-4">Where I've worked and what I've built</p>
            </div>

            <div class="max-w-[800px] mx-auto">
                <!-- Internship -->
                <div class="relative pl-8 sm:pl-12 text-left">
                    <!-- <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#40985e] border-2 border-[#04373b]"></div> -->
                    <div class="relative bg-[#0a1a2f] rounded-[10px] border border-[#1a644e] p-6 sm:p-8 pt-14 sm:pt-8">
                        <div class="relative mb-6 w-full">

                            <div class="grid grid-cols-1 sm:grid-cols-2 sm:items-start gap-2 sm:gap-4">

                                <!-- LEFT SIDE -->
                                <div class="min-w-0">
                                    <h3 class="text-[#40985e] text-lg sm:text-xl font-bold leading-snug mb-1">
                                        Full Stack Laravel Developer Intern
                                    </h3>

                                    <p class="text-[#40985e] opacity-80 text-sm sm:text-base font-medium">
                                        Automobile Association Philippines
                                    </p>
                                </div>

                                <!-- RIGHT SIDE (FORCED RIGHT COLUMN) -->
                                <div class="sm:text-right sm:justify-self-end text-left">
                                    <span class="text-xs sm:text-sm text-[#d1cb95] opacity-60 whitespace-nowrap">
                                        April 2025 – July 2025
                                    </span>
                                </div>

                            </div>

                        </div>
                        <ul class="space-y-2 text-sm sm:text-base list-none">
                            <li class="flex gap-3">
                                <span class="text-[#40985e] mt-1 shrink-0">▹</span>
                                <span>Designed and developed an Employee Management System used by HR to manage employee records, internal workflows, and administrative processes using the TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire).</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="text-[#40985e] mt-1 shrink-0">▹</span>
                                <span>Collaborated with senior developers to design and implement Role-Based Access Control (RBAC) and contributed to database schema planning to support secure permission management and scalable system architecture.</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="text-[#40985e] mt-1 shrink-0">▹</span>
                                <span>Contributed to the development of a Customer Management System (CMS) used for customer behavior tracking, business analytics, and automated bulk email communication.</span>
                            </li>
                        </ul>
                        <div class="flex flex-wrap gap-3 mt-6">
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">Laravel</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">Livewire</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">Alpine.js</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">Tailwind CSS</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="max-w-[800px] mx-auto mt-8">
                <div class="relative pl-8 sm:pl-12 text-left">
                    <div class="bg-[#0a1a2f] rounded-[10px] border border-[#1a644e] p-5 sm:p-6">
                        <h3 class="text-[#40985e] text-lg sm:text-xl font-bold leading-snug mb-1">
                            Full Stack Laravel Developer Intern
                        </h3>
                        <p class="text-[#40985e] opacity-80 text-sm sm:text-base font-medium mb-1">
                            Automobile Association Philippines
                        </p>
                        <p class="text-xs sm:text-sm text-[#d1cb95] opacity-60 mb-4">
                            April 2025 – July 2025
                        </p>
                        <ul class="space-y-2 text-sm sm:text-base list-none">
                            <li class="flex gap-3">
                                <span class="text-[#40985e] mt-1 shrink-0">▹</span>
                                <span>Designed and developed an Employee Management System used by HR to manage employee records, internal workflows, and administrative processes using the TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire).</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="text-[#40985e] mt-1 shrink-0">▹</span>
                                <span>Collaborated with senior developers to design and implement Role-Based Access Control (RBAC) and contributed to database schema planning to support secure permission management and scalable system architecture.</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="text-[#40985e] mt-1 shrink-0">▹</span>
                                <span>Contributed to the development of a Customer Management System (CMS) used for customer behavior tracking, business analytics, and automated bulk email communication.</span>
                            </li>
                        </ul>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">Laravel</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">Livewire</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">Alpine.js</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">Tailwind CSS</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">MySQL</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">RBAC</span>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="flex items-center justify-center text-center min-h-screen px-4 sm:px-8 pt-24 pb-16 bg-[#0a1a2f]">
        <div class="max-w-[1200px] w-full">
            <div class="mb-8 sm:mb-12 text-center">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl text-[#40985e] font-bold mb-4 sm:mb-8">Featured Projects</h2>
                <p class="text-base sm:text-lg px-4">A selection of my recent work</p>
            </div>

            <div class="grid gap-6 sm:gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <!-- Aeroson Project -->
                <a href="https://aeroson-monitoring.com/" target="_blank" class="bg-[#04373b] rounded-[10px] overflow-hidden border border-[#1a644e] transition-transform duration-300 hover:-translate-y-[10px]">
                    <div class="flex items-center justify-center w-full h-[180px] sm:h-[200px] bg-[linear-gradient(135deg,#1a644e_0%,#40985e_100%)] p-6 sm:p-8">
                        <img src="img/aeroson_logo.png" alt="Aeroson Logo" class="h-[120px] sm:h-[150px] w-auto object-contain" />
                    </div>
                    <div class="p-4 sm:p-6 text-left">
                        <h3 class="text-[#40985e] text-lg sm:text-xl mb-2 font-bold">Aeroson (Air Quality and Noise Pollution Monitoring System)</h3>
                        <p class="text-sm sm:text-base">A smart, real-time air quality and noise pollution monitoring system that delivers actionable insights through predictive analysis.</p>
                    </div>
                </a>

                <!-- EduPortal Project -->
                <a href="https://eduportal.aki-dev.online/" target="_blank" class="bg-[#04373b] rounded-[10px] overflow-hidden border border-[#1a644e] transition-transform duration-300 hover:-translate-y-[10px]">
                    <div class="flex items-center justify-center w-full h-[180px] sm:h-[200px] bg-[linear-gradient(135deg,#1a644e_0%,#40985e_100%)] p-6 sm:p-8">
                        <img src="img/eduportal_logo.png" alt="EduPortal Logo" class="h-[110px] sm:h-[130px] w-auto object-contain brightness-110 contrast-125 saturate-150 drop-shadow-[0_0_30px_rgba(100,220,130,0.8)]" />
                    </div>
                    <div class="p-4 sm:p-6 text-left">
                        <h3 class="text-[#40985e] text-lg sm:text-xl mb-2 font-bold">EduPortal (Learning Management System)</h3>
                        <p class="text-sm sm:text-base">A modern learning management system that streamlines teaching, learning, and progress tracking in one intuitive platform.</p>
                    </div>
                </a>

                <!-- Quiz Pixel Project -->
                <a href="#" target="_blank" class="bg-[#04373b] rounded-[10px] overflow-hidden border border-[#1a644e] transition-transform duration-300 hover:-translate-y-[10px]">
                    <div class="flex items-center justify-center w-full h-[180px] sm:h-[200px] bg-[linear-gradient(135deg,#1a644e_0%,#40985e_100%)] p-6 sm:p-8">
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
    <section id="contact" class="flex items-center justify-center text-center min-h-screen px-4 sm:px-8 pt-24 pb-16 bg-[#04373b]">
        <div class="max-w-[1200px] w-full">
            <div class="max-w-[600px] mx-auto px-4">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl text-[#40985e] font-bold mb-6 sm:mb-8">Let's Work Together</h2>
                <p class="text-base sm:text-lg mb-6 sm:mb-8">I'm always interested in hearing about new projects and opportunities. Whether you have a question or just want to say hi, feel free to reach out!</p>
                <a href="#" class="inline-block py-3 sm:py-4 px-6 sm:px-8 text-sm sm:text-base text-[#d1cb95] bg-[#1a644e] no-underline border-2 border-[#1a644e] rounded-md transition-all duration-300 hover:bg-transparent hover:border-[#40985e] hover:text-[#40985e] hover:-translate-y-0.5">Get In Touch</a>
                <div class="flex flex-wrap justify-center gap-4 sm:gap-8 mt-6 sm:mt-8">
                    <a href="mailto:aquino.sir.victor.bscs2022@gmail.com" class="text-[#d1cb95] no-underline text-base sm:text-lg transition-colors duration-300 hover:text-[#40985e]">Email</a>                   
                    <a href="https://www.linkedin.com/in/sir-victor-aquino" target="_blank"  class="text-[#d1cb95] no-underline text-base sm:text-lg transition-colors duration-300 hover:text-[#40985e]">LinkedIn</a>
                    <a href="https://github.com/CS-Aki" target="_blank" class="text-[#d1cb95] no-underline text-base sm:text-lg transition-colors duration-300 hover:text-[#40985e]">GitHub</a>
                    <a href="https://www.facebook.com/sirvictor.aquino" target="_blank" class="text-[#d1cb95] no-underline text-base sm:text-lg transition-colors duration-300 hover:text-[#40985e]">Facebook</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#04373b] text-center p-6 sm:p-8 text-[#d1cb95]">
        <p class="text-sm sm:text-base">&copy; <span id="year"></span> Aquino Portfolio. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -100px 0px' };
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