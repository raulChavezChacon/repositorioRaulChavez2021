
<?php
$welcome = "Bievenidos";
$TituloGrande = "Nazca";
//Array Lugares
$arregloLugares = array("Acueductos","Cultura","Tour Civitatis","Reservas","Lineas Nazca","Sky Arena");


$linkViaje ="https://www.facebook.com/Venture-and-Travel-485733742184777/";
//$today=date('d/m/y');

//extras
$redactado="Redactado por: ";
$categorys="categoria";
$category="Turismo";
$autor="Raul Chavez";
$contacto=939302859;


//menus
$Aspectos="Aspectos";
$Actividades="Actividades";
$Historia="Historia";
$Actividades="Actividades Favoritas";
$Contacto="Contacto";

//INFO ASPECTOS
$Paisajes="En esta hermosa cuidad podras disfrutar de los mas hermosos paisajes que existe en nuestro Pais..";
$Diversion="Tambien podras realizar Actividades como sky en arena, parapente, y natacion.";
$ViajesFamiliares="Obtendras los mas bonitos recuerdos familiares, perfectos para viajar en familia";

$arregloAspectos = array("Paisajes","Diversion","Viajes Familiares");

//HISTORIA
$MChavin="La razon principal para el progreso de la Chavin de Huantar fue su moderna, productiva e innovadora agricultura en su epoca";
$Nazca="Los nazcas comenzron a realizar actividades comerciales de relativa importancia, intercambiando productos con las sociedades serranas contacto con los Huarpas.";
$Mwari="Se le conoce como la cultura Pan andina, para una buena administracion de las regiones sometidas se tuvo que crear los centros urbanos administrativos.";
$Mchimu="Los chimu tuvieron una estrasgrafia muy bien señalada, ya que su administracion envidiable, sus contruscciones diferenciadas y sus vestimentas asi lo demuestran.";
$endLine ="Fue parte de nuestra historia";
//ACTIVIDADES FAVORITAS
$arregloActFavoritas = array("Adrenalina En Arena","Sky","Bote");


?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Viaja A Nazca</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- MENU INICIO-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services"><?php echo $Aspectos ;?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio"><?php echo $Actividades ;?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#about"><?php echo $Historia ;?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#team"><?php echo $Actividades ;?> Favoritas
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact"><?php echo $Contacto ;?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- DATOS-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><?php echo $welcome ;?></div>
                <div class="masthead-heading text-uppercase"><?php echo $TituloGrande ;?></div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Mas Informacion</a>
            </div>
        </header>
        <!-- ASPECTOS-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Aspectos</h2>
                    <h3 class="section-subheading text-muted">En la hermosa cuidad de Nazca puedes disfrutar de muchos aspectos.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3"><?php echo $arregloAspectos[0] ;?></h4>
                        <p class="text-muted"><?php echo $Paisajes ;?></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3"><?php echo $arregloAspectos[1] ;?></h4>
                        <p class="text-muted"><?php echo $Diversion ;?></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3"><?php echo $arregloAspectos[2] ;?></h4>
                        <p class="text-muted"><?php echo $ViajesFamiliares ;?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ALBUM-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Actividades</h2>
                    <h3 class="section-subheading text-muted">En Nazca realizaras actividades nunca vas a olvidar.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/acueductos.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Acueductos</div>
                                <div class="portfolio-caption-subheading text-muted">Imagen</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/cultura.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Cultura</div>
                                <div class="portfolio-caption-subheading text-muted">Imagen</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/tour.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tour Civitatis</div>
                                <div class="portfolio-caption-subheading text-muted">Imagen</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/reservas.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Reservas</div>
                                <div class="portfolio-caption-subheading text-muted">Imagen</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/lineas.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lineas Nazca</div>
                                <div class="portfolio-caption-subheading text-muted">Imagen</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/sky.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sky Arena</div>
                                <div class="portfolio-caption-subheading text-muted">Imagen</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- HISTORIA-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">HISTORIA</h2>
                    <h3 class="section-subheading text-muted">En este apartado podras descubrir un poco de la historia de esta hermosa Cuidad Nazca.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/l1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1200 a.C - 200 a.C</h4>
                                <h4 class="subheading">Cultura Chavin</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $MChavin ;?></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/l2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>100 a.C. - 500 d.C</h4>
                                <h4 class="subheading">Cultura Nazca</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $Nazca ;?></p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/l3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>600 d.C. - 1200 d.C.</h4>
                                <h4 class="subheading">Cultura Wari</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $Mwari ;?></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/l4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>600 d.C - 1200 d.C</h4>
                                <h4 class="subheading">Cultura Chimu</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $Mchimu ;?></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                            <?php echo $endLine ;?>
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- ACTIVIDADES FAVORITAS-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Actividades Favoritas</h2>
                    <h3 class="section-subheading text-muted">Disfruta de las actividades innolvidables que puedes realizar en Nazca</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/m1.jpg" alt="..." />
                            <h4><?php echo $arregloActFavoritas[0] ;?></h4>
                            <p class="text-muted">img</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/m2.jpg" alt="..." />
                            <h4><?php echo $arregloActFavoritas[1] ;?></h4>
                            <p class="text-muted">img</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/m3.jpg" alt="..." />
                            <h4><?php echo $arregloActFavoritas[2] ;?></h4>
                            <p class="text-muted">img</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Disfruta de las mejores actividades en nuestra Cuidad Nazca.</p></div>
                </div>
            </div>
        </section>
        <!-- Contactanos!!-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contactanos</h2>
                    <h3 class="section-subheading text-muted">Mandanos un correo con tus Datos y disfruta de la experiencia</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Acueductos</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/acueductos.jpg" alt="..." />
                                    <p>Hay una gran red de acueductos subterráneos que se encuentran alrededor de la actual ciudad. Muchos de ellos aún se usan por los lugareños, y no es para menos; su grado de conservación es alucinante. Los acueductos de Cantalloc son de pago (8 soles la entrada, unos 2 euros), mientras que los de Orcona son gratuitos. Aunque las similitudes entre ambos yacimientos son enormes, los acueductos de Cantalloc son más grandes e impresionantes. Éstos están alineados, según dicen, con las constelaciones.

                                        Las canalizaciones son subterráneas y antiguamente fueron confeccionadas así en forma de espiral o en forma de cuadrado para que se generase de forma natural un sistema de ventilación, eliminando así los mosquitos y el empozamiento de las aguas. Además, dada su forma, el acceso a la recogida del agua es más fácil y cómoda. El agua que hoy podemos ver, proviene de las montañas, a muchos kilómetros de distancia de la ciudad.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong><?php echo $redactado ;?></strong>
                                            <?php echo $autor ;?>
                                            echo "<br><br>";
                                            <?php echo $contacto ;?>
                                        </li>
                                        <li>
                                            <strong><?php echo $category ;?></strong>
                                            <?php echo $category ;?>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Cultura</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/cultura.jpg"..." />
                                    <p>Perú es uno de los países en el que mayor número de saqueadores hay. Esto ha propiciado que la conservación de muchos yacimientos se viera afectada, y es lo que ha sucedido con los cementerios de Nazca. Existen dos cementerios en el desierto que fueron profanados, dejando a la vista enterramientos milenarios que dicha civilización había hecho en las pampas.

                                        Chauchilla es el cementerio de momias más conocido, y también el mejor conservado. En él los investigadores encontraron tumbas en perfecto estado, sobre todo enterramientos familiares. Asimismo, también se encontraron cerámicas, ornamentos y restos de comida que introducían en el interior de los enterramientos para que acompañara a los fallecidos en su viaje a la otra vida. A mí lo que más me llamó la atención fue la manera de enterrar los cuerpos. Éstos los envolvían en telas y los colocaban en posición fetal. Se pensaba así que la muerte era un renacimiento, evocando así cómo se llega a la vida.
                                        
                                        Tambo de perro es el otro gran cementerio de Nazca, y el peor conservado. Se trata de una gran extensión desértica que cuenta con numerosos restos humanos desperdigados por toda la pampa. Esto sucedió debido a la excesiva profanación del lugar en busca de tesoros y reliquias que después se vendían en el mercado negro. Sin duda, impresiona bastante.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong><?php echo $redactado ;?></strong>
                                            <?php echo $autor ;?><?php echo $contacto ;?>
                                        </li>
                                        <li>
                                            <strong><?php echo $category ;?></strong>
                                            <?php echo $category ;?>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Tour Civitatis</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/tour.jpg" alt="..." />
                                    <p>Se trata de formas geométricas que evocan a animales y humanos de gran tamaño y con una precisión asombrosa. Éstas tienen una dimensión que varía desde los 30 metros, hasta los 300 y con una pequeña profundidad de 5 centímetros. Todavía se desconoce el porqué de la realización de estos dibujos, aunque hay teorías para todos los gustos.

                                        Conseguí realizar un vuelo de 30 minutos sobrevolando las líneas. Aunque se ven algo pequeñas desde tan altura, fue algo sumamente increíble. El vuelo en sí no aporta un valor añadido sobre teorías o explicaciones acerca de ellas, algo que yo sugerí que podían incorporar en las excursiones. Sin embargo, sigue siendo un vuelo apasionante, a la vez que revuelto. Por eso, si vas a hacerlo, no desayunes pues las avionetas son bastante inestables y puede darte mareo con los giros. De igual modo, hay varias opciones de vuelo de más tiempo que también incluyen las líneas de los Palpa, otra civilización que ocupó la región aledaña. Aquí tienes el tour de Civitatis.
                                        
                                        </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong><?php echo $redactado ;?></strong>
                                            <?php echo $autor ;?><?php echo $contacto ;?>
                                        </li>
                                        <li>
                                            <strong><?php echo $category ;?></strong>
                                            <?php echo $category ;?>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Reservas</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/reservas.jpg" alt="..." />
                                    <p>Cerca de Nazca hay dos lugares dignos de ser visitados. Uno es la Reserva Natural de San Fernando, un paraje natural idílico en la costa en el que podrás ver muchos animales y pasar un día diferente y divertido, lejos del caos de las ciudades peruanas. Para llegar hasta él, es recomendable que lo hagas con un tour de un día, es mucho más cómodo y seguro.

                                        Otro de los lugares que destacaría es el pequeño pueblo de Marcona, a tan solo una hora y media de Nazca. Yo fui desde Nazca en una combi, los transportes públicos que usan los lugareños, y pasé una noche allí. Su atractivo reside en la costa, pues resulta un poblado nada turístico y con los servicios básicos. Puedes encontrar algunos hostales que están bien, pero antes de reservar te recomiendo que solicites que te enseñen primero la habitación. Al no ser un lugar muy turístico los precios son elevados en comparación con otros sitios. Yo conseguí una habitación por 50 soles.
                                        
                                        Lo imprescindible es que visites la costa, sobre todo  que llegues hasta la playa Trompa de elefante, que se puede hacer a pie. Si te gusta caminar en 30 minutos desde el centro estará allí. Se encuentra señalizado, pero si no siempre puedes preguntar. Caminar por el resto de la costa hacía la derecha también es un paseo muy bonito, sobre todo si llegas hasta el faro, donde desde el mirador puedes observar focas y pingüinos de la Reserva Natural de Marcona.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong><?php echo $redactado ;?></strong>
                                            <?php echo $autor ;?>
                                        </li>
                                        <li>
                                            <strong><?php echo $category ;?></strong>
                                            <?php echo $category ;?>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Lineas Nazca</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/lineas.jpg" alt="..." />
                                    <p>Tal vez habrás oído hablar de las Líneas de Nazca, que atraen a miles de curiosos a visitarlas. Se trata de líneas dibujadas en el desierto representando grandes figuras de aspecto animal o humanoide. Sin embargo, no es la única riqueza que hay en la región. En este post quiero contarte todo lo que necesitas saber para viajar sola a Nazca. Como por ejemplo, lo que puedes ver en la ciudad y alrededores, dónde puedes alojarte y consejos para viajar sola por allí.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong><?php echo $redactado ;?></strong>
                                            <?php echo $autor ;?>
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            <?php echo $category ;?>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Sky Arena</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/sky.jpg" alt="..." />
                                    <p>Tal vez habrás oído hablar de las Líneas de Nazca, que atraen a miles de curiosos a visitarlas. Se trata de líneas dibujadas en el desierto representando grandes figuras de aspecto animal o humanoide. Sin embargo, no es la única riqueza que hay en la región. En este post quiero contarte todo lo que necesitas saber para viajar sola a Nazca. Como por ejemplo, lo que puedes ver en la ciudad y alrededores, dónde puedes alojarte y consejos para viajar sola por allí.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong><?php echo $redactado ;?></strong>
                                            <?php echo $autor ;?>
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            <?php echo $category ;?>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
