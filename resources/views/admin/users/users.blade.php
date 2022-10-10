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
                        {{--  <form class="form-delete" action="{{ route('destroyUser',['id'=>$users->id]) }}" method="POST">
                            <button type="submit" class="btn-delete delete-confirm" data-name="{{$users->name}}" title="Eliminar"><i class="bi bi-trash"></i></button>
                            @csrf
                            @method('DELETE')
                        </form>  --}}
                        <a data-toggle="modal" id="smallButton" data-target="#smallModal"  title="Delete User">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endempty

<!-- Modal -->
<div class="modal fade" id="smallModal" tabindex="-1" aria-labelledby="smallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="smallModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('destroyUser', ['id'=>$users->id]) }}" method="post">
        <div class="modal-body">
            @csrf
            @method('DELETE')
            <h5 class="text-center">Are you sure you want to delete {{ $users->name }} ?</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes, Delete Project</button>
        </div>
    </form>
    </div>
  </div>
</div>


<script>
    // display a modal (small modal)
    $(document).on('click', '#smallButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href
            , beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#smallModal').modal("show");
                $('#smallBody').html(result).show();
            }
            , complete: function() {
                $('#loader').hide();
            }
            , error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            }
            , timeout: 8000
        })
    });

</script>




