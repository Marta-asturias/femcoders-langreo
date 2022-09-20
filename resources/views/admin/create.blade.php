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



        <div class="btn-create">
            <button class="btn-c">
                {{ __('Guardar') }}
            </button>
        </div>
        
    </form>
</div>