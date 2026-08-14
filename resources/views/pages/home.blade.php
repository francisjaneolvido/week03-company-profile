@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Hero Section -->
    <section class="bg-brand-yellow">
        <div class="max-w-6xl mx-auto px-6 py-24 text-center">
            <p class="text-black/70 font-semibold tracking-wide uppercase text-sm mb-4">
                Forklift Parts PH
            </p>
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6 text-black">
                Trusted Heavy Equipment Repair & Genuine Forklift Parts
            </h1>
            <p class="text-black/80 max-w-2xl mx-auto mb-10">
                We provide on-call repair services for heavy equipment and specialize in
                supplying quality parts specifically designed for forklifts. By appointment only.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('services') }}"
                   class="bg-black hover:bg-slate-800 text-white font-bold px-6 py-3 rounded-lg transition">
                    View Our Services
                </a>
                <a href="{{ route('contact') }}"
                   class="border-2 border-black text-black hover:bg-black hover:text-white font-semibold px-6 py-3 rounded-lg transition">
                    Schedule an Appointment
                </a>
            </div>
        </div>
    </section>

    <!-- Company Introduction -->
    <section class="max-w-4xl mx-auto px-6 py-20 text-center">
        <h2 class="text-3xl font-bold text-black mb-4">Who We Are</h2>
        <p class="text-slate-600 leading-relaxed">
            Forklift Parts PH offers dependable on-call service for a range of heavy equipment,
            and specializes in sourcing and selling parts designed specifically for forklifts.
            We work strictly by appointment to give every job the attention it needs.
        </p>
    </section>

    <!-- Featured Services -->
    <section class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-black text-center mb-12">Featured Services</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-6 hover:shadow-md transition border-t-4 border-t-brand-yellow">
                    <h3 class="font-semibold text-lg mb-2 text-black">Overhaul Transmission</h3>
                    <p class="text-sm text-slate-600 mb-4">
                        Complete transmission overhaul to restore performance and reliability.
                    </p>
                    <a href="{{ route('services') }}" class="text-black font-semibold text-sm hover:text-yellow-600">
                        Learn More →
                    </a>
                </div>

                <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-6 hover:shadow-md transition border-t-4 border-t-brand-yellow">
                    <h3 class="font-semibold text-lg mb-2 text-black">Recondition Forklift</h3>
                    <p class="text-sm text-slate-600 mb-4">
                        Full reconditioning service to extend the life of your forklift.
                    </p>
                    <a href="{{ route('services') }}" class="text-black font-semibold text-sm hover:text-yellow-600">
                        Learn More →
                    </a>
                </div>

                <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-6 hover:shadow-md transition border-t-4 border-t-brand-yellow">
                    <h3 class="font-semibold text-lg mb-2 text-black">Backhoe Repair</h3>
                    <p class="text-sm text-slate-600 mb-4">
                        On-call repair service for backhoes and related heavy equipment.
                    </p>
                    <a href="{{ route('services') }}" class="text-black font-semibold text-sm hover:text-yellow-600">
                        Learn More →
                    </a>
                </div>

                <div class="bg-white border border-slate-200 rounded-xl shadow-sm p-6 hover:shadow-md transition border-t-4 border-t-brand-yellow">
                    <h3 class="font-semibold text-lg mb-2 text-black">Overhaul Engine</h3>
                    <p class="text-sm text-slate-600 mb-4">
                        Expert engine overhaul service to keep your equipment running strong.
                    </p>
                    <a href="{{ route('services') }}" class="text-black font-semibold text-sm hover:text-yellow-600">
                        Learn More →
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="max-w-6xl mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-black text-center mb-12">Why Choose Us</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-3xl mb-3">🔧</div>
                <h3 class="font-semibold mb-2 text-black">Specialized Expertise</h3>
                <p class="text-sm text-slate-600">Focused specifically on forklifts and heavy equipment repair.</p>
            </div>
            <div class="text-center">
                <div class="text-3xl mb-3">📞</div>
                <h3 class="font-semibold mb-2 text-black">On-Call Service</h3>
                <p class="text-sm text-slate-600">We come to you for on-site repair, scheduled by appointment.</p>
            </div>
            <div class="text-center">
                <div class="text-3xl mb-3">⚙️</div>
                <h3 class="font-semibold mb-2 text-black">Genuine Parts</h3>
                <p class="text-sm text-slate-600">We supply parts specifically designed for forklifts.</p>
            </div>
            <div class="text-center">
                <div class="text-3xl mb-3">✅</div>
                <h3 class="font-semibold mb-2 text-black">Reliable Work</h3>
                <p class="text-sm text-slate-600">Thorough repairs you can trust to keep your equipment running.</p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="bg-white border-t-4 border-brand-yellow">
        <div class="max-w-4xl mx-auto px-6 py-16 text-center">
            <h2 class="text-3xl font-bold mb-4 text-black">Need Repair or Parts?</h2>
            <p class="mb-8 text-slate-600">
                We operate strictly by appointment — call or leave a message to schedule your service.
            </p>
            <a href="{{ route('contact') }}"
               class="bg-brand-yellow text-black font-bold px-6 py-3 rounded-lg hover:bg-yellow-400 transition inline-block">
                Schedule an Appointment
            </a>
        </div>
    </section>

@endsection