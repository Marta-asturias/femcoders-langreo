<x-head/> 
@foreach($user as $users)
<table>
    <tr>
    <td>
    <h2>{{$users->name}}</h2>
    </td>
    </tr>
</table>

<form   action="{{ route('user.destroy',['id'=>$users->id]) }}" method="POST">
    <button type="submit" class="btn-delete">Borrar</button>
    @csrf
    @method('DELETE')
</form>
@endforeach

