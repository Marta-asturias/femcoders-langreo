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

<<<<<<< HEAD
<<<<<<< HEAD
    <div class="text-des-edit text-des-edit2">
        <x-label for="price" :value="__('')" />
        <span>Detalles:</span><x-input id="details" class="mt-1 w-24" type="text" name="details" :value="old('details') ?? $workshop->details" required />
    </div>

    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Edad:</span><x-input id="age" class="mt-1 w-24" type="text" name="age" :value="old('age') ?? $workshop->age" required />
    </div>

<<<<<<< HEAD
    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Duracion:</span><x-input id="duration" class="mt-1 w-24" type="text" name="duration" :value="old('duration') ?? $workshop->duration" required />
    </div>

    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Formato:</span><x-input id="format" class="mt-1 w-24" type="text" name="format" :value="old('format') ?? $workshop->format" required />
    </div>

    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Fecha 1:</span><x-input id="date1" class="mt-1 w-24" type="text" name="date1" :value="old('date1') ?? $workshop->date1" required />
    </div>

    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Fecha 2:</span><x-input id="date2" class="mt-1 w-24" type="text" name="date2" :value="old('date2') ?? $workshop->date2" required />
    </div>

    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Fecha 3:</span><x-input id="date3" class="mt-1 w-24" type="text" name="date3" :value="old('date3') ?? $workshop->date3" required />
    </div>

    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Fecha 4:</span><x-input id="date4" class="mt-1 w-24" type="text" name="date4" :value="old('date4') ?? $workshop->date4" required />
    </div>
</div>

</div>

<div class="btn-act">
<button class="btn-A">
    {{ __('Actualizar') }}
</button>
</div>


        <div class="title-admin2">
            <x-label class="the-title" for="price" :value="__('Fecha 1')" />
            <x-input class="the-input" type="text" name="date1" :value="old('date1') ?? $workshop->date1" required />
        </div>
        <div class="title-admin2">
            <x-label class="the-title" for="price" :value="__('Fecha 2')" />
            <x-input class="the-input" type="text" name="date2" :value="old('date2') ?? $workshop->date2"  />
        </div>
        <div class="title-admin2">
            <x-label class="the-title" for="price" :value="__('Fecha 3')" />
            <x-input class="the-input" type="text" name="date3" :value="old('date3') ?? $workshop->date3"  />
        </div>

        <div class="title-admin2">
            <x-label class="the-title" for="price" :value="__('Fecha 4')" />
            <x-input class="the-input" type="text" name="date4" :value="old('date4') ?? $workshop->date4"  />
        </div>

        <div class="create-1">
            <input type="file" name="file" class="form-control">
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



