
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
      <form class="description-form" action="{{ route('inscription') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-line">
         <x-label class="label-form" for="first_name" :value="__('Nombre')" />
         <x-input id="first_name" class="input-form" type="text" name="first_name" :value="old('first_name')" required autofocus />
        </div>

        <div class="form-line">
         <x-label class="label-form" for="last_name" :value="__('Apellidos')" />
         <x-input id="last_name" class="input-form" type="text" name="last_name" :value="old('last_name')" required autofocus />
        </div>

        <div class="form-line">
         <x-label class="label-form" for="birth_date" :value="__('Fecha Nacimiento')" />
         <x-input id="birth_date" class="input-form" type="text" name="birth_date" :value="old('birth_date')" required autofocus />
        </div>

        <div class="form-line">
         <x-label class="label-form" for="email" :value="__('Email')" />
         <x-input id="email" class="input-form" type="text" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="form-line">
         <x-label class="label-form" for="whatsapp" :value="__('Whatsapp')" />
         <x-input id="whatsapp" class="input-form" type="text" name="whatsapp" :value="old('whatsapp')" required autofocus />
        </div>

        <div class="form-line">
         <x-label class="label-form" for="city" :value="__('Ciudad')" />
         <x-input id="city" class="input-form" type="text" name="city" :value="old('city')" required autofocus />
        </div>
      
        <div class="form-line">
         <x-label class="label-form" for="how_did_you_meet_us" :value="__('¿Como nos has conocido?')" />
         <x-input id="how_did_you_meet_us" class="input-form" type="text" name="how_did_you_meet_us" :value="old('how_did_you_meet_us')" required autofocus />
        </div>

        <div class="form-line">
         <input type="checkbox" class="form-check-input" id="legals" name="legals" value="1">
         <label class="form-check-label" for="legals">He leído y acepto a Factoría F5, como responsable del tratamiento de mis datos con la finalidad de dar respuesta a mi consulta o petición. Y politica de privacidad</label>
        </div>

        <div class="btn-form">
          <button class="btn-F" name="sendForm">
              {{ __('Guardar') }}
          </button>
        </div>
      </form>

      <div class="legals-line">
       <x-label class="txt-F" for="legals" :value="__('Política de privacidad')" />
      </div>
      
      <section class="privacy-politics">
        En cumplimiento con la Ley Orgánica 3/2018 de Protección de Datos Personales y Garantía de Derechos Digitales así como del Reglamento (UE) 2016/679 de protección de datos personales (RGPD), le informamos que Asociación Factoría F5, con domicilio en Calle dels Carders 24, 3º 2ª, 08003 en Barcelona, como responsable del tratamiento de sus datos personales, le informamos: Los datos personales facilitados por usted, seran tratados por Asociación Factoría F5, con la finalidad de proceder a la correcta prestacioń de los servicios solicitados, atender sus consultas y enviarle información relacionada con la entidad que pueda ser de su interés. 
        Sus datos no serán comunicados a terceros salvo obligación legal o previa solicitud de su consentimiento y serán conservados por un plazo minimo de cinco años. Puede ejercitar sus derechos de acceso, rectificación , supresión, oposición , limitación y portabilidad, en el domicilio Calle dels Carders 24, 3º 2ª, 08003 en Barcelona, Barcelona, llamando al número de telef́ono 687493484 o enviando un e-mail a lopd@factoriaf5.org. 
        Podrá presentar una reclamación ante la Agencia Española de Protección de Datos si considera que sus datos han sido tratados de forma inadecuada.
        <br>
        Tras la publicación de la Ley 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales, en el artículo 7 se establece que el tratamiento de los datos personales de un menor de edad únicamente podrá fundarse en su consentimiento cuando sea mayor de catorce años.
          Se exceptúan los supuestos en que la ley exija la asistencia de los titulares de la patria potestad o tutela para la celebración del acto o negocio jurídico en cuyo contexto se recaba el consentimiento para el tratamiento.
          El tratamiento de los datos de los menores de catorce años, fundado en el consentimiento, solo será lícito si consta el del titular de la patria potestad o tutela.
      </section>
  </div>

  


    