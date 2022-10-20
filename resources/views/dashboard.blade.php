<x-head/>
@include('layouts.adminNavigation')

<main>
  <div class="d-flex p-2 flex-column align-items-center">
    <div class="title-principal">
      <h1 class="txt-principal">Panel de Administrador</h1>
  </div>
    

    <p class="text-center mt-3"  style="max-width:50%">Aquí podrás administrar todas las funcionalidades de tu página.
    <br>Haz clic en la sección que deseas modificar, donde podrás visualizar la información, crear, actualizar o borrar, según necesites.
    Recuerda que cualquier incidencia puedes comunicarla a mazmorraf5@gmail.com</p>
  </div>


  <div class="contenD">

      <div class="cardD">
          <div class="car-imgD">
            <img src="{{ asset('img/admin.png') }}" class="card-imgD" alt="...">
          </div>
          <div class="card-bodyD">
            <h3 class="card-titleD"><strong>Administradores</strong></h3>
            <button class="btn-Dash">
              <a href="{{ url('/admin/users/users') }}" class="btnD">Ingresar</a>
          </button>
          </div>
      </div>

      <div class="cardD">
        <div class="car-imgD">
            <img src="{{ asset('img/cursos.webp') }}" class="card-imgD" alt="...">
          </div>
        <div class="card-bodyD">
          <h5 class="card-titleD"><strong>Talleres</strong></h5>
          <button class="btn-Dash">
            <a href="{{ url('/admin/workshops/workshops') }}"  class="btnD">Ingresar</a>
        </button>
        </div>
      </div>

      <div class="cardD">
        <div class="car-imgD">
            <img src="{{ asset('img/participant.png') }}" class="card-imgD" alt="...">
          </div>
        <div class="card-bodyD">
          <h5 class="card-titleD"><strong>Participantes</strong></h5>
          <button class="btn-Dash">
            <a href="{{ url('/admin/participants/participants') }}"  class="btnD">Ver Más</a>
        </button>
        </div>
      </div>

        <div class="cardD">
          <div class="car-imgD">
            <img src="{{ asset('img/juegos.png') }}" class="card-imgD" alt="...">
          </div>
          <div class="card-bodyD">
            <h5 class="card-titleD"> <strong>Juegos</strong></h5>
            <button class="btn-Dash">
              <a href="{{ url('/admin/minigames/minigames') }}"  class="btnD">Ingresar</a>
          </button>
            
          </div>
        </div>

        <div class="cardD">
          <div class="car-imgD">
            <img src="{{ asset('img/recursos.jpg') }}" class="card-imgD" alt="...">
          </div>
          <div class="card-bodyD">
            <h5 class="card-titleD"><strong>Recursos externos</strong></h5>
            <button class="btn-Dash">
              <a href="{{ url('/admin/resources/resources') }}"  class="btnD">Ingresar</a>
          </button>
          </div>
        </div>
  </div>

  <main>
<x-footer/>
