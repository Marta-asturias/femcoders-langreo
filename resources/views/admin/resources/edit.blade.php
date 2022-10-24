<x-head/> 
@include('layouts.adminNavigation') 
    
<div class="title-admin">
    <h1 class="title-Ad">Editar Recursos</h1>
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
    <form  class="conten-admin" action="{{route('resource.update', $resource)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="title-admin1">
            <x-label class="the-title1" for="title" :value="__('Editar Titulo del Recurso')" />
            <x-input class="the-input1"  id="title" type="text" name="title" :value="old('title') ?? $resource->title" required />
        </div>

        <div class="title-admin2">
            <x-label class="the-title"  for="price" :value="__('Link:')" />
            <x-input class="the-input"  id="link" type="text" name="link" :value="old('link') ?? $resource->link" required />
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

