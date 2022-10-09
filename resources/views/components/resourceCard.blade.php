<div class="contenedor-cartasR">
  @foreach ($resource ?? '' as $resource)

  <div class="cardR">

    <div class="img-cardR">
      <a href="{{ url('/welcome') }}">
        <img src="{{$resource->image}}" class="cardR" alt="...">
      </a>
    </div>

    <div class="card-bodyR">

      <div class="  R">
        <h5  class="card-titleR"><strong>{{$resource->title}}</strong></h5>
      </div>
    </div>

  </div>

    @endforeach
</div> 