
<div class="card mb-3" style="max-width: 540px;" >  @foreach ($workshop ?? '' as $workshop)
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{$workshop
        ->image}}" class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5  class="card-title ">Titulo: {{$workshop
          ->title}}</h5>
          <p class="card-text"> Detalles: {{$workshop
          ->details}}</p>
          <p class="card-text">Edad: {{$workshop
          ->age}}</p> 
            <p class="card-text">Duración: {{$workshop
                ->duration}}</p> 
            <p class="card-text">Formato: {{$workshop
                    ->format}}</p>
                     <a href="" class="btn btn-primary">Solicitar Plaza</a>
      </div>
    </div>
  </div>
  @endforeach
</div>














{{-- 

<div class="contenedor-cartas">
    @foreach ($workshop ?? '' as $workshop)
    <div class="card card-home" style="width: 18rem;">
  
      <div class="img-card">
      <img src="{{$workshop
        ->image}}" class="card-img-top" alt="...">
      </div>
  
      <div class="card-body">
        <div class="card-title2">
          <h5  class="card-title ">Titulo: {{$workshop
          ->title}}</h5>
          <p class="card-text"> Detalles: {{$workshop
          ->details}}</p>
          <p class="card-text">Edad: {{$workshop
          ->age}}</p> 
            <p class="card-text">Duración: {{$workshop
                ->duration}}</p> 
            <p class="card-text">Formato: {{$workshop
                    ->format}}</p> 
        </div>

        <div class="button-cards">
          <a href="" class="btn btn-primary">Solicitar Plaza</a>
        </div>
      </div>
    </div>
      @endforeach
  </div> --}}