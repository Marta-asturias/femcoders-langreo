<form action="{{route('getDates', $workshop)}}" method="GET" enctype="multipart/form-data">
    @csrf

        <div class="descrip-edit2">
        
    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Fecha 1:</span><x-input id="date1" class="mt-1 w-24" type="checkbox" name="date1" :value="old('date1') ?? $workshop->date1" required />
    </div>

    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Fecha 2:</span><x-input id="date2" class="mt-1 w-24" type="checkbox" name="date2" :value="old('date2') ?? $workshop->date2"  />
    </div>

    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Fecha 3:</span><x-input id="date3" class="mt-1 w-24" type="checkbox" name="date3" :value="old('date3') ?? $workshop->date3"  />
    </div>

    <div class="text-des-edit">
        <x-label for="price" :value="__('')" />
        <span>Fecha 4:</span><x-input id="date4" class="mt-1 w-24" type="checkbox" name="date4" :value="old('date4') ?? $workshop->date4"  />
    </div>
</div>
    </form>