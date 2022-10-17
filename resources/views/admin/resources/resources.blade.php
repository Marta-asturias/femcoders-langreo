<x-head/>
@include('sweetalert::alert')
@include('layouts.adminNavigation') 


<div class="titlePrincipal2">
    <h1 class="txtprincipal2">Recursos</h1>
</div>

<div class="keypad" >
    <button class="AdminH2">
        <a href="{{ url('/dashboard#') }}" class="btnH2">Volver</a>
    </button>

    <button class="AdminH2">
        <a href="{{ url('/admin/resources/create') }}" class="btnH2">Agregar Nuevo</a>
    </button>

    <button class="AdminH2">
        <a href="{{ route('export') }}" class="btnH2" > Exportar Recursos</a>
    </button>
</div>


    @foreach($resource as $resources)
        <div class="conten-P">
            <div class="linea">
                <h2 class="txt-Name-admin"><strong>{{$resources->title}}</strong></h2>

                <button class="btn-Edit">
                    <input class="input-clip" type="text" placeholder="0">
                    <a href=""><i class="bi bi-mouse2-fill">Nº de Click</i></a>
                </button>

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

    <x-footer/>