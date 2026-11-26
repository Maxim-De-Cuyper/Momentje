@php
    $activities = [
        [
            'icon' => 'cake',
            'title' => 'Doe een mini-proeverij.',
            'description' => 'Proef drie soorten chocolade of koekjes met je ogen dicht. Wie raadt de meeste smaken?',
        ],
        [
            'icon' => 'musical-note',
            'title' => 'Geef elkaar een liedje cadeau.',
            'description' => 'Kies elk één nummer voor de ander en vertel waarom je net dat liedje koos.',
        ],
        [
            'icon' => 'camera',
            'title' => 'Maak een gekke familiefoto na.',
            'description' => 'Zoek een oude foto en probeer dezelfde pose, blik of outfit na te bootsen.',
        ],
        [
            'icon' => 'fire',
            'title' => 'Maak samen iets lekkers.',
            'description' => 'Laat de bomma voordoen hoe ze haar wafels maakt, of laat het kleinkind zijn favoriete dessert leren maken aan de bomma.',
        ],
        [
            'icon' => 'sparkles',
            'title' => 'Leer elkaar een trucje.',
            'description' => 'Een kaarttruc, een servet vouwen of een foto maken met de zelfontspanner. Ieder leert de ander iets.',
        ],
        [
            'icon' => 'map',
            'title' => 'Wandel langs een plek van vroeger.',
            'description' => 'Loop even langs de oude school, het eerste huis of de vroegere buurtwinkel en vertel wat daar te beleven viel.',
        ],
        [
            'icon' => 'document-text',
            'title' => 'Speel ‘Van wie is dit verhaal?’',
            'description' => 'Schrijf elk een grappige herinnering op een briefje. Lees ze voor en raad wie wat heeft meegemaakt.',
        ],
        [
            'icon' => 'envelope',
            'title' => 'Schrijf samen een kaartje.',
            'description' => 'Kies iemand die jullie allebei kennen en schrijf elk één zin om die persoon te verrassen.',
        ],
    ];
@endphp
@php
    $questions = [
        'Wat was je lievelingsvak op school?',
        'Aan welke leraar heb je levendige herinneringen?',
        'Welk kattenkwaad haalde je uit als kind?',
        'Wat is je lievelingsboom en waarom?',
        'Welk liedje zing je altijd mee, ook al ken je maar de helft van de tekst?',
        'Welke bijnaam had je vroeger? Hoe ben je eraan gekomen?',
        'Met welke outfit van vroeger zou je vandaag nog durven buitenkomen?',
        'Wat heb je ooit gekookt dat écht anders uitdraaide dan gepland?',
        'Welke gewoonte van onze familie zou je aan iemand anders moeilijk kunnen uitleggen?',
        'Welke oude familiefoto zouden we samen opnieuw moeten maken?',
        'Welk woord of zinnetje zeg jij zo vaak dat de familie het intussen kan afmaken?',
        'Wat zou jij ons kunnen leren in vijf minuten?',
        'Als jij morgen de baas bent over het familiemenu, wat eten we dan?',
        'Als ons volgende familie-uitje een verrassingsuitstap is, waar neem jij ons dan mee naartoe?',
    ];
@endphp

<x-layouts::momentje title="Home">
    <!-- Main Content Area -->


    <!-- HERO SECTION (#over) - Pure White Background, Pure Black Body Text -->
    <section id="over" class="py-12 md:py-20 bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

                <!-- Left Column: Hero Text -->
                <div class="lg:col-span-7 space-y-6 text-left">
                    <h1 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold text-navy"
                        style="line-height: 1.4;">
                        Een strikje rond jullie <span class="text-terracotta">herinneringen</span>.
                    </h1>

                    <p class="text-lg md:text-xl text-black leading-relaxed">
                        Vind iets fijns om samen te doen, ontdek elkaars verhalen en bewaar wat jullie beleven in
                        een filmpje of een boek.
                    </p>

                    <!-- Solid Accessible Action Buttons -->
                    <div class="pt-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <a href="#enquete"
                           class="bg-terracotta hover:bg-[#a04e30] text-white px-8 py-4 rounded-2xl font-bold text-lg text-center shadow-md transition-all hover:shadow-lg">
                            Vul de korte enquête in (2 min)
                        </a>
                        <a href="#aanmelden"
                           class="bg-navy hover:bg-[#1a273b] text-white px-8 py-4 rounded-2xl font-bold text-lg text-center shadow-md transition-all hover:shadow-lg">
                            Blijf op de hoogte
                        </a>
                    </div>
                </div>

                <!-- Right Column: Interactive Sample Question Box -->
                <div class="lg:col-span-5">
                    <div class="bg-cream border-2 border-blush rounded-3xl p-6 sm:p-8 shadow-md space-y-6">

                        <div class="border-b-2 border-blush/60 pb-4 flex flex-wrap gap-2 items-center justify-between">
                            <span class="font-serif font-bold text-navy text-lg">Voorbeeld in de app</span>
                            <span
                                class="bg-white border border-terracotta text-terracotta font-bold text-xs px-3 py-1 rounded-full">Gespreksstarter</span>
                        </div>

                        <!-- Interactive Sample Question Card -->
                        <div
                            x-data="{
        questionIndex: 0,
        questions: [
            'Wat is je allermooiste jeugdherinnering uit de vakanties vroeger?',
            'Hoe hebben opa en oma elkaar voor het eerst ontmoet?',
            'Welk feestje in de familie zal je echt nooit meer vergeten?',
            'Welke raad over het leven zou je graag aan je (klein)kinderen meegeven?',
            'Wat was je allereerste job en wat kocht je met je eerste loon?'
        ]
    }"
                            class="bg-white border-2 border-terracotta rounded-2xl p-6 space-y-4 shadow-xs"
                        >
                            <div class="text-xs font-extrabold uppercase tracking-wider text-earth">
                                💡 Vraag van de dag
                            </div>

                            <p
                                x-text="questions[questionIndex]"
                                class="font-serif italic font-semibold text-black text-xl sm:text-2xl leading-snug"
                                wire:navigate
                            ></p>

                            <div class="pt-2">
                                <button
                                    type="button"
                                    @click="questionIndex = (questionIndex + 1) % questions.length"
                                    class="inline-flex items-center gap-2 rounded-xl bg-earth
                                    px-5 py-3 text-base font-bold text-white shadow-sm
                                    transition-colors hover:bg-[#6c4339]"
                                >
                                    <flux:icon name="arrows-right-left" class="size-5"/>
                                    Volgende vraag
                                </button>
                            </div>
                        </div>

                        <!-- Centered Enquête CTA Button directly on Cream Card -->
                        <div class="flex justify-center pt-1">
                            <a href="https://forms.gle/momentje-enquete" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center justify-center gap-3 bg-terracotta hover:bg-[#a04e30] text-white py-4 px-5 sm:px-10 rounded-2xl font-bold text-base sm:text-xl shadow-md transition-all hover:shadow-lg">
                                Naar de enquête
                                <span>➔</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- HOE WERKT MOMENTJE? SECTION (#hoe-het-werkt) - Soft Warm Cream Background with Warm Story Card -->
    <section id="hoe-het-werkt" class="py-16 md:py-24 bg-cream border-b border-blush/40">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- High-Contrast Centered White Card -->
            <div
                class="bg-white border-2 border-navy/20 rounded-3xl p-5 sm:p-12 shadow-sm max-w-3xl mx-auto text-left space-y-5 text-black text-lg leading-relaxed">
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-navy">
                    Heb je een <span class="text-terracotta">momentje</span>?
                </h2>

                <p>
                    Een momentje voor warme aanwezigheid met je ouders en familie?
                </p>

                <p>
                    Voor echte verbinding.<br>
                    Voor samen fijne dingen doen.<br>
                    Voor babbelen met elkaar.
                </p>

                <p>
                    Allemaal kleine gelukjes die je hart verwarmen.
                </p>

                <p>
                    Onze app <em>Momentje</em> is er om al jullie gelukjes te vangen:
                </p>

                <ul class="list-disc pl-6 space-y-2 text-black">
                    <li>gesprekjes in een tekst vatten,</li>
                    <li>die fijne uitstap op foto of video vastleggen,</li>
                    <li>dat wafelrecept van de bomma mooi vormgeven</li>
                    <li>... en zoveel meer.</li>
                </ul>

                <p>
                    Momentje verzamelt jullie gelukjes<br>
                    en tovert ze om tot een prachtig filmpje.<br>
                    Of tot een mooi boek. Om te koesteren.
                </p>

                <p class="font-serif font-bold text-xl md:text-2xl text-terracotta pt-2">
                    Momentjes met een strikje errond.
                </p>
            </div>

        </div>
    </section>

    <!-- GOOGLE ENQUÊTE SECTION (#enquete) - Pure White Background -->
    <section id="enquete" class="py-16 md:py-24 bg-white border-b border-slate-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white border-2 border-navy rounded-3xl p-5 sm:p-12 shadow-lg text-center space-y-6">

                    <span
                        class="text-xs font-extrabold uppercase tracking-widest text-earth bg-cream px-4 py-1.5 rounded-full border border-blush inline-block">
                        Uw mening telt
                    </span>

                <h2 class="font-serif text-3xl md:text-4xl font-bold text-navy">
                    Welke leuke <span class="text-terracotta">momentjes</span> wil jij beleven?
                </h2>

                <p class="text-lg text-black max-w-2xl mx-auto leading-relaxed">
                    Vertel het ons!
                </p>

                <div class="pt-4">
                    <a href="https://forms.gle/momentje-enquete" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-3 bg-terracotta hover:bg-[#a04e30] text-white py-4 px-5 sm:px-10 rounded-2xl font-bold text-base sm:text-xl shadow-md transition-all hover:shadow-lg">
                        Naar de enquête
                        <span>➔</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ZO WERKT MOMENTJE SECTION (#zo-werkt-momentje) - Soft Warm Cream Background -->
    <section id="zo-werkt-momentje" class="py-16 md:py-24 bg-cream border-b border-blush/40">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

            <!-- Section Header -->
            <div class="text-center space-y-3">
                    <span
                        class="text-xs font-extrabold uppercase tracking-widest text-earth bg-white px-4 py-1.5 rounded-full border border-blush inline-block">
                        Stap voor stap
                    </span>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-navy">
                    Zo werkt <span class="text-terracotta">Momentje</span>
                </h2>
            </div>

            <!-- 3 Horizontal Step Cards with Directional Arrows -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch relative">

                <!-- Step 1 Card -->
                <div
                    class="relative bg-white border-2 border-navy/20 rounded-3xl p-7 shadow-xs flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div
                            class="w-11 h-11 rounded-2xl bg-navy text-white flex items-center justify-center font-serif font-bold text-xl shadow-xs">
                            1
                        </div>
                        <h3 class="font-serif font-bold text-2xl text-navy">
                            Kies een gespreksonderwerp
                        </h3>
                        <p class="text-black text-base leading-relaxed">
                            Welk liedje brengt je 20 jaar terug in de tijd?
                        </p>
                    </div>

                    <!-- Arrow 1 -> 2 (Desktop right, Mobile down) -->
                    <div
                        class="hidden lg:flex absolute -right-7 top-1/2 -translate-y-1/2 z-10 w-10 h-10 bg-white border-2 border-navy rounded-full items-center justify-center text-navy shadow-sm"
                        aria-hidden="true">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </div>
                    <div class="flex lg:hidden justify-center pt-2 text-navy" aria-hidden="true">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 13l-5 5m0 0l-5-5m5 5V6"/>
                        </svg>
                    </div>
                </div>

                <!-- Step 2 Card -->
                <div
                    class="relative bg-white border-2 border-terracotta/40 rounded-3xl p-7 shadow-xs flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div
                            class="w-11 h-11 rounded-2xl bg-terracotta text-white flex items-center justify-center font-serif font-bold text-xl shadow-xs">
                            2
                        </div>
                        <h3 class="font-serif font-bold text-2xl text-navy">
                            Bewaar wat jullie beleven
                        </h3>
                        <p class="text-black italic text-base leading-relaxed">
                            De app vormt jullie gesprek om naar een tekst, trek een leuke foto
                        </p>
                    </div>

                    <!-- Arrow 2 -> 3 (Desktop right, Mobile down) -->
                    <div
                        class="hidden lg:flex absolute -right-7 top-1/2 -translate-y-1/2 z-10 w-10 h-10 bg-white border-2 border-terracotta rounded-full items-center justify-center text-terracotta shadow-sm"
                        aria-hidden="true">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </div>
                    <div class="flex lg:hidden justify-center pt-2 text-terracotta" aria-hidden="true">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 13l-5 5m0 0l-5-5m5 5V6"/>
                        </svg>
                    </div>
                </div>

                <!-- Step 3 Card -->
                <div
                    class="relative bg-white border-2 border-earth/40 rounded-3xl p-7 shadow-xs flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div
                            class="w-11 h-11 rounded-2xl bg-earth text-white flex items-center justify-center font-serif font-bold text-xl shadow-xs">
                            3
                        </div>
                        <h3 class="font-serif font-bold text-2xl text-navy">
                            Kijk er samen op terug
                        </h3>
                        <p class="text-black italic text-base leading-relaxed">
                            Bekijk jullie momentje in het fotoboek
                        </p>
                    </div>
                </div>

            </div>

            <!-- Book Page Example Box: Photo + Quote -->
            <div class="bg-white border-2 border-navy/25 rounded-3xl p-6 sm:p-10 shadow-md space-y-6">

                <!-- Top Label Bar -->
                <div
                    class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 border-b-2 border-slate-200 pb-4">
                    <h3 class="font-serif font-bold text-xl sm:text-2xl text-navy">
                        Voorbeeld van een pagina uit het boek: foto + quote
                    </h3>
                    <span
                        class="inline-block self-start sm:self-auto text-xs font-extrabold uppercase tracking-wider text-earth bg-cream px-3.5 py-1.5 rounded-full border border-blush">
                            Momentjesboek • Pagina 14
                        </span>
                </div>

                <!-- Two-Page / Split Book Spread Layout -->
                <div
                    class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center bg-cream/60 border border-blush rounded-2xl p-6 sm:p-8">

                    <!-- Left Side: Framed Polaroid / Photo Card -->
                    <div class="md:col-span-5">
                        <div
                            class="bg-white p-3 pb-6 rounded-xl shadow-md border border-blush/80 transform -rotate-1 space-y-3">
                            <div
                                class="aspect-4/3 w-full rounded-lg bg-cream overflow-hidden border border-blush/50 flex items-center justify-center">
                                <!-- Warm Family Music & Coffee SVG Illustration -->
                                <svg viewBox="0 0 320 240" class="w-full h-full" role="img"
                                     aria-label="Illustratie van een gezellig koffiemomentje met muziek en familie">
                                    <rect width="320" height="240" fill="#FBF3EF"/>
                                    <!-- Warm window & sunbeams -->
                                    <rect x="28" y="24" width="90" height="105" rx="10" fill="#FFFFFF"
                                          stroke="#D2B7B1" stroke-width="3"/>
                                    <line x1="73" y1="24" x2="73" y2="129" stroke="#D2B7B1" stroke-width="2.5"/>
                                    <line x1="28" y1="76" x2="118" y2="76" stroke="#D2B7B1" stroke-width="2.5"/>
                                    <circle cx="94" cy="48" r="12" fill="#B85D3B" opacity="0.25"/>
                                    <!-- Floating music notes -->
                                    <g fill="#B85D3B">
                                        <circle cx="178" cy="58" r="5"/>
                                        <path d="M182 58V34l14-4v24" fill="none" stroke="#B85D3B" stroke-width="2.5"
                                              stroke-linecap="round"/>
                                        <circle cx="192" cy="54" r="5"/>
                                    </g>
                                    <g fill="#263650">
                                        <circle cx="236" cy="44" r="4.5"/>
                                        <path d="M240 44V24" stroke="#263650" stroke-width="2.5"
                                              stroke-linecap="round"/>
                                        <path d="M240 24c6 2 8 6 8 10" fill="none" stroke="#263650"
                                              stroke-width="2.5" stroke-linecap="round"/>
                                    </g>
                                    <!-- Grandmother & Family Member Silhouettes -->
                                    <!-- Left figure (Grandma) -->
                                    <circle cx="115" cy="112" r="22" fill="#D2B7B1"/>
                                    <circle cx="115" cy="92" r="11" fill="#845448"/>
                                    <path d="M80 176c0-22 16-36 35-36s35 14 35 36" fill="#263650"/>
                                    <!-- Right figure (Family member) -->
                                    <circle cx="205" cy="108" r="22" fill="#D2B7B1"/>
                                    <path d="M184 102c4-15 38-15 42 0" fill="#845448"/>
                                    <path d="M168 176c0-24 17-38 37-38s37 14 37 38" fill="#B85D3B"/>
                                    <!-- Warm heart between them -->
                                    <path d="M160 112c-4-6-12-6-15 0-3 6 4 12 15 20 11-8 18-14 15-20-3-6-11-6-15 0z"
                                          fill="#B85D3B"/>
                                    <!-- Cozy Coffee Table & Cups -->
                                    <rect x="45" y="174" width="230" height="12" rx="6" fill="#845448"/>
                                    <rect x="70" y="186" width="12" height="40" fill="#845448"/>
                                    <rect x="238" y="186" width="12" height="40" fill="#845448"/>
                                    <!-- Coffee cups & cake plate -->
                                    <rect x="112" y="158" width="18" height="16" rx="3" fill="#FFFFFF"
                                          stroke="#263650" stroke-width="2"/>
                                    <rect x="190" y="158" width="18" height="16" rx="3" fill="#FFFFFF"
                                          stroke="#263650" stroke-width="2"/>
                                    <ellipse cx="160" cy="171" rx="22" ry="4" fill="#FFFFFF" stroke="#D2B7B1"
                                             stroke-width="2"/>
                                    <path d="M148 169l12-12 12 12z" fill="#B85D3B"/>
                                </svg>
                            </div>
                            <p class="font-serif italic text-center text-sm font-semibold text-navy">
                                Zondagnamiddag bij oma &amp; opa • Oktober 2026
                            </p>
                        </div>
                    </div>

                    <!-- Right Side: Quote & Story Details -->
                    <div class="md:col-span-7 space-y-4">
                            <span
                                class="inline-block text-xs font-extrabold uppercase tracking-wider text-earth bg-white px-3 py-1 rounded-full border border-blush">
                                🎵 Muziek &amp; Herinneringen
                            </span>

                        <h4 class="font-serif font-bold text-navy text-xl sm:text-2xl">
                            Welk liedje brengt je 20 jaar terug in de tijd?
                        </h4>

                        <blockquote
                            class="border-l-4 border-terracotta pl-4 italic font-serif text-lg sm:text-xl text-black leading-relaxed">
                            “Zodra ik ‘La Vie en Rose’ hoor, sta ik meteen weer in de danszaal van het dorp in 1974.
                            Jullie opa vroeg me toen ten dans met zijn zondagse kostuum aan — en we zijn nooit meer
                            gestopt met lachen.”
                        </blockquote>

                        <p class="text-sm font-bold text-earth pt-1">
                            — Verteld door Bomma Maria (79) • Opgenomen tijdens ons koffiemomentje
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- CADEAU & FAMILIEKEUZE SECTION (#cadeau) - Pure White Background, 2-Column Layout -->
    <section id="cadeau" class="py-16 md:py-24 bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch">

                <!-- Left Column (6 cols): Het mooiste cadeau mini-form -->
                <div
                    class="md:col-span-6 bg-cream border-2 border-blush rounded-3xl p-5 sm:p-8 shadow-sm flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                            <span
                                class="text-xs font-extrabold uppercase tracking-widest text-earth bg-white px-3.5 py-1 rounded-full border border-blush inline-block">
                                Deel jouw herinnering
                            </span>
                        <h2 class="font-serif font-bold text-2xl md:text-3xl text-navy">
                            Het mooiste <span class="text-terracotta">cadeau</span>
                        </h2>

                        <p class="text-base text-black">Welke herinnering wil jij graag bewaren? De mogelijkheid om
                            verhalen te versturen komt later beschikbaar.</p>
                    </div>
                </div>

                <!-- Right Column (6 cols): Cadeau geven, zelf gebruiken of krijgen -->
                <div
                    class="md:col-span-6 bg-white border-2 border-navy rounded-3xl p-5 sm:p-8 shadow-sm flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                            <span
                                class="text-xs font-extrabold uppercase tracking-widest text-earth bg-cream px-3.5 py-1 rounded-full border border-blush inline-block">
                                Jouw voorkeur
                            </span>
                        <h2 class="font-serif font-bold text-2xl md:text-3xl text-navy leading-snug">
                            Zou je <span class="text-terracotta">Momentje</span> zelf gebruiken, cadeau geven of
                            graag krijgen?
                        </h2>
                        <p class="text-base md:text-lg text-black leading-relaxed">
                            Of je nu samen met je ouders herinneringen wilt vastleggen, een betekenisvol geschenk
                            zoekt voor een verjaardag of zelf graag zo'n boek zou ontvangen: we horen het graag van
                            je!
                        </p>
                    </div>

                    <div class="pt-4">
                        <a href="https://forms.gle/momentje-enquete"
                           class="w-full inline-flex items-center justify-center gap-2 bg-navy hover:bg-[#1a273b] text-white py-4 px-6 rounded-2xl font-bold text-lg text-center shadow-md transition-all hover:shadow-lg">
                            <span>Vertel ons wat bij jouw familie past</span>
                            <span>➔</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- INSPIRATIE & IK WIL IETS DOEN SECTION (#inspiratie) - Soft Warm Cream Background -->
    <section
        id="inspiratie"
        class="border-b border-blush/40 bg-cream py-16 md:py-24"
    >
        <div class="mx-auto max-w-7xl space-y-12 px-4 sm:px-6 lg:px-8">

            {{-- Introductie --}}
            <div
                class="mx-auto max-w-4xl space-y-5 rounded-3xl border-2
                   border-navy/20 bg-white p-8 text-left text-lg
                   leading-relaxed text-black shadow-sm sm:p-12"
            >
            <span
                class="inline-block rounded-full border border-blush bg-cream
                       px-4 py-1.5 text-xs font-extrabold uppercase
                       tracking-widest text-earth"
            >
                Even stilstaan
            </span>

                <h2
                    class="font-serif text-3xl font-bold leading-snug
                       text-navy md:text-4xl"
                >
                    Wanneer was de laatste keer dat je even tijd nam om samen
                    te zijn met je ouders en familie?
                </h2>

                <div class="space-y-3 font-medium text-black">
                    <p>Wat weet je eigenlijk echt over hen?</p>
                    <p>Wanneer hadden jullie samen dolle pret?</p>
                    <p>Weet je welke muziek hun absolute favoriet is?</p>
                    <p>Weet je wat hen bezighoudt?</p>
                    <p>Dat recept voor wafels dat nog van overgrootmoeder kwam?</p>
                </div>

                <p
                    class="pt-2 font-serif text-xl font-bold text-terracotta
                       md:text-2xl"
                >
                    Vind hier alvast wat inspiratie!
                </p>
            </div>

            {{-- Carrousel --}}
            <div
                x-data="{
                current: 0,
                total: {{ count($activities) }},

                previous() {
                    this.current = (this.current - 1 + this.total) % this.total;
                },

                next() {
                    this.current = (this.current + 1) % this.total;
                },

                sendIdea(title, description) {
                    ideaType = 'Activiteit';
                    ideaText = title + ' ' + description;
                    ideaOpen = true;
                }
            }"
                class="space-y-6"
                aria-label="Inspiratie voor activiteiten"
                aria-roledescription="carrousel"
            >
                {{-- Titel en knoppen --}}
                <div
                    class="flex flex-col gap-4 border-b-2 border-blush/60 pb-4
                       sm:flex-row sm:items-end sm:justify-between"
                >
                    <div>
                    <span
                        class="text-xs font-extrabold uppercase
                               tracking-widest text-earth"
                    >
                        Samen op pad &amp; bezig zijn
                    </span>

                        <h3
                            class="mt-1 font-serif text-2xl font-bold
                               text-navy md:text-3xl"
                        >
                            Ik wil iets
                            <span class="text-terracotta">doen</span>
                        </h3>

                        <p class="mt-2 text-sm font-bold text-black">
                            Kies een activiteit en stuur het idee naar jezelf.
                        </p>
                    </div>

                    <div class="flex items-center gap-3">
                        <button
                            type="button"
                            @click="previous()"
                            aria-label="Vorige activiteit"
                            class="flex h-11 w-11 items-center justify-center
                               rounded-full border-2 border-navy bg-white
                               text-xl font-bold text-navy transition-colors
                               hover:bg-navy hover:text-white"
                        >
                            <span aria-hidden="true">←</span>
                        </button>

                        <span
                            class="min-w-14 text-center text-sm font-bold text-navy"
                            aria-live="polite"
                            x-text="`${current + 1} / ${total}`"
                        ></span>

                        <button
                            type="button"
                            @click="next()"
                            aria-label="Volgende activiteit"
                            class="flex h-11 w-11 items-center justify-center
                               rounded-full border-2 border-navy bg-white
                               text-xl font-bold text-navy transition-colors
                               hover:bg-navy hover:text-white"
                        >
                            <span aria-hidden="true">→</span>
                        </button>
                    </div>
                </div>

                {{-- Elke kaart is een Blade-component --}}
                <div
                    class="relative mx-auto h-[440px] w-full max-w-6xl
                       overflow-hidden sm:h-[440px]"
                >
                    @foreach ($activities as $index => $activity)
                        <x-activity-card
                            :index="$index"
                            :icon="$activity['icon']"
                            :title="$activity['title']"
                            :description="$activity['description']"
                        />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- IK WIL EEN VERHAAL HOREN SECTION (#verhalen) - Pure White Background (14 Story Prompt Tiles) -->
    @php
        $questions = [
            'Wat was je lievelingsvak op school?',
            'Aan welke leraar heb je levendige herinneringen?',
            'Welk kattenkwaad haalde je uit als kind?',
            'Wat is je lievelingsboom en waarom?',
            'Welk liedje zing je altijd mee, ook al ken je maar de helft van de tekst?',
            'Welke bijnaam had je vroeger? Hoe ben je eraan gekomen?',
            'Met welke outfit van vroeger zou je vandaag nog durven buitenkomen?',
            'Wat heb je ooit gekookt dat écht anders uitdraaide dan gepland?',
            'Welke gewoonte van onze familie zou je aan iemand anders moeilijk kunnen uitleggen?',
            'Welke oude familiefoto zouden we samen opnieuw moeten maken?',
            'Welk woord of zinnetje zeg jij zo vaak dat de familie het intussen kan afmaken?',
            'Wat zou jij ons kunnen leren in vijf minuten?',
            'Als jij morgen de baas bent over het familiemenu, wat eten we dan?',
            'Als ons volgende familie-uitje een verrassingsuitstap is, waar neem jij ons dan mee naartoe?',
        ];
    @endphp

    <section
        id="verhalen"
        class="border-b border-slate-200 bg-white py-16 md:py-24"
    >
        <div class="mx-auto max-w-6xl space-y-10 px-4 sm:px-6 lg:px-8">

            {{-- Title --}}
            <div class="space-y-3 text-center">
            <span
                class="inline-block rounded-full border border-blush bg-cream
                       px-4 py-1.5 text-xs font-extrabold uppercase
                       tracking-widest text-earth"
            >
                Gespreksstarters
            </span>

                <h2 class="font-serif text-3xl font-bold text-navy md:text-4xl">
                    Ik wil een verhaal
                    <span class="text-terracotta">horen</span>
                </h2>

                <p class="mx-auto max-w-xl text-base text-black md:text-lg">
                    Trek een vraag uit de doos en ontdek een nieuw verhaal.
                </p>
            </div>

            {{-- Story box --}}
            <div
                x-data="{
                questions: @js($questions),
                currentIndex: null,
                question: '',
                showQuestion: false,
                timer: null,

                drawQuestion() {
                    if (this.timer) {
                        clearTimeout(this.timer);
                    }

                    this.showQuestion = false;

                    this.timer = setTimeout(() => {
                        let nextIndex;

                        do {
                            nextIndex = Math.floor(
                                Math.random() * this.questions.length
                            );
                        } while (
                            this.questions.length > 1
                            && nextIndex === this.currentIndex
                        );

                        this.currentIndex = nextIndex;
                        this.question = this.questions[nextIndex];
                        this.showQuestion = true;
                        this.timer = null;
                    }, 250);
                },

                sendQuestion() {
                    ideaType = 'Gespreksvraag';
                    ideaText = this.question;
                    ideaOpen = true;
                }
            }"
                class="mx-auto max-w-xl"
            >
                <div class="mx-auto flex max-w-lg flex-col items-center">

                    {{-- Question card --}}
                    <div
                        class="relative h-[22rem] w-full overflow-hidden sm:h-[24rem]"
                    >
                        <div
                            x-cloak
                            x-show="showQuestion"
                            x-transition:enter="transition duration-500 ease-out"
                            x-transition:enter-start="translate-y-32 opacity-0"
                            x-transition:enter-end="translate-y-0 opacity-100"
                            x-transition:leave="transition duration-200 ease-in"
                            x-transition:leave-start="translate-y-0 opacity-100"
                            x-transition:leave-end="translate-y-24 opacity-0"
                            class="absolute inset-x-3 bottom-0 sm:inset-x-12"
                        >
                            <x-story-card
                                :dynamic="true"
                                :show-button="false"
                            />
                        </div>
                    </div>

                    {{-- Box --}}
                    <div class="relative z-10 w-full">

                        {{-- Top edge --}}
                        <div
                            class="relative mx-3 h-8 rounded-t-xl
                               border border-[#9d4b31] bg-[#d18468] shadow-sm"
                            aria-hidden="true"
                        >
                            <div
                                class="absolute inset-x-8 top-2.5 h-2
                                   rounded-full bg-[#783e31]/70"
                            ></div>
                        </div>

                        {{-- Front --}}
                        <div
                            class="relative -mt-1 overflow-hidden rounded-b-3xl
                               rounded-t-md border border-[#9d4b31]
                               bg-terracotta px-6 pb-9 pt-8
                               text-center shadow-xl"
                        >
                            <div
                                class="pointer-events-none absolute inset-3
                                   rounded-b-2xl rounded-t-sm
                                   border border-white/20"
                                aria-hidden="true"
                            ></div>

                            <div class="relative space-y-4">
                                <div
                                    class="mx-auto flex h-12 w-12 items-center
                                       justify-center rounded-full
                                       border border-white/40 text-white"
                                    aria-hidden="true"
                                >
                                    <flux:icon
                                        name="sparkles"
                                        class="size-6 !text-current"
                                    />
                                </div>

                                <div class="space-y-1">
                                    <h3
                                        class="font-serif text-2xl font-bold
                                           text-white sm:text-3xl"
                                    >
                                        De verhalenbox
                                    </h3>

                                    <p class="text-sm text-white/90">
                                        Kleine vragen, mooie verhalen.
                                    </p>
                                </div>

                                <button
                                    type="button"
                                    @click="drawQuestion()"
                                    class="inline-flex items-center justify-center gap-2
                                       rounded-xl bg-white px-6 py-3
                                       text-sm font-bold text-navy shadow-sm
                                       transition-colors hover:bg-cream"
                                >
                                    <flux:icon
                                        name="arrow-up"
                                        class="size-5 !text-current"
                                    />

                                    <span
                                        x-text="currentIndex === null
                                        ? 'Trek een vraag'
                                        : 'Trek een andere vraag'"
                                    ></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Email button underneath the box --}}
                    <div
                        class="mt-6 text-center transition-opacity duration-200"
                        :class="showQuestion ? 'opacity-100' : 'invisible opacity-0'"
                        :aria-hidden="!showQuestion"
                    >
                        <button
                            type="button"
                            @click="sendQuestion()"
                            :disabled="!showQuestion"
                            class="inline-flex items-center justify-center gap-2
               rounded-xl border-2 border-navy bg-white
               px-6 py-3 text-sm font-bold text-navy
               transition-colors hover:bg-navy hover:text-white"
                        >
                            <flux:icon
                                name="envelope"
                                class="size-5 !text-current"
                            />

                            Stuur deze vraag via mail
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @push('page-extras')
        <!-- PRINTABLE A5 FLYER MODAL -->
        <div id="flyer-modal" x-cloak x-show="flyerOpen" @keydown.escape.window="flyerOpen = false"
             class="fixed inset-0 z-50 bg-black/70 backdrop-blur-xs flex items-center justify-center p-4">
            <div
                class="bg-white border-2 border-navy max-w-2xl w-full rounded-3xl p-4 sm:p-6 md:p-8 space-y-6 relative max-h-[90dvh] overflow-y-auto shadow-2xl">
                <button @click="flyerOpen = !flyerOpen"
                        class="absolute top-4 right-4 w-10 h-10 bg-cream border border-slate-300 rounded-full flex items-center justify-center text-navy font-bold hover:bg-blush transition-colors text-lg">
                    ✕
                </button>

                <div class="text-center space-y-2 border-b-2 border-slate-200 pb-3">
                    <span class="text-xs font-bold uppercase tracking-widest text-earth">Promotieflyer Preview</span>
                    <h3 class="font-serif font-bold text-2xl text-navy">Momentje Infoflyer (A5 Formaatschets)</h3>
                </div>

                <div class="bg-cream border border-blush p-6 rounded-2xl space-y-6 text-black">
                    <div class="text-center border-b-2 border-blush/50 pb-4">
                        <h2 class="font-serif font-bold text-3xl text-navy">Momentje</h2>
                        <p class="text-xs text-earth font-bold uppercase tracking-wider">Warme momenten & mooie
                            herinneringen</p>
                    </div>

                    <div class="space-y-3 text-base leading-relaxed text-black">
                        <p><strong>Wilt u graag meer betekenisvolle momenten beleven met uw (klein)kinderen of
                                ouders?</strong></p>
                        <p>Momentje is een nieuw initiatief dat families helpt om boeiende gesprekken te voeren,
                            originele
                            activiteiten te ondernemen en al die herinneringen te bundelen in een prachtig
                            herinneringsboek
                            of digitale montage.</p>
                    </div>

                    <div class="bg-white p-4 rounded-xl border border-blush space-y-2 text-sm text-black">
                        <h4 class="font-bold text-navy text-base">Wat vindt u in Momentje?</h4>
                        <ul class="list-disc list-inside space-y-1 text-black">
                            <li>Leuke gespreksstarters voor familiefeestjes</li>
                            <li>Inspiratie voor activiteiten met ouders & kleinkinderen</li>
                            <li>Foto's, video's en spraakopnames op één centrale plek</li>
                            <li>Gepersonaliseerd gedrukt Momentjesboek</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-navy p-4 rounded-xl flex items-center justify-between text-xs">
                        <div>
                            <p class="font-bold text-navy text-sm">Help ons studentenproject!</p>
                            <p class="text-black">Scan de QR-code of vul de vragenlijst online in</p>
                        </div>
                        <div
                            class="w-14 h-14 bg-navy text-white font-bold text-[10px] flex items-center justify-center rounded-lg p-1 text-center">
                            [ QR CODE ]
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap justify-end gap-3 pt-2">
                    <button @click="window.print()"
                            class="bg-navy hover:bg-[#1a273b] text-white px-6 py-3 rounded-xl font-bold text-sm">
                        🖨️ Afdrukken
                    </button>
                    <button @click="flyerOpen = !flyerOpen"
                            class="bg-terracotta hover:bg-[#a04e30] text-white px-6 py-3 rounded-xl font-bold text-sm">
                        Sluiten
                    </button>
                </div>
            </div>
        </div>

        <!-- DOCENT / ASSIGNMENT EXPLANATION MODAL POPUP -->
        <div id="docent-modal" x-cloak x-show="docentOpen" @keydown.escape.window="docentOpen = false"
             class="fixed inset-0 z-50 bg-black/70 backdrop-blur-xs flex items-center justify-center p-4">
            <div
                class="bg-white border-2 border-navy max-w-3xl w-full rounded-3xl p-4 sm:p-6 md:p-8 space-y-6 relative max-h-[90dvh] overflow-y-auto shadow-2xl">
                <button @click="docentOpen = !docentOpen"
                        class="absolute top-4 right-4 w-10 h-10 bg-cream border border-slate-300 rounded-full flex items-center justify-center text-navy font-bold hover:bg-blush transition-colors text-lg">
                    ✕
                </button>

                <div class="border-b-2 border-slate-200 pb-4">
                    <span
                        class="text-xs font-bold uppercase tracking-widest text-earth">Cursusevaluatie & Opdracht</span>
                    <h3 class="font-serif font-bold text-2xl md:text-3xl text-navy">Landing Page Analyse &
                        Strategie</h3>
                    <p class="text-sm font-bold text-black pt-1">Verplichte verantwoording voor het opleidingsonderdeel
                        Ondernemerschap</p>
                </div>

                <div class="space-y-6 text-base text-black leading-relaxed">

                    <div class="bg-cream border border-blush p-6 rounded-2xl space-y-3">
                        <h4 class="font-serif font-bold text-navy text-lg">1. Kanaalstrategie: Hoe sturen we bezoekers
                            naar
                            de landing page?</h4>
                        <ul class="list-disc list-inside space-y-2 text-black">
                            <li><strong>Offline Flyers:</strong> Verspreiding van fysieke A5-flyers bij lokale bakkers,
                                zorgcentra, bibliotheken en seniorenverenigingen (zoals Okra en Ferm) voorzien van een
                                directe QR-code.
                            </li>
                            <li><strong>Social Media Campaigns (Meta & Google Ads):</strong> Doelgerichte advertenties
                                op
                                Facebook en Instagram gericht op volwassen kinderen van 40-60 jaar in Vlaanderen met
                                interesse in familie, mantelzorg en cadeaus.
                            </li>
                            <li><strong>WhatsApp-netwerk & Mond-tot-mond:</strong> Directe deling in
                                familie-WhatsAppgroepen
                                en via ambassadeurs en proefpersonen uit de interviews (zoals Sofie).
                            </li>
                        </ul>
                    </div>

                    <div class="bg-cream border border-blush p-6 rounded-2xl space-y-3">
                        <h4 class="font-serif font-bold text-navy text-lg">2. Engagement Metrics: Hoe meten we
                            betrokkenheid
                            & interesse?</h4>
                        <ul class="list-disc list-inside space-y-2 text-black">
                            <li><strong>Conversie naar Enquête (Click-through Rate):</strong> Het aantal bezoekers dat
                                doorklikt op de knop "Open de Google Enquête".
                            </li>
                            <li><strong>Inschrijvingen (Lead Capture Rate):</strong> Het aantal ingevulde formulieren in
                                de
                                "Blijf op de hoogte" sectie.
                            </li>
                            <li><strong>Voorkeursanalyse:</strong> De verhouding tussen de keuzes van bezoekers voor een
                                gedrukt Momentjesboek versus een digitale montage.
                            </li>
                            <li><strong>Interacties:</strong> Het aantal keren dat bezoekers doorklikken op de
                                interactieve
                                gespreksstarter of de flyer-modal openen.
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-navy p-6 rounded-2xl space-y-3">
                        <h4 class="font-serif font-bold text-navy text-lg">3. Verplichte Elementen Controlelijst</h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm font-bold text-black">
                            <div class="flex items-center gap-2">
                                <span class="text-terracotta text-lg">✓</span>
                                <span>Compelling Headline: Aanwezig</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-terracotta text-lg">✓</span>
                                <span>Short Description: Aanwezig</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-terracotta text-lg">✓</span>
                                <span>Call-to-Action Buttons: Aanwezig</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-terracotta text-lg">✓</span>
                                <span>Contact & Sign-up Form: Aanwezig</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex justify-end pt-2">
                    <button @click="docentOpen = !docentOpen"
                            class="bg-navy hover:bg-[#1a273b] text-white px-8 py-3.5 rounded-xl font-bold text-base">
                        Sluiten
                    </button>
                </div>
            </div>
        </div>

        <div x-cloak x-show="ideaOpen" @keydown.escape.window="ideaOpen = false"
             class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 p-4" role="dialog" aria-modal="true"
             aria-label="Stuur dit idee via mail">
            <div @click.outside="ideaOpen = false"
                 class="w-full max-w-md max-h-[90dvh] overflow-y-auto rounded-3xl bg-white p-5 sm:p-8">
                <div class="space-y-5">
                    <flux:heading size="lg">Stuur dit idee via mail</flux:heading>
                    <p x-text="ideaText"></p>
                    <p class="text-sm">Je e-mailprogramma opent met dit idee. Kies daar zelf een ontvanger.</p>
                    <flux:button variant="primary"
                                 x-on:click="window.location.href = 'mailto:?subject=' + encodeURIComponent(ideaType + ' van Momentje') + '&body=' + encodeURIComponent(ideaText); ideaOpen = false">
                        Open e-mail
                    </flux:button>
                </div>
            </div>
        </div>
    @endpush
</x-layouts::momentje>
