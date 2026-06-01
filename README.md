<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGUARD Professional Pest Control Services | Lusaka, Zambia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        navy: {
                            DEFAULT: '#0F172A',
                            light: '#1E293B',
                        },
                        teal: {
                            dark: '#0F766E',
                            DEFAULT: '#14B8A6',
                            light: '#CCFBF1',
                        },
                        pest: {
                            green: '#10B981',
                            orange: '#F97316',
                            'orange-hover': '#EA580C',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        .font-display { font-family: 'Outfit', sans-serif; }
        .font-mono { font-family: 'JetBrains Mono', sans-serif; }
    </style>
</head>
<body class="bg-white text-slate-800 selection:bg-teal-light selection:text-teal-dark antialiased overflow-x-hidden">

    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-100 transition-all duration-300 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="#home" class="flex items-center gap-2 shrink-0">
                    <img src="https://i.postimg.cc/66LgzLtb/IMG-20260522-WA0005.jpg" alt="PROGUARD Logo" class="h-14 w-auto rounded-lg object-contain">
                    <div class="hidden sm:block text-left">
                        <span class="block font-display font-extrabold text-sm tracking-tight text-navy leading-none">PROGUARD</span>
                        <span class="text-[10px] text-slate-400 font-medium tracking-widest uppercase">Pest Management</span>
                    </div>
                </a>

                <div class="hidden lg:flex items-center gap-6">
                    <a href="#home" class="font-sans font-semibold text-xs text-slate-600 hover:text-teal transition-colors">Home</a>
                    <a href="#about" class="font-sans font-semibold text-xs text-slate-600 hover:text-teal transition-colors">About</a>
                    <a href="#services" class="font-sans font-semibold text-xs text-slate-600 hover:text-teal transition-colors">Services</a>
                    <a href="#industries" class="font-sans font-semibold text-xs text-slate-600 hover:text-teal transition-colors">Industries</a>
                    <a href="#process" class="font-sans font-semibold text-xs text-slate-600 hover:text-teal transition-colors">Our Process</a>
                    <a href="#gallery" class="font-sans font-semibold text-xs text-slate-600 hover:text-teal transition-colors">Before/After</a>
                    <a href="#testimonials" class="font-sans font-semibold text-xs text-slate-600 hover:text-teal transition-colors">Reviews</a>
                    <a href="#faqs" class="font-sans font-semibold text-xs text-slate-600 hover:text-teal transition-colors">FAQs</a>
                </div>

                <div class="hidden lg:flex items-center gap-4">
                    <a href="tel:0768470921" class="text-xs font-mono font-bold text-navy flex items-center gap-1.5 hover:text-teal transition-colors">
                        <svg class="w-3.5 h-3.5 text-pest-orange" fill="currentColor" viewBox="0 0 24 24"><path d="M21.386 16.085l-4.14-1.186a1.144 1.144 0 00-1.196.401l-1.834 2.242c-3.153-1.631-5.74-4.218-7.371-7.371l2.242-1.834a1.14 1.14 0 00.401-1.196l-1.186-4.14A1.149 1.149 0 007.165 2H3.149A1.15 1.15 0 002 3.15c0 10.41 8.44 18.85 18.85 18.85a1.15 1.15 0 001.15-1.149v-4.016a1.146 1.146 0 00-1.614-1.05z"/></svg>
                        0768470921
                    </a>
                    <a href="#contact" class="bg-pest-orange hover:bg-pest-orange-hover text-white px-4 py-2.5 rounded-lg font-display font-bold text-xs uppercase tracking-wider transition-all shadow-md hover:shadow-lg">
                        Get Free Quote
                    </a>
                </div>

                <button onclick="toggleMobileMenu()" class="lg:hidden p-2 text-slate-700 hover:text-teal focus:outline-none" aria-label="Toggle Menu">
                    <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>

        <div id="mobileMenu" class="hidden lg:hidden bg-white border-t border-slate-100 px-4 pt-2 pb-6 space-y-1 shadow-inner">
            <a href="#home" onclick="toggleMobileMenu()" class="block px-3 py-2 rounded-md font-sans font-semibold text-slate-700 hover:bg-slate-50 hover:text-teal">Home</a>
            <a href="#about" onclick="toggleMobileMenu()" class="block px-3 py-2 rounded-md font-sans font-semibold text-slate-700 hover:bg-slate-50 hover:text-teal">About</a>
            <a href="#services" onclick="toggleMobileMenu()" class="block px-3 py-2 rounded-md font-sans font-semibold text-slate-700 hover:bg-slate-50 hover:text-teal">Services</a>
            <a href="#industries" onclick="toggleMobileMenu()" class="block px-3 py-2 rounded-md font-sans font-semibold text-slate-700 hover:bg-slate-50 hover:text-teal">Industries</a>
            <a href="#process" onclick="toggleMobileMenu()" class="block px-3 py-2 rounded-md font-sans font-semibold text-slate-700 hover:bg-slate-50 hover:text-teal">Our Process</a>
            <a href="#gallery" onclick="toggleMobileMenu()" class="block px-3 py-2 rounded-md font-sans font-semibold text-slate-700 hover:bg-slate-50 hover:text-teal">Before/After</a>
            <a href="#contact" onclick="toggleMobileMenu()" class="block text-center bg-pest-orange text-white py-3 rounded-lg font-display font-bold text-xs uppercase tracking-wider mt-4">Request Instant Inspection</a>
        </div>
    </nav>

    <div id="emergency-banner" class="bg-[#EA580C] text-white py-2.5 px-4 mt-20 relative z-40 shadow-md">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-2 text-center">
            <div class="flex items-center gap-2 justify-center">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-white"></span>
                </span>
                <p class="font-display font-semibold text-xs md:text-sm tracking-wide">
                    URGENT PEST INFESTATION PROTOCOL: <span class="text-amber-200 font-extrabold">SAME-DAY EMERGENCY RESPONSE</span>
                </p>
                <span class="hidden md:inline text-white/40">|</span>
                <p class="text-xs text-white/90 hidden md:inline font-sans">
                    Active breakout? Mobile crew dispatches immediately across Lusaka.
                </p>
            </div>
            <div class="flex items-center gap-4 justify-center">
                <div class="flex items-center gap-1 font-mono text-[11px] text-white/90">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    RESPONSE &lt; 45 MINS
                </div>
                <a href="tel:0768470921" class="bg-white text-[#EA580C] hover:bg-slate-100 font-sans font-extrabold text-xs px-3 py-1 rounded-full shadow-xs transition-transform uppercase scale-100 hover:scale-105 active:scale-95">
                    📞 0768470921
                </a>
            </div>
        </div>
    </div>

    <main class="flex-grow">
        
        <section id="home" class="relative overflow-hidden bg-slate-50 border-b border-slate-100 py-12 lg:py-24">
            <div class="absolute top-0 right-0 w-[50%] h-[100%] bg-sky-500/5 rounded-bl-[200px] pointer-events-none z-0"></div>
            <div class="absolute bottom-10 left-10 w-72 h-72 bg-teal/5 blur-3xl rounded-full pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <div class="lg:col-span-7 space-y-6 text-left">
                        <div class="inline-flex items-center gap-1.5 bg-teal-light text-teal-dark px-3 py-1 rounded-md text-xs font-bold uppercase tracking-wider">
                            🛡️ ZEMA & PUBLIC HEALTH CERTIFIED SPECIALISTS
                        </div>
                        <h1 class="font-display font-extrabold text-4xl sm:text-5xl lg:text-6xl text-navy tracking-tight leading-[1.05]">
                            Eradicate Pests <br>
                            <span class="text-teal-dark">Protect Your Home & Business Today</span>
                        </h1>
                        <p class="font-sans text-base text-slate-600 max-w-xl leading-relaxed">
                            Proguard Professional Pest Control delivers medical-grade sanitation, thermal treatments, and active defense barriers across Lusaka. Eco-friendly, safe for families, pets, and children, with absolute guaranteed eradication.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 font-sans text-xs font-semibold text-slate-700">
                            <div class="flex items-center gap-2">✅ Written Protection Guarantee Warranties</div>
                            <div class="flex items-center gap-2">✅ Safe Odorless Non-Staining Bio-Compounds</div>
                            <div class="flex items-center gap-2">✅ Certified Environmental Health Technicians</div>
                            <div class="flex items-center gap-2">✅ Eco-Friendly Safe Around Kids & Pets</div>
                        </div>

                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-4">
                            <a href="#contact" class="bg-pest-orange hover:bg-pest-orange-hover text-white px-8 py-4 rounded-xl font-display font-bold text-sm uppercase tracking-wider text-center shadow-lg transition-all scale-100 hover:-translate-y-0.5">
                                Calculate Estimation & Book Call
                            </a>
                            <a href="https://wa.me/260975588552?text=Hi%20Proguard,%20I%20need%20an%20urgent%20pest%20control%20inspection." target="_blank" class="bg-[#25D366] text-white px-6 py-4 rounded-xl font-display font-bold text-sm uppercase tracking-wider text-center flex items-center justify-center gap-2 shadow-md hover:bg-[#20ba5a] transition-all">
                                💬 WhatsApp Chat Dispatch
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-5 relative">
                        <div class="absolute inset-0 bg-gradient-to-tr from-teal/20 to-transparent blur-3xl rounded-full transform rotate-12"></div>
                        <div class="relative bg-white p-3 rounded-3xl shadow-2xl border border-slate-150/80">
                            <img src="https://i.postimg.cc/cLNW641N/1780043050956.jpg" alt="Proguard Professional Pest Sprayer Operator" class="w-full h-[450px] object-cover rounded-2xl">
                            
                            <div class="absolute bottom-6 left-6 bg-navy/95 backdrop-blur-md text-white border border-white/10 p-4 rounded-xl flex items-center gap-3 shadow-xl">
                                <div class="bg-teal p-2 rounded-lg text-white font-bold text-lg">⭐</div>
                                <div>
                                    <p class="text-[9px] uppercase tracking-widest text-slate-300 font-semibold mb-0.5">ESTABLISHED BRAND</p>
                                    <p class="font-display font-extrabold text-sm leading-none">YOUR TRUSTED PARTNER</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="about" class="py-20 bg-white border-b border-slate-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    
                    <div class="space-y-6 text-left">
                        <span class="inline-flex items-center gap-1.5 bg-slate-100 text-slate-800 px-3 py-1 rounded-md text-xs font-bold uppercase tracking-wider">
                            👋 MESSAGE FROM CORPORATE EXECUTIVE
                        </span>
                        <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-navy tracking-tight leading-tight">
                            Providing Safety & Hygiene Standards Across Zambia
                        </h2>
                        <div class="font-sans text-sm text-slate-600 space-y-4 leading-relaxed">
                            <p>
                                At Proguard Professional Pest Control, our core mission is to provide the highest standards of hygiene and safety for your homes and businesses. We completely understand that pest issues are not just a nuisance, but an active threat to your corporate compliance, property structures, health, and peace of mind.
                            </p>
                            <p>
                                With years of dedicated operational deployment in Lusaka, our highly trained Environmental Health Technicians use state-of-the-art calibrated technology to target the root harborages of infestations. We don't just clear symptoms; we implement comprehensive protective shields.
                            </p>
                            <p class="font-semibold italic text-teal-dark">
                                "Your health is our utmost priority. We look forward to securing your environment with absolute transparency and unmatched quality."
                            </p>
                        </div>

                        <div class="flex items-center gap-3.5 pt-2">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-teal shadow-md">
                                <img src="https://i.postimg.cc/Gm1R9h3m/1780042972838.jpg" alt="CEO Gift Messa Profile" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-display font-extrabold text-slate-900 tracking-tight text-sm">Gift Messa</p>
                                <p class="font-sans text-xs text-slate-500 font-medium">Chief Executive Officer</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex justify-center">
                        <div class="absolute inset-0 bg-teal/5 blur-2xl rounded-full"></div>
                        <div class="relative bg-slate-50 p-2.5 rounded-2xl shadow-xl border border-slate-200/60 max-w-md transform transition-transform hover:scale-[1.01] duration-300">
                            <img src="https://i.postimg.cc/mZNJVNB6/IMG-20260522-WA0005.jpg" alt="Proguard Pest Control Official Flyer" class="w-full h-auto rounded-xl">
                            <div class="absolute bottom-6 left-6 right-6 bg-navy/90 backdrop-blur-md px-4 py-2.5 rounded-lg border border-white/10 text-center shadow-md">
                                <p class="text-white text-xs font-display font-bold tracking-wide">Kampala / Lusaka Corporate Operations Base</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="services" class="py-20 bg-slate-50 border-b border-slate-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-1.5 bg-teal-light text-teal-dark px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                        🔬 REVOLUTIONARY TREATMENT PROTOCOLS
                    </span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-navy tracking-tight">
                        Targeted Solutions for Every Infestation Type
                    </h2>
                    <p class="font-sans text-xs sm:text-sm text-slate-500 mt-2 max-w-xl mx-auto">
                        We deploy custom-calibrated molecular gel baits, localized residual spraying, and chemical barriers mapped specifically to the lifecycle of individual pests.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <div class="bg-white rounded-2xl p-6 border border-slate-150 shadow-xs hover:shadow-md transition-all flex flex-col justify-between text-left">
                        <div class="space-y-4">
                            <div class="w-10 h-10 rounded-xl bg-orange-100 text-pest-orange flex items-center justify-center font-bold text-lg">🛏️</div>
                            <div>
                                <h3 class="font-display font-bold text-lg text-slate-900">Bedbug Eradication</h3>
                                <span class="inline-block bg-red-100 text-red-700 text-[10px] font-extrabold px-2 py-0.5 rounded-sm uppercase tracking-wide mt-1">SEVERITY: EXTREME</span>
                            </div>
                            <p class="font-sans text-xs text-slate-600 leading-relaxed">
                                Multi-stage deep extraction and professional-grade heat or chemical thermal treatment. Guaranteed immediate relief from nocturnal vector bites.
                            </p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs font-mono text-slate-400">Treatment: Thermal Barrier</span>
                            <button onclick="openServiceModal('bedbugs')" class="text-xs font-display font-bold text-teal-dark hover:text-teal flex items-center gap-1">Learn Protocol ➔</button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-150 shadow-xs hover:shadow-md transition-all flex flex-col justify-between text-left">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-xl overflow-hidden border border-slate-200">
                                <img src="https://i.postimg.cc/RZzmqVCv/1780043322143.jpg" alt="Cockroach Icon Asset" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-display font-bold text-lg text-slate-900">German Cockroaches</h3>
                                <span class="inline-block bg-red-100 text-red-700 text-[10px] font-extrabold px-2 py-0.5 rounded-sm uppercase tracking-wide mt-1">SEVERITY: HIGH</span>
                            </div>
                            <p class="font-sans text-xs text-slate-600 leading-relaxed">
                                Complete extermination of resilient American, Oriental, and German roach strains using bait matrix formulas and targeted micro-encapsulated sprays.
                            </p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs font-mono text-slate-400">Treatment: Fipronil Gel Baiting</span>
                            <button onclick="openServiceModal('cockroaches')" class="text-xs font-display font-bold text-teal-dark hover:text-teal flex items-center gap-1">Learn Protocol ➔</button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-150 shadow-xs hover:shadow-md transition-all flex flex-col justify-between text-left">
                        <div class="space-y-4">
                            <div class="w-10 h-10 rounded-xl bg-teal-100 text-teal flex items-center justify-center font-bold text-lg">🪵</div>
                            <div>
                                <h3 class="font-display font-bold text-lg text-slate-900">Termite Structural Barriers</h3>
                                <span class="inline-block bg-amber-100 text-amber-700 text-[10px] font-extrabold px-2 py-0.5 rounded-sm uppercase tracking-wide mt-1">SEVERITY: STRUCTURAL LOSS</span>
                            </div>
                            <p class="font-sans text-xs text-slate-600 leading-relaxed">
                                Sub-slab drilling perimeter injections and trenching chemical barriers that disrupt and eradicate subterranean termite colonies deep within soil foundations.
                            </p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs font-mono text-slate-400">Treatment: Termiticide Injection</span>
                            <button onclick="openServiceModal('termites')" class="text-xs font-display font-bold text-teal-dark hover:text-teal flex items-center gap-1">Learn Protocol ➔</button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-150 shadow-xs hover:shadow-md transition-all flex flex-col justify-between text-left">
                        <div class="space-y-4">
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-navy flex items-center justify-center font-bold text-lg">🐀</div>
                            <div>
                                <h3 class="font-display font-bold text-lg text-slate-900">Rodent Exclusion & Control</h3>
                                <span class="inline-block bg-yellow-100 text-yellow-700 text-[10px] font-extrabold px-2 py-0.5 rounded-sm uppercase tracking-wide mt-1">SEVERITY: MODERATE</span>
                            </div>
                            <p class="font-sans text-xs text-slate-600 leading-relaxed">
                                Complete removal of rats and mice via physical point exclusion sealing, tracking bait block tunnels, and structural sanitation audits.
                            </p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs font-mono text-slate-400">Treatment: Multi-Point Bait Blocks</span>
                            <button onclick="openServiceModal('rodents')" class="text-xs font-display font-bold text-teal-dark hover:text-teal flex items-center gap-1">Learn Protocol ➔</button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-150 shadow-xs hover:shadow-md transition-all flex flex-col justify-between text-left">
                        <div class="space-y-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-lg">🦟</div>
                            <div>
                                <h3 class="font-display font-bold text-lg text-slate-900">Mosquito Larvicide & Misting</h3>
                                <span class="inline-block bg-red-100 text-red-700 text-[10px] font-extrabold px-2 py-0.5 rounded-sm uppercase tracking-wide mt-1">SEVERITY: HEALTH RISK</span>
                            </div>
                            <p class="font-sans text-xs text-slate-600 leading-relaxed">
                                Elimination of outdoor vectors through spatial fogging, power residual misting on vegetation, and biological larvicide breeding water treatments.
                            </p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs font-mono text-slate-400">Treatment: Pyrethroid Fogging</span>
                            <button onclick="openServiceModal('mosquitoes')" class="text-xs font-display font-bold text-teal-dark hover:text-teal flex items-center gap-1">Learn Protocol ➔</button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-slate-150 shadow-xs hover:shadow-md transition-all flex flex-col justify-between text-left">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-xl overflow-hidden border border-slate-200">
                                <img src="https://i.postimg.cc/vZLsnFDL/1780043041448.jpg" alt="Industrial Sprayer Asset" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-display font-bold text-lg text-slate-900">Corporate Fumigation</h3>
                                <span class="inline-block bg-teal-100 text-teal-800 text-[10px] font-extrabold px-2 py-0.5 rounded-sm uppercase tracking-wide mt-1">SEVERITY: AUDIT REQUIRED</span>
                            </div>
                            <p class="font-sans text-xs text-slate-600 leading-relaxed">
                                Full volumetric structure space gas or deep misting treatments designed strictly for large food warehousing warehouses, silos, and commercial mills.
                            </p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-xs font-mono text-slate-400">Treatment: Volumetric Space Fumigation</span>
                            <button onclick="openServiceModal('fumigation')" class="text-xs font-display font-bold text-teal-dark hover:text-teal flex items-center gap-1">Learn Protocol ➔</button>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <div id="serviceModal" class="fixed inset-0 z-50 bg-navy/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
            <div class="bg-white w-full max-w-xl rounded-2xl shadow-2xl overflow-hidden border border-slate-100 transform transition-all text-left">
                <div class="p-6 border-b border-slate-100 bg-slate-50 flex items-center justify-between">
                    <h3 id="modalTitle" class="font-display font-extrabold text-xl text-navy">Protocol Details</h3>
                    <button onclick="closeServiceModal()" class="text-slate-400 hover:text-slate-600 font-bold text-lg">✕</button>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <span class="block text-xs font-display font-bold uppercase text-slate-400 tracking-wider">Clinical Description</span>
                        <p id="modalDesc" class="font-sans text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed"></p>
                    </div>
                    <div class="p-4 bg-teal-light/20 border border-teal/15 rounded-xl">
                        <span class="block text-xs font-display font-bold uppercase text-teal-dark tracking-wider">Proguard Elimination Protocol Blueprint</span>
                        <p id="modalTreatment" class="font-sans text-xs sm:text-sm text-slate-800 mt-1 leading-relaxed"></p>
                    </div>
                </div>
                <div class="bg-slate-50 px-6 py-4 border-t border-slate-100 flex items-center justify-end gap-3">
                    <button onclick="closeServiceModal()" class="font-sans font-semibold text-slate-500 hover:text-slate-700 text-xs px-4 py-2">Dismiss</button>
                    <a href="#contact" onclick="closeServiceModal()" class="bg-pest-orange hover:bg-pest-orange-hover text-white px-5 py-2.5 rounded-lg text-xs font-display font-bold uppercase tracking-wider">Book This Treatment</a>
                </div>
            </div>
        </div>

        <section id="industries" class="py-20 bg-white border-b border-slate-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-1.5 bg-slate-100 text-slate-800 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                        🏢 ENTERPRISE LANDSCAPE COVERAGE
                    </span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-navy tracking-tight">
                        Regulatory Compliance for Every Sector
                    </h2>
                </div>

                <div class="flex flex-wrap items-center justify-center gap-2 mb-8 border-b border-slate-100 pb-4">
                    <button onclick="switchIndustryTab('residential')" id="btn-residential" class="tab-btn px-4 py-2 rounded-lg text-xs font-display font-bold uppercase tracking-wider transition-all bg-navy text-white">Residential</button>
                    <button onclick="switchIndustryTab('restaurants')" id="btn-restaurants" class="tab-btn px-4 py-2 rounded-lg text-xs font-display font-bold uppercase tracking-wider transition-all bg-slate-100 text-slate-600 hover:bg-slate-200">Food Service</button>
                    <button onclick="switchIndustryTab('warehouses')" id="btn-warehouses" class="tab-btn px-4 py-2 rounded-lg text-xs font-display font-bold uppercase tracking-wider transition-all bg-slate-100 text-slate-600 hover:bg-slate-200">Warehousing</button>
                    <button onclick="switchIndustryTab('hospitality')" id="btn-hospitality" class="tab-btn px-4 py-2 rounded-lg text-xs font-display font-bold uppercase tracking-wider transition-all bg-slate-100 text-slate-600 hover:bg-slate-200">Hospitality</button>
                </div>

                <div id="industryContentFrame" class="bg-slate-50 border border-slate-150 rounded-2xl p-6 sm:p-8 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center text-left">
                    <div class="lg:col-span-7 space-y-4">
                        <h3 id="industryTitle" class="font-display font-extrabold text-2xl text-navy">Residential Homes & Complex Compounds</h3>
                        <p id="industryDesc" class="font-sans text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Complete residential perimeter safeguards tailored explicitly to safeguard living lounges, roof eaves, insulation boards, and multi-family quarters without harsh chemical emissions.
                        </p>
                        <div class="space-y-2">
                            <p class="font-display font-bold text-xs text-slate-800 uppercase tracking-wider">Critical Structural Challenges Addressed:</p>
                            <div id="industryChallenges" class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                                <div class="bg-white p-2.5 rounded-lg border border-slate-200 text-xs font-medium">⚠️ Mattress Harborage Infestations</div>
                                <div class="bg-white p-2.5 rounded-lg border border-slate-200 text-xs font-medium">⚠️ Kitchen Appliance Entry Channels</div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-5 relative">
                        <img id="industryImg" src="https://i.postimg.cc/nhtxMcVz/1780043121522.jpg" alt="Industry Structural Treatment Asset" class="w-full h-64 object-cover rounded-xl shadow-md">
                    </div>
                </div>

            </div>
        </section>

        <section id="process" class="py-20 bg-slate-50 border-b border-slate-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="inline-flex items-center gap-1.5 bg-teal-light text-teal-dark px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                        📋 CLINICAL TREATMENT FLOW
                    </span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-navy tracking-tight">
                        Our Scientific 4-Stage Eradication Methodology
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-left">
                    
                    <div class="bg-white border border-slate-200 rounded-2xl p-6 relative flex flex-col justify-between shadow-xs hover:-translate-y-1 transition-transform duration-300">
                        <span class="font-mono font-extrabold text-4xl text-teal/20 absolute top-4 right-6">01</span>
                        <div class="space-y-2">
                            <h3 class="font-display font-bold text-base text-slate-900 pt-4">Free Precise Inspection</h3>
                            <p class="font-sans text-xs text-slate-600 leading-relaxed">Our certified operators meticulously map property lines, location nests, nesting trails, and access harborages.</p>
                        </div>
                        <p class="text-[11px] font-sans text-slate-400 italic mt-4 pt-2 border-t border-slate-50">🔬 Target: Tracking moisture profiles and access gaps.</p>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-2xl p-6 relative flex flex-col justify-between shadow-xs hover:-translate-y-1 transition-transform duration-300">
                        <span class="font-mono font-extrabold text-4xl text-pest-orange/20 absolute top-4 right-6">02</span>
                        <div class="space-y-2">
                            <h3 class="font-display font-bold text-base text-slate-900 pt-4">Customized Bio-Plan</h3>
                            <p class="font-sans text-xs text-slate-600 leading-relaxed">We engineer a precise targeted approach tracking specific compound mixtures to align perfectly around your schedule.</p>
                        </div>
                        <p class="text-[11px] font-sans text-slate-400 italic mt-4 pt-2 border-t border-slate-50">📋 Target: Safe chemical log sheets for audits.</p>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-2xl p-6 relative flex flex-col justify-between shadow-xs hover:-translate-y-1 transition-transform duration-300">
                        <span class="font-mono font-extrabold text-4xl text-emerald-500/20 absolute top-4 right-6">03</span>
                        <div class="space-y-2">
                            <h3 class="font-display font-bold text-base text-slate-900 pt-4">Eco-Friendly Application</h3>
                            <p class="font-sans text-xs text-slate-600 leading-relaxed">Our operators deploy premium calibrated equipment utilizing completely odorless, non-staining micro-capsules.</p>
                        </div>
                        <p class="text-[11px] font-sans text-slate-400 italic mt-4 pt-2 border-t border-slate-50">⚡ Target: Zero environmental stain or residue footprint.</p>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-2xl p-6 relative flex flex-col justify-between shadow-xs hover:-translate-y-1 transition-transform duration-300">
                        <span class="font-mono font-extrabold text-4xl text-indigo-500/20 absolute top-4 right-6">04</span>
                        <div class="space-y-2">
                            <h3 class="font-display font-bold text-base text-slate-900 pt-4">Exclusion Safeguard Shield</h3>
                            <p class="font-sans text-xs text-slate-600 leading-relaxed">We physically seal structural fracture gaps, establish monitoring matrix cubes, and issue written protection warrants.</p>
                        </div>
                        <p class="text-[11px] font-sans text-slate-400 italic mt-4 pt-2 border-t border-slate-50">🛡️ Target: Continuous protection to stop future breakouts.</p>
                    </div>

                </div>

            </div>
        </section>

        <section id="gallery" class="py-20 bg-white border-b border-slate-100">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                
                <div class="max-w-3xl mx-auto mb-12">
                    <span class="inline-flex items-center gap-1.5 bg-teal-light text-teal-dark px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                        ✨ EMPIRICAL PROOF OF SUCCESS
                    </span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-navy tracking-tight">
                        Proven Results: Before & After Verification
                    </h2>
                    <p class="font-sans text-xs sm:text-sm text-slate-500 mt-2">
                        Drag the slider button below to observe how our specialized sanitation treatments completely sterilize heavily infested zones.
                    </p>
                </div>

                <div class="relative w-full h-96 rounded-2xl overflow-hidden shadow-2xl border border-slate-200 select-none">
                    
                    <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&q=80&w=1200" alt="After State Sterile Area" class="absolute inset-0 w-full h-full object-cover pointer-events-none">
                    <div class="absolute bottom-4 right-4 bg-teal-dark/90 text-white font-mono text-[10px] px-2.5 py-1 rounded-md tracking-wider uppercase z-20">Sterilized After State</div>

                    <div id="beforeImageWrapper" class="absolute inset-0 w-1/2 h-full overflow-hidden z-10 border-r-2 border-white">
                        <img src="https://i.postimg.cc/RZzmqVCv/1780043322143.jpg" alt="Before State Heavily Infested Area" class="absolute inset-0 w-full h-full object-cover max-w-none">
                        <div class="absolute bottom-4 left-4 bg-red-600/90 text-white font-mono text-[10px] px-2.5 py-1 rounded-md tracking-wider uppercase">Active Infestation Before</div>
                    </div>

                    <input type="range" min="0" max="100" value="50" oninput="handleSliderMove(this.value)" class="absolute inset-0 w-full h-full opacity-0 cursor-ew-resize z-30">
                    
                    <div id="sliderHandle" class="absolute top-0 bottom-0 left-1/2 w-0.5 bg-white pointer-events-none z-20 transform -translate-x-1/2">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-navy text-teal flex items-center justify-center font-bold shadow-xl border-2 border-white">↔</div>
                    </div>

                </div>

            </div>
        </section>

        <section id="testimonials" class="py-20 bg-slate-50 border-b border-slate-100">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                
                <div class="max-w-3xl mx-auto mb-12">
                    <span class="inline-flex items-center gap-1.5 bg-slate-200 text-slate-800 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                        ⭐ 5-STAR CLIENT SATISFACTION
                    </span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-navy tracking-tight">
                        Trusted by Homeowners & Corporates Across Lusaka
                    </h2>
                </div>

                <div class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-10 shadow-sm relative text-left">
                    <span class="text-6xl text-teal/20 font-serif absolute top-6 left-6 select-none">“</span>
                    <div id="testimonialText" class="font-sans text-sm sm:text-base text-slate-600 italic leading-relaxed relative z-10 pt-4">
                        "Proguard responded within 35 minutes to our severe cockroach emergency breakout at our commercial kitchen in Rhodes Park. The operation was totally odorless, clean, and completely removed the roaches in 48 hours. Absolute lifecycle experts!"
                    </div>
                    
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mt-8 pt-6 border-t border-slate-100">
                        <div>
                            <p id="testimonialAuthor" class="font-display font-extrabold text-slate-900 text-sm">Harrison Banda</p>
                            <p id="testimonialRole" class="font-sans text-xs text-slate-400">Restaurant Operations Manager • Rhodes Park, Lusaka</p>
                        </div>
                        <div class="flex items-center gap-1 text-amber-400 font-bold text-sm">⭐⭐⭐⭐⭐</div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-3 mt-6">
                    <button onclick="navigateTestimonial(0)" id="dot-0" class="w-3 h-3 rounded-full bg-teal transition-all"></button>
                    <button onclick="navigateTestimonial(1)" id="dot-1" class="w-3 h-3 rounded-full bg-slate-300 transition-all"></button>
                    <button onclick="navigateTestimonial(2)" id="dot-2" class="w-3 h-3 rounded-full bg-slate-300 transition-all"></button>
                </div>

            </div>
        </section>

        <section id="faqs" class="py-20 bg-white border-b border-slate-100">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
                
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="inline-flex items-center gap-1.5 bg-teal-light text-teal-dark px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                        ❓ TRANSPARENT ANSWERS
                    </span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-navy tracking-tight">
                        Frequently Answered Inquiries
                    </h2>
                </div>

                <div class="space-y-4">
                    
                    <div class="border border-slate-200 rounded-xl overflow-hidden">
                        <button onclick="toggleFaqAccordion('faq-1')" class="w-full bg-slate-50 px-5 py-4 text-left font-display font-bold text-sm sm:text-base text-navy flex items-center justify-between focus:outline-none">
                            <span>Are the chemical formulas safe for young children and domestic house pets?</span>
                            <span id="faq-icon-faq-1" class="text-slate-400 font-mono">⚡</span>
                        </button>
                        <div id="faq-content-faq-1" class="px-5 py-4 border-t border-slate-200 font-sans text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Yes, absolutely. Proguard uses premium, WHO and ZEMA registered micro-encapsulated biological gel baits and compounds. They target specific cold-blooded insect nervous systems and are completely safe for mammals, children, dogs, and cats.
                        </div>
                    </div>

                    <div class="border border-slate-200 rounded-xl overflow-hidden">
                        <button onclick="toggleFaqAccordion('faq-2')" class="w-full bg-slate-50 px-5 py-4 text-left font-display font-bold text-sm sm:text-base text-navy flex items-center justify-between focus:outline-none">
                            <span>How fast can a Proguard mobile response field crew dispatch to Kamwala?</span>
                            <span id="faq-icon-faq-2" class="text-slate-400 font-mono">➕</span>
                        </button>
                        <div id="faq-content-faq-2" class="px-5 py-4 border-t border-slate-200 font-sans text-xs sm:text-sm text-slate-600 hidden leading-relaxed">
                            Our primary corporate logistics fleet is stationed directly opposite Staff College in Kamwala, Lusaka. We can dispatch a technician vehicle to your exact coordinates within 30 to 45 minutes of a telephone reservation call.
                        </div>
                    </div>

                    <div class="border border-slate-200 rounded-xl overflow-hidden">
                        <button onclick="toggleFaqAccordion('faq-3')" class="w-full bg-slate-50 px-5 py-4 text-left font-display font-bold text-sm sm:text-base text-navy flex items-center justify-between focus:outline-none">
                            <span>Do your treatments include a written warranty or guarantee?</span>
                            <span id="faq-icon-faq-3" class="text-slate-400 font-mono">➕</span>
                        </button>
                        <div id="faq-content-faq-3" class="px-5 py-4 border-t border-slate-200 font-sans text-xs sm:text-sm text-slate-600 hidden leading-relaxed">
                            Yes. Every full-property treatment is issued a written warrant certificate of protection. If targeted pests re-emerge inside the warrant coverage timeline, our operators deploy and re-treat the area completely free of charge.
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="contact" class="py-20 bg-slate-50 border-b border-slate-100">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                    
                    <div class="lg:col-span-5 space-y-6">
                        <div>
                            <span class="inline-flex items-center gap-1.5 bg-teal-light text-teal-dark px-3 py-1 rounded-md text-xs font-bold uppercase tracking-wider mb-2">
                                📞 SECURE PROTECTION NOW
                            </span>
                            <h2 class="font-display font-extrabold text-3xl text-navy tracking-tight">
                                Arrange Same-Day Eradication Cover
                            </h2>
                            <p class="font-sans text-xs sm:text-sm text-slate-500 mt-2 leading-relaxed">
                                Use our instant pricing model logic estimator to check basic treatment parameters, or submit directly to sync tracking parameters with our WhatsApp line.
                            </p>
                        </div>

                        <div class="space-y-3 font-sans text-xs text-slate-600">
                            <div class="bg-white p-4 rounded-xl border border-slate-200 flex items-center gap-3 shadow-2xs">
                                <span class="text-lg">📍</span>
                                <div>
                                    <p class="font-bold text-slate-900">Corporate Operations Center</p>
                                    <p>Lusaka Kamwala, Opposite Staff College, Zambia</p>
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-slate-200 flex items-center gap-3 shadow-2xs">
                                <span class="text-lg">✉️</span>
                                <div>
                                    <p class="font-bold text-slate-900">Official Electronic Mail</p>
                                    <p>Kennedymututwa011@gmail.com</p>
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-slate-200 flex items-center gap-3 shadow-2xs">
                                <span class="text-lg">🕒</span>
                                <div>
                                    <p class="font-bold text-slate-900">Operational Hours Grid</p>
                                    <p>Mon - Sat: 07:30 - 18:00 (Emergency Response 24/7)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7 bg-white p-6 sm:p-8 rounded-2xl border border-slate-200 shadow-xl relative">
                        
                        <form id="quoteCalculatorForm" onsubmit="handleFormSubmission(event)" class="space-y-4">
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-display font-bold text-slate-700 uppercase tracking-wide mb-1">Your Full Name</label>
                                    <input type="text" id="form-name" required placeholder="e.g. Kennedy Mututwa" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 font-sans text-xs focus:outline-none focus:border-teal focus:bg-white">
                                </div>
                                <div>
                                    <label class="block text-xs font-display font-bold text-slate-700 uppercase tracking-wide mb-1">Mobile Contact Phone</label>
                                    <input type="tel" id="form-phone" required placeholder="e.g. 0768470921" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 font-sans text-xs focus:outline-none focus:border-teal focus:bg-white">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-display font-bold text-slate-700 uppercase tracking-wide mb-1">Target Infestation</label>
                                    <select id="form-service" onchange="runLivePriceCalculator()" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 font-sans text-xs focus:outline-none focus:border-teal focus:bg-white">
                                        <option value="bedbugs">Bedbugs Eradication Protocol</option>
                                        <option value="cockroaches">German Cockroaches Baiting</option>
                                        <option value="termites">Termite Foundations Barriers</option>
                                        <option value="rodents">Rodent Exclusion Enclosures</option>
                                        <option value="mosquitoes">Mosquito Fogging/Misting</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-display font-bold text-slate-700 uppercase tracking-wide mb-1">Property Size Scale</label>
                                    <select id="form-size" onchange="runLivePriceCalculator()" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 font-sans text-xs focus:outline-none focus:border-teal focus:bg-white">
                                        <option value="small">Small Residential Flat (1-2 Rooms)</option>
                                        <option value="medium" selected>Standard Residential Home (3-4 Bedrooms)</option>
                                        <option value="large">Large Villa Compound Estate</option>
                                        <option value="commercial">Industrial Commercial Warehousing Warehouse</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-display font-bold text-slate-700 uppercase tracking-wide mb-1">Infestation Notes / Location Gaps</label>
                                <textarea id="form-notes" rows="2" placeholder="Describe symptoms (e.g., bites on mattress, roaches seen in food pantry cupboards...)" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 font-sans text-xs focus:outline-none focus:border-teal focus:bg-white"></textarea>
                            </div>

                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                                <div class="text-center sm:text-left">
                                    <span class="block text-[10px] font-display font-bold uppercase text-slate-400 tracking-wider">Estimated Basic Treatment Starting Price</span>
                                    <span class="text-[11px] text-slate-500 font-sans">Final accurate pricing maps to site inspections</span>
                                </div>
                                <div class="text-center sm:text-right font-mono text-xl font-extrabold text-[#0F766E] shrink-0 bg-white px-4 py-2 rounded-lg border border-slate-200 shadow-2xs">
                                    ZMW <span id="livePricePlaceholder">750</span>
                                </div>
                            </div>

                            <button type="submit" class="w-full bg-pest-orange hover:bg-pest-orange-hover text-white py-3.5 rounded-xl font-display font-bold text-xs uppercase tracking-wider shadow-md hover:shadow-lg transition-colors text-center cursor-pointer">
                                🚀 Send Secure Inquiry Order
                            </button>

                        </form>

                        <div id="successPanel" class="absolute inset-0 bg-white rounded-2xl p-6 sm:p-8 flex flex-col items-center justify-center text-center space-y-4 hidden z-20">
                            <div class="w-12 h-12 rounded-full bg-emerald-100 text-[#10B981] flex items-center justify-center text-xl font-bold">✓</div>
                            <h4 class="font-display font-extrabold text-lg text-slate-900">Inquiry Logged Successfully</h4>
                            <p class="font-sans text-xs text-slate-500 max-w-sm leading-relaxed">
                                Our logistics operator matches your parameters against our mobile vehicle coordinate network. Expect a confirmation telephone call within 15 to 30 minutes.
                            </p>
                            <div class="bg-slate-50 px-4 py-2 rounded-lg border border-dashed border-slate-200 font-mono text-xs font-semibold text-slate-600 uppercase tracking-widest">
                                TICKET ID: <span id="ticketIdPlaceholder">PG-4892-ZMB</span>
                            </div>
                            <div class="flex gap-4 pt-2">
                                <button onclick="resetQuoteForm()" class="font-sans font-semibold text-xs text-[#0F766E] hover:underline">New Estimate</button>
                                <button onclick="forwardDataToWhatsApp()" class="bg-[#25D366] text-white px-4 py-2 rounded-lg text-xs font-display font-bold flex items-center gap-1.5 shadow-sm">
                                    Sync Order to WhatsApp Line
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </main>

    <footer class="bg-navy text-slate-400 pt-16 pb-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 mb-12 text-left">
            
            <div class="lg:col-span-4 space-y-4">
                <img src="https://i.postimg.cc/66LgzLtb/IMG-20260522-WA0005.jpg" alt="Proguard Footer Logo" class="h-14 w-auto rounded-lg bg-white/5 p-1">
                <p class="font-sans text-xs leading-relaxed text-slate-400">
                    PROGUARD Professional Pest Control Services is a verified environmental health brand delivering clinical sanitation, structural safety barriers, and emergency vector eradication across Zambia.
                </p>
                <div class="text-[11px] font-mono text-teal-dark space-y-1">
                    <p class="text-slate-300">📍 Kamwala Center Base, Lusaka</p>
                    <p class="text-slate-300">🔒 Approved by ZEMA & Public Health Authorities</p>
                </div>
            </div>

            <div class="lg:col-span-3 space-y-3">
                <h4 class="font-display font-bold text-xs text-white uppercase tracking-wider">Pest Treatments</h4>
                <div class="flex flex-col gap-2 font-sans text-xs">
                    <a href="#services" class="hover:text-white transition-colors">Bedbug Eradication Systems</a>
                    <a href="#services" class="hover:text-white transition-colors">German Cockroach Baiting Matrices</a>
                    <a href="#services" class="hover:text-white transition-colors">Subterranean Termite Treatment Barriers</a>
                    <a href="#services" class="hover:text-white transition-colors">Rodent Control Exclusion Enclosures</a>
                    <a href="#services" class="hover:text-white transition-colors">Mosquito Misting Fogging Vectors</a>
                </div>
            </div>

            <div class="lg:col-span-2 space-y-3">
                <h4 class="font-display font-bold text-xs text-white uppercase tracking-wider">Quick Mapping</h4>
                <div class="flex flex-col gap-2 font-sans text-xs">
                    <a href="#home" class="hover:text-white transition-colors">Home Dashboard</a>
                    <a href="#about" class="hover:text-white transition-colors">Executive Message</a>
                    <a href="#process" class="hover:text-white transition-colors">Our Treatment Flow</a>
                    <a href="#gallery" class="hover:text-white transition-colors">Before/After Slider</a>
                    <a href="#faqs" class="hover:text-white transition-colors">Common FAQs Matrix</a>
                </div>
            </div>

            <div class="lg:col-span-3 space-y-3">
                <h4 class="font-display font-bold text-xs text-white uppercase tracking-wider">Emergency Hotlines</h4>
                <div class="space-y-2 font-mono text-xs text-slate-300">
                    <div class="flex items-center gap-1.5">
                        <span class="text-pest-orange font-bold">📞 Call Line:</span>
                        <span>0768470921</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <span class="text-[#25D366] font-bold">💬 WhatsApp:</span>
                        <span>0975588552</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <span class="text-teal font-bold">✉️ Support:</span>
                        <a href="mailto:Kennedymututwa011@gmail.com" class="hover:underline text-[11px]">Kennedymututwa011@gmail.com</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-4 text-center text-[11px] text-slate-500">
            <p>© 2026 PROGUARD Professional Pest Control Services. All rights reserved. • Tagline: Your Trusted Partner • Kamwala, Lusaka</p>
            <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="bg-white/5 hover:bg-white/10 text-slate-300 px-3 py-1.5 rounded-md text-xs border border-white/10 transition-transform active:scale-95">Scroll to Top ↑</button>
        </div>
    </footer>

    <div class="fixed bottom-6 left-6 z-40 flex items-center gap-2 select-none">
        <a href="tel:0768470921" class="w-14 h-14 bg-pest-orange hover:bg-pest-orange-hover text-white rounded-full shadow-2xl flex items-center justify-center text-2xl relative group transition-transform active:scale-90" aria-label="Call Emergency Line">
            <span class="absolute inset-0 rounded-full animate-ping bg-pest-orange opacity-35"></span>
            📞
        </a>
        <div class="bg-white/95 backdrop-blur-xs text-slate-800 text-[10px] font-display font-extrabold px-3 py-2 rounded-lg shadow-md border border-slate-200 hidden md:block">
            <p class="leading-none text-pest-orange-hover uppercase tracking-wider">Emergency Hotline</p>
            <p class="font-mono text-xs text-navy mt-0.5">0768470921</p>
        </div>
    </div>

    <button onclick="forwardGeneralWhatsAppInquiry()" class="fixed bottom-6 right-6 z-40 w-14 h-14 bg-[#25D366] hover:bg-[#20ba5a] text-white rounded-full shadow-2xl flex items-center justify-center text-3xl transition-transform active:scale-90" aria-label="WhatsApp Dispatch Support">
        <span class="absolute inset-0 rounded-full animate-pulse bg-[#25D366] opacity-25"></span>
        💬
    </button>


    <script>
        // A. Mobile Hamburger Drawer Menu Toggle Logic
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const icon = document.getElementById('menuIcon');
            const close = document.getElementById('closeIcon');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                icon.classList.add('hidden');
                close.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
                icon.classList.remove('hidden');
                close.classList.add('hidden');
            }
        }

        // B. Interactive Before/After Split Container Handle Slider Translation Logic
        function handleSliderMove(percentageValue) {
            const wrapper = document.getElementById('beforeImageWrapper');
            const handle = document.getElementById('sliderHandle');
            
            // Constrain value clamp parameters mapping precisely
            wrapper.style.width = percentageValue + '%';
            handle.style.left = percentageValue + '%';
        }

        // C. Services Blueprint Data Selection Matrix Mapping for Modal Injections
        const SERVICES_INFO_BLUEPRINT = {
            bedbugs: {
                title: "Bedbug Vector Eradication System Protocol",
                desc: "Bedbugs nest inside mattress stitch braids, structural headboards, electrical sockets, and wood baseboard cracks. They can survive for months without feeding, meaning basic surface atomization sprays will fail to remove hidden egg reserves.",
                treatment: "Proguard implements a clinical multi-stage procedure combining ultra-low-volume micro-point deep thermal treatments alongside residual contact insect growth regulators (IGRs). This interrupts life cycles completely, ensuring eradication."
            },
            cockroaches: {
                title: "German Cockroach Baiting & Sanitation Matrix",
                desc: "German and American cockroaches cluster inside commercial food ranges, warmth pipes, and motor housings. They transmit harmful pathogens like Salmonella and trigger extreme respiratory allergens.",
                treatment: "We deploy premium Fipronil or Hydramethylnon high-attractant pheromone gel bait matrices. Roaches spread the bait through natural harborages, causing a systematic cascade effect that destroys the entire nest in 48 hours without kitchen disruption."
            },
            termites: {
                title: "Subterranean Termite Foundation Barriers",
                desc: "Subterranean termites build deep underground mud tunnel highways into wood beams, frame moldings, and rafters, causing permanent structural foundation decay silently over time.",
                treatment: "Proguard deploys physical slab sub-drilling liquid injections and horizontal perimeter trench barriers using advanced synthetic termiticides. This establishes a continuous chemical defense perimeter around your property foundation."
            },
            rodents: {
                title: "Rodent Exclusion, Enclosures & Trapping Audits",
                desc: "Rats and mice chew through electrical lines and wire clusters, presenting acute fire hazards, while acting as primary vectors for severe viral conditions.",
                treatment: "Our comprehensive exclusion framework involves mapping point structural openings, filling entry gaps using galvanized steel mesh grids, and placing weather-resistant lockable monitoring bait stations."
            },
            mosquitoes: {
                title: "Mosquito Larvicide & Spatial Misting Controls",
                desc: "Mosquito species thrive in stagnant pools, gutter traps, and dense vegetation leaves, serving as dangerous transmitters of malaria.",
                treatment: "We target both adult populations and larval breeding grounds simultaneously. Our crews implement precision pyrethroid motorized misting on local foliage along with applying synthetic larvicide blocks to water catchments."
            },
            fumigation: {
                title: "Volumetric Space Corporate Fumigation Blueprints",
                desc: "Large commercial spaces, milling plants, and bulk grain silos require full volumetric air treatment to clear hidden product beetles and weevils entirely.",
                treatment: "We seal building perimeters and deploy calibrated space gas configurations under strict Environmental Health Technician protocols, guaranteeing a zero-infestation clearance certificate for corporate regulatory audits."
            }
        };

        function openServiceModal(serviceKey) {
            const modal = document.getElementById('serviceModal');
            const blueprint = SERVICES_INFO_BLUEPRINT[serviceKey];
            if (blueprint) {
                document.getElementById('modalTitle').innerText = blueprint.title;
                document.getElementById('modalDesc').innerText = blueprint.desc;
                document.getElementById('modalTreatment').innerText = blueprint.treatment;
                modal.classList.remove('hidden');
            }
        }

        function closeServiceModal() {
            document.getElementById('serviceModal').classList.add('hidden');
        }

        // D. Industries & Sectors Tabs Controller Real-time Content Hydration Mapping
        const INDUSTRIES_DATA_MATRIX = {
            residential: {
                title: "Residential Homes & Complex Compounds",
                desc: "Complete residential perimeter safeguards tailored explicitly to secure family living lounges, roof eaves, insulation boards, and multi-family rental quarters without harsh chemical emissions or heavy odor footprints.",
                challenges: ["⚠️ Mattress Harborage Infestations", "⚠️ Kitchen Appliance Entry Channels", "⚠️ Garden Vector Breeding Gaps", "⚠️ Children/Pets Safety Compliance"],
                img: "https://i.postimg.cc/nhtxMcVz/1780043121522.jpg"
            },
            restaurants: {
                title: "Commercial Kitchens & Food Service Outlets",
                desc: "Strict zero-tolerance pest mitigation procedures configured to protect food storage walk-ins, prep lines, and seating areas. Designed to ensure compliance with Public Health and food safety regulatory audits.",
                challenges: ["⚠️ Grease Trap Roach Harborages", "⚠️ Secondary Product Fly Invasions", "⚠️ Public Review Reputation Risk", "⚠️ Strict Audit Documentation Needs"],
                img: "https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&q=80&w=600"
            },
            warehouses: {
                title: "Industrial Logistics & Supply Chain Warehousing",
                desc: "High-volume rodent tracking grids and broad volumetric fumigation sweeps built for raw product silos, packaging storage bays, and shipping distribution bays.",
                challenges: ["⚠️ Pallet Stacking Entry Cavities", "⚠️ Bulk Inventory Product Defacement", "⚠️ Large Perimeter Gaps Sealing", "⚠️ Heavy Transport Load Trapping"],
                img: "https://i.postimg.cc/vZLsnFDL/1780043041448.jpg"
            },
            hospitality: {
                title: "Hotels, Lodges & Guest Accommodation Rooms",
                desc: "Rapid response bedbug sterilization protocols built to maximize property uptime, keep guest rooms available, and protect your brand's online travel platform reviews.",
                challenges: ["⚠️ Multi-Room Migration Corridors", "⚠️ High Passenger Baggage Risks", "⚠️ Immediate Response Turnarounds", "⚠️ Discretion-Focused Operations"],
                img: "https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&q=80&w=600"
            }
        };

        function switchIndustryTab(industryKey) {
            // Remove active classes from all tab buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-navy', 'text-white');
                btn.classList.add('bg-slate-100', 'text-slate-600', 'hover:bg-slate-200');
            });
            
            // Activate current tab button trigger
            const targetedBtn = document.getElementById(`btn-${industryKey}`);
            targetedBtn.classList.remove('bg-slate-100', 'text-slate-600', 'hover:bg-slate-200');
            targetedBtn.classList.add('bg-navy', 'text-white');

            // Hydrate text nodes safely
            const data = INDUSTRIES_DATA_MATRIX[industryKey];
            document.getElementById('industryTitle').innerText = data.title;
            document.getElementById('industryDesc').innerText = data.desc;
            document.getElementById('industryImg').src = data.img;

            // Rebuild challenge elements dynamically
            const challengesBox = document.getElementById('industryChallenges');
            challengesBox.innerHTML = '';
            data.challenges.forEach(challengeStr => {
                const node = document.createElement('div');
                node.className = "bg-white p-2.5 rounded-lg border border-slate-200 text-xs font-medium text-slate-800";
                node.innerText = challengeStr;
                challengesBox.appendChild(node);
            });
        }

        // E. Client Testimonial Carousel Slide Controller Function
        const TESTIMONIALS_POOL = [
            {
                text: '"Proguard responded within 35 minutes to our severe cockroach emergency breakout at our commercial kitchen in Rhodes Park. The operation was totally odorless, clean, and completely removed the roaches in 48 hours. Absolute lifecycle experts!"',
                author: "Harrison Banda",
                role: "Restaurant Operations Manager • Rhodes Park, Lusaka"
            },
            {
                text: '"We were battling recurrent bedbug infestations across our family estate apartments in Avondale for months until Proguard deployed their chemical barrier process. We haven\'t seen a single bug bite in over half a year now."',
                author: "Miriam Phiri",
                role: "Property Managing Owner • Avondale, Lusaka"
            },
            {
                text: '"Highly professional team. They provided full safety data sheets for their chemicals before treating our grain storage silos. They cleared out structural weevils cleanly without halting warehouse logistics operations."',
                author: "Ephraim Mutale",
                role: "Logistics Warehouse Director • Industrial Area, Lusaka"
            }
        ];

        function navigateTestimonial(slideIndex) {
            // Update Text Nodes
            const review = TESTIMONIALS_POOL[slideIndex];
            document.getElementById('testimonialText').innerText = review.text;
            document.getElementById('testimonialAuthor').innerText = review.author;
            document.getElementById('testimonialRole').innerText = review.role;

            // Reset Navigation Indicator Dots
            for (let i = 0; i < 3; i++) {
                const dot = document.getElementById(`dot-${i}`);
                if (i === slideIndex) {
                    dot.classList.remove('bg-slate-300');
                    dot.classList.add('bg-teal');
                } else {
                    dot.classList.remove('bg-teal');
                    dot.classList.add('bg-slate-300');
                }
            }
        }

        // F. FAQS Collapsible Accordion Logic
        function toggleFaqAccordion(faqId) {
            const content = document.getElementById(`faq-content-${faqId}`);
            const icon = document.getElementById(`faq-icon-${faqId}`);
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.innerText = "✕";
            } else {
                content.classList.add('hidden');
                icon.innerText = "➕";
            }
        }

        // G. Interactive Form Pricing Calculation Logic Model
        function runLivePriceCalculator() {
            const service = document.getElementById('form-service').value;
            const size = document.getElementById('form-size').value;
            
            let baseRate = 600;

            // Service Offset Multiplexers
            if (service === "bedbugs") baseRate = 750;
            else if (service === "cockroaches") baseRate = 600;
            else if (service === "termites") baseRate = 1300;
            else if (service === "rodents") baseRate = 650;
            else if (service === "mosquitoes") baseRate = 700;

            // Size Scaling Factors Multipliers
            let factor = 1.0;
            if (size === "small") factor = 0.8;
            else if (size === "medium") factor = 1.0;
            else if (size === "large") factor = 1.4;
            else if (size === "commercial") factor = 2.5;

            const finalCalculatedResult = Math.floor(baseRate * factor);
            document.getElementById('livePricePlaceholder').innerText = finalCalculatedResult;
        }

        // Run calculation once initially at startup
        runLivePriceCalculator();

        // H. Form Submission and WhatsApp Integration Logic
        function handleFormSubmission(event) {
            event.preventDefault();
            
            // Random Ticket Generator for authenticity and customer reassurance
            const generatedTicket = "PG-" + Math.floor(1000 + Math.random() * 9000) + "-ZMB";
            document.getElementById('ticketIdPlaceholder').innerText = generatedTicket;
            
            // Slide Show Success Box UI overlay
            document.getElementById('successPanel').classList.remove('hidden');
        }

        function resetQuoteForm() {
            document.getElementById('quoteCalculatorForm').reset();
            document.getElementById('successPanel').classList.add('hidden');
            runLivePriceCalculator();
        }

        function forwardDataToWhatsApp() {
            const name = document.getElementById('form-name').value;
            const phone = document.getElementById('form-phone').value;
            const serviceSelect = document.getElementById('form-service');
            const serviceText = serviceSelect.options[serviceSelect.selectedIndex].text;
            const sizeSelect = document.getElementById('form-size');
            const sizeText = sizeSelect.options[sizeSelect.selectedIndex].text;
            const price = document.getElementById('livePricePlaceholder').innerText;
            const notes = document.getElementById('form-notes').value;
            const ticket = document.getElementById('ticketIdPlaceholder').innerText;

            const structuredMessage = `Hi Proguard Pest Control Services,%0A%0AI would like to verify my instant estimate schedule booking details:%0A• *Ticket Number:* ${ticket}%0A• *Client Name:* ${name}%0A• *Mobile Number:* ${phone}%0A• *Treatment Type:* ${serviceText}%0A• *Property Scale:* ${sizeText}%0A• *Price Estimate:* ZMW ${price}%0A• *Property Notes:* ${notes}%0A%0APlease confirm my field operator dispatch timing route coordinates!`;
            
            window.open(`https://wa.me/260975588552?text=${structuredMessage}`, '_blank');
        }

        function forwardGeneralWhatsAppInquiry() {
            const generalTextMsg = "Hi Proguard Professional Pest Control Services, I have noticed signs of active pests at my property in Lusaka and would like to schedule an inspection crew turnaround.";
            window.open(`https://wa.me/260975588552?text=${encodeURIComponent(generalTextMsg)}`, '_blank');
        }
    </script>
</body>
</html>
