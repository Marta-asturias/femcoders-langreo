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
    <form action="{{ route('resource.save') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="tile-create">
        <x-label class="text-title-c" for="title" :value="__('Añadir Titulo')" />
        <x-input id="title" class="input-tilte-create" type="text" name="title" :value="old('title')" required autofocus />
        </div>



    
            <div class="create-1">
                <input type="file" name="file" class="btn-img-c">
            </div> 

            <div class="create-2">
                <div class="text-des-create text-des-create2">
                    <x-label for="price" :value="__('')" />
                    <span>Link:</span>
                    <x-input id="link"  type="text" name="link" :value="old('link')" required />
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
