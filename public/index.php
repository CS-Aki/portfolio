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

    <!-- Experience Section -->
    <section id="experience" class="flex items-center justify-center text-center min-h-screen px-4 sm:px-8 pt-18 pb-16 bg-[#04373b]">
        <div class="max-w-[1200px] w-full">

            <div class="mb-8 sm:mb-12 text-center">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl text-[#40985e] font-bold mb-4 sm:mb-8">
                    Experience
                </h2>
                <p class="text-base sm:text-lg px-4">
                    Where I've worked and what I've built
                </p>
            </div>

            <div class="max-w-[800px] mx-auto">

                <!-- Internship -->
                <div class="relative pl-8 sm:pl-12 text-left">

                    <div class="bg-[#0a1a2f] rounded-[10px] border border-[#1a644e] p-5 sm:p-6 w-full">

                       <div class="flex flex-row flex-nowrap items-start justify-between gap-4 mb-4 w-full">
                            <!-- Left side -->
                            <div class="flex-1 min-w-0">
                                <h3 class="text-[#40985e] text-lg sm:text-xl font-bold leading-snug mb-1">
                                    Full Stack Laravel Developer Intern
                                </h3>
                                <p class="text-[#40985e] opacity-80 text-sm sm:text-base font-medium">
                                    Automobile Association Philippines
                                </p>
                            </div>

                            <!-- Right side -->
                            <div class="flex-shrink-0 text-right">
                                <span class="text-xs sm:text-sm text-[#d1cb95] opacity-60 whitespace-nowrap">
                                    April 2025 – July 2025
                                </span>
                            </div>

                        </div>

                        <ul class="space-y-2 text-sm sm:text-base list-none">
                            <li class="flex gap-3">
                                <span class="text-[#40985e] mt-1 shrink-0">▹</span>
                                <span>
                                    Designed and developed an Employee Management System using the TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire).
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <span class="text-[#40985e] mt-1 shrink-0">▹</span>
                                <span>
                                    Implemented Role-Based Access Control (RBAC) and contributed to database schema design for secure and scalable architecture.
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <span class="text-[#40985e] mt-1 shrink-0">▹</span>
                                <span>
                                    Built a Customer Management System for tracking behavior analytics and automated email communication.
                                </span>
                            </li>
                        </ul>

                        <div class="flex flex-wrap gap-3 mt-6">
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">Laravel</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">Livewire</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">Alpine.js</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">Tailwind CSS</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">MySQL</span>
                            <span class="bg-[#04373b] py-1 px-3 border border-[#1a644e] rounded-2xl text-xs sm:text-sm">RBAC</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</body>
</html>