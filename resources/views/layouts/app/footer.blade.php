<footer class="border-t-2 border-earth bg-navy text-cream">
    <div class="mx-auto  space-y-8 px-4 py-12 sm:px-6 lg:px-8">

        {{-- Logo and team information --}}
        <div
            class="flex flex-col items-center justify-between gap-6
                   text-center md:flex-row md:text-left"
        >
            {{-- Logo --}}
            <a href="#over" class="flex items-center gap-3">
                <div
                    class="flex h-11 w-11 shrink-0 items-center justify-center
                           rounded-xl bg-terracotta font-serif text-xl
                           font-bold text-white shadow-sm"
                >
                    M
                </div>

                <div class="text-left">
                    <span class="font-serif text-xl font-bold text-white">
                        Momentje
                    </span>

                    <p class="text-xs text-blush">
                        Studentenproject Thomas More • 2026
                    </p>
                </div>
            </a>

            {{-- Team --}}
            <div class="space-y-1 text-xs text-cream/80 md:text-right">
                <p>
                    <strong class="text-white">Teamleden:</strong>
                    Veerle Boeckx, Jef Coppens, Maxim De Cuyper
                    &amp; Ifra Raja Liaqat
                </p>

                <p>Ondernemerschap &amp; MVP-Validatie</p>
            </div>
        </div>

        {{-- Copyright and links --}}
        <div
            class="flex flex-col items-center justify-between gap-5
                   border-t border-white/10 pt-6 text-center
                   sm:flex-row sm:text-left"
        >
            <p class="text-xs text-cream/70">
                &copy; 2026 Momentje Startup Project. Alle rechten voorbehouden.
            </p>

            <nav
                aria-label="Footernavigatie"
                class="flex flex-wrap items-center justify-center gap-x-5
                       gap-y-3 text-xs font-bold text-white sm:justify-end"
            >
                <a href="#over" class="transition-colors hover:text-blush">
                    Over ons
                </a>

                <a
                    href="#hoe-het-werkt"
                    class="transition-colors hover:text-blush"
                >
                    Hoe het werkt
                </a>

                <a href="#enquete" class="transition-colors hover:text-blush">
                    Enquête
                </a>

                <button
                    type="button"
                    @click="docentOpen = true"
                    class="text-blush underline transition-colors hover:text-white"
                >
                    Docent / Examen info
                </button>
            </nav>
        </div>
    </div>
</footer>
