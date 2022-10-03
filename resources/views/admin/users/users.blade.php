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
                            <button type="submit" class="btn-delete"><i class="bi bi-trash"></i></button>
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
@if(session('status_success' == 'Eliminado Correctamente'))
<script>
    Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          ) 

</script>
    
@endif

<script type="text/javascript">
    $('.form-delete').submit(function(e){
        e.preventDedault();
    
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          {{--   --}}
          this.submit();
        }
      })
    })

</script>
@endsection
