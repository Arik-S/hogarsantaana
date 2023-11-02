<x-app-layout>


    @include('portada')

    <section class="auto">
                  
    </section>
    
    <section class="mt-24 bg-white-700 py-12">
        <div class="container mx-auto">
            <h1 class="text-center text-white text-3xl mb-4">Galería</h1>
            <p class="text-center text-white mb-6">Conocenos</p>
            
            <div class="flex justify-center">
                @include('gallery')
            </div>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <div class="container mx-auto">
            <h1 class="text-center text-white text-3xl mb-4">Ubicación </h1>
            <p class="text-center text-white mb-6">Aquí puedes ver nuestra ubicación en el mapa.</p>
            
            <div class="flex justify-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.9601488436438!2d-54.6567376634344!3d-25.539704329192134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f68f9e3f5a4bfd%3A0xe334497a46e7a371!2sHogar%20de%20Ancianos%20San%20Agustin%2C%20Av%20Amado%20Benitez%20Gamarra%2C%20Cd.%20del%20Este!5e0!3m2!1ses-419!2spy!4v1695779710564!5m2!1ses-419!2spy"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
    
    @include('footer')
    
</x-app-layout>

