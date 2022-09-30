<x-head/>

<body>
  
@include('layouts.navigation')
<main>
<div class="d-flex p-2 flex-column align-items-center">
<h1 class=" h1 mt-3" style="max-width: 100%">Panel Administrador</h1>

 <p class="text-center mt-3"  style="max-width:50%">Aquí podrás administrar todas las funcionalidades de tu página.<br>Haz clic en la sección que deseas modificar, donde podrás visualizar la información, crear, actualizar o borrar, según necesites.
  Recuerda que cualquier incidencia puedes comunicarla a mazmorraf5@gmail.com</p>
</div>
<div class="adminCard d-flex align-items-center p-5">
    <div class="card admin align-middle mx-auto text-center text-wrap p-2 " style="width: 14rem;">
        <img src="{{ asset('img/admin.webp') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title h6">Administradores</h3>
          <p class="card-text">Crea, edita y borra tus administradores.</p>
          <a href="#" class="btn btn-primary m-4">Ingresar</a>
        </div>
      </div>

      <div class="card admin align-middle mx-auto text-center text-wrap " style="width: 14rem;">
        <img src="{{ asset('img/workshops-.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title h6">Talleres</h5>
          <p class="card-text">Crea, edita y borra tus talleres.</p>
          <a href="#" class="btn btn-primary m-4">Ingresar</a>
        </div>
      </div>

      <div class="card admin align-middle mx-auto text-center text-wrap " style="width: 14rem;">
        <img src="{{ asset('img/foto3.jpeg') }}" alt="...">
        <div class="card-body">
          <h5 class="card-title h6">Mini Juegos</h5>
          <p class="card-text">Crea, edita y borra tus mini juegos.</p>
          <a href="#" class="btn btn-primary m-4">Ingresar</a>
        </div>
      </div>

      <div class="card admin align-middle mx-auto text-center text-wrap " style="width: 14rem;">
        <img src="{{ asset('img/recursos.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title h6">Recursos externos</h5>
          <p class="card-text">Crea, edita y borra tus recursos.</p>
          <a href="#" class="btn btn-primary m-4">Ingresar</a>
        </div>
      </div>
</div>
<main>
</body>
