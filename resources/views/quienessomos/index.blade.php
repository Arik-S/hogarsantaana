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

    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-gray-600 text-center text-3xl mb-6">Nuestro plantel</h1>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
                <article class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/senior-citizens-7675266_640.jpg')}}" alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Hermana Vivian</h1>
                    </header>

                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptas perspiciatis.</p>

                </article>

                <article class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/senior-citizens-7675266_640.jpg')}}" alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Hermana Nombre</h1>
                    </header>

                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptas perspiciatis.</p>

                </article>

                <article class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/senior-citizens-7675266_640.jpg')}}" alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Hermana Nombre</h1>
                    </header>

                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptas perspiciatis.</p>
                </article>

                <article class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/senior-citizens-7675266_640.jpg')}}" alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Hermana Nombre</h1>
                    </header>

                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptas perspiciatis.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Nuestra Historia</h2>
                    <p class="text-gray-700 leading-6">
                        En el Hogar de Ancianos San Agustín, creemos en un mundo mejor para nuestros mayores. Descubre más sobre nuestra historia, misión y el talentoso equipo que hace todo esto posible.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Nuestra Misión</h2>
                    <p class="text-gray-700 leading-6">
                        Nuestra misión en el Hogar de Ancianos San Agustín es proporcionar un ambiente de amor, respeto y cuidado de calidad a los adultos mayores, inspirados en los valores cristianos y la filosofía de San Agustín. Nos esforzamos por ofrecer una vida plena, digna y confortable a los residentes, promoviendo la convivencia, la espiritualidad y la atención personalizada, con un enfoque en la comunidad, la familia y la solidaridad.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Nuestros Valores</h2>
                    <p class="text-gray-700 leading-6">
                        La visión del Hogar de Ancianos San Agustín es ser un referente en el cuidado y la atención integral de los adultos mayores, en consonancia con los principios de la fe católica. Buscamos ser reconocidos como un hogar de excelencia, donde la calidad de vida de nuestros residentes sea nuestra prioridad, y donde la espiritualidad, la compasión y el compromiso social guíen nuestras acciones. Queremos ser un lugar donde los ancianos se sientan amados, respetados y cuidados, contribuyendo así a la construcción de una sociedad más solidaria y compasiva.
                </div>
            </div>
        </div>
    </section>
    @include('footer')
</x-app-layout>
