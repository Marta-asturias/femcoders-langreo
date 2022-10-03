<x-head/>

<body>
  
@include('layouts.navigation')
<main>
<div class="d-flex p-2 flex-column align-items-center">
<h1 class=" h1 mt-3" style="max-width: 100%">Panel Administrador</h1>

 <p class="text-center mt-3"  style="max-width:50%">Aquí podrás administrar todas las funcionalidades de tu página.<br>Haz clic en la sección que deseas modificar, donde podrás visualizar la información, crear, actualizar o borrar, según necesites.
  Recuerda que cualquier incidencia puedes comunicarla a mazmorraf5@gmail.com</p>
</div>


<div class="contenD">

    <div class="cardD">
        <div class="car-imgD">
          <img src="{{ asset('img/admin.png') }}" class="card-imgD" alt="...">
        </div>
        <div class="card-bodyD">
          <h3 class="card-titleD"><strong>Administradores</strong></h3>
          <p class="card-textD">Crea, edita y borra tus administradores.</p>
          <a href="#" class="btnD">Ingresar</a>
        </div>
    </div>

    <div class="cardD">
      <div class="car-imgD">
          <img src="{{ asset('img/cursos.webp') }}" class="card-imgD" alt="...">
        </div>
      <div class="card-bodyD">
        <h5 class="card-titleD"><strong>Talleres</strong></h5>
        <p class="card-textD">Crea, edita y borra tus talleres.</p>
        <a href="{{ url('/admin/workshops/workshops') }}"  class="btnD">Ingresar</a>
      </div>
    </div>

      <div class="cardD">
        <div class="car-imgD">
          <img src="{{ asset('img/juegos.png') }}" class="card-imgD" alt="...">
        </div>
        <div class="card-bodyD">
          <h5 class="card-titleD"> <strong>Mini Juegos</strong></h5>
          <p class="card-textD">Crea, edita y borra tus mini juegos.</p>
          <a href="{{ url('/admin/minigames/minigames') }}"  class="btnD">Ingresar</a>
        </div>
      </div>

      <div class="cardD">
        <div class="car-imgD">
          <img src="{{ asset('img/recursos.jpg') }}" class="card-imgD" alt="...">
        </div>
        <div class="card-bodyD">
          <h5 class="card-titleD"><strong>Recursos externos</strong></h5>
          <p class="card-textD">Crea, edita y borra tus recursos.</p>
          <a href="{{ url('/admin/resources/resources') }}"  class="btnD">Ingresar</a>
        </div>
      </div>
</div>


<main>
<x-footer/>
</body>
