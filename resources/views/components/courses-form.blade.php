<div class="description-container">
    @foreach ($participant as $participants)
    <form method="POST" action="{{route('description.update', $participant)}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      
          <p class="datos">Nombre: {{$participant->first_name}}</p>
          <p class="datos">Apellido: {{$participant->last_name}}</p>
          <p class="datos">Edad: {{$participant->birth_date}}</p>
          <p class="datos">Correo: {{$participant->email}}</p>
          <p class="datos">Whatsapp: {{$participant->whatsapp}}</p>
          <p class="datos">Ciudad: {{$participant->city}}</p>
          <p class="datos">¿Cómo nos conociste?: {{$participant->how_did_you_meet_us}}</p>
          <p class="datos">¿Cómo nos conociste?: {{$participant->legals}}</p>
          
      </div>
      </div>
      <div class="checkbox-list">
        <input type="checkbox" id="course1" name="course1" value="course1">
        <label for="course1">$date</label><br>

      </div>
      <div class="btn-description">
         <button href="" class="description-button">Solicitar Plaza</button>
      </div>
      @endforeach
  </div>