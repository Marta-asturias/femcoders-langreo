<x-head/>


<a href="{{ route('export') }}"> Export </a>



@foreach($workshop as $workshops)
<table>
    <tr>
    <td>
    <h2>{{$workshops->title}}</h2>
    </td>
    </tr>
</table>

<form   action="{{ route('destroy',['id'=>$workshops->id]) }}" method="POST">
    <button type="submit" class="btn-delete">Borrar</button>
    @csrf
    @method('DELETE')
</form>
@endforeach
