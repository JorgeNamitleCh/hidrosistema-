@extends('admin.layouts.masterComplete')

@section('title', 'Hidrosistema | Directorio')

@section('styles')
    @parent
@stop

@section('scrips')
    
@stop
@section('content')
    <!-- page intro -->
    <div class="page-intro">
        <div class="pic" style="background-image: url({{ asset('assets/pic/intro/ant-cor.jpg') }})"></div>
        
        <div class="grid-row clearfix">
            <div class="page-title">CULTURA DEL AGUA</div>
            <div class="page-subtitle">HISTORIA DEL AGUA EN CÓRDOBA</div>
            <div class="bread-crumbs"><a href="#">Inicio</a> - Historia </div>
        </div>
    </div>
    <!--/ page intro -->
    <!-- page content section -->
    <div class="page-content-section">

        <br><br>
        <div class="grid-row">
            <div class="col-md-12 mb-r animated zoomIn">
                <!--Excerpt-->
                <h1 class="text_h1">HISTORIA DEL AGUA EN CÓRDOBA</h1>
                <p  class="format_text">Los seres humanos requerimos del agua, no sólo para preservar nuestra vida, sino también como elemento esencial de desarrollo. Por siempre los núcleos poblacionales se han asentado en donde existe agua. Las primeras culturas florecieron al paso de los grandes ríos del planeta, o bien, en las proximidades de los lagos y lagunas. Al correr del tiempo los pueblos se formaron también en las cercanías de los florecimientos de los manantiales y, posteriormente, el hombre para establecerse tuvo que recurrir a la explotación de las aguas subterráneas. <br><br>

                El sentido de la posesión del vital líquido ha sido motivo de pugna entre los pueblos en su afán de subsistir, situación que ha llevado al ser humano a optimizar el recurso. Fue así como empezaron a desarrollarse los sistemas de abastecimiento de agua para las localidades. Primero la conducción y distribución del agua fue a través de canales, posteriormente aparecen las magnas obras de los acueductos elevados y, finalmente, surgen las tuberías de diversos materiales para hacer esas funciones. Sin embargo, la condicionante de ser el agua un elemento no renovable y finito, han llevado al ser humano, cada vez más, a buscar un desarrollo sustentable que preserve ese recurso. <br><br>

                Con toda seguridad los primeros asentamientos humanos en lo que hoy conocemos cómo la ciudad de Córdoba, se dieron en las proximidades de las márgenes de los Ríos Seco y San Antonio. La abundancia de agua dio pauta para el crecimiento de las tribus y/o culturas que poblaron las tierras de lo que ahora es el Municipio de Córdoba. <br><br>

                En los años posteriores a la conquista, en los albores del siglo XVII, cuando tan en moda estaba la fundación de villas españolas, se idea crear, en 1618, la Villa de Córdoba en el paraje denominado Quilanco, perteneciente a la Jurisdicción de Zacatepec. <br><br>

                El abastecimiento del vital en la naciente villa se obtenía a través de la canalización de escurrimientos de agua, que era conducida a depósitos ubicados en vecindades o lugares comunes como los tradicionales lavaderos públicos. <br><br>

                Fue hasta finales del siglo XIX, durante el Porfiriato, cuando se construyó el primer sistema formal de abastecimiento de agua, al captarse el agua del Río Seco, a la altura de la población de Sabana Larga, el agua que se captaba era conducida por gravedad a través de un acueducto de tubería de diámetros 12 a 18 pulgadas de barro vitrificado de 10 km de longitud ,este material no se fabricaba en el país por lo que toda la tubería fue transportada desde Europa; el agua llegaba a unos filtros rellenos de material filtrante (arena silica y antracita) que era lo que eliminaba las impurezas que traía y desde ahí se distribuía a la población, posteriormente por falta de conocimientos de los antiguos encargados, los filtros fueron removidos quedando solamente los tanques para el almacenamiento del agua. <br><br>

                El crecimiento de la ciudad obligó a buscar nuevas fuentes de abastecimiento para atender la demanda de agua de sus habitantes. A mediados del siglo XX se capta para consumo de los habitantes cordobeses agua del manantial Los Berros, ubicado en el municipio de Ixtaczoquitlán, Ver. Adicionalmente, en la década de los ochenta del siglo pasado se construye la infraestructura para consumir el agua de los manantiales Dos Arroyos, también ubicados en el Municipio de Ixtaczoquitlán. <br><br>

                Posteriormente, en el año 2003, se pone en operación el Acueducto Nogales-Córdoba, que capta y conduce el agua de la Laguna de Nogales, para uso y consumo de los habitantes de la Ciudad de Córdoba. Más tarde, en la administración 2000- 2004, se implementó el Sistema de Agua Potable de la Sierra del Gallego, que capta 42 litros por segundo de agua del manantial Los Berros del Municipio de Ixhuatlán del Café y abastece a 14 localidades de la Sierra del Gallego.</p>

            </div>
            <!--/Second column-->

        </div>

        <div class="grid-row">
            <div class="col-md-12 mb-r  animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/about-ant.jpg') }}" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <p class="white-text">HISTORIA DEK AGUA EN CÓRDOBA</p>

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