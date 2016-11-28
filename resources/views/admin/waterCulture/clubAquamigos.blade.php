@extends('admin.layouts.masterComplete')

@section('title', 'Hidrosistema | Disponibilidad del agua')

@section('styles')
    @parent
    <style type="text/css">
        .format_text{ 
            text-align: justify; 
            color: #222; 
            font-family: 'Open Sans', sans-serif; 
            font-size: 14px; 
            font-weight: 400; 
            line-height: 24px; 
            margin: 0 0 14px;
        }
        .text_h1{
            color: #F90B6D; font-family: 'Open Sans', sans-serif; font-size: 30px; font-weight: 300; line-height: 40px; margin: 0 0 16px;
        }
        .text_h2{
            color: #F90B6D; font-family: 'Open Sans', sans-serif; font-size: 25px; font-weight: 300; line-height: 40px; margin: 0 0 16px;
        }
    </style>
@stop

@section('scrips')
    
@stop
@section('content')
    <!-- page intro -->
    <div class="page-intro">
        <div class="pic" style="background-image: url({{ asset('assets/pic/intro/club.png') }})"></div>
        
        <div class="grid-row clearfix">
            <div class="page-title">CULTURA DEL AGUA</div>
            <div class="page-subtitle">CLUB DE AQUAMIGOS</div>
            <div class="bread-crumbs"><a href="#">Inicio</a> - Club de aquamigos </div>
        </div>
    </div>
    <!--/ page intro -->
    <!-- page content section -->
    <div class="page-content-section">

        <br><br>
        <div class="grid-row">
            <div class="col-md-7 mb-r animated zoomIn">
                <!--Excerpt-->
                <h1 class="text_h1">Club Aquamigos</h1>
                <p  class="format_text">Como complemento a este programa, se ha invitado a los niños y jóvenes de preescolar, primaria, secundaria y bachillerato a formar parte de un club denominado “Club Aquamigos” cuya misión es “cuidar el buen uso del agua”; a los miembros del club se les entregan credenciales de identifica con y se realizan con ellos diversas actividades tales como concursos, visitas a las instalaciones de Hidrosistema y talleres, siendo ellos un apoyo invaluable en el reporte de fugas y del uso inadecuado del agua.</p>

            </div>
            <div class="col-md-5 mb-r animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/aquamigos.png') }}" class="img-fluid " alt="">
                </div>
            </div>
        </div>
        <div class="grid-row">
            <div class="col-md-5 mb-r animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/gotita.jpg') }}" class="img-fluid " alt="">
                </div>
            </div>
            <div class="col-md-7 mb-r animated zoomIn">
                <!--Excerpt-->
                <h1 class="text_h1">Vitalita la Gotita</h1>
                <p  class="format_text">El Club Aquamigos cuenta con una mascota, una gotita de agua llamada Vitalita la Gotita, la cual adquirió su nombre a partir de un concurso denominado “Ponle nombre a tu mascota” para el cual se recibieron alrededor de 250 nombres; la ganadora además de ponerle el nombre, le hizo una canción la cual es utilizada como jingle y sirvió como pauta para la realización de una Comedia musical. Ahora Vitalita cuenta con otros amigos quienes conforman el Club Aquamigos. </p>
            </div>
        </div>
        <div class="grid-row">
            <div class="col-md-4 mb-r animated zoomIn">
                <h1 class="text_h1">Vitalita la Gotita</h1>
                <p  class="format_text">Ellos luchan contra Basurito, otro personaje producto del concurso “Se busca Villano”, quien gusta de atentar contra Vitalita y sus amigos, y disfruta de la contaminación.  </p>
            </div>
            <div class="col-md-4 mb-r animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/clubs.png') }}" class="img-fluid " alt="">
                </div>
            </div>
            <div class="col-md-4 mb-r animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/basurin.png') }}" class="img-fluid " alt="">
                </div>
            </div>
        </div>
        <div class="grid-row">
            <br><br><br>
        </div>
    </div>
    <!--/ page content section -->
@stop