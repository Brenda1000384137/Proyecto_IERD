<doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="../img/sinfo.png"/>
        <meta name="author" content="Bootstrap">
        <meta name="description" content="La Institución Perfecta para ti">
        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="../css/css_li/bootstrap.min.css">
        <!--Style-->
        <link rel="stylesheet"  href="../css/css_li/styles_index.css">
        <!--Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">
        <!--Favicon-->	<link rel="icon" type="image/png" href="../img/sinfo.png" />
        <title face="verdana">I.E.R.D. | La Fuente </title>
    </head>
    <body>
        <!-- dentro del body realizo la maquetación -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <img src="../img/ojalaestesi2.png" class="logo-brand" alt="logo" width="600px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="../img/lista.svg" width="20px" height="20px" >   
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a  class="nav-link" onMouseover="this.style.color='rgba(49, 138, 172, 1)'" onMouseout="this.style.color='black'" href="#hero">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onMouseover="this.style.color='rgba(49, 138, 172, 1)'" onMouseout="this.style.color='black'" href="#portfolio">Institución</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onMouseover="this.style.color='rgba(49, 138, 172, 1)'" onMouseout="this.style.color='black'" href="#pricing">Matrículas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onMouseover="this.style.color='rgba(49, 138, 172, 1)'" onMouseout="this.style.color='black'" href="#information">Modalidades Educativas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onMouseover="this.style.color='rgba(49, 138, 172, 1)'" onMouseout="this.style.color='black'" href="#contact">Contáctenos</a>
                        </li>
                        <li class="nav-item_login" >
                            <!--<button href="assets/html/dashboard.html" type="button" class="btn btn-primary btn-md">Ingresar</button> -->
                            <a href="login.php"><input type="button"  class="btn btn-primary btn-md" value="Iniciar Sesión"boton.style.backgroundColor = "green"></a>    
                        </li>
                    </ul>
                </div>    
            </div>
        </nav>
        <section id="hero">
            <div class="container">
                <div class="content-center">
                   <font color="white" style="font-family:Helvetica Neue'"><h2><strong>Institución Educativa La Fuente </strong></h2></font> 
                </div>
            </div>
        </section>
        <section id="portfolio" class="divider" style="background-color:#E8E9EA">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pricing-container">
                            <div>
                                <div class="content-center" >
                                    <font style="color:0080FF ;"><h2>Institución Educativa La Fuente Tocancipá </h2></font>
                                </div>
                                <p align="justify">Se encuentra ubicada en el  municipio de Tocancipá. 
                                    Fue fundada en el año 1.919 en un lote donado por el Señor Cura Párroco Benjamín Cuervo; 
                                    inició labores con los grados de primero a cuarto, le fue otorgada licencia de funcionamiento
                                    mediante la Resolución 2308 de Marzo de 1.971 del Ministerio de Educación Nacional. Su estructura
                                    física estaba conformada por 7 aulas de clase con suficiente y apropiado mobiliario, 3 de ellas 
                                    en regular estado; a causa de la humedad.Esta fue demolida en su totalidad dandole lugar a un nuevo 7
                                    colegio en el año 2004.
                                </p> 
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-6">
                        <div class="portfolio-container">
                            <img src="../img/ejemplo.jpg" class="img-fluid"> 
                        </div>                     
                    </div>
                </div>
            </div>
        </section>
        <section id="pricing" class="divider"  style="background-color:#C5D8D8">
            <div class="container">
                <div class="content-center">
                    <h2 style="color:#0174DF;">Requisitos para Matrículas</b></h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="pricing-container">
                            <h4><strong > Documentos para la Matrícula </strong></h4>
                                <ul align="justify" >
                                    <li>Copia de Registro Civil si es menor de 7 años o tarjeta de<br>
                                        identidad del menor si es mayor de 7 años.</li>
                                    <li>Documentos que acrediten su escolaridad.</li>
                                    <li>Certificación de afiliación al régimen de seguridad social en <br> salud. En caso de no estar afiliado
                                         debe acercarse   a la<br> Secretaría de Salud. ¡Infórmese!</li>
                                    
                                </ul>  
                        </div>
                    </div>        
                    <div class="col-md-6">
                        <div class="pricing-container">
                            <h4><strong>Solicitud de Cupos escolares</strong></h4>
                            <ul align="justify">
                                <li>Registro Civil hasta los 6 años de edad o Tarjeta de Identidad si<br>el estudiante es mayor de 7 años</li>
                                <li>Cédula de ciudadanía si es mayor 18 años</li>
                                <li>Para la población con Discapacidad y/o excepcionalidad, los<br>  soportes médicos recientes 
                                    de la EPS y profesional profesional <br> idóneo que refiera su condición y proceso de atención en salud.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section id="information" class="divider">
            <div class="container">
                <div class="content-center">
                     <font><h2 style="color:#0174DF;">Modalidades Educativas </h2></font>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="pricing-container">
                            <center><h4 style="color:#0174DF;">Niveles educativos</h4> </center>
                            <ul>
                                <li> <p> Preescolar</p> </li>
                                <li> <p> Básica Primaria</p> </li>
                                <li> <p> Básica Secundaria</p></li>
                                
                                    <strong><p>Cupos escolares por nivel:</p></strong>
                                <li><p> Transición: 71</p></li> 
                                <li><p> Primero a quinto: 357</p></li>
                                <li> <p> Sexto a noveno: 288</p></li>
                                <li><p> Décimo a once: 80</p></li>
                            </ul>
                        </div> 
                    </div>    
                    <div class="col-md-3">
                        <div class="pricing-container">  
                            <center><h4 style="color:#0174DF;">Técnico En Manejo Ambiental</h4> </center>
                            <p>
                                El programa Manejo Ambiental se creó para brindar a 
                                todos los sectores económicos la posibilidad de incorporar 
                                personal con altas calidades laborales que contribuyan al 
                                desarrollo económico, social y tecnológico de su entorno y del país.
                            </p> 
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pricing-container">
                            <center><h4 style="color:#0174DF;">Técnico en Recursos Naturales</h4> </center>
                            <p>
                            Hace parte del área ambiental y está dirigida a 
                            Nuevo Talento Humano, con el fin de que intervengan en procesos de gestión, 
                            manejo y aprovechamiento de los recursos agua, suelo, flora y fauna, a nivel local, regional y nacional.             
                            </p>   
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pricing-container">
                            <center><h4 style="color:#0174DF;">Convenios</h4> </center>
                            <p>
                                Se maneja un convenio con la Universidad de la sábana en el que los estudiantes egresados de la institución tendrán 
                                un descuento del  20% , en el caso de los estudiantes tengan muy buen desempeño acádemico podran llegar a tener un 
                                descuento mayor.
                            </p>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="divider" style="background-color:#C5D8D8">
            <div class="content-center">
                <font><h2 style="color:#0174DF;">Contáctenos </h2></font></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-container">
                            <img src="../img/estu.jpg" class="img-fluid" alt="Portfolio 01"> 
                        </div>                     
                    </div>
                    <div class="col-md-6">
                        <div class="pricing-container">
                            <div>
                                <form class="was">
                                    <div class="mb-3">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Ingrese su nombre completo">
                                    <div class="invalid-feedback">
                                    </div>
                                  </div><br>
                
                                    <div class="mb-3">
                                        <div class="input-group ">
                                          <input type="text" class="form-control " aria-describedby="validatedInputGroupPrepend" 
                                          placeholder="Ingrese su correo" required>
                                        <div class="invalid-feedback"></div>
                                      </div><br>
                
                                    <div class="mb-3">
                                    <div class="input-group ">
                                      <input type="number" class="form-control " aria-describedby="validatedInputGroupPrepend" 
                                      placeholder="Ingrese su teléfono" required>
                                    <div class="invalid-feedback"> 
                                    </div>
                                  </div>
                                  <br>
                                  <div class="mb-3">
                                    <select class="custom-select"  required>
                                      <option value="">Tipo de persona que requiere la información</option>
                                      <option value="1">Estudiante</option>
                                      <option value="2">Acudiente</option>
                                    </select>
                                    <div class="invalid-feedback"></div>
                                  </div>
                                  
                                    <div class="custom-control custom-checkbox mb-3">
                                      <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                      <label class="custom-control-label" for="customControlValidation1">Acepto Los Términos y Condiciones</label>
                                      <div></div>
                                    </div>
                
                                    <div class="input-group-append">
                                        <div class="content-center">
                                        <button class="btn btn-primary" type="button">Enviar</button>
                                     </div>
                                   </div>
                                   <div class="invalid-feedback">
                                   </div> </div> 
                                  </form>   
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </section>
        <footer style="background-color:#FFFFFF" bordered="40">
            <div class="container footer-top">
                <div class="row">
                    <!-- widget -->
                    <div class="col-sm-6 col-lg-4 footer-widget">
                        <div class="about-widget" >
                            <ul class="contact"  align="left">
                               <br>
                               <p><img src="../img/correo.PNG" width="45" height="40">Correo: lafuente@gmail.com </p>
                               <p><img src="../img/ubicación.PNG" width="40" height="40">Dirección: Vereda La Fuente </p>
                               <p><img src="../img/telefono.PNG" width="40" height="40">Teléfono: 311 2349531</p>
                            </ul>
                        </div>
                    </div>
                    <!-- widget -->
                    <div class="col-sm-6 col-lg-4 footer-widget">
                      <br>
                           <center>
                            <img src="../img/logo.png" class="logo-brand" alt="logo" width="130px" height="130px"></center>  
                      </div>
                    <!-- widget -->
                    <div class="col-sm-6 col-lg-4 footer-widget">
                        <ul class="contact"  align="left">
                          <br>
                            <p> <img src="../img/rural.PNG" width="40" height="40" >Área: Rural </p>
                            <p><img src="../img/publico.PNG" width="40" height="40">Carácter: Pública </p>
                            <p><img src="../img/jornada.PNG" width="40" height="40">Jornadas: Jornada diurna</p>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- copyright -->
            <div class="copyright">
                <div class="container">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <center style="color:black">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos Los derechos reservados</center> 
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>		
            </div>
        </footer>     
        <script src="../js/jquery.min.js"></script>
    </body>
</html>