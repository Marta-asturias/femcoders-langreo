<x-head />

<h1 class="workshopscreate">Añadir Talleres</h1>

<div class="conten-create">
    @if ($errors->any())
        <div role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.save') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="tile-create">
            <x-label for="title" :value="__('Añadir Titulo')" />
            <x-input id="title" type="text" name="title" :value="old('title')" required
                autofocus />
        </div>




{{--         <div class="create-1">
            <input type="file" name="file">
        </div>
 --}}
       
            <div class="create-2">
                <x-label class="label" for="price" :value="__('detalles')" />
                <x-input class="create" type="text" name="details" :value="old('details')" required />
            </div>

            <div class="create-3">
                <x-label for="price" :value="__('')" />
                <span>Edad:</span>
                <x-input id="age" type="text" name="age" :value="old('age')" required />
            </div>

            <div class="create-4">
                <x-label for="price" :value="__('')" />
                <span>Duración:</span>
                <x-input id="duration" type="text" name="duration" :value="old('duration')" required />
            </div>

            <div class="create-5">
                <x-label for="price" :value="__('')" />
                <span>Formato:</span>
                <x-input id="format" type="text" name="format" :value="old('format')" required />
            </div>
        </div>


    <div class="btn-create">
        <button class="btn-c">
            {{ __('Guardar') }}
        </button>
    </div>
    </form>
</div>
