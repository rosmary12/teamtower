<?php
	session_start();
	$varsession= $_SESSION['nickname'];
	if($varsession== null || $varsession=''){ 
		echo 'Usted no tiene autorizacion';
		die();
	}
?>
<!DOCTYPE html>
<Html lang="es">
	<head>
		<title> Team Tower </title>
		<link rel= "stylesheet" type= "text/css" href="css/Estilo_Sala.css">
		<meta charset= "UFT-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="logo">
				<div class="logoimagen" style="background-image: url(images/iconos/logo3.png)">
				</div>
				<div class="logoimagenb" style="background-image: url(images/iconos/logo3a.png)">
				</div>
				<div class="descripcion">
					<h3></h3>
					<h5></h5>
				</div>
			</div>
			<div class="menu">
				<div class="asistencia" style="background-image: url(images/iconos/icono17a.png)" onclick="location.href='asistencia.html';" style= "cursor:pointer;">
				</div>
				<div class="configuracion" style="background-image: url(images/iconos/icono18a.png)" onclick="location.href='configuracion.html';" style= "cursor:pointer;">
				</div>
				<div class="AvisoLatam">
					<div class= "avatar" style="background-image: url(images/iconos/icono19a.png)"  onclick="location.href='perfil.html';" style= "cursor:pointer;">
					</div>
					<div class= "bienvenida">
						<p> Bienvenido <?php echo $_SESSION['nickname'] ?> </p>
						<a href= "cerrarsesion.php"> Cerrar sesion </a>
					</div>
				</div>			
			</div>
		</header>
		<div class="listado" style="background-image: url(images/iconos/icono27.png)"  onclick="location.href='Biblioteca.html';" style= "cursor:pointer;">
		</div>
		<div class="NavegarUno">
				<div class = "Sala" style="background-image: url(images/iconos/icono1a.png)"  onclick="location.href='Sala.php';" style= "cursor:pointer;">
				</div>
				<div class = "Biblioteca" style="background-image: url(images/iconos/icono5a.png)"   onclick="location.href='biblioteca.html';" style= "cursor:pointer;">
				</div>
				<div class = "Software" style="background-image: url(images/iconos/icono7a.png)"   onclick="location.href='SoftwareEnLinea.php';" style= "cursor:pointer;">
				</div>
				<div class = "Cursos" style="background-image: url(images/iconos/icono2a.png)"   onclick="location.href='cursos.html';" style= "cursor:pointer;">
				</div>	
				<div class = "Tutorial" style="background-image: url(images/iconos/icono4a.png)"   onclick="location.href='tutorial.html';" style= "cursor:pointer;">
				</div>	
				<div class = "Articulo" style="background-image: url(images/iconos/icono3a.png)"   onclick="location.href='revista.html';" style= "cursor:pointer;">
				</div>
				<div class = "Agenda" style="background-image: url(images/iconos/icono10a.png)"   onclick="location.href='agenda.html';" style= "cursor:pointer;">
				</div>
				<div class = "Empresa" style="background-image: url(images/iconos/icono8a.png)"   onclick="location.href='empresa.html';" style= "cursor:pointer;">
				</div>
				<div class = "Proveedores" style="background-image: url(images/iconos/icono26a.png)"   onclick="location.href='tienda.html';" style= "cursor:pointer;">
				</div>	
				<div class = "Monedero" style="background-image: url(images/iconos/icono9a.png)" onclick="location.href='TowerMonedero.html';" style= "cursor:pointer;">
				</div>
				<div class = "Archivo" style="background-image: url(images/iconos/icono11a.png)" onclick="location.href='Correo.html';" style= "cursor:pointer;">	
				</div>
				<div class = "Llamada" style="background-image: url(images/iconos/icono12a.png)" onclick="location.href='LlamadaTelefonica.html';" style= "cursor:pointer;">
				</div>
				<div class = "ClaseEnVivo" style="background-image: url(images/iconos/icono6a.png)"  onclick="location.href='VideoConferencia.html';" style= "cursor:pointer;">
				</div>
				<div class = "Imagen1">
					<img src= "images/menup/sala.jpg">
				</div>
				<div class = "Imagen2">
					<img src= "images/menup/cursos.jpg">
				</div>
				<div class = "Imagen3">
					<img src= "images/menup/tutorial.jpg">
				</div>
				<div class = "Imagen4">
					<img src= "images/menup/articulos.jpg">
				</div>
				<div class = "Imagen5">
					<img src= "images/menup/biblioteca.jpg">
				</div>
				<div class = "Imagen6">
					<img src= "images/menup/aulaenvivo.jpg">
				</div>
				<div class = "Imagen7">
					<img src= "images/menup/software.jpg">
				</div>
				<div class = "Imagen10">
					<img src= "images/menup/agenda.jpg">
				</div>
				<div class = "Imagen12">
					<img src= "images/menup/Llamada.jpg">
				</div>
				<div class = "Imagen9">
					<img src= "images/menup/monedero.jpg">
				</div>
				<div class = "Imagen14">
					<img src= "images/menup/proveedor.jpg">
				</div>
				<div class = "Imagen8">
					<img src= "images/menup/empresa.jpg">
				</div>
			</div>
			<div class= "Anuncios">
			<div class= "AnunciosEmpresas">
				<div class="slider">
					<ul>
						<li>
							<a href="Empresa1.html">
							<img src="images/anuncios/1.jpg" alt="">						
							</a>			
						</li>
						<li>
							<a href="Empresa2.html"> 
			  				<img src="images/anuncios/2.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa3.html"> 
			  				<img src="images/anuncios/3.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa4.html"> 
			  				<img src="images/anuncios/4.jpg" alt="">
							</a>
						</li>	
						<li>
							<a href="Empresa5.html"> 
			  				<img src="images/anuncios/5.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa6.html"> 
			  				<img src="images/anuncios/6.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa7.html"> 
			  				<img src="images/anuncios/7.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa8.html"> 
			  				<img src="images/anuncios/8.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa9.html"> 
			  				<img src="images/anuncios/9.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa10.html"> 
			  				<img src="images/anuncios/10.jpg" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class= "AnunciosEmpresas">
				<div class="slider">
					<ul>
						<li>
							<a href="Empresa11.html">
							<img src="images/anuncios/11.jpg" alt="">						
							</a>			
						</li>
						<li>
							<a href="Empresa12.html"> 
			  				<img src="images/anuncios/12.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa13.html"> 
			  				<img src="images/anuncios/13.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa14.html"> 
			  				<img src="images/anuncios/14.jpg" alt="">
							</a>
						</li>	
						<li>
							<a href="Empresa15.html"> 
			  				<img src="images/anuncios/15.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa16.html"> 
			  				<img src="images/anuncios/16.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa17.html"> 
			  				<img src="images/anuncios/17.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa18.html"> 
			  				<img src="images/anuncios/18.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa19.html"> 
			  				<img src="images/anuncios/19.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="Empresa20.html"> 
			  				<img src="images/anuncios/20.jpg" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class= "AnunciosPersonas">
				<div class= "fotos">
				</div>	
				<p>Maximiliano Perozo<p>
				<p>Asesor de Seguros<p>
				<p>Acaba de Unirse<p>
				<a href=""> Ver perfil </a>
			</div>
			<div class= "AnunciosPersonas">
				<div class= "fotos">
				</div>	
				<p>Esteban Araujo<p>
				<p>Corredor Inmobiliario<p>
				<p>Acaba de Unirse<p>
				<a href=""> Ver perfil </a>
			</div>			
		</div>
		<div class="ParteA">
			<div class = "CursosDisponibles">
				<div class="contenedor">
					<div class="contenedor_tarjeta">
						<a href= "IngenieriaEstructural.html">
							<figure class="frontal" style="background-image: url(images/Top20/1.jpg)" alt="">
									<h2 class="titulo">>Ingenier�a Estructural</h2>
									<h2 class="subtitulo"> Ordenar curso ya!</h2>						
								<figcaption class="trasera">
									<h2 class="titulo"> Ingenier�a Estructural </h2>
									<hr>
									<p> La ingenier�a estructural es una rama cl�sica de la arquitectura y la ingenier�a civil que se ocupa del dise�o y c�lculo de la parte estructural en elementos y sistemas estructurales tales como edificios, puentes, muros (incluyendo muros de contenci�n), presas, t�neles y otras obras civiles. Su finalidad es la de conseguir estructuras seguras, resistentes y funcionales. En un sentido pr�ctico, la ingenier�a estructural es la aplicaci�n de la mec�nica de medios continuos para el dise�o de estructuras que soporten su propio peso (cargas muertas), m�s las cargas ejercidas por el uso (cargas vivas), m�s las cargas producidas por eventos de la naturaleza, como vientos, sismos, nieve o agua.</p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "IngenieriaTransito.html">
							<figure class="frontal" style="background-image: url(images/Top20/2.jpg)" alt="">
									<h2 class="titulo"> >Ingenieria de Transito</h2>
									<h2 class="subtitulo"> Ordenar curso ya!</h2>						
								<figcaption class="trasera">
									<h2 class="titulo">Ingenier�a de Transito</h2>
									<hr>
									<p> La Ingenier�a de tr�fico o de tr�nsito es una rama de la ingenier�a del transporte y a su vez rama de la ingenier�a civil que trata sobre la planificaci�n, dise�o y operaci�n de tr�fico en las calles, carreteras y autopistas, sus redes, infraestructuras, tierras colindantes y su relaci�n con los diferentes medio de transporte consiguiendo una movilidad segura, eficiente y conveniente tanto de personas como de mercanc�a. </p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "IngenieriaVial.html">
							<figure class="frontal" style="background-image: url(images/Top20/3.jpg)" alt="">
									<h2 class="titulo"> >Ingenieria Vial </h2>
									<h2 class="subtitulo"> Ordenar curso ya!</h2>			
								<figcaption class="trasera">
									<h2 class="titulo"> Ingenier�a Vial </h2>
									<hr>
									<p> El Dise�o geom�trico de carreteras es la t�cnica de ingenier�a civil que consiste en situar el trazado de una carretera o calle en el terreno. Los condicionantes para situar una carretera sobre la superficie son muchos, entre ellos la topograf�a del terreno, la geolog�a, el medio ambiente, la hidrolog�a o factores sociales y urban�sticos. El primer paso para el trazado de una carretera es un estudio de viabilidad, que determine el corredor donde podr�a situarse el trazado de la v�a. Generalmente se estudian varios corredores y se estima cu�l puede ser el coste ambiental, econ�mico o social de la construcci�n de la carretera. Una vez elegido un corredor se determina el trazado exacto, minimizando el coste y estimando en el proyecto de construcci�n el costo total, especialmente el que supondr� el volumen de tierra desplazado y el firme necesario.</p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">	
						<a href= "Pavimentos.html">
								<figure class="frontal" style="background-image: url(images/Top20/4.jpg)" alt="">
										<h2 class="titulo"> >Pavimentos </h2>
										<h2 class="subtitulo"> Ordenar curso ya!</h2>		
									<figcaption class="trasera">
										<h2 class="titulo"> Pavimentos </h2>
										<hr> 
										<p> El pavimento es la capa constituida por uno o m�s materiales que se colocan sobre el terreno natural o nivelado, para aumentar su resistencia y servir para la circulaci�n de personas o veh�culos. Entre los materiales utilizados en la pavimentaci�n urbana, industrial o vial est�n los suelos con mayor capacidad de soporte, los materiales rocosos, el hormig�n y las mezclas asf�lticas</p>
									</figcaption>
								</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "EstructurasDeConcreto.html">
								<figure class="frontal" style="background-image: url(images/Top20/5.jpg)" alt="">
										<h2 class="titulo"> > Estructuras de Concreto Armado </h2>
										<h2 class="subtitulo"> Ordenar curso ya!</h2>		
									<figcaption class="trasera">
										<h2 class="titulo"> Estructuras de Concreto Armado </h2>
										<hr>
										<p> La t�cnica constructiva del concreto armado, hormig�n armado u hormig�n reforzado consiste en la utilizaci�n de hormig�n o concreto reforzado con barras o mallas de acero, llamadas armaduras. Tambi�n se puede armar con fibras, tales como fibras pl�sticas, fibra de vidrio, fibras de acero o combinaciones de barras de acero con fibras dependiendo de los requerimientos a los que estar� sometido. El hormig�n armado se utiliza en edificios de todo tipo, caminos, puentes, presas, t�neles y obras industriales. La utilizaci�n de fibras es muy com�n en la aplicaci�n de hormig�n proyectado o shotcrete, especialmente en t�neles y obras civiles en general. </p>
									</figcaption>
								</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "EstructurasDeAcero.html">
								<figure class="frontal" style="background-image: url(images/Top20/6.jpg)" alt="">
										<h2 class="titulo"> > Estructuras de Acero </h2>
										<h2 class="subtitulo"> Ordenar curso ya!</h2>				
									<figcaption class="trasera">
										<h2 class="titulo"> Estructuras de Acero </h2>
										<hr>
										<p> Construcci�n en acero es aquella construcci�n en que la mayor parte de los elementos simples o compuestos que constituyen la parte estructural son de acero. En el caso en que los elementos de acero se constituyan en elementos que soportan principalmente las solicitaciones de tracci�n de una estructura mientras que el hormig�n (o concreto) toma las solicitaciones de compresi�n la construcci�n es de hormig�n armado o concreto reforzado. Esa soluci�n constructiva a pesar de contener acero en forma de hierro redondo no se incluye dentro de la definici�n de Construcci�n en Acero.Cuando conviven en una misma construcci�n elementos simples o compuestos de acero con los de hormig�n armado la construcci�n se denomina mixta (acero-hormig�n armado).</p>
									</figcaption>
								</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "Puentes.html">
								<figure class="frontal" style="background-image: url(images/Top20/7.jpg)" alt="">
										<h2 class="titulo"> > Puentes </h2>
										<h2 class="subtitulo"> Ordenar curso ya!</h2>
									<figcaption class="trasera">
										<h2 class="titulo"> Puentes </h2>
										<hr>
										<p> Un puente es una construcci�n que permite salvar un accidente geogr�fico como un r�o, un ca��n, un valle, una carretera, un camino, una v�a f�rrea, un cuerpo de agua o cualquier otro obst�culo f�sico. El dise�o de cada puente var�a dependiendo de su funci�n y de la naturaleza del terreno sobre el que se construye.
Su proyecto y su c�lculo pertenecen a la ingenier�a estructural, siendo numerosos los tipos de dise�os que se han aplicado a lo largo de la historia, influidos por los materiales disponibles, las t�cnicas desarrolladas y las consideraciones econ�micas, entre otros factores. Al momento de analizar el dise�o de un puente, la calidad del suelo o roca donde habr� de apoyarse y el r�gimen del r�o por encima del que cruza son de suma importancia para garantizar la vida del mismo.  </p>
									</figcaption>
								</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "NavesIndustriales.html">
								<figure class="frontal" style="background-image: url(images/Top20/8.jpg)" alt="">
										<h2 class="titulo"> > Naves Industriales </h2>
										<h2 class="subtitulo"> Ordenar curso ya!</h2>
									<figcaption class="trasera">
										<h2 class="titulo"> Naves Industriales </h2>
										<hr>
										<p> Una nave industrial es un edificio de uso industrial que alberga la producci�n y/o almacena los bienes industriales, junto con los obreros, las m�quinas que los generan, el transporte interno, la salida y entrada de mercanc�as, etc�tera. Los requerimientos y tipos de construcci�n que debe poseer la nave var�an en funci�n de las innumerables actividades econ�micas que se pueden desarrollar en su interior, lo que ha conducido al desarrollo de un gran n�mero de soluciones constructivas. Por ejemplo, en las naves que albergan cadenas de producci�n la longitud suele ser la dimensi�n predominante de la construcci�n. </p>
									</figcaption>
								</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "IngenieriaSismica.html">
								<figure class="frontal" style="background-image: url(images/Top20/9.jpg)" alt="">
										<h2 class="titulo"> > Ingenier�a Sismica </h2>
										<h2 class="subtitulo"> Ordenar curso ya!</h2>
									<figcaption class="trasera">
										<h2 class="titulo"> Ingenier�a Sismica  </h2>
										<hr>
										<p>La ingenier�a s�smica es el estudio del comportamiento de los edificios y las estructuras sujetas a carga s�smicas. Es el conjunto de la ingenier�a estructural y civil. Los principales objetivos de la ingenier�a s�smica son;

Entender la interacci�n entre los edificios y la infraestructura p�blica con el subsuelo.
Prever las potenciales consecuencias de fuertes terremotos en �reas urbanas y sus efectos en la infraestructura.
Dise�ar, construir y mantener estructuras que resistan a la exposici�n de un terremoto, m�s all� de las expectaciones y en total cumplimiento de los reglamentos de construcci�n.
Mantener a la sociedad lejos de toda preocupaci�n que les puede causar en tan solo pensar en las consecuencias de un terremoto.
Una estructura apropiadamente dise�ada no necesita ser extraordinariamente fuerte o cara. Las m�s poderosas y costosas herramientas para la ingenier�a s�smica son las tecnolog�as de control de la vibraci�n y en particular, el aislamiento de la base o cimentaci�n.</p>
									</figcaption>
								</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "MecanicaDeSuelos.html">
								<figure class="frontal" style="background-image: url(images/Top20/10.jpg)" alt="">
										<h2 class="titulo"> > Mec�nica de Suelos </h2>
										<h2 class="subtitulo"> Ordenar curso ya!</h2>
									<figcaption class="trasera">
										<h2 class="titulo"> Mec�nica de Suelos </h2>
										<hr>
										<p> En ingenier�a, la mec�nica de suelos es la aplicaci�n de las leyes de la f�sica y las ciencias naturales a los problemas que involucran las cargas impuestas a la capa superficial de la corteza terrestre. Esta ciencia fue fundada por Karl von Terzaghi, a partir de 1925.

Todas las obras de ingenier�a civil se apoyan sobre el suelo de una u otra forma, y muchas de ellas, adem�s, utilizan la tierra como elemento de construcci�n para terraplenes, diques y rellenos en general; por lo que, en consecuencia, su estabilidad y comportamiento funcional y est�tico estar�n determinados, entre otros factores, por el desempe�o del material de asiento situado dentro de las profundidades de influencia de los esfuerzos que se generan, o por el del suelo utilizado para conformar los rellenos.

Si se sobrepasan los l�mites de la capacidad resistente del suelo o si, a�n sin llegar a ellos, las deformaciones son considerables, se pueden producir esfuerzos secundarios en los miembros estructurales, quiz�s no tomados en consideraci�n en el dise�o, productores a su vez de deformaciones importantes, fisuras, grietas, alabeo o desplomes que pueden producir, en casos extremos, el colapso de la obra o su in-utilizaci�n y abandono.

En consecuencia, las condiciones del suelo como elemento de sustentaci�n y construcci�n y las del cimiento como dispositivo de transici�n entre aquel y la infraestructura, han de ser siempre observadas, aunque esto se haga en proyectos peque�os fundados sobre suelos normales a la vista de datos estad�sticos y experiencias locales, y en proyectos de mediana a gran importancia o en suelos dudosos, infaliblemente, al trav�s de una correcta investigaci�n de mec�nica de suelos. </p>
									</figcaption>
								</figure>	
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "Geologia.html">
								<figure class="frontal" style="background-image: url(images/Top20/11.jpg)" alt="">
										<h2 class="titulo"> > Geolog�a </h2>
										<h2 class="subtitulo"> Ordenar curso ya!</h2>
									<figcaption class="trasera">
										<h2 class="titulo"> Geolog�a </h2>
										<hr>
										<p> La geolog�a es la ciencia natural que estudia la composici�n y estructura tanto interna como superficial del planeta Tierra, y los procesos por los cuales ha ido evolucionando a lo largo del tiempo geol�gico. La misma comprende un conjunto de geociencias, as� conocidas actualmente desde el punto de vista de su pedagog�a, desarrollo y aplicaci�n profesional. Ofrece testimonios esenciales para comprender la tect�nica de placas, la historia de la vida a trav�s de la paleontolog�a, y c�mo fue la evoluci�n de �sta, adem�s de los climas del pasado. En la actualidad la geolog�a tiene una importancia fundamental en la exploraci�n de yacimientos minerales (miner�a) y de hidrocarburos (petr�leo y gas natural), y la evaluaci�n de recursos h�dricos subterr�neos (hidrogeolog�a). Tambi�n tiene importancia fundamental en la prevenci�n y entendimiento de fen�menos naturales como remoci�n de masas en general, terremotos, tsunamis, erupciones volc�nicas, entre otros. Aporta conocimientos clave en la soluci�n de problemas de contaminaci�n medioambiental, y provee informaci�n sobre los cambios clim�ticos del pasado. Juega tambi�n un rol importante en la geotecnia y la ingenier�a civil. 

La geolog�a incluye ramas como la geof�sica, la tect�nica, la geolog�a estructural, la estratigraf�a, la geolog�a hist�rica, la hidrogeolog�a, la geomorfolog�a, la petrolog�a y la edafolog�a.

Por extensi�n se aplica al estudio del resto de los cuerpos y materia del sistema solar (astrogeolog�a o geolog�a planetaria). </p>
									</figcaption>
								</figure>
						</a>	
					</div>
					<div class="contenedor_tarjeta">
						<a href= "Cimentaciones.html">
							<figure class="frontal" style="background-image: url(images/Top20/12.jpg)" alt="">
									<h2 class="titulo"> > Cimentaciones </h2>
									<h2 class="subtitulo"> Ordenar curso ya!</h2>
								<figcaption class="trasera">
									<h2 class="titulo"> Cimentaciones </h2>
									<hr>
									<p> Se denomina cimentaci�n al conjunto de elementos estructurales de una estructura cuya misi�n es transmitir sus cargas o elementos apoyados en ella al suelo, distribuy�ndolas de forma que no superen su presi�n admisible ni produzcan cargas zonales. Debido a que la resistencia del suelo es, generalmente, menor que la de los pilares o muros que soporta, el �rea de contacto entre el suelo y la cimentaci�n debe ser proporcionalmente m�s grande que los elementos soportados, excepto en suelos rocosos muy coherentes. La cimentaci�n es importante porque es el grupo de elementos que soportan a la superestructura. La estabilidad de una edificaci�n depende en gran medida del tipo de terreno sobre el que se asienta. </p>
								</figcaption>	
							</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "SaneamientoAmbiental.html">
							<figure class="frontal" style="background-image: url(images/Top20/13.jpg)" alt="">
									<h2 class="titulo"> > Saneamiento Ambiental </h2>
									<h2 class="subtitulo"> Ordenar curso ya!</h2>
								<figcaption class="trasera">
									<h2 class="titulo"> Saneamiento Ambiental  </h2>
									<hr>
									<p> El saneamiento ambiental b�sico o sanidad ambiental es el conjunto de acciones, t�cnicas y socioecon�micas de salud p�blica que tienen por objetivo alcanzar niveles crecientes de salubridad ambiental. Comprende el manejo sanitario del agua potable, las aguas residuales y los vertidos, los residuos s�lidos, los residuos org�nicos tales como las excretas y residuos alimenticios, las emisiones a la atm�sfera y el comportamiento higi�nico que reduce los riesgos para la salud y previene la contaminaci�n.

Tiene por finalidad la promoci�n y el mejoramiento de condiciones de vida urbana y rural y del medio ambiente que afectan al ser humano.  </p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "ObrasHidraulicas.html">
								<figure class="frontal" style="background-image: url(images/Top20/14.jpg)" alt="">
										<h2 class="titulo"> > Obras Hidr�ulicas </h2>
										<h2 class="subtitulo"> Ordenar curso ya!</h2>						
									<figcaption class="trasera">
										<h2 class="titulo">  Obras Hidraulicas </h2>
										<hr>
										<p> Se entiende por obra hidr�ulica o infraestructura hidr�ulica a una construcci�n, en el campo de la ingenier�a civil, ingenier�a agr�cola e ingenier�a hidr�ulica, donde el elemento dominante tiene que ver con el agua. Se puede decir que las obras hidr�ulicas constituyen un conjunto de estructuras construidas con el objetivo de controlar el agua, cualquiera que sea su origen, con fines de aprovechamiento o de defensa. </p>
									</figcaption>
								</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "ObrasDeSaneamiento.html">
							<figure class="frontal" style="background-image: url(images/Top20/15.jpg)" alt="">
										<h2 class="titulo"> > Obras de Saneamiento </h2>
										<h2 class="subtitulo"> Ordenar curso ya!</h2>
								<figcaption class="trasera">
									<h2 class="titulo"> Obras de Saneamiento  </h2>
									<hr>
									<p> Las obras de saneamiento son fundamentales en la infraestructura urbana de cualquier poblaci�n, ya que son necesarias para conducir las aguas residuales a su tratamiento correspondiente. </p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="contenedor_tarjeta">
						<a href= "#">
							<figure class="frontal" style="background-image: url(images/Top20/16.jpg)" alt="">
									<h2 class="titulo"> > No Disponible  </h2>
									<h2 class="subtitulo"> Ordenar curso ya!</h2>
								<figcaption class="trasera">
									<h2 class="titulo"> No Disponible  </h2>
									<hr>
									<p> No Disponible  </p>
								</figcaption>
							</figure>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="ParteB">
			<div class="Publicar">
				<textarea name="Escribir" rows="2" cols="46"> Publicar </textarea>
				<div class = "foto" style="background-image: url(images/iconos/icono16a.png)">
				</div>	
				<div class = "voz" style="background-image: url(images/iconos/icono15a.png)">
				</div>
				<div class = "video" style="background-image: url(images/iconos/icono14a.png)">
				</div>
				<div class= "EnviarP" style="background-image: url(images/iconos/icono22a.png)">
				</div>	
				<div class = "EnviarTower" style="background-image: url(images/iconos/icono24a.png)">
				</div>
			</div>
			<div class = "CabChatG">
				<div class= "CG"  style="background-image: url(images/iconos/CP.png)" "cursor:pointer">
				</div>	
				<div class= "conteCG">
					1
				</div>
				<p> -- MSGs de Mi Equipo </p>
				<textarea name="VerChatG" rows="2" cols="46"> </textarea>
			</div>
			<div class = "CabChatPub">
				<div class= "CP"  style="background-image: url(images/iconos/CP.png)">
				</div>	
				<div class= "conteCP">
					19
				</div>
				<p> -- MSGs de Mi Instituci�n </p>
				<textarea name="VerChatG" rows="2" cols="46">  </textarea>		
			</div>		
			<div class = "Comunidad">
				<articule>
					<hgroup>
					  <h1> PAVIMENTOS RIGIDOS</h1><br>
					  <h2> Tipos de Losas </h2><br>
					</hgroup>
					<time datetime= "10-06-2020"> Publicado 10-06-2020 </time><br><br>
					<p> Existe cuatro maneras de dise�ar y construir losas sobre piso:<br><br>
					1) Losas con juntas sin refuerzo.<br>
					2) Losas sobre piso reforzadas para limitar el ancho de las grietas causadas por la retracci�n o contracci�n del concreto, variaciones de temperatura y cargas aplicadas. Estas losas consisten en las siguientes:<br>
					<small>� Losas con juntas Reforzadas con Barras de Acero Dulce.<br>
					- Losas con juntas Reforzadas con mallas de alambre.<br>
					- Losas con juntas Reforzadas con fibras <br>
					� Losas con refuerzo continuo (pisos libre de juntas de contracci�n;</small><br>
					3) Losas sobre piso reforzadas para prevenir el agrietamiento debido a la retracci�n, los cambios de temperatura y cargas aplicadas. Estas losas consisten en las siguientes:<br>
					<small>�  Losas con concreto de compensaci�n por retracci�n y<br>
					�  Losas Post tensadas.</small><br>
					4) Losas Estructurales. (ACI 318)<br> </p> <br>
					<div class="slider2">
						<ul>
							<li>
								<img src= "images/articulos/pav1.png"/> <br>
	 						</li>

							<li>
								<img src= "images/articulos/pav1.png"/> <br>
	 						</li>

							<li>
								<img src= "images/articulos/pav1.png"/> <br>
 							</li>

							<li>
								<img src= "images/articulos/pav1.png"/> <br>
 							</li>

							<li>
								<img src= "images/articulos/pav1.png"/> <br>
 							</li>

							<li>
								<img src= "images/articulos/pav1.png"/> <br>
 							</li>					
						</ul>
					</div>	
					<adress>
						<a href="http://faztweb.com"> Visita mi Sitio Web </a> <br>
					</adress>
					<footer>
					<p> Comentarios (10) </p><br>
					</footer>
				</articule>
				<articule>
					<hgroup>
						<h1> LONGITUD DE ANCLAJES </h1><br>
						<h2> Anclajes en Tension </h2><br>
					</hgroup>
					<time datetime= "10-06-2020"> Publicado 10-06-2020 </time><br>
					<p> Contenido Articulo numero 2 </p> <br>
					<div class="slider2">
						<ul>
							<li>
								<img src= "images/articulos/pav1.png"/> <br>
	 						</li>

							<li>
								<img src= "images/articulos/pav1.png"/> <br>
	 						</li>

							<li>
								<img src= "images/articulos/pav1.png"/> <br>
 							</li>

							<li>
								<img src= "images/articulos/pav1.png"/> <br>
 							</li>

							<li>
								<img src= "images/articulos/pav1.png"/> <br>
 							</li>

							<li>
								<img src= "images/articulos/pav1.png"/> <br>
 							</li>
						</ul>
					</div>
					<adress>
						<a href="oficiostower.html"> Visita mi Sitio Web </a> <br>
					</adress>
					<footer>
						<p> Comentarios (8) </p>
					</footer>
				</articule>
			</div>
		</div>
		<script src="scripts/SalaJava.js"></script>
	</body>
</html>