<x-head/> 
@include('layouts.adminNavigation')

<div class="conten-create">
    @if($errors->any())
        <div 
        role="alert">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
        @endif 
    <form action="{{route('minigame.update', $minigame)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="title-edit">
        <x-label for="title" :value="__('Editar Titulo del Juego')" />
        <x-input id="title" class="input-tilte-edit" type="text" name="title" :value="old('title') ?? $minigame->title" required />
    </div>
    <div class="title-edit">
        <x-label for="details" :value="__('Editar Detalles del Juego')" />
        <x-input id="details" class="input-tilte-edit" type="text" name="details" :value="old('details') ?? $minigame->details" required />
    </div>
    <div class="title-edit">
        <x-label for="age" :value="__('Editar Edad')" />
        <x-input id="age" class="input-tilte-edit" type="text" name="age" :value="old('age') ?? $minigame->age" required />
    </div>


        <div class="descrip-edit2">
        <div class="img-edit">
        <img src="{{ old('image') ?? $minigame->image }}" />
        </div>

        <div class="btn-img">
        <input type="file" name="file" class="form-control">
        </div> 



<div class="descrip-edit">

    <div class="text-des-edit text-des-edit2">
        <x-label for="price" :value="__('Link:')" />
        <x-input id="link" class="mt-1 w-24" type="text" name="link" :value="old('link') ?? $minigame->link" required />
    </div>



</div>

<div class="btn-act">
<button class="btn-A">
    {{ __('Actualizar') }}
</button>
</div>


    </form>
</div>

<x-footer/>