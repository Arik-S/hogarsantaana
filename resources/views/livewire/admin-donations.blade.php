<div>
    @if (session('info'))
        <div class="alert alert-primary" role="alert">
            <strong>Éxito</strong> {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.donations.export') }}" class="btn btn-primary">Exportar Donaciones</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Donador</th>
                        <th>Contacto</th>
                        <th>Método de Entrega</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
    
                <tbody>
                    @forelse ($donation as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->product_name}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->user_name}}</td>
                            <td>{{$item->phone_number}}</td>
                            <td>
                                @if ($item->delivery_method == 1)
                                    Entrega a Local
                                @elseif ($item->status == 1)
                                    Buscar Donación
                                @else
                                    Estado Desconocido
                                @endif
                            </td>
                            <td>
                                @if ($item->status == 0)
                                    En espera
                                @elseif ($item->status == 1)
                                    Confirmado
                                @elseif ($item->status == 2)
                                    Cancelado
                                @else
                                    Estado Desconocido
                                @endif
                            </td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('admin.donation.edit', $item)}}">Estado</a>
                            </td>
    
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay ninguna donación registrada</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    
        <div class="card-footer">   
            {{$donation->links('pagination::bootstrap-4')}}
        </div>
    </div>
    
</div>