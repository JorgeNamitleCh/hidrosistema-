@extends('admin.layouts.masterComplete')

@section('title', 'Hidrosistema | Día mundial del agua')

@section('styles')
    @parent
@stop

@section('scrips')
    
@stop
@section('content')
    <!-- page intro -->
    <div class="page-intro">
        <div class="pic" style="background-image: url({{ asset('assets/pic/intro/diama.jpg') }})"></div>
        
        <div class="grid-row clearfix">
            <div class="page-title">CULTURA DEL AGUA</div>
            <div class="page-subtitle">DÍA MUNDIAL DEL AGUA</div>
            <div class="bread-crumbs"><a href="{{ url('/') }}">Inicio</a> - Día mundial del agua </div>
        </div>
    </div>
    <!--/ page intro -->
    <!-- page content section -->
    <div class="page-content-section">

        <br><br>
        <div class="grid-row">
            <div class="col-md-8 mb-r animated zoomIn">
                <!--Excerpt-->
                <h1 class="text_h1">DÍA MUNDIAL DEL AGUA</h1>
                <p  class="format_text">La idea de celebrar el Día Mundial del Agua se origina de la conferencia de las Naciones Unidas para el Medio Ambiente y el Desarrollo en Rio de Janeiro en 1992, después de la cual la Asamblea General de la ONU dedico el 22 de marzo a actividades relacionadas a la conservación y al desarrollo de los recurso hídricos. <br><br>

                Su objetivo es promover una comprensión global mayor sobre la necesidad de un uso más responsable del agua y la conservación de esta. <br><br>

                A partir del año 2000, este Organismo Operador ha conmemorado el Día Mundial del Agua 22 de marzo, para lo cual organiza diferentes actividades educativas y recreativas tales como concursos de murales, carteles, dibujo, secuencias, comerciales y foro alusivos al tema del agua.</p>

            </div>
            <div class="col-md-4 mb-r  animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/agua-corazon.jpg') }}" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <p class="white-text">DÍA MUNDIAL DEL AGUA</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="grid-row">
            <!-- portfolio -->
            <div class="block block-portfolio-7 animated zoomIn">
                <div class="block-head block-head-2"><i></i></div>
                <div class="block-cont">
                     <ul>
                        <li class="item item-adv">
                            <img src="{{ asset('assets/pic/dma/dma_2003_s01.jpg') }}" width="289" height="448" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2003_b01.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>
                        </li>
                        <li class="item item-anim">
                            <img src="{{ asset('assets/pic/dma/dma_2006_s01.jpg') }}" width="289" height="448" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2006_b01.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>                                      
                        </li>
                        <li class="item item-photo">
                            <img src="{{ asset('assets/pic/dma/dma_2010_s01.jpg') }}" width="289" height="222" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2010_b01.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>                                          
                        </li>
                        <li class="item item-anim">
                            <img src="{{ asset('assets/pic/dma/dma_2005_s01.jpg') }}" width="289" height="222" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2005_b01.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>
                        </li>
                        <li class="item item-adv">
                            <img src="{{ asset('assets/pic/dma/dma_2008_s01.jpg') }}" width="289" height="448" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2008_b01.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>
                        </li>
                        <li class="item item-photo">
                            <img src="{{ asset('assets/pic/dma/dma_2008_s02.jpg') }}" width="289" height="222" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2008_b02.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>
                        </li>
                        <li class="item item-anim">
                            <img src="{{ asset('assets/pic/dma/dma_2011_s01.jpg') }}" width="289" height="222" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2011_b01.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>
                        </li>
                        <li class="item item-adv">
                            <img src="{{ asset('assets/pic/dma/dma_2011_s02.jpg') }}" width="289" height="448" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2011_b02.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>
                        </li>
                        <li class="item item-photo">
                            <img src="{{ asset('assets/pic/dma/dma_2012_s01.jpg') }}" width="289" height="222" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2012_b01.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>
                        </li>
                        <li class="item item-anim">
                            <img src="{{ asset('assets/pic/dma/dma_2013_s01.jpg') }}" width="289" height="222" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2013_b01.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>
                        </li>
                        <li class="item item-anim">
                            <img src="{{ asset('assets/pic/dma/dma_2012_s02.jpg') }}" width="289" height="448" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2012_b02.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>
                        </li>
                        <li class="item item-adv">
                            <img src="{{ asset('assets/pic/dma/dma_2012_s03.jpg') }}" width="289" height="448" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2012_b03.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>
                        </li>
                        <li class="item item-adv">
                            <img src="{{ asset('assets/pic/dma/dma_2016_s01.jpg') }}" width="289" height="222" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2016_b01.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>
                        </li>
                        <li class="item item-photo">
                            <img src="{{ asset('assets/pic/dma/dma_2016_s02.jpg') }}" width="289" height="222" alt="">
                            <div>
                                <a href="{{ asset('assets/pic/dma/dma_2016_b02.jpg') }}" rel="fancybox" class="fancybox fa fa-search-plus"></a>
                                <a href="#" class="fa fa-link"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/ portfolio -->
        </div>
        <div class="grid-row">
            <div class="block-head block-head-2"><i></i></div>
            <div class="col-md-6">
                <h1 class="text_h1">Eventos realizados</h1>
                <h6><span class="tag blue">CONCURSO DE DIBUJO</span></h6>
                <h6><span class="tag blue">PONLE EL NOMBRE A TU MASCOTA</span></h6>
                <h6><span class="tag blue">INAUGURACION CLUB AQUAMIGOS </span></h6>
                <h6><span class="tag blue">CONCURSO REALIZA TU MASCOTA </span></h6>
                <h6><span class="tag blue">CONCURSO DE MURALES </span></h6>
                <h6><span class="tag blue">1ER. CONCURSO DE CARTEL.  </span></h6>
                <h6><span class="tag blue">DESFILE Y PRESENTACION AL ALCALDE </span></h6>
                <h6><span class="tag blue">COMEDIA MUSICAL VITALITA LA GOTITA  </span></h6>
                <h6><span class="tag blue">CONCURSO DE SECUENCIAS </span></h6>
                <h6><span class="tag blue">PRIMER FORO INFANTIL Y JUVENIL DEL AGUA  </span></h6>
                <h6><span class="tag blue">1ER. CONCURSO DE COMERCIALES  </span></h6>
                <h6><span class="tag blue">LA SEMANA DEL AGUA  </span></h6>
                <h6><span class="tag blue">CONCURSO DE PERSONAJE “SE BUSCA VILLANO”  </span></h6>
                <h6><span class="tag blue">DE CHAVO A CHAVO ECHEMOSLE LA MANO A TLALOC  </span></h6>
                <h6><span class="tag blue">CONCURSO UNA ROLA POR EL AGUA </span></h6>
                <h6><span class="tag blue">CONCURSO DE GRAFITTI  </span></h6>
                <h6><span class="tag blue">SEGUNDO CONCURSO DE CARTEL </span></h6>
                <h6><span class="tag blue">LA FERIA DEL AGUA  </span></h6>
                <h6><span class="tag blue">OBRA DE TEATRO “LAS AVENTURAS DE VITALITA”  </span></h6>
                <h6><span class="tag blue">CAPTACION DE AGUA DE LLUVIA  </span></h6>
                <h6><span class="tag blue">CONCURSO DE ECO MURALES </span></h6>
                <h6><span class="tag blue">VISUALIZANDO UNA PTAR </span></h6>
            </div>
            <div class="col-md-6">
                <h1 class="text_h1">Comedia musical vitalita la gotita</h1>
                <p  class="format_text">Una de las actividades relevantes ha sido la puesta en escena de la Comedia Musical Vitalita la Gotita. <br><br>

                En ella intervinieron 140 actores, miembros del Centro de Atención Múltiple Nº 9 y Adultos en Plenitud del DIF Municipal, todos ellos pertenecientes al grupo de Psicoballet de la Universidad Veracruzana en Córdoba, quienes ayudaron a difundir nuestro mensaje de cuidar el agua.
                <br><br>
                La obra se presentó en 6 ocasiones en la ciudad y una durante el Encuentro Nacional de Cultura del Agua 2004 ENCA 04, en Boca del Río, Veracruz.</p>
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/dma/gotita.jpg') }}" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <p class="white-text">DÍA MUNDIAL DEL AGUA</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-row">
            <br><br><br>
        </div>
    </div>
    <!--/ page content section -->

@stop