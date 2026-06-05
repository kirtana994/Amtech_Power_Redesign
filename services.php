<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Expert Services - Amtech Power Limited</title>
    <meta name="description" content="Services by Amtech Power Limited — installation, maintenance and technical support for power systems.">
    <meta name="keywords" content="Amtech Power, services, maintenance, installation, technical support">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Amtech Power Limited">
    <meta property="og:title" content="Expert Services - Amtech Power Limited">
    <meta property="og:description" content="Services by Amtech Power Limited — installation, maintenance and technical support for power systems.">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Metropolis:wght@600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#004d4b",
                        "on-primary": "#ffffff",
                        "primary-container": "#006765",
                        "on-primary-container": "#7ae6e2",
                        "secondary": "#296487",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#9fd5fd",
                        "on-secondary-container": "#205d80",
                        "tertiary": "#004c56",
                        "on-tertiary": "#ffffff",
                        "tertiary-container": "#046672",
                        "on-tertiary-container": "#96e1ef",
                        "background": "#f7faf9",
                        "on-background": "#181c1c",
                        "surface": "#f7faf9",
                        "on-surface": "#181c1c",
                        "surface-variant": "#e0e3e2",
                        "on-surface-variant": "#3d4948",
                        "outline": "#6f7978",
                        "outline-variant": "#bec9c7",
                        "inverse-surface": "#2d3131",
                        "inverse-on-surface": "#eef1f0",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "surface-dim": "#d7dbda",
                        "surface-bright": "#f7faf9",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f1f4f3",
                        "surface-container": "#ebeeed",
                        "surface-container-high": "#e6e9e8",
                        "surface-container-highest": "#e0e3e2",
                        "primary-fixed": "#88f4f0",
                        "on-primary-fixed": "#00201f",
                        "primary-fixed-dim": "#6bd7d4",
                        "on-primary-fixed-variant": "#00504e",
                        "secondary-fixed": "#c8e6ff",
                        "on-secondary-fixed": "#001e2e",
                        "secondary-fixed-dim": "#96cdf5",
                        "on-secondary-fixed-variant": "#004c6d",
                        "tertiary-fixed": "#a4eefc",
                        "on-tertiary-fixed": "#001f24",
                        "tertiary-fixed-dim": "#88d2e0",
                        "on-tertiary-fixed-variant": "#004f58",
                        "status-success": "#10B981",
                        "status-warning": "#F59E0B",
                        "border-muted": "#E8EEF1",
                        "dark-navy": "#00201f"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "margin-mobile": "16px",
                        "gutter": "24px",
                        "unit": "4px",
                        "margin-desktop": "64px",
                        "max-width": "1200px",
                        "section-padding-lg": "80px",
                        "base": "8px",
                        "container-max": "1200px"
                    },
                    "fontFamily": {
                        "display-lg": ["Metropolis", "sans-serif"],
                        "headline-lg": ["Metropolis", "sans-serif"],
                        "body-md": ["Inter", "sans-serif"],
                        "label-md": ["Inter", "sans-serif"],
                        "headline-md": ["Metropolis", "sans-serif"],
                        "headline-sm": ["Metropolis", "sans-serif"],
                        "title-lg": ["Metropolis", "sans-serif"],
                        "body-lg": ["Inter", "sans-serif"],
                        "technical-mono": ["JetBrains Mono", "monospace"],
                        "label-caps": ["JetBrains Mono", "monospace"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                            /* Removed mobile menu styles */
                        "technical-mono": ["12px", { "lineHeight": "16px", "fontWeight": "500", "letterSpacing": "0.08em" }]
                    }
                },
            },
        }
    </script>
    <style>
        #mobile-menu {
            transition: transform 0.3s ease-in-out;
            transform: translateX(100%);
        }

        #mobile-menu.open {
            transform: translateX(0);
        }
    </style>
    <script>
        (function () {
            const theme = localStorage.getItem('theme') || 'light';
            document.documentElement.className = theme;
        })();
    </script>
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    <style>
        .blueprint-bg {
            background-image: radial-gradient(circle, rgba(0, 77, 75, 0.08) 1px, transparent 1px);
            background-size: 24px 24px;
        }

        .dark .blueprint-bg {
            background-image: radial-gradient(circle, rgba(136, 244, 240, 0.05) 1px, transparent 1px);
        }

        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 1s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: transform, opacity;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .parallax-hero {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .btn-hover-effect {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-hover-effect:hover {
            transform: scale(1.02);
            filter: brightness(1.1);
        }

        .service-card-hover {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .service-card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 77, 75, 0.12);
        }

        .dark .service-card-hover:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            border-color: rgba(136, 244, 240, 0.2);
        }

        .service-card-hover:hover .icon-bg {
            transform: scale(1.1) rotate(5deg);
        }

        .service-card-hover:hover .arrow-icon {
            transform: translateX(8px);
        }

        *:focus-visible {
            outline: 3px solid #004d4b !important;
            outline-offset: 4px;
        }

        .dark *:focus-visible {
            outline: 3px solid #88f4f0 !important;
        }

        .parallax-float {
            transition: transform 0.1s ease-out;
            will-change: transform;
        }

    </style>
    <link rel="stylesheet" href="brand-theme.css">
</head>

<body class="bg-surface dark:bg-dark-navy text-on-surface dark:text-white font-body-md overflow-x-hidden antialiased">
    <header
        class="fixed top-0 w-full z-50 bg-background dark:bg-on-primary-fixed border-b border-outline/20 shadow-md transition-colors duration-300">
        <nav class="flex justify-between items-center h-20 px-4 md:px-8 max-w-[1200px] mx-auto">
            <div class="flex items-center gap-4">
                <a href="../Amtech_Power_Redesign/home.php">
                    <div class="p-1 dark:p-1 inline-block">
                        <img alt="Amtech Power" 
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoDW-zwbnXHilUeQqANCSsChtF09kHW-C2mr7C3Q5pzkpY5aFOgZnYflzqMRVa51sQ-aQ0NeNzZKcRvvMty37OUoG2Ydp9OfNIBH0B2bImFlIWr-OXklcJHL9XztUYtirttpFrY31RU6ftjBwgDfPYbZFprdHUqJQpbhcF6t2J6BWrit86vATS1vjUh7biROuasV5Ji2oMfv8PumrzacFoaUXK_mchdFFj5Qzzh0kLpFgrLgMSTqwGmhsvb40H3_Fn-fZcq1TJqh0">
                    </div>
                </a>
            </div>
            <div class="hidden lg:flex items-center gap-6 xl:gap-8">
                <a class="text-on-surface-variant dark:text-white hover:text-primary transition-colors duration-300 font-label-md text-sm"
                    href="../Amtech_Power_Redesign/home.php">Home</a>
                <a class="text-on-surface-variant dark:text-white hover:text-primary transition-colors duration-300 font-label-md text-sm"
                    href="../Amtech_Power_Redesign/about_us.php">About Us</a>
                <a class="text-on-surface-variant dark:text-white hover:text-primary transition-colors duration-300 font-label-md text-sm"
                    href="../Amtech_Power_Redesign/products.php">Products</a>
                <a class="text-on-surface-variant dark:text-white hover:text-primary transition-colors duration-300 font-label-md text-sm"
                    href="../Amtech_Power_Redesign/services.php">Service</a>
                <a class="text-on-surface-variant dark:text-white hover:text-primary transition-colors duration-300 font-label-md text-sm"
                    href="../Amtech_Power_Redesign/customers.php">Customers</a>
                <a class="text-on-surface-variant dark:text-white hover:text-primary transition-colors duration-300 font-label-md text-sm"
                    href="../Amtech_Power_Redesign/sitemap.php">Site Map</a>
            </div>
            <div class="flex items-center gap-2 md:gap-4">
                <button aria-label="Toggle theme" class="p-2 rounded-full hover:bg-surface-variant/50 transition-colors"
                    id="theme-toggle">
                    <span class="material-symbols-outlined dark:hidden">dark_mode</span>
                    <span class="material-symbols-outlined hidden dark:block">light_mode</span>
                </button>
                <a class="hidden sm:block border-2 border-primary text-primary px-4 md:px-6 py-2 rounded-lg font-bold uppercase text-xs md:text-label-caps hover:bg-primary hover:text-on-primary transition-all duration-300 active:scale-95 shadow-md"
                    href="../Amtech_Power_Redesign/contact_us.php">Contact Us</a>
                <a class="hidden sm:block bg-primary text-on-primary px-4 md:px-6 py-2 rounded-lg font-bold uppercase text-xs md:text-label-caps hover:brightness-110 transition-all duration-300 active:scale-95 shadow-lg"
                    href="../Amtech_Power_Redesign/rfq.php">Request Quote</a>
                <button class="lg:hidden p-2 text-on-surface dark:text-white" id="menu-toggle">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </nav>
    </header>
    <div class="fixed inset-0 z-[60] bg-background lg:hidden" id="mobile-menu">
        <div class="flex justify-between items-center h-20 px-4 border-b border-outline/20">
            <a href="../Amtech_Power_Redesign/home.php"><div class="p-1 dark:p-1 inline-block"><img alt="Amtech Power" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoDW-zwbnXHilUeQqANCSsChtF09kHW-C2mr7C3Q5pzkpY5aFOgZnYflzqMRVa51sQ-aQ0NeNzZKcRvvMty37OUoG2Ydp9OfNIBH0B2bImFlIWr-OXklcJHL9XztUYtirttpFrY31RU6ftjBwgDfPYbZFprdHUqJQpbhcF6t2J6BWrit86vATS1vjUh7biROuasV5Ji2oMfv8PumrzacFoaUXK_mchdFFj5Qzzh0kLpFgrLgMSTqwGmhsvb40H3_Fn-fZcq1TJqh0"></div></a>
            <button class="p-2 text-on-surface dark:text-white" id="menu-close">
                <span class="material-symbols-outlined text-3xl">close</span>
            </button>
        </div>
        <div class="flex flex-col p-8 gap-6 text-xl">
            <a class="text-on-surface-variant" href="../Amtech_Power_Redesign/home.php">Home</a>
            <a class="text-on-surface-variant" href="../Amtech_Power_Redesign/about_us.php">About Us</a>
            <a class="text-on-surface-variant" href="../Amtech_Power_Redesign/products.php">Products</a>
            <a class="text-on-surface-variant" href="../Amtech_Power_Redesign/services.php">Service</a>
            <a class="text-on-surface-variant" href="../Amtech_Power_Redesign/customers.php">Customers</a>
            <a class="text-on-surface-variant" href="../Amtech_Power_Redesign/sitemap.php">Site Map</a>
            <div class="pt-8">
                <a class="base w-full block text-center border-2 border-primary text-primary px-8 py-2 rounded-lg font-bold uppercase text-xs md:text-label-caps hover:bg-primary hover:text-on-primary transition-all duration-300 active:scale-95 shadow-md"
                    href="../Amtech_Power_Redesign/contact_us.php">Contact Us</a>
                <a class="block w-full bg-primary text-on-primary px-6 py-4 rounded-lg font-bold uppercase text-label-caps shadow-lg text-center"
                    href="../Amtech_Power_Redesign/rfq.php">Request Quote</a>
            </div>
        </div>
    </div>
    <main class="pt-20">
        <!-- High-Impact Hero Section -->
        <section
            class="relative h-[550px] md:h-[650px] flex items-center overflow-hidden bg-on-primary-fixed parallax-hero"
            style="background-image: url(&quot;../Amtech_Power_Redesign/assets/Image_2.png&quot;);">
            <div class="absolute inset-0 bg-primary/40 dark:bg-dark-navy/60 mix-blend-multiply z-10"></div>
            <div
                class="absolute inset-0 bg-gradient-to-r from-on-secoondary-container via-on-primary-fixed/80 to-transparent z-20">
            </div>
            <div class="absolute inset-0 blueprint-bg opacity-20 z-10"></div>
            <div class="relative z-30 px-4 md:px-8 max-w-[1200px] mx-auto w-full">
                <div class="max-w-3xl reveal visible">
                    <div
                        class="inline-flex items-center gap-3 px-4 py-1.5 mb-6 md:mb-8 bg-primary dark:bg-primary-container text-white font-technical-mono text-[10px] md:text-technical-mono uppercase tracking-widest rounded-sm">
                        <span class="w-2 h-2 bg-status-success rounded-full animate-pulse"></span>
                        Field Operations &amp; Engineering
                    </div>
                    <h1 class="font-display-lg text-[32px] md:text-display-lg text-white mb-6 leading-tight">Expert
                        Technical Support &amp; Field Services</h1>
                    <p
                        class="font-body-lg text-base md:text-body-lg text-slate-200 mb-8 md:mb-10 leading-relaxed max-w-2xl">
                        Our experienced team offers comprehensive services from commissioning and startup of excitation
                        systems to advanced relay protection, 24/7 anywhere in India.
                    </p>
                    <div class="flex flex-col sm:flex-row flex-wrap gap-4 md:gap-6">
                        <button
                            class="px-8 py-4 bg-primary dark:bg-primary-container text-white font-label-md text-label-md font-semibold rounded btn-hover-effect shadow-xl">Book
                            a Site Audit</button>
                        <script>
                            
                            // Active link highlighting (desktop & mobile)
                            document.addEventListener('DOMContentLoaded', () => {
                                const current = window.location.pathname.split('/').pop();
                                document.querySelectorAll('header nav a').forEach(a => {
                                    const hrefName = a.getAttribute('href')?.split('/').pop();
                                    if (hrefName === current) {
                                        a.classList.add('text-primary','dark:text-white','border-b-2','border-primary','pb-1','font-bold');
                                    }
                                });
                                document.querySelectorAll('#mobile-menu a').forEach(a => {
                                    const hrefName = a.getAttribute('href')?.split('/').pop();
                                    if (hrefName === current) {
                                        a.classList.add('text-primary','font-bold');
                                    }
                                });
                            });
                        </script>
                        <button onclick="document.getElementById('service_portfolio').scrollIntoView({behavior:'smooth'})"
                            class="px-8 py-4 border border-white/40 text-white backdrop-blur-md font-label-md text-label-md font-semibold rounded btn-hover-effect">Service
                            Portfolio</button>
                    </div>
                </div>
            </div>
            <!-- Floating Support Highlight -->
            <div class="absolute bottom-12 right-4 lg:right-24 z-40 hidden md:block parallax-float" id="support-float">
                <div
                    class="bg-white/10 backdrop-blur-xl border border-white/20 p-6 md:p-8 rounded-2xl flex items-center gap-6 shadow-2xl transition-transform duration-300 hover:scale-105">
                    <div
                        class="w-12 h-12 md:w-14 md:h-14 bg-primary-container rounded-full flex items-center justify-center text-on-primary-container shadow-inner">
                        <span class="material-symbols-outlined text-2xl md:text-3xl"
                            data-icon="support_agent">support_agent</span>
                    </div>
                    <div>
                        <div class="text-white font-bold font-title-lg text-lg md:text-xl">24 / 7 SUPPORT</div>
                        <div
                            class="text-primary-fixed text-technical-mono uppercase tracking-widest text-[10px] md:text-[11px] mt-1">
                            Available Nationwide</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Core Mission & Capabilities -->
        <section
            class="py-16 md:py-24 px-4 md:px-8 max-w-[1200px] mx-auto overflow-hidden bg-surface dark:bg-dark-navy">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-20 items-center reveal visible">
                <div class="lg:w-1/2">
                    <div class="mb-10 text-center lg:text-left">
                        <span
                            class="text-primary dark:text-primary-fixed font-technical-mono text-technical-mono uppercase tracking-[0.3em] font-bold block mb-4">ENGINEERING
                            PRECISION</span>
                        <h2
                            class="font-headline-md text-[28px] md:text-headline-md text-on-primary-fixed dark:text-white mb-6 leading-tight">
                            Comprehensive Technical Excellence</h2>
                        <p
                            class="font-body-md text-body-md text-on-surface-variant dark:text-white/70 leading-relaxed mb-8">
                            Our experienced team of professionals offers various services like commissioning and startup
                            of excitation systems, relay protection systems, synchronizing systems, auxiliaries control
                            and monitoring for third party supplied products also. We have expertise in trouble shooting
                            and analysis of any make of Digital or Analog AVR.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-8">
                        <div class="flex flex-col gap-3 group transition-transform duration-300 hover:-translate-y-1">
                            <div
                                class="w-12 h-12 bg-primary/10 dark:bg-primary-fixed/10 rounded-lg flex items-center justify-center text-primary dark:text-primary-fixed group-hover:bg-primary dark:group-hover:bg-primary-fixed group-hover:text-white dark:group-hover:text-dark-navy transition-all duration-300">
                                <span class="material-symbols-outlined">speed</span>
                            </div>
                            <h4 class="font-bold text-on-surface dark:text-white">Optimized ROI</h4>
                            <p class="text-sm text-on-surface-variant dark:text-white/60">Efficiency mapping designed to
                                maximize long-term asset value.</p>
                        </div>
                        <div class="flex flex-col gap-3 group transition-transform duration-300 hover:-translate-y-1">
                            <div
                                class="w-12 h-12 bg-primary/10 dark:bg-primary-fixed/10 rounded-lg flex items-center justify-center text-primary dark:text-primary-fixed group-hover:bg-primary dark:group-hover:bg-primary-fixed group-hover:text-white dark:group-hover:text-dark-navy transition-all duration-300">
                                <span class="material-symbols-outlined">shield_with_heart</span>
                            </div>
                            <h4 class="font-bold text-on-surface dark:text-white">Asset Health</h4>
                            <p class="text-sm text-on-surface-variant dark:text-white/60">Preventive maintenance that
                                extends motor life and reduces noise.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 relative w-full">
                    <div
                        class="relative z-10 rounded-2xl overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.01]">
                        <img alt="Service Professional" class="w-full h-[350px] md:h-[500px] object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDc9yG903m5HZQLxWHT5dZtI1IbG6wltrm_CLs4DO8_e5NCmRpW4Y85LGWBGAJqXkesa7RppRHvrHDa0Gt8x9u4ktrpBxn-Dh7wiWJzu1h4SuliMe89xHdXNE1pLxSywk7qwedHOeNKA8Q7Nt6hpmA9tqGZiI9ivDSuNpK--wn4VcFLLtgDBVrRghMYhxzS_aoWcPPqRgPDC0Ik5RQyjYOsu02sH1mUN7BD_nonefgQTGvrlULDH8vfgUIunsTn2iFQu7sFi_UJAsc">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-6 md:bottom-8 left-6 md:left-8 right-6 md:right-8 text-white">
                            <p class="text-sm md:text-base italic font-medium">"Our service team is always ready to
                                provide all kind of support 24 X 7 anywhere in India."</p>
                            <div class="mt-4 flex items-center gap-2">
                                <span class="w-8 h-px bg-white/50"></span>
                                <span class="text-[10px] md:text-xs uppercase tracking-widest font-technical-mono">Field
                                    Service Commitment</span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-primary/5 dark:bg-primary-fixed/5 rounded-full -z-0 parallax-float"
                        data-speed="0.05"></div>
                    <div class="absolute -bottom-10 -left-10 w-60 h-60 bg-primary/5 dark:bg-primary-fixed/5 rounded-full -z-0 parallax-float"
                        data-speed="-0.03"></div>
                </div>
            </div>
        </section>
        <!-- Service Capability Matrix -->
        <section id="service_portfolio"
            class="py-16 md:py-24 bg-surface-container-low dark:bg-surface-container/5 border-y border-outline-variant/30 dark:border-white/10">
            <div class="px-4 md:px-8 max-w-[1200px] mx-auto">
                <div class="text-center mb-12 md:mb-16 reveal visible">
                    <h2
                        class="font-headline-md text-[28px] md:text-headline-md text-primary dark:text-primary-fixed mb-4">
                        Our Service Portfolio</h2>
                    <p class="text-on-surface-variant dark:text-white/70 max-w-2xl mx-auto">Precision engineering
                        services delivered with 24x7 readiness for any infrastructure environment.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6" id="service-grid">
                    <!-- Card 1 -->
                    <div class="reveal service-card-hover group bg-surface-container-lowest dark:bg-white/5 border border-outline-variant/50 dark:border-white/10 p-6 md:p-8 rounded-xl cursor-pointer flex flex-col justify-between visible"
                        style="transition-delay: 100ms;">
                        <div>
                            <div
                                class="icon-bg w-12 h-12 md:w-14 md:h-14 bg-primary-container/10 dark:bg-primary-fixed/10 rounded-lg flex items-center justify-center text-primary dark:text-primary-fixed mb-6 transition-all duration-300 group-hover:bg-primary dark:group-hover:bg-primary-fixed group-hover:text-white dark:group-hover:text-dark-navy">
                                <span class="material-symbols-outlined text-2xl md:text-3xl">rocket_launch</span>
                            </div>
                            <h3 class="font-bold text-lg mb-3 dark:text-white">Commissioning &amp; Startup</h3>
                            <p class="text-sm text-on-surface-variant dark:text-white/60 leading-relaxed">Full
                                deployment of excitation and protection systems.</p>
                        </div>
                        <div class="mt-6 md:mt-8 arrow-icon transition-transform duration-300">
                            <span
                                class="material-symbols-outlined text-primary dark:text-primary-fixed">arrow_forward</span>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="reveal service-card-hover group bg-surface-container-lowest dark:bg-white/5 border border-outline-variant/50 dark:border-white/10 p-6 md:p-8 rounded-xl cursor-pointer flex flex-col justify-between visible"
                        style="transition-delay: 200ms;">
                        <div>
                            <div
                                class="icon-bg w-12 h-12 md:w-14 md:h-14 bg-primary-container/10 dark:bg-primary-fixed/10 rounded-lg flex items-center justify-center text-primary dark:text-primary-fixed mb-6 transition-all duration-300 group-hover:bg-primary dark:group-hover:bg-primary-fixed group-hover:text-white dark:group-hover:text-dark-navy">
                                <span class="material-symbols-outlined text-2xl md:text-3xl">build_circle</span>
                            </div>
                            <h3 class="font-bold text-lg mb-3 dark:text-white">Precision Maintenance</h3>
                            <p class="text-sm text-on-surface-variant dark:text-white/60 leading-relaxed">Regular upkeep
                                to ensure 100% operational uptime.</p>
                        </div>
                        <div class="mt-6 md:mt-8 arrow-icon transition-transform duration-300">
                            <span
                                class="material-symbols-outlined text-primary dark:text-primary-fixed">arrow_forward</span>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="reveal service-card-hover group bg-primary dark:bg-primary-container p-6 md:p-8 rounded-xl shadow-lg cursor-pointer flex flex-col justify-between visible"
                        style="transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
                        <div>
                            <div
                                class="icon-bg w-12 h-12 md:w-14 md:h-14 bg-white/20 rounded-lg flex items-center justify-center text-white mb-6 transition-all duration-300">
                                <span class="material-symbols-outlined text-2xl md:text-3xl">troubleshoot</span>
                            </div>
                            <h3 class="font-bold text-lg mb-3 text-white">Expert Trouble-Shooting</h3>
                            <p class="text-sm text-white/80 leading-relaxed">Rapid analysis of any Digital or Analog AVR
                                system.</p>
                        </div>
                        <div class="mt-6 md:mt-8 arrow-icon transition-transform duration-300">
                            <span class="material-symbols-outlined text-white">arrow_forward</span>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="reveal service-card-hover group bg-surface-container-lowest dark:bg-white/5 border border-outline-variant/50 dark:border-white/10 p-6 md:p-8 rounded-xl cursor-pointer flex flex-col justify-between visible"
                        style="transition-delay: 400ms;">
                        <div>
                            <div
                                class="icon-bg w-12 h-12 md:w-14 md:h-14 bg-primary-container/10 dark:bg-primary-fixed/10 rounded-lg flex items-center justify-center text-primary dark:text-primary-fixed mb-6 transition-all duration-300 group-hover:bg-primary dark:group-hover:bg-primary-fixed group-hover:text-white dark:group-hover:text-dark-navy">
                                <span class="material-symbols-outlined text-2xl md:text-3xl">fact_check</span>
                            </div>
                            <h3 class="font-bold text-lg mb-3 dark:text-white">On-Site Inspection</h3>
                            <p class="text-sm text-on-surface-variant dark:text-white/60 leading-relaxed">Thorough
                                audits for legacy and new equipment.</p>
                        </div>
                        <div class="mt-6 md:mt-8 arrow-icon transition-transform duration-300">
                            <span
                                class="material-symbols-outlined text-primary dark:text-primary-fixed">arrow_forward</span>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="reveal service-card-hover group bg-surface-container-lowest dark:bg-white/5 border border-outline-variant/50 dark:border-white/10 p-6 md:p-8 rounded-xl cursor-pointer flex flex-col justify-between visible"
                        style="transition-delay: 500ms;">
                        <div>
                            <div
                                class="icon-bg w-12 h-12 md:w-14 md:h-14 bg-primary-container/10 dark:bg-primary-fixed/10 rounded-lg flex items-center justify-center text-primary dark:text-primary-fixed mb-6 transition-all duration-300 group-hover:bg-primary dark:group-hover:bg-primary-fixed group-hover:text-white dark:group-hover:text-dark-navy">
                                <span class="material-symbols-outlined text-2xl md:text-3xl">school</span>
                            </div>
                            <h3 class="font-bold text-lg mb-3 dark:text-white">Customer Training</h3>
                            <p class="text-sm text-on-surface-variant dark:text-white/60 leading-relaxed">Knowledge
                                transfer for site operational excellence.</p>
                        </div>
                        <div class="mt-6 md:mt-8 arrow-icon transition-transform duration-300">
                            <span
                                class="material-symbols-outlined text-primary dark:text-primary-fixed">arrow_forward</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Final CTA Section -->
        <section
            class="py-16 md:py-24 px-4 md:px-8 max-w-[1200px] mx-auto text-center reveal bg-surface dark:bg-dark-navy visible">
            <div
                class="bg-surface-container dark:bg-white/5 p-8 md:p-16 rounded-[1.5rem] md:rounded-[2rem] border border-outline-variant/30 dark:border-white/10 relative overflow-hidden transition-all duration-500 hover:border-primary/20 dark:hover:border-primary-fixed/20 group">
                <div
                    class="absolute -top-24 -right-24 w-64 h-64 bg-primary/5 dark:bg-primary-fixed/5 rounded-full transition-transform duration-700 group-hover:scale-125">
                </div>
                <div
                    class="absolute -bottom-24 -left-24 w-64 h-64 bg-primary/5 dark:bg-primary-fixed/5 rounded-full transition-transform duration-700 group-hover:scale-125">
                </div>
                <div class="relative z-10">
                    <h2
                        class="font-display-lg text-[28px] md:text-display-lg text-primary dark:text-primary-fixed mb-6">
                        Ready to Ensure Operational Excellence?</h2>
                    <p class="text-on-surface-variant dark:text-white/70 max-w-2xl mx-auto mb-10 text-base md:text-lg">
                        Connect with our engineering team for a comprehensive evaluation of your excitation and control
                        systems.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4 md:gap-6">
                        <button onclick="window.location.href='../Amtech_Power_Redesign/rfq.php'"
                            class="px-8 md:px-12 py-4 md:py-5 bg-primary dark:bg-primary-container text-white font-bold rounded-lg shadow-xl btn-hover-effect">Schedule
                            Expert Consultation</button>
                        <button onclick="window.location.href='../Amtech_Power_Redesign/contact_us.php'"+


                            class="px-8 md:px-12 py-4 md:py-5 border-2 border-primary dark:border-primary-fixed text-primary dark:text-primary-fixed font-bold rounded-lg btn-hover-effect hover:bg-primary/5 dark:hover:bg-primary-fixed/5">Contact
                            24/7 Support Desk</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include '../Amtech_Power_Redesign/includes/footer.php'; ?>
    <script>
        // Theme toggle logic
        const themeToggle = document.getElementById('theme-toggle');
        const menuToggle = document.getElementById('menu-toggle');
        const menuClose = document.getElementById('menu-close');
        const mobileMenu = document.getElementById('mobile-menu');

        const updateThemeUI = () => {
            if (!themeToggle) {
                return;
            }
            const isDark = document.documentElement.classList.contains('dark');
            const icons = themeToggle.querySelectorAll('.material-symbols-outlined');
            if (isDark) {
                icons[0].classList.add('hidden');
                icons[1].classList.remove('hidden');
            } else {
                icons[0].classList.remove('hidden');
                icons[1].classList.add('hidden');
            }
        };

        themeToggle.addEventListener('click', () => {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
            updateThemeUI();
        });

        if (menuToggle && mobileMenu) {
            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.add('open');
                document.body.style.overflow = 'hidden';
            });
        }

        if (menuClose && mobileMenu) {
            menuClose.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                document.body.style.overflow = '';
            });
        }

        if (mobileMenu) {
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.remove('open');
                    document.body.style.overflow = '';
                });
            });
        }

        // Reveal animation logic
        const observerOptions = {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Advanced Parallax & Scroll Effects
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;

            // Background Parallax
            const hero = document.querySelector('.parallax-hero');
            if (hero) {
                hero.style.backgroundPositionY = (scrolled * 0.5) + 'px';
            }

            // Floating elements parallax
            document.querySelectorAll('.parallax-float').forEach(el => {
                const speed = el.getAttribute('data-speed') || 0.1;
                el.style.transform = `translateY(${scrolled * speed}px)`;
            });

            // Specific float for support agent card
            const supportFloat = document.getElementById('support-float');
            if (supportFloat && window.innerWidth > 768) {
                supportFloat.style.transform = `translateY(${scrolled * -0.05}px)`;
            }

            // Header scroll effect
            const header = document.querySelector('header');
            if (scrolled > 50) {
                header.classList.add('py-0', 'shadow-md');
                header.querySelector('nav').classList.replace('h-20', 'h-16');
                if (mobileMenu) {
                    mobileMenu.style.top = '64px';
                }
            } else {
                header.classList.remove('py-0', 'shadow-md');
                header.querySelector('nav').classList.replace('h-16', 'h-20');
                if (mobileMenu) {
                    mobileMenu.style.top = '80px';
                }
            }
        });

        // Smooth hover interaction for cards
        document.querySelectorAll('.service-card-hover').forEach(card => {
            card.addEventListener('mouseenter', function () {
                this.style.transition = 'all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
            });
            card.addEventListener('mouseleave', function () {
                this.style.transition = 'all 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
            });
        });
    </script>


</body>

</html>
