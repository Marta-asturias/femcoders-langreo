<x-head/> 

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
        <x-label for="title" :value="__('')" />
        <span class="text-title">Editar Titulo del Mini Juego </span>
        <x-input id="title" class="input-tilte-edit" type="text" name="title" :value="old('title') ?? $minigame->title" required />
    </div>
    <div class="title-edit">
        <x-label for="details" :value="__('')" />
        <span class="text-title">Editar Detalles del Mini Juego </span>
        <x-input id="details" class="input-tilte-edit" type="text" name="details" :value="old('details') ?? $minigame->details" required />
    </div>
    <div class="title-edit">
        <x-label for="age" :value="__('')" />
        <span class="text-title">Editar Edad  </span>
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
        <x-label for="price" :value="__('')" />
        <span>Link:</span><x-input id="link" class="mt-1 w-24" type="text" name="link" :value="old('link') ?? $minigame->link" required />
    </div>

   

</div>

<div class="btn-act">
<button class="btn-A">
    {{ __('Actualizar') }}
</button>
</div>


    </form>
</div>
