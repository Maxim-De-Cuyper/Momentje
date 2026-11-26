{{-- Announcement bar --}}
<div class="bg-navy px-3 py-2 text-center text-white sm:px-4">
    <div
        class="mx-auto flex max-w-6xl flex-wrap items-center justify-center
               gap-x-2 gap-y-1 text-xs font-bold md:text-sm"
    >
        <span
            class="h-2 w-2 shrink-0 animate-pulse rounded-full bg-terracotta"
            aria-hidden="true"
        ></span>

        <span>
            Studentenproject Thomas More — Team Momentje

            <span class="hidden sm:inline">
                (Veerle, Jef, Maxim &amp; Ifra)
            </span>
        </span>

        <button
            type="button"
            @click="docentOpen = true"
            class="underline transition-colors hover:text-blush"
        >
            Bekijk verantwoording &amp; analyse
        </button>
    </div>
</div>

{{-- Navigation --}}
<header
    x-data="{ scrolled: window.scrollY > 24 }"
    @scroll.window.passive="scrolled = window.scrollY > 24"
    :class="scrolled
        ? 'bg-cream border-blush/40 shadow-sm'
        : 'bg-transparent border-transparent'"
    class="sticky top-0 z-40 border-b-2
           transition-[background-color,border-color,box-shadow] duration-300"
>
    <div
        class="mx-auto flex h-20 max-w-7xl items-center justify-between
               gap-3 px-4 sm:px-6 lg:px-8"
    >
        {{-- Logo --}}
        <a
            href="#over"
            class="flex min-w-0 items-center gap-2 sm:gap-3"
            aria-label="Momentje: naar het begin van de pagina"
        >
            <div
                class="flex h-10 w-11 shrink-0 items-center justify-center
                       rounded-xl border border-blush/80 bg-white p-1.5
                       shadow-sm sm:h-11 sm:w-12 sm:rounded-2xl"
            >
                <svg
                    viewBox="0 0 240 120"
                    class="h-full w-full"
                    aria-hidden="true"
                >
                    <defs>
                        <linearGradient
                            id="lemniscaatGradHeader"
                            x1="0%"
                            y1="0%"
                            x2="0%"
                            y2="100%"
                        >
                            <stop offset="0%" stop-color="#B85D3B"/>
                            <stop offset="52%" stop-color="#764B45"/>
                            <stop offset="100%" stop-color="#263650"/>
                        </linearGradient>
                    </defs>

                    <path
                        d="M 120 60 C 90 18, 22 18, 22 60 C 22 102, 90 102, 120 60 C 150 18, 218 18, 218 60 C 218 102, 150 102, 120 60 Z"
                        fill="none"
                        stroke="url(#lemniscaatGradHeader)"
                        stroke-width="18"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </div>

            <div class="flex min-w-0 flex-col">
                <span
                    class="font-serif text-xl font-bold tracking-tight
                           text-navy sm:text-2xl"
                >
                    Momentje
                </span>

                <span
                    class="hidden text-[10px] font-bold uppercase
                           tracking-wider text-earth sm:block"
                >
                    Warme familieherinneringen
                </span>
            </div>
        </a>

        {{-- Desktop navigation --}}
        <nav
            aria-label="Hoofdnavigatie"
            class="hidden items-center gap-4 whitespace-nowrap text-sm
                   font-bold text-navy xl:flex"
        >
            <a
                href="#hoe-het-werkt"
                class="transition-colors hover:text-terracotta"
            >
                Over Momentje
            </a>

            <a
                href="#enquete"
                class="transition-colors hover:text-terracotta"
            >
                Enquête
            </a>

            <a
                href="#zo-werkt-momentje"
                class="transition-colors hover:text-terracotta"
            >
                Hoe het werkt
            </a>

            <a
                href="#inspiratie"
                class="transition-colors hover:text-terracotta"
            >
                Inspiratie
            </a>

            <a
                href="#verhalen"
                class="transition-colors hover:text-terracotta"
            >
                Verhalen
            </a>

            <a
                href="#flyer"
                class="transition-colors hover:text-terracotta"
            >
                Infoflyer
            </a>
        </nav>

        {{-- Desktop button --}}
        <div class="hidden shrink-0 xl:block">
            <flux:button
                href="#aanmelden"
                class="!border-terracotta !bg-terracotta !text-white
                       hover:!bg-[#a04e30]"
            >
                Blijf op de hoogte
            </flux:button>
        </div>

        {{-- Mobile and tablet menu --}}
        <div class="shrink-0 xl:hidden">
            <flux:dropdown position="bottom" align="end">
                <flux:button
                    icon="bars-3"
                    aria-label="Open navigatiemenu"
                    class="!border-blush !bg-white !text-navy
                   hover:!border-terracotta hover:!bg-cream"
                />

                <flux:menu
                    class="momentje-menu !border-blush !bg-cream !p-2 !shadow-lg"
                >
                    <flux:menu.item
                        href="#hoe-het-werkt"
                        cclass="!text-navy
           hover:!bg-blush/40
           focus:!bg-blush/40 focus:!text-navy
           active:!bg-blush active:!text-navy"
                    >
                        Over Momentje
                    </flux:menu.item>

                    <flux:menu.item
                        href="#enquete"
                        class="!text-navy
           hover:!bg-blush/40
           focus:!bg-blush/40 focus:!text-navy
           active:!bg-blush active:!text-navy"
                    >
                        Enquête
                    </flux:menu.item>

                    <flux:menu.item
                        href="#zo-werkt-momentje"
                        class="!text-navy
           hover:!bg-blush/40
           focus:!bg-blush/40 focus:!text-navy
           active:!bg-blush active:!text-navy"
                    >
                        Hoe het werkt
                    </flux:menu.item>

                    <flux:menu.item
                        href="#inspiratie"
                        class="!text-navy
           hover:!bg-blush/40
           focus:!bg-blush/40 focus:!text-navy
           active:!bg-blush active:!text-navy"
                    >
                        Inspiratie
                    </flux:menu.item>

                    <flux:menu.item
                        href="#verhalen"
                        class="!text-navy
           hover:!bg-blush/40
           focus:!bg-blush/40 focus:!text-navy
           active:!bg-blush active:!text-navy"
                    >
                        Verhalen
                    </flux:menu.item>

                    <flux:menu.item
                        href="#flyer"
                        class="!text-navy
           hover:!bg-blush/40
           focus:!bg-blush/40 focus:!text-navy
           active:!bg-blush active:!text-navy"
                    >
                        Infoflyer
                    </flux:menu.item>

                    <flux:menu.item
                        href="#aanmelden"
                        class="!bg-terracotta !font-bold !text-white
                       hover:!bg-[#a04e30]"
                    >
                        Blijf op de hoogte
                    </flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </div>
    </div>
</header>
