<div class="conten-data">
    @foreach ($workshop as $workshops)
    <form class="form-data" action="{{ route('getdate', $workshops) }}" method="GET" enctype="multipart/form-data">
        @csrf
        @endforeach
        <div class="text-data">
            <x-label class="label-data" for="price" :value="__('Fecha 1:')" />
            <x-input id="date1" class="mt-1 w-24" type="text" name="date1" :value="old('date1') ?? $workshop->date1" required />
        </div>
        <div class="text-data">
            <x-label class="label-data"  for="price" :value="__('Fecha 2:')" />
            <x-input id="date1" class="mt-1 w-24" type="text" name="date2" :value="old('date2') ?? $workshop->date2" required />
        </div>
        <div class="text-data">
            <x-label class="label-data"  for="price" :value="__('Fecha 3:')" />
            <x-input id="date1" class="mt-1 w-24" type="text" name="date3" :value="old('date3') ?? $workshop->date3" required />
        </div>
        <div class="text-data">
            <x-label class="label-data"  for="price" :value="__('Fecha 4:')" />
            <x-input id="date1" class="mt-1 w-24" type="text" name="date4" :value="old('date4') ?? $workshop->date4" required />
        </div>
        
    </form>
  
</div>