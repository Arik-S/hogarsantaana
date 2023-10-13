<x-app-layout>

    {{-- Portada --}}

    <section class="bg-cover" style="background-image: url({{asset('img/home/senior-citizens-7615271_1920.png')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md-w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Ayuda a los ancianos a tener una mejor vida</h1>
                <a href="{{ route('products.list') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 mt-8 rounded-full inline-block hover:shadow-xl transition duration-300">¡Haz tu Donación!</a>

            </div>
        </div>
    </section>


    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Desea donar algunos de estos productos.</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/senior-citizens-7675266_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Deseo Donar</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptas perspiciatis.</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/senior-citizens-7675266_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Historia</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptas perspiciatis.</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/senior-citizens-7675266_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Ayudanos</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptas perspiciatis.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/senior-citizens-7675266_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Quienes somos</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptas perspiciatis.</p>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <div class="container mx-auto">
            <h1 class="text-center text-white text-3xl mb-4">Ubicación Geográfica</h1>
            <p class="text-center text-white mb-6">Aquí puedes ver nuestra ubicación en el mapa.</p>
            
            <div class="flex justify-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.9601488436438!2d-54.6567376634344!3d-25.539704329192134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f68f9e3f5a4bfd%3A0xe334497a46e7a371!2sHogar%20de%20Ancianos%20San%20Agustin%2C%20Av%20Amado%20Benitez%20Gamarra%2C%20Cd.%20del%20Este!5e0!3m2!1ses-419!2spy!4v1695779710564!5m2!1ses-419!2spy"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
    
    

    {{-- <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ULTIMAS DONACIONES</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Sigue donando para mejorar la calidad de vida de los Ancianos</p>
    
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($articles as $article)
                <article class="bg-white shadow-lg rounded overflow-hidden">
                    <img src="{{ Storage::url($article->image->url) }}" alt="{{ $article->description }}">
                    <div class="px-6 py-4">
                        <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($article->description, 40)}}</h1><!--Es para ver solo 50 caracteres-->
                        
                        <a href="{{route('donaciones.show', $article)}}" class="block text-center w-full mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Donar
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </section> --}}
    <x-footer />
</x-app-layout>

