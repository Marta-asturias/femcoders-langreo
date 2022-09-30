<div class="contenedor-cartasR">
  @foreach ($resource ?? '' as $resource)

  <div class="cardR">

    <div class="img-cardR">
      {{-- <img src="{{$resource->image}}" class="cardR" alt="..."> --}}
    </div>

    <div class="card-bodyR">

      <div class="card-title2R">
        <h5  class="card-titleR">Titulo: {{$resource->title}}</h5>
      </div>

      <div class="button-cardsR">
        <a href="h" class="btnR">Ver Más</a>
      </div>

    </div>
  </div>

    @endforeach
</div> 