<x-head/> 
<x-header/>
<div class="title-principal">
    <h1 class="txt-principal">Mini Juegos</h1>
</div>

<div class="img-principal">
    <img src="{{ asset('img/foto9.jpg') }}" alt="">
</div>
<x-miniGameCard :minigame="$minigame"/>
<x-footer/>