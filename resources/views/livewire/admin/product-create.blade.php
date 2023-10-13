<div>
    <form wire:submit.prevent="createProduct">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input wire:model="name" type="text" class="form-control">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="price">Precio:</label>
            <input wire:model="price" type="number" class="form-control">
            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea wire:model="description" class="form-control"></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="image">Imagen (URL):</label>
            <input wire:model="image" type="url" class="form-control">
            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </form>
</div>
