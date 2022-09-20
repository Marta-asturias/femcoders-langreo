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
    <form action="{{ route('admin.save') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="tile-create">
        <x-label class="text-title-c" for="title" :value="__('Añadir Titulo')" />
        <x-input id="title" class="input-tilte-create" type="text" name="title" :value="old('title')" required autofocus />
        </div>
        <div class="tile-create">
            <x-label class="text-title-c" for="title" :value="__('Detalles')" />
            <x-input id="title" class="input-tilte-create" type="text" name="details" :value="old('details')" required autofocus />
            </div>


    {{--  <div class="principal-create">
            <div class="create-1">
                <input type="file" name="file" class="btn-img-c">
            </div> --}}

            <div class="create-2">
                <div class="text-des-create text-des-create2">
                    <x-label for="price" :value="__('')" />
                    <span>Descripción:</span>
                    <x-input id="details"  type="text" name="details" :value="old('details')" required />
                </div>

                <div class="text-des-create">
                    <x-label for="price" :value="__('')" />
                    <span>Edad:</span>
                    <x-input id="age"  type="text" name="age" :value="old('age')" required />
                </div>

                <div class="text-des-create">
                    <x-label for="price" :value="__('')" />
                    <span>Duración:</span>
                    <x-input id="duration"  type="text" name="duration" :value="old('duration')" required />
                </div>

                <div class="text-des-create">
                    <x-label for="price" :value="__('')" />
                    <span>Formato:</span>
                    <x-input id="format"  type="text" name="format" :value="old('format')" required />
                </div>
            </div>
        </div>

        <div class="btn-create">
            <button class="btn-c">
                {{ __('Guardar') }}
            </button>
        </div>
    </form>
</div>