
<div id="carouselExampleSlidesOnly" class="carousel" data-bs-ride="carousel">

    <div class="carousel-inner">
        @foreach ($workshop as $workshops)

            <div class="carousel-item active" data-bs-interval="2000">
                <div class="section-courses">
                    
                    <div class="conten-courses">
                        <div class="img-courses">
                            <img src="{{$workshops->image }}" />
                        </div>
                        <div class="conten2-courses">
                            <div class="title-courses">
                                <h4>{{$workshops->title }}</h4>
                            </div>
                            <div class="separador"></div>
                            <div class="text-course">
                                <p>{{$workshops->details}}</p>
                            </div>
                        </div>
                        
                        <div class="btn-cuorses"> 
                            <a href="">
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
    <a href="">
    <button type="button" class="C2-btn" >Ver Más</button> 
    </a>
</div>



          


{{-- @foreach ($event as $events)
          <div class="carousel-item active">
            <img src="{{$events->image }}" class="d-block w-100" height="200" alt="...">
          </div>
          @endforeach
        </div> --}}








            {{-- <div class="carousel-item">
        <div class="section-courses">
            <div class="conten-courses">
                <div class="img-courses">
                    <img src="{{ asset('img/foto8.jpg') }}" />
                </div>
                <div class="conten2-courses">
                    <div class="title-courses">
                        <h4>Título del Curso</h4>
                    </div>
                    <div class="separador"></div>
                    <div class="text-course">
                        <p>HOLA</p>
                    </div>
                </div>
                <div class="btn-cuorses"> 
                <a href="">
                <button type="button" class="C-btn">Inscribete</button> 
                </a>
                </div>
            </div>
        </div>
    </div>

    <div class="carousel-item">
        <div class="section-courses">
            <div class="conten-courses">
                <div class="img-courses">
                    <img src="{{ asset('img/foto9.jpg') }}" />
                </div>
                <div class="conten2-courses">
                    <div class="title-courses">
                        <h4>Título del Curso</h4>
                    </div>
                    <div class="separador"></div>
                    <div class="text-course">
                        <p>HOLA</p>
                    </div>
                </div>
                <div class="btn-cuorses"> 
                <a href="">
                <button type="button" class="C-btn">Inscribete</button> 
                </a>
                </div>
            </div>
        </div>
    </div> --}}