<?php

/* ::base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'titre' => array($this, 'block_titre'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eecb2d9375e3799c2cc2924604325d9b94a2c171e63ec3e4bf462e6bff67224a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecb2d9375e3799c2cc2924604325d9b94a2c171e63ec3e4bf462e6bff67224a->enter($__internal_eecb2d9375e3799c2cc2924604325d9b94a2c171e63ec3e4bf462e6bff67224a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_29bbef63ce3bd47f4799ef90513ced45820ff1ba2d9d92e099e93bd403b71a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29bbef63ce3bd47f4799ef90513ced45820ff1ba2d9d92e099e93bd403b71a5c->enter($__internal_29bbef63ce3bd47f4799ef90513ced45820ff1ba2d9d92e099e93bd403b71a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Début bloc CSS -->
        <style>
\t\t\t/*.select2-result-label{
\t\t\t\tbackground-color: yellow;
\t\t\t}*/
            .nav>li>a:hover{
                padding-bottom: 35px;
                border-bottom: 3px solid #e7b315;
            }

\t\t\t.wrap {
            \tmargin: 10px auto 0;
\t\t\t}

\t\t\t#steps {
\t\t\t\tmargin: 80px 0 0 0
\t\t\t}

\t\t\t.commands {
\t\t\t\toverflow: hidden;
\t\t\t\tmargin-top: 30px;
\t\t\t}

\t\t\t.prev {
\t\t\t\tfloat: left
\t\t\t}

\t\t\t.next,
\t\t\t.submit {
\t\t\t\tfloat: right
\t\t\t}

\t\t\t.error {
\t\t\t\tcolor: #b33;
\t\t\t}

\t\t\t#progress {
\t\t\t\tposition: relative;
\t\t\t\theight: 5px;
\t\t\t\tbackground-color: #eee;
\t\t\t\tmargin-bottom: 20px;
\t\t\t}

\t\t\t#progress-complete {
\t\t\t\tborder: 0;
\t\t\t\tposition: absolute;
\t\t\t\theight: 5px;
\t\t\t\tmin-width: 10px;
\t\t\t\tbackground-color: #337ab7;
\t\t\t\ttransition: width .2s ease-in-out;
\t\t\t}
\t\t</style>


\t\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/nprogress-master/nprogress.js"), "html", null, true);
        echo "\"></script>
\t\t<link rel='stylesheet' href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/nprogress-master/nprogress.css"), "html", null, true);
        echo "\"/>

\t\t<!-- Plugins css-->
        <!--<link href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/tagsinput/jquery.tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/toggles/toggles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->
        <link href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/jquery-multi-select/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


        ";
        // line 74
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 95
        echo "        <!-- Fin bloc CSS -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("senoffice.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 710
        echo "    </body>
</html>
";
        
        $__internal_eecb2d9375e3799c2cc2924604325d9b94a2c171e63ec3e4bf462e6bff67224a->leave($__internal_eecb2d9375e3799c2cc2924604325d9b94a2c171e63ec3e4bf462e6bff67224a_prof);

        
        $__internal_29bbef63ce3bd47f4799ef90513ced45820ff1ba2d9d92e099e93bd403b71a5c->leave($__internal_29bbef63ce3bd47f4799ef90513ced45820ff1ba2d9d92e099e93bd403b71a5c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_21bd040dd1f8c5a836af1520c5c8f680e643a59efafa653b1830a0c76e868005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21bd040dd1f8c5a836af1520c5c8f680e643a59efafa653b1830a0c76e868005->enter($__internal_21bd040dd1f8c5a836af1520c5c8f680e643a59efafa653b1830a0c76e868005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d01e53467f441cd139986bdd24e0f3c2310f24acfec1caf8536fca47fcb776e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01e53467f441cd139986bdd24e0f3c2310f24acfec1caf8536fca47fcb776e6->enter($__internal_d01e53467f441cd139986bdd24e0f3c2310f24acfec1caf8536fca47fcb776e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d01e53467f441cd139986bdd24e0f3c2310f24acfec1caf8536fca47fcb776e6->leave($__internal_d01e53467f441cd139986bdd24e0f3c2310f24acfec1caf8536fca47fcb776e6_prof);

        
        $__internal_21bd040dd1f8c5a836af1520c5c8f680e643a59efafa653b1830a0c76e868005->leave($__internal_21bd040dd1f8c5a836af1520c5c8f680e643a59efafa653b1830a0c76e868005_prof);

    }

    // line 74
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_990f7fc6a14a191554f8c8e9526ab532e2b5534cd9f6cc38dbdfa00578c031d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990f7fc6a14a191554f8c8e9526ab532e2b5534cd9f6cc38dbdfa00578c031d1->enter($__internal_990f7fc6a14a191554f8c8e9526ab532e2b5534cd9f6cc38dbdfa00578c031d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a485a9939ee7475cd711b7c9f1c02bd89cd3aa15ea76f7e8456d01a7005a5d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a485a9939ee7475cd711b7c9f1c02bd89cd3aa15ea76f7e8456d01a7005a5d49->enter($__internal_a485a9939ee7475cd711b7c9f1c02bd89cd3aa15ea76f7e8456d01a7005a5d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 75
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/owl.transitions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/cs-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/freepik.hotels.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/autocomplete/ac.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.min.js\"></script>
\t\t<script src=\"js/respond.min.js\"></script>
\t\t<![endif]-->
\t\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/modernizr.custom.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a485a9939ee7475cd711b7c9f1c02bd89cd3aa15ea76f7e8456d01a7005a5d49->leave($__internal_a485a9939ee7475cd711b7c9f1c02bd89cd3aa15ea76f7e8456d01a7005a5d49_prof);

        
        $__internal_990f7fc6a14a191554f8c8e9526ab532e2b5534cd9f6cc38dbdfa00578c031d1->leave($__internal_990f7fc6a14a191554f8c8e9526ab532e2b5534cd9f6cc38dbdfa00578c031d1_prof);

    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        $__internal_c991a63bc9436a25f48925b859fed368c60923f174f6532909fa91bff5ae971a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c991a63bc9436a25f48925b859fed368c60923f174f6532909fa91bff5ae971a->enter($__internal_c991a63bc9436a25f48925b859fed368c60923f174f6532909fa91bff5ae971a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_964ee1ff3a25a7c96f31f41ee7955651853deadefd6bd42d36b9e9ca2ea4df88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964ee1ff3a25a7c96f31f41ee7955651853deadefd6bd42d36b9e9ca2ea4df88->enter($__internal_964ee1ff3a25a7c96f31f41ee7955651853deadefd6bd42d36b9e9ca2ea4df88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 100
        echo "        <div class=\"preloader\"></div>
        ";
        // line 101
        $this->displayBlock('header', $context, $blocks);
        // line 146
        echo "
        ";
        // line 147
        $this->displayBlock('titre', $context, $blocks);
        // line 149
        echo "
        ";
        // line 150
        $this->displayBlock('slide', $context, $blocks);
        // line 209
        echo "        ";
        $this->displayBlock('recherche', $context, $blocks);
        // line 256
        echo "        ";
        $this->displayBlock('offre', $context, $blocks);
        // line 319
        echo "        ";
        $this->displayBlock('apropos', $context, $blocks);
        // line 409
        echo "
        ";
        // line 410
        $this->displayBlock('partenaires', $context, $blocks);
        // line 445
        echo "        ";
        $this->displayBlock('galerie', $context, $blocks);
        // line 501
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 593
        echo "        <!-- Début bloc script -->
\t\t<script>
            if (window.location.href !== \"http://127.0.0.1:8000/sen-office/accueil\") {
\t\t\t\tvar lenav = document.getElementById(\"leheader\").children[0];
\t\t\t\tlenav.setAttribute(\"style\", \"background-color: rgba(22, 38, 46, 0.95);\");
            }
        </script>
        ";
        // line 600
        $this->displayBlock('javascripts', $context, $blocks);
        // line 622
        echo "\t\t<!-- Fin bloc script -->


\t\t<script>
            var resizefunc = [];
        </script>

\t\t<!-- Main  -->
        <script src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/toggles/toggles.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/jquery-multi-select/jquery.quicksearch.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ac/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


        <script>
            jQuery(document).ready(function() {

                // Select2
                jQuery(\".select2\").select2({
\t\t\t\t\twidth: '100%'
\t\t\t\t});
\t\t\t\tif(document.getElementById(\"select2-chosen-2\") != null) {
\t\t\t\t\tdocument.getElementById(\"select2-chosen-2\").setAttribute(\"style\", \"color: white\");
\t\t\t\t}
            });
        </script>
\t\t<script>
\t\t\t\$(function() {
\t\t\t\tvar \$signupForm = \$('#SignupForm');

\t\t\t\t\$signupForm.validate({
\t\t\t\t\terrorElement: 'em',
\t\t\t\t\tsubmitHandler: function(form) {
\t\t\t\t\t\talert('submitted');
\t\t\t\t\t\tform.submit();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$signupForm.formToWizard({
\t\t\t\t\tsubmitButton: 'SaveAccount',
\t\t\t\t\tnextBtnClass: 'btn btn-primary next',
\t\t\t\t\tprevBtnClass: 'btn btn-default prev',
\t\t\t\t\tbuttonTag: 'button',
\t\t\t\t\tvalidateBeforeNext: function(form, step) {
\t\t\t\t\t\tvar stepIsValid = true;
\t\t\t\t\t\tvar validator = form.validate();
\t\t\t\t\t\t\$(':input', step).each(function(index) {
\t\t\t\t\t\t\tvar xy = validator.element(this);
\t\t\t\t\t\t\tstepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
\t\t\t\t\t\t});
\t\t\t\t\t\treturn stepIsValid;
\t\t\t\t\t},
\t\t\t\t\tprogress: function(i, count) {
\t\t\t\t\t\t\$('#progress-complete').width('' + (i / count * 100) + '%');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\t/*document.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t\tvar elements = document.getElementsByTagName(\"INPUT\");
\t\t\t\tfor (var i = 0; i < elements.length; i++) {
\t\t\t\t\telements[i].oninvalid = function(e) {
\t\t\t\t\t\te.target.setCustomValidity(\"\");
\t\t\t\t\t\tif (!e.target.validity.valid) {
\t\t\t\t\t\t\te.target.setCustomValidity(\"This field cannot be left blank\");
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t\telements[i].oninput = function(e) {
\t\t\t\t\t\te.target.setCustomValidity(\"\");
\t\t\t\t\t};
\t\t\t\t}
\t\t\t});*/
\t\t</script>
    ";
        
        $__internal_964ee1ff3a25a7c96f31f41ee7955651853deadefd6bd42d36b9e9ca2ea4df88->leave($__internal_964ee1ff3a25a7c96f31f41ee7955651853deadefd6bd42d36b9e9ca2ea4df88_prof);

        
        $__internal_c991a63bc9436a25f48925b859fed368c60923f174f6532909fa91bff5ae971a->leave($__internal_c991a63bc9436a25f48925b859fed368c60923f174f6532909fa91bff5ae971a_prof);

    }

    // line 101
    public function block_header($context, array $blocks = array())
    {
        $__internal_7f649ed82a36c567099ce8981b61cba6950c2e073773c6cf044de9750dbb34d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f649ed82a36c567099ce8981b61cba6950c2e073773c6cf044de9750dbb34d0->enter($__internal_7f649ed82a36c567099ce8981b61cba6950c2e073773c6cf044de9750dbb34d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f1c20eeeec7c12c6ed95ebb8bb96c51cca215acfee599f771690a94c30004b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c20eeeec7c12c6ed95ebb8bb96c51cca215acfee599f771690a94c30004b60->enter($__internal_f1c20eeeec7c12c6ed95ebb8bb96c51cca215acfee599f771690a94c30004b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 102
        echo "\t\t<header id=\"leheader\" class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
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
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/senoffice.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li  class=\"";
        // line 118
        if (array_key_exists("activeA", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["activeA"] ?? $this->getContext($context, "activeA")), "html", null, true);
            echo " ";
        }
        echo "\"><a href=\"";
        echo "/sen-office/accueil";
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 119
        if (array_key_exists("activeC", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["activeC"] ?? $this->getContext($context, "activeC")), "html", null, true);
            echo " ";
        }
        echo "\"><a href=\"";
        echo "/sen-office/catalogue";
        echo "\">Catalogue</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Espace client<span class=\"caret\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"signin.html\">Connexion</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Inscription</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"";
        // line 129
        if (array_key_exists("activePS", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["activePS"] ?? $this->getContext($context, "activePS")), "html", null, true);
            echo " ";
        }
        echo "\"><a href=\"";
        echo "/sen-office/partager/salle";
        echo "\">Partagez votre salle</a></li>
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
        
        $__internal_f1c20eeeec7c12c6ed95ebb8bb96c51cca215acfee599f771690a94c30004b60->leave($__internal_f1c20eeeec7c12c6ed95ebb8bb96c51cca215acfee599f771690a94c30004b60_prof);

        
        $__internal_7f649ed82a36c567099ce8981b61cba6950c2e073773c6cf044de9750dbb34d0->leave($__internal_7f649ed82a36c567099ce8981b61cba6950c2e073773c6cf044de9750dbb34d0_prof);

    }

    // line 147
    public function block_titre($context, array $blocks = array())
    {
        $__internal_e76dad3a5908de90c42487eadbd89dfa4595c8894e036ebe5e01cb25381fa298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76dad3a5908de90c42487eadbd89dfa4595c8894e036ebe5e01cb25381fa298->enter($__internal_e76dad3a5908de90c42487eadbd89dfa4595c8894e036ebe5e01cb25381fa298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_bcddf79a623d4b6deb9db28421150a3510bb0cdb1db10b9dde30c94df2696623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcddf79a623d4b6deb9db28421150a3510bb0cdb1db10b9dde30c94df2696623->enter($__internal_bcddf79a623d4b6deb9db28421150a3510bb0cdb1db10b9dde30c94df2696623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 148
        echo "        ";
        
        $__internal_bcddf79a623d4b6deb9db28421150a3510bb0cdb1db10b9dde30c94df2696623->leave($__internal_bcddf79a623d4b6deb9db28421150a3510bb0cdb1db10b9dde30c94df2696623_prof);

        
        $__internal_e76dad3a5908de90c42487eadbd89dfa4595c8894e036ebe5e01cb25381fa298->leave($__internal_e76dad3a5908de90c42487eadbd89dfa4595c8894e036ebe5e01cb25381fa298_prof);

    }

    // line 150
    public function block_slide($context, array $blocks = array())
    {
        $__internal_cb5294b1e6287498fd20aa4368e00c3427362d2d673ac29e0ac3515cc89ce4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5294b1e6287498fd20aa4368e00c3427362d2d673ac29e0ac3515cc89ce4a1->enter($__internal_cb5294b1e6287498fd20aa4368e00c3427362d2d673ac29e0ac3515cc89ce4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_a5dd925cfffba3a4dd92a0474c8feb53882b03e9cd0657e73ee31849a7f0e5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5dd925cfffba3a4dd92a0474c8feb53882b03e9cd0657e73ee31849a7f0e5a8->enter($__internal_a5dd925cfffba3a4dd92a0474c8feb53882b03e9cd0657e73ee31849a7f0e5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 151
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
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/slide-4.png"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t<h2>Bienvenue Sen Office</h2>
\t\t\t\t\t\t<p>Vos séminaires et réunions dans le lieu idéal</p>
                        <div class=\"col-md-3 \">
                        </div>
\t\t\t\t\t\t<div class=\"col-md-4\" style=\"margin-left: 9%;\">
\t\t\t\t\t\t    <center><button type=\"submit\" class=\"btn btn-main btn-block\">Comment ça marche?</button></center>
                        </div>
                    </div>
                </div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/slide-2.png"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t<h2>Sen Office</h2>
\t\t\t\t\t\t<p>Pour faire de chaque rencontre un moment qui vous inspire.</p>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t</div>
                        <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                            <center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/slide-3.png"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t<h2>Sen Office</h2>
\t\t\t\t\t\t<p>L'endroit parfait pour vos événements.</p>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t</div>
                        <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                            <center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
                        </div>
\t\t\t\t\t</div>
                </div>
\t\t\t    <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
                </a>
                <a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
                </a>
            </div>
        </div>
        ";
        
        $__internal_a5dd925cfffba3a4dd92a0474c8feb53882b03e9cd0657e73ee31849a7f0e5a8->leave($__internal_a5dd925cfffba3a4dd92a0474c8feb53882b03e9cd0657e73ee31849a7f0e5a8_prof);

        
        $__internal_cb5294b1e6287498fd20aa4368e00c3427362d2d673ac29e0ac3515cc89ce4a1->leave($__internal_cb5294b1e6287498fd20aa4368e00c3427362d2d673ac29e0ac3515cc89ce4a1_prof);

    }

    // line 209
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_93cc2a986b0b318533e403e6084c725720928558d570732e3c9227d4e4ab501d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93cc2a986b0b318533e403e6084c725720928558d570732e3c9227d4e4ab501d->enter($__internal_93cc2a986b0b318533e403e6084c725720928558d570732e3c9227d4e4ab501d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_42a742b757c7911210c90ff48459f3c7483dc46f8ede3065cbf18ab50cb3cfe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a742b757c7911210c90ff48459f3c7483dc46f8ede3065cbf18ab50cb3cfe9->enter($__internal_42a742b757c7911210c90ff48459f3c7483dc46f8ede3065cbf18ab50cb3cfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 210
        echo "\t\t<div class=\"mg-book-now\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h5 class=\"mg-bn-title\">&nbsp;Recherchez <span class=\"mg-bn-big\">Par lieux & disponiblité</span></h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"mg-bn-forms\">
\t\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"form-horizontal\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<select class=\"select2 form-control\" style=\"padding: 0;\" data-placeholder=\"Choisir une localité...\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">&nbsp;</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arrondissements"] ?? $this->getContext($context, "arrondissements")));
        foreach ($context['_seq'] as $context["_key"] => $context["arrondissement"]) {
            // line 224
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<!--<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["arrondissement"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["arrondissement"], "nomArrondissement", array()), "html", null, true);
            echo "</option>-->
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["arrondissement"], "cArrondissement", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cArrondissement"]) {
                // line 226
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["arrondissement"], "id", array()) . "-") . $this->getAttribute($context["cArrondissement"], "id", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cArrondissement"], "nomCA", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cArrondissement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arrondissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-elastic\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Type d'évènement</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 235
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "nomtype", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-map-marker\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" name=\"nbreDePlaces\" id=\"nbreDePlaces\" placeholder=\"Nombre de participants\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main btn-block\">Rechercher</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        
        $__internal_42a742b757c7911210c90ff48459f3c7483dc46f8ede3065cbf18ab50cb3cfe9->leave($__internal_42a742b757c7911210c90ff48459f3c7483dc46f8ede3065cbf18ab50cb3cfe9_prof);

        
        $__internal_93cc2a986b0b318533e403e6084c725720928558d570732e3c9227d4e4ab501d->leave($__internal_93cc2a986b0b318533e403e6084c725720928558d570732e3c9227d4e4ab501d_prof);

    }

    // line 256
    public function block_offre($context, array $blocks = array())
    {
        $__internal_a239aebe5a1a53ac13c1492b82f832156ad2cd0bd5fcc2c2842d66c901c6c2cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a239aebe5a1a53ac13c1492b82f832156ad2cd0bd5fcc2c2842d66c901c6c2cd->enter($__internal_a239aebe5a1a53ac13c1492b82f832156ad2cd0bd5fcc2c2842d66c901c6c2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_9e286d86fc0cf4d9f5f21ca99822b2777959297f069a8c5968338ff2a977556f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e286d86fc0cf4d9f5f21ca99822b2777959297f069a8c5968338ff2a977556f->enter($__internal_9e286d86fc0cf4d9f5f21ca99822b2777959297f069a8c5968338ff2a977556f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 257
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
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-1.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<figure class=\"mg-room\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h2>Super Deluxe</h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
\t\t\t\t\t\t\t\t\t\t<p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main\">Book</a>
\t\t\t\t\t\t\t\t\t</figcaption>
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
        
        $__internal_9e286d86fc0cf4d9f5f21ca99822b2777959297f069a8c5968338ff2a977556f->leave($__internal_9e286d86fc0cf4d9f5f21ca99822b2777959297f069a8c5968338ff2a977556f_prof);

        
        $__internal_a239aebe5a1a53ac13c1492b82f832156ad2cd0bd5fcc2c2842d66c901c6c2cd->leave($__internal_a239aebe5a1a53ac13c1492b82f832156ad2cd0bd5fcc2c2842d66c901c6c2cd_prof);

    }

    // line 319
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_7b40b2e0f4e067b82aa793cb5e2d0899ca34f50edb1a8686fa72972c7966c933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b40b2e0f4e067b82aa793cb5e2d0899ca34f50edb1a8686fa72972c7966c933->enter($__internal_7b40b2e0f4e067b82aa793cb5e2d0899ca34f50edb1a8686fa72972c7966c933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_bcd90879274d4de8962f552202f8794d7fc1288eaa1eb031028df1cc45f59a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd90879274d4de8962f552202f8794d7fc1288eaa1eb031028df1cc45f59a0b->enter($__internal_bcd90879274d4de8962f552202f8794d7fc1288eaa1eb031028df1cc45f59a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 320
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
        
        $__internal_bcd90879274d4de8962f552202f8794d7fc1288eaa1eb031028df1cc45f59a0b->leave($__internal_bcd90879274d4de8962f552202f8794d7fc1288eaa1eb031028df1cc45f59a0b_prof);

        
        $__internal_7b40b2e0f4e067b82aa793cb5e2d0899ca34f50edb1a8686fa72972c7966c933->leave($__internal_7b40b2e0f4e067b82aa793cb5e2d0899ca34f50edb1a8686fa72972c7966c933_prof);

    }

    // line 410
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_ad0a639c003ce9016df2d8f23d5625b26a8b72e3e84fc6e44eddd7a61884e684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad0a639c003ce9016df2d8f23d5625b26a8b72e3e84fc6e44eddd7a61884e684->enter($__internal_ad0a639c003ce9016df2d8f23d5625b26a8b72e3e84fc6e44eddd7a61884e684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_0205f07c9f612497bfdd77919d4b8e8f5d999e574f650647986f93b25922d372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0205f07c9f612497bfdd77919d4b8e8f5d999e574f650647986f93b25922d372->enter($__internal_0205f07c9f612497bfdd77919d4b8e8f5d999e574f650647986f93b25922d372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        // line 411
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
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-1.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-2.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-3.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-1.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/part-logo-3.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        
        $__internal_0205f07c9f612497bfdd77919d4b8e8f5d999e574f650647986f93b25922d372->leave($__internal_0205f07c9f612497bfdd77919d4b8e8f5d999e574f650647986f93b25922d372_prof);

        
        $__internal_ad0a639c003ce9016df2d8f23d5625b26a8b72e3e84fc6e44eddd7a61884e684->leave($__internal_ad0a639c003ce9016df2d8f23d5625b26a8b72e3e84fc6e44eddd7a61884e684_prof);

    }

    // line 445
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_093de5d4dadef727065cbdf255d75204a55523725f21e81acc79c94f37731a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093de5d4dadef727065cbdf255d75204a55523725f21e81acc79c94f37731a47->enter($__internal_093de5d4dadef727065cbdf255d75204a55523725f21e81acc79c94f37731a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_16f5311419f95b5815492e1be0095012c4bf3b8fbab721ee97e0b4be737045dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f5311419f95b5815492e1be0095012c4bf3b8fbab721ee97e0b4be737045dc->enter($__internal_16f5311419f95b5815492e1be0095012c4bf3b8fbab721ee97e0b4be737045dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        // line 446
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
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-01.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-02.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-05.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-06.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-07.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-08.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-01.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-02.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-05.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-06.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-07.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/gallery-thumb-08.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        
        $__internal_16f5311419f95b5815492e1be0095012c4bf3b8fbab721ee97e0b4be737045dc->leave($__internal_16f5311419f95b5815492e1be0095012c4bf3b8fbab721ee97e0b4be737045dc_prof);

        
        $__internal_093de5d4dadef727065cbdf255d75204a55523725f21e81acc79c94f37731a47->leave($__internal_093de5d4dadef727065cbdf255d75204a55523725f21e81acc79c94f37731a47_prof);

    }

    // line 501
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ecd27107c16ef0278ac353ab19d4f24dc953a63da416e39c05a31c593fc5de02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd27107c16ef0278ac353ab19d4f24dc953a63da416e39c05a31c593fc5de02->enter($__internal_ecd27107c16ef0278ac353ab19d4f24dc953a63da416e39c05a31c593fc5de02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c92b2f7379b519098c02a5849741d31e8303268c924f9006bc44282042e72f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92b2f7379b519098c02a5849741d31e8303268c924f9006bc44282042e72f58->enter($__internal_c92b2f7379b519098c02a5849741d31e8303268c924f9006bc44282042e72f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 502
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

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t+221 78 173 54 79<br>
\t\t\t\t\t\t\t\t\t+221 77 373 19 36
\t\t\t\t\t\t\t\t</p>

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
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-01.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-02.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-03.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-04.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-05.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-06.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-07.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/ins-08.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 537
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
        
        $__internal_c92b2f7379b519098c02a5849741d31e8303268c924f9006bc44282042e72f58->leave($__internal_c92b2f7379b519098c02a5849741d31e8303268c924f9006bc44282042e72f58_prof);

        
        $__internal_ecd27107c16ef0278ac353ab19d4f24dc953a63da416e39c05a31c593fc5de02->leave($__internal_ecd27107c16ef0278ac353ab19d4f24dc953a63da416e39c05a31c593fc5de02_prof);

    }

    // line 600
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c84ae0ce2189f93afb5e372aef51015bfeb722c1ac2ef35c148cea78b06bbb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c84ae0ce2189f93afb5e372aef51015bfeb722c1ac2ef35c148cea78b06bbb6->enter($__internal_0c84ae0ce2189f93afb5e372aef51015bfeb722c1ac2ef35c148cea78b06bbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_591794025f985a0190fe402a83619380c4c1273183b7e5e96bccaeb7fee145ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591794025f985a0190fe402a83619380c4c1273183b7e5e96bccaeb7fee145ca->enter($__internal_591794025f985a0190fe402a83619380c4c1273183b7e5e96bccaeb7fee145ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 601
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t<script src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.formtowizard.js "), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/autocomplete/ac.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t<script src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/jssor.slider.mini.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/selectFx.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/starrr.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/jquery.shuffle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
\t\t<script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/gmaps.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/js/script.js"), "html", null, true);
        echo "\"></script>
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.9/js/all.js\" integrity=\"sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_591794025f985a0190fe402a83619380c4c1273183b7e5e96bccaeb7fee145ca->leave($__internal_591794025f985a0190fe402a83619380c4c1273183b7e5e96bccaeb7fee145ca_prof);

        
        $__internal_0c84ae0ce2189f93afb5e372aef51015bfeb722c1ac2ef35c148cea78b06bbb6->leave($__internal_0c84ae0ce2189f93afb5e372aef51015bfeb722c1ac2ef35c148cea78b06bbb6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1346 => 619,  1342 => 618,  1338 => 617,  1333 => 615,  1329 => 614,  1325 => 613,  1321 => 612,  1317 => 611,  1313 => 610,  1309 => 609,  1305 => 608,  1301 => 607,  1296 => 605,  1292 => 604,  1288 => 603,  1284 => 602,  1281 => 601,  1272 => 600,  1206 => 537,  1202 => 536,  1198 => 535,  1194 => 534,  1190 => 533,  1186 => 532,  1182 => 531,  1178 => 530,  1174 => 529,  1145 => 502,  1136 => 501,  1118 => 493,  1114 => 492,  1110 => 491,  1106 => 490,  1102 => 489,  1098 => 488,  1092 => 485,  1088 => 484,  1084 => 483,  1080 => 482,  1076 => 481,  1072 => 480,  1036 => 446,  1027 => 445,  1010 => 438,  1006 => 437,  1002 => 436,  998 => 435,  994 => 434,  969 => 411,  960 => 410,  862 => 320,  853 => 319,  819 => 295,  803 => 282,  787 => 269,  773 => 257,  764 => 256,  736 => 237,  725 => 235,  721 => 234,  714 => 229,  708 => 228,  697 => 226,  693 => 225,  686 => 224,  682 => 223,  667 => 210,  658 => 209,  630 => 191,  625 => 189,  611 => 178,  606 => 176,  591 => 164,  586 => 162,  573 => 151,  564 => 150,  554 => 148,  545 => 147,  512 => 129,  493 => 119,  483 => 118,  475 => 113,  462 => 102,  453 => 101,  380 => 647,  376 => 646,  372 => 645,  368 => 644,  364 => 643,  359 => 641,  354 => 639,  349 => 637,  345 => 636,  341 => 635,  337 => 634,  333 => 633,  329 => 632,  325 => 631,  321 => 630,  311 => 622,  309 => 600,  300 => 593,  297 => 501,  294 => 445,  292 => 410,  289 => 409,  286 => 319,  283 => 256,  280 => 209,  278 => 150,  275 => 149,  273 => 147,  270 => 146,  268 => 101,  265 => 100,  256 => 99,  244 => 93,  233 => 85,  229 => 84,  225 => 83,  221 => 82,  217 => 81,  213 => 80,  209 => 79,  205 => 78,  200 => 76,  195 => 75,  186 => 74,  168 => 5,  156 => 710,  154 => 99,  148 => 96,  145 => 95,  143 => 74,  137 => 71,  133 => 70,  128 => 68,  124 => 67,  120 => 66,  116 => 65,  112 => 64,  106 => 61,  102 => 60,  44 => 5,  38 => 1,);
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
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <!-- Début bloc CSS -->
        <style>
\t\t\t/*.select2-result-label{
\t\t\t\tbackground-color: yellow;
\t\t\t}*/
            .nav>li>a:hover{
                padding-bottom: 35px;
                border-bottom: 3px solid #e7b315;
            }

\t\t\t.wrap {
            \tmargin: 10px auto 0;
\t\t\t}

\t\t\t#steps {
\t\t\t\tmargin: 80px 0 0 0
\t\t\t}

\t\t\t.commands {
\t\t\t\toverflow: hidden;
\t\t\t\tmargin-top: 30px;
\t\t\t}

\t\t\t.prev {
\t\t\t\tfloat: left
\t\t\t}

\t\t\t.next,
\t\t\t.submit {
\t\t\t\tfloat: right
\t\t\t}

\t\t\t.error {
\t\t\t\tcolor: #b33;
\t\t\t}

\t\t\t#progress {
\t\t\t\tposition: relative;
\t\t\t\theight: 5px;
\t\t\t\tbackground-color: #eee;
\t\t\t\tmargin-bottom: 20px;
\t\t\t}

\t\t\t#progress-complete {
\t\t\t\tborder: 0;
\t\t\t\tposition: absolute;
\t\t\t\theight: 5px;
\t\t\t\tmin-width: 10px;
\t\t\t\tbackground-color: #337ab7;
\t\t\t\ttransition: width .2s ease-in-out;
\t\t\t}
\t\t</style>


\t\t<script src=\"{{asset ('assets/nprogress-master/nprogress.js')}}\"></script>
\t\t<link rel='stylesheet' href=\"{{asset ('assets/nprogress-master/nprogress.css')}}\"/>

\t\t<!-- Plugins css-->
        <!--<link href=\"{{asset ('ac/assets/plugins/tagsinput/jquery.tagsinput.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('ac/assets/plugins/toggles/toggles.css')}}\" rel=\"stylesheet\">-->
        <link href=\"{{asset ('ac/assets/plugins/jquery-multi-select/multi-select.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('ac/assets/plugins/select2/dist/css/select2.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('ac/assets/plugins/select2/dist/css/select2-bootstrap.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{asset ('ac/assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('ac/assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">


        {% block stylesheets %}
        <link href=\"{{asset ('assets/template/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/font-awesome.min.css')}}\" rel=\"stylesheet\">

\t\t<link href=\"{{asset ('assets/template/css/owl.carousel.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/owl.theme.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/owl.transitions.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/cs-select.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/bootstrap-datepicker3.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/freepik.hotels.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/style.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/autocomplete/ac.css')}}\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.min.js\"></script>
\t\t<script src=\"js/respond.min.js\"></script>
\t\t<![endif]-->
\t\t<script src=\"{{asset ('assets/template/js/modernizr.custom.min.js')}}\"></script>
        {% endblock %}
        <!-- Fin bloc CSS -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('senoffice.ico') }}\" />
    </head>
    <body>
    {% block body %}
        <div class=\"preloader\"></div>
        {% block header %}
\t\t<header id=\"leheader\" class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
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
\t\t\t\t\t\t\t<li  class=\"{% if activeA is defined %} {{ activeA }} {% endif %}\"><a href=\"{{'/sen-office/accueil'}}\">Accueil</a></li>
\t\t\t\t\t\t\t<li class=\"{% if activeC is defined %} {{ activeC }} {% endif %}\"><a href=\"{{'/sen-office/catalogue'}}\">Catalogue</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Espace client<span class=\"caret\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"signin.html\">Connexion</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Inscription</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"{% if activePS is defined %} {{ activePS }} {% endif %}\"><a href=\"{{'/sen-office/partager/salle'}}\">Partagez votre salle</a></li>
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

        {% block titre %}
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
\t\t\t\t\t\t<p>Vos séminaires et réunions dans le lieu idéal</p>
                        <div class=\"col-md-3 \">
                        </div>
\t\t\t\t\t\t<div class=\"col-md-4\" style=\"margin-left: 9%;\">
\t\t\t\t\t\t    <center><button type=\"submit\" class=\"btn btn-main btn-block\">Comment ça marche?</button></center>
                        </div>
                    </div>
                </div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{asset ('assets/template/images/slide-2.png')}}\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/stars.png')}}\" alt=\"\">
\t\t\t\t\t\t<h2>Sen Office</h2>
\t\t\t\t\t\t<p>Pour faire de chaque rencontre un moment qui vous inspire.</p>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t</div>
                        <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                            <center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"{{asset ('assets/template/images/slide-3.png')}}\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<img src=\"{{asset ('assets/template/images/stars.png')}}\" alt=\"\">
\t\t\t\t\t\t<h2>Sen Office</h2>
\t\t\t\t\t\t<p>L'endroit parfait pour vos événements.</p>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t</div>
                        <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                            <center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
                        </div>
\t\t\t\t\t</div>
                </div>
\t\t\t    <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
                </a>
                <a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
                </a>
            </div>
        </div>
        {% endblock %}
        {% block recherche %}
\t\t<div class=\"mg-book-now\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<h5 class=\"mg-bn-title\">&nbsp;Recherchez <span class=\"mg-bn-big\">Par lieux & disponiblité</span></h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"mg-bn-forms\">
\t\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"form-horizontal\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<select class=\"select2 form-control\" style=\"padding: 0;\" data-placeholder=\"Choisir une localité...\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">&nbsp;</option>
\t\t\t\t\t\t\t\t\t\t\t{% for arrondissement in arrondissements %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--<option value=\"{{arrondissement.id}}\">{{arrondissement.nomArrondissement}}</option>-->
\t\t\t\t\t\t\t\t\t\t\t\t{% for cArrondissement in arrondissement.cArrondissement %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{arrondissement.id ~ '-' ~ cArrondissement.id}}\">{{cArrondissement.nomCA}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-elastic\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Type d'évènement</option>
\t\t\t\t\t\t\t\t\t\t\t{% for type in types %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{type.id}}\">{{type.nomtype}}</option>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><i class=\"fa fa-map-marker\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" name=\"nbreDePlaces\" id=\"nbreDePlaces\" placeholder=\"Nombre de participants\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main btn-block\">Rechercher</button>
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
\t\t\t\t\t\t\t\t\t</figcaption>
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
\t\t\t\t\t\t\t\t\t</figcaption>
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
\t\t\t\t\t\t\t\t\t</figcaption>
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

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t+221 78 173 54 79<br>
\t\t\t\t\t\t\t\t\t+221 77 373 19 36
\t\t\t\t\t\t\t\t</p>

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
        <!-- Début bloc script -->
\t\t<script>
            if (window.location.href !== \"http://127.0.0.1:8000/sen-office/accueil\") {
\t\t\t\tvar lenav = document.getElementById(\"leheader\").children[0];
\t\t\t\tlenav.setAttribute(\"style\", \"background-color: rgba(22, 38, 46, 0.95);\");
            }
        </script>
        {% block javascripts %}
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t<script src=\"{{asset ('assets/template/js/jquery.min.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/js/jquery.validate.js')}}\"></script>
\t\t<script src=\"{{asset ('assets/js/jquery.formtowizard.js ')}}\"></script>
\t\t<script src=\"{{asset ('assets/autocomplete/ac.js')}}\"></script>
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
        {% endblock %}
\t\t<!-- Fin bloc script -->


\t\t<script>
            var resizefunc = [];
        </script>

\t\t<!-- Main  -->
        <script src=\"{{asset ('ac/assets/js/detect.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/fastclick.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/waves.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/wow.min.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"{{asset ('ac/assets/js/jquery.app.js')}}\"></script>

        <script src=\"{{asset ('ac/assets/plugins/select2/dist/js/select2.min.js')}}\" type=\"text/javascript\"></script>

        <script src=\"{{asset ('ac/assets/plugins/tagsinput/jquery.tagsinput.min.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/plugins/toggles/toggles.min.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/plugins/jquery-multi-select/jquery.quicksearch.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset ('ac/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset ('ac/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}\" type=\"text/javascript\"></script>


        <script>
            jQuery(document).ready(function() {

                // Select2
                jQuery(\".select2\").select2({
\t\t\t\t\twidth: '100%'
\t\t\t\t});
\t\t\t\tif(document.getElementById(\"select2-chosen-2\") != null) {
\t\t\t\t\tdocument.getElementById(\"select2-chosen-2\").setAttribute(\"style\", \"color: white\");
\t\t\t\t}
            });
        </script>
\t\t<script>
\t\t\t\$(function() {
\t\t\t\tvar \$signupForm = \$('#SignupForm');

\t\t\t\t\$signupForm.validate({
\t\t\t\t\terrorElement: 'em',
\t\t\t\t\tsubmitHandler: function(form) {
\t\t\t\t\t\talert('submitted');
\t\t\t\t\t\tform.submit();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$signupForm.formToWizard({
\t\t\t\t\tsubmitButton: 'SaveAccount',
\t\t\t\t\tnextBtnClass: 'btn btn-primary next',
\t\t\t\t\tprevBtnClass: 'btn btn-default prev',
\t\t\t\t\tbuttonTag: 'button',
\t\t\t\t\tvalidateBeforeNext: function(form, step) {
\t\t\t\t\t\tvar stepIsValid = true;
\t\t\t\t\t\tvar validator = form.validate();
\t\t\t\t\t\t\$(':input', step).each(function(index) {
\t\t\t\t\t\t\tvar xy = validator.element(this);
\t\t\t\t\t\t\tstepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
\t\t\t\t\t\t});
\t\t\t\t\t\treturn stepIsValid;
\t\t\t\t\t},
\t\t\t\t\tprogress: function(i, count) {
\t\t\t\t\t\t\$('#progress-complete').width('' + (i / count * 100) + '%');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\t/*document.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t\tvar elements = document.getElementsByTagName(\"INPUT\");
\t\t\t\tfor (var i = 0; i < elements.length; i++) {
\t\t\t\t\telements[i].oninvalid = function(e) {
\t\t\t\t\t\te.target.setCustomValidity(\"\");
\t\t\t\t\t\tif (!e.target.validity.valid) {
\t\t\t\t\t\t\te.target.setCustomValidity(\"This field cannot be left blank\");
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t\telements[i].oninput = function(e) {
\t\t\t\t\t\te.target.setCustomValidity(\"\");
\t\t\t\t\t};
\t\t\t\t}
\t\t\t});*/
\t\t</script>
    {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/app/Resources/views/base.html.twig");
    }
}
