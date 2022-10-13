<div class="conten-data">
            <div class="text-data">
                <x-label class="label-data" for="price" :value="$workshop->date1" />
                <x-input class="input-data" id="date1" type="radio" name="date" :value="old('date1') ?? $workshop->date1" required />
            </div>
            <div class="text-data">
                <x-label class="label-data" for="price" :value="$workshop->date2" />
                <x-input class="input-data" id="date" type="radio" name="date" :value="old('date2') ?? $workshop->date2" required />
            </div>
            <div class="text-data">
                <x-label class="label-data" for="price" :value="$workshop->date3" />
                <x-input class="input-data" id="date3"  type="radio" name="date" :value="old('date3') ?? $workshop->date3" required />
            </div>
            <div class="text-data">
                <x-label class="label-data"  for="price" :value="$workshop->date4" />
                <x-input class="input-data" id="date4"  type="radio" name="date" :value="old('date4') ?? $workshop->date4" required />
            </div>
</div>