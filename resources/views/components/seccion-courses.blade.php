
<div class="section-courses" id="carouselExampleSlidesOnly" class="carousel" data-bs-ride="carousel">
    
    <div class="title-C">
        <h2 class="txt-C">Aprende a crear tus propios juegos y mucho más</h2>
    </div>

    <div class="carousel-inner">
        @foreach ($workshop as $workshops)

            <div class="carousel-item active" data-bs-interval="1000">
                <div class="section-courses">
                    
                    <div class="conten-courses">
                        <div class="img-courses">
                            <img src="{{$workshops->image }}" />
                        </div>
                        <div class="conten2-courses">
                            <div class="title-courses">
                                <h2> <strong> {{$workshops->title }} </strong></h2>
                            </div>
                            <div class="separador"></div>
                            <div class="text-course">
                                <p><strong>Formato: </strong>{{$workshops->format}}</p>
                            </div>
                            <div class="text-course">
                                <p><strong>Edad: </strong>{{$workshops->age}}</p>
                            </div>
                            <div class="text-course">
                                <p><strong>Duración: </strong>{{$workshops->duration}}</p>
                            </div>
                            <div class="text-course2">
                                <p><strong>Detalles: </strong>{{$workshops->details}}</p>
                            </div>
                        </div>
                        
                        <div class="btn-cuorses"> 
                            <a href="{{ route('createParticipant',['id'=>$workshops->id]) }}">
                                <button type="button" class="C-btn">Inscribete</button> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="btn2-cuorses"> 
    <a href="{{ url('/workshops') }}">
    <button type="button" class="C2-btn" >Ver Más</button> 
    </a>
</div>
