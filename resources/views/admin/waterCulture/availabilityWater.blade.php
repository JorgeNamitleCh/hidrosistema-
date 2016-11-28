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
        <div class="pic" style="background-image: url({{ asset('assets/pic/intro/disp_agua.jpg') }})"></div>
        
        <div class="grid-row clearfix">
            <div class="page-title">CULTURA DEL AGUA</div>
            <div class="page-subtitle">DISPONIBILIDAD DEL AGUA</div>
            <div class="bread-crumbs"><a href="#">Inicio</a> - Disponibilidad de agua </div>
        </div>
    </div>
    <!--/ page intro -->
    <!-- page content section -->
    <div class="page-content-section">

        <br><br>
        <div class="grid-row">
            <div class="col-md-5 mb-r animated zoomIn">
                <!--Excerpt-->
                <h1 class="text_h2">Distribución del agua en el planeta tierra</h1>
                <p  class="format_text">En la tierra hay 1 400 millones de kilómetros cúbicos de agua. El 75 % de la superficie de la tierra esta constituida de agua, sin embargo de este gran porcentaje el 97% se considera no apta para consumo humano por ser agua salada, y el 3% restante se considera agua dulce. Que a su vez, de este porcentaje el 2% se encuentra congelada en los polos y solo queda el 1% como agua superficial en la tierra. <br><br>

                Este 1% se encuentra esparcido en todo el mundo de manera no equitativa por lo que en unos países se encuentra en abundancia y en otros se carece de este vital líquido. <br><br>

                Todos sabemos que el agua salada no la podemos utilizar, ya que su alto contenido de sales minerales y metales afectan tanto al hombre como a la ganadería, agricultura e industria; para poderla usar, tendríamos que quitarle el exceso de sal, proceso que es muy costoso; ya en Europa algunos países que no tienen alternativa lo están realizando pero para la mayoría de los países es imposible todavía.</p>

            </div>
            <div class="col-md-3 mb-r animated zoomIn">
                <!--Excerpt-->
                <h1 class="text_h2">Disponibilidad del agua en el mundo</h1>
                <p  class="format_text">La crisis provocada por la falta de agua en el mundo es fácil de entender pero difícil de resolver. La cantidad de agua en nuestro planeta es finita. El número de habitantes está creciendo rápidamente y la utilización del agua crece aún en mayor medida. Un tercio de la población mundial vive en países que sufren la falta de agua. Para EL 2025 se espera que esta cifra aumento dos tercios.<br><br>

                De acuerdo con la Organización de las Naciones Unidas, hay 263 cuencas compartidas por dos o más países.</p>
            </div>
            <div class="col-md-4 mb-r  animated zoomIn">
                <h1 class="text_h2">Distribución del agua en el país</h1>
                <p  class="format_text">En nuestro país el agua tampoco se encuentra esparcida equitativamente, de tal manera que en la zona norte del país se tiene carencia de agua y en la zona sur se encuentra en mayor abundancia. <br><br>

                En los últimos cincuenta años, México paso de ser considerado como un país con alta disponibilidad de agua, a ser considerado como uno de baja disponibilidad, debido principalmente al crecimiento demográfico. <br><br>

                En México, se precipita anualmente una lámina promedio de 772 mm sobre el territorio nacional, pero dos terceras partes de ella ocurren en forma torrencial de junio a septiembre, lo que hace muy difícil su aprovechamiento.</p>
            </div>
        </div>
        <div class="grid-row">
            <div class="block-head block-head-2 "><i></i></div>
            <div class="col-md-8 animated zoomIn">
                <h1 class="text_h2">Disponibilidad del agua en el estado de Veracruz</h1>
                <p  class="format_text">Teniendo en cuenta su distribución geográfica y características climáticas, en Veracruz hay abundancia de agua, ya que en nuestro territorio escurre el 33 % de toda el agua superficial del país, al tener un escurrimiento superficial anual medio de 139 millones de m3. <br><br>

                La precipitación media anual del estado es de 1,484 milimiteros, prácticamente el doble de la media nacional que es de 772 mm (CNA), encontrando que en su mayoría nuestros ríos son de escasa longitud y descienden de las sierras rumbo al mar. Pese a lo anterior, Veracruz está expuesta a la incidencia de ciclones tropicales, produciendo secuelas negativas que provocan una gran afectación en los sistemas de agua potable y la insalubridad de la población, al ocurrir fuertes inundaciones. <br><br>

                Aparentemente el problema principal de Veracruz no es la escasez, ya que la disponibilidad supera la demanda, sin embargo, en la huasteca veracruzana cada año se presentan sequías severas, a causa de la deforestación, la contaminación de los ríos, la intrusión salina y en las zonas cercanas al mar las descargas, son factores que reducen de manera considerable el caudal aprovechable. De manera general se puede decir que la calidad de las aguas superficiales que nacen en Veracruz presenta básicamente tres características: condiciones aceptables en las partes altas de los ríos. Medianamente contaminadas en las partes medias y altamente contaminadas en las partes bajas.</p>
            </div>
            <div class="col-md-4">
                <div class="view hm-zoom animated zoomIn">
                    <img src="{{ asset('assets/pic/intro/agua_da.png') }}" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <p class="white-text">Disponibilidad del agua</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="grid-row">
            <div class="block-head block-head-2 animated zoomIn"><i></i></div>
            <div class="col-md-4">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/global.jpg') }}" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <p class="white-text">Disponibilidad del agua</p>

                    </div>
                </div>
            </div>
            <div class="col-md-8 animated zoomIn">
                <h1 class="text_h2">Disponibilidad del agua en nuestra ciudad</h1>
                <p  class="format_text">La ciudad de Córdoba está considerada con un clima – templado – húmedo – regular, con abundantes lluvias provenientes del Golfo, porque es una región montañosa, con una temperatura anual promedio de 19.8 ° C y debido a esto se encuentra clasificada como zona de disponibilidad alta de agua. <br><br>


                Se encuentra asentada en una zona en la que las elevaciones del terreno van descendiendo de Noroeste a Sureste y es atravesada por 22 escurrimientos superficiales, destacando por su importancia el Río San Antonio y el Río Seco, desembocando éste último en el Río Atoyac.Una buena parte de los arroyos que corren por la ciudad confluyen, finalmente, en el Río Blanco. <br><br>
 
                Para atender la demanda de agua potable de la población se dispone de 680 LPS, provenientes de las fuentes de abastecimiento que son el Río Seco y los manantiales Los Berros, Dos Arroyos y Laguna de Nogales.</p>
            </div>
        </div>
        <div class="grid-row">
            <br><br><br>
        </div>
    </div>
    <!--/ page content section -->
@stop