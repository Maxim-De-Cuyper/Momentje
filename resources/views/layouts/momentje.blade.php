<!DOCTYPE html>
<html lang="nl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momentje — Samen warme momenten beleven én bewaren</title>
    <!-- Google Fonts: Lora & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>
<body>

@include('layouts.app.header')

<main wire:transition.navigate>
    {{ $slot }}
</main>

<div
    x-data="{ scrolled: window.scrollY > 24 }"
    @scroll.window.passive="scrolled = window.scrollY > 24"
    x-cloak
    x-show="scrolled"
    x-transition:enter="transition duration-300 ease-out motion-reduce:duration-0"
    x-transition:enter-start="opacity-0 translate-y-4 scale-90"
    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
    x-transition:leave="transition duration-200 ease-in motion-reduce:duration-0"
    x-transition:leave-start="opacity-100 translate-y-0 scale-100"
    x-transition:leave-end="opacity-0 translate-y-4 scale-90"
    class="fixed bottom-6 right-6 z-50"
>
    <button
        type="button"
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        aria-label="Terug naar boven"
        class="flex h-12 w-12 items-center justify-center
               rounded-full bg-navy text-white shadow-lg
               transition duration-200 ease-out
               hover:-translate-y-1 hover:bg-terracotta hover:shadow-xl
               focus-visible:outline-2 focus-visible:outline-offset-4
               focus-visible:outline-navy
               motion-reduce:transform-none motion-reduce:transition-none"
    >
        <flux:icon.arrow-up class="size-5" aria-hidden="true"/>
    </button>
</div>

@include('layouts.app.footer')

@fluxScripts
@stack('scripts')
</body>
</html>
