<x-head/>
<x-header/>
{{-- Aqui va la cabecera  --}}
<div class="titlePrincipal2">
    <h1 class="txtprincipal2">Talleres</h1>
</div>

<button class="AdminH2">
    <a href="{{ url('/admin/workshops/create') }}" class="btnH2">Agregar Nuevo</a>
</button>

@foreach($workshop as $workshops)
    <div class="table-W">
        <div class="lineasW">
            <h2>{{$workshops->title}}</h2>
            <form   class="AdminB2" action="{{ route('destroy',['id'=>$workshops->id]) }}" method="POST">
                <button type="submit" class="btnB2">Borrar</button>
                @csrf
                @method('DELETE')
            </form>
            @endforeach
        </div>
    </div>




<x-footer/>
