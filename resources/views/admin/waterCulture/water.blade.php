@extends('admin.layouts.masterComplete')

@section('title', 'Hidrosistema | Directorio')

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
    </style>
@stop

@section('scrips')
    
@stop
@section('content')
    <!-- page intro -->
    <div class="page-intro">
        <div class="pic" style="background-image: url({{ asset('assets/pic/intro/agua1.jpg') }})"></div>
        
        <div class="grid-row clearfix">
            <div class="page-title">CULTURA DEL AGUA</div>
            <div class="page-subtitle">EL AGUA</div>
            <div class="bread-crumbs"><a href="#">Inicio</a> - El agua </div>
        </div>
    </div>
    <!--/ page intro -->
    <!-- page content section -->
    <div class="page-content-section">
        <div class="grid-row">
            <blockquote class="blockquote bq-primary animated zoomIn">
                <p class="bq-title">El AGUA</p>
                <p  class="format_text">El agua es un líquido incoloro, inodoro e insípido, es una combinación de 2 átomos de hidrógeno con (+) y 1 de oxígeno (-), su forma molecular es H2O,debido a que tiene cargas opuestas en cada polo, se dice que la molécula del agua es polar. <br><br>

                Las características de su molécula la hace tan especial, ya que cuando se une con otras moléculas promedio de puentes de hidrogeno presenta particularidades que rompen las reglas que siguen los demás líquidos de la naturaleza.<br><br>

                El agua ocupa las ¾ partes de la superficie terrestre y constituye el 50 a 70 % de los organismos vivos, de ahí su enorme importancia tanto geológica como biológica.</p>
            </blockquote>
        </div>
        <!--First row-->
        <br><br>
        <div class="grid-row">

            <!--First column-->
            <div class="col-md-5 mb-r  animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/aestados.jpg') }}" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <p class="white-text">Los tres estados del agua</p>

                    </div>
                </div>
            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-md-7 mb-r animated zoomIn">
                <!--Excerpt-->
                <h1 class="text_h1">LOS TRES ESTADOS DEL AGUA</h1>
                <p  class="format_text">Al agua la podemos encontrar de diversas maneras en nuestro medio ambiente desde nuestra casa, en la naturaleza, en los ríos, en las nubes y en casi todos lados. Y de diferentes formas que se le conocen como sus estados físicos, que son tres sólido, líquido y gaseoso. <br>

                En su estado líquido la podemos encontrar en ríos, lagos,lagunas, mares, manantiales, nacimientos y ríos subterráneos. <br>
                En su estado sólido lo podemos observar en nuestro congelador,en los copos de nieve. En su forma sólida, el agua es totalmente cristalina; pero a veces al congelarse quedan encerradas en el hielo pequeñas cantidades del aire que tenía disuelto, por lo cual presenta un color blanco y bastante opaco. <br>

                En la naturaleza, el agua se congela primariamente en el aire como nieve, en cristales de formas geométricas variadas con aire en su interior;lo que hace que caiga al suelo muy lentamente en forma de copos blandos. 

                Y en su estado gaseoso la podemos la podemos encontrar en la neblina, en la respiración, en la atmósfera y en el vapor.</p>

            </div>
            <!--/Second column-->

        </div>
        <div class="grid-row">
            <div class="col-md-5 mb-r animated zoomIn">
                <!--Excerpt-->
                <h1 class="text_h1">PUNTO DE FUSIÓN</h1>
                <p  class="format_text">Igual que en el punto de ebullición, se produce un cambio de estado, el agua pasa del estado sólido (hielo) al estado líquido(agua) y todo el calor se invierte en ese cambio de estado, no variando la temperatura, que recibe el nombre de punto de fusión y se produce cuando el agua llega a cero grados centigrados (0°C).</p>

            </div>
            <div class="col-md-7 mb-r animated zoomIn">
                <!--Excerpt-->
                <h1 class="text_h1">PUNTO DE EBULLICIÓN</h1>
                <p  class="format_text">Si ponemos al fuego un recipiente con agua, como el fuego está a mayor temperatura que el agua, le cede calor y la temperatura del agua va aumentando, lo que podemos comprobar si ponemos un termómetro en el agua. Cuando el agua llega a 100 º C, empieza a hervir,convirtiéndose en vapor de agua, y deja de aumentar su temperatura, pese a que el fuego sigue suministrándole calor: al pasar de agua a vapor de agua todo el calor se usa en cambiar de líquido a gas, sin variar la temperatura.

                La temperatura a la que una sustancia cambia de líquido a gas se llama punto de ebullición y es una propiedad característica de cada sustancia, así, el punto de ebullición del agua es de 100ºC.</p>

            </div>
        </div>
        <div class="grid-row">
            <div class="col-md-9 mb-r animated zoomIn">
                <!--Excerpt-->
                <h1 class="text_h1">PROPIEDADES DEL AGUA</h1>
                <p  class="format_text">Las características de la molécula del agua la hace tan especial, ya que cuando se una con otras por medio de puentes de hidrogeno presenta particularidades que rompen las reglas que siguen los demás líquidos de la naturaleza.

                Las moléculas de agua están fuertemente unidas entre sí. Un aspecto paradójico es que el agua es un líquido, aunque sus moléculas se encuentren en promedio fuertemente unidas. Este fenómeno se debe al carácter transitorio de los puentes de hidrógeno, que al formarse y romperse continuamente permiten la movilidad de las moléculas de agua.</p>

            </div>
            <div class="col-md-3 mb-r animated zoomIn">
                <div class="view hm-zoom">
                    <img src="{{ asset('assets/pic/intro/agua2.jpg') }}" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <p class="white-text">Propiedades del agua</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="grid-row">
            <div class="col-md-12 mb-r animated zoomIn">
                <!--Excerpt-->
                <h1 class="text_h1">PUENTES DE HIDRÓGENO</h1>
                <p  class="format_text">La naturaleza de la molécula del agua ocasiona que ésta sea atraída hacia otras moléculas iguales, esta atracción se ve llama COHESION y se ve simplemente al observar su superficie. <br><br>

                La fuerza de cohesión ocasiona que la superficie del agua se comporte como si estuviera cubierta con una membrana estirada muy delgada, que siempre estuviera intentando contraerse, hace que la superficie del agua sea tan fuerte como para dar soporte a muchos organismos acuáticos e insectos, lo que posibilita la existencia de micro-ecosistemas que forman parte de la larga cadena de vida. 

                Este fenómeno conocido comúnmente como la piel del agua se debe a la TENSION SUPERFICIAL. <br><br>

                La ADHESION es la atracción de la moléculadel agua hacia otros materiales como el vidrio, la tela, etc. <br><br>

                El agua parece desafiar la fuerza de gravedad, como cuando se desplaza hacia arriba en seres inertes: por la pared cuando se encuentra mojado el piso o por una superficie de papel al introducir la punta en el agua; o bien en seres vivos por: por el tallo de las plantas o por el tronco de un árbol. A esa tendencia a subir por la superficie de un material solido se le llama Capilaridad. Cuando la fuerza de cohesión, la adhesión y la capilaridad se combinan permiten que la sangre se desplace con facilidad por el cuerpo sin que el corazón tenga que bombear demasiado y que las plantas tengan agua hasta la punta de la rama más alta. <br><br>

                La CAPACIDAD CALORIFICA es una propiedad que tiene el agua para almacenar calor y guardar la energía proporcionada por los rayos del Sol. Por las noches la transmite hacia los continentes y regula la temperatura de los mismos. <br><br>

                Por último, la SOLUBILIDAD, es la capacidad de una sustancia para disolver a otras. El agua es denominada el solvente universal, porque se disuelven en ella más cosas que en cualquier otra sustancia, esto permite la combinación de las sales minerales de la tierra y que las proporcione como nutrientes para nuestro cuerpo y el de todos los seres vivos.</p>
            </div>
        </div>
        <div class="grid-row">
            <div class="block-head block-head-2"><i></i></div>
            <div class="col-md-4">
                <div class="list-group"> <style type="text/css"> .fa-lg{color: #ff4444;}</style>
                    <a href="{{ asset('storage/information/mapa-disponibilidad.pdf') }}"  target="_blank" class="list-group-item">
                        <h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg"></i> Disponibilidad Mapa.pdf</h4>
                        <p class="list-group-item-text">Mapa disponibilidad del agua</p>
                     </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-group"> <style type="text/css"> .fa-lg{color: #ff4444;}</style>
                    <a href="{{ asset('storage/information/propiedades-agua.pdf') }}"  target="_blank" class="list-group-item">
                        <h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg"></i> Propiedades del agua.pdf</h4>
                        <p class="list-group-item-text">Conoce las propiedades del agua.</p>
                     </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-group"> <style type="text/css"> .fa-lg{color: #ff4444;}</style>
                    <a href="{{ asset('storage/information/tips-ahorro.pdf') }}"  target="_blank" class="list-group-item">
                        <h4 class="list-group-item-heading"><i target="_blank"class="fa fa-file-pdf-o pdf fa-lg"></i> Tips de uso.pdf</h4>
                        <p class="list-group-item-text">Revisa estos tips que ponemos para ti.</p>
                     </a>
                </div>
            </div>
        </div>
        <div class="grid-row">
            <br><br><br>
        </div>
    </div>
    <!--/ page content section -->

@stop