<section class="mini-game">
<div class="title-mg">
    <h2 class="txtMg">Juega, Crea Código y Divierte</h2>
</div>
    <div class="conte-MG">
        @foreach ($minigames as $minigame)
            <div class="cardMj">
                <div class="card-mg">
                    <img class="card-mj" src="{{$minigame->image}}" />
                </div>
                <div class="mgtitle">
                    <h5 class="mjtitle"><strong>{{$minigame->title}} </strong></h5>
                </div>
                <div class="btnMjCard">
                    <a href="#" class="btn-mj">Jugar</a>
                </div>
            </div>
        @endforeach
    </div>

<div class="btn-mj2">
    <a href="{{ url('/minigames') }}" class="btn-b">Ver Más</a>
</div>

</section>