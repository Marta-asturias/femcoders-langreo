<x-head/>
<x-header/>
{{-- Aqui va la cabecera  --}}
<div class="titlePrincipal2">
    <h1 class="txtprincipal2">Talleres</h1>
</div>

<button class="AdminH2">
    <a href="{{ url('/') }}" class="btnH2">Apuntate Gratis</a>
</button>

@foreach($workshop as $workshops)
<table class="table-W">
    <tr class="table-W1">
    <td class="table-W2">
        <h2>{{$workshops->title}}</h2>
    </td>
    </tr>
</table>

<form   class="AdminB2" action="{{ route('destroy',['id'=>$workshops->id]) }}" method="POST">
    <button type="submit" class="btnB2">Borrar</button>
    @csrf
    @method('DELETE')
</form>
@endforeach


<x-footer/>
