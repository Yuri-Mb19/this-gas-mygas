<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Petro - Gas & Oil Industrial HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

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
    <!-- Css links end here -->
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>

<body id="default-home" onload="setLanguage()">

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

     <!-- Header start -->
    <header id="header-sticky" class="header-area style-01">
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
                            <a href="{{ route('site.index') }}" class="logo"><img src="assets/images/MyGas_mocambique.jpg" alt=""></a>
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
                                            <h2 class="header-nav-heading h6" id="navegacao">Navegação</h2>
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
                                            <!--        <ul class="sub-menu">
                                                        <li><a href="blog.html">Blog Post</a></li>
                                                        <li><a href="#">Blog Single</a></li>
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

    <main>

        <!-- Banner start -->
        <div id="banner-section" class="page-title" data-jarallax='{"speed": 0.6}' style="background: url(assets/images/banner/hero-04.jpg);">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrubms text-center" id="breadcontactenos">
                                <h2 class="title"  id="contactenos">{{__('messages.contactenos')}}</h2>
                                <ul class="d-flex justify-content-center mt-20">
                                    <li class="mb-20"><a href="{{ route('site.index') }}">{{__('messages.abaprincipal')}}</a></li>
                                    <li> / </li>
                                    <li><span class="active" id="contactenos">{{__('messages.contactenos')}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner end -->

        <!-- Google map start -->
        <div id="google-map-section" class="google-map">
            
				<iframe width="770" height="510" id="gmap_canvas" src="https://maps.google.com/maps?q=Maputo&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- Google map end -->
		
		
         <section id="get-in-touch-section" data-jarallax='{"speed": 0.6}' class="pt-120">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="works-title section-title style-01">
                                
                                <h3 class="subtitle" id="rvendtornar">{{__('messages.rvendtornar')}}</h3>
                                <h2 class="title" id="comecenegocio"><span> {{__('messages.comecenegocio')}} </span></h2>
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
                                <h3 id="junteteafamilia">{{__('messages.junteteafamilia')}}</h3>
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

    <!-- Footer start -->
    <!-- Footer start -->
    <footer id="footer-section" class="footer-area">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="footer-widget widget mt-50 footer-about">
                            <h3 class="title" id="sobreaempresa">{{__('messages.sobreaempresa')}}</h3>
                            <div class="logo mt-30 mb-30">
                                <a href="{{ route('site.index') }}"> <img src="assets/images/MyGas_mocambique.jpg" alt="footer logo"></a>
                            </div>
                            <p class="text" id="solucaonecessidade">{{__('messages.solucaonecessidade')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="footer-widget widget mt-50">
                            <h3 class="title" id="linksrapidos">{{__('messages.linksrapidos')}}</h3>
                            <ul class="mt-20">
                                <li><a href="#!"><i class="fa fa-angle-right" id="sobrenoss"></i>{{__('messages.sobrenos')}}</a></li>
                                <li><a href="#!"><i class="fa fa-angle-right" id="produtosabaprodutos"></i>{{__('messages.produtosabaprodutos')}}</a></li>
                                <li><a href="#!"><i class="fa fa-angle-right" id="pontosvendas"></i>{{__('messages.pontosvendas')}}</a></li>
                                <li><a href="#!"><i class="fa fa-angle-right" id="renvendedores"></i>{{__('messages.renvendedores')}}</a></li>
                                <li><a href="#!"><i class="fa fa-angle-right" id="contactoss"></i>{{__('messages.contactoss')}}</a></li>
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
                            <h3 class="title" id="recentPosts">Posts Recentes</h3>
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
                                        <p class="text" id="trademark">© Todos Direitos Resevados 2023.</p>
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
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/quote-form.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/backtotop.js"></script>
    <script src="assets/js/main.js"></script>
     <script src="assets/js/language.js"></script>
     
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
        changtext();

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
        $("#breadcontactenos #contactenos ").text(translations[langCode]["contactenos"]);
      }
      
    //   function changtext(){
    //       $("#gasdomesticocomercial2 span").text("New word");
    //   }

</script>
</body>

</html>