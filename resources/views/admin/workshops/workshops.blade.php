<x-head/>
<x-header/>
{{-- Aqui va la cabecera  --}}
<div class="titlePrincipal2">
    <h1 class="txtprincipal2">Talleres</h1>
</div>

<button class="AdminH2">
    <a href="{{ url('/admin/workshops/create') }}" class="btnH2">Agregar Nuevo</a>
</button>

<div class="conten-P">

            @foreach($workshop as $workshops)
    <div class="linea">
            <h2> <strong>{{$workshops->title}}</strong></h2>
            
            <button class="btn-Edit">
                <a href="{{ url('/admin/workshops//edit') }}" class="btn-Edit"><i class="bi bi-pencil"></i> Modificar</a>
            </button>

            <form   class="AdminB2" action="{{ route('destroy',['id'=>$workshops->id]) }}" method="POST">
                <button type="submit" class="btn-Delete"><i class="bi bi-trash"></i>Borrar</button>
                @csrf
                @method('DELETE')
            </form>
            @endforeach

            
    </div>

</div>


<x-footer/>
