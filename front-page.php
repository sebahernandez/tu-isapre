<?php 
/**
 * Template Name: Front Page Template
 *
*/
get_header();
?>

<!-- section hero -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    ASESORÍA GRATUITA EN ISAPRES
                </h1>
                <h3>Cotiza al instante la mejor opción para ti y tu familia.</h3>
                <p>Comparamos los diferentes planes y te ayudamos a obtener el
                    más conveniente para ti y tu familia.</p>
                <span class="pr-3">
                    <a href="tel:+56942768730"><i class="fa fa-whatsapp" aria-hidden="true"></i> +56 9 4276
                        8730</a></span>
                <span class="pr-3">
                    <a href="tel:56949564333"><i class="fa fa-whatsapp" aria-hidden="true"></i> +56 9 4956
                        4333 </a></span>
            </div>
            <div class="col-md-6 bg-form p-4 text-light rounded shadow">
                <h2 class="text-light text-center">Cotiza gratis y al instante</h2>
                <?php echo do_shortcode( '[super_form id="12"]' ); ?>
            </div>
        </div>
    </div>
</section>
<!-- section hero // -->

<!-- Carousel -->
<section class="clinicas" id="clinicas">
    <div class="container">
        <h2 class="text-center">Clinicas y centros médicos</h2>
        <div class="py-5"> <?php echo do_shortcode('[sp_wpcarousel id="37"]'); ?></div>
    </div>

</section>
<!-- Carousel -->

<section class="planes" id="planes">
    <div class="container">
        <h2 class="text-center">¿QUE PLANES PUEDO ELEGUIR?</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <h3>¿Qué es un plan preferente?</h3>
                    <p>Escoge el plan con tu clínica preferida y disfruta la comodidad de elegir
                        dónde atenderte con una mayor cobertura.</p>
                </div>

                <div class="box">
                    <h3>¿Qué es un plan de libre elección?</h3>
                    <p>Tú y tu familia eligen donde atenderse con coberturas hasta 90% en atenciones
                        ambulatorias y hasta 100% en hospitalarias.</p>
                </div>

            </div>

            <div class="col-md-6">
                <div class="box2">
                    <h3>¿Qué es un plan cerrado?</h3>
                    <p>Es cuando uno de los cotizantes aporte una parte o el total de su 7% a otra persona y pueden unir
                        sus rentas
                        en una cotización común para acceder a mejores beneficios.</p>
                </div>

                <div class="box2">
                    <h3>¿Qué es un plan compensado?</h3>
                    <p>Es cuando uno de los cotizantes aporte una parte o el total de su 7% a otra persona y pueden unir
                        sus
                        rentas en una cotización común para acceder a mejores beneficios.</p>
                </div>
            </div>
        </div><!-- end rows -->
    </div>
</section>

<!-- Beneficios de las isapres -->
<section class="beneficios">
    <div class="container">
        <h2 class="text-center">BENEFICIOS DE LAS ISAPRES</h2>
        <div class="row">
            <div class="col-md-6">
                <ul class="my-5 lista-beneficios">
                    <li>
                        <div><img src="<?php echo get_template_directory_uri(); ?> /img/icons/seguro.png" />
                        </div> <span> Seguros (Complementarios).</span>
                    </li>
                    <li>
                        <div><img src="<?php echo get_template_directory_uri(); ?> /img/icons/dinero.png" />
                        </div> <span> Cesantía (Pago de cotizaciones que paga la Isapre).</span>
                    </li>
                    <li>
                        <div><img src="<?php echo get_template_directory_uri(); ?> /img/icons/fuego.png" />
                        </div> <span> Catastrófico libre elección.</span>
                    </li>
                    <li>
                        <div><img src="<?php echo get_template_directory_uri(); ?> /img/icons/seguro-de-viaje.png" />
                        </div> <span> Asistencia en viaje (cobertura adicional en el extranjero).</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="my-5 lista-beneficios">
                    <li>
                        <div><img src="<?php echo get_template_directory_uri(); ?> /img/icons/farmacia.png" />
                        </div> <span> Farmacias (descuentos de hasta un 95%).</span>
                    </li>
                    <li>
                        <div><img src="<?php echo get_template_directory_uri(); ?> /img/icons/medico.png" />
                        </div> <span> Kinesiología (en casa).</span>
                    </li>
                    <li>
                        <div><img src="<?php echo get_template_directory_uri(); ?> /img/icons/seguro-medico.png" />
                        </div> <span> Seguros Escolares.</span>
                    </li>
                    <li>
                        <div><img src="<?php echo get_template_directory_uri(); ?> /img/icons/cuidado-dental.png" />
                        </div> <span> Seguro dental (hasta un 80% sin tope).</span>
                    </li>
                </ul>

            </div>
        </div><!-- end rows -->
</section>

<section class="centros-medicos">
    <div class="container">
        <h2 class="text-center">CLINICAS Y CENTROS MÉDICOS</h2>
        <p class="text-center pt-5">Tener una clínica asociada genera la ventaja de tener un conocimiento de cual es la
            cobertura de cada uno
            de los servicios clínicos, puesto que la mayoría de estos estarán sin tope, significa que
            se paga un porcentaje fijo establecido.</p>

<!-- Inicio de acordeon -->
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            SANTIAGO, VALPARAÍSO Y VIÑA DEL MAR.
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>Clínica Alemana de Santiago.</li>
                            <li>Clínica Las Condes.</li>
                            <li>Clínica San Carlos de Apoquindo.</li>
                            <li>Clínica Universidad Católica.</li>
                            <li>Clínica Santa María.</li>
                            <li>Clínica Indisa.</li>
                            <li>Clínica Fundación Médica San Cristóbal.</li>
                            <li>Clínica Arauco Salud.</li>
                            <li>Clínica Tabancura.</li>
                            <li>Clínica Arturo Lopez Peréz.</li>
                            <li>Hospital Clínico Universidad Católica.</li>
                            <li>Clínica Reñaca.</li>
                            <li>Clínica Cordillera.</li>
                            <li>Hospital Clínico Universidad de Chile.</li>
                            <li>Hospital Del Trabajador.</li>
                            <li>Hospital Militar de Santiago.</li>
                            <li>Clínica Ciudad Del Mar.</li>
                            <li>Hospital de Niños.</li>
                            <li>Clínica Avansalud.</li>
                            <li>Clínica Bicentenario.</li>
                            <li>Clinica Dávila.</li>
                            <li>Clínica Las Lilas.</li>
                            <li>Clínica Vespucio.</li>
                            <li>Clínica Central.</li>
                            <li>Clínica Juan Pablo II.</li>
                            <li>Clínica Las Violetas.</li>
                            <li>Clínica Sierra Bella.</li>
                            <li>Clínica Santa Lucía.</li>
                            <li>Hospital Parroquial.</li>
                            <li>Hospital Clínico IST.</li>
                            <li>Clínica Río Blanco.</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            ZONA NORTE
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>Clínica Antofagasta.</li>
                            <li>línica San José.</li>
                            <li> Clínica El Loa.</li>
                            <li>Clínica Cumbres del Norte.</li>
                            <li>Clínica Militar del Norte.</li>
                            <li>Clínica Atacama.</li>
                            <li>Clínica El Elqui.</li>
                            <li>Clínica Iquique.</li>
                            <li>Clínica Arica.</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            ZONA SUR
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>Clínica Isamedica.</li>
                            <li>Clínica Integral.</li>
                            <li> Hospital Clínico Fusat.</li>
                            <li>Clínica Curicó.</li>
                            <li>Clínica Lircay.</li>
                            <li>Clínica Del Maule.</li>
                            <li>Clínica Chillán.</li>
                            <li>Clínica Universitaria de Concepción.</li>
                            <li>Clínica Bío Bío.</li>
                            <li>Clínica De La Mujer Sanatorio Aleman.</li>
                            <li>Clínica Alemana De Temuco.</li>
                            <li>Hospital Clinico Universidad Mayor.</li>
                            <li>Clínica Alemana De Osorno.</li>
                            <li>Clínica Los Andes De Puerto Montt.</li>
                            <li>Clínica Puerto Montt.</li>
                            <li>Clínica Las Amapolas.</li>
                            <li>Hospital FF.AA Cirujado Guzmán.</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin de acordeon --> 
    </div>

</section>


<?php
get_footer();