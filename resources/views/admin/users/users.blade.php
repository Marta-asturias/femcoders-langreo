<x-head />
@include('sweetalert::alert')
@include('layouts.adminNavigation') 

<div class="titlePrincipal2">
    <h1 class="txtprincipal2">Lista de Administradores</h1>
</div>


<div class="keypad" >
    <button class="AdminH2">
        <a href="{{ url('/dashboard#') }}" class="btnH2">Volver</a>
    </button>

    <button class="AdminH2">
        <a href="{{route('register')}}" class="btnH2">Agregar Nuevo</a>
    </button>

    <button class="AdminH2">
        <a href="{{ route('export') }}" class="btnH2"> Exportar Talleres</a>
    </button>

</div>


@empty ($user)
<div class="alert alert-warning">
    La lista de Usuarios está Vacía
</div>
@else

    @foreach ($user as $users)
        <div class="conten-P">
            <div class="linea">
                {{-- <h2 class="txt-Name-admin0"><strong>{{ $users->id }}</strong></h2> --}}
                <h2 class="txt-Name-admin1"><strong>{{ $users->name }}</strong></h2>
                <h2 class="txt-Name-admin2"><strong>{{ $users->email}}</strong></h2>
                <button class="btn-Edit">
                    <a class="btn-Edit"href="{{ route('editUser', ['id' => $users->id]) }}"><i class="bi bi-pencil"></i>Edit</a>
                </button>
                <form   class="AdminB2" action="{{ route('destroyUser',['id'=>$users->id]) }}" method="POST">
                    <button class="btn-Delete-A" type="submit"> <i class="bi bi-trash"></i>Borrar</button>
                    @csrf
                    @method('DELETE')
                </form>
                
            </div>
        </div>
    @endforeach
@endempty






