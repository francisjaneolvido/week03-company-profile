<footer class="bg-white border-t-4 border-brand-yellow text-black mt-20">
    <div class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-10">

        <div>
            <h3 class="font-bold text-lg mb-2">Forklift <span class="text-brand-yellow">Parts PH</span></h3>
            <p class="text-sm text-slate-600">
                On-call repair services for heavy equipment, and genuine parts specifically
                designed for forklifts. Operating strictly by appointment.
            </p>
        </div>

        <div>
            <h4 class="font-semibold mb-3">Quick Links</h4>
            <ul class="space-y-2 text-sm text-slate-600">
                <li><a href="{{ route('home') }}" class="hover:text-brand-yellow">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-brand-yellow">About</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-brand-yellow">Services</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-brand-yellow">Contact</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold mb-3">Contact & Social</h4>
            <p class="text-sm text-slate-600 mb-1">Quezon City, Philippines</p>
            <p class="text-sm text-slate-600 mb-1">forkliftpartsph@gmail.com</p>
            <p class="text-sm text-slate-600 mb-3">09123456789</p>
            <div class="flex gap-4 text-sm">
                <a href="#" class="text-slate-600 hover:text-brand-yellow">Facebook</a>
            </div>
        </div>

    </div>

    <div class="border-t border-slate-200 py-4 text-center text-xs text-slate-500">
        © {{ date('Y') }} Forklift Parts PH. All rights reserved.
    </div>
</footer>