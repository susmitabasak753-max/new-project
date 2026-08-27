<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Susmita Basak - Senior Full-Stack Engineer & Software Architect specializing in Laravel, Livewire, Tailwind CSS, and Cloud Systems.">

    <title>Susmita Basak | Senior Full-Stack Engineer & Architect</title>

    <!-- Favicons -->
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <!-- Fonts & Assets -->
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- Prevent FOUC: Theme Switcher Initialization -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<body class="bg-slate-50 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-100 font-sans antialiased selection:bg-indigo-500 selection:text-white min-h-screen flex flex-col transition-colors duration-300">

    <!-- Background Decorative Gradients -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-indigo-500/10 dark:bg-indigo-600/15 rounded-full blur-3xl"></div>
        <div class="absolute top-1/3 -right-40 w-96 h-96 bg-purple-500/10 dark:bg-purple-600/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-1/4 w-96 h-96 bg-pink-500/10 dark:bg-pink-600/10 rounded-full blur-3xl"></div>
    </div>

    <!-- Navigation Bar -->
    <header class="sticky top-0 z-50 backdrop-blur-xl bg-white/80 dark:bg-zinc-950/80 border-b border-zinc-200/80 dark:border-zinc-800/80 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="#hero" class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center text-white font-bold text-lg shadow-lg shadow-indigo-500/20 group-hover:scale-105 transition-all duration-300">
                        SB
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-base text-zinc-900 dark:text-white tracking-tight group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Susmita Basak</span>
                        <span class="text-xs text-zinc-500 dark:text-zinc-400">Full-Stack Architect</span>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-zinc-600 dark:text-zinc-300">
                    <a href="#about" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">About</a>
                    <a href="#skills" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Skills</a>
                    <a href="#projects" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Projects</a>
                    <a href="#experience" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Experience</a>
                    <a href="#contact" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Contact</a>
                </nav>

                <!-- Action & Auth Links & Theme Switcher -->
                <div class="flex items-center space-x-3 sm:space-x-4">
                    <!-- Theme Toggle Button -->
                    <button 
                        id="theme-toggle" 
                        type="button" 
                        aria-label="Toggle Theme"
                        class="p-2.5 rounded-xl bg-zinc-100 dark:bg-zinc-800/80 text-zinc-600 dark:text-zinc-300 hover:text-zinc-900 dark:hover:text-white border border-zinc-200 dark:border-zinc-700/80 transition-all cursor-pointer flex items-center justify-center shadow-xs"
                    >
                        <!-- Sun Icon (Light Mode trigger) -->
                        <svg id="theme-toggle-sun" class="w-4 h-4 hidden dark:block text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <!-- Moon Icon (Dark Mode trigger) -->
                        <svg id="theme-toggle-moon" class="w-4 h-4 block dark:hidden text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                    </button>

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route('dashboard') }}" class="px-4 py-2 rounded-xl text-xs font-semibold text-zinc-700 dark:text-zinc-200 bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 hover:bg-zinc-200 dark:hover:bg-zinc-700 transition-all">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-xs font-semibold text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="hidden sm:inline-block px-3 py-1.5 rounded-lg text-xs font-semibold text-zinc-700 dark:text-zinc-300 border border-zinc-300 dark:border-zinc-700 hover:border-zinc-400 dark:hover:border-zinc-500 transition-all">
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif

                    <a href="#contact" class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold text-xs shadow-lg shadow-indigo-500/20 hover:shadow-indigo-500/35 transition-all">
                        Hire Me
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow z-10">

        <!-- Hero Section -->
        <section id="hero" class="pt-16 pb-24 lg:pt-24 lg:pb-32 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Hero Left Content -->
                <div class="lg:col-span-7 space-y-6">
                    <!-- Status Badge -->
                    <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-600 dark:text-emerald-400 text-xs font-semibold">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 dark:bg-emerald-400 animate-pulse"></span>
                        <span>Available for new opportunities</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-zinc-900 dark:text-white leading-[1.1]">
                        Building High-Performance <br>
                        <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 dark:from-indigo-400 dark:via-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                            Web Application & Systems
                        </span>
                    </h1>

                    <!-- Bio Subtitle -->
                    <p class="text-base sm:text-lg text-zinc-600 dark:text-zinc-400 max-w-2xl font-normal leading-relaxed">
                        I'm a Senior Full-Stack Engineer specializing in Laravel 13, Livewire 4, Modern PHP 8.3, Tailwind CSS v4, and scalable cloud applications. I bridge the gap between elegant UI/UX design and rock-solid backend infrastructure.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="#projects" class="px-7 py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-sm shadow-xl shadow-indigo-600/25 hover:scale-[1.02] transition-all flex items-center space-x-2">
                            <span>Explore Work</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>

                        <a href="#contact" class="px-7 py-3.5 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-300 dark:border-zinc-700/80 hover:border-zinc-400 dark:hover:border-zinc-500 text-zinc-800 dark:text-zinc-200 font-semibold text-sm hover:bg-zinc-50 dark:hover:bg-zinc-800/80 shadow-xs transition-all">
                            Get In Touch
                        </a>

                        <a href="#" onclick="alert('Resume download initiated.'); return false;" class="px-5 py-3.5 text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white font-semibold text-sm flex items-center space-x-1.5 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span>Resume</span>
                        </a>
                    </div>

                    <!-- Social Icons -->
                    <div class="pt-6 border-t border-zinc-200 dark:border-zinc-800/60 flex items-center space-x-6 text-zinc-500 dark:text-zinc-400">
                        <span class="text-xs uppercase tracking-wider text-zinc-400 dark:text-zinc-500 font-semibold">Connect:</span>
                        
                        <a href="https://github.com" target="_blank" class="hover:text-zinc-900 dark:hover:text-white transition-colors" title="GitHub">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                            </svg>
                        </a>

                        <a href="https://linkedin.com" target="_blank" class="hover:text-zinc-900 dark:hover:text-white transition-colors" title="LinkedIn">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
                            </svg>
                        </a>

                        <a href="https://x.com" target="_blank" class="hover:text-zinc-900 dark:hover:text-white transition-colors" title="Twitter / X">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>

                        <a href="mailto:susmita.basak@example.com" class="hover:text-zinc-900 dark:hover:text-white transition-colors" title="Email">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Hero Right Image & Badges -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="relative w-72 h-72 sm:w-96 sm:h-96">
                        <!-- Glowing outer ring -->
                        <div class="absolute -inset-2 rounded-3xl bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 opacity-25 dark:opacity-30 blur-xl animate-pulse"></div>

                        <!-- Image Wrapper Card -->
                        <div class="relative w-full h-full rounded-3xl overflow-hidden border-2 border-zinc-200 dark:border-zinc-700/80 shadow-2xl bg-white dark:bg-zinc-900">
                            <img src="/images/profile.jpg" alt="Susmita Basak" class="w-full h-full object-cover object-center transform hover:scale-105 transition-all duration-500">
                        </div>

                        <!-- Floating Glassmorphic Badges -->
                        <div class="absolute -bottom-4 -left-4 px-4 py-2.5 rounded-2xl bg-white/90 dark:bg-zinc-900/90 border border-zinc-200 dark:border-zinc-700/80 backdrop-blur-xl shadow-xl flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-indigo-500/15 text-indigo-600 dark:text-indigo-400 flex items-center justify-center font-bold text-xs">
                                PHP
                            </div>
                            <div>
                                <p class="text-xs font-bold text-zinc-900 dark:text-white">PHP 8.3 & Laravel 13</p>
                                <p class="text-[10px] text-zinc-500 dark:text-zinc-400">Core Stack Mastery</p>
                            </div>
                        </div>

                        <div class="absolute -top-4 -right-4 px-4 py-2.5 rounded-2xl bg-white/90 dark:bg-zinc-900/90 border border-zinc-200 dark:border-zinc-700/80 backdrop-blur-xl shadow-xl flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-purple-500/15 text-purple-600 dark:text-purple-400 flex items-center justify-center font-bold text-xs">
                                LW
                            </div>
                            <div>
                                <p class="text-xs font-bold text-zinc-900 dark:text-white">Livewire 4</p>
                                <p class="text-[10px] text-zinc-500 dark:text-zinc-400">Reactive Full-Stack</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Key Metrics Section -->
        <section class="py-12 border-y border-zinc-200 dark:border-zinc-800/60 bg-white/60 dark:bg-zinc-900/40 backdrop-blur-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    
                    <div class="space-y-1">
                        <p class="text-3xl sm:text-4xl font-extrabold bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent">6+ Years</p>
                        <p class="text-xs sm:text-sm font-medium text-zinc-600 dark:text-zinc-400">Software Engineering</p>
                    </div>

                    <div class="space-y-1">
                        <p class="text-3xl sm:text-4xl font-extrabold bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-400 dark:to-pink-400 bg-clip-text text-transparent">45+</p>
                        <p class="text-xs sm:text-sm font-medium text-zinc-600 dark:text-zinc-400">Production Applications</p>
                    </div>

                    <div class="space-y-1">
                        <p class="text-3xl sm:text-4xl font-extrabold bg-gradient-to-r from-pink-600 to-rose-600 dark:from-pink-400 dark:to-rose-400 bg-clip-text text-transparent">99.9%</p>
                        <p class="text-xs sm:text-sm font-medium text-zinc-600 dark:text-zinc-400">System Uptime SLA</p>
                    </div>

                    <div class="space-y-1">
                        <p class="text-3xl sm:text-4xl font-extrabold bg-gradient-to-r from-emerald-600 to-teal-600 dark:from-emerald-400 dark:to-teal-400 bg-clip-text text-transparent">2.5M+</p>
                        <p class="text-xs sm:text-sm font-medium text-zinc-600 dark:text-zinc-400">Monthly API Requests</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- About & Philosophy Section -->
        <section id="about" class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-6 space-y-6">
                    <div class="inline-flex items-center space-x-2 text-indigo-600 dark:text-indigo-400 text-xs font-bold uppercase tracking-wider">
                        <span>// About Me</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-bold text-zinc-900 dark:text-white tracking-tight">
                        Architecting seamless digital experiences with modern PHP & Laravel.
                    </h2>

                    <p class="text-zinc-600 dark:text-zinc-400 text-sm sm:text-base leading-relaxed">
                        With over 6 years of experience engineering scalable web platforms, I focus on building performant, testable, and clean codebases. Whether designing domain-driven APIs or crafting fluid interfaces with Livewire 4 and Tailwind CSS v4, I bring technical rigor to every layer of software development.
                    </p>

                    <p class="text-zinc-600 dark:text-zinc-400 text-sm sm:text-base leading-relaxed">
                        I am passionate about developer tooling, API design, security, and continuous delivery. When I'm not writing code, I enjoy writing technical tutorials, exploring open-source Laravel packages, and mentoring developer teams.
                    </p>
                </div>

                <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    
                    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 shadow-sm dark:shadow-none space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white">Performance First</h3>
                        <p class="text-xs text-zinc-600 dark:text-zinc-400 leading-relaxed">Optimized queries, intelligent caching strategies, and ultra-fast asset delivery.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 shadow-sm dark:shadow-none space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-purple-500/10 text-purple-600 dark:text-purple-400 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white">Clean Code & Security</h3>
                        <p class="text-xs text-zinc-600 dark:text-zinc-400 leading-relaxed">Pest-tested business logic, strict types, and robust authentication mechanisms.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 shadow-sm dark:shadow-none space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-pink-500/10 text-pink-600 dark:text-pink-400 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                            </svg>
                        </div>
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white">Modern UI/UX</h3>
                        <p class="text-xs text-zinc-600 dark:text-zinc-400 leading-relaxed">Reactive interfaces with Livewire 4, Flux UI, and custom Tailwind styling.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 shadow-sm dark:shadow-none space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white">Cloud Architecture</h3>
                        <p class="text-xs text-zinc-600 dark:text-zinc-400 leading-relaxed">Automated CI/CD workflows, Docker containerization, and AWS server deployment.</p>
                    </div>

                </div>

            </div>
        </section>

        <!-- Tech Stack & Skills Section -->
        <section id="skills" class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-t border-zinc-200 dark:border-zinc-800/60">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <div class="inline-flex items-center space-x-2 text-indigo-600 dark:text-indigo-400 text-xs font-bold uppercase tracking-wider">
                    <span>// Tech Stack & Proficiency</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-zinc-900 dark:text-white tracking-tight">
                    Tools & Technologies I Use Daily
                </h2>
                <p class="text-zinc-600 dark:text-zinc-400 text-sm sm:text-base">
                    A curated matrix of technologies I use to design, build, and maintain production applications.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Backend Stack -->
                <div class="p-8 rounded-3xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 shadow-sm dark:shadow-none space-y-6">
                    <div class="flex items-center space-x-3 border-b border-zinc-200 dark:border-zinc-800 pb-4">
                        <div class="w-10 h-10 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center font-bold text-sm">
                            &lt;/&gt;
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-zinc-900 dark:text-white">Backend Engineering</h3>
                            <p class="text-xs text-zinc-500 dark:text-zinc-400">Core architecture & database</p>
                        </div>
                    </div>

                    <ul class="space-y-4 text-sm text-zinc-700 dark:text-zinc-300">
                        <li class="flex items-center justify-between">
                            <span class="font-medium">PHP 8.3 & Modern Features</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-indigo-500/10 text-indigo-600 dark:text-indigo-400">Expert</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Laravel 13 Ecosystem</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-indigo-500/10 text-indigo-600 dark:text-indigo-400">Expert</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Livewire 4 & Blaze</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-indigo-500/10 text-indigo-600 dark:text-indigo-400">Advanced</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">SQLite, MySQL & PostgreSQL</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-indigo-500/10 text-indigo-600 dark:text-indigo-400">Advanced</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">RESTful & GraphQL APIs</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-indigo-500/10 text-indigo-600 dark:text-indigo-400">Expert</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Redis & Queue Workers</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-indigo-500/10 text-indigo-600 dark:text-indigo-400">Advanced</span>
                        </li>
                    </ul>
                </div>

                <!-- Frontend Stack -->
                <div class="p-8 rounded-3xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 shadow-sm dark:shadow-none space-y-6">
                    <div class="flex items-center space-x-3 border-b border-zinc-200 dark:border-zinc-800 pb-4">
                        <div class="w-10 h-10 rounded-xl bg-purple-500/10 text-purple-600 dark:text-purple-400 flex items-center justify-center font-bold text-sm">
                            UI
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-zinc-900 dark:text-white">Frontend & Design</h3>
                            <p class="text-xs text-zinc-500 dark:text-zinc-400">Interactive client systems</p>
                        </div>
                    </div>

                    <ul class="space-y-4 text-sm text-zinc-700 dark:text-zinc-300">
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Tailwind CSS v4</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-purple-500/10 text-purple-600 dark:text-purple-400">Expert</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">JavaScript (ES6+) / TypeScript</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-purple-500/10 text-purple-600 dark:text-purple-400">Advanced</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Flux UI & Components</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-purple-500/10 text-purple-600 dark:text-purple-400">Advanced</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Alpine.js & Vue.js</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-purple-500/10 text-purple-600 dark:text-purple-400">Advanced</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">HTML5 & Semantic Markup</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-purple-500/10 text-purple-600 dark:text-purple-400">Expert</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Responsive & Accessible Design</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-purple-500/10 text-purple-600 dark:text-purple-400">Expert</span>
                        </li>
                    </ul>
                </div>

                <!-- DevOps & Tools -->
                <div class="p-8 rounded-3xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 shadow-sm dark:shadow-none space-y-6">
                    <div class="flex items-center space-x-3 border-b border-zinc-200 dark:border-zinc-800 pb-4">
                        <div class="w-10 h-10 rounded-xl bg-pink-500/10 text-pink-600 dark:text-pink-400 flex items-center justify-center font-bold text-sm">
                            ⚙️
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-zinc-900 dark:text-white">DevOps & Tooling</h3>
                            <p class="text-xs text-zinc-500 dark:text-zinc-400">Testing & deployment workflow</p>
                        </div>
                    </div>

                    <ul class="space-y-4 text-sm text-zinc-700 dark:text-zinc-300">
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Laravel Herd & Valet</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-pink-500/10 text-pink-600 dark:text-pink-400">Expert</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Pest PHP & PHPUnit</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-pink-500/10 text-pink-600 dark:text-pink-400">Advanced</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Git & GitHub Actions</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-pink-500/10 text-pink-600 dark:text-pink-400">Advanced</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Vite Build Engine</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-pink-500/10 text-pink-600 dark:text-pink-400">Advanced</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Docker & Containerization</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-pink-500/10 text-pink-600 dark:text-pink-400">Intermediate</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="font-medium">Laravel Fortify & Passkeys</span>
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-pink-500/10 text-pink-600 dark:text-pink-400">Advanced</span>
                        </li>
                    </ul>
                </div>

            </div>
        </section>

        <!-- Featured Projects Showcase Section -->
        <section id="projects" class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-t border-zinc-200 dark:border-zinc-800/60">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <div class="inline-flex items-center space-x-2 text-indigo-600 dark:text-indigo-400 text-xs font-bold uppercase tracking-wider">
                    <span>// Featured Work</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-zinc-900 dark:text-white tracking-tight">
                    Highlighted Software Projects
                </h2>
                <p class="text-zinc-600 dark:text-zinc-400 text-sm sm:text-base">
                    A selection of full-stack web applications, open-source packages, and real-world tools I have designed and built.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Project 1 -->
                <div class="group rounded-3xl bg-white dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 hover:border-indigo-500/50 dark:hover:border-indigo-500/50 shadow-sm dark:shadow-none overflow-hidden transition-all duration-300 flex flex-col justify-between">
                    <div class="p-8 space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 border border-indigo-500/20">
                                Laravel 13 + Livewire 4
                            </span>
                            <span class="text-xs text-zinc-500">2026</span>
                        </div>

                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                            Herd Workspace Telemetry
                        </h3>

                        <p class="text-zinc-600 dark:text-zinc-400 text-sm leading-relaxed">
                            A real-time developer metrics suite built to monitor background job queues, HTTP server latencies, and active database transactions with instant Livewire polling.
                        </p>

                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">PHP 8.3</span>
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">Livewire 4</span>
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">SQLite</span>
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">Tailwind CSS v4</span>
                        </div>
                    </div>

                    <div class="px-8 pb-8 pt-4 border-t border-zinc-100 dark:border-zinc-800/60 flex items-center justify-between">
                        <a href="https://github.com" target="_blank" class="text-xs font-semibold text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white flex items-center space-x-1.5">
                            <span>View Source</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>

                        <a href="#" onclick="alert('Demo environment launching...'); return false;" class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 hover:text-indigo-700 dark:hover:text-indigo-300 flex items-center space-x-1">
                            <span>Live Demo &rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group rounded-3xl bg-white dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 hover:border-purple-500/50 dark:hover:border-purple-500/50 shadow-sm dark:shadow-none overflow-hidden transition-all duration-300 flex flex-col justify-between">
                    <div class="p-8 space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-purple-500/10 text-purple-600 dark:text-purple-400 border border-purple-500/20">
                                Analytics & API Platform
                            </span>
                            <span class="text-xs text-zinc-500">2025</span>
                        </div>

                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                            Nova Analytics Engine
                        </h3>

                        <p class="text-zinc-600 dark:text-zinc-400 text-sm leading-relaxed">
                            High-throughput event logging infrastructure capable of processing over 2.5 million monthly events with Redis buffering and aggregated analytical summaries.
                        </p>

                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">Laravel API</span>
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">Redis</span>
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">PostgreSQL</span>
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">Vue.js</span>
                        </div>
                    </div>

                    <div class="px-8 pb-8 pt-4 border-t border-zinc-100 dark:border-zinc-800/60 flex items-center justify-between">
                        <a href="https://github.com" target="_blank" class="text-xs font-semibold text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white flex items-center space-x-1.5">
                            <span>View Source</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>

                        <a href="#" onclick="alert('Analytics demo launching...'); return false;" class="text-xs font-semibold text-purple-600 dark:text-purple-400 hover:text-purple-700 dark:hover:text-purple-300 flex items-center space-x-1">
                            <span>Live Demo &rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group rounded-3xl bg-white dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 hover:border-pink-500/50 dark:hover:border-pink-500/50 shadow-sm dark:shadow-none overflow-hidden transition-all duration-300 flex flex-col justify-between">
                    <div class="p-8 space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-pink-500/10 text-pink-600 dark:text-pink-400 border border-pink-500/20">
                                Passkeys & E-Commerce
                            </span>
                            <span class="text-xs text-zinc-500">2025</span>
                        </div>

                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white group-hover:text-pink-600 dark:group-hover:text-pink-400 transition-colors">
                            Flux Passkey Storefront
                        </h3>

                        <p class="text-zinc-600 dark:text-zinc-400 text-sm leading-relaxed">
                            Passwordless digital checkout platform featuring WebAuthn passkey security via Laravel Fortify, Stripe payment processing, and interactive Flux component views.
                        </p>

                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">Laravel Fortify</span>
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">Passkeys</span>
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">Stripe</span>
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">Flux UI</span>
                        </div>
                    </div>

                    <div class="px-8 pb-8 pt-4 border-t border-zinc-100 dark:border-zinc-800/60 flex items-center justify-between">
                        <a href="https://github.com" target="_blank" class="text-xs font-semibold text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white flex items-center space-x-1.5">
                            <span>View Source</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>

                        <a href="#" onclick="alert('Storefront demo launching...'); return false;" class="text-xs font-semibold text-pink-600 dark:text-pink-400 hover:text-pink-700 dark:hover:text-pink-300 flex items-center space-x-1">
                            <span>Live Demo &rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="group rounded-3xl bg-white dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 hover:border-emerald-500/50 dark:hover:border-emerald-500/50 shadow-sm dark:shadow-none overflow-hidden transition-all duration-300 flex flex-col justify-between">
                    <div class="p-8 space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20">
                                AI & Async Workers
                            </span>
                            <span class="text-xs text-zinc-500">2024</span>
                        </div>

                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">
                            Echo AI Task Automation
                        </h3>

                        <p class="text-zinc-600 dark:text-zinc-400 text-sm leading-relaxed">
                            AI task runner that coordinates multi-step code generation and document analysis jobs through asynchronous PHP background workers and WebSocket updates.
                        </p>

                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">PHP 8.3</span>
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">Laravel Queues</span>
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">OpenAI API</span>
                            <span class="px-2.5 py-1 rounded-lg text-[11px] bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 font-medium">WebSockets</span>
                        </div>
                    </div>

                    <div class="px-8 pb-8 pt-4 border-t border-zinc-100 dark:border-zinc-800/60 flex items-center justify-between">
                        <a href="https://github.com" target="_blank" class="text-xs font-semibold text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white flex items-center space-x-1.5">
                            <span>View Source</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>

                        <a href="#" onclick="alert('AI Demo launching...'); return false;" class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 hover:text-emerald-700 dark:hover:text-emerald-300 flex items-center space-x-1">
                            <span>Live Demo &rarr;</span>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- Work Experience Timeline Section -->
        <section id="experience" class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-t border-zinc-200 dark:border-zinc-800/60">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <div class="inline-flex items-center space-x-2 text-indigo-600 dark:text-indigo-400 text-xs font-bold uppercase tracking-wider">
                    <span>// Career Trajectory</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-zinc-900 dark:text-white tracking-tight">
                    Work Experience
                </h2>
                <p class="text-zinc-600 dark:text-zinc-400 text-sm sm:text-base">
                    My professional timeline delivering production software across startups and enterprise environments.
                </p>
            </div>

            <div class="max-w-4xl mx-auto relative before:absolute before:inset-0 before:left-4 sm:before:left-1/2 before:w-0.5 before:bg-zinc-200 dark:before:bg-zinc-800">
                
                <!-- Item 1 -->
                <div class="relative mb-12 sm:mb-16 flex flex-col sm:flex-row items-start sm:items-center">
                    <div class="absolute left-4 sm:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-indigo-600 dark:bg-indigo-500 border-4 border-slate-50 dark:border-zinc-950 shadow-lg shadow-indigo-500/50 z-10"></div>
                    
                    <div class="ml-12 sm:ml-0 sm:w-1/2 sm:pr-12 text-left sm:text-right">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 border border-indigo-500/20">
                            2024 - Present
                        </span>
                        <h3 class="text-lg font-bold text-zinc-900 dark:text-white mt-2">Lead Full-Stack Engineer</h3>
                        <p class="text-xs font-semibold text-indigo-600 dark:text-indigo-400">CloudScale Solutions</p>
                    </div>

                    <div class="ml-12 sm:ml-0 sm:w-1/2 sm:pl-12 mt-3 sm:mt-0">
                        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 shadow-sm dark:shadow-none text-xs text-zinc-600 dark:text-zinc-400 space-y-2">
                            <p>Architected modular micro-monolith Laravel applications serving over 2M monthly API requests.</p>
                            <p>Migrated legacy frontend components to Livewire 4 and Tailwind v4, cutting load times by 45%.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="relative mb-12 sm:mb-16 flex flex-col sm:flex-row items-start sm:items-center">
                    <div class="absolute left-4 sm:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-purple-600 dark:bg-purple-500 border-4 border-slate-50 dark:border-zinc-950 shadow-lg shadow-purple-500/50 z-10"></div>
                    
                    <div class="ml-12 sm:ml-0 sm:w-1/2 sm:pr-12 text-left sm:text-right order-1 sm:order-2 sm:pl-12">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-purple-500/10 text-purple-600 dark:text-purple-400 border border-purple-500/20">
                            2022 - 2024
                        </span>
                        <h3 class="text-lg font-bold text-zinc-900 dark:text-white mt-2">Senior Laravel Developer</h3>
                        <p class="text-xs font-semibold text-purple-600 dark:text-purple-400">Apex Web Systems</p>
                    </div>

                    <div class="ml-12 sm:ml-0 sm:w-1/2 sm:pr-12 mt-3 sm:mt-0 order-2 sm:order-1">
                        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 shadow-sm dark:shadow-none text-xs text-zinc-600 dark:text-zinc-400 space-y-2">
                            <p>Spearheaded RESTful API development and multi-tenant database partitioning using PostgreSQL.</p>
                            <p>Implemented automated CI/CD deployment pipelines using GitHub Actions and Laravel Forge.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="relative flex flex-col sm:flex-row items-start sm:items-center">
                    <div class="absolute left-4 sm:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-pink-600 dark:bg-pink-500 border-4 border-slate-50 dark:border-zinc-950 shadow-lg shadow-pink-500/50 z-10"></div>
                    
                    <div class="ml-12 sm:ml-0 sm:w-1/2 sm:pr-12 text-left sm:text-right">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-pink-500/10 text-pink-600 dark:text-pink-400 border border-pink-500/20">
                            2020 - 2022
                        </span>
                        <h3 class="text-lg font-bold text-zinc-900 dark:text-white mt-2">Full-Stack Developer</h3>
                        <p class="text-xs font-semibold text-pink-600 dark:text-pink-400">TechForge Labs</p>
                    </div>

                    <div class="ml-12 sm:ml-0 sm:w-1/2 sm:pl-12 mt-3 sm:mt-0">
                        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 shadow-sm dark:shadow-none text-xs text-zinc-600 dark:text-zinc-400 space-y-2">
                            <p>Developed custom client web applications, database migrations, and responsive Tailwind UI designs.</p>
                            <p>Maintained 99%+ code coverage on core domain models using PHPUnit test suites.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-t border-zinc-200 dark:border-zinc-800/60">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Contact Left Info -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="inline-flex items-center space-x-2 text-indigo-600 dark:text-indigo-400 text-xs font-bold uppercase tracking-wider">
                        <span>// Get In Touch</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-bold text-zinc-900 dark:text-white tracking-tight">
                        Let's Discuss Your Next Project
                    </h2>

                    <p class="text-zinc-600 dark:text-zinc-400 text-sm sm:text-base leading-relaxed">
                        Interested in collaborating, hiring for full-time/contract engineering roles, or consulting on Laravel architecture? Send me a message!
                    </p>

                    <div class="space-y-4 pt-4">
                        <div class="flex items-center space-x-4 p-4 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 shadow-sm dark:shadow-none">
                            <div class="w-10 h-10 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-zinc-500 font-semibold uppercase">Email Directly</p>
                                <a href="mailto:susmita.basak@example.com" class="text-sm font-bold text-zinc-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                    susmita.basak@example.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4 p-4 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 shadow-sm dark:shadow-none">
                            <div class="w-10 h-10 rounded-xl bg-purple-500/10 text-purple-600 dark:text-purple-400 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-zinc-500 font-semibold uppercase">Location</p>
                                <p class="text-sm font-bold text-zinc-900 dark:text-white">San Francisco, CA (Remote Available)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Right Form (Livewire) -->
                <div class="lg:col-span-7">
                    @livewire('contact-form')
                </div>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="border-t border-zinc-200 dark:border-zinc-800/80 bg-white dark:bg-zinc-950 py-10 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center text-white font-bold text-xs">
                    SB
                </div>
                <p class="text-xs text-zinc-500">
                    &copy; {{ date('Y') }} Susmita Basak. Built with Laravel 13, Livewire 4 & Tailwind CSS v4.
                </p>
            </div>

            <div class="flex items-center space-x-6 text-xs text-zinc-600 dark:text-zinc-400">
                <a href="#about" class="hover:text-zinc-900 dark:hover:text-white transition-colors">About</a>
                <a href="#skills" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Skills</a>
                <a href="#projects" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Projects</a>
                <a href="#contact" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Contact</a>
                <a href="#hero" class="p-2 rounded-lg bg-zinc-100 dark:bg-zinc-900 hover:bg-zinc-200 dark:hover:bg-zinc-800 text-zinc-700 dark:text-zinc-300 hover:text-zinc-900 dark:hover:text-white transition-all" title="Back to top">
                    &uarr; Top
                </a>
            </div>

        </div>
    </footer>

    @livewireScripts

    <!-- Theme Toggle Event Handler -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleBtn = document.getElementById('theme-toggle');
            if (toggleBtn) {
                toggleBtn.addEventListener('click', () => {
                    if (document.documentElement.classList.contains('dark')) {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('theme', 'light');
                    } else {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('theme', 'dark');
                    }
                });
            }
        });
    </script>
</body>
</html>
