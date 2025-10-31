<?php
    @session_start();
    ini_set('display_errors',0);
?>

<!DOCTYPE HTML>
<html>
<head>
<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AJWS - Seu Site de Brindes</title> 

<!-- Favicons -->

<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Fonts -->

<link href='https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- Styles -->

<link href="css/style.css" rel="stylesheet"  media="screen">
</head>
<body>

	<?php
		if(isset($_SESSION["sucesso"])){
			echo "<div class='alert alert-success'>".$_SESSION["sucesso"]."</div>";
			unset($_SESSION["sucesso"]);
		}
		if(isset($_SESSION["erro"])){
			echo "<div class='alert alert-danger'>".$_SESSION["erro"]."</div>";
			unset($_SESSION["erro"]);
		}
	?>

  <!-- Loader -->

  	<div class="loader">
   	<div class="loader-brand"><img alt="" class="img-responsive center-block" src="img/ajws.png"></div>
   </div>

	   <!-- Header -->

		<header id="top" class="navbar">
		   <div class="navbar-primary affix">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button> 
		          <a href="#top" class="brand js-target-scroll">
		            <img alt=""  src="img/ajws.png" style="width:78%;">
		          </a>
		        </div>
		        <div class="collapse navbar-collapse" id="navbar-collapse">
		            <ul class="nav navbar-nav navbar-right">                                                   
			            <li class="active">
			            	<a href="#top" class="js-target-scroll">Home</a>
			            </li>
			            <li>
			            	<a href="#services" class="js-target-scroll">Destaques</a>
			            </li>
			            <li>
			            	<a href="#showcase" class="js-target-scroll">Portfólio</a>
			            </li>  
			            <li>
			            	<a href="#depoimentos" class="js-target-scroll">Depoimentos</a>
			            </li>
			            <li>
			            	<a href="#specialization" class="js-target-scroll">Sistema</a>
			            </li>
			            <li>
			            	<a href="#contact-section" class="js-target-scroll">Contato</a>
			            </li>
			         </ul>
		        </div>
		      </div>
		   </div>
		</header>

		<!-- Content -->

	    <div class="content">

	   	<!-- Masthead -->

	      <div class="masthead slideshow">
		    	<div class="masthead-entry gradient-overlay" style="background-image: url(img/slides/BANNER1.jpg);">
	  	        <div class="container rel-1">
	      	   <div class="page-title">
		      	   <div class="triangles">
		      	   	<div class="triangle triangle1"></div>
		      	   	<div class="triangle triangle2"></div>
		      	   	<div class="triangle triangle3"></div>
		      	   	<div class="triangle triangle4"></div>
		      	   </div>
		      	   <h1>
			      	   The best creative service
		      	   </h1>
	      	   </div>
		         <div class="lead">
	               will make your projects a reality
	            </div>
	            <div class="lead-delimiter delimiter white"><div></div></div>
	            <a href="#" class="btn-lead btn">
	            	<span class="text">Discovery</span>
	            	<span class="flip-front">Discovery</span>
	            	<span class="flip-back">Start now</span>
	            </a>
	           </div>
          		<div class="masthead-entry-img rel-1"><img alt="" class="img-responsive center-block" src="img/slides/FRAMES1.jpg"></div>
	       	</div>
	         <div class="masthead-entry gradient-overlay" style="background-image: url(img/slides/BANNER2.jpg);">
		  	      <div class="container rel-1">
		      	   <div class="page-title">
			      	   <div class="triangles">
			      	   	<div class="triangle triangle1"></div>
			      	   	<div class="triangle triangle2"></div>
			      	   	<div class="triangle triangle3"></div>
			      	   	<div class="triangle triangle4"></div>
			      	   </div>
			      	   <h1>
				      	   Modern design
			      	   </h1>
		      	   </div>
			         <div class="lead">
		               will make your projects a reality
		             </div>
		             <div class="lead-delimiter delimiter white"><div></div></div>
		             <a href="#" class="btn-lead btn">
		            	<span class="text">Discovery</span>
		            	<span class="flip-front">Discovery</span>
		            	<span class="flip-back">Start now</span>
		             </a>
		         </div>
	         	<div class="masthead-entry-img rel-1"><img alt="" class="img-responsive center-block" src="img/slides/FRAMES2.jpg"></div>
	         </div>
	         <div class="masthead-entry gradient-overlay" style="background-image: url(img/slides/BANNER3.jpg);">
		  	      <div class="container rel-1">
		      	   <div class="page-title">
			      	   <div class="triangles">
			      	   	<div class="triangle triangle1"></div>
			      	   	<div class="triangle triangle2"></div>
			      	   	<div class="triangle triangle3"></div>
			      	   	<div class="triangle triangle4"></div>
			      	   </div>
			      	   <h1>
				      	   Easy to customize
			      	   </h1>
		      	   </div>
			         <div class="lead">
		               will make your projects a reality
		             </div>
		             <div class="lead-delimiter delimiter white"><div></div></div>
		             <a href="#" class="btn-lead btn">
		            	<span class="text">Discovery</span>
		            	<span class="flip-front">Discovery</span>
		            	<span class="flip-back">Start now</span>
		             </a>
		         </div>
		         <div class="masthead-entry-img rel-1"><img alt="" class="img-responsive center-block" src="img/slides/FRAMES3.jpg"></div>
	         </div>
	      </div>

			<!-- Main -->

		   <main class="main">

		   	<!-- Services -->

			   <section id="services" class="services text-center section">
				    <div class="container">
				      <div class="row-base row">
				        <div class="service-column col-base col-md-6 col-lg-3">
				          <div class="border">
				          	<i class="fa fa-pie-chart"></i>
				            <h3>Orçamento Ágil e CRM</h3>
				            <p>Orçamento ágil direto no WhatsApp ou e-mail, com CRM integrado para gestão completa de clientes e vendedores."</p>
				          </div>
				        </div>
				        <div class="service-column col-base col-md-6 col-lg-3">
				          <div class="border">
				          	<i class="fa fa-shield"></i>
				            <h3>Integração com Importadores</h3>
				            <p>IIntegração automática de preços e estoque via API, com atualização semanal dos produtos das principais importadoras.</p>
				          </div>
				        </div>
				        <div class="service-column col-base col-md-6 col-lg-3">
				          <div class="border">
				          	<i class="fa fa-laptop"></i>
				            <h3>Hospedagem Dedicada</h3>
				            <p>Hospedagem dedicada Oracle Plus II, garantindo máxima segurança e alta performance para o seu site.</p>
				          </div>
				        </div>
				        <div class="service-column col-base col-md-6 col-lg-3">
				          <div class="border">
				          	<i class="fa fa-life-saver"></i>
				            <h3>Suporte Profissional</h3>
				            <p>Suporte profissional direto com nossa equipe pelo WhatsApp, e-mail ou telefone – atendimento rápido e eficiente sempre que você precisar.</p>
				          </div>
				        </div>
				      </div>
				   </div>
				</section>

				<!-- Portfolio -->

				<section id="showcase" class="showcase bgc-light text-center section">
				   <div class="container">
				      <div class="row">
				        <header class="text-center col-md-6 col-md-offset-3">
				        	<h2>ESCOLHA SEU LAYOUT</h2>
				        	<div class="delimiter"><div></div></div>
				        	<p class="section-entry">Personalize seu site escolhendo o layout que mais combina com sua empresa. No painel administrativo, você ainda encontra uma biblioteca de banners para destacar promoções e novidades."</p>
				        </header>
				      </div>
				   </div>
				   <ul class="filter">
			      	<li class="active" data-filter="*"><a href="">TODOS</a></li>
			      	<li data-filter=".AJWSI"><a href="">AJWS01</a></li>
			      	<li data-filter=".AJWSII"><a href="">AJWS02</a></li>
			      	<li data-filter=".AJWSIII"><a href="">AJWS03</a></li>
			      	<li data-filter=".AJWSIV"><a href="">AJWS04</a></li>
			      	<li data-filter=".AJWSV"><a href="">AJWS05</a></li>
				   </ul>
				   <div class="js-iso">
				    	<div class="grid-sizer"></div>
			         <div class="AJWSI col-showcase w2 js-iso-item">
		              <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSI/AJWSI_1_KELLY.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">Kelly Pinheiro Personalizados</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://kpersonalizados.com.br/" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
			         <div class="AJWSII col-showcase js-iso-item">
		              <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSII/AJWSII_2_PERSONARTT.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">Personartt Brindes e Personalizados</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://personartt.com.br/" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
			         <div class="AJWSIII col-showcase js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSIII/AJWSIII_4_CAO.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">CAO Brindes</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://caobrindes.com.br/" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
			         <div class="AJWIV col-showcase js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSIV/AJWSIV_2_AULIK.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">Aulik Brindes Personalizados</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://aulikbrindes.com.br/" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
			         <div class="AJWSV col-showcase js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSV/AJWSV_2_MF.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">MF Brindes</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://mfbrindes.com.br/" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
			         <div class="AJWSII col-showcase w2 js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSII/AJWSII_1_STAMP.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">Stamp Arte 7</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://stamparte7.com.br/" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
			         <div class="AJWSI col-showcase js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSI/AJWSI_4_MAXXI.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">Maxxi Brindes</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://maxxibrindes.com.br/" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
			         <div class="AJWSV col-showcase js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSV/AJWSV_4_LINE.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">Line Brindes</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://linebrindes.com.br" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
					  <div class="AJWSI col-showcase w2 js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSI/AJWSI_5_BEECOOL.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">Beecool Brindes</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://beecoolbrindes.com.br/" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
					 <div class="AJWSII col-showcase js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSII/AJWSII_4_OPCAO.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">Opção Brindes</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://opcaopromocional.com.br/" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
					 <div class="AJWSIII col-showcase js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSIII/AJWSIII_2_BOX.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">BOX 19</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://box19.com.br/" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
					 <div class="AJWSIV col-showcase js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSIV/AJWSIV_4_CRICKET.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">Cricket Brindes</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://cricketbrindes.com.br/" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
					 <div class="AJWSV col-showcase w2 js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSV/AJWSV_5_ATOS.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">Atos Brindes</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://atosbrindes.com.br/" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
					 <div class="AJWSV col-showcase js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSV/AJWSV_3_JOY.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Projeto Website</div>
		                    <h3 class="showcase-title">JOY Brindes</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="https://joybrindes.com.br" target="_blank" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
					 
					 <div class="AJWSIV col-showcase js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSI/AJWSI_4_MAXXI.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Graphic Designer, Photoshop</div>
		                    <h3 class="showcase-title">aaa</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="#" class="icon-round icon-round-medium"><i class="fa fa-heart-o"></i></a>
		                    	<a href="#" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
					 
					 <div class="AJWSIV col-showcase js-iso-item">
			            <figure>
		                <div class="image-holder"><img alt="" src="img/portfolio/AJWSI/AJWSI_4_MAXXI.jpg"></div>
		                <figcaption>
		                  <div class="showcase-lead">
		                    <div class="showcase-category">Graphic Designer, Photoshop</div>
		                    <h3 class="showcase-title">bbb</h3>
		                    <div class="showcase-cntrls">
		                    	<a href="#" class="icon-round icon-round-medium"><i class="fa fa-heart-o"></i></a>
		                    	<a href="#" class="icon-round icon-round-medium"><i class="fa fa fa-link"></i></a>
		                    </div>
		                  </div>
		                </figcaption>
		              </figure>
			         </div>
			      </div>
				</section>

				<!-- Reviews -->

				<section id="depoimentos" class="reviews text-center section">
				   <div class="container">
				      <div class="row">
				        <header class="text-center col-md-6 col-md-offset-3">
				        	<h2>o que os clientes falam</h2>
				        	<div class="delimiter"><div></div></div>
				        	<p class="section-entry">com mais de 30 anos de atuação, seguimos entregando soluções inovadoras para o mercado promocional. Confira depoimentos reais de quem confia em nossa plataforma.</p>
				        </header>
				      </div>
				      <div class="section-body rel-1">
				      	<i class="icon-review fa fa-quote-left"></i>
					      <div class="review-carousel carousel">
			              <div class="review">
			                  <div class="col-review col-sm-8 col-sm-offset-2">
			                  	<p class="review-text">Trabalhamos muito com brindes no ano todo e a empresa nunca poupou esforços para nos atender com o brinde solicitado. O atendimento, disposição em nos atender, garantia de qualidade, pontualidade nas entregas e melhor custo/beneficio dos produtos faz da <strong>A. Jung nossa parceira</strong>.</p>
			                  </div>	
			                	<div class="reviewer">
				                	<h3 class="reviewer-name">Fernando</h3>
				                	<p class="reviewer-spec">Dir. BEECOOL BRINDES</p>
			                	</div>
			              </div>
			              <div class="review">
			                  <div class="col-review col-sm-8 col-sm-offset-2">
			                  	<p class="review-text">Trabalhar com a Ajung tem sido ótimo! Eles entregaram o que a gente queria pro site, com agilidade, criatividade e o cuidado que faz toda a diferença. Eles realmente levam a sério o que fazem — <strong>e isso aparece em cada detalhe. Super recomendo!</strong></p>
			                  </div>	
			                	<div class="reviewer">
				                	<h3 class="reviewer-name">Sheila Torres</h3>
				                	<p class="reviewer-spec">CEO da Line Brindes</p>
			                	</div>
			              </div>
			              <div class="review">
			                  <div class="col-review col-sm-8 col-sm-offset-2">
			                  	<p class="review-text">Trabalhar com <strong>o sistema da A Jung tem sido um divisor de águas para a Imprimil.
								</strong> A agilidade nas devolutivas de orçamento, aliada à precisão de custo e controle de estoque, trouxe um ganho significativo para toda a equipe comercial. Hoje conseguimos responder com muito mais rapidez e assertividade, o que se reflete diretamente no aumento das conversões e no crescimento das nossas vendas.</p>
			                  </div>	
			                	<div class="reviewer">
				                	<h3 class="reviewer-name">Alessandro Almeida</h3>
				                	<p class="reviewer-spec">CEO da Imprimil</p>
			                	</div>
			              </div>
			             </div>
			            <div class="carousel-direction">
				            <div class="custom-controls">
				            	<div class="custom-prev">
				            		<div class="prev"><i class="fa fa-angle-left"></i></div>
				            		<div class="dir-text hidden-xs">Previus</div>
				            	</div>
				            	<div class="custom-next">
				            		<div class="next"><i class="fa fa-angle-right"></i></div>
				            		<div class="dir-text hidden-xs">Next</div>
				            	</div>
				            	<div class="thumbnail-pagination">
				            		<a href=""><img alt="" src="img/reviews/beecoolbrindes.jpg"></a>
				            		<a href=""><img alt="" src="img/reviews/sheila-linebrindes.jpg"></a>
				            		<a href=""><img alt="" src="img/reviews/imprimil.jpg"></a>
				            	</div>
				            </div>
			            </div>
		            </div>
				   </div>
				</section>

				<!-- Banner -->

				<section class="section-banner">
				   <div class="container">
				      <div class="row-base row">
				        <header class="col-base col-md-9">
				        		<h2 class="banner-title">Gostaria de testar um site modelo ?</h2>
				        </header>
				        <div class="col-base col-md-3">
				        	<a href="#" class="btn btn-red wow swing">
								<span class="text">Solicitar agora</span>
								<span class="flip-front">Solicitar agora</span>
								<span class="flip-back">Solicitar agora</span>
							</a>
				        </div>
				      </div>
				   </div>
				</section>

				<!-- Features -->

				<section id="features" class="features masked section" data-stellar-background-ratio="0.4">
			      <div class="rel-1">
			        <div class="col-feature-img col-md-12 col-lg-6 wow fadeInLeft" data-wow-duration="2s">
			        		<img alt="" class="" src="img/feature-img.png">
			        </div>
			        <div class="col-feature col-sm-12 col-md-12 col-lg-4">
			        		<div class="feature">
			        			<div class="media-left">
			        				<div class="icon-round icon-feature"><i class="fa fa-laptop"></i></div>
			        			</div>
			        			<div class="media-body">
			        				<h3>ORÇAMENTO Ágil</h3>
			        				<p>Gerencie e responda orçamentos com rapidez pelo painel do seu site. Escolha o canal de envio – WhatsApp ou e-mail – e conquiste mais clientes com agilidade.</p>
			        			</div>
			        		</div>
			        		<div class="feature">
			        			<div class="media-left">
			        				<div class="icon-round icon-feature"><i class="fa fa-briefcase"></i></div>
			        			</div>
			        			<div class="media-body">
			        				<h3>Integração com os IMPORTADORES</h3>
			        				<p>Tenha produtos, preços e estoques atualizados diretamente dos principais importadores (XBZ Brindes, Spot Gifts, Asia Import e SóMarcas). A integração via API garante que seu site esteja sempre atualizado semanalmente.</p>
			        			</div>
			        		</div>
			        		<div class="feature">
			        			<div class="media-left">
			        				<div class="icon-round icon-feature"><i class="fa fa-gears"></i></div>
			        			</div>
			        			<div class="media-body">
			        				<h3>IA e INDEXAÇÃO personalizada (SEO)</h3>
			        				<p>Aumente sua visibilidade no Google com indexação personalizada de site, categorias e produtos. Use inteligência artificial para criar descrições otimizadas e textos que geram mais tráfego e resultados.</p>
			        			</div>
			        		</div>
			        		<div class="feature">
			        			<div class="media-left">
			        				<div class="icon-round icon-feature"><i class="fa fa-gears"></i></div>
			        			</div>
			        			<div class="media-body">
			        				<h3>INTEGRAÇÃO com WHATSAPP </h3>
			        				<p>Ofereça atendimento direto pelo WhatsApp integrado ao site. Responda orçamentos rapidamente e aumente suas conversões no canal preferido dos clientes.</p>
			        			</div>
			        		</div>
			        		<a href="#" class="btn btn-b-white">
			            	<span class="text">Agende uma demonstração</span>
			            	<span class="flip-front">Agende uma demonstração</span>
			            	<span class="flip-back">Agende uma demonstração</span>
			            </a>
			        </div>
			      </div>
				</section>

				<!-- Specialization -->

				<section id="specialization" class="specialization text-center section">
				   <div class="container">
				      <div class="row">
				        <header class="text-center col-md-6 col-md-offset-3">
				        	<h2>nossas especialidades</h2>
				        	<div class="delimiter"><div></div></div>
				        	<p class="section-entry">Contamos com especialistas em design, tecnologia e marketing digital, todos com um único foco: criar soluções completas para sua presença online.</p>
				        </header>
				      </div>
				      <div class="section-body">
				      	<div class="row-base row">
				      		<div class="col-spec col-base col-sm-6 col-md-3">
				      			<div class="chart" data-percent="25">
				      				<div class="chart-icon"><i class="fa fa-gears"></i></div>
				      			</div>
				      			<div class="spec-header">
				      				<h3 class="spec-title">Web Design</h3>
				      				<p class="spec-type">Photoshop<br/>Figma<br/>Adobe XD<br/>Illustrator</p>
				      			</div>
				      		</div>
				      		<div class="col-spec col-base col-sm-6 col-md-3">
				      			<div class="chart" data-percent="50">
				      				<div class="chart-icon"><i class="fa fa-html5"></i></div>
				      			</div>
				      			<div class="spec-header">
				      				<h3 class="spec-title">Programação</h3>
				      				<p class="spec-type">HTML5 <br/> CSS3</p>
				      			</div>
				      		</div>
				      		<div class="col-spec col-base col-sm-6 col-md-3">
				      			<div class="chart" data-percent="60">
				      				<div class="chart-icon"><i class="fa fa-coffee"></i></div>
				      			</div>
				      			<div class="spec-header">
				      				<h3 class="spec-title">Marketing</h3>
				      				<p class="spec-type">Google Ads<b/>SEO<br/>E-mail Marketing<br/>Redes Sociais</p>
				      			</div>
				      		</div>
				      		<div class="col-spec col-base col-sm-6 col-md-3">
				      			<div class="chart" data-percent="75">
				      				<div class="chart-icon"><i class="fa fa-code"></i></div>
				      			</div>
				      			<div class="spec-header">
				      				<h3 class="spec-title">Javascript</h3>
				      				<p class="spec-type">Javascript Ajax<br/>PHP 8.3<br/>Banco de Dados</p>
				      			</div>
				      		</div>
				      	</div>
				      </div>
				   </div>
				</section>

				<!-- Prices -->

				<section id="prices" class="prices bgc-light text-center section">
				   <div class="container">
				      <div class="row">
				        <header class="text-center col-md-6 col-md-offset-3">
					        	<h2>Tabela de preços</h2>
					        	<div class="delimiter"><div></div></div>
					        	<p class="section-entry">No sistema SAAS (Software As A Service), cuidamos de todo desenvolvimento, funcionamento e performance para que você possa se concentrar no comercial/marketing da  empresa. A mensalidade cobre todos os custos da integração de produtos, hospedagem dedicada, desenvolvimento de novas ferramentas e atendimento. Já o valor de setup, cobre os custos de configuração do servidor, da integração, do desenvolvimento do layout do site e dos treinamentos realizados.</p>
				        </header>
				      </div>
				      <div class="section-body">
				      	<div class="row-base row">
							<div class="col-md-1"></div>
				      		<div class="col-price col-base col-sm-6 col-md-3">
				      			<div class="price-table">
				      				<div class="price-header">
											<h3 class="price-title">AJWS 04</h3>
											<p class="price-type">praticidade e economia</p>
				      				</div>
				      				<div class="price">
				      					<div class="price-amount">R$399<sub>.00</sub></div>
				      					<div class="price-period">Mensal/<br/>SETUP Layout R$2.900,00</div>
				      				</div>
				      				<div class="price-body">
				      					<ul class="price-features">
				      						<li><strong>Hospedagem</strong> Oracle incluso</li>
				      						<li><strong>Sem limite </strong> de usuários</li>
				      						<li><strong>Integracão </strong> com Fornecedores</li>
				      						<li><strong>Sistema de </strong> Orçamento Ágil</li>
				      						<li><strong>Suporte WhatsApp,</strong> fone e e-mail</li>
				      					</ul>
				      					<div class="price-footer">
					      					<a href="#" class="btn btn-b-dark">
								            	<span class="text">Contratar</span>
								            	<span class="flip-front">Contratar</span>
								            	<span class="flip-back">Contratar</span>
								            </a>
							            </div>
				      				</div>
				      			</div>
				      		</div>
							
				      		<div class="leading col-price col-base col-sm-6 col-md-4 wow flipInY">
				      			<div class="price-table">
				      				<div class="price-header">
											<h3 class="price-title">AJWS 01, 02, 03 e 05</h3>
											<p class="price-type">Nosso plano mais vendido</p>
				      				</div>
				      				<div class="price">
				      					<div class="price-amount">R$499<sub>.00</sub></div>
				      					<div class="price-period">mensal/<br/>SETUP Layout R$3.900,00</div>
				      				</div>
				      				<div class="price-body">
				      					<ul class="price-features">
				      						<li><strong>Hospedagem</strong> Oracle incluso</li>
				      						<li><strong>Sem limite </strong> de usuários</li>
				      						<li><strong>Integracão </strong> com Fornecedores</li>
				      						<li><strong>Sistema de </strong> Orçamento Ágil</li>
				      						<li><strong>Suporte WhatsApp,</strong> fone e e-mail</li>
				      					</ul>
				      					<div class="price-footer">
					      					<a href="#" class="btn btn-yellow">
								            	<span class="text">Contratar</span>
								            	<span class="flip-front">Contratar</span>
								            	<span class="flip-back">Contratar</span>
								            </a>
							            </div>
				      				</div>
				      			</div>
				      		</div>
				      		<div class="col-price col-base col-sm-6 col-md-3">
				      			<div class="price-table">
				      				<div class="price-header">
											<h3 class="price-title">SOLUÇÕES PERSONALIZADAS</h3>
											<p class="price-type">Solução Exclusiva</p>
				      				</div>
				      				<div class="price">
				      					<div class="price-amount">$XXX<sub>.XX</sub></div>
				      					<div class="price-period">Projeto</div>
				      				</div>
				      				<div class="price-body">
				      					<ul class="price-features">
				      						<li><strong>Hospedagem</strong> Oracle incluso</li>
				      						<li><strong>Sem limite </strong> de usuários</li>
				      						<li><strong>Integracão </strong> com Fornecedores</li>
				      						<li><strong>Sistema de </strong> Orçamento Ágil</li>
				      						<li><strong>Suporte WhatsApp,</strong> fone e e-mail</li>
				      					</ul>
				      					<div class="price-footer">
					      					<a href="#" class="btn btn-b-dark">
								            	<span class="text">Contratar</span>
								            	<span class="flip-front">Contratar</span>
								            	<span class="flip-back">Contratar</span>
								            </a>
							            </div>
				      				</div>
				      			</div>
				      		</div>
							<div class="col-md-1"></div>
				      	</div>
				      </div>
				   </div>
				</section>

				<!-- Video -->

				<section id="video" class="masked text-center video-section" data-stellar-background-ratio="0.4">
				   <div class="container">
				      <div class="row">
				        <header class="text-center col-md-6 col-md-offset-3">
				        	<div class="wow fadeInDown">
				        		<a href="img/portfolio/AJWS.mp4" class="icon-video-play fa fa-play-circle-o js-play"></a>
				        	</div>
				        	<div class="wow fadeInUp">
					        	<h2>Assista esse video</h2>
					        	<p class="video-section-entry">Versão de demonstração do vídeo do AJWS em Português</p>
				        	</div>
				        </header>
				      </div>
				   </div>
				</section>

				<!-- Contact -->

				<section id="contact-section" class="contact-section masked section">
				   <div class="container rel-1">
				      <div class="row">
				        <header class="text-center col-md-6 col-md-offset-3">
				        	<h2>Entre em contato</h2>
				        	<div class="delimiter"><div></div></div>
				        	<p class="section-entry">Ficou com dúvidas? Precisa de mais informações? Ou gostaria de nos fazer uma visita e tomar um cafezinho?</p>
				        </header>
				      </div>
				      <div class="section-body">
				      	<form class="form-transparent js-ajax-form" id="contact_form" action="#" method="post" novalidate>
							<span style="display:none;"><input type="text" name="rb" value="" /></span>
				      		<div class="row-base row">
				      			<div class="col-base col-md-4">
				      				<div class="form-control-layout">
				      					<i class="fa fa-user"></i>
				      					<input type="text" class="form-control" id="contato_name" name="name" required placeholder="Nome *">
										<p class="help-block text-danger"></p>
				      				</div>
				      			</div>
				      			<div class="col-base col-md-4">
					      			<div class="form-control-layout">
					      				<i class="fa fa-envelope-o"></i>
					      				<input type="email" class="form-control"  id="contato_email"  name="email" required placeholder="E-Mail *">
										<p class="help-block text-danger"></p>
					      			</div>
				      			</div>
				      			<div class="col-base col-md-4">
				      				<div class="form-control-layout">
				      					<i class="fa fa-phone"></i>
				      					<input type="tel" class="form-control" id="contato_telefone" name="phone" required placeholder="Telefone *">
										<p class="help-block text-danger"></p>
				      				</div>
				      			</div>
				      		
				      			<div class="col-base col-md-12">
				      				<div class="form-control-layout">
					      				<i class="fa fa-pencil"></i>
					      				<textarea class="form-control" name="message" id="contato_message" placeholder="Sua Mensagem*"></textarea>
										<p class="help-block text-danger"></p>
					      			</div>
				      			</div>
				      			<div class="col-base col-sm-6 col-md-4 col-lg-2">
				      				<div class="captcha form-control" style="background-image:url(img/captcha.jpg);"></div>
				      			</div>
				      			<div class="col-base col-sm-6 col-md-4 col-lg-4">
					      			<div class="form-control-layout">
					      				<input type="text" class="form-control no-icon" name="code" placeholder="Enter the code">
					      			</div>
				      			</div>
				      			<div class="col-base col-sm-12 col-md-4 col-lg-6">
				      				<button type="submit" class="btn btn-lg btn-round btn-block btn-linear botao">
						            	<span class="text">Enviar mensagem</span>
						            	<span class="flip-front">Enviar mensagem</span>
						            	<span class="flip-back">Enviar mensagem</span>
						            </button>
				      			</div>
								<div id="contato_success" style="position:absolute;bottom:-100px;width:100%"></div>
				      		</div>
				      	</form>
				      </div>
				   </div>
				</section>

				<!-- Map -->

				<div class="map">
			    <!-- <div id="map-canvas"></div> -->
				 <iframe id="map-canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.552037008778!2d-46.706287423959!3d-23.65620857873479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5051900d7357%3A0xa4ab0214aef295fb!2sR.%20Pereira%20Barreto%2C%20174%20-%20Santo%20Amaro%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004744-010!5e0!3m2!1spt-BR!2sbr!4v1759792597621!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			  </div>

		   </main>
	   </div>

	   <!-- Footer -->

	   <footer class="footer">
	   	<section class="section bgc-dark">
	   		<div class="container rel-1">
	   			<a href="#top" class="scroll-top hvr-wobble-vertical js-target-scroll">
	   				<i class="fa fa-chevron-up"></i>
	   			</a>
	   			<div class="row-base row">
	   				<aside class="bottom-widget-posts col-footer col-base col-md-6 col-lg-8">
						<h2 class="bottom-widget-title">Parceiros</h2>
						<h3>Conheça Nossos Parceiros e Clientes</h3>
						<p>Há mais de 30 anos trabalhando juntos para<br/>melhorar o mercado promocional brasileiro</p>
						<ul class="bottom-gallery-list">
							<li>
								<div class="link-overlay">
									<a href="https://www.xbzbrindes.com.br/" target="_blank">
										<img alt="XBZ Brindes" src="img/clients/xbz.png">
									</a>
								</div>
							</li>
							<li>
								<div class="link-overlay">
									<a href="https://www.somarcas.com.br/" target="_blank">
										<img alt="Só Marcas" src="img/clients/somarcas.png">
									</a>
								</div>
							</li>
							<li>
								<div class="link-overlay">
									<a href="https://www.spotbrindes.com.br/" target="_blank">
										<img alt="SPOT Brindes" src="img/clients/spot.png">
									</a>
								</div>
							</li>
							<li>
								<div class="link-overlay">
									<a href="https://www.88brindes.com.br/" target="_blank">
										<img alt="88 Brindes" src="img/clients/88brindes.png">
									</a>
								</div>
							</li>
							<li>
								<div class="link-overlay">
									<a href="https://www.asiaimport.com.br/" target="_blank">
										<img alt="Asia Import" src="img/clients/asiaimport.png">
									</a>
								</div>
							</li>
							<li>
								<div class="link-overlay">
									<a href="https://www.revendedores.bestgift.com.br/" target="_blank">
										<img alt="Best Gift" src="img/clients/bestgift.png">
									</a>
								</div>
							</li>
						</ul>
	   				</aside>
	   				
	   				<aside class="bottom-widget-text col-footer col-base col-md-12 col-lg-4">
							<h2 class="bottom-widget-title">SOBRE NÓS</h2>
							<img alt="" class="img-responsive" src="img/min-ajws.png" style="width:20%;">
							<div class="text-content">
								<p>Há mais de 30 anos no mercado promocional, a A. Jung Soluções Corporativas evoluiu de anúncios impressos nos anuários FREESHOP e BÍNDICE para soluções digitais que atendem grandes importadores e empresas em todo o Brasil."</p>
							</div>
							<div class="social social-round">
					   		<a href="https://www.facebook.com/ajungscorp?ref=ts&fref=ts" class="fa fa-facebook"></a>
					   		<a href="https://www.instagram.com/ajung.agencia/" class="fa fa-instagram"></a>
					   		<!-- <a href="#" class="fa fa-linkedin"></a> -->
					   		<!-- <a href="#" class="fa fa-google-plus"></a>
					   		<a href="#" class="fa fa-pinterest-p"></a>
					   		<a href="#" class="fa fa-flickr"></a>
					   		<a href="#" class="fa fa-dribbble"></a> -->
				   	   </div>
	   				</aside>
	   			</div>
	   		</div>
	   	</section>
	   	<div class="footer-bottom">
	   		<div class="container">
		   		<div class="row-base row">
		   			<div class="copy col-base col-md-4">
		   				© 2025. Desenvolvido por: <a href="https://ajung.com.br">A.Jung</a>
		   			</div>
		   			<div class="col-base col-md-8">
		   				<nav class="navbar-bottom">
		   					<ul>    
		   						<li>
									<a href="#top" class="js-target-scroll">Home</a>
								</li>
								<li>
									<a href="#services" class="js-target-scroll">Destaques</a>
								</li>
								<li>
									<a href="#showcase" class="js-target-scroll">Portfólio</a>
								</li>  
								<li>
									<a href="#depoimentos" class="js-target-scroll">Depoimentos</a>
								</li>
								<li>
									<a href="#specialization" class="js-target-scroll">Sistema</a>
								</li>
								<li>
									<a href="#contact-section" class="js-target-scroll">Contact</a>
								</li>
		   					</ul>
		   				</nav>
		   			</div>
		   		</div>
	   		</div>
	   	</div>
	   </footer>

	<!-- Scripts -->

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/imagesloaded.pkgd.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.easypiechart.min.js"></script>
	<script src="js/interface.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp.js"></script> 
	<script src="js/gmap.js"></script> 
	<script src="js/jquery-3.7.1.min.js"></script>
	<script src="js/contact_me.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


	<script type="text/javascript">
         
        /** send form */
        function sendForm(){
            form = document.getElementById("contact_form");
            erro = "";
            if( document.getElementById("contato_name").value=="" ) erro += "Digite seu nome.<br>";
            if( !is_email(document.getElementById("contato_email").value) ) erro += "Digite um e-mail v&aacute;lido.<br>";
            if( document.getElementById("contato_message").value=="" ) erro += "Digite sua mensagem.<br>";

            if(erro==""){
                document.getElementById("contato_success").innerHTML = "<p class='alert alert-info'>Estamos processando seus dados. Aguarde! </p>";
                form.submit();
            }else{
                document.getElementById("contato_success").innerHTML = "<p class='alert alert-danger'>"+erro+"</p>";
            }
        }
        function is_email(email){
			er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2,3}/; 
			if( !er.exec(email) )
			{
				return false;
			}
			return true;
		}
	</script>

</body>
</html>