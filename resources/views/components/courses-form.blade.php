<div class="conten-create">
  @if($errors->any())
      <div role="alert">
      <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      </ul>
      </div>
      @endif

  <div class="description-container">
      <form action="{{ route('inscription') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="first_name">
        <x-label class="text-title-c" for="first_name" :value="__('Nombre')" />
        <x-input id="first_name" class="input-tilte-create" type="text" name="first_name" :value="old('first_name')" required autofocus />
        <x-label class="text-title-c" for="last_name" :value="__('Apellidos')" />
        <x-input id="last_name" class="input-tilte-create" type="text" name="last_name" :value="old('last_name')" required autofocus />
        <x-label class="text-title-c" for="birth_date" :value="__('Fecha Nacimiento')" />
        <x-input id="birth_date" class="input-tilte-create" type="text" name="birth_date" :value="old('birth_date')" required autofocus />
        <x-label class="text-title-c" for="email" :value="__('Email')" />
        <x-input id="email" class="input-tilte-create" type="text" name="email" :value="old('email')" required autofocus />
        <x-label class="text-title-c" for="whatsapp" :value="__('Whatsapp')" />
        <x-input id="whatsapp" class="input-tilte-create" type="text" name="whatsapp" :value="old('whatsapp')" required autofocus />
        <x-label class="text-title-c" for="city" :value="__('Ciudad')" />
        <x-input id="city" class="input-tilte-create" type="text" name="city" :value="old('city')" required autofocus />
        <x-label class="text-title-c" for="how_did_you_meet_us" :value="__('¿Como nos has conocido?')" />
        <x-input id="how_did_you_meet_us" class="input-tilte-create" type="text" name="how_did_you_meet_us" :value="old('how_did_you_meet_us')" required autofocus />
        <x-label class="text-title-c" for="legals" :value="__('Política de privacidad')" />
        <input type="checkbox" class="form-check-input" id="legals" name="legals" value="1">
        <label class="form-check-label" for="legals">Aceptar condiciones de uso</label>

        <div class="btn-create">
          <button class="btn-c" name="sendForm">
              {{ __('Guardar') }}
          </button>
      </div>
      </form>








    {{-- <form method="POST" action="{{route('inscription')}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      
          <p class="datos">Nombre: {{$participant->first_name}}</p>
          <p class="datos">Apellido: {{$participant->last_name}}</p>
          <p class="datos">Edad: {{$participant->birth_date}}</p>
          <p class="datos">Correo: {{$participant->email}}</p>
          <p class="datos">Whatsapp: {{$participant->whatsapp}}</p>
          <p class="datos">Ciudad: {{$participant->city}}</p>
          <p class="datos">¿Cómo nos conociste?: {{$participant->how_did_you_meet_us}}</p>
          <p class="datos">Bases legales: {{$participant->legals}}</p>
          
      </div>
      </div>
      <div class="checkbox-list">
        <input type="checkbox" id="course1" name="course1" value="course1">
        <label for="course1">$date</label><br>

      </div>
      <div class="btn-description">
         <button href="" class="description-button">Solicitar Plaza</button>
      </div>
  </div> 
</form>
  --}}

  {{-- <div class="btn-create">
    <button class="btn-c">
        {{ __('Guardar') }}
    </button>
</div> --}}
