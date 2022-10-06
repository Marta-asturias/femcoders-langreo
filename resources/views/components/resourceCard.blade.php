<div class="contenedor-cartasR">
  @foreach ($resource ?? '' as $resource)

  <div class="cardR">

    <div class="img-cardR">
      <img src="{{$resource->image}}" class="cardR" alt="...">
    </div>

    <div class="card-bodyR">

      <div class="  R">
        <h5  class="card-titleR"><strong>{{$resource->title}}</strong></h5>
      </div>

      <div class="button-cardsR">
        <a href="h" class="btnR">Acceder</a>
      </div>

    </div>
  </div>

    @endforeach
</div> 