<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/home/senior-citizens-7615271_1920.png') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md-w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Ayuda a los ancianos a tener una mejor vida</h1>
            </div>
        </div>
    </section>

    @livewire('donation-index')
</x-app-layout>
