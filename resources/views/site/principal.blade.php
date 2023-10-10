<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MyGas - IPM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/MyGas_mocambique.jpg') }}">
    <!-- Css links start here -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/backtotop.css">
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/fontawe.css">
	
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- Css links end here -->

	<style>
	
		@import url(https://fonts.googleapis.com/css?family=Raleway);

		body {
		  color: #333;
		  background: #fcfcfc;
		  font-family: 'Raleway', sans-serif;
		  overflow-x: hidden;
		}

		.faq-header{
		  font-size: 32px;
		  border-bottom: 1px dotted #ccc;
		  padding: 24px;
		}

		.faq-content {
		  margin: 0 auto;
		}

		.faq-question {
		  padding: 20px 0;
		  border-bottom: 1px dotted #ccc;
		}

		.panel-title {
		  font-size: 16px;
		  width: 100%;
		  position: relative;
		  margin: 0;
		  padding: 10px 10px 0 48px;
		  display: block;
		  cursor: pointer;
		}

		.panel-content {
		  font-size: 20px;
		  padding: 0px 14px;
		  margin: 0 40px;
		  height: 0;
		  overflow: hidden;
		  z-index: -1;
		  position: relative;
		  opacity: 0;
		  -webkit-transition: .4s ease;
		  -moz-transition: .4s ease;
		  -o-transition: .4s ease;
		  transition: .4s ease;
		}

		.panel:checked ~ .panel-content{
		  height: auto;
		  opacity: 1;
		  padding: 14px;
		}

		.plus {
		  position: absolute;
		  margin-left: 20px;
		  margin-top: 4px;
		  z-index: 5;
		  font-size: 42px;
		  line-height: 100%;
		  -webkit-user-select: none;    
		  -moz-user-select: none;
		  -ms-user-select: none;
		  -o-user-select: none;
		  user-select: none;
		  -webkit-transition: .2s ease;
		  -moz-transition: .2s ease;
		  -o-transition: .2s ease;
		  transition: .2s ease;
		}

		.panel:checked ~ .plus {
		  -webkit-transform: rotate(45deg);
		  -moz-transform: rotate(45deg);
		  -o-transform: rotate(45deg);
		  transform: rotate(45deg);
		}

		.panel {
		  display: none;
		}
	
	</style>

</head>

<body id="default-home" onload="setLanguage()">


    <!-- Header start -->
    <header id="header-sticky" class="header-area style-01">
        <!-- Header notice start -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="header-top-notice d-flex justify-content-end">
                            <p><strong id="bemvindo">{{__('messages.bemvindo')}}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header top start -->
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                        <div class="logo-wrapper">
                            <a href="{{ route('site.index') }}" class="logo"><img src="{{ asset('assets/images/MyGas_mocambique.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                        <div class="header-middle-right d-flex justify-content-end">
                            <ul class="header-middle-left-call d-flex align-items-center">
                                <li><i class="flaticon-operator"></i></li>
                                <li>
                                    <div class="header-info">
                                        <h5 id="contacto">{{__('messages.contacto')}}</h5>
                                        <span>+258 879803003 / 845000431</span>
                                    </div>
                                </li>
                            </ul>
                            <ul class="header-middle-right-call d-flex align-items-center">
                                <li><i class="flaticon-mail"></i></li>
                                <li>
                                    <div class="header-info">
                                        <h5 id="envieemail">{{__('messages.envieemail')}}</h5>
                                        <span>shenaz@ipg.com.kw</span>
                                    </div>
                                </li>
                            </ul>
                            <ul class="header-middle-right-call d-flex align-items-center">
                                <li><i class="flaticon-clock"></i></li>
                                <li>
                                    <div class="header-info">
                                        <h5 id="horario">{{__('messages.horario')}}</h5>
                                        <span id="aberturafecho">{{__('messages.aberturafecho')}}</span>
                                    </div>
                                </li>
                            </ul>
                            <ul class="header-middle-right-call d-flex align-items-center">
                                    <div class="header-info">
                                        @if (Route::has('login'))
                                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                                @auth
                                                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                                @else
                                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                            
                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                                    @endif
                                                @endauth
                                            </div>
                                        @endif   
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header navigation start -->
        <div class="header-navigation">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="header-main-menu">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
                                    <div class="logo-wrapper">
                                        <a href="{{ route('site.index') }}" class="logo"><img src="assets/images/MyGas_mocambique.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-2 col-12">
                                    <div class="header-content" id="menuids">

                                        <a class="header-toggle-menu" href="#0" title="Menu"><i class="fa fa-bars"></i></a>

                                        <nav class="header-nav-wrap">
                                            <h2 class="header-nav-heading h6" id="navegacao">{{__('messages.navegacao')}}</h2>
                                            <ul class="header-nav">
                                                <li><a href="{{ route('site.index') }}" title="" id="abaprincipal">{{__('messages.abaprincipal')}}</a></li>
                                            <!--    <li class="has-children">
                                                    <a href="#0" title="">Paginas</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about.html">Sobre Nos</a></li>
                                                        <li><a href="team.html">Equipa</a></li>
                                                        <li><a href="faq.html">Faq</a></li>
                                                        <li><a href="404.html">Error 404</a></li>
                                                    </ul>
                                                </li> -->
												  <li class="produtos">
                                                   <a href="{{ route('site.produto') }}" title="" id="abaprodutos">{{__('messages.abaprodutos')}}</a>
                                              <!--      <ul class="sub-menu">
                                                        <li><a href="services.html">Service</a></li>
                                                        <li><a href="service-single.html">Service Single</a></li>
                                                    </ul>
                                                </li>  -->
                                                <!--  <li class="">
                                                    <a href="#0" title="">Pontos de Vendas</a>
                                                  <ul class="sub-menu">
                                                        <li><a href="projects.html">project</a></li>
                                                        <li><a href="project-single.html">project Single</a></li>
                                                    </ul>
                                                </li>  -->
                                                <li class="">
                                                    <a href="{{ route('site.revendedores') }}" title="" id="abarevendedor">{{__('messages.abarevendedor')}}</a>
                                            <!--       <ul class="sub-menu">
                                                        <li><a href="blog.html">Blog Post</a></li>
                                                        <li><a href="">Blog Single</a></li>
                                                    </ul>
                                                </li> -->
                                                <li><a href="{{ route('site.sobre-nos') }}" title="" id="sobrenos">{{__('messages.sobrenos')}}</a></li>
                                                    <li>
                                                        <!-- Mudar lingua -->
                                                        <select class="form-control changeLang">
                                                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>Português</option>
                                                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>English</option>
                                                        </select>                                               
                                                    </li>
                                            </ul>
                                            <a href="#0" title="Close Menu" class="header-overlay-close close-mobile-menu" id="abafechar">{{__('messages.abafechar')}}</a>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-7 col-12">
                                    <div class="header-info-icons d-none d-md-block">
                                        <ul class="d-flex justify-content-end">
                                            <li>
                                                <div id="myOverlay" class="overlay">
                                                    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <form action="#">
                                                            <input type="text" placeholder="Search.." name="search">
                                                            <button type="submit"><i class="fa fa-search"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                               
                                            </li>
                                            <li>
                                                <a href="{{ route('site.contato') }}" class="btn btn-primary xs-mt-35" >
                                                    <i class="flaticon-right icon-arrow before"></i>
                                                    <span class="" id="contactenos" >{{__('messages.contactenos')}}</span>
                                                    <i class="flaticon-right icon-arrow after"></i>
                                                </a>
                                                 
                                            </li>
                                             
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header end -->

    <main>

        <!-- Hero start -->
         <section id="hero-section-one" class="hero-slider hero-slider-one style-01"> 
            <div class="hero-bg-01" data-jarallax='{"speed": 0.6}' style="background-image:url(assets/images/banner/hero-04.jpg);">
		
                <div class="overlay">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                             
                            <div class="col-lg-12">
                                <div class="hero-content-one" id="treesolucao">
                                    <span class="subtitle" style="color: white" id="gasdomesticocomercial2">{{__('messages.gasdomesticocomercial2')}}</span>
                                    <h1  style="color: white" id="suasolucaocompleta">{{__('messages.suasolucaocompleta')}}</h1>
                                    <div class="hero-btn mt-50 xs-mt-30">
                                        <a href="{{ route('site.sobre-nos') }}" class="btn btn-secondary xs-mt-10">
                                            <i class="flaticon-right icon-arrow before"></i>
                                            <span class="" id="sabermais">{{__('messages.sabermais')}}</span>
                                            <i class="flaticon-right icon-arrow after"></i>
                                        </a>
                                        <a href="{{ route('site.produto') }}" class="btn btn-primary xs-mt-10" >
                                            <i class="flaticon-right icon-arrow before"></i>
                                            <span class="label" id="abaprodutos">{{__('messages.abaprodutos')}}</span>
                                            <i class="flaticon-right icon-arrow after"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--   <div class="hero-bg-01" data-jarallax='{"speed": 0.6}' style="background-image:url(assets/images/hero/hero-02.jpg);">  -->
			<div class="hero-bg-01" data-jarallax='{"speed": 0.6}' style="background-image:url(assets/images/hero/hero-02.jpg);"> 
                <div class="overlay">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="hero-content-one" id="treesolucao2">
                                    <span class="subtitle" style="color: white" id="solucoesinovadoras">{{__('messages.solucoesinovadoras')}}</span>
                                    <h1 class=""  style="color: white" id="tecnologiadeponta">{{__('messages.tecnologiadeponta')}}</h1>
                                    <div class="hero-btn mt-50 xs-mt-30">
                                        <a href="{{ route('site.sobre-nos') }}" class="btn btn-secondary xs-mt-10">
                                            <i class="flaticon-right icon-arrow before"></i>
                                            <span class="label" id="sabermais">{{_('messages.sabermais')}}</span>
                                            <i class="flaticon-right icon-arrow after"></i>
                                        </a>
                                        <a href="{{ route('site.produto') }}" class="btn btn-primary xs-mt-10">
                                            <i class="flaticon-right icon-arrow before"></i>
                                            <span class="label" id="abaprodutos">{{__('messages.abaprodutos')}}</span>
                                            <i class="flaticon-right icon-arrow after"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-bg-01" data-jarallax='{"speed": 0.6}' style="background-image:url(assets/images/banner/hero-04.jpg);">
                <div class="overlay">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="hero-content-one">
									 <span class="subtitle" style="color: white">Da nossa família para a sua </span>
                                    <h1 class=""  style="color: white">Soluções de gás confiáveis e  <span>Acessíveis</span></h1>
                                    <div class="hero-btn mt-50 xs-mt-30">
                                         <a href="{{ route('site.sobre-nos') }}" class="btn btn-secondary xs-mt-10">
                                            <i class="flaticon-right icon-arrow before"></i>
                                            <span class="label">{{__('messages.sabermais')}}</span>
                                            <i class="flaticon-right icon-arrow after"></i>
                                        </a>
                                       <a href="{{ route('site.produto') }}" class="btn btn-primary xs-mt-10">
                                            <i class="flaticon-right icon-arrow before"></i>
                                            <span class="label">{{__('messages.abaprodutos')}}</span>
                                            <i class="flaticon-right icon-arrow after"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  -->
        </section>
        <!-- Hero end -->

        <!-- Benifits start -->
        <section id="benifits">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <div class="benifits-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex benifits-content-detl">
                                        <div class="heading">
                                            <h3 id="porquenos">{{__('messages.porquenos')}}</h3>
                                        </div>
                                        <div class="content">
											 <h4 id="fornecimentogas">{{__('messages.fornecimentogas')}}</h4>
											 <h4 id="eficiente"><span>{{__('messages.eficiente')}}</span></h4>
                                        </div>
                                        <div class="content">
                                             <h4 id="atendimentocomfoco">{{__('messages.atendimentocomfoco')}}</h4>
											 <h4 id="nocliente"><span>{{__('messages.nocliente')}}</span></h4>
                                        </div>
                                        <div class="content">
                                              <h4 id="solucaogas">{{__('messages.solucaogas')}}</h4>
											 <h4 id="sustentaveis"><span>{{__('messages.sustentaveis')}}</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Benifits end -->

        <!-- About start -->
        <section id="about-section" class="mt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 col-12">
                        <div class="section-title style-01">
                            <div class="title-transparent">
                                <span>Sobre nós</span>
                            </div>
                            <h3 class="subtitle" id="nossobre">{{__('messages.nossobre')}}</h3>
                            <h2 class="title" id="mygassobre">{{__('messages.mygassobre')}}</h2>
                            <p class="text mt-30" align="justify" id="mygassobre2">{{__('messages.mygassobre2')}}</p>
                        </div>
                        <div class="row xs-mt-20">
                            <div class="col-lg-4 col-md-4">
                                <div class="about-info mt-50 xs-mt-20">
                                    <div class="icon">
                                        <i class="flaticon-engine"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title" id="garantiaqualidade">{{__('messages.garantiaqualidade')}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="about-info mt-50 xs-mt-20">
                                    <div class="icon">
                                        <i class="flaticon-gas"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title" id="seguranca">{{__('messages.seguranca')}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="about-info active mt-50 xs-mt-20">
                                    <div class="icon">
                                        <i class="flaticon-carpenter"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title" id="diversidade">{{__('messages.diversidade')}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-6" id="sabermaisx">
                                <a href="{{ route('site.sobre-nos') }}" class="btn btn-secondary mt-60 xs-mt-20">
                                    <i class="flaticon-right icon-arrow before"></i>
                                    <span class="label" id="sabermais">{{__('messages.sabermais')}}</span>
                                    <i class="flaticon-right icon-arrow after"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-shape-img">
                        <img src="assets/images/bg-shape.png" alt="">
                    </div>
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="about-img-box pl-30 xs-mt-70 md-mt-70">
                            <div class="about-img style-01">
                                <img src="{{ asset('assets/images/Mygas_botijas_gas.png') }}" alt="about image">
                            </div>
                            <div class="content">
                                <h4 id="anos"><span>4+ </span> {{__('messages.anos')}}</h4>
                                <p id="emoz">{{__('messages.emoz')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About end -->
		
		
		  <!-- project start -->
        <section id="project-section" class="mt-120 fix">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="project-title section-title style-02 pb-70">
                                <div class="title-transparent">
                                    <span id = "produtosmygas">{{__('messages.produtosmygas')}}</span>
                                </div>
                                <h3 class="subtitle" id="produtosabaprodutos">{{__('messages.produtosabaprodutos')}}</h3>
                                <h2 class="title" id="maissobre"><span>{{__('messages.maissobre')}}</span></h2>
                            </div>
                        </div>
                        <div class="bg-shape-img">
                            <img src="assets/images/bg-shape.png" alt="">
                        </div>
                        <div class="col-xl-12">
                            <div class="project__slider swiper-container">
                                <div class="project-wrapper swiper-wrapper">
                                    <div class="project-item swiper-slide">
                                        <div class=""></div>
                                        <div class="content-btn">
                                            <div class="content-btn-text">
                                                <h4 class="title"><a href="{{ route('site.botija_5kg_camping')}}" id="5kg">5KG (CAMPING)</a></h4>
                                                <span id="botija">{{__('messages.idBotija')}}</span>
                                            </div>
                                            <a href="{{ route('site.botija_5kg_camping') }}"><i class="flaticon-plus"></i></a>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/botija_camping.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="{{ route('site.botija_5kg_camping') }}" id="5kg">{{__('messages.5kg')}}</a></h4>
                                            <span id="botija">{{__('messages.idBotija')}}</span>
                                        </div>
										
										
                                    </div>
									 <div class="project-item swiper-slide">
                                        <div class=""></div>
                                        <div class="content-btn">
                                            <div class="content-btn-text">
                                                <h4 class="title"><a href="{{ route('site.botija_5kg_compact') }}"  id="5kgc">{{__('messages.5kgc')}}</a></h4>
                                                <span id="botija">{{__('messages.idBotija')}}</span>
                                            </div>
                                            <a href="{{ route('site.botija_5kg_compact') }}"><i class="flaticon-plus"></i></a>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/botija_5kg.png" alt="">
                                        </div>
                                          <div class="content">
                                            <h4 class="title"><a href="{{ route('site.botija_5kg_compact') }}" id="5kgc">{{__('messages.5kgc')}}</a></h4>
                                            <span id="botija">{{__('messages.idBotija')}}</span>
                                        </div>
							  	
										
								</div>
                                    <div class="project-item swiper-slide">
                                        <div class=""></div>
                                        <div class="content-btn">
                                            <div class="content-btn-text">
                                                <h4 class="title"><a href="{{ route('site.botija_11kg_pol') }}" id="11kg">{{__('messages.11kg')}}</a></h4>
                                                <span id="botija5">{{__('messages.idBotija')}}</span>
                                            </div>
                                            <a href="{{ route('site.botija_11kg_pol') }}"><i class="flaticon-plus"></i></a>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/botija_pol_11kg.png" alt="">
                                        </div>
                                          <div class="content">
                                            <h4 class="title"><a href="{{ route('site.botija_11kg_pol') }}" id="11kg">{{__('messages.11kg')}}</a></h4>
                                            <span id="botija5">{{__('messages.idBotija')}}</span>
                                        </div>
							  	
							  
							   </div>
							<!--		 <div class="project-item swiper-slide">
                                        <div class=""></div>
                                        <div class="content-btn">
                                            <div class="content-btn-text">
                                                <h4 class="title"><a href="project-single.html">11KG (COMPACT)</a></h4>
                                                <span>Botija de Gás</span>
                                            </div>
                                            <a href="project-single.html"><i class="flaticon-plus"></i></a>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/botija_compact_11kg.png" alt="">
                                        </div>
                                          <div class="content">
                                            <h4 class="title"><a href="project-single.html">11KG (COMPACT)</a></h4>
                                            <span>Botija de Gás</span>
                                        </div>
							  	                               

							   </div>  -->
									 <div class="project-item swiper-slide">
                                        <div class=""></div>
                                        <div class="content-btn">
                                            <div class="content-btn-text">
                                                <h4 class="title"><a href="{{ route('site.botija_11kg_plastica')}}" id="11kgp">{{__('messages.11kgp')}}</a></h4>
                                                <span id="botija5">{{__('messages.idBotija')}}</span>
                                            </div>
                                            <a href="{{ route('site.botija_11kg_plastica')}}"><i class="flaticon-plus"></i></a>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/botija_plastica.png" alt="">
                                        </div>
                                          <div class="content">
                                            <h4 class="title"><a href="{{ route('site.botija_11kg_plastica')}}" id="11kgp">{{__('messages.11kgp')}}</a></h4>
                                            <span id="botija5">{{__('messages.idBotija')}}</span>
                                        </div>
							  	                              

							  </div>
                                    <div class="project-item swiper-slide">
                                        <div class=""></div>
                                        <div class="content-btn">
                                            <div class="content-btn-text">
                                                <h4 class="title"><a href="{{ route('site.botija_45kg') }}" id="45kg"></a>45KG (POL)</h4>
                                                <span id="botija5">{{__('messages.idBotija')}}</span>
                                            </div>
                                            <a href="{{ route('site.botija_45kg') }}"><i class="flaticon-plus"></i></a>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/botija_45kig.png" alt="">
                                        </div>
                                          <div class="content">
                                            <h4 class="title"><a href="{{ route('site.botija_45kg') }}" id="45kg"></a>45KG (POL)</h4>
                                            <span id="botija5">{{__('messages.idBotija')}}</span>
                                        </div>
							  	                              

							  </div>
							<!--		 <div class="project-item swiper-slide">
                                        <div class="overlay"></div>
                                        <div class="content-btn">
                                            <div class="content-btn-text">
                                                <h4 class="title"><a href="project-single.html">45KG (COMPACT)</a></h4>
                                                <span>Botija de Gás</span>
                                            </div>
                                            <a href="project-single.html"><i class="flaticon-plus"></i></a>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/projects/05.jpg" alt="">
                                        </div>
                                          <div class="content">
                                            <h4 class="title"><a href="project-single.html">45KG (COMPACT)</a></h4>
                                            <span>Botija de Gás</span>
                                        </div>
                                    </div>
                             							  -->	      
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project end -->


        <!-- Service start 
        <section id="service-section" class=" mt-120">
            <div class="overlay">
                <div class="container">
                    <div class="row align-items-center mb-30">
                        <div class="col-lg-6 col-md-12">
                            <div class="service-title section-title style-02">
                                <div class="title-transparent">
                                    <span>Services</span>
                                </div>
                                <h3 class="subtitle">Services</h3>
                                <h2 class="title"><span>Best services</span> we are providing for our clients </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="service-block style-01 mt-30">
                                <div class="shape-1"></div>
                                <div class="icon">
                                    <i class="flaticon-leak"></i>
                                </div>
                                <div class="service-content">
                                    <h4 class="title"><a href="service-single.html">Gas Filtering</a></h4>
                                    <p class="text">Agrecultural Loan provide low interest many variations of passages have some.</p>
                                </div>
                                <div class="service-btn mt-30">
                                    <a href="service-single.html">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="service-block style-01 active mt-30">
                                <div class="shape-1"></div>
                                <div class="icon">
                                    <i class="flaticon-gas"></i>
                                </div>
                                <div class="service-content">
                                    <h4 class="title"><a href="service-single.html">Oil Resourcing</a></h4>
                                    <p class="text">Agrecultural Loan provide low interest many variations of passages have some.</p>
                                </div>
                                <div class="service-btn mt-30">
                                    <a href="service-single.html">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="service-block style-01 mt-30">
                                <div class="shape-1"></div>
                                <div class="icon">
                                    <i class="flaticon-helmet"></i>
                                </div>
                                <div class="service-content">
                                    <h4 class="title"><a href="service-single.html">Project Management</a></h4>
                                    <p class="text">Agrecultural Loan provide low interest many variations of passages have some.</p>
                                </div>
                                <div class="service-btn mt-30">
                                    <a href="service-single.html">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

         Client start 
        <section id="client-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="client-active mt-30">
                            <div class="client">
                                <img src="assets/images/clients/01.png" alt="">
                            </div>
                            <div class="client">
                                <img src="assets/images/clients/02.png" alt="">
                            </div>
                            <div class="client">
                                <img src="assets/images/clients/03.png" alt="">
                            </div>
                            <div class="client">
                                <img src="assets/images/clients/04.png" alt="">
                            </div>
                            <div class="client">
                                <img src="assets/images/clients/05.png" alt="">
                            </div>
                            <div class="client">
                                <img src="assets/images/clients/06.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->

   

        <!-- Get in touch start -->
        <section id="get-in-touch-section" data-jarallax='{"speed": 0.6}' class="pt-120">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="works-title section-title style-01">
                                
                                <h3 class="subtitle" id="rvendtornar">{{__('messages.rvendtornar')}}</h3>
                                <h2 class="title" id="comecenegocio"><span>{{__('messages.comecenegocio')}}</span></h2>
                                <p class="text mt-30" id="seetas">{{__('messages.seetas')}}</p>
                            </div>

                            <div class="quote-info mt-30">
                                <div class="d-flex align-items-center">
                                    <div class="icon">
                                        <i class="flaticon-avatar"></i>
                                    </div>
                                    <div class="content">
                                        <h4 id="vamos">{{__('messages.vamos')}}</h4>
                                        <span>+258 87 980 3003 / +258 84 500 0431</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="request-form xs-mt-30 md-mt-35">
                                <div id="form-messages"></div>
                             @component('site.layouts._components.form_contato')
                             @endcomponent
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Get in touch end -->
		
		
		    <!-- Call to start -->
        <section id="call-to-section" data-jarallax='{"speed": 0.6}' class="mt-120">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="call-to-content text-center">
                                <span class="subtitle" id="entrecontacto">{{__('messages.entrecontacto')}}</span>
                                <h2 class="title mt-20 mb-20" id="gostariamos">{{__('messages.gostariamos')}}</h2>
                                <h5>+258 879803003 / 845000431</h5>
                                <div class="call-to-btn mt-30">
                                    <a href="{{ route('site.contato') }}" class="btn btn-secondary">
                                        <i class="flaticon-right icon-arrow before"></i>
                                        <span class="label" id="contactenos">{{__('messages.contactenos')}}</span>
                                        <i class="flaticon-right icon-arrow after"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to end -->
		
		

      
        <!-- Blog start -->
        <section id="blog-section" class="mt-120">
            <div class="container">
                <div class="row align-items-center mb-30">
                    <div class="col-lg-12">
                        <div class="works-title section-title style-01">
                           
                            <h3 class="subtitle" id = "noticiasblogs">{{__('messages.noticiasblogs')}}</h3>
                            <h2 class="title" id = "noticiasnossas"><span>{{__('messages.noticiasnossas')}} </span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="blog-block mt-30">
                            <div class="blog-thumb">
                                <a href="{{ route( 'site.noticias_1' )}}"><img src="assets/images/planta2.jpg"  width="500" height="300"  alt=""></a>
                            </div>
                            <div class="blog-block-content mt-30">
                                <ul class="meta-info d-flex">
                                    <li><a href="{{ route( 'site.noticias_1' )}}" id="gascomercial"><i class="fa fa-tags"></i>Gás Doméstico & Comercial</a></li>
                                    <li><a href="{{ route( 'site.noticias_1' )}}" id="cooments"><i class="fa fa-comment"></i> {{__('messages.cooments')}}</a></li>
                                </ul>
                                <h4 class="title mt-20 mb-20">
                                    <a href="{{ route( 'site.noticias_1' )}}" id="osbeneficios">{{__('messages.osbeneficios')}}</a>
                                </h4>
                                <ul class="blog-btn mt-20" id="sabermaisx">
                                    <li class="date"><i class="far fa-calendar-alt"></i> Março 5, 2023</li>
                                    <li class="button">
                                        <a href="{{ route( 'site.noticias_1' )}}" id="sabermais">{{__('messages.sabermais')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="blog-block mt-30">
                            <div class="blog-thumb">
                                <a href="{{ route( 'site.noticias_2' )}}"><img src="assets/images/planta1.jpg" width="500" height="300" alt=""></a>
                            </div>
                            <div class="blog-block-content mt-30">
                                <ul class="meta-info d-flex">
                                    <li><a href="{{ route( 'site.noticias_2' )}}" id="gascomercial"><i class="fa fa-tags"></i> {{__('messages.gascomercial')}}</a></li>
                                    <li><a href="{{ route( 'site.noticias_2' )}}" id="cooments"><i class="fa fa-comment"></i> {{__('messages.Comments')}}</a></li>
                                </ul>
                                <h4 class="title mt-20 mb-20">
                                    <a href="{{ route( 'site.noticias_2' )}}" id="osbeneficios2">{{__('messages.osbeneficios2')}}</a>
                                </h4>
                                <ul class="blog-btn mt-20" id="sabermaisx">
                                    <li class="date"><i class="far fa-calendar-alt"></i> Março 5, 2023</li>
                                    <li class="button">
                                        <a href="{{ route( 'site.noticias_2' )}}" id="sabermais">{{__('messages.sabermais')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="blog-block mt-30">
                            <div class="blog-thumb">
                                <a href="{{ route( 'site.noticias_3' )}}"><img src="assets/images/planta3.jpg"  width="500" height="300" alt=""></a>
                            </div>
                            <div class="blog-block-content mt-30">
                                <ul class="meta-info d-flex">
                                    <li><a href="{{ route( 'site.noticias_3' )}}" id="gascomercial"><i class="fa fa-tags"></i> {{__('messages.gascomercial')}}</a></li>
                                    <li><a href="{{ route( 'site.noticias_3' )}}" id="cooments"><i class="fa fa-comment"></i> {{__('messages.cooments')}}</a></li>
                                </ul>
                                <h4 class="title mt-20 mb-20">
                                    <a href="{{ route( 'site.noticias_3' )}}" id="osbeneficios3">5 maneiras de economizar dinheiro em botijões de gás para sua casa ou empresa</a>
                                </h4>
                                <ul class="blog-btn mt-20" id="sabermaisx">
                                    <li class="date"><i class="far fa-calendar-alt"></i> Março 5, 2023</li>
                                    <li class="button">
                                        <a href="{{ route( 'site.noticias_3' )}}" id="sabermais">{{__('messages.sabermais')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog end -->

		
		
		
    </main>

    <!-- Newsletter start -->
    <section id="newsletter-section">
        <div class="container mt-120">
            <div class="newsletter">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-12">
                        <div class="newsletter-content d-flex">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="content">
                                <h3 id="junteteafamilia">Junta-se a familia MyGas</h3>
                                <p class="text" id="inscrevate">{{__('messages.inscrevate')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="newsletter-form mt-50">
                            <form action="#">
                                <input type="email" placeholder="Seu Email">
                                <button><i class="flaticon-mail"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<br>
    </section>

    <!-- Newsletter end -->
	
	
	<!-- Works start -->
	<br>
	<br>
        <section id="works-section" class="xs-mt-100 md-mt-100">
		<br>
		<br>
         
		   <!-- Q&A -->
        <section class="blog-section">
        <div class="container">
			
			<div class="faq-header" id="faqperguntas"><strong>{{__('messages.faqperguntas')}}</strong></div>

			<div class="faq-content">
			  <div class="faq-question">
				<input id="q1" type="checkbox" class="panel">
				<div class="plus">+</div>
				<label for="q1" class="panel-title" id="pg1">{{__('messages.pg1')}}</label>
				<div class="panel-content" id="rsp1">{{__('messages.rsp1')}}</div>
			  </div>
			  
			  <div class="faq-question">
				<input id="q2" type="checkbox" class="panel">
				<div class="plus">+</div>
				<label for="q2" class="panel-title" id="pg2">{{__('messages.pg2')}}</label>
				<div class="panel-content"  id="rsp2">{{__('messages.rsp2')}}</div>
			  </div>
			  
			  <div class="faq-question">
				<input id="q3" type="checkbox" class="panel">
				<div class="plus">+</div>
				<label for="q3" class="panel-title" id="pg3">{{__('messages.pg3')}}</label>
				<div class="panel-content"  id="rsp3">{{__('messages.rsp3')}}</div>
			  </div>
			  
			  <div class="faq-question">
				<input id="q4" type="checkbox" class="panel">
				<div class="plus">+</div>
				<label for="q4" class="panel-title" id="pg4">{{__('messages.pg4')}}</label>
				<div class="panel-content"  id="rsp4">{{__('messages.rsp4')}}</div>
			  </div>
			  
			  <div class="faq-question">
				<input id="q5" type="checkbox" class="panel">
				<div class="plus">+</div>
				<label for="q5" class="panel-title" id="pg5">{{__('messages.pg5')}}</label>
				<div class="panel-content"  id="rsp5">{{__('messages.rsp5')}}</div>
			  </div>
			  
			  <div class="faq-question">
				<input id="q6" type="checkbox" class="panel">
				<div class="plus">+</div>
				<label for="q6" class="panel-title" id="pg6">{{__('messages.pg6')}}</label>
				<div class="panel-content"  id="rsp6">{{__('messages.rsp6')}}</div>
			  </div>
			  
			  <div class="faq-question">
				<input id="q7" type="checkbox" class="panel">
				<div class="plus">+</div>
				<label for="q7" class="panel-title" id="pg7">{{__('messages.pg7')}}</label>
				<div class="panel-content"  id="rsp7">{{__('messages.rsp7')}}</div>
			  </div>
			  
			  <div class="faq-question">
				<input id="q8" type="checkbox" class="panel">
				<div class="plus">+</div>
				<label for="q8" class="panel-title" id="pg8">{{__('messages.pg8')}}</label>
				<div class="panel-content"  id="rsp8">{{__('messages.rsp8')}}
			  </div>
			  
			  <div class="faq-question">
				<input id="q9" type="checkbox" class="panel">
				<div class="plus">+</div>
				<label for="q9" class="panel-title" id="pg9">{{__('messages.pg9')}}</label>
				<div class="panel-content"  id="rsp9">{{__('messages.rsp9')}}</div>
			  </div>
			  
			  <div class="faq-question">
				<input id="q10" type="checkbox" class="panel">
				<div class="plus">+</div>
				<label for="q10" class="panel-title" id="pg10">{{__('messages.pg10')}}</label>
				<div class="panel-content"  id="rsp10">{{__('messages.rsp10')}}</div>
			  </div>
		
			 
			</div>       
	  </div>
	  
    </div>
        </section>
	
        <!-- Works end -->

    <!-- Footer start -->
    <footer id="footer-section" class="footer-area">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="footer-widget widget mt-50 footer-about">
                            <h3 class="title" id="sobreaempresa">{{__('messages.sobreaempresa')}}</h3>
                            <div class="logo mt-30 mb-30">
                                <a href="{{ route('site.index') }}"> <img src="{{ asset('assets/images/MyGas_mocambique.jpg') }}" alt="footer logo"></a>
                            </div>
                            <p class="text" id="solucaonecessidade">{{__('messages.solucaonecessidade')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="footer-widget widget mt-50">
                            <h3 class="title" id="linksrapidos">{{__('messages.linksrapidos')}}</h3>
                            <ul class="mt-20">
                                <li><a href="{{ route('site.sobre-nos')}}"><i class="fa fa-angle-right" id="sobrenoss"></i>{{__('messages.sobrenos')}}</a></li>
                                <li><a href="{{ route('site.produto')}}"><i class="fa fa-angle-right" id="produtosabaprodutos"></i>{{__('messages.produtosabaprodutos')}}</a></li>
                                <li><a href="{{ route('site.revendedores')}}"><i class="fa fa-angle-right" id="renvendedores"></i>{{__('messages.renvendedores')}}</a></li>
                                <li><a href="{{ route('site.contato')}}"><i class="fa fa-angle-right" id="contactoss"></i>{{__('messages.contactoss')}}</a></li>
                            </ul>
                        </div>
                    </div>
               <!--    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="footer-widget widget mt-50">
                            <h3 class="title">Other Resources</h3>
                            <ul class="mt-20">
                                <li><a href="#!"><i class="fa-solid fa-angle-right"></i> Support</a></li>
                                <li><a href="#!"><i class="fa-solid fa-angle-right"></i> Privacy Policy</a></li>
                                <li><a href="#!"><i class="fa-solid fa-angle-right"></i> Terms & Condition</a></li>
                                <li><a href="#!"><i class="fa-solid fa-angle-right"></i> Services</a></li>
                                <li><a href="#!"><i class="fa-solid fa-angle-right"></i> Faqs</a></li>
                            </ul>
                        </div>
                    </div>  -->
                    <div class="col-lg-3 col-sm-6 col-md-6">
                         <div class="footer-widget widget mt-50" id="recentPostss">
                            <h3 class="title" id="recentPosts">{{__('messages.recentPosts')}}</h3>
                            <ul class="d-flex mt-20">
                                <li><img src="assets/images/planta1.jpg" alt=""></li>
                                <li>
                                    <a href="{{ route( 'site.noticias_1' )}}">
                                        <h5 id="osbeneficioss"></h5>
                                    </a>
                                    <span>Março 5, 2023</span>
                                </li>
                            </ul>
                            <ul class="d-flex mt-20">
                                <li><img src="assets/images/planta2.jpg" alt=""></li>
                                <li>
                                    <a href="{{ route( 'site.noticias_3' )}}">
                                        <h5 id="5maneiras"></h5>
                                    </a>
                                    <span>Março 5, 2023</span>
                                </li>
                            </ul>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <div class="row">
                                <div class="col-lg-6 col-sm-7">
                                    <div>
                                        <p class="text" id="trademark">{{__('messages.trademark')}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-5">
                                    <ul class="footer-social d-flex justify-content-lg-end justify-content-sm-end">
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fab fa-vimeo-square"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
        <i class="fas fa-angle-double-up"></i>
    </div>
	
	
    <!-- back to top end -->

    <!-- Preloader start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="center">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <hr/>
        </div>
    </div>
    <!-- Preloader end -->

    <!-- JS -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
   
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/quote-form.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/backtotop.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/language.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
         
       var url = "{{ route('changeLang') }}";
  
        $(".changeLang").change(function(){
            window.location.href = url + "?lang="+ $(this).val();
        });   




        function openSearch() {
            document.getElementById("myOverlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("myOverlay").style.display = "none";
        }
		
	</script>	

<script>

        setLanguage();

  // Function to set the language of the webpage
      function setLanguage() {
          
        var langCode = ""; // Initialize variable for storing language code

        // Check if language code is stored in local storage
        if (localStorage.getItem("lang")) {
          langCode = localStorage.getItem("lang");
        }

        // If language code is not stored in local storage, check if it's stored in a cookie
        if (!langCode && document.cookie) {
          var cookies = document.cookie.split("; ");
          for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].split("=");
            if (cookie[0] === "lang") {
              langCode = cookie[1];
              break;
            }
          }
        }

        // If language code is not stored in local storage or a cookie, set default to English
        if (!langCode) {
          langCode = "en";
          localStorage.setItem("lang", langCode);
          document.cookie = "lang=" + langCode + "; path=/";
        }

        // Create a select element with options for each language
        var select = document.createElement("select");
        var enOption = document.createElement("option");
        enOption.value = "en";
        enOption.text = "English";
        select.add(enOption);
        var ptOption = document.createElement("option");
        ptOption.value = "pt";
        ptOption.text = "Portuguese";
        select.add(ptOption);

        // Set the selected language in the select element
        select.value = langCode;

        // Add an event listener to the select element to update the language
        select.addEventListener("change", function() {
          var newLangCode = select.value;
          localStorage.setItem("lang", newLangCode);
          document.cookie = "lang=" + newLangCode + "; path=/";
          location.reload(); // Reload the page after changing the language
        });

        // Replace the language button with the select element
        var button = document.getElementById("langButton");
        button.parentNode.replaceChild(select, button);
        

        // Update the content of the webpage with the selected language
        $("#gasdomesticocomercial2").text(translations[langCode]["gasdomesticocomercial2"]);
        $("#treesolucao #suasolucaocompleta").text(translations[langCode]["suasolucaocompleta"]);
        
        $("#treesolucao2 #solucoesinovadoras").text(translations[langCode]["solucoesinovadoras"]);
        $("#treesolucao2 #tecnologiadeponta").text(translations[langCode]["tecnologiadeponta"]);
        
        $("#treesolucao #sabermais").text(translations[langCode]["sabermais"]);
        $("#treesolucao2 #sabermais").text(translations[langCode]["sabermais"]);
        $("#treesolucao #abaprodutos").text(translations[langCode]["abaprodutos"]);
        $("#treesolucao2 #abaprodutos").text(translations[langCode]["abaprodutos"]);
        
        $("#langButton").text(translations[langCode]["langButton"]);
        $("#langButton").text(translations[langCode]["contactenos"]);
        $("#recentPostss #recentPosts").text(translations[langCode]["recentPosts"]);
        
         $("#menuids #abaprodutos").text(translations[langCode]["abaprodutos"]);
         $("#sabermaisx #sabermais").text(translations[langCode]["sabermaisx"]);
        
        $("#bemvindo ").text(translations[langCode]["bemvindo"]);
        $("#contacto ").text(translations[langCode]["contacto"]);
        $("#envieemail ").text(translations[langCode]["envieemail"]);
        $("#horario ").text(translations[langCode]["horario"]);
        $("#aberturafecho ").text(translations[langCode]["aberturafecho"]);
        $("#navegacao ").text(translations[langCode]["navegacao"]);
        $("#abaprincipal ").text(translations[langCode]["abaprincipal"]);
        $(" ").text(translations[langCode]["abaprodutos"]); 
        $("#porductos ").text(translations[langCode]["porductos"]);
        $("#abarevendedor ").text(translations[langCode]["abarevendedor"]);
        $("#sobrenos ").text(translations[langCode]["sobrenos"]);
        $("#abafechar ").text(translations[langCode]["abafechar"]);
        $("#solucoesinovadoras ").text(translations[langCode]["solucoesinovadoras"]);
        $("#tecnologiadeponta ").text(translations[langCode]["tecnologiadeponta"]);
        $("#porquenos ").text(translations[langCode]["porquenos"]);
        $("#fornecimentogas ").text(translations[langCode]["fornecimentogas"]);
        $("#eficiente ").text(translations[langCode]["eficiente"]);
        $("#atendimentocomfoco ").text(translations[langCode]["atendimentocomfoco"]);
        $("#nocliente ").text(translations[langCode]["nocliente"]);
        $("#solucaogas ").text(translations[langCode]["solucaogas"]);
        $("#sustentaveis ").text(translations[langCode]["sustentaveis"]);
        $("#mygassobre ").text(translations[langCode]["mygassobre"]);
        $("#mygassobre2 ").text(translations[langCode]["mygassobre2"]);
        $("#garantiaqualidade ").text(translations[langCode]["garantiaqualidade"]);
        $("#seguranca ").text(translations[langCode]["seguranca"]);
        $("#diversidade ").text(translations[langCode]["diversidade"]);
        $("#anos ").text(translations[langCode]["anos"]);
        $("#emoz ").text(translations[langCode]["emoz"]);
        $("#produtosmygas ").text(translations[langCode]["produtosmygas"]);
        $("#maissobre ").text(translations[langCode]["maissobre"]);
        $("#5kg ").text(translations[langCode]["5kg"]);
        $("#5kgc ").text(translations[langCode]["5kgc"]);
        $("#11kg ").text(translations[langCode]["11kg"]);
        $("#11kgp ").text(translations[langCode]["11kgp"]);
        $("#45kg ").text(translations[langCode]["45kg"]);
        $("#botija ").text(translations[langCode]["botija"]);
        $("#comecenegocio ").text(translations[langCode]["comecenegocio"]);
        $("#seetas ").text(translations[langCode]["seetas"]);
        $("#vamos ").text(translations[langCode]["vamos"]);
        $("#enviarmensagem ").text(translations[langCode]["enviarmensagem"]);
        $("#entrecontacto ").text(translations[langCode]["entrecontacto"]);
        $("#gostariamos ").text(translations[langCode]["gostariamos"]);
        $("#contactenos ").text(translations[langCode]["contactenos"]);
        $("#noticiasblogs ").text(translations[langCode]["noticiasblogs"]);
        $("#noticiasnossas ").text(translations[langCode]["noticiasnossas"]);
        $("#gascomercial ").text(translations[langCode]["gascomercial"]);
        $("#cooments ").text(translations[langCode]["cooments"]);
        $("#osbeneficios ").text(translations[langCode]["osbeneficios"]);
        $("#osbeneficios2 ").text(translations[langCode]["osbeneficios2"]);
        $("#osbeneficios3 ").text(translations[langCode]["osbeneficios3"]);
        $("#junteteafamilia ").text(translations[langCode]["junteteafamilia"]);
        $("#inscrevate ").text(translations[langCode]["inscrevate"]);
        $("#pg1 ").text(translations[langCode]["pg1"]);
        $("#pg2 ").text(translations[langCode]["pg2"]);
        $("#pg3 ").text(translations[langCode]["pg3"]);
        $("#pg4 ").text(translations[langCode]["pg4"]);
        $("#pg5 ").text(translations[langCode]["pg5"]);
        $("#pg6 ").text(translations[langCode]["pg6"]);
        $("#pg7 ").text(translations[langCode]["pg7"]);
        $("#pg8 ").text(translations[langCode]["pg8"]);
        $("#pg9 ").text(translations[langCode]["pg9"]);
        $("#pg10 ").text(translations[langCode]["pg10"]);
        $("#rsp1 ").text(translations[langCode]["rsp1"]);
        $("#rsp2 ").text(translations[langCode]["rsp2"]);
        $("#rsp3 ").text(translations[langCode]["rsp3"]);
        $("#rsp4 ").text(translations[langCode]["rsp4"]);
        $("#rsp5 ").text(translations[langCode]["rsp5"]);
        $("#rsp6 ").text(translations[langCode]["rsp6"]);
        $("#rsp7 ").text(translations[langCode]["rsp7"]);
        $("#rsp8 ").text(translations[langCode]["rsp8"]);
        $("#rsp9 ").text(translations[langCode]["rsp9"]);
        $("#rsp10 ").text(translations[langCode]["rsp10"]);
        $("#sobreaempresa ").text(translations[langCode]["sobreaempresa"]);
        $("#solucaonecessidade ").text(translations[langCode]["solucaonecessidade"]);
        $("#linksrapidos ").text(translations[langCode]["linksrapidos"]);
        $("#pontosvendas ").text(translations[langCode]["pontosvendas"]);
        $("#renvendedores ").text(translations[langCode]["renvendedores"]);
        $("#contactoss ").text(translations[langCode]["contactoss"]);
        $("#osbeneficioss").text(translations[langCode]["osbeneficioss"]);
        $("#5maneiras ").text(translations[langCode]["5maneiras"]);
        $("#trademark ").text(translations[langCode]["trademark"]);
        $("#faqperguntas ").text(translations[langCode]["faqperguntas"]);
        $("#sobrenoss ").text(translations[langCode]["sobrenoss"]);
        $("#gasdomesticocomercial2 ").text(translations[langCode]["gasdomesticocomercial2"]);
        $("#nossobre ").text(translations[langCode]["nossobre"]); 
        $("#produtosabaprodutos ").text(translations[langCode]["produtosabaprodutos"]);
        $("#rvendtornar ").text(translations[langCode]["rvendtornar"]);
      }
      
    //   function changtext(){
    //       $("#gasdomesticocomercial2 span").text("New word");
    //   }

</script>

</section>

</body>

</html>