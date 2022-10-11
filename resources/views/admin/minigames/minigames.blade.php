<x-head/> 
@include('layouts.adminNavigation')

<div class="titlePrincipal2">
    <h1 class="txtprincipal2">Juegos</h1>
</div>

<div class="keypad" >
    <button class="AdminH2">
        <a href="{{ url('/dashboard#') }}" class="btnH2">Volver</a>
    </button>

    <button class="AdminH2">
        <a href="{{ url('/admin/minigames/create') }}" class="btnH2">Agregar Nuevo</a>
    </button>

    <button class="AdminH2">
        <a href="{{ route('export') }}" class="btnH2" >Exportar Juegos</a>
    </button>
</div>

@foreach($minigame as $minigames)
    <div class="conten-P">
        <div class="linea">
            <h2 class="txt-Name-admin"><strong>{{$minigames->title}}</strong></h2>

            <button class="btn-Edit">
                <input class="input-clip" type="text" placeholder="0">
                <a href=""><i class="bi bi-mouse2-fill">Nº de Click</i></a>
            </button>

            <button class="btn-Edit">
                <a href="{{ route('minigame.edit',['id'=>$minigames->id]) }}" class="btn-Edit"><i class="bi bi-pencil"></i>Modificar</a>
            </button>

            <form   action="{{ route('minigame.destroy',['id'=>$minigames->id]) }}" method="POST">
                <button class="btn-Delete-A" type="submit"><i class="bi bi-trash"></i>Borrar</button>
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endforeach

<x-footer/>
