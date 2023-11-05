<div>
    @if (session('info'))
        <div class="alert alert-primary" role="alert">
            <strong>Éxito</strong> {{ session('info') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.products.export') }}" class="btn btn-primary">Exportar Productos</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $product->image) }}" height="100px" width="100px" alt="">
                                </td>
                                <td>
                                    @if ($product->status == 0)
                                        Activo
                                    @elseif ($product->status == 1)
                                        Desactivado
                                    @else
                                        Estado Desconocido
                                    @endif
                                </td>                                
                                <td>
                                    <a href="{{ route('admin.productos.edit', $product) }}" class="btn btn-info">Editar</a>
                                    <form action="{{ route('admin.productos.destroy', $product) }}" method="POST" style="display: inline;">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No hay ningún producto registrado</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">   
                {{$products->links('pagination::bootstrap-4')}}
            </div>
        </div>
       
    </div>
</div>
