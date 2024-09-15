<?php
session_start();

include("connection.php");

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- navbar section   -->

    <header class="navbar-section">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/logo-sena.png" alt="SENA" width="100" height="100"></i>        ANÁLISIS Y DESARROLLO DE SOFTWARE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#home">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">ADSO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">EL SENA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class='nav-link dropdown-toggle' href='edit.php?id=$res_id' id='dropdownMenuLink'
                                    data-bs-toggle='dropdown' aria-expanded='false'>
                                    <i class='bi bi-person'></i>
                                </a>


                                <ul class="dropdown-menu mt-2 mr-0" aria-labelledby="dropdownMenuLink">

                                    <li>
                                        <?php

                                        $id = $_SESSION['id'];
                                        $query = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");

                                        while ($result = mysqli_fetch_assoc($query)) {
                                            $res_username = $result['username'];
                                            $res_email = $result['email'];
                                            $res_id = $result['id'];
                                        }


                                        echo "<a class='dropdown-item' href='edit.php?id=$res_id'>Cambiar perfil</a>";


                                        ?>

                                    </li>
                                    <li><a class="dropdown-item" href="logout.php">Salir</a></li>
                                </ul>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="name">
        <center>Bienvenido
            <?php
            // echo $_SESSION['valid'];
            
            echo $_SESSION['username'];

            ?>
            !
        </center>
    </div>

    <!-- hero section  -->

    <section id="home" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 text-content">
                    <h1>Desarrolla tu futuro, un código a la vez</h1>
                    <p>Domina el arte del software: aprende a analizar, desarrollar y transformar el mundo digital con nuestra carrera virtual en Análisis y Desarrollo de Software.
                    </p>
                    <button class="btn"><a href="#">saber más</a></button>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <img src="images/hero-image.png" alt="" class="img-fluid">
                </div>

            </div>
        </div>
    </section>

    <!-- services section  -->

    <section class="services-section" id="services">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 services">

                    <div class="row row1">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="images/research.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Investigación</h4>
                                    <p class="card-text">Desarrollamos estrategias efectivas para ayudarte a alcanzar clientes y prospectos en todo el ámbito.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="images/brand.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Branding</h4>
                                    <p class="card-text">El Branding representa los elementos visuales y activos que distinguen a una marca.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row row2">

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="images/ux.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Diseño UI/UX</h4>
                                    <p class="card-text">Los diseños UI/UX se centran en crear interfaces intuitivas y centradas en el usuario para productos digitales</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="images/app-development.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Desarrollo</h4>
                                    <p class="card-text">Un concepto se materializa a través de las diversas etapas de los servicios, como la planificación, las pruebas y el despliegue.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                    <h3>ADSO - Análisis y Programación de Software<ADdress></ADdress></h3>
                    <h1>Desarrolla apps, webs y sistemas con un enfoque práctico y social.</h1>
                    <p>El programa del SENA capacita tecnólogos en diseño, desarrollo y mantenimiento de software, enfocándose en soluciones prácticas y tecnológicas para enfrentar desafíos del mercado laboral.</p>
                    <button class="btn">saber más</button>
                </div>

            </div>
        </div>
    </section>

    <!-- about section  -->

    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="images/about.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                    <h3>SENA - Servicio Nacional de Aprendizaje</h3>
                    <h1>Tu camino al éxito, formación que transforma.</h1>

                    <p>Transforma tu futuro con el SENA. Desde 1957, ofrecemos formación técnica y tecnológica gratuita de alta calidad. Con programas innovadores y alianzas estratégicas, preparamos a millones de colombianos para enfrentar los desafíos laborales. ¡Únete al SENA y alcanza tus sueños!</p>
                    <button>saber más</button>
                </div>
            </div>
        </div>
    </section>

    <!-- project section  -->

    <section class="project-section" id="projects">
        <div class="container">
            <div class="row text">
                <div class="col-lg-6 col-md-12">
                    <h3>Proyectos</h3>
                    <h1>Proyectos de aprendices</h1>
                    <hr>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>Los aprendices de Análisis y Desarrollo de Software del SENA desarrollan proyectos como aplicaciones móviles y sistemas de gestión empresarial. Estos proyectos les permiten aplicar conocimientos teóricos, trabajar en equipo y resolver problemas reales, con un enfoque en el compromiso social y la responsabilidad ética.</p>
                </div>
            </div>
            <div class="row project">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">SaaS Website</h4>
                                <p class="card-text">Desarrollado. Ene 19,2024</p>
                                <button>Ver proyecto</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Travel Website</h4>
                                <p class="card-text">UI/UX Abr 29,2024</p>
                                <button>Ver proyecto</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Travel Website</h4>
                                <p class="card-text">Desarrollado. Jun 9,2024</p>
                                <button>Ver proyecto</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="images/project4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">SaaS Website</h4>
                                <p class="card-text">UI/UX Jul 25 ,2024</p>
                                <button>Ver proyecto</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- contact section  -->

    <section class="contact-section" id="contact">
        <div class="container">

            <div class="row gy-4">

                <h1>Contactanos</h1>
                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Direción</h3>
                                <p>Calle Exito #24,<br>Colombia, Colombia</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>LLamanos</h3>
                                <p>+57 1 1234567<br>+57 5 2233445</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>E-mail</h3>
                                <p>sena@sena.edu.co<br>adso@sena.edu.co</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Horario</h3>
                                <p>Lunes - Viernes<br>7:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 form">
                    <form action="contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Asunto*" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje"
                                    required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit">Enviar Mensaje</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>

    <!-- footer section  -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="logo"><i class="bi bi-chat"></i> Chat SENA</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="d-flex">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">ADSO</a></li>
                        <li><a href="#">EL SENA</a></li>
                        <li><a href="#">Proyectos</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-12 col-sm-12">
                    <p>&copy;Carlos Perez 2024.</p>
                </div>

                <div class="col-lg-1 col-md-12 col-sm-12">
                    <!-- back to top  -->

                    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                            class="bi bi-arrow-up-short"></i></a>
                </div>

            </div>

        </div>

    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>