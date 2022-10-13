<x-head/>
@include('layouts.adminNavigation')
<div class="title-admin">
    <h1 class="title-Ad">Editar Talleres</h1>
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
    <form class="conten-admin" action="{{route('update', $workshop)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="title-admin1">
            <x-label class="the-title1" for="title" :value="__('Editar Titulo del Curso')" />
            <x-input class="the-input1" id="title"  type="text" name="title" :value="old('title') ?? $workshop->title" required />
        </div>

        <div class="title-admin2">
            <x-label class="the-title" for="price" :value="__('Edad:')" />
            <x-input class="the-input" id="age"  type="text" name="age" :value="old('age') ?? $workshop->age" required />
        </div>

        <div class="title-admin2">
            <x-label class="the-title" for="price" :value="__('Duracion:')" />
            <x-input class="the-input" id="duration" type="text" name="duration" :value="old('duration') ?? $workshop->duration" required />
        </div>

        <div class="title-admin2">
            <x-label class="the-title" for="price" :value="__('Formato:')" />
            <x-input class="the-input" id="format" type="text" name="format" :value="old('format') ?? $workshop->format" required />
        </div>

        <div class="title-admin2">
            <x-label class="the-title"  for="price" :value="__('Detalles:')" />
            <x-input class="the-input"  id="details" type="text" name="details" :value="old('details') ?? $workshop->details" required />
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
