<div class="contenedor-cartasR">
  @foreach ($resource ?? '' as $resource)

    <div class="cardR">

      <div class="img-cardR">
        <a href="{{$resource->link}}">
          <img src="{{$resource->image}}" alt="...">
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