<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquino Portfolio</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-[#0a1a2f] font-sans text-[#d1cb95] text-m/7 overflow-x-hidden">
    <nav class="fixed top-0 w-full bg-[rgba(4,55,59,0.95)] px-8 py-4 shadow-[0_2px_10px_rgba(0,0,0,0.3)] z-50">
        <ul class="list-none flex justify-center gap-8">
            <li><a href="#hero" class="text-[#d1cb95] no-underline font-medium transition-colors duration-300 hover:text-[#40985e]">Home</a></li>
            <li><a href="#about" class="text-[#d1cb95] no-underline font-medium transition-colors duration-300 hover:text-[#40985e]">About</a></li>
            <li><a href="#projects" class="text-[#d1cb95] no-underline font-medium transition-colors duration-300 hover:text-[#40985e]">Projects</a></li>
            <li><a href="#contact" class="text-[#d1cb95] no-underline font-medium transition-colors duration-300 hover:text-[#40985e]">Contact</a></li>
        </ul>
    </nav>

    <section id="hero" class="flex items-center justify-center text-center min-h-screen px-8 pt-24 pb-16 bg-gradient-to-br from-[#04373b] to-[#0a1a2f]">
        <div class="max-w-[#1200px] w-full">
            <!-- <div class="hero-content"> -->
            <div>
                <h1 class="text-7xl font-bold mb-8 text-[#40985e] animate-in fade-in slide-in-from-top duration-1000">Full-Stack Developer</h1>
                <p class="text-2xl mb-8">Crafting digital experiences with passion and precision</p>
                <a href="#projects" class="inline-block py-4 px-8 text-[#d1cb95] bg-[#1a644e] no-underline border-2 border-[#1a644e] rounded-md transition-all duration-300 hover:bg-transparent hover:border-[#40985e] hover:text-[#40985e] hover:-translate-y-0.5">View My Work</a>
            </div>
        </div>
    </section>

    <section id="about" class="flex items-center justify-center text-center min-h-screen px-8 pt-24 pb-16 bg-[#0a1a2f]">
        <div class="max-w-[#1200px] w-full">
            <div class="grid grid-cols-2 gap-12 items-center px-26">
                <div class="text-left">
                    <h2 class="text-5xl text-[#40985e] mb-6 font-bold">About Me</h2>
                    <p class="text-lg mb-6">Hello! I'm a passionate designer and developer with a keen eye for aesthetics and functionality. I specialize in creating engaging digital experiences that merge beautiful design with seamless user interactions.</p>
                    <p class="text-lg mb-6">With years of experience in the industry, I've worked on diverse projects ranging from web applications to brand identities, always striving to deliver exceptional results that exceed expectations.</p>
                    <div class="flex flex-wrap gap-4 mt-2">
                        <span class="bg-[#04373b] py-2 px-4 border border-[#1a644e] rounded-2xl">UI/UX Design</span>
                        <span class="bg-[#04373b] py-2 px-4 border border-[#1a644e] rounded-2xl">Web Development</span>
                        <span class="bg-[#04373b] py-2 px-4 border border-[#1a644e] rounded-2xl">Branding</span>
                        <span class="bg-[#04373b] py-2 px-4 border border-[#1a644e] rounded-2xl">JavaScript</span>
                        <span class="bg-[#04373b] py-2 px-4 border border-[#1a644e] rounded-2xl">CSS</span>
                        <span class="bg-[#04373b] py-2 px-4 border border-[#1a644e] rounded-2xl">React</span>
                    </div>
                </div>
                <div class="about-image">
                    <svg width="400" height="400" viewBox="0 0 400 400">
                        <circle cx="200" cy="200" r="150" fill="#1a644e" opacity="0.3"/>
                        <circle cx="200" cy="200" r="120" fill="#40985e" opacity="0.5"/>
                        <circle cx="200" cy="200" r="90" fill="#d1cb95" opacity="0.3"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="flex items-center justify-center text-center min-h-screen px-8 pt-24 pb-16 bg-[#04373b]">
        <div class="max-w-[1200px] w-full">
            <div class="mb-12 text-center">
            <h2 class="text-5xl text-[#40985e] font-bold mb-8">Featured Projects</h2>
            <p class="text-[1.1rem]">A selection of my recent work</p>
            </div>

            <div class="grid gap-8 grid-cols-[repeat(auto-fit,minmax(300px,1fr))]">
            <div class="bg-[#0a1a2f] rounded-[10px] overflow-hidden border border-[#1a644e] transition-transform duration-300 hover:-translate-y-[10px]">
                <div class="flex items-center justify-center w-full h-[200px] text-[3rem] text-[#d1cb95] bg-[linear-gradient(135deg,#1a644e_0%,#40985e_100%)]">
                    🎨
                </div>
                <div class="p-[1.5rem] text-left">
                <h3 class="text-[#40985e] text-xl mb-2 font-bold">Brand Identity Design</h3>
                <p>Complete brand identity system for a modern tech startup, including logo, color palette, and style guide.</p>
                </div>
            </div>

            <div class="bg-[#0a1a2f] rounded-[10px] overflow-hidden border border-[#1a644e] transition-transform duration-300 hover:-translate-y-[10px]">
                <div class="flex items-center justify-center w-full h-[200px] text-[3rem] text-[#d1cb95] bg-[linear-gradient(135deg,#1a644e_0%,#40985e_100%)]">
                    💻
                </div>
                <div class="p-[1.5rem] text-left">
                <h3 class="text-[#40985e] text-xl mb-2 font-bold">E-Commerce Platform</h3>
                <p>Full-stack e-commerce solution with intuitive user experience and seamless checkout process.</p>
                </div>
            </div>

            <div class="bg-[#0a1a2f] rounded-[10px] overflow-hidden border border-[#1a644e] transition-transform duration-300 hover:-translate-y-[10px]">
                <div class="flex items-center justify-center w-full h-[200px] text-[3rem] text-[#d1cb95] bg-[linear-gradient(135deg,#1a644e_0%,#40985e_100%)]">
                    📱
                </div>
                <div class="p-[1.5rem] text-left">
                <h3 class="text-[#40985e] text-xl mb-2 font-bold">Mobile App Design</h3>
                <p>UI/UX design for a fitness tracking mobile application with focus on user engagement.</p>
                </div>
            </div>
            </div>
        </div>
    </section>


    <section id="contact" class="flex items-center justify-center text-center min-h-screen px-8 pt-24 pb-16 bg-[#0a1a2f]">
        <div class="max-w-[1200px] w-full">
            <div class="align-center max-w-[600px] mx-auto">
                <h2 class="text-5xl text-[#40985e] font-bold mb-8">Let's Work Together</h2>
                <p>I'm always interested in hearing about new projects and opportunities. Whether you have a question or just want to say hi, feel free to reach out!</p>
                <a href="#" class="inline-block py-4 px-8 text-[#d1cb95] bg-[#1a644e] no-underline border-2 border-[#1a644e] rounded-md transition-all duration-300 hover:bg-transparent hover:border-[#40985e] hover:text-[#40985e] hover:-translate-y-0.5" style="margin-top: 2rem;">Get In Touch</a>
                <div class="flex justify-center gap-8 mt-8">
                    <a href="#" class="text-[#d1cb95] no-undeerline text-lg transition-colors duration-300 hover:text-[#40985e]">Email</a>
                    <a href="#" class="text-[#d1cb95] no-undeerline text-lg transition-colors duration-300 hover:text-[#40985e]">LinkedIn</a>
                    <a href="#" class="text-[#d1cb95] no-undeerline text-lg transition-colors duration-300 hover:text-[#40985e]">GitHub</a>
                    <a href="#" class="text-[#d1cb95] no-undeerline text-lg transition-colors duration-300 hover:text-[#40985e]">Twitter</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#04373b] text-center p-8 text-[#d1cb95]">
        <p>&copy; 2026 Aquino Portfolio. All rights reserved.</p>
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