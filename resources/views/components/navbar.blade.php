<!-- Utility strip: quick facts, not decoration -->
<div class="bg-black text-white text-xs">
    <div class="max-w-6xl mx-auto px-6 py-1.5 flex items-center justify-between">
        <span class="font-mono tracking-wide text-brand-yellow">BY APPOINTMENT ONLY</span>
        <a href="tel:[YOUR_PHONE_NUMBER]" class="hover:text-brand-yellow transition font-mono">
            
        </a>
    </div>
</div>

<header x-data="{ open: false }" class="bg-white border-b-4 border-brand-yellow sticky top-0 z-50 shadow-sm">
    <nav class="max-w-6xl mx-auto flex items-center justify-between px-6 py-3">

        <!-- Logomark + wordmark -->
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <span class="w-10 h-10 rounded-lg bg-brand-yellow flex items-center justify-center text-black text-xl">
                🔧
            </span>
            <span class="leading-tight">
                <span class="block text-base font-bold text-black tracking-tight">Forklift Parts PH</span>
                <span class="block text-[11px] font-mono uppercase tracking-widest text-slate-500">Repair &amp; Parts</span>
            </span>
        </a>

        <!-- Desktop nav -->
        <ul class="hidden md:flex items-center gap-8 text-sm font-medium text-black">
            <li>
                <a href="{{ route('home') }}"
                   class="relative pb-1 transition {{ request()->routeIs('home') ? 'text-black' : 'text-slate-600 hover:text-black' }} after:content-[''] after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:bg-brand-yellow after:transition-all {{ request()->routeIs('home') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}"
                   class="relative pb-1 transition {{ request()->routeIs('about') ? 'text-black' : 'text-slate-600 hover:text-black' }} after:content-[''] after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:bg-brand-yellow after:transition-all {{ request()->routeIs('about') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('services') }}"
                   class="relative pb-1 transition {{ request()->routeIs('services') ? 'text-black' : 'text-slate-600 hover:text-black' }} after:content-[''] after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:bg-brand-yellow after:transition-all {{ request()->routeIs('services') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}">
                    Services
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}"
                   class="relative pb-1 transition {{ request()->routeIs('contact') ? 'text-black' : 'text-slate-600 hover:text-black' }} after:content-[''] after:absolute after:left-0 after:-bottom-0.5 after:h-0.5 after:bg-brand-yellow after:transition-all {{ request()->routeIs('contact') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}">
                    Contact
                </a>
            </li>
        </ul>

        <a href="{{ route('contact') }}"
           class="hidden md:inline-block bg-brand-yellow hover:bg-yellow-400 text-black text-sm font-bold px-4 py-2 rounded-lg transition">
            Schedule Appointment
        </a>

        <!-- Mobile hamburger -->
        <button @click="open = !open" class="md:hidden text-black" aria-label="Toggle menu">
            <svg x-show="!open" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-cloak>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    <!-- Mobile menu panel -->
    <div x-show="open" x-cloak @click.away="open = false" class="md:hidden border-t border-slate-200 bg-white">
        <ul class="flex flex-col px-6 py-4 gap-4 text-sm font-medium text-black">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-brand-yellow font-semibold' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-brand-yellow font-semibold' : '' }}">About</a></li>
            <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-brand-yellow font-semibold' : '' }}">Services</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-brand-yellow font-semibold' : '' }}">Contact</a></li>
            <li>
                <a href="{{ route('contact') }}" class="block text-center bg-brand-yellow text-black font-bold px-4 py-2 rounded-lg">
                    Schedule Appointment
                </a>
            </li>
        </ul>
    </div>
</header>