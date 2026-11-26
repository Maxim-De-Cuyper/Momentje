@props([
    'question' => null,
    'dynamic' => false,
    'showButton' => true,
])

<div
    class="relative overflow-hidden rounded-t-2xl border border-blush
           bg-white px-6 py-8 text-center shadow-lg sm:px-8 sm:py-10"
>
    {{-- Decorative top line --}}
    <div
        class="absolute inset-x-0 top-0 h-1 bg-terracotta"
        aria-hidden="true"
    ></div>

    <div class="flex flex-col items-center gap-4">
        <span
            class="rounded-full bg-cream px-3 py-1
                   text-xs font-bold uppercase tracking-widest text-earth"
        >
            Een vraag voor jullie
        </span>

        @if ($dynamic)
            <p
                class="font-serif text-xl font-bold leading-snug
                       text-navy sm:text-2xl"
                x-text="question"
                aria-live="polite"
            ></p>
        @else
            <p
                class="font-serif text-xl font-bold leading-snug
                       text-navy sm:text-2xl"
            >
                “{{ $question }}”
            </p>
        @endif

        <flux:icon
            name="sparkles"
            class="size-5 !text-blush"
        />

        @if ($showButton)
            @if ($dynamic)
                <button
                    type="button"
                    @click="sendQuestion()"
                    class="inline-flex items-center justify-center gap-2
                           rounded-xl border-2 border-navy bg-white px-5 py-2.5
                           text-sm font-bold text-navy transition-colors
                           hover:bg-navy hover:text-white"
                >
                    <flux:icon name="envelope" class="size-5 !text-current"/>
                    Stuur me dit idee via mail
                </button>
            @else
                <button
                    type="button"
                    data-question="{{ $question }}"
                    @click="
                        ideaType = 'Gespreksvraag';
                        ideaText = $el.dataset.question;
                        ideaOpen = true;
                    "
                    class="inline-flex items-center justify-center gap-2
                           rounded-xl border-2 border-navy bg-white px-5 py-2.5
                           text-sm font-bold text-navy transition-colors
                           hover:bg-navy hover:text-white"
                >
                    <flux:icon name="envelope" class="size-5 !text-current"/>
                    Stuur me dit idee via mail
                </button>
            @endif
        @endif
    </div>
</div>
