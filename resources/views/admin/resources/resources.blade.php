<x-head/> 
@foreach($resource as $resources)
<table>
    <tr>
    <td>
    <h2>{{$resources->title}}</h2>
    </td>
    </tr>
</table>

<form   action="{{ route('resource.destroy',['id'=>$resources->id]) }}" method="POST">
    <button type="submit" class="btn-delete">Borrar</button>
    @csrf
    @method('DELETE')
</form>
@endforeach

