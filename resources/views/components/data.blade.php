<div>
    @foreach ($workshop as $workshops)
    <form class="description-form" action="{{ route('getdate', $workshops) }}" method="GET" enctype="multipart/form-data">
        @csrf
        @endforeach
        <div class="form-line">
            <x-label class="label-form" for="date1" :value="__('Fecha')" />
            <x-input id="date1" class="input-form" type="text" name="date1" :value="old('date1')" required autofocus />
        </div>
        
    </form>
  
</div>