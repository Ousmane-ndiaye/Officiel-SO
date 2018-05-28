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
        $__internal_d425f5553fc25a905830f3ea817b60388fc086502528a95a8ef5ef2682b3a1d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d425f5553fc25a905830f3ea817b60388fc086502528a95a8ef5ef2682b3a1d4->enter($__internal_d425f5553fc25a905830f3ea817b60388fc086502528a95a8ef5ef2682b3a1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_cf59aef01807e4fd89cec2f5ba06b4a6ee3f56957591b5ee5cef2acfdda27ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf59aef01807e4fd89cec2f5ba06b4a6ee3f56957591b5ee5cef2acfdda27ffe->enter($__internal_cf59aef01807e4fd89cec2f5ba06b4a6ee3f56957591b5ee5cef2acfdda27ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d425f5553fc25a905830f3ea817b60388fc086502528a95a8ef5ef2682b3a1d4->leave($__internal_d425f5553fc25a905830f3ea817b60388fc086502528a95a8ef5ef2682b3a1d4_prof);

        
        $__internal_cf59aef01807e4fd89cec2f5ba06b4a6ee3f56957591b5ee5cef2acfdda27ffe->leave($__internal_cf59aef01807e4fd89cec2f5ba06b4a6ee3f56957591b5ee5cef2acfdda27ffe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7a7f29ab9c22993fbcd7392cefdaeb01ee68bb67c2b33927b3c3627bc8278f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a7f29ab9c22993fbcd7392cefdaeb01ee68bb67c2b33927b3c3627bc8278f3->enter($__internal_f7a7f29ab9c22993fbcd7392cefdaeb01ee68bb67c2b33927b3c3627bc8278f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b06a474d3fcb2653a7a5f7aad59053d2855691d43ab1294cee5b0265f13d8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b06a474d3fcb2653a7a5f7aad59053d2855691d43ab1294cee5b0265f13d8e8->enter($__internal_6b06a474d3fcb2653a7a5f7aad59053d2855691d43ab1294cee5b0265f13d8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6b06a474d3fcb2653a7a5f7aad59053d2855691d43ab1294cee5b0265f13d8e8->leave($__internal_6b06a474d3fcb2653a7a5f7aad59053d2855691d43ab1294cee5b0265f13d8e8_prof);

        
        $__internal_f7a7f29ab9c22993fbcd7392cefdaeb01ee68bb67c2b33927b3c3627bc8278f3->leave($__internal_f7a7f29ab9c22993fbcd7392cefdaeb01ee68bb67c2b33927b3c3627bc8278f3_prof);

    }

    // line 74
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35ff7cfd3a54d807901344dcd9defbfb1f4dc0537fb476a9c000ef80889f9f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ff7cfd3a54d807901344dcd9defbfb1f4dc0537fb476a9c000ef80889f9f3f->enter($__internal_35ff7cfd3a54d807901344dcd9defbfb1f4dc0537fb476a9c000ef80889f9f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b8dd5782137e90f42320ed8b7fdbb44167750be4ad84b98ee1ddd81fcce3b87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8dd5782137e90f42320ed8b7fdbb44167750be4ad84b98ee1ddd81fcce3b87a->enter($__internal_b8dd5782137e90f42320ed8b7fdbb44167750be4ad84b98ee1ddd81fcce3b87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b8dd5782137e90f42320ed8b7fdbb44167750be4ad84b98ee1ddd81fcce3b87a->leave($__internal_b8dd5782137e90f42320ed8b7fdbb44167750be4ad84b98ee1ddd81fcce3b87a_prof);

        
        $__internal_35ff7cfd3a54d807901344dcd9defbfb1f4dc0537fb476a9c000ef80889f9f3f->leave($__internal_35ff7cfd3a54d807901344dcd9defbfb1f4dc0537fb476a9c000ef80889f9f3f_prof);

    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb9732b2732eac5023b4de3150be1d19ed76db71e51d0bee6198d8002b04321e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9732b2732eac5023b4de3150be1d19ed76db71e51d0bee6198d8002b04321e->enter($__internal_bb9732b2732eac5023b4de3150be1d19ed76db71e51d0bee6198d8002b04321e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_355d4d7d326bc6df12e1349d8cd63e226baa216a5375266ae2d2ebb106eb432c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355d4d7d326bc6df12e1349d8cd63e226baa216a5375266ae2d2ebb106eb432c->enter($__internal_355d4d7d326bc6df12e1349d8cd63e226baa216a5375266ae2d2ebb106eb432c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_355d4d7d326bc6df12e1349d8cd63e226baa216a5375266ae2d2ebb106eb432c->leave($__internal_355d4d7d326bc6df12e1349d8cd63e226baa216a5375266ae2d2ebb106eb432c_prof);

        
        $__internal_bb9732b2732eac5023b4de3150be1d19ed76db71e51d0bee6198d8002b04321e->leave($__internal_bb9732b2732eac5023b4de3150be1d19ed76db71e51d0bee6198d8002b04321e_prof);

    }

    // line 101
    public function block_header($context, array $blocks = array())
    {
        $__internal_baada5f6b24d966cccd99210c09ccb81ba28ab70a25001e22f1d4e6f728b77b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baada5f6b24d966cccd99210c09ccb81ba28ab70a25001e22f1d4e6f728b77b1->enter($__internal_baada5f6b24d966cccd99210c09ccb81ba28ab70a25001e22f1d4e6f728b77b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_4953f2018ecb083fd29f153b555af3cc08650c55a20e81fd91f31c22a15040da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4953f2018ecb083fd29f153b555af3cc08650c55a20e81fd91f31c22a15040da->enter($__internal_4953f2018ecb083fd29f153b555af3cc08650c55a20e81fd91f31c22a15040da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_4953f2018ecb083fd29f153b555af3cc08650c55a20e81fd91f31c22a15040da->leave($__internal_4953f2018ecb083fd29f153b555af3cc08650c55a20e81fd91f31c22a15040da_prof);

        
        $__internal_baada5f6b24d966cccd99210c09ccb81ba28ab70a25001e22f1d4e6f728b77b1->leave($__internal_baada5f6b24d966cccd99210c09ccb81ba28ab70a25001e22f1d4e6f728b77b1_prof);

    }

    // line 147
    public function block_titre($context, array $blocks = array())
    {
        $__internal_911e2defa48526c5c0f7f4ef796b4ff5fd94d5e00543fbc6022ac43b4ac0a1ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911e2defa48526c5c0f7f4ef796b4ff5fd94d5e00543fbc6022ac43b4ac0a1ea->enter($__internal_911e2defa48526c5c0f7f4ef796b4ff5fd94d5e00543fbc6022ac43b4ac0a1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_521a12f197e53e53b71e178406262c0a1ae96082263a5b5d0ca0ae9d0527fbc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521a12f197e53e53b71e178406262c0a1ae96082263a5b5d0ca0ae9d0527fbc7->enter($__internal_521a12f197e53e53b71e178406262c0a1ae96082263a5b5d0ca0ae9d0527fbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 148
        echo "        ";
        
        $__internal_521a12f197e53e53b71e178406262c0a1ae96082263a5b5d0ca0ae9d0527fbc7->leave($__internal_521a12f197e53e53b71e178406262c0a1ae96082263a5b5d0ca0ae9d0527fbc7_prof);

        
        $__internal_911e2defa48526c5c0f7f4ef796b4ff5fd94d5e00543fbc6022ac43b4ac0a1ea->leave($__internal_911e2defa48526c5c0f7f4ef796b4ff5fd94d5e00543fbc6022ac43b4ac0a1ea_prof);

    }

    // line 150
    public function block_slide($context, array $blocks = array())
    {
        $__internal_3c3d025fa8431876ba0ff19840358ea9a12e9794b4a6246d9b2e9b240582b3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3d025fa8431876ba0ff19840358ea9a12e9794b4a6246d9b2e9b240582b3ac->enter($__internal_3c3d025fa8431876ba0ff19840358ea9a12e9794b4a6246d9b2e9b240582b3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_e94b5b9078a6929007cd27aaaba21a61e1c2f207418f2026dde8f3dcae659c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94b5b9078a6929007cd27aaaba21a61e1c2f207418f2026dde8f3dcae659c2d->enter($__internal_e94b5b9078a6929007cd27aaaba21a61e1c2f207418f2026dde8f3dcae659c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

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
        
        $__internal_e94b5b9078a6929007cd27aaaba21a61e1c2f207418f2026dde8f3dcae659c2d->leave($__internal_e94b5b9078a6929007cd27aaaba21a61e1c2f207418f2026dde8f3dcae659c2d_prof);

        
        $__internal_3c3d025fa8431876ba0ff19840358ea9a12e9794b4a6246d9b2e9b240582b3ac->leave($__internal_3c3d025fa8431876ba0ff19840358ea9a12e9794b4a6246d9b2e9b240582b3ac_prof);

    }

    // line 209
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_ce3b0e8431b2d9bb77a6c4c06703babd52fafd8dc846d8db71ffdbe85a31df9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3b0e8431b2d9bb77a6c4c06703babd52fafd8dc846d8db71ffdbe85a31df9b->enter($__internal_ce3b0e8431b2d9bb77a6c4c06703babd52fafd8dc846d8db71ffdbe85a31df9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_bbec0b9ee005f5710dfebb56d414fd0a121677b1ffc09016b3aed9197ba8f340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbec0b9ee005f5710dfebb56d414fd0a121677b1ffc09016b3aed9197ba8f340->enter($__internal_bbec0b9ee005f5710dfebb56d414fd0a121677b1ffc09016b3aed9197ba8f340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

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
        
        $__internal_bbec0b9ee005f5710dfebb56d414fd0a121677b1ffc09016b3aed9197ba8f340->leave($__internal_bbec0b9ee005f5710dfebb56d414fd0a121677b1ffc09016b3aed9197ba8f340_prof);

        
        $__internal_ce3b0e8431b2d9bb77a6c4c06703babd52fafd8dc846d8db71ffdbe85a31df9b->leave($__internal_ce3b0e8431b2d9bb77a6c4c06703babd52fafd8dc846d8db71ffdbe85a31df9b_prof);

    }

    // line 256
    public function block_offre($context, array $blocks = array())
    {
        $__internal_525a5bff86adaa735dbbc204e885bd501e8e49012a95377a750424b4ba69949c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525a5bff86adaa735dbbc204e885bd501e8e49012a95377a750424b4ba69949c->enter($__internal_525a5bff86adaa735dbbc204e885bd501e8e49012a95377a750424b4ba69949c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_7a85fe1aecb7e8cbff767283e3a1a69baf9356e989b6a5f80da5922eaf1162e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a85fe1aecb7e8cbff767283e3a1a69baf9356e989b6a5f80da5922eaf1162e4->enter($__internal_7a85fe1aecb7e8cbff767283e3a1a69baf9356e989b6a5f80da5922eaf1162e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

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
        
        $__internal_7a85fe1aecb7e8cbff767283e3a1a69baf9356e989b6a5f80da5922eaf1162e4->leave($__internal_7a85fe1aecb7e8cbff767283e3a1a69baf9356e989b6a5f80da5922eaf1162e4_prof);

        
        $__internal_525a5bff86adaa735dbbc204e885bd501e8e49012a95377a750424b4ba69949c->leave($__internal_525a5bff86adaa735dbbc204e885bd501e8e49012a95377a750424b4ba69949c_prof);

    }

    // line 319
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_17c781b3317e3e41fd4a000b0c3259cc9bf8e7cfc524feafbc6066c9c8ac2213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c781b3317e3e41fd4a000b0c3259cc9bf8e7cfc524feafbc6066c9c8ac2213->enter($__internal_17c781b3317e3e41fd4a000b0c3259cc9bf8e7cfc524feafbc6066c9c8ac2213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_c14a6de242efa3a532eb4a3091635bc66fd1662827f35caccf494f84fc83f2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14a6de242efa3a532eb4a3091635bc66fd1662827f35caccf494f84fc83f2bd->enter($__internal_c14a6de242efa3a532eb4a3091635bc66fd1662827f35caccf494f84fc83f2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

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
        
        $__internal_c14a6de242efa3a532eb4a3091635bc66fd1662827f35caccf494f84fc83f2bd->leave($__internal_c14a6de242efa3a532eb4a3091635bc66fd1662827f35caccf494f84fc83f2bd_prof);

        
        $__internal_17c781b3317e3e41fd4a000b0c3259cc9bf8e7cfc524feafbc6066c9c8ac2213->leave($__internal_17c781b3317e3e41fd4a000b0c3259cc9bf8e7cfc524feafbc6066c9c8ac2213_prof);

    }

    // line 410
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_75f2730123e2d05ce6273c935cb1842267233f5a627328ca0d56500199a545e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f2730123e2d05ce6273c935cb1842267233f5a627328ca0d56500199a545e9->enter($__internal_75f2730123e2d05ce6273c935cb1842267233f5a627328ca0d56500199a545e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_0dbcaccaa4cc7a4dbdf1a0fed09f2c0889e21d870fca0d8b862fb13c32ef351b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbcaccaa4cc7a4dbdf1a0fed09f2c0889e21d870fca0d8b862fb13c32ef351b->enter($__internal_0dbcaccaa4cc7a4dbdf1a0fed09f2c0889e21d870fca0d8b862fb13c32ef351b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

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
        
        $__internal_0dbcaccaa4cc7a4dbdf1a0fed09f2c0889e21d870fca0d8b862fb13c32ef351b->leave($__internal_0dbcaccaa4cc7a4dbdf1a0fed09f2c0889e21d870fca0d8b862fb13c32ef351b_prof);

        
        $__internal_75f2730123e2d05ce6273c935cb1842267233f5a627328ca0d56500199a545e9->leave($__internal_75f2730123e2d05ce6273c935cb1842267233f5a627328ca0d56500199a545e9_prof);

    }

    // line 445
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_5dd558c24af1f2c1cfad4cac98fdcd6097ea93581a2029b0c17b099ff70d7ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd558c24af1f2c1cfad4cac98fdcd6097ea93581a2029b0c17b099ff70d7ffc->enter($__internal_5dd558c24af1f2c1cfad4cac98fdcd6097ea93581a2029b0c17b099ff70d7ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_34fc24a11a37fd36bbcf569b97b7da81a78472ec0caa80eddd4a0c0f42fdc912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fc24a11a37fd36bbcf569b97b7da81a78472ec0caa80eddd4a0c0f42fdc912->enter($__internal_34fc24a11a37fd36bbcf569b97b7da81a78472ec0caa80eddd4a0c0f42fdc912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

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
        
        $__internal_34fc24a11a37fd36bbcf569b97b7da81a78472ec0caa80eddd4a0c0f42fdc912->leave($__internal_34fc24a11a37fd36bbcf569b97b7da81a78472ec0caa80eddd4a0c0f42fdc912_prof);

        
        $__internal_5dd558c24af1f2c1cfad4cac98fdcd6097ea93581a2029b0c17b099ff70d7ffc->leave($__internal_5dd558c24af1f2c1cfad4cac98fdcd6097ea93581a2029b0c17b099ff70d7ffc_prof);

    }

    // line 501
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2dd8e760b39ebfc7135e237418605a06bc27d6327ea8dba6eb22ab2574f2e041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd8e760b39ebfc7135e237418605a06bc27d6327ea8dba6eb22ab2574f2e041->enter($__internal_2dd8e760b39ebfc7135e237418605a06bc27d6327ea8dba6eb22ab2574f2e041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_d2631029cb956f11b53176c8e113c3a951f442ac3c8ed8b90f502d5a3dfc1556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2631029cb956f11b53176c8e113c3a951f442ac3c8ed8b90f502d5a3dfc1556->enter($__internal_d2631029cb956f11b53176c8e113c3a951f442ac3c8ed8b90f502d5a3dfc1556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_d2631029cb956f11b53176c8e113c3a951f442ac3c8ed8b90f502d5a3dfc1556->leave($__internal_d2631029cb956f11b53176c8e113c3a951f442ac3c8ed8b90f502d5a3dfc1556_prof);

        
        $__internal_2dd8e760b39ebfc7135e237418605a06bc27d6327ea8dba6eb22ab2574f2e041->leave($__internal_2dd8e760b39ebfc7135e237418605a06bc27d6327ea8dba6eb22ab2574f2e041_prof);

    }

    // line 600
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a756c9265d64ae56ae80d91f84833b2344796a0fc43f752d29f70dba72682701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a756c9265d64ae56ae80d91f84833b2344796a0fc43f752d29f70dba72682701->enter($__internal_a756c9265d64ae56ae80d91f84833b2344796a0fc43f752d29f70dba72682701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_56dde4c615fe43cfe90150db88083eaff7f92fdb652ede413e44a7903494b8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56dde4c615fe43cfe90150db88083eaff7f92fdb652ede413e44a7903494b8f6->enter($__internal_56dde4c615fe43cfe90150db88083eaff7f92fdb652ede413e44a7903494b8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_56dde4c615fe43cfe90150db88083eaff7f92fdb652ede413e44a7903494b8f6->leave($__internal_56dde4c615fe43cfe90150db88083eaff7f92fdb652ede413e44a7903494b8f6_prof);

        
        $__internal_a756c9265d64ae56ae80d91f84833b2344796a0fc43f752d29f70dba72682701->leave($__internal_a756c9265d64ae56ae80d91f84833b2344796a0fc43f752d29f70dba72682701_prof);

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
