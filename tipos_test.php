<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
        initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="shortcut icon" href="./img/fs.ico" type="image/x-icon">
    <title>Inicio - VARK y MBTI</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="./img/fsblack.png" alt=""></a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="tipos_test.php">Los Tests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="test_launcher.php">Realizar Tests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <?php
                        if(isset($_SESSION["expediente"]) || isset($_SESSION["admin"]))
                        {
                            echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                        } else {
                            echo '<li class="nav-item acceder"><a class="nav-link" href="login.php">Login</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="rojo">
            <div class="container">
                <h2 class="primer">Los Tests</h2>
            </div>
        </div>
    </header>

    <main>
        <section class="fotos">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row foto">
							<div class="col-xs-4 thumb">
								<img src="" alt="">
							</div>
							<div class="col-xs-8 texto">
								<h2 class="titulo">Test VARK</h2>
								<p class="parrafo">
									El profesor Neil Fleming en colaboraci??n con Collen Milis desarrollaron en el a??o 1992 una propuesta para clasificar a las personas de acuerdo a su preferencia en la modalidad sensorial a la hora de procesar informaci??n o contenidos educativos. Los autores consideran que las personas reciben informaci??n constantemente a trav??s de los sentidos y que el cerebro selecciona parte de esa informaci??n e ignora el resto.
                  Las personas seleccionan la informaci??n a la que le prestan atenci??n en funci??n de sus intereses, pero tambi??n influye c??mo se recibe la informaci??n.
								</p>
                <p class="parrafo">Surgi?? un instrumento sencillo que mas que una herramienta de diagn??stico, pretend??a ser un catalizador para la reflexi??n y an??lisis de "??C??mo aprendo m??s r??pido y mejor?", "??En cuales condiciones?", a este instrumento se le denomin?? VARK que es el acr??nimo de las cuatro letras iniciales correspondientes a las preferencias modales sensoriales, a continuaci??n se describe cada una: </p>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tipos">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="titulo">Estilos de Aprendizaje</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3 caracteristica">
                        <div class="icono">
                            <i class="icon far fa-eye"></i>
                        </div>
                        <h3 class="primera_linea">Visual</h3>
                        <h4 class="segunda_linea">Visual</h4>
						<p class="parrafo">Preferencia por maneras gr??ficas y simb??licas de representar la informaci??n.</p>
					</div>
					<div class="col-sm-3 caracteristica">
                        <div class="icono">
                            <i class="icon fas fa-assistive-listening-systems"></i>
                        </div>
                        <h3 class="primera_linea">Auditivo</h3>
                        <h4 class="segunda_linea">Aural</h4>
						<p class="parrafo">Preferencia por informaci??n impresa en forma de palabras.</p>
					</div>
					<div class="col-sm-3 caracteristica">
                        <div class="icono">
                            <i class="icon fas fa-book-reader"></i>
                        </div>
                        <h3 class="primera_linea">Lector/Escritor</h3>
                        <h4 class="segunda_linea">Read/Write</h4>
						<p class="parrafo">Preferencia por escuchar la informaci??n.</p>
                    </div>
                    <div class="col-sm-3 caracteristica">
                        <div class="icono">
                            <i class="icon far fa-hand-paper"></i>
                        </div>
                        <h3 class="primera_linea">Kinest??sico</h3>
                        <h4 class="segunda_linea">Kinesthetic</h4>
                        <p class="parrafo">Preferencia perceptual relacionada con el uso de experiencia y la pr??ctica, ya sea real o simulada.</p>
                    </div>
				</div>
			</div>
        </section>

        <section class="fotos">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row foto">
							<div class="col-xs-4 thumb">
								<img src="" alt="">
							</div>
							<div class="col-xs-8 texto">
								<h2 class="titulo azul">Test MBTI</h2>
								<p class="parrafo">	Muchos estudiosos de estos temas han trabajado en varios m??todos y v??as para lograr el diagn??stico individual. Entre los resultados alcanzados se destaca el MBTI (Myers Briggs Type Indicator) a partir de la teor??a de los Tipos
                  Psicol??gicos de Carl Gustav Jung, dise??ada por Isabel B. Myers y Katherine C. Briggs, madre e hija respectivamente, ampliamente difundido y utilizado en miles de organizaciones a nivel mundial y
                  considerada como la m??s popular de las pruebas de su tipo. </p>
                <p class="parrafo">El MBTI es una herramienta que ayuda a la persona a:</p>
                  <li>Entender su comportamiento y comprenderse mejor a s?? misma.</li>
                  <li>Aceptar que enfocar los problemas desde diferentes ??ngulos puede ser saludable y ??til.</li>
                  <li>Comunicarse mejor con sus familiares, sus colegas y el resto de las personas en general.</li>
                  <li>Facilitar el trabajo en equipo y resolver conflictos.</li>
                <p class="parrafo">Cada persona en su comportamiento cotidiano refleja ciertas preferencias sobre:</p>
                  <li>La forma en que prefiere captar la informaci??n.</li>
                  <li>La forma en que toma decisiones.</li>
                  <li>D??nde focaliza su atenci??n y capta energ??a.</li>
                  <li>El estilo de vida que adopta.</li>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <section class="tipos">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="titulo">Tipos de Personalidad</h3>
					</div>
				</div>

				<div class="row cajas">
					<div class="col-sm-3 personalidad primario">
                        <h3 class="primera_linea">ISTJ</h3>
						<p class="parrafo">Introvertido Sensitivo Pensativo Juicioso</p>
					</div>
					<div class="col-sm-3 personalidad gris">
                        <h3 class="primera_linea">ISFJ</h3>
						<p class="parrafo">Introvertido Sensitivo Sentimental Juicioso</p>
					</div>
					<div class="col-sm-3 personalidad rojo">
                        <h3 class="primera_linea">INFJ</h3>
						<p class="parrafo">Introvertido iNntuitivo Sentimental Juicioso</p>
                    </div>
                    <div class="col-sm-3 personalidad">
                        <h3 class="primera_linea">INTJ</h3>
                        <p class="parrafo">Introvertido iNntuitivo Pensativo Juicioso</p>
                    </div>
                    <div class="col-sm-3 personalidad primario">
                        <h3 class="primera_linea">ISTP</h3>
                        <p class="parrafo">Introvertido Sensitivo Pensativo Perceptivo</p>
                    </div>
                    <div class="col-sm-3 personalidad gris">
                        <h3 class="primera_linea">ISFP</h3>
                        <p class="parrafo">Introvertido Sensitivo Sentimental Perceptivo</p>
                    </div>
                    <div class="col-sm-3 personalidad rojo">
                        <h3 class="primera_linea">INFP</h3>
                        <p class="parrafo">Introvertido iNntuitivo Sentimental Perceptivo</p>
                    </div>
                    <div class="col-sm-3 personalidad">
                        <h3 class="primera_linea">INTP</h3>
                        <p class="parrafo">Introvertido iNntuitivo Pensativo Perceptivo</p>
                    </div>
                    <div class="col-sm-3 personalidad primario">
                        <h3 class="primera_linea">ESTP</h3>
                        <p class="parrafo">Extravertido Sensitivo Pensativo Perceptivo</p>
                    </div>
                    <div class="col-sm-3 personalidad rojo">
                        <h3 class="primera_linea">ESFP</h3>
                        <p class="parrafo">Extravertido Sensitivo Sentimental Perceptivo</p>
                    </div>
                    <div class="col-sm-3 personalidad gris">
                        <h3 class="primera_linea">ENFP</h3>
                        <p class="parrafo">Extravertido iNntuitivo Sentimental Perceptivo</p>
                    </div>
                    <div class="col-sm-3 personalidad primario">
                        <h3 class="primera_linea">ENTP</h3>
                        <p class="parrafo">Extravertido iNntuitivo Pensativo Perceptivo</p>
                    </div>
                    <div class="col-sm-3 personalidad">
                        <h3 class="primera_linea">ESTJ</h3>
                        <p class="parrafo">Extravertido Sensitivo Pensativo Juicioso</p>
                    </div>
                    <div class="col-sm-3 personalidad rojo">
                        <h3 class="primera_linea">ESFJ</h3>
                        <p class="parrafo">Extravertido Sensitivo Sentimental Juicioso</p>
                    </div>
                    <div class="col-sm-3 personalidad primario">
                        <h3 class="primera_linea">ENFJ</h3>
                        <p class="parrafo">Nulla diam mi, pharetra eget mattis sed, mollis non ligula.</p>
                    </div>
                    <div class="col-sm-3 personalidad rojo">
                        <h3 class="primera_linea">ENTJ</h3>
                        <p class="parrafo">Extravertido iNntuitivo Pensativo Juicioso</p>
                    </div>
				</div>
			</div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="container">
                <div class="row border-top">
                    <div class="col-md-8 footer-item">
                        <h3 class="titulo">Facultad de Sistemas</h3>
                        <a href="contact.php" class="btn btn-link">Contacto</a>
                        <a href="about.php" class="btn btn-link">Acerca de</a>
                    </div>
                    <div class="col-md-4 footer-item">
                        <a href="#" class="btn btn-link">Subir en P??gina</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>