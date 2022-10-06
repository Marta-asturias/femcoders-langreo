<x-head/> 
@include('layouts.adminNavigation')

<div class="titlePrincipal2">
    <h1 class="txtprincipal2">Mini Juegos</h1>
</div>

<button class="AdminH2">
    <a href="{{ url('/admin/minigames/create') }}" class="btnH2">Agregar Nuevo</a>
</button>

@foreach($minigame as $minigames)
    <div class="conten-P">
        <div class="linea">
            <h2>{{$minigames->title}}</h2>

            <button class="btn-Edit">
                <a href="{{ route('edit',['id'=>$minigames->id]) }}" class="btn-Edit"><i class="bi bi-pencil"></i> Modificar</a>
            </button>

            <form   action="{{ route('minigame.destroy',['id'=>$minigames->id]) }}" method="POST">
                <button class="btn-Delete-A" type="submit"><i class="bi bi-trash"></i>Borrar</button>
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endforeach
