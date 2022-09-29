<x-head/>
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<div class="adminCard flex">
    <div class="card admin" style="width: 18rem;">
        <img src="{{ asset('img/admin.webp') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Administradores</h5>
          <p class="card-text">Crea, edita y borra tus administradores.</p>
          <a href="#" class="btn btn-primary">Ingresar</a>
        </div>
      </div>

      <div class="card workshops" style="width: 18rem;">
        <img src="{{ asset('img/workshops.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Talleres</h5>
          <p class="card-text">Crea, edita y borra tus talleres.</p>
          <a href="#" class="btn btn-primary">Ingresar</a>
        </div>
      </div>

      <div class="card minigames" style="width: 18rem;">
        <img src="{{ asset('img/foto3.jpeg') }}" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mini Juegos</h5>
          <p class="card-text">Crea, edita y borra tus mini juegos.</p>
          <a href="#" class="btn btn-primary">Ingresar</a>
        </div>
      </div>

      <div class="card resources" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Recursos externos</h5>
          <p class="card-text">Crea, edita y borra tus recursos.</p>
          <a href="#" class="btn btn-primary">Ingresar</a>
        </div>
      </div>
</div>
