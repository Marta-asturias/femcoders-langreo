<div class="contenedor-cartas">
  @foreach ($minigame ?? '' as $minigame)
  <div class="card card-home mx-auto" style="width: 18rem;">

    <div class="img-card">
    <img src="{{$minigame
      ->image}}" class="card-img-top" alt="...">
    </div>

    <div class="card-body">
      <div class="card-title2">
        <h5  class="card-title ">Titulo: {{$minigame
        ->title}}</h5>
        <p class="card-text"> Detalles: {{$minigame
        ->details}}</p>
        <p class="card-text">Edad: {{$minigame
        ->age}}</p> 
      </div>

      <div class="button-cards">
        <a href="https://studio.code.org/s/frozen/lessons/1/levels/1" class="btn btn-primary">Jugar</a>
      </div>
    </div>
  </div>
    @endforeach
</div> 

