<div class="conten-resources">
    <div class="title-resources">
        <h3 class="txt-R">Descubre Más</h3>
    </div>

        @foreach ($resource as $resources)
    <div class="card-end">
        <img src="{{$resources->image}}"  class="card-img-top-end" alt="">
    </div>
        @endforeach
    <div class="btn-R"> 
        <a href="{{ url('/resources') }}">
        <button type="button" class="R-btn">Ver Más</button> 
        </a>
    </div>

</div>