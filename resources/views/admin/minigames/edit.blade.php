<x-head/> 
@include('sweetalert::alert')
@include('layouts.adminNavigation')

<div class="title-admin">
    <h1 class="title-Ad">Editar Juegos</h1>
</div>

@if($errors->any())
    <div role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 


<div class="admin-Conten">
    
    <form class="conten-admin" action="{{route('minigame.update', $minigame)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="title-admin1">
            <x-label class="the-title1" for="title" :value="__('Editar Titulo del Juego')" />
            <x-input class="the-input1" id="title"  type="text" name="title" :value="old('title') ?? $minigame->title" required />
        </div>

        <div class="title-admin2">
            <x-label class="the-title"  for="details" :value="__('Editar Detalles del Juego')" />
            <x-input class="the-input" id="details"  type="text" name="details" :value="old('details') ?? $minigame->details" required />
        </div>

        <div class="title-admin2">
            <x-label class="the-title" for="age" :value="__('Editar Edad')" />
            <x-input  class="the-input"  id="age"  type="text" name="age" :value="old('age') ?? $minigame->age" required />
        </div>

        <div class="title-admin2">
            <x-label class="the-title"  for="price" :value="__('Link:')" />
            <x-input class="the-input" id="link" type="text" name="link" :value="old('link') ?? $minigame->link" required />
        </div>


        <div class="create-1">
            <input type="file" name="file" class="form-control">
        </div> 

        

        <div class="btn-general">
            <div class="btn-create">
                <button class="btn-c">
                    {{ __('Actualizar') }}
                </button>
            </div>

            <div class="btn-cancelar">
                <a href="{{ url('/admin/workshops/workshops') }}" class=" btn-cancelar-admin">Cancelar</a>
            </div>
        
        </div>



        


    </form>
</div>

<x-footer/>