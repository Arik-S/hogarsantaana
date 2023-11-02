<x-app-layout>

    @include('portada')
    
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold text-purple-700">Necesitamos</h3>
        <div class="h-1 bg-red-500 w-36 my-4"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
            <div class="w-full max-w-sm mx-auto bg-white rounded-md shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-60 object-cover" alt="Imagen de {{ $product->name }}">
                <div class="flex items-end justify-end w-full bg-cover"></div>
                <div class="px-5 py-3 flex-grow">
                    <h3 class="text-gray-700 uppercase text-lg font-semibold">{{ $product->name }}</h3>
                </div>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="px-5 pb-3">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="image" value="{{ $product->image }}">
                    <input type="hidden" name="quantity" value="1">
                    <button class="px-4 py-2 text-white text-sm bg-blue-800 rounded-full">Donar</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
    
    

    @include('footer')
</x-app-layout>