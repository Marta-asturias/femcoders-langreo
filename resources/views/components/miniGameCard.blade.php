<div class="contenedor-cartas">
    @foreach ($minigame ?? '' as $minigame)
    <div class="card card-home" style="width: 18rem;">
  
      <div class="img-card">
      <img src="{{$minigame
        ->image}}" class="card-img-top" alt="...">
      </div>
  
      <div class="card-body">
        <div class="card-title2">
          <h5  class="card-title ">Titulo: {{$minigame
          ->title}}</h5>
          <p class="card-text"> Link: {{$minigame
          ->link}}</p>
        </div>

        <div class="button-cards">
          <a href="" class="btn btn-primary btn-primary2">Solicitar Plaza</a>
        </div>
      </div>
    </div>
      @endforeach
  </div>