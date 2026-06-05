<!-- Footer -->
<style>
    .dark {
        --surface: #101c23;
        --surface-bright: #18262d;
        --surface-dim: #0d171d;
        --surface-alt: #112129;
        --surface-container: #132128;
        --surface-container-low: #0f1a20;
        --surface-container-lowest: #07161d;
        --surface-container-high: #18262d;
        --surface-container-highest: #1e2b31;
        --surface-variant: #20343c;
        --on-surface: #eef7f5;
        --on-surface-variant: #b2c7c1;
        --inverse-surface: #eaf7f4;
        --inverse-on-surface: #0b1720;
        --outline: #6e8b95;
        --outline-variant: #35515b;
        --border-muted: #24404a;
    }

    /* LIGHT MODE (default) */
    footer {
        background: linear-gradient(135deg, var(--surface-container-low), var(--surface-alt));
        color: var(--on-surface);
        transition: all 0.3s ease;
    }

    footer h4 {
        color: var(--on-surface);
    }

    footer a,
    footer p {
        color: var(--on-surface-variant);
    }

    footer a:hover {
        color: var(--primary);
    }

    /* DARK MODE */
    .dark footer {
        background: linear-gradient(135deg, var(--surface), var(--surface-container));
        color: var(--on-surface);
    }

    .dark footer h4 {
        color: var(--on-surface);
    }

    .dark footer a,
    .dark footer p {
        color: var(--on-surface-variant);
    }

    .dark footer a:hover {
        color: var(--inverse-primary);
    }
</style>

 

<footer class="relative overflow-hidden transition-colors duration-300">
    <div class="absolute inset-0 bg-blueprint-line opacity-10 pointer-events-none"></div>

    <div class="max-w-[1200px] mx-auto px-4 md:px-8 py-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-12 relative z-10">

        <!-- Logo + Tagline -->
        <div class="col-span-1">
            <img alt="Amtech Power"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoDW-zwbnXHilUeQqANCSsChtF09kHW-C2mr7C3Q5pzkpY5aFOgZnYflzqMRVa51sQ-aQ0NeNzZKcRvvMty37OUoG2Ydp9OfNIBH0B2bImFlIWr-OXklcJHL9XztUYtirttpFrY31RU6ftjBwgDfPYbZFprdHUqJQpbhcF6t2J6BWrit86vATS1vjUh7biROuasV5Ji2oMfv8PumrzacFoaUXK_mchdFFj5Qzzh0kLpFgrLgMSTqwGmhsvb40H3_Fn-fZcq1TJqh0">

            <p class="text-sm text-gray-700 mt-4">
                Efficiency-as-a-Service for the global power sector.
            </p>
        </div>

        <!-- Solutions -->
            color: var(--inverse-primary);
            <h4 class="text-xs mb-6 font-bold tracking-widest uppercase text-gray-800">SOLUTIONS</h4>
            <ul class="space-y-4">
                <li><a class="text-sm text-gray-600 hover:text-[#06ba95] transition-all hover:translate-x-1"
                        href="../Amtech_Power_Redesign/products.html">Voltage Regulators</a></li>

                <li><a class="text-sm text-gray-600 hover:text-[#06ba95] transition-all hover:translate-x-1"
                        href="../Amtech_Power_Redesign/products.html">Protection Systems</a></li>

                <li><a class="text-sm text-gray-600 hover:text-[#06ba95] transition-all hover:translate-x-1"
                        href="../Amtech_Power_Redesign/products.html">Retrofit Services</a></li>
            </ul>
        </div>

        <!-- Resources -->
        <div>
            <h4 class="text-xs mb-6 font-bold tracking-widest uppercase text-gray-800">RESOURCES</h4>
            <ul class="space-y-4">
                <li><a class="text-sm text-gray-600 hover:text-[#06ba95] transition-all"
                        href="https://www.linkedin.com/company/amtech-electronics-india-ltd/posts/?feedView=all">LinkedIn</a></li>

                <li><a class="text-sm text-gray-600 hover:text-[#06ba95] transition-all"
                        href="https://x.com/amtech_aeil">Twitter</a></li>

                <li><a class="text-sm text-gray-600 hover:text-[#06ba95] transition-all"
                        href="https://www.facebook.com/AmtechElectronicsIndiaLtd">Facebook</a></li>

                <li><a class="text-sm text-gray-600 hover:text-[#06ba95] transition-all"
                        href="../Amtech_Power_Redesign/sitemap.html">Site Map</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="text-xs mb-6 font-bold tracking-widest uppercase text-gray-800">CONTACT</h4>

            <p class="text-sm text-gray-600 mb-4">
                B-9 GIDC Electronics Zone,<br>
                Gandhinagar, Gujarat - 382028
            </p>

            <div class="space-y-1">
                <p class="text-sm text-gray-600">Phone: 079-23289116-117</p>
                <p class="text-sm text-gray-600">Fax: 079-23289110-111</p>

                <p class="text-sm text-gray-600">
                    Email:
                    <a class="hover:text-[#06ba95] transition-colors"
                        href="mailto:info@amtechpower.in">
                        info@amtechpower.in
                    </a>
                </p>
            </div>
        </div>

    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-200 py-8 relative z-10">
        <div class="max-w-[1200px] mx-auto px-4 md:px-8 text-center md:text-left">
            <p class="text-xs text-gray-500">
                © Copyright 2026, Amtech Power Ltd.
            </p>
        </div>
    </div>
</footer>