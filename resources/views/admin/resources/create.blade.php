<x-head />
<x-header />
<div class="title-admin">
    <h1 class="title-Ad">Añadir Recursos</h1>
</div>

@if ($errors->any())
    <div role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="admin-Conten">

    <form class="conten-admin" action="{{ route('resource.save') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="title-admin1">
            <x-label class="the-title1" for="title" :value="__('Añadir Titulo')" />
            <x-input class="the-input1" id="title" type="text" name="title" :value="old('title')" required
                autofocus />
        </div>
        <div class="title-admin2">
            <x-label class="the-title" for="price" :value="__('detalles')" />
            <x-input class="the-input" type="text" name="details" :value="old('details')" required />
        </div>
        <div class="title-admin2">
            <x-label class="the-title" for="price" :value="__('Edad')" />
            <x-input class="the-input" id="age" type="text" name="age" :value="old('age')" required />
        </div>

        <div class="title-admin2">
            <x-label class="the-title" for="the-title" :value="__('Link')" />
            <x-input class="the-input" type="text" name="link" :value="old('link')" required />
        </div>

        <div class="create-1">
            <input class="" type="file" name="file">
        </div>

        <div class="btn-general">
            <div class="btn-create">
                <button class="btn-c">
                    {{ __('Guardar') }}
                </button>
            </div>

            <div class="btn-cancelar">
                <a href="{{ url('/admin/workshops/workshops') }}" class=" btn-cancelar-admin">Cancelar</a>
            </div>
        </div>

    </form>
</div>
<x-footer />
