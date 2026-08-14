@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <div class="grid grid-cols-1 lg:grid-cols-2">

        <!-- LEFT PANEL: sticky, yellow, info-first -->
        <div class="lg:sticky lg:top-0 lg:h-screen bg-brand-yellow px-8 sm:px-12 py-16 lg:py-0 flex flex-col justify-center">
            <p class="font-mono text-black/60 text-xs uppercase tracking-widest mb-4">Forklift Parts PH</p>
            <h1 class="text-4xl sm:text-5xl font-bold text-black leading-tight mb-6">
                Let's get your<br>equipment back<br>to work.
            </h1>
            <p class="text-black/80 max-w-sm mb-10">
                We operate strictly by appointment. Call, message, or send a request —
                we'll confirm a time that works for you.
            </p>

            <div class="space-y-5 border-t border-black/15 pt-8">
                <div class="flex items-start gap-4">
                    <span class="font-mono text-[11px] uppercase tracking-widest text-black/50 w-20 shrink-0 pt-0.5">Phone</span>
                    <a href="tel:[YOUR_PHONE_NUMBER]" class="text-black font-semibold hover:underline">09123456789</a>
                </div>
                <div class="flex items-start gap-4">
                    <span class="font-mono text-[11px] uppercase tracking-widest text-black/50 w-20 shrink-0 pt-0.5">Email</span>
                    <a href="mailto:[YOUR_EMAIL]" class="text-black font-semibold hover:underline">forkliftpartsph@gmail.com</a>
                </div>
                <div class="flex items-start gap-4">
                    <span class="font-mono text-[11px] uppercase tracking-widest text-black/50 w-20 shrink-0 pt-0.5">Address</span>
                    <span class="text-black font-semibold">Quezon City, Philippines</span>
                </div>
                <div class="flex items-start gap-4">
                    <span class="font-mono text-[11px] uppercase tracking-widest text-black/50 w-20 shrink-0 pt-0.5">Hours</span>
                    <span class="text-black font-semibold">By appointment only</span>
                </div>
                <div class="flex items-start gap-4">
                    <span class="font-mono text-[11px] uppercase tracking-widest text-black/50 w-20 shrink-0 pt-0.5">Social</span>
                    <a href="#" class="text-black font-semibold hover:underline">Facebook →</a>
                </div>
            </div>
        </div>

        <!-- RIGHT PANEL: white, form-first, no card border -->
        <div class="px-8 sm:px-12 lg:px-16 py-16 lg:py-24">
            <div class="max-w-md">
                <p class="font-mono text-yellow-600 text-xs uppercase tracking-widest mb-3">Appointment Request</p>
                <h2 class="text-2xl font-bold text-black mb-10">Tell us about the job</h2>

                <form class="space-y-8">
                    <div>
                        <label class="block font-mono text-[11px] uppercase tracking-widest text-slate-500 mb-2">Full Name</label>
                        <input type="text" placeholder="Juan Dela Cruz"
                               class="w-full border-0 border-b-2 border-slate-200 focus:border-brand-yellow px-0 py-2 text-black placeholder:text-slate-300 focus:outline-none focus:ring-0 transition">
                    </div>

                    <div>
                        <label class="block font-mono text-[11px] uppercase tracking-widest text-slate-500 mb-2">Email Address</label>
                        <input type="email" placeholder="juan@example.com"
                               class="w-full border-0 border-b-2 border-slate-200 focus:border-brand-yellow px-0 py-2 text-black placeholder:text-slate-300 focus:outline-none focus:ring-0 transition">
                    </div>

                    <div>
                        <label class="block font-mono text-[11px] uppercase tracking-widest text-slate-500 mb-2">Subject</label>
                        <input type="text" placeholder="Appointment Request"
                               class="w-full border-0 border-b-2 border-slate-200 focus:border-brand-yellow px-0 py-2 text-black placeholder:text-slate-300 focus:outline-none focus:ring-0 transition">
                    </div>

                    <div>
                        <label class="block font-mono text-[11px] uppercase tracking-widest text-slate-500 mb-2">Message</label>
                        <textarea rows="4" placeholder="Tell us about your equipment and the service you need..."
                                  class="w-full border-0 border-b-2 border-slate-200 focus:border-brand-yellow px-0 py-2 text-black placeholder:text-slate-300 focus:outline-none focus:ring-0 transition resize-none"></textarea>
                    </div>

                    <button type="button"
                            class="w-full bg-brand-yellow hover:bg-yellow-400 text-black font-bold py-3.5 rounded-lg transition">
                        Send Request
                    </button>

                    <p class="text-xs text-slate-400">
                        This form is for demonstration purposes only and is not connected to a backend.
                    </p>
                </form>

                <div class="mt-14 bg-slate-100 border border-slate-200 rounded-xl h-40 flex items-center justify-center text-slate-400 text-sm">
                    Map Placeholder
                </div>
            </div>
        </div>

    </div>

@endsection