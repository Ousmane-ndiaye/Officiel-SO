<?php

/* OfficeBundle:Front:acceuil.html.twig */
class __TwigTemplate_0d96b6b30ca5a153d74d59f30b7581a6a6dda23f9a53d3164360bdfff95fe39c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_514d99008836503da4bdc1f09002c9af66c2b850b5f5a3fae5aad6ac5735268c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514d99008836503da4bdc1f09002c9af66c2b850b5f5a3fae5aad6ac5735268c->enter($__internal_514d99008836503da4bdc1f09002c9af66c2b850b5f5a3fae5aad6ac5735268c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfficeBundle:Front:acceuil.html.twig"));

        $__internal_adeedaf73f76a7785d867ceb8029134e71139e9f44cb10989e33e4a4558a009d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adeedaf73f76a7785d867ceb8029134e71139e9f44cb10989e33e4a4558a009d->enter($__internal_adeedaf73f76a7785d867ceb8029134e71139e9f44cb10989e33e4a4558a009d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfficeBundle:Front:acceuil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>SenOffice</title>
\t\t
\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
\t\t<!-- Bootstrap -->
\t\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/owl.transitions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/cs-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/freepik.hotels.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">




\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.min.js\"></script>
\t\t<script src=\"js/respond.min.js\"></script>
\t\t<![endif]-->
\t\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/modernizr.custom.min.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t<body>
    ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('slide', $context, $blocks);
        // line 154
        $this->displayBlock('recherche', $context, $blocks);
        // line 210
        $this->displayBlock('offre', $context, $blocks);
        // line 273
        $this->displayBlock('apropos', $context, $blocks);
        // line 363
        echo "
";
        // line 364
        $this->displayBlock('partenaires', $context, $blocks);
        // line 399
        $this->displayBlock('galerie', $context, $blocks);
        // line 455
        $this->displayBlock('footer', $context, $blocks);
        // line 547
        echo "\t\t<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t<script src=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t<script src=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/jssor.slider.mini.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/selectFx.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/starrr.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/jquery.shuffle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
\t\t<script src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/gmaps.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/script.js"), "html", null, true);
        echo "\"></script>
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.9/js/all.js\" integrity=\"sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl\" crossorigin=\"anonymous\"></script>


\t</body>
</html>";
        
        $__internal_514d99008836503da4bdc1f09002c9af66c2b850b5f5a3fae5aad6ac5735268c->leave($__internal_514d99008836503da4bdc1f09002c9af66c2b850b5f5a3fae5aad6ac5735268c_prof);

        
        $__internal_adeedaf73f76a7785d867ceb8029134e71139e9f44cb10989e33e4a4558a009d->leave($__internal_adeedaf73f76a7785d867ceb8029134e71139e9f44cb10989e33e4a4558a009d_prof);

    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        $__internal_809c453fdf75c3964f1baa080dd525b83fba5fe897b254928d3565a052f37965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809c453fdf75c3964f1baa080dd525b83fba5fe897b254928d3565a052f37965->enter($__internal_809c453fdf75c3964f1baa080dd525b83fba5fe897b254928d3565a052f37965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a22621cc439fb56445b43f20a2d4a78ad5d901ff0424071aacd0da9751d019e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22621cc439fb56445b43f20a2d4a78ad5d901ff0424071aacd0da9751d019e5->enter($__internal_a22621cc439fb56445b43f20a2d4a78ad5d901ff0424071aacd0da9751d019e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "\t\t<div class=\"preloader\"></div>
\t\t<header class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
\t\t\t<nav class=\"navbar navbar-inverse\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/senoffice.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li  class=\"active\"><a href=\"";
        // line 52
        echo "acceuil";
        echo "\">Acceuil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 53
        echo "catalogue";
        echo "\">Catalogue</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Espace client<span class=\"caret\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"signin.html\">Connexion</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Inscription</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Partagez votre salle</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t\t\t<div class=\"mg-search-box-cont pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"mg-search-box-trigger\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t\t<div class=\"mg-search-box\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"s\" class=\"form-control\" placeholder=\"Type Keyword...\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.container-fluid -->
\t\t\t</nav>
\t\t</header>

";
        
        $__internal_a22621cc439fb56445b43f20a2d4a78ad5d901ff0424071aacd0da9751d019e5->leave($__internal_a22621cc439fb56445b43f20a2d4a78ad5d901ff0424071aacd0da9751d019e5_prof);

        
        $__internal_809c453fdf75c3964f1baa080dd525b83fba5fe897b254928d3565a052f37965->leave($__internal_809c453fdf75c3964f1baa080dd525b83fba5fe897b254928d3565a052f37965_prof);

    }

    // line 82
    public function block_slide($context, array $blocks = array())
    {
        $__internal_533aa45fb7711059f24b7ba5cadaf97c3cf6c619b98a625a4dbbb5d5386ae250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533aa45fb7711059f24b7ba5cadaf97c3cf6c619b98a625a4dbbb5d5386ae250->enter($__internal_533aa45fb7711059f24b7ba5cadaf97c3cf6c619b98a625a4dbbb5d5386ae250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_173b104df9cc5d2417d500267c1fab409d9109b986057827dc92eb87e2eb2ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173b104df9cc5d2417d500267c1fab409d9109b986057827dc92eb87e2eb2ad2->enter($__internal_173b104df9cc5d2417d500267c1fab409d9109b986057827dc92eb87e2eb2ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 83
        echo "\t\t<div id=\"mega-slider\" class=\"carousel slide \" data-ride=\"carousel\">
\t\t\t<!-- Indicators -->
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"2\"></li>
\t\t\t</ol>

\t\t\t<!-- Wrapper for slides -->
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t<div class=\"item active beactive\">
\t\t\t\t\t<img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/slide-4.png"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t<h2>Bienvenue Sen Office</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tVos séminaires et réunions dans le lieu idéal
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"col-md-4\">\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/slide-2.png"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t<h2>Sen Office</h2>
\t\t\t\t\t\t<p>Pour faire de chaque rencontre un moment qui vous inspire.</p>
\t\t\t\t\t\t<div class=\"col-md-4\">\t
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/slide-3.png"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t<h2>Sen Office</h2>
\t\t\t\t\t\t<p>L'endroit parfait pour vos événements.</p>
\t\t\t\t\t\t<div class=\"col-md-4\">\t
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t
\t\t

\t\t\t<!-- Controls -->
\t\t\t<a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
\t\t\t</a>
\t\t</div>

 ";
        
        $__internal_173b104df9cc5d2417d500267c1fab409d9109b986057827dc92eb87e2eb2ad2->leave($__internal_173b104df9cc5d2417d500267c1fab409d9109b986057827dc92eb87e2eb2ad2_prof);

        
        $__internal_533aa45fb7711059f24b7ba5cadaf97c3cf6c619b98a625a4dbbb5d5386ae250->leave($__internal_533aa45fb7711059f24b7ba5cadaf97c3cf6c619b98a625a4dbbb5d5386ae250_prof);

    }

    // line 154
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_0cf32d584e022f76362935003d4a20d1c2d6f425dc6d918e0d51a4724b22bc3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf32d584e022f76362935003d4a20d1c2d6f425dc6d918e0d51a4724b22bc3b->enter($__internal_0cf32d584e022f76362935003d4a20d1c2d6f425dc6d918e0d51a4724b22bc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_f778a16313c225a8451013f5ef63eccdf35a6e9dc1ae1870c9b7856855964be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f778a16313c225a8451013f5ef63eccdf35a6e9dc1ae1870c9b7856855964be7->enter($__internal_f778a16313c225a8451013f5ef63eccdf35a6e9dc1ae1870c9b7856855964be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 155
        echo "\t\t<div class=\"mg-book-now\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h2 class=\"mg-bn-title\">Chercher une salle <span class=\"mg-bn-big\">Par lieux & disponiblité</span></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"mg-bn-forms\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date mg-check-in\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-map-marker\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Check In\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date mg-check-out\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Check Out\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-elastic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Adult</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-elastic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Child</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main btn-block\">Check Now</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
        
        $__internal_f778a16313c225a8451013f5ef63eccdf35a6e9dc1ae1870c9b7856855964be7->leave($__internal_f778a16313c225a8451013f5ef63eccdf35a6e9dc1ae1870c9b7856855964be7_prof);

        
        $__internal_0cf32d584e022f76362935003d4a20d1c2d6f425dc6d918e0d51a4724b22bc3b->leave($__internal_0cf32d584e022f76362935003d4a20d1c2d6f425dc6d918e0d51a4724b22bc3b_prof);

    }

    // line 210
    public function block_offre($context, array $blocks = array())
    {
        $__internal_5e8d48dfd6e28edb4ae273258629d22255d3f38ebdd3d6214b8e284ac059440a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8d48dfd6e28edb4ae273258629d22255d3f38ebdd3d6214b8e284ac059440a->enter($__internal_5e8d48dfd6e28edb4ae273258629d22255d3f38ebdd3d6214b8e284ac059440a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_e28c264dd8bdb38ddf1f986d421dc3fe841837f72f3e8c34e38863fb8004072d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28c264dd8bdb38ddf1f986d421dc3fe841837f72f3e8c34e38863fb8004072d->enter($__internal_e28c264dd8bdb38ddf1f986d421dc3fe841837f72f3e8c34e38863fb8004072d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 211
        echo "
\t\t<div class=\"mg-best-rooms\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t\t<h2>Nos meilleures salles</h2>
\t\t\t\t\t\t\t<p>Les salles les plus choisies par nos clients</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-1.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>\t\t\t
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>\t\t\t
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>\t\t\t
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div> -->
";
        
        $__internal_e28c264dd8bdb38ddf1f986d421dc3fe841837f72f3e8c34e38863fb8004072d->leave($__internal_e28c264dd8bdb38ddf1f986d421dc3fe841837f72f3e8c34e38863fb8004072d_prof);

        
        $__internal_5e8d48dfd6e28edb4ae273258629d22255d3f38ebdd3d6214b8e284ac059440a->leave($__internal_5e8d48dfd6e28edb4ae273258629d22255d3f38ebdd3d6214b8e284ac059440a_prof);

    }

    // line 273
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_85c5580b55dadfabe92e25037550ee8b02b308f893405f50025bd0189878f3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c5580b55dadfabe92e25037550ee8b02b308f893405f50025bd0189878f3ff->enter($__internal_85c5580b55dadfabe92e25037550ee8b02b308f893405f50025bd0189878f3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_24650498df512925e5a076de1515784b5367eb3f1f554b56aa750bcdb349d293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24650498df512925e5a076de1515784b5367eb3f1f554b56aa750bcdb349d293->enter($__internal_24650498df512925e5a076de1515784b5367eb3f1f554b56aa750bcdb349d293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 274
        echo "\t\t<div class=\"mg-about parallax\" id=\"apropos\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">A propos de Sen Office</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tSen Office c'est une équipe de passionnés qui souhaite simplifier la vie des particuliers, entreprises, ONG, Associations, PME en leur donnant accès à des salles de réunion, séminaire, de formation ou de conférence au meilleur prix et en quelques minutes.Notre mission est d'offrir à chaque professionnel plus de flexibilité en lui permettant de trouver le meilleur espace de travail à tout moment et dans la ville de son choix. Nous avons pour ambition de devenir le site de réservation de salles de référence pour toutes les entreprises
\t\t\t\t\t\t.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"video-responsive\">
\t\t\t\t\t\t\t<iframe src=\"https://player.vimeo.com/video/134008155\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mg-features\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t\t<h2>Hotel facilties</h2>
\t\t\t\t\t\t\t<p>These best rooms chosen by our customers</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fp-ht-receptionist\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>24-hour reception</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Room service</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-car\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Car hire</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Wake-up call</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-coffee\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Coffee and tea</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Free Wi-Fi</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
        
        $__internal_24650498df512925e5a076de1515784b5367eb3f1f554b56aa750bcdb349d293->leave($__internal_24650498df512925e5a076de1515784b5367eb3f1f554b56aa750bcdb349d293_prof);

        
        $__internal_85c5580b55dadfabe92e25037550ee8b02b308f893405f50025bd0189878f3ff->leave($__internal_85c5580b55dadfabe92e25037550ee8b02b308f893405f50025bd0189878f3ff_prof);

    }

    // line 364
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_a6340d818d51962c169351d5df136c5b8c10896407c90c3dc60b7ae92a88b95a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6340d818d51962c169351d5df136c5b8c10896407c90c3dc60b7ae92a88b95a->enter($__internal_a6340d818d51962c169351d5df136c5b8c10896407c90c3dc60b7ae92a88b95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_baeeefc9666412e4c3d822bb1a597ab5d92f6d0047b29caa22f040a25b72446d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baeeefc9666412e4c3d822bb1a597ab5d92f6d0047b29caa22f040a25b72446d->enter($__internal_baeeefc9666412e4c3d822bb1a597ab5d92f6d0047b29caa22f040a25b72446d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        // line 365
        echo "\t\t<div class=\"mg-testi-partners parallax\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Témoignages</h2>
\t\t\t\t\t\t<div class=\"mg-testimonial-slider\" id=\"mg-testimonial-slider\">
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consumeret terminatas oritur euripidis satis. Venisset ipsum.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sol magnum gustare pararetur statuam, morbi patriam omittantur.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Stabilem monet, petat excepturi nudus expeteremus fabellas vexetur.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Nos partenaires</h2>
\t\t\t\t\t\t<ul class=\"mg-part-logos\" id=\"mg-part-logos\">
\t\t\t\t\t\t\t<li><img src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-1.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-2.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-3.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-1.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-3.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
 ";
        
        $__internal_baeeefc9666412e4c3d822bb1a597ab5d92f6d0047b29caa22f040a25b72446d->leave($__internal_baeeefc9666412e4c3d822bb1a597ab5d92f6d0047b29caa22f040a25b72446d_prof);

        
        $__internal_a6340d818d51962c169351d5df136c5b8c10896407c90c3dc60b7ae92a88b95a->leave($__internal_a6340d818d51962c169351d5df136c5b8c10896407c90c3dc60b7ae92a88b95a_prof);

    }

    // line 399
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_b36e75455284dfc661eaca98d82bab641df1b2469b30905cad0e441b8e369376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36e75455284dfc661eaca98d82bab641df1b2469b30905cad0e441b8e369376->enter($__internal_b36e75455284dfc661eaca98d82bab641df1b2469b30905cad0e441b8e369376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_f26c26246de95a79671d0b7d13f5ea4fe48e597eac8896faa61346ac51487505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26c26246de95a79671d0b7d13f5ea4fe48e597eac8896faa61346ac51487505->enter($__internal_f26c26246de95a79671d0b7d13f5ea4fe48e597eac8896faa61346ac51487505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        // line 400
        echo "\t\t<div class=\"mg-news-gallery\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Recent News</h2>
\t\t\t\t\t\t<ul class=\"mg-recnt-posts\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Our Gallery</h2>

\t\t\t\t\t\t<div class=\"mg-gallery-container\">
\t\t\t\t\t\t\t<ul class=\"mg-gallery\" id=\"mg-gallery\">
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-01.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-02.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-05.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-06.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-07.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-08.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-01.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-02.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-05.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-06.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-07.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-08.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
        
        $__internal_f26c26246de95a79671d0b7d13f5ea4fe48e597eac8896faa61346ac51487505->leave($__internal_f26c26246de95a79671d0b7d13f5ea4fe48e597eac8896faa61346ac51487505_prof);

        
        $__internal_b36e75455284dfc661eaca98d82bab641df1b2469b30905cad0e441b8e369376->leave($__internal_b36e75455284dfc661eaca98d82bab641df1b2469b30905cad0e441b8e369376_prof);

    }

    // line 455
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b3dc03675b658ead13e0080b30853bbb1d67e0eb1c687d566ccd88302f49b6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3dc03675b658ead13e0080b30853bbb1d67e0eb1c687d566ccd88302f49b6e4->enter($__internal_b3dc03675b658ead13e0080b30853bbb1d67e0eb1c687d566ccd88302f49b6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_726bb25c821ded8d7296755b3b2e15c5924e8b25eed315f3bf05bbb1e95fc1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726bb25c821ded8d7296755b3b2e15c5924e8b25eed315f3bf05bbb1e95fc1e6->enter($__internal_726bb25c821ded8d7296755b3b2e15c5924e8b25eed315f3bf05bbb1e95fc1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 456
        echo "\t\t<footer class=\"mg-footer\">
\t\t\t<div class=\"mg-footer-widget\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Contactez-nous</h2>
\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t<strong></strong><br>
\t\t\t\t\t\t\t\t\tRue 3,Brenger Feraud, Sonatel Academy<br>
\t\t\t\t\t\t\t\t\tCTIC/DAKAR
\t\t\t\t\t\t\t\t</address>
\t\t\t\t
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t+221 78 173 54 79<br>
\t\t\t\t\t\t\t\t\t+221 77 373 19 36
\t\t\t\t\t\t\t\t</p>
\t\t\t\t
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:#\">contact@myoffice.sn</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Instagram</h2>
\t\t\t\t\t\t\t\t<ul class=\"mg-instagram\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-01.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-02.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-03.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-04.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-05.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-06.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-07.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-08.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-09.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Newsletter</h2>
\t\t\t\t\t\t\t\t<p>inscrivez-vous à notre Newsletter pour ne rien manquer de nos nouveautés.</p>
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Votre Email\">
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-main\" value=\"Je m'inscris\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Suivez-nous sur les réseaux sociaux</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLes équipes se réunissent souvent dans les espaces Sen Office pour une réunion commerciale, pour préparer un projet, pour une présentation des objectifs ou une réunion du service marketing
\t\t\t\t\t\t\t\t\t.</p>
\t\t\t\t\t\t\t\t<ul class=\"mg-footer-social\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mg-copyright\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<ul class=\"mg-footer-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Acceuil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#apropos\">A propos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"gallery.html\">catalogue</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<p>&copy; 2018 <a href=\"http://www.senoffice.sn\">ADOB-TECH</a>. All rights reserved.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            
\t\t</footer>
";
        
        $__internal_726bb25c821ded8d7296755b3b2e15c5924e8b25eed315f3bf05bbb1e95fc1e6->leave($__internal_726bb25c821ded8d7296755b3b2e15c5924e8b25eed315f3bf05bbb1e95fc1e6_prof);

        
        $__internal_b3dc03675b658ead13e0080b30853bbb1d67e0eb1c687d566ccd88302f49b6e4->leave($__internal_b3dc03675b658ead13e0080b30853bbb1d67e0eb1c687d566ccd88302f49b6e4_prof);

    }

    public function getTemplateName()
    {
        return "OfficeBundle:Front:acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  884 => 491,  880 => 490,  876 => 489,  872 => 488,  868 => 487,  864 => 486,  860 => 485,  856 => 484,  852 => 483,  823 => 456,  814 => 455,  796 => 447,  792 => 446,  788 => 445,  784 => 444,  780 => 443,  776 => 442,  770 => 439,  766 => 438,  762 => 437,  758 => 436,  754 => 435,  750 => 434,  714 => 400,  705 => 399,  688 => 392,  684 => 391,  680 => 390,  676 => 389,  672 => 388,  647 => 365,  638 => 364,  540 => 274,  531 => 273,  497 => 249,  481 => 236,  465 => 223,  451 => 211,  442 => 210,  378 => 155,  369 => 154,  333 => 128,  328 => 126,  314 => 115,  309 => 113,  289 => 96,  284 => 94,  271 => 83,  262 => 82,  224 => 53,  220 => 52,  212 => 47,  198 => 35,  189 => 34,  173 => 562,  169 => 561,  165 => 560,  160 => 558,  156 => 557,  152 => 556,  148 => 555,  144 => 554,  140 => 553,  136 => 552,  132 => 551,  128 => 550,  123 => 548,  120 => 547,  118 => 455,  116 => 399,  114 => 364,  111 => 363,  109 => 273,  107 => 210,  105 => 154,  103 => 82,  100 => 81,  98 => 34,  92 => 31,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  49 => 12,  45 => 11,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>SenOffice</title>
\t\t
\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
\t\t<!-- Bootstrap -->
\t\t<link href=\"{{asset ('assets/template/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/font-awesome.min.css')}}\" rel=\"stylesheet\">

\t\t<link href=\"{{asset ('assets/template/css/owl.carousel.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/owl.theme.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/owl.transitions.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/cs-select.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/bootstrap-datepicker3.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/freepik.hotels.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/style.css')}}\" rel=\"stylesheet\">




\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.min.js\"></script>
\t\t<script src=\"js/respond.min.js\"></script>
\t\t<![endif]-->
\t\t<script src=\"{{asset ('assets/template/js/modernizr.custom.min.js')}}\"></script>
\t</head>
\t<body>
    {% block header %}
\t\t<div class=\"preloader\"></div>
\t\t<header class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
\t\t\t<nav class=\"navbar navbar-inverse\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"{{asset  ('assets/template/images/senoffice.png')}}\" alt=\"logo\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li  class=\"active\"><a href=\"{{'acceuil'}}\">Acceuil</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{'catalogue'}}\">Catalogue</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Espace client<span class=\"caret\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"signin.html\">Connexion</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Inscription</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"#\">Partagez votre salle</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t\t\t<div class=\"mg-search-box-cont pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"mg-search-box-trigger\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t\t<div class=\"mg-search-box\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"s\" class=\"form-control\" placeholder=\"Type Keyword...\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.container-fluid -->
\t\t\t</nav>
\t\t</header>

{% endblock %}

{% block slide %}
\t\t<div id=\"mega-slider\" class=\"carousel slide \" data-ride=\"carousel\">
\t\t\t<!-- Indicators -->
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#mega-slider\" data-slide-to=\"2\"></li>
\t\t\t</ol>

\t\t\t<!-- Wrapper for slides -->
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t<div class=\"item active beactive\">
\t\t\t\t\t<img src=\"{{asset ('assets/template/images/slide-4.png')}}\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/stars.png')}}\" alt=\"\">
\t\t\t\t\t\t<h2>Bienvenue Sen Office</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tVos séminaires et réunions dans le lieu idéal
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"col-md-4\">\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{asset ('assets/template/images/slide-2.png')}}\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/stars.png')}}\" alt=\"\">
\t\t\t\t\t\t<h2>Sen Office</h2>
\t\t\t\t\t\t<p>Pour faire de chaque rencontre un moment qui vous inspire.</p>
\t\t\t\t\t\t<div class=\"col-md-4\">\t
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{asset ('assets/template/images/slide-3.png')}}\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/stars.png')}}\" alt=\"\">
\t\t\t\t\t\t<h2>Sen Office</h2>
\t\t\t\t\t\t<p>L'endroit parfait pour vos événements.</p>
\t\t\t\t\t\t<div class=\"col-md-4\">\t
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t
\t\t

\t\t\t<!-- Controls -->
\t\t\t<a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
\t\t\t</a>
\t\t</div>

 {% endblock %}
{% block recherche %}
\t\t<div class=\"mg-book-now\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h2 class=\"mg-bn-title\">Chercher une salle <span class=\"mg-bn-big\">Par lieux & disponiblité</span></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"mg-bn-forms\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date mg-check-in\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-map-marker\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Check In\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date mg-check-out\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Check Out\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-elastic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Adult</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-elastic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Child</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main btn-block\">Check Now</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
{% endblock %}
{% block offre %}

\t\t<div class=\"mg-best-rooms\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t\t<h2>Nos meilleures salles</h2>
\t\t\t\t\t\t\t<p>Les salles les plus choisies par nos clients</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/room-1.png')}}\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>\t\t\t
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/room-2.png')}}\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>\t\t\t
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/room-3.png')}}\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>\t\t\t
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div> -->
{% endblock %}
{% block apropos %}
\t\t<div class=\"mg-about parallax\" id=\"apropos\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">A propos de Sen Office</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tSen Office c'est une équipe de passionnés qui souhaite simplifier la vie des particuliers, entreprises, ONG, Associations, PME en leur donnant accès à des salles de réunion, séminaire, de formation ou de conférence au meilleur prix et en quelques minutes.Notre mission est d'offrir à chaque professionnel plus de flexibilité en lui permettant de trouver le meilleur espace de travail à tout moment et dans la ville de son choix. Nous avons pour ambition de devenir le site de réservation de salles de référence pour toutes les entreprises
\t\t\t\t\t\t.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"video-responsive\">
\t\t\t\t\t\t\t<iframe src=\"https://player.vimeo.com/video/134008155\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mg-features\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t\t<h2>Hotel facilties</h2>
\t\t\t\t\t\t\t<p>These best rooms chosen by our customers</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fp-ht-receptionist\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>24-hour reception</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Room service</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-car\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Car hire</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Wake-up call</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-coffee\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Coffee and tea</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Free Wi-Fi</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
{% endblock %}

{% block partenaires %}
\t\t<div class=\"mg-testi-partners parallax\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Témoignages</h2>
\t\t\t\t\t\t<div class=\"mg-testimonial-slider\" id=\"mg-testimonial-slider\">
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consumeret terminatas oritur euripidis satis. Venisset ipsum.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sol magnum gustare pararetur statuam, morbi patriam omittantur.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Stabilem monet, petat excepturi nudus expeteremus fabellas vexetur.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Nos partenaires</h2>
\t\t\t\t\t\t<ul class=\"mg-part-logos\" id=\"mg-part-logos\">
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-1.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-2.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-3.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-1.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-3.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
 {% endblock %}
{% block galerie %}
\t\t<div class=\"mg-news-gallery\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Recent News</h2>
\t\t\t\t\t\t<ul class=\"mg-recnt-posts\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Our Gallery</h2>

\t\t\t\t\t\t<div class=\"mg-gallery-container\">
\t\t\t\t\t\t\t<ul class=\"mg-gallery\" id=\"mg-gallery\">
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-01.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-02.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-05.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-06.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-07.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-08.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-01.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-02.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-05.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-06.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-07.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-08.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
{% endblock %}
{% block footer %}
\t\t<footer class=\"mg-footer\">
\t\t\t<div class=\"mg-footer-widget\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Contactez-nous</h2>
\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t<strong></strong><br>
\t\t\t\t\t\t\t\t\tRue 3,Brenger Feraud, Sonatel Academy<br>
\t\t\t\t\t\t\t\t\tCTIC/DAKAR
\t\t\t\t\t\t\t\t</address>
\t\t\t\t
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t+221 78 173 54 79<br>
\t\t\t\t\t\t\t\t\t+221 77 373 19 36
\t\t\t\t\t\t\t\t</p>
\t\t\t\t
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:#\">contact@myoffice.sn</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Instagram</h2>
\t\t\t\t\t\t\t\t<ul class=\"mg-instagram\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-01.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-02.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-03.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-04.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-05.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-06.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-07.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-08.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-09.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Newsletter</h2>
\t\t\t\t\t\t\t\t<p>inscrivez-vous à notre Newsletter pour ne rien manquer de nos nouveautés.</p>
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Votre Email\">
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-main\" value=\"Je m'inscris\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Suivez-nous sur les réseaux sociaux</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLes équipes se réunissent souvent dans les espaces Sen Office pour une réunion commerciale, pour préparer un projet, pour une présentation des objectifs ou une réunion du service marketing
\t\t\t\t\t\t\t\t\t.</p>
\t\t\t\t\t\t\t\t<ul class=\"mg-footer-social\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mg-copyright\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<ul class=\"mg-footer-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Acceuil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#apropos\">A propos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"gallery.html\">catalogue</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<p>&copy; 2018 <a href=\"http://www.senoffice.sn\">ADOB-TECH</a>. All rights reserved.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            
\t\t</footer>
{% endblock %}
\t\t<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t<script src=\"{{asset ('assets/template/js/jquery.min.js')}}\"></script>
\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t<script src=\"{{asset ('assets/template/js/bootstrap.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/owl.carousel.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/jssor.slider.mini.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/classie.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/selectFx.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/bootstrap-datepicker.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/starrr.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/nivo-lightbox.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/jquery.shuffle.min.js')}}\"></script>
\t\t<script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
\t\t<script src=\"{{asset ('assets/template/js/gmaps.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/template/js/jquery.parallax-1.1.3.js')}}\"></script>
        <script src=\"{{asset ('assets/template/js/script.js')}}\"></script>
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.9/js/all.js\" integrity=\"sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl\" crossorigin=\"anonymous\"></script>


\t</body>
</html>", "OfficeBundle:Front:acceuil.html.twig", "/var/www/html/senoffice/myoffice/src/OfficeBundle/Resources/views/Front/acceuil.html.twig");
    }
}
