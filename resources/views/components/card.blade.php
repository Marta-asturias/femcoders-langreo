<div class="contenedor-cartasW">
  @foreach ($workshop ?? '' as $workshop)
    <div class="cardw">

      <div class="img-cardW">
        <img src="{{$workshop->image}}" class="card-imgW" alt="...">
      </div>

      <div class="card-bodyW">

          <div class="card-title2W">
            <h5  class="card-titleW"><strong>{{$workshop->title}}</strong></h5>
            <div class="separador2"></div>
            <p class="card-textW"> <strong>Detalles:</strong>{{$workshop->details}}</p>
            <p class="card-textW"><strong>Edad:</strong>{{$workshop->age}}</p> 
            <p class="card-textW"><strong>Duración:</strong>{{$workshop->duration}}</p> 
            <p class="card-textW"><strong>Formato:</strong>{{$workshop->format}}</p> 
          </div>

          <div class="button-cardsW">
            <a href="{{ route('getdate',['id'=>$workshop->id]) }}" class="btnyw">Solicitar Plaza</a>
          </div>

      </div>
    </div>
@endforeach
</div>









 




