<x-head/> 
@foreach($minigame as $minigames)
<table>
    <tr>
    <td>
    <h2>{{$minigames->title}}</h2>
    </td>
    </tr>
</table>

<form   action="{{ route('minigame.destroy',['id'=>$minigames->id]) }}" method="POST">
    <button type="submit" class="btn-delete">Borrar</button>
    @csrf
    @method('DELETE')
</form>
@endforeach


