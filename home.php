<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Amtech Power Limited | Industrial Precision Power Solutions</title>
    <meta name="description" content="Amtech Power Limited — Industrial precision power solutions, generators and turbine systems.">
    <meta name="keywords" content="Amtech Power, industrial power, generators, turbines, power solutions">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Amtech Power Limited">
    <meta property="og:title" content="Amtech Power Limited | Industrial Precision Power Solutions">
    <meta property="og:description" content="Amtech Power Limited — Industrial precision power solutions, generators and turbine systems.">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Metropolis:wght@600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "background": "var(--background)",
                        "on-background": "var(--on-background)",
                        "primary": "var(--primary)",
                        "on-primary": "var(--on-primary)",
                        "secondary": "var(--secondary)",
                        "surface": "var(--surface)",
                        "on-surface": "var(--on-surface)",
                        "surface-variant": "var(--surface-variant)",
                        "on-surface-variant": "var(--on-surface-variant)",
                        "outline": "var(--outline)",
                        "border-muted": "var(--border-muted)",
                        "surface-container-highest": "var(--surface-container-highest)",
                        "surface-container-high": "var(--surface-container-high)",
                        "surface-container-lowest": "var(--surface-container-lowest)",
                        "surface-alt": "var(--surface-alt)",
                        "secondary-container": "var(--secondary-container)"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "section-padding-lg": "80px",
                        "gutter": "24px",
                        "base": "8px",
                        "section-padding-sm": "40px",
                        "margin-mobile": "16px",
                        "container-max": "1200px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter", "sans-serif"],
                        "headline-md": ["Metropolis", "sans-serif"],
                        "label-caps": ["JetBrains Mono", "monospace"],
                        "display-lg": ["Metropolis", "sans-serif"],
                        "stats-number": ["Metropolis", "sans-serif"],
                        "headline-sm": ["Metropolis", "sans-serif"],
                        "body-lg": ["Inter", "sans-serif"]
                    },
                    "fontSize": {
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "headline-md": ["30px", { "lineHeight": "38px", "fontWeight": "600" }],
                        "label-caps": ["12px", { "lineHeight": "16px", "letterSpacing": "0.08em", "fontWeight": "500" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "stats-number": ["40px", { "lineHeight": "48px", "fontWeight": "700" }],
                        "headline-sm": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
    <style>
        :root {
            --background: #f1f8f7;
            --on-background: #181c1c;
            --primary: #004d4b;
            --on-primary: #ffffff;
            --secondary: #296487;
            --surface: #f1f8f7;
            --on-surface: #181c1c;
            --surface-variant: #dbe4e3;
            --on-surface-variant: #3e4948;
            --outline: #6f7978;
            --border-muted: #d9e5e4;
            --surface-container-highest: #dbe4e3;
            --surface-container-high: #e1ebea;
            --surface-container-lowest: #f1f8f7;
            --surface-alt: #e8f2f1;
            --secondary-container: #9fd5fd;
        }

        .dark {
            --background: #0a0f0f;
            --on-background: #eef1f0;
            --primary: #6bd7d4;
            --on-primary: #003735;
            --secondary: #96cdf5;
            --surface: #181c1c;
            --on-surface: #eef1f0;
            --surface-variant: #3e4948;
            --on-surface-variant: #bec9c7;
            --outline: #899392;
            --border-muted: #2d3131;
            --surface-container-highest: #333837;
            --surface-container-high: #282c2c;
            --surface-container-lowest: #0a0f0f;
            --surface-alt: #131818;
            --secondary-container: #004c6d;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .bg-blueprint-line {
            background-image: radial-gradient(circle, currentColor 1px, transparent 1px);
            background-size: 24px 24px;
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.2, 1, 0.3, 1);
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-slide {
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }

        .hero-slide.active {
            opacity: 1;
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media (max-width: 1024px) {
            .parallax-bg {
                background-attachment: scroll;
            }
        }

        .product-card:hover {
            box-shadow: 0 0 20px rgba(0, 77, 75, 0.15);
        }

        .dark .product-card:hover {
            box-shadow: 0 0 20px rgba(107, 215, 212, 0.1);
        }

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
    <link rel="stylesheet" href="brand-theme.css">
</head>

<body class="bg-background text-on-surface font-body-md antialiased scroll-smooth transition-colors duration-300">
    <header
        class="fixed top-0 w-full z-50 bg-background dark:bg-on-primary-fixed border-b border-outline/20 shadow-md transition-colors duration-300">
        <nav class="flex justify-between items-center h-20 px-4 md:px-8 max-w-[1200px] mx-auto">
            <div class="flex items-center gap-4">
                <a href="home.php">
                    <div class="p-1 dark:p-1 inline-block">
                        <img alt="Amtech Power"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoDW-zwbnXHilUeQqANCSsChtF09kHW-C2mr7C3Q5pzkpY5aFOgZnYflzqMRVa51sQ-aQ0NeNzZKcRvvMty37OUoG2Ydp9OfNIBH0B2bImFlIWr-OXklcJHL9XztUYtirttpFrY31RU6ftjBwgDfPYbZFprdHUqJQpbhcF6t2J6BWrit86vATS1vjUh7biROuasV5Ji2oMfv8PumrzacFoaUXK_mchdFFj5Qzzh0kLpFgrLgMSTqwGmhsvb40H3_Fn-fZcq1TJqh0">
                    </div>
                </a>
            </div>
            <div class="hidden lg:flex items-center gap-6 xl:gap-8">
                <a class="text-primary dark:text-white border-b-2 border-primary pb-1 font-bold font-label-md text-sm transition-colors"
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
    <!-- Mobile Menu Overlay -->
    <div class="fixed inset-0 z-[60] bg-background lg:hidden" id="mobile-menu">
        <div class="flex justify-between items-center h-20 px-4 border-b border-outline/20">
            <a href="../Amtech_Power_Redesign/home.php"><div class=" p-1 dark: p-1  inline-block"><img alt="Amtech Power" 
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoDW-zwbnXHilUeQqANCSsChtF09kHW-C2mr7C3Q5pzkpY5aFOgZnYflzqMRVa51sQ-aQ0NeNzZKcRvvMty37OUoG2Ydp9OfNIBH0B2bImFlIWr-OXklcJHL9XztUYtirttpFrY31RU6ftjBwgDfPYbZFprdHUqJQpbhcF6t2J6BWrit86vATS1vjUh7biROuasV5Ji2oMfv8PumrzacFoaUXK_mchdFFj5Qzzh0kLpFgrLgMSTqwGmhsvb40H3_Fn-fZcq1TJqh0"></div></a>
            <button class="p-2 text-on-surface dark:text-white" id="menu-close">
                <span class="material-symbols-outlined text-3xl">close</span>
            </button>
        </div>
        <div class="flex flex-col p-8 gap-6 text-xl">
            <a class="text-primary font-bold" href="home.php">Home</a>
            <a class="text-on-surface-variant" href="../Amtech_Power_Redesign/about_us.php">About
                Us</a>
            <a class="text-on-surface-variant"
                href="../Amtech_Power_Redesign/products.php">Products</a>
            <a class="text-on-surface-variant"
                href="../Amtech_Power_Redesign/services.php">Service</a>
            <a class="text-on-surface-variant"
                href="../Amtech_Power_Redesign/customers.php">Customers</a>
            <a class="text-on-surface-variant"
                href="../Amtech_Power_Redesign/sitemap.php">Site Map</a>
            <div class="pt-8">
                <a class="base w-full block text-center border-2 border-primary text-primary px-8 py-2 rounded-lg font-bold uppercase text-xs md:text-label-caps hover:bg-primary hover:text-on-primary transition-all duration-300 active:scale-95 shadow-md"
                    href="../Amtech_Power_Redesign/contact_us.php">Contact Us</a>
                <a class="block w-full bg-primary text-on-primary px-6 py-4 rounded-lg font-bold uppercase text-label-caps shadow-lg text-center"
                    href="../Amtech_Power_Redesign/rfq.php">Request Quote</a>
            </div>
        </div>
    </div>
    <main>
        <!-- Hero Section -->
        <section
            class="relative h-screen min-h-[600px] overflow-hidden flex items-center bg-surface-alt transition-colors duration-300">
            <div class="absolute inset-0 z-0">
                <div class="hero-slide absolute inset-0 bg-cover bg-center parallax-bg"
                    style="background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuB6fKYLTmzRBCTW3AKUb9gNCjin6ON3Afl3MVCL8Qpp9Z1CITvF2FxVLzhW-8pd5Gt8ekJe-0IXlbcbIP-H2S0UIsu0juKwHgo-u6WFevAiYZKIRLeqUqc7J3Ma-I18mBrN1Toh3J9RNMrWXeHik_u4LJvjQD99q7-h62LFnAKZUOvgR1dyObfECdSypMEKOyokThey6mrbgv2aX5vWeFrwHIe9_rAveFd5KQLLE9vsz-F6_QA_iihTYU7YOhbybrb08gFZ2ZO7bw4&quot;);">
                </div>
                <div class="hero-slide absolute inset-0 bg-cover bg-center parallax-bg"
                    style="background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuDdIXH0hHaeqHNegJCEmxaLLBAm4dG7Rlbzx_SK0XH__3fbKQKcobaAnQZXGHl2AUdwSd3A3jelLMCy6X8HT_xQPGIWTfSqMjCszsBurg_eZTyghdMugz7GlVtxBrS-5NRvcykIBLnHPmZu5bqLGnC9-fyrywT-s49mqM84xYDX88d8GuiA0x2Jfi7XGq6gXX8yu62rXWwyFVnw4KSASd41AtmH2-0tXEri5rzZcl55MI8EsEsPbbPJ6470feDUl1FTLJ7XMmylKe0&quot;);">
                </div>
                <div class="hero-slide absolute inset-0 bg-cover bg-center parallax-bg active"
                    style="background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuD5nIMyI72r2JMRlGKnjnIClfuABHtHzPrzF0uSs8NlIxVmCGVu12IWajqo7PYyRTsB4ZGuoTosoPegbGex6gnuVIAmrrhgooF_xrqmdL7WHFO2KSBeccpgW91HoU9U8PEiJpdYpE1gkdUvEkZLMqfCtmED9hEEow3b1czvhb8QANXehGA13uJzIxH42RMk5GfZ1qxdIkLQs2zEKw5knpDgASaciHmWGBQaH8g-ZvixUpaPkgET3X1zPNHhFmrkXv9wwHdGk8E5FNQeeA&quot;);">
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-r from-background via-background/70 to-transparent transition-colors duration-300">
                </div>
            </div>
            <div class="max-w-[1200px] mx-auto px-4 sm:px-8 relative z-10 w-full reveal visible">
                <div class="max-w-3xl">
                    <span
                        class="inline-block px-3 py-1 bg-primary text-on-primary text-[10px] md:text-label-caps mb-6 rounded-sm">INDUSTRIAL
                        EXCELLENCE</span>
                    <h1
                        class="font-display-lg text-3xl sm:text-4xl md:text-display-lg text-primary mb-6 tracking-tighter uppercase leading-tight">
                        EVER WONDERED, WHO SIMPLIFIES YOUR POWER GENERATION?
                    </h1>
                    <p
                        class="font-body-lg text-base md:text-body-lg text-on-surface-variant mb-10 leading-relaxed max-w-2xl">
                        Amtech Power Limited provides high quality <strong class="text-primary font-semibold">POWER
                            GENERATION CONTROL AND PROTECTION</strong> solutions to a gamut of renowned organizations
                        across the Globe.
                    </p>
                    <div class="flex flex-col sm:flex-row flex-wrap gap-4">
                        <button  onclick="document.getElementById('solutions').scrollIntoView({behavior:'smooth'})"
                            class="bg-primary text-on-primary px-8 py-4 rounded-lg font-bold uppercase text-label-caps flex items-center justify-center gap-2 group transition-all duration-300 hover:brightness-110 shadow-xl active:scale-95">
                            Explore Solutions
                            <span
                                class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </button>
                        <button  onclick="window.location.href='../Amtech_Power_Redesign/rfq.php'"
                            class="bg-background/80 backdrop-blur-sm border border-outline px-8 py-4 rounded-lg font-bold uppercase text-label-caps hover:bg-background hover:border-primary transition-all duration-300 active:scale-95 text-on-background">Request
                            Quote</button>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex gap-3 z-20">
                <button class="w-8 md:w-12 h-1 rounded-full transition-all slider-dot bg-outline/30"
                    onclick="setSlide(0)"></button>
                <button class="w-8 md:w-12 h-1 rounded-full transition-all slider-dot bg-outline/30"
                    onclick="setSlide(1)"></button>
                <button class="w-8 md:w-12 h-1 rounded-full transition-all slider-dot active bg-primary"
                    onclick="setSlide(2)"></button>
            </div>
        </section>
        <!-- Stats Section -->
        <section
            class="py-12 md:py-section-padding-lg bg-surface-container-lowest border-y border-border-muted overflow-hidden relative transition-colors duration-300">
            <div class="max-w-[1200px] mx-auto px-4 md:px-8 grid md:grid-cols-2 gap-12 md:gap-16 items-center">
                <div class="reveal visible">
                    <h2 class="font-headline-md text-2xl md:text-headline-md text-primary mb-6">Your Trusted Partner in
                        Excitation Systems</h2>
                    <p class="font-body-md text-on-surface-variant mb-8 leading-relaxed">
                        With decades of engineering prowess, Amtech Power has established a global footprint, delivering
                        mission-critical excitation systems that ensure the reliability of national grids. Our
                        commitment to precision engineering makes us the preferred choice for major power producers
                        worldwide.
                    </p>
                    <div class="grid grid-cols-2 gap-4 md:gap-8">
                        <div>
                            <div class="font-stats-number text-3xl md:text-stats-number text-secondary mb-1">500+</div>
                            <div class="font-label-caps text-[10px] md:text-label-caps text-on-surface-variant">
                                INSTALLATIONS GLOBALLY</div>
                        </div>
                        <div>
                            <div class="font-stats-number text-3xl md:text-stats-number text-secondary mb-1">99.9%</div>
                            <div class="font-label-caps text-[10px] md:text-label-caps text-on-surface-variant">SYSTEM
                                UPTIME</div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 reveal visible" style="transition-delay: 200ms;">
                    <div
                        class="aspect-square bg-surface-container-high rounded-lg overflow-hidden border border-border-muted group cursor-pointer transition-colors duration-300">
                        <img alt="System Detail"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKy0-DtNfnXSlH1FtudVNaOftAAWsgIsOPfl3IHwydbTIdr5a2bpls4b6dNeP5AhIviUWb4jPM60r6tk4cQdFeqjHQU2Dpu9O35aMohoYSl3rg52A55e-dXTHFYv7H61bp1nJODkAB_pJugy-Q29UGFHBBBB-l0Drvca4lt4cdAJsWh4B4yemaK2CPdKKnisdHCqWMWp0TkHa306Z2d3HrHZSmgZoDykxsx4yZOXcDjB2DwD2CJOWx3G3YWCkSGX1TUV-vfwcUwP8eeg">
                    </div>
                    <div
                        class="aspect-square bg-surface-container-high rounded-lg overflow-hidden border border-border-muted mt-8 md:mt-12 group cursor-pointer transition-colors duration-300">
                        <img alt="Global Reach"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPJwJATMR43tViyCUHzG888Gf3uY5CjX5demg-VPbXXQVRRhoH8SkUr2Vi9BsqriWdRHgaJ5lptqiodkRso4n16tBr8HMS7OCs1xCqNlA603hlKefgZ9h24927jAJRVNAX3AL1_ooASQ3awOpubb3k9E8ZiJr9wcno9b7UvdHzT9wGMEj14b02J-Iw4LNGudxstqsDOLumwiGoINUe28ct2qAJWl7A-u00Pd3XbM3pPEIEd2_0huyfb26OerjxCEINFwZFSywHzXy8Ig">
                    </div>
                </div>
            </div>
        </section>
        <!-- Products Bento Grid -->
        <section id="solutions"
            class="py-16 md:py-section-padding-lg bg-background relative overflow-hidden transition-colors duration-300">
            <div class="max-w-[1200px] mx-auto px-4 md:px-8 relative z-10">
                <div class="text-center mb-12 md:mb-16 reveal visible">
                    <span class="font-label-caps text-secondary uppercase tracking-widest text-xs">Our Portfolio</span>
                    <h2 class="font-headline-md text-2xl md:text-headline-md text-primary mt-4">Precision Engineering
                        Solutions</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-6">
                    <!-- Analog AVR -->
                    <div
                        class="reveal md:col-span-3 lg:col-span-4 product-card bg-surface-container-lowest border border-border-muted p-6 md:p-8 flex flex-col hover:border-primary transition-all duration-500 group visible">
                        <div class="mb-6 text-primary transition-transform duration-300 group-hover:-translate-y-1">
                            <span class="material-symbols-outlined text-4xl">settings_input_component</span>
                        </div>
                        <h3 class="font-headline-sm text-xl md:text-headline-sm text-on-surface mb-4">Analog Automatic
                            Voltage Regulator</h3>
                        <p class="font-body-md text-on-surface-variant mb-8 text-sm md:text-base">Optimized voltage
                            control through proven analog technology.</p>
                        <div class="mt-auto">
                            <button onclick="window.location.href='../Amtech_Power_Redesign/products.php'"
                                class="mb-6 w-full py-3 px-4 border border-outline text-primary font-bold uppercase text-label-caps hover:bg-primary hover:text-on-primary hover:border-primary transition-all duration-300">View
                                Specifications</button>
                            <div class="pt-4 border-t border-border-muted">
                                <ul class="space-y-2">
                                    <li
                                        class="font-label-caps text-[10px] md:text-label-caps flex items-center gap-2 text-on-surface">
                                        <span class="w-2 h-2 rounded-full bg-primary opacity-60"></span> AVC63-12 SERIES
                                    </li>
                                    <li
                                        class="font-label-caps text-[10px] md:text-label-caps flex items-center gap-2 text-on-surface">
                                        <span class="w-2 h-2 rounded-full bg-primary opacity-60"></span> AVC125-10
                                        PERFORMANCE
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Digital Excitation -->
                    <div class="reveal md:col-span-3 lg:col-span-8 bg-primary text-on-primary p-6 md:p-8 relative overflow-hidden group product-card transition-all duration-500 visible"
                        style="transition-delay: 100ms;">
                        <div class="relative z-10">
                            <h3 class="font-headline-sm text-xl md:text-headline-sm mb-4">Digital Excitation &amp;
                                Control System</h3>
                            <p class="max-w-md opacity-90 mb-8 text-sm md:text-base">Next-generation
                                microprocessor-based power management designed for high-availability environments and
                                seamless digital integration.</p>
                            <button onclick="window.location.href='../Amtech_Power_Redesign/products.php'"
                                class="bg-background text-primary px-8 py-3 rounded-lg font-bold uppercase text-label-caps hover:brightness-95 transition-all duration-300 shadow-lg active:scale-95">View
                                Details</button>
                        </div>
                        <div
                            class="absolute right-0 bottom-0 w-1/2 h-full opacity-20 pointer-events-none transform group-hover:scale-110 transition-transform duration-1000">
                            <img alt="Digital Circuit" class="w-full h-full object-cover dark:invert"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCe1K3ZZsd6fMF_60afpbkXU65QZvaS7CB5dCcvlKt-SYl8U-AWeFMPcfWbwr_eJdgBC6e6IQPx6C9SbahVQv_JfiwwsF8aNTUFQ4sBAMjoEEMb2I4Tjg2F9KCnCiONa9jDpYyjYSxmbcLDKIm6_WJX6QdvlYMzF3RYewrpY06C_wxy9p-616qwxTcqW6oc7UgodkAme7J9PKH8p_Y45Uh6dInf3obCrEqoCHmxEMDb6eYpcnthgDms7jsO5Y7a4ShaxPPamHDY2b0">
                        </div>
                    </div>
                    <!-- Synchronous Machine Protection -->
                    <div class="reveal md:col-span-6 lg:col-span-7 product-card bg-surface-container-lowest border border-border-muted p-6 md:p-8 hover:border-primary transition-all duration-500 flex flex-col sm:flex-row gap-8 group visible"
                        style="transition-delay: 200ms;">
                        <div class="sm:w-1/2">
                            <h3 class="font-headline-sm text-xl md:text-headline-sm text-on-surface mb-4">Synchronous
                                Machine Protection</h3>
                            <p class="font-body-md text-sm md:text-body-md text-on-surface-variant mb-6">Custom
                                protection suites for generators, turbines, and transformers. Ensuring the safety of
                                your most valuable assets.</p>
                            <ul class="space-y-2 mb-8">
                                <li
                                    class="flex items-center gap-2 font-label-caps text-[10px] md:text-label-caps text-primary">
                                    <span class="material-symbols-outlined text-sm">check_circle</span> REAL-TIME
                                    MONITORING
                                </li>
                                <li
                                    class="flex items-center gap-2 font-label-caps text-[10px] md:text-label-caps text-primary">
                                    <span class="material-symbols-outlined text-sm">check_circle</span> CUSTOM CONTROL
                                    LOGIC
                                </li>
                            </ul>
                            <button onclick="window.location.href='../Amtech_Power_Redesign/products.php'"
                                class="w-full py-3 px-8 border border-primary text-primary font-bold uppercase text-label-caps hover:bg-primary hover:text-on-primary transition-all duration-300">View
                                Specifications</button>
                        </div>
                        <div
                            class="sm:w-1/2 h-48 sm:h-full bg-surface-alt rounded overflow-hidden transition-colors duration-300">
                            <img alt="Turbine"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPBNYbrx3L7tVCmiP8fhteDWMRaWinKWLgW9-bFW5Mm6VIzz2zl-zyc4p2YyoOhl0tdjc0hwt2_UMJAkZKVPlt2p_HDAYTkOqnUZ1iEEbzZhgsjuQP9Sq_Tydnp4vFOBh7VSv8EA5pjXlFp3wSZzfHTOSzSIfzqilDlSUmzneAj2WaLBcE6m2RDx0LnyJpGRqGsp2ALr3yV91jBjQmxK8CvoM5n94VGv_iVEQtfO5k4uLaEP_gn7Vp4xrk8mMWmEGYmsyfBc0Nuk3t6Q">
                        </div>
                    </div>
                    <!-- Power Plant Automation -->
                    <div class="reveal md:col-span-3 lg:col-span-5 product-card bg-surface-alt p-6 md:p-8 border border-border-muted flex flex-col justify-between hover:border-primary transition-all duration-500 group visible"
                        style="transition-delay: 300ms;">
                        <div>
                            <span
                                class="material-symbols-outlined text-secondary text-4xl mb-4 transition-transform duration-300 group-hover:rotate-12">analytics</span>
                            <h3 class="font-headline-sm text-xl md:text-headline-sm text-on-surface mb-2">Power Plant
                                Automation</h3>
                            <p class="font-body-md text-sm md:text-body-md text-on-surface-variant mb-6">Comprehensive
                                DCS solutions for complete plant operation and data visualization.</p>
                            <button onclick="window.location.href='../Amtech_Power_Redesign/products.php'"
                                class="text-primary font-bold uppercase text-label-caps flex items-center gap-2 group/btn">
                                Learn More <span
                                    class="material-symbols-outlined transition-transform group-hover/btn:translate-x-1">arrow_forward</span>
                            </button>
                        </div>
                        <div class="mt-8 flex justify-end">
                            <span
                                class="material-symbols-outlined text-primary/30 text-6xl md:text-8xl group-hover:text-primary/50 transition-colors">precision_manufacturing</span>
                        </div>
                    </div>
                    <!-- Customized & Retrofit -->
                    <div class="reveal md:col-span-3 lg:col-span-12 product-card bg-surface-container-lowest border border-border-muted p-6 md:p-8 flex flex-col lg:flex-row lg:items-center gap-8 hover:border-primary transition-all duration-500 group visible"
                        style="transition-delay: 400ms;">
                        <div class="bg-primary/5 p-6 rounded-lg transition-colors group-hover:bg-primary/10 shrink-0">
                            <span
                                class="material-symbols-outlined text-4xl md:text-5xl text-primary">construction</span>
                        </div>
                        <div class="flex-1 text-center lg:text-left">
                            <h3 class="font-headline-sm text-xl md:text-headline-sm text-on-surface mb-2">Customized
                                &amp; Retrofit Solutions</h3>
                            <p class="font-body-md text-sm md:text-body-md text-on-surface-variant">Expertise in
                                space-constraint environments with mounting flexibility for aging infrastructure
                                modernization.</p>
                        </div>
                        <button onclick="window.location.href='../Amtech_Power_Redesign/products.php'"
                            class="w-full lg:w-auto border-2 border-primary text-primary px-8 py-4 font-bold uppercase text-label-caps hover:bg-primary hover:text-on-primary transition-all duration-300 active:scale-95 whitespace-nowrap">LEARN
                            MORE</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Parallax Section -->
        <section class="relative py-20 md:py-32 overflow-hidden parallax-bg transition-colors duration-300"
            style="background-image: url(&quot;../Amtech_Power_Redesign/assets/Image_1.png&quot;); background-blend-mode: multiply; background-color: rgba(116, 155, 155, 0.85);">
            <div class="max-w-[1200px] mx-auto px-4 md:px-8 relative z-10 text-center reveal visible">
                <h2 class="font-headline-md text-2xl md:text-headline-md mb-6 uppercase tracking-tight text-white">
                    Engineered for Global Resilience</h2>
                <p class="max-w-2xl mx-auto font-body-lg text-base md:text-body-lg opacity-90 mb-10 text-white">
                    From remote industrial plants to national grids, we provide the control systems that keep the lights
                    on and the engines running efficiently.
                </p>
                <div class="flex justify-center gap-6">
                    <button onclick="window.location.href='../Amtech_Power_Redesign/contact_us.php'"
                        class="border border-white/40 text-white px-8 py-3 rounded-lg font-bold uppercase text-label-caps hover:bg-white/10 transition-all duration-300">Contact
                        Us</button>
                </div>
            </div>
        </section>
    </main>
    <?php include '../Amtech_Power_Redesign/includes/footer.php'; ?>
    <script>
        // Theme Management Logic
        const themeToggleBtn = document.getElementById('theme-toggle');

        function toggleTheme() {
            const isDark = document.documentElement.classList.contains('dark');
            const newTheme = isDark ? 'light' : 'dark';

            document.documentElement.className = newTheme;
            localStorage.setItem('theme', newTheme);
        }

        themeToggleBtn.addEventListener('click', toggleTheme);

        // Mobile Menu Logic
        const menuToggle = document.getElementById('menu-toggle');
        const menuClose = document.getElementById('menu-close');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.add('open');
            document.body.style.overflow = 'hidden';
        });

        menuClose.addEventListener('click', () => {
            mobileMenu.classList.remove('open');
            document.body.style.overflow = '';
        });

        // Hero Slider Logic
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.slider-dot');

        function setSlide(index) {
            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('active', 'bg-primary');
            dots[currentSlide].classList.add('bg-outline/30');

            currentSlide = index;

            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active', 'bg-primary');
            dots[currentSlide].classList.remove('bg-outline/30');
        }

        function autoSlide() {
            let next = (currentSlide + 1) % slides.length;
            setSlide(next);
        }

        let slideInterval = setInterval(autoSlide, 5000);

        // Scroll Reveal Intersection Observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>




</body>

</html>