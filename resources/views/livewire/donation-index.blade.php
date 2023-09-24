<div>
    {{-- Barra de navegacion --}}
    <div class="bg-gray-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
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
  
                
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($articles as $article)
            <article class="bg-white shadow-lg rounded overflow-hidden">
                <img src="{{ Storage::url($article->image->url) }}" alt="{{ $article->description }}">
                <div class="px-6 py-4">
                    <h1 class="text-xl text-gray-700 mb-2 leading-6">{{ Str::limit($article->description, 40) }}</h1>
                    <a href="{{ route('donaciones.show', $article) }}" class="block text-center w-full mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Donar
                    </a>
                </div>
            </article>
        @endforeach
    </div>
    
    <div class="text-center mt-4">
        @if ($articles->hasMorePages())
            <button wire:click="loadMore" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Cargar más
            </button>
        @else
            <p>No hay más artículos para cargar.</p>
        @endif
    </div>
    <x-footer />
</div>
