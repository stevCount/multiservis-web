<?php
    $fileJson = file_get_contents('./datos/portafolio.json'); 
    $arrayDatosPortafolio = json_decode($fileJson,true);

    foreach ($arrayDatosPortafolio as $portafolio) {

        $titulo_principal = $portafolio['titulo_principal'];
        $url_imagen_principal = $portafolio['url_imagen_principal'];
        $tituloparrafo_principal = $portafolio['tituloparrafo_principal'];
        $parrafo_principal = $portafolio['parrafo_principal'];
        $id_section = $portafolio['id_section'];

        $stringPlantilla = "
            <section id='{$id_section}' class='mb-5'>
                <div class='container fluid'>
                    <h1 class='text-center mb-4 titulo-parrafos mt-5 display-3'>{$titulo_principal}</h1>
                    <br>
                    <br>
                    <div class='row mb-5'>
                        <div class='col-6'><img class='img-fluid' class='img-fluid' src='{$url_imagen_principal}'
                                alt='Papeleria'></div>
                        <div class='col-6 text-center'>
                            <h2 class='mb-5'>{$tituloparrafo_principal}</h2>
                            <p class='display-4'>
                                {$parrafo_principal}
                            </p>
                        </div>
                    </div>";

                    foreach ($portafolio['items_sub'] as $subPortafolio) {
                        $subtitulo_principal = $subPortafolio['subtitulo_principal'];
                        $stringPlantilla .= "<div class='subitem'>
                            <h1 class='titulo-parrafos text-center display-3 mb-5'>$subtitulo_principal</h1>
                            <div class='owl-carousel owl-theme productos-carousel'>";
                        foreach ($subPortafolio['items'] as $subPortafolioSub) {
                            $urlImagen = $subPortafolioSub['url_imagen'];
                            $nombreArticulo = $subPortafolioSub['nombre'] == "" ? "Nombre no registrado" : $subPortafolioSub['nombre'];
                            $precioArticulo = $subPortafolioSub['precio'] == "" ? 0 : $subPortafolioSub['precio'];
                            $stringPlantilla .= "<div>
                                                    <img class='width-producto' height='300' src='{$urlImagen}' alt=''>
                                                    <div style='text-align:start;font-weight: 900;'>
                                                        <span>{$nombreArticulo}</span>
                                                        <br>
                                                        <span>$ {$precioArticulo}</span>
                                                    </div>
                                                    <br>
                                                    <button type='button' class='btn btn-outline-warning' data-toggle='tooltip' data-placement='top'
                                                        title='Agregar al carrito' style='width: 300px;' onclick='insertCart(&quot;{$urlImagen}&quot;,null,&quot;{$precioArticulo}&quot;,&quot;{$nombreArticulo}&quot;)'>Agregar al carrito <i
                                                            class='fa fa-shopping-cart' aria-hidden='true'></i></button>
                                                </div>";
                        }
                        $stringPlantilla .= "</div>";
                    }
                    $stringPlantilla .= "
                            </div>
                        </div>
                    </section>";
        echo $stringPlantilla;
    }
?>