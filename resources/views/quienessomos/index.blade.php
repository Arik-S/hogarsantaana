<x-app-layout>
    <!-- Sección de Encabezado -->
    <section class="bg-cover" style="background-image: url({{ asset('img/home/senior-citizens-7615271_1920.png') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2 text-center text-white">
                <h1 class="text-5xl font-extrabold leading-tight">Hogar de Ancianos San Agustín</h1>
                <p class="text-xl mt-4">Uniendo corazones para un futuro mejor</p>
                <a href="{{ route('donaciones.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 mt-8 rounded-full inline-block hover:shadow-xl transition duration-300">¡Haz tu Donación!</a>

            </div>
        </div>
        <div class="bg-gray-200 py-4 mb-16">
           {{-- espacio --}}
        </div>
    </section>

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

    <!-- Secciones Adicionales (Misión, Equipo, Historia) -->
    <section class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Agrega aquí tus secciones adicionales según tu contenido -->
        </div>
    </section>
    <x-footer />
</x-app-layout>
