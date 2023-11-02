<x-app-layout>
    @include('portada')

    <!-- Sección "Quiénes Somos" -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Quiénes Somos</h2>
                    <p class="text-gray-700 leading-6">
                        En el Hogar de Ancianos San Agustín, creemos en un mundo mejor para nuestros mayores. Descubre más sobre nuestra historia, misión y el talentoso equipo que hace todo esto posible.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('footer')
</x-app-layout>
