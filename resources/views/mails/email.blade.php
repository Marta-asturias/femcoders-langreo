<x-head/>
<div class="conten-mail">
    <div class="img-mail">
        <img src="{{ asset('img/logofempng.png') }}" class="imageEmail"alt="...">
        <img src="{{ asset('img/factoria-web.png') }}" class="imageEmail"alt="...">
    </div>

    <div class="greeting-mail">
        <h1 class="txt-greeting">Hi, Hello, Hola, Holi!</h1>
    </div>

    <div class="txt-mail">
        <p class="data-mail">
            Hemos recibido tu inscripción <strong>{{$data['first_name']}}</strong> <strong>{{$data['last_name']}}</strong>
        </p>
        <p class="data-mail">
            <strong>Te esperamos online el <strong>{{$data['date']}}</strong> para el taller Conoce Python!</strong> Recuerda que es imprescindible que tengas micrófono, cámara y ordenador para poder disfrutar del taller. 
        </p>
    </div>
    <div class="firms-mail">
        <p class="txt-firms">
            ¡Programar mola! 
        </p>
        <p class="txt-firms">
            Equipo Talleres Fem Coders F5
        </p>
        <p class="txt-firms">
            talleres@factoriaf5.org
        </p>
    </div>
</div>
