<div class="contenedor-MG">
  @foreach ($minigame ?? '' as $minigame)
  <div class="card-homeMG">
    
    <div class="img-cardMG">
      <img src="{{$minigame->image}}" class="card-img-top" alt="..."/>
    </div>

    <div class="card-bodyMG">
      <div class="card-titleMG">
        <h5  class="cardMg-title "><strong>{{$minigame
        ->title}} </strong></h5>
        <p class="cardMg-text"> <strong>Detalles:</strong> {{$minigame
        ->details}}</p>
        <p class="cardMg-text1"><strong>Edad:</strong> {{$minigame
        ->age}}</p> 
      </div>
    </div>
    <div class="button-cardsMG">
      <a href="https://studio.code.org/s/frozen/lessons/1/levels/1" class="btnMG">Jugar <i class="bi bi-play-fill"></i></a>
    </div>
  </div>
    @endforeach
</div> 

