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
    <form action="{{route('update', $workshop)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="title-edit">
        <x-label for="title" :value="__('')" />
        <span class="text-title">Editar Titulo del Curso </span>
        <x-input id="title" class="input-tilte-edit" type="text" name="title" :value="old('title') ?? $workshop->title" required />
    </div>


        <div class="descrip-edit2">
        <div class="img-edit">
        <img src="{{ old('image') ?? $workshop->image }}" />
        </div>

        <div class="btn-img">
        <input type="file" name="file" class="form-control">
        </div> 



<div class="descrip-edit">

    <div class="text-des-edit text-des-edit2">
        <x-label for="price" :value="__('')" />
        <span>Detalles:</span><x-input id="details" class="mt-1 w-24" type="text" name="details" :value="old('details') ?? $workshop->details" required />
    </div>

    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Edad:</span><x-input id="age" class="mt-1 w-24" type="text" name="age" :value="old('age') ?? $workshop->age" required />
    </div>

    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Duracion:</span><x-input id="duration" class="mt-1 w-24" type="text" name="duration" :value="old('duration') ?? $workshop->duration" required />
    </div>

    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Formato:</span><x-input id="format" class="mt-1 w-24" type="text" name="format" :value="old('format') ?? $workshop->format" required />
    </div>
</div>

</div>

<div class="btn-act">
<button class="btn-A">
    {{ __('Actualizar') }}
</button>
</div>


    </form>
</div>
