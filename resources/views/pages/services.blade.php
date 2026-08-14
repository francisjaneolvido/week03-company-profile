@extends('layouts.app')

@section('title', 'Services')

@section('content')

    <!-- Page Header -->
    <section class="bg-brand-yellow">
        <div class="max-w-4xl mx-auto px-6 py-16 text-center">
            <h1 class="text-4xl font-bold mb-4 text-black">Our Services</h1>
            <p class="text-black/80">On-call repair services for heavy equipment. By appointment only.</p>
        </div>
    </section>

    <!-- Forklift Services -->
    <section class="max-w-6xl mx-auto px-6 py-16">
        <div class="flex items-center gap-3 mb-2">
            <div class="w-10 h-10 rounded-lg bg-brand-yellow flex items-center justify-center text-lg font-bold text-black">
                1
            </div>
            <h2 class="text-2xl font-bold text-black">Forklift Services</h2>
        </div>
        <p class="text-slate-600 mb-8 ml-[52px]">
            Specialized repair, overhaul, and reconditioning services built specifically for forklifts.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @php
                $forkliftServices = [
                    'Overhaul Transmission' => 'Complete transmission overhaul to restore power and smooth operation.',
                    'Overhaul Cylinder' => 'Precision cylinder overhaul service for hydraulic and lift systems.',
                    'Repair Packing' => 'Packing repair to prevent leaks and maintain hydraulic pressure.',
                    'Repair Axle' => 'Axle repair service to keep your equipment stable and road-ready.',
                    'Overhaul Engine' => 'Full engine overhaul to restore performance and extend service life.',
                    'Recondition Forklift' => 'Comprehensive forklift reconditioning, inside and out.',
                ];
            @endphp

            @foreach ($forkliftServices as $title => $description)
                <div class="bg-white border border-slate-200 rounded-xl p-6 hover:shadow-md hover:border-brand-yellow transition">
                    <h3 class="font-semibold text-base mb-2 text-black">{{ $title }}</h3>
                    <p class="text-sm text-slate-600 mb-4">{{ $description }}</p>
                    <a href="{{ route('contact') }}" class="text-black text-sm font-semibold hover:text-yellow-600">
                        Schedule This Service →
                    </a>
                </div>
            @endforeach

        </div>
    </section>

    <!-- Heavy Equipment Repair -->
    <section class="bg-slate-50 py-16">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-10 h-10 rounded-lg bg-brand-yellow flex items-center justify-center text-lg font-bold text-black">
                    2
                </div>
                <h2 class="text-2xl font-bold text-black">Heavy Equipment Repair</h2>
            </div>
            <p class="text-slate-600 mb-8 ml-[52px]">
                On-call repair for a range of heavy equipment beyond forklifts.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @php
                    $heavyEquipmentServices = [
                        'Backhoe Repair' => 'On-call repair service for backhoes and excavation equipment.',
                        'Bulldozer Repair' => 'Reliable repair service for bulldozers and heavy earth-moving equipment.',
                        'Loader Repair' => 'Expert repair service for loaders to keep your operations moving.',
                    ];
                @endphp

                @foreach ($heavyEquipmentServices as $title => $description)
                    <div class="bg-white border border-slate-200 rounded-xl p-6 hover:shadow-md hover:border-brand-yellow transition">
                        <h3 class="font-semibold text-base mb-2 text-black">{{ $title }}</h3>
                        <p class="text-sm text-slate-600 mb-4">{{ $description }}</p>
                        <a href="{{ route('contact') }}" class="text-black text-sm font-semibold hover:text-yellow-600">
                            Schedule This Service →
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-white border-t-4 border-brand-yellow">
        <div class="max-w-4xl mx-auto px-6 py-16 text-center">
            <h2 class="text-3xl font-bold mb-4 text-black">We Also Sell Forklift Parts</h2>
            <p class="mb-8 text-slate-600">
                In addition to repair services, we specialize in supplying parts specifically
                designed for forklifts. Contact us to check availability for your equipment.
            </p>
            <a href="{{ route('contact') }}"
               class="bg-brand-yellow text-black font-bold px-6 py-3 rounded-lg hover:bg-yellow-400 transition inline-block">
                Get in Touch
            </a>
        </div>
    </section>

@endsection