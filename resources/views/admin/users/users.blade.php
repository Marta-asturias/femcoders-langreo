<x-head />


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

<script type="text/javascript">
    
    
    
    
    
    
    
    
    {{--  if (deleteMsg) {
        $.ajax({
            type: "POST",
            url: SITEURL + '/fullcalendar-ajax',
            data: {
                id: event.id,
                type: 'delete'
            },
            success: function(response) {
                calendar.fullCalendar('removeEvents', event.id);
                swal({
                    title: "Borrar evento",
                    text: "¿Estas seguro? Si eliminas el evento tendrás que volver a crearlo",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Tu evento ha sido eliminado", {
                        icon: "success",
                });
                    } else {
                        swal("No has eliminado el evento");
                    }
                });  --}}





    {{--  $('.form-delete').submit(async function(e){
        e.preventDefault();
        console.log("Hola")
        

    await swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            console.log("Borrado Correctamente")
            swal(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
          this.submit();
        }
      })
    })  --}}

</script>
@endsection