<x-head/> 
@include('layouts.adminNavigation') 


<div class="titlePrincipal2">
    <h1 class="txtprincipal2">Recursos</h1>
</div>

<button class="AdminH2">
    <a href="{{ url('/admin/resources/create') }}" class="btnH2">Agregar Nuevo</a>
</button>

@foreach($resource as $resources)
    <div class="conten-P">
        <div class="linea">
            <h2>{{$resources->title}}</h2>

            <button class="btn-Edit">
                <a href="{{ route('resource.edit',['id'=>$resources->id]) }}" class="btn-Edit"><i class="bi bi-pencil"></i> Modificar</a>
            </button>

            <form   action="{{ route('resource.destroy',['id'=>$resources->id]) }}" method="POST">
                <button class="btn-Delete-A" type="submit"><i class="bi bi-trash"></i>Borrar</button>
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endforeach

