<x-app-layout>


    @include('portada')

    <section class="auto">
                  
    </section>
    
    <<section class="bg-cover grid gap-4">
        
        <div class="flex items-center justify-center">
            <img class="max-w-lg max-h-64" src="{{ asset('img/gracias-por-tu-donacion.svg') }}" alt="image description">
        </div>
        
    </section>
    

    
    @include('footer')
    
</x-app-layout>

