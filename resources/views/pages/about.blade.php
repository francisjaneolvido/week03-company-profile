@extends('layouts.app')

@section('title', 'About')

@section('content')

    <!-- Page Header -->
    <section class="bg-brand-yellow">
        <div class="max-w-4xl mx-auto px-6 py-16 text-center">
            <h1 class="text-4xl font-bold mb-4 text-black">
                About Forklift Parts PH
            </h1>

            <p class="text-black/80">
                Reliable heavy equipment repair, built on hands-on expertise.
            </p>
        </div>
    </section>


    <!-- Company History -->
    <section class="max-w-4xl mx-auto px-6 py-16">

        <h2 class="text-2xl font-bold text-black mb-4">
            Our Story
        </h2>

        <p class="text-slate-600 leading-relaxed mb-4">
            Forklift Parts PH started in 2020, during one of the most challenging
            periods for businesses and equipment owners brought about by the
            COVID-19 pandemic. Starting a business at that time was not easy.
            Finding clients was difficult because many companies temporarily
            reduced their operations, while strict travel restrictions made it
            harder to personally reach customers and provide on-site repair
            services.
        </p>

        <p class="text-slate-600 leading-relaxed mb-4">
            Despite these challenges, Forklift Parts PH continued to build its
            business through referrals, personal connections, and reliable service.
            We understood that even during difficult times, forklifts and heavy
            equipment still needed proper maintenance and repair to keep businesses
            running.
        </p>

        <p class="text-slate-600 leading-relaxed mb-4">
            What started as a small repair service gradually grew through
            hands-on experience and the trust of our customers. Over time, we
            expanded our services to include forklift transmissions, engines,
            cylinders, axles, and other heavy equipment such as backhoes,
            bulldozers, and loaders.
        </p>

        <p class="text-slate-600 leading-relaxed">
            Today, Forklift Parts PH continues to focus on honest assessments,
            quality workmanship, reliable service, and genuine forklift parts.
            We remain committed to helping equipment owners keep their machines
            operational and their businesses moving forward.
        </p>

    </section>


    <!-- Mission & Vision -->
    <section class="bg-slate-50 py-16">

        <div class="max-w-5xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- Mission -->
            <div class="bg-white rounded-xl shadow-sm p-8 border-t-4 border-brand-yellow">

                <h2 class="text-xl font-bold text-black mb-3">
                    Our Mission
                </h2>

                <p class="text-slate-600 leading-relaxed">
                    To keep our clients' equipment running through dependable
                    repair work and genuine forklift parts, delivered on schedule
                    and done right the first time.
                </p>

            </div>


            <!-- Vision -->
            <div class="bg-white rounded-xl shadow-sm p-8 border-t-4 border-brand-yellow">

                <h2 class="text-xl font-bold text-black mb-3">
                    Our Vision
                </h2>

                <p class="text-slate-600 leading-relaxed">
                    To be the trusted go-to service provider for forklift and
                    heavy equipment repair across our service area, known for
                    quality work and fair dealing.
                </p>

            </div>

        </div>

    </section>


    <!-- Core Values -->
    <section class="max-w-6xl mx-auto px-6 py-16">

        <h2 class="text-2xl font-bold text-black text-center mb-12">
            What We Stand For
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Expertise -->
            <div class="text-center">

                <div class="text-3xl mb-3">
                    🔧
                </div>

                <h3 class="font-semibold mb-2 text-black">
                    Expertise
                </h3>

                <p class="text-sm text-slate-600">
                    Years of hands-on experience with forklifts and heavy equipment.
                </p>

            </div>


            <!-- Reliability -->
            <div class="text-center">

                <div class="text-3xl mb-3">
                    ⏱️
                </div>

                <h3 class="font-semibold mb-2 text-black">
                    Reliability
                </h3>

                <p class="text-sm text-slate-600">
                    We show up on schedule and finish the job properly.
                </p>

            </div>


            <!-- Fair Dealing -->
            <div class="text-center">

                <div class="text-3xl mb-3">
                    🤝
                </div>

                <h3 class="font-semibold mb-2 text-black">
                    Fair Dealing
                </h3>

                <p class="text-sm text-slate-600">
                    Honest assessments and transparent service, no surprises.
                </p>

            </div>


            <!-- Quality Parts -->
            <div class="text-center">

                <div class="text-3xl mb-3">
                    ⚙️
                </div>

                <h3 class="font-semibold mb-2 text-black">
                    Quality Parts
                </h3>

                <p class="text-sm text-slate-600">
                    We use and sell parts specifically designed for forklifts.
                </p>

            </div>

        </div>

    </section>


    <!-- Team Introduction -->
    <section class="bg-slate-50 py-16">

        <div class="max-w-6xl mx-auto px-6">

            <!-- Team Heading -->
            <div class="text-center mb-12">

                <h2 class="text-2xl font-bold text-black mb-3">
                    Meet Our Team
                </h2>

                <p class="text-slate-600">
                    The people behind Forklift Parts PH and our commitment to
                    dependable heavy equipment service.
                </p>

            </div>


            <!-- Team Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">


                <!-- John Rey -->
                <div class="bg-white rounded-xl shadow-sm p-6 text-center">

                    <img
                        src="{{ asset('images/team/john-rey.jpg') }}"
                        alt="John Rey B. Serrano"
                        class="w-28 h-28 mx-auto mb-5 rounded-full object-cover"
                    >

                    <h3 class="text-lg font-bold text-black">
                        John Rey B. Serrano
                    </h3>

                    <p class="text-brand-yellow font-semibold mt-1 mb-3">
                        Owner / Chief Mechanic
                    </p>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Leads the business and oversees repair operations,
                        ensuring quality workmanship and dependable service.
                    </p>

                </div>


                <!-- Reynard -->
                <div class="bg-white rounded-xl shadow-sm p-6 text-center">

                    <img
                        src="{{ asset('images/team/reynard.png') }}"
                        alt="Reynard Soriano"
                        class="w-28 h-28 mx-auto mb-5 rounded-full object-cover"
                    >

                    <h3 class="text-lg font-bold text-black">
                        Reynard Soriano
                    </h3>

                    <p class="text-brand-yellow font-semibold mt-1 mb-3">
                        Service Team
                    </p>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Assists with equipment inspection, maintenance,
                        troubleshooting, and repair services.
                    </p>

                </div>


                <!-- Jerome -->
                <div class="bg-white rounded-xl shadow-sm p-6 text-center">

                    <img
                        src="{{ asset('images/team/jerome.png') }}"
                        alt="Jerome Arsenio"
                        class="w-28 h-28 mx-auto mb-5 rounded-full object-cover"
                    >

                    <h3 class="text-lg font-bold text-black">
                        Jerome Arsenio
                    </h3>

                    <p class="text-brand-yellow font-semibold mt-1 mb-3">
                        Service Team
                    </p>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Supports repair and maintenance operations for
                        forklifts and heavy equipment.
                    </p>

                </div>


                <!-- JB -->
                <div class="bg-white rounded-xl shadow-sm p-6 text-center">

                    <img
                        src="{{ asset('images/team/jb.png') }}"
                        alt="JB Bricia"
                        class="w-28 h-28 mx-auto mb-5 rounded-full object-cover"
                    >

                    <h3 class="text-lg font-bold text-black">
                        JB Bricia
                    </h3>

                    <p class="text-brand-yellow font-semibold mt-1 mb-3">
                        Service Team
                    </p>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Helps provide technical support, equipment servicing,
                        and repair assistance to customers.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- Call to Action -->
    <section class="bg-white border-t-4 border-brand-yellow">

        <div class="max-w-4xl mx-auto px-6 py-16 text-center">

            <h2 class="text-3xl font-bold mb-4 text-black">
                Ready to Book a Service?
            </h2>

            <p class="mb-8 text-slate-600">
                We operate strictly by appointment — reach out to schedule
                your repair.
            </p>

            <a
                href="{{ route('contact') }}"
                class="bg-brand-yellow text-black font-bold px-6 py-3 rounded-lg
                       hover:bg-yellow-400 transition inline-block"
            >
                Contact Us
            </a>

        </div>

    </section>

@endsection