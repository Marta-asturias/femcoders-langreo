<x-head/>
@include('sweetalert::alert')
@include('layouts.adminNavigation') 

<div class="titlePrincipal2">
    <h1 class="txtprincipal2">Talleres</h1>
</div>

<div class="keypad" >
    <button class="AdminH2">
        <a href="{{ url('/dashboard#') }}" class="btnH2">Volver</a>
    </button>

    <button class="AdminH2">
        <a href="{{ url('/admin/workshops/create') }}" class="btnH2">Agregar Nuevo</a>
    </button>

    <button class="AdminH2">
        <a href="{{ route('export') }}" class="btnH2"> Exportar Talleres</a>
    </button>

</div>


@foreach($workshop as $workshops)
    <div class="conten-P">
        <div class="linea">

                <h2 class="txt-Name-admin"><strong>{{$workshops->title}}</strong></h2>
            
                <button class="btn-Edit">
                    <a href="{{ route('edit',['id'=>$workshops->id]) }}" class="btn-Edit"><i class="bi bi-pencil"></i> Modificar</a>
                </button>
                <form   class="AdminB2" action="{{ route('destroy',['id'=>$workshops->id]) }}" method="POST">
                    <button class="btn-Delete-A" type="submit"> <i class="bi bi-trash"></i>Borrar</button>
                    @csrf
                    @method('DELETE')
                </form>
        </div>       
    </div>
@endforeach


