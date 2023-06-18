<!DOCTYPE html>
<html>
<head>
	<title>Resume pbejarano</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.header{
			background-color: #333;
			color: #fff;
			padding: 1em;
			text-align: center;
		}
		#side{
			background-color: #C7C7C7;
		}
		.content{ display: flex; }
		.content .main{ width: 70%;  padding: 1em;}
		.content .side{ width: 30%; padding: 1em; background-color: #C7C7C7; }

		.trabajo .fecha{ text-align: left; margin-bottom: 0.2em; font-style: italic;}
		.trabajo .puesto{ font-variant: small-caps; font-weight: normal; padding-left: 50px; margin-bottom: 0; }
		.trabajo .empresa{ font-size: 1em;  padding-left: 80px; margin-bottom: 0;}
		.trabajo .empresa span{ font-size: 0.9em; font-style: italic;}
		.trabajo .descripcion{ font-size: 0.8em; text-align: justify; padding-left: 50px}

		.escuela .fecha{ margin-bottom: 0.2em; font-style: italic;}
		.escuela .titulo{ font-variant: small-caps; font-weight: normal; font-size: 1.3em; padding-left: 50px; margin-bottom: 0;}
		.escuela .nombre{ font-size: 1em; text-align: justify; padding-left: 50px}

		.txtBold{font-weight: bold;}
		.mt5{ margin-top: 1em; }

		#contacto{margin-bottom: 1em;}
	</style>
</head>
<body>
	<div class="page">
		<div class="header">
			<h1>Paul Arsenio Bejarano Molina</h1>
			<h3>Desarrollador de Software</h3>
		</div>
		<div class="content">
			<div class="main">
				<div id="historial">
					<h2>Historial Laboral</h2>
					<hr>
					<div class="trabajo">
						<p class="fecha">2019-08 - Actual</p>
						<h4 class="puesto">Desarrollador De Software</h4>
						<h3 class="empresa">Fibotech, <span>Hermosillo, Sonora</span></h3>
						<p class="descripcion">Desarrollo de software a la medida, Aplicaciones móviles, Sitios web, Demos, Sistemas usando la tecnología mas adecuada de acuerdo a las necesidades del cliente.</p>
					</div>
					<div class="trabajo">
						<p class="fecha">2015-10 - 2019-07</p>
						<h4 class="puesto">Subdirector Desarrollo E Implementacion De Sistema</h4>
						<h3 class="empresa">Supremo Tribunal De Justicia Del Estado De Sonora, Hermosillo, Sonora</h3>
						<p class="descripcion">Diseño y desarrollo de plataforma integral del poder judicial del estado usando múltiples tecnológicas de acuerdo a las necesidades de los múltiples departamentos. Implementación de sistemas.</p>
					</div>
					<div class="trabajo">
						<p class="fecha">2014-03 - 2019-07</p>
						<h4 class="puesto">Desarrollador De Software</h4>
						<h3 class="empresa">Un Paso Adelante , <span>Hermosillo, Sonora</span></h3>
						<p class="descripcion">Desarrollo mobile con apache cordova, utlizacion Plugins Java, REST Api, JQuery, Javascrip HTML5 y CSS, Desarrollo web PHP y C# ASP.Net.</p>
					</div>
					<div class="trabajo">
						<p class="fecha">2013-01 - 2014-01</p>
						<h4 class="puesto">Desarrollo Mobile Y Web.</h4>
						<h3 class="empresa">MovApps, <span>Hermosillo, Sonora</span></h3>
						<p class="descripcion">Desarrollo de Aplicaciones para Android con Phonegap, utilización de Plugins JAVA, notificaciones Google Cloud Messaging, JQuery, HTML5, CSS3, JQuery Mobile, APIs de Phonegap, Google Maps.Desarrollo de sitios web en PHP y .Net.</p>
					</div>
					<div class="trabajo">
						<p class="fecha">2012-08 - 2012-12</p>
						<h4 class="puesto">Desarrollador Web Y Móvil.</h4>
						<h3 class="empresa">Netser S.A., <span>Hermosillo, Sonora</span></h3>
						<p class="descripcion">Desarrollo de sitios web utilizando HTML, CSS, Javascript y Jquery y PHP para backend, Desarrollo mobile con el framework Phonegap, HTML5, JQuery Mobile, CSS y consumo de servicios web en .Net y JAVA.</p>
					</div>
					<div class="trabajo">
						<p class="fecha">2012-01 - 2012-08</p>
						<h4 class="puesto">Auxiliar Administrativo Y Maestro Medio Tiempo</h4>
						<h3 class="empresa">Instituto Tecnológico De Sonora, <span>Guaymas, Sonora</span></h3>
						<p class="descripcion">Maestro en materias de especialidad de la carrera de Licenciatura en Sistemas de Información Administrativa e Ingeniero en Software. Auxiliar Administrativo, desarrollo y soporte de sistemas de sistemas integrales.</p>
					</div>
					<div class="trabajo">
						<p class="fecha">2011-11 - 2012-01</p>
						<h4 class="puesto">Jefe Área De Informática.</h4>
						<h3 class="empresa">Exactta S.A., <span>Guaymas, Sonora</span></h3>
						<p class="descripcion">Manejo de Excel, tablas dinámicas, office en general, Visual Basic para pequeños sistemas implementados con macros de Excel. Responsable de de 3 personas a cargo.</p>
					</div>
				</div>
				<div id="educacion">
					<h2>Educación</h2>
					<hr>
					<div class="escuela">
						<p class="fecha">2000-08 - 2003-07</p>
						<h4 class="titulo">Tecnico En Contabilidad: Contabilidad</h4>
						<p class="nombre">Escuela Secundaria Tecnica #30 - Guaymas, Sonora</p>
					</div>
					<div class="escuela">
						<p class="fecha">2003-08 - 2006-07</p>
						<h4 class="titulo">Área Económico-Administrativa Carrera Contabilidad: Contabilidad</h4>
						<p class="nombre">Centro De Bachillerato Tecnológico, Industrial 40 - Guaymas, Sonora</p>
					</div>
					<div class="escuela">
						<p class="fecha">2006-08 - 2011-05</p>
						<h4 class="titulo">Licenciatura En Sistemas De La Información: Informatica</h4>
						<p class="nombre">Instituto Tecnológico De Sonora Unidad Guaymas  - Guaymas, Sonora</p>
					</div>
				</div>
			</div>
			<div class="side">
				<div id="contacto">
					<h2>Contacto</h2>
					<hr>
                    <div dependency="direccion">
                        <div class="txtBold">Dirección</div>
                        <div class="field" id="FIELD_STRT">San Simon #49</div>
                        <span class="field" id="FIELD_CITY">Hermosillo</span><span dependency="CITY+STAT|ZIPC">,</span>
                        <span class="field" id="FIELD_STAT">SON</span><span dependency="STAT+ZIPC">,</span>
                        <span class="field" id="FIELD_ZIPC">83287</span>
                    </div>
                    <div class="txtBold mt5" dependency="HPHN|CPHN">Teléfono</div>
                    <div dependency="HPHN">
                        <span class="field" id="FIELD_HPHN">662 318 6479</span>
                    </div>
                    <div class="txtBold mt5" dependency="EMAI">E-mail </div>
                    <div dependency="EMAI" class="word-break">
                        <span class="field" id="FIELD_EMAI">pbejarano88@gmail.com</span>
                    </div>
                </div>
                <div id="skills">
                	<h2>Habilidades</h2>
                	<hr>
                	<p>Programming</p>
					<p>PHP</p>
					<p>Javascript</p>
					<p>REST</p>
					<p>Software languages</p>
					<p>Android development</p>
					<p>Cordova</p>
					<p>HTML</p>
					<p>CSS</p>
					<p>Jquery</p>
					<p>Framework7</p>
					<p>SQL, MySQL, Informix</p>
					<p>Java</p>
					<p>.Net C#</p>
					<p>Photoshop</p>
					<p>Web user interfaces</p>
					<p>Fireworks</p>
					<p>JWT</p>
                </div>
                <div id="Languages">
                	<h2>Lenguajes</h2>
                	<hr>
                	<p>Ingles - 70%</p>
                </div>
			</div>
		</div>
	</div>
</body>
</html>