<x-app-layout>
    {{-- Barra de navegacion --}}

    <section class="bg-cover" style="background-image: url({{asset('img/home/senior-citizens-7615271_1920.png')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md-w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Ayuda a los ancianos a tener una mejor vida</h1>
                <a href="{{ route('products.list') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 mt-8 rounded-full inline-block hover:shadow-xl transition duration-300">¡Haz tu Donación!</a>

            </div>
        </div>
    </section>

    <div class="bg-gray-200 py-4 mb-16">
        {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4">
                <i class="fas fa-archway text-sm mr-2">
                    Todos los artículos
                </i>
            </button>

        <!-- Dropdown -->
            <div class="relative" x-data="{open:false}">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = !open">
                    <i class="fas fa-tags text-sm mr-2">
                        Categoría   
                        <i class="fas fa-angle-down text-sm ml-2"></i>
                    </i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">   
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">Settings</a>
                    <div class="py-2">
                    <hr></hr>
                </div>
                <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">    
                    Logout
                </a>
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->
  
                
        </div> --}}
    </div>
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold text-purple-700">Necesitamos</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                <img src="{{ url($product->image) }}" alt="" class="w-full max-h-60">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                    {{-- <span class="mt-2 text-gray-500">${{ $product->price }}</span> --}}
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Donar</button>
                    </form>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
    <footer class="bg-gray-800 text-white py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center"> <!-- Agrega las clases para centrar verticalmente -->
                <div>
                    © 2023 Hogar de Ancianos San Agustín. Todos los derechos reservados
                </div>
                <div>
                    <!-- Agrega aquí más contenido de pie de página si es necesario. -->
                </div>
            </div>
        </div>
    </footer>
</x-app-layout>