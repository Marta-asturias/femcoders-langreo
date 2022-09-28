<div class="contenedor-cartas">
  @foreach ($resource ?? '' as $resource)
  <div class="card card-home mx-auto" style="width: 18rem;">

    <div class="img-card">
    <img src="{{$resource
      ->image}}" class="card-img-top" alt="...">
    </div>

    <div class="card-body">
      <div class="card-title2">
        <h5  class="card-title ">Titulo: {{$resource
        ->title}}</h5>
      
      </div>

      <div class="button-cards">
        <a href="h" class="btn btn-primary">Ir al recurso</a>
      </div>
    </div>
  </div>
    @endforeach
</div> 