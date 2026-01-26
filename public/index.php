<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Creative Designer</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0a1a2f;
            color: #d1cb95;
            line-height: 1.6;
            overflow-x: hidden;
        }

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: rgba(4, 55, 59, 0.95);
            padding: 1rem 2rem;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        nav a {
            color: #d1cb95;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #40985e;
        }

        section {
            min-height: 100vh;
            padding: 6rem 2rem 4rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            max-width: 1200px;
            width: 100%;
        }

        #hero {
            background: linear-gradient(135deg, #04373b 0%, #0a1a2f 100%);
            text-align: center;
        }

        .hero-content h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            color: #40985e;
            animation: fadeInDown 1s;
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: #1a644e;
            color: #d1cb95;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s;
            border: 2px solid #1a644e;
        }

        .btn:hover {
            background-color: transparent;
            border-color: #40985e;
            color: #40985e;
            transform: translateY(-2px);
        }

        #about {
            background-color: #0a1a2f;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h2 {
            font-size: 2.5rem;
            color: #40985e;
            margin-bottom: 1rem;
        }

        .about-text p {
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .skill-tag {
            background-color: #04373b;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            border: 1px solid #1a644e;
        }

        #projects {
            background-color: #04373b;
        }

        .projects-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .projects-header h2 {
            font-size: 2.5rem;
            color: #40985e;
            margin-bottom: 1rem;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background-color: #0a1a2f;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
            border: 1px solid #1a644e;
        }

        .project-card:hover {
            transform: translateY(-10px);
        }

        .project-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #1a644e 0%, #40985e 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #d1cb95;
        }

        .project-content {
            padding: 1.5rem;
        }

        .project-content h3 {
            color: #40985e;
            margin-bottom: 0.5rem;
        }

        #contact {
            background-color: #0a1a2f;
        }

        .contact-content {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-content h2 {
            font-size: 2.5rem;
            color: #40985e;
            margin-bottom: 1rem;
        }

        .contact-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }

        .contact-links a {
            color: #d1cb95;
            text-decoration: none;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .contact-links a:hover {
            color: #40985e;
        }

        footer {
            background-color: #04373b;
            text-align: center;
            padding: 2rem;
            color: #d1cb95;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            nav ul {
                gap: 1rem;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Creative Designer & Developer</h1>
                <p>Crafting digital experiences with passion and precision</p>
                <a href="#projects" class="btn">View My Work</a>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About Me</h2>
                    <p>Hello! I'm a passionate designer and developer with a keen eye for aesthetics and functionality. I specialize in creating engaging digital experiences that merge beautiful design with seamless user interactions.</p>
                    <p>With years of experience in the industry, I've worked on diverse projects ranging from web applications to brand identities, always striving to deliver exceptional results that exceed expectations.</p>
                    <div class="skills">
                        <span class="skill-tag">UI/UX Design</span>
                        <span class="skill-tag">Web Development</span>
                        <span class="skill-tag">Branding</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">CSS</span>
                        <span class="skill-tag">React</span>
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

    <section id="projects">
        <div class="container">
            <div class="projects-header">
                <h2>Featured Projects</h2>
                <p>A selection of my recent work</p>
            </div>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">🎨</div>
                    <div class="project-content">
                        <h3>Brand Identity Design</h3>
                        <p>Complete brand identity system for a modern tech startup, including logo, color palette, and style guide.</p>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">💻</div>
                    <div class="project-content">
                        <h3>E-Commerce Platform</h3>
                        <p>Full-stack e-commerce solution with intuitive user experience and seamless checkout process.</p>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">📱</div>
                    <div class="project-content">
                        <h3>Mobile App Design</h3>
                        <p>UI/UX design for a fitness tracking mobile application with focus on user engagement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="contact-content">
                <h2>Let's Work Together</h2>
                <p>I'm always interested in hearing about new projects and opportunities. Whether you have a question or just want to say hi, feel free to reach out!</p>
                <a href="#" class="btn" style="margin-top: 2rem;">Get In Touch</a>
                <div class="contact-links">
                    <a href="#">Email</a>
                    <a href="#">LinkedIn</a>
                    <a href="#">GitHub</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 Portfolio. All rights reserved.</p>
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