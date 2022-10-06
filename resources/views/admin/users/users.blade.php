@extends('components.head')
<x-head/> 


<h1>Lista de Administradores</h1>

@empty ($user)
    <div class="alert alert-warning">
        La lista de Usuarios está Vacía 
    </div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $users)
                <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>
                        <a class="btn btn-link" href="{{ route('editUser', ['id' => $users->id]) }}">Edit</a> 
                    </td>
                    <td>
                        <form class="form-delete" action="{{ route('destroyUser',['id'=>$users->id]) }}" method="POST">
                            <button type="submit" class="btn-delete delete-confirm" data-name="{{$users->name}}" title="Eliminar"><i class="bi bi-trash"></i></button>
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endempty

@section('js')
@include('sweetalert::alert')

    <script>
        let btnDelete = document.getElementsByClassName("delete-confirm");
        btnDelete.addEventListener('click', () => {
           alert("hello");
           
        });
    
    </script>

    

@endsection


