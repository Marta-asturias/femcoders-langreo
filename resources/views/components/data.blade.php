<div>
    @foreach ($workshop as $workshops)
    <form class="description-form" action="{{ route('getdate', $workshops) }}" method="GET" enctype="multipart/form-data">
        @csrf
        @endforeach
        <div class="text-des-edit">
            <x-label for="price" :value="__('')" />
            <span>Fecha 1:</span><x-input id="date1" class="mt-1 w-24" type="text" name="date1" :value="old('date1') ?? $workshop->date1" required />
        </div>
        
    </form>
  
</div>