@props([
    'index',
    'icon',
    'title',
    'description',
])

<div
    x-data="{
        cardIndex: {{ $index }},

        get offset() {
            const half = Math.floor(total / 2);

            return (
                (this.cardIndex - current + total + half) % total
            ) - half;
        },

        get visible() {
            return Math.abs(this.offset) <= 2;
        }
    }"
    x-cloak
    :class="{
        'hidden lg:block': offset !== 0,
        'block': offset === 0,
        'pointer-events-none': !visible
    }"
    :style="`
        left: calc(50% + ${offset * 17}%);
        z-index: ${10 - Math.abs(offset)};
        opacity: ${visible ? 1 : 0};
        transform: translateX(-50%) scale(${Math.max(0.7, 1 - Math.abs(offset) * 0.10)});
    `"
    :aria-hidden="offset !== 0"
    class="absolute top-5 h-[370px] w-[85%]
           transition-[left,transform,opacity] duration-500 ease-in-out
           motion-reduce:transition-none sm:w-[55%] lg:w-[29%]"
>
    <flux:card
        class="flex h-full flex-col justify-between gap-4 !rounded-2xl
               !border-2 !bg-white !p-5 transition-shadow"
        ::class="offset === 0
            ? '!border-terracotta shadow-xl'
            : '!border-slate-300 shadow-md'"
    >
        <div class="space-y-3">
            <span class="inline-block text-3xl" aria-hidden="true">
                <flux:icon
                    :name="$icon"
                    class="size-8 text-terracotta"
                />
            </span>

            <h4 class="font-serif text-lg font-bold leading-snug text-navy">
                {{ $title }}
            </h4>

            <p class="text-sm leading-relaxed text-black">
                {{ $description }}
            </p>
        </div>

        <button
            type="button"
            data-title="{{ $title }}"
            data-description="{{ $description }}"
            @click="sendIdea($el.dataset.title, $el.dataset.description)"
            :tabindex="offset === 0 ? 0 : -1"
            class="flex w-full items-center justify-center gap-2 rounded-xl
                   border-2 border-terracotta/50 bg-cream px-3 py-2.5
                   text-sm font-bold text-navy transition-colors
                   hover:border-terracotta hover:bg-terracotta
                   hover:text-white"
        >
            <span aria-hidden="true">✉️</span>
            <span>Stuur me dit idee via mail</span>
        </button>
    </flux:card>
</div>
