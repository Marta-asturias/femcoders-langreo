<x-head />
@include('sweetalert::alert')
@include('layouts.adminNavigation') 

<div class="titlePrincipal2">
    <h1 class="txtprincipal2">Lista de participantes</h1>
</div>


<div class="keypad" >
    <button class="AdminH2">
        <a href="{{ url('/dashboard#') }}" class="btnH2">Volver</a>
    </button>

    <button class="AdminH2">
        <a href="{{ route('exportparticipants') }}" class="btnH2"> Exportar Participantes</a>
    </button>

</div>
<div class="contenedor-P">
    @foreach ($participant as $participants)
        @php ($wtitle = implode(" ",array_map(function($value) { return $value['title'];} , $participants->workshops->toArray())))
        <div class="conten-Participants">
            <div class="block-participants">
                <div class=" participant-person">
                    <h2 class="txt-Name-participants0"><strong>Datos del participantes:</strong></h2>
                </div>
                <div class="datos-participants">
                    <h2 class="txt-Name-participants"><strong>Nombres: </strong>{{ $participants->first_name}}</h2>                
                    <h2 class="txt-Name-participants"><strong>Apellidos: </strong>{{ $participants->last_name}}</h2>
                    <h2 class="txt-Name-participants"><strong>Fecha de Nacimiento: </strong>{{ $participants->birth_date}}</h2>
                    <h2 class="txt-Name-participants"><strong>Correo Electronico: </strong>{{ $participants->email}}</h2>
                    <h2 class="txt-Name-participants"><strong>Whatsapp: </strong>{{ $participants->whatsapp}}</h2>
                    <h2 class="txt-Name-participants"><strong>Ciudad: </strong>{{ $participants->city}}</h2>
                    {{-- <h2 class="txt-Name-admin2"><strong>{{ $participants->date1}}</strong></h2> --}}
                    <h2 class="txt-Name-participants"><strong>Cursos en los que esta apuntado: </strong>{{ $wtitle }}</h2>
                </div>
                    
                
                
            </div>
        </div>
    @endforeach
</div>






