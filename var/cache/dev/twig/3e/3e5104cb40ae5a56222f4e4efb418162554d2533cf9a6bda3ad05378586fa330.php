<?php

/* SenofficeBundle:Front:ajout-salle.html.twig */
class __TwigTemplate_a765b65cb15164f641119817b1d08ac7674bf3620a60be242f2d544fa683ab84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SenofficeBundle:Front:ajout-salle.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d22f94af72a51ee0b0a6f86b4d8b9f07bde2780be2f83b621c3776ef5c0ae58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d22f94af72a51ee0b0a6f86b4d8b9f07bde2780be2f83b621c3776ef5c0ae58->enter($__internal_0d22f94af72a51ee0b0a6f86b4d8b9f07bde2780be2f83b621c3776ef5c0ae58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:ajout-salle.html.twig"));

        $__internal_e69ce03240e287a5aece3acd819fc1fb6fd24bca64153d6f67a704770fae42f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69ce03240e287a5aece3acd819fc1fb6fd24bca64153d6f67a704770fae42f4->enter($__internal_e69ce03240e287a5aece3acd819fc1fb6fd24bca64153d6f67a704770fae42f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:ajout-salle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d22f94af72a51ee0b0a6f86b4d8b9f07bde2780be2f83b621c3776ef5c0ae58->leave($__internal_0d22f94af72a51ee0b0a6f86b4d8b9f07bde2780be2f83b621c3776ef5c0ae58_prof);

        
        $__internal_e69ce03240e287a5aece3acd819fc1fb6fd24bca64153d6f67a704770fae42f4->leave($__internal_e69ce03240e287a5aece3acd819fc1fb6fd24bca64153d6f67a704770fae42f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_613bf423a8fbd3d03ed215c807aa48e5e333c50c6958dba4c53ec464254435f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613bf423a8fbd3d03ed215c807aa48e5e333c50c6958dba4c53ec464254435f9->enter($__internal_613bf423a8fbd3d03ed215c807aa48e5e333c50c6958dba4c53ec464254435f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03313486e341bf1c3a6216be9fdab7186952e1fafe8dd7794d2bce7376e61247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03313486e341bf1c3a6216be9fdab7186952e1fafe8dd7794d2bce7376e61247->enter($__internal_03313486e341bf1c3a6216be9fdab7186952e1fafe8dd7794d2bce7376e61247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partager votre salle";
        
        $__internal_03313486e341bf1c3a6216be9fdab7186952e1fafe8dd7794d2bce7376e61247->leave($__internal_03313486e341bf1c3a6216be9fdab7186952e1fafe8dd7794d2bce7376e61247_prof);

        
        $__internal_613bf423a8fbd3d03ed215c807aa48e5e333c50c6958dba4c53ec464254435f9->leave($__internal_613bf423a8fbd3d03ed215c807aa48e5e333c50c6958dba4c53ec464254435f9_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_409f7074dc12b28b5171ba32cd6ee3b373f43a27e14cc44023f2562b589ee9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_409f7074dc12b28b5171ba32cd6ee3b373f43a27e14cc44023f2562b589ee9b0->enter($__internal_409f7074dc12b28b5171ba32cd6ee3b373f43a27e14cc44023f2562b589ee9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_31292a2ab59bba10d90285dd9e754c2ab59ffbad68976ded932466dd280757da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31292a2ab59bba10d90285dd9e754c2ab59ffbad68976ded932466dd280757da->enter($__internal_31292a2ab59bba10d90285dd9e754c2ab59ffbad68976ded932466dd280757da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<style>
.nav-tabs {
    margin-bottom: 15px;
}
.sign-with {
    margin-top: 25px;
    padding: 20px;
}
div#OR {
    height: 30px;
    width: 30px;
    border: 1px solid #C2C2C2;
    border-radius: 50%;
    font-weight: bold;
    line-height: 28px;
    text-align: center;
    font-size: 12px;
    float: right;
    position: absolute;
    right: -16px;
    top: 40%;
    z-index: 1;
    background: #DFDFDF;
}
</style>
";
        
        $__internal_31292a2ab59bba10d90285dd9e754c2ab59ffbad68976ded932466dd280757da->leave($__internal_31292a2ab59bba10d90285dd9e754c2ab59ffbad68976ded932466dd280757da_prof);

        
        $__internal_409f7074dc12b28b5171ba32cd6ee3b373f43a27e14cc44023f2562b589ee9b0->leave($__internal_409f7074dc12b28b5171ba32cd6ee3b373f43a27e14cc44023f2562b589ee9b0_prof);

    }

    // line 36
    public function block_slide($context, array $blocks = array())
    {
        $__internal_c22fda4b7e200d98620dee9722d525b75a83f01a7a3cd94862b02d3b2e1eb1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22fda4b7e200d98620dee9722d525b75a83f01a7a3cd94862b02d3b2e1eb1d5->enter($__internal_c22fda4b7e200d98620dee9722d525b75a83f01a7a3cd94862b02d3b2e1eb1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_0cb3a7b8da978300b19f55d7ffcb8761f3b0684fb07de2213a954bf51b602131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb3a7b8da978300b19f55d7ffcb8761f3b0684fb07de2213a954bf51b602131->enter($__internal_0cb3a7b8da978300b19f55d7ffcb8761f3b0684fb07de2213a954bf51b602131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_0cb3a7b8da978300b19f55d7ffcb8761f3b0684fb07de2213a954bf51b602131->leave($__internal_0cb3a7b8da978300b19f55d7ffcb8761f3b0684fb07de2213a954bf51b602131_prof);

        
        $__internal_c22fda4b7e200d98620dee9722d525b75a83f01a7a3cd94862b02d3b2e1eb1d5->leave($__internal_c22fda4b7e200d98620dee9722d525b75a83f01a7a3cd94862b02d3b2e1eb1d5_prof);

    }

    // line 39
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_3ae05b26f5810dc1e68faa9dbedd57453e298ff927672eb0215621a692ffd67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae05b26f5810dc1e68faa9dbedd57453e298ff927672eb0215621a692ffd67a->enter($__internal_3ae05b26f5810dc1e68faa9dbedd57453e298ff927672eb0215621a692ffd67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_9998fb699f0cf6a057e6d91345b28a6df0d3fe0eb6737b6194ac09546f975431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9998fb699f0cf6a057e6d91345b28a6df0d3fe0eb6737b6194ac09546f975431->enter($__internal_9998fb699f0cf6a057e6d91345b28a6df0d3fe0eb6737b6194ac09546f975431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_9998fb699f0cf6a057e6d91345b28a6df0d3fe0eb6737b6194ac09546f975431->leave($__internal_9998fb699f0cf6a057e6d91345b28a6df0d3fe0eb6737b6194ac09546f975431_prof);

        
        $__internal_3ae05b26f5810dc1e68faa9dbedd57453e298ff927672eb0215621a692ffd67a->leave($__internal_3ae05b26f5810dc1e68faa9dbedd57453e298ff927672eb0215621a692ffd67a_prof);

    }

    // line 42
    public function block_offre($context, array $blocks = array())
    {
        $__internal_7c9911af64bd1b7f6efc27ff3f776b2b9d14ec97240b2171e58b6d0e9e07689b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9911af64bd1b7f6efc27ff3f776b2b9d14ec97240b2171e58b6d0e9e07689b->enter($__internal_7c9911af64bd1b7f6efc27ff3f776b2b9d14ec97240b2171e58b6d0e9e07689b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_6da02a405d9ee5f0a23f59063c5c856d988000aa975bb117eca835af23d58366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da02a405d9ee5f0a23f59063c5c856d988000aa975bb117eca835af23d58366->enter($__internal_6da02a405d9ee5f0a23f59063c5c856d988000aa975bb117eca835af23d58366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 43
        echo "<div class=\"mg-page-title parallax\" style=\"margin-top: 8.5%;\">
\t<div class=\"container \">
\t\t<div class=\"ro\">
            <div class=\"col-md-12\">
                <h2>Louer  votre salle</h2>
                <p style=\"text-shadow: 2px 2px #16262e; font-weight: bold; font-size: 18px;\">Sen Office vous permet de louer en toute sécurité votre salle de réunion, formation ou séminaire...</p>
            </div>
        </div>
    </div>
</div>

<!-- Large modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                    ×</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">
                    Login/Registration - <a href=\"http://www.jquery2dotnet.com\">jquery2dotnet.com</a></h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\" style=\"border-right: 1px dotted #C2C2C2;padding-right: 30px;\">
                        <!-- Nav tabs -->
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a href=\"#Login\" data-toggle=\"tab\">Login</a></li>
                            <li><a href=\"#Registration\" data-toggle=\"tab\">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"Login\">
                                <form role=\"form\" class=\"form-horizontal\">
                                <div class=\"form-group\">
                                    <label for=\"email\" class=\"col-sm-2 control-label\">
                                        Email</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"email\" class=\"form-control\" id=\"email1\" placeholder=\"Email\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputPassword1\" class=\"col-sm-2 control-label\">
                                        Password</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"email\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Email\" />
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-2\">
                                    </div>
                                    <div class=\"col-sm-10\">
                                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                                            Submit</button>
                                        <a href=\"javascript:;\">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class=\"tab-pane\" id=\"Registration\">
                                <form role=\"form\" class=\"form-horizontal\">
                                <div class=\"form-group\">
                                    <label for=\"email\" class=\"col-sm-2 control-label\">
                                        Name</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"col-md-3\">
                                                <select class=\"form-control\">
                                                    <option>Mr.</option>
                                                    <option>Ms.</option>
                                                    <option>Mrs.</option>
                                                </select>
                                            </div>
                                            <div class=\"col-md-9\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Name\" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"email\" class=\"col-sm-2 control-label\">
                                        Email</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"mobile\" class=\"col-sm-2 control-label\">
                                        Mobile</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"email\" class=\"form-control\" id=\"mobile\" placeholder=\"Mobile\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\" class=\"col-sm-2 control-label\">
                                        Password</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" />
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-2\">
                                    </div>
                                    <div class=\"col-sm-10\">
                                        <button type=\"button\" class=\"btn btn-primary btn-sm\">
                                            Save & Continue</button>
                                        <button type=\"button\" class=\"btn btn-default btn-sm\">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id=\"OR\" class=\"hidden-xs\">
                            OR</div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"row text-center sign-with\">
                            <div class=\"col-md-12\">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"btn-group btn-group-justified\">
                                    <a href=\"#\" class=\"btn btn-primary\">Facebook</a> <a href=\"#\" class=\"btn btn-danger\">
                                        Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"mg-testi-partners\" style=\"margin-top: 0.5%; margin-bottom: 5%;\">
    <div class=\"row\" style=\"margin-right: 0; padding: 5px;\">
        <div class=\"col-12 col-sm-6\">
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
        </div>
        <div class=\"col-12 col-sm-6\">
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                    <br>
                    <button class=\"btn btn-main\" data-toggle=\"modal\" data-target=\"#myModal\" style=\"\">
                        Louer ma salle
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6da02a405d9ee5f0a23f59063c5c856d988000aa975bb117eca835af23d58366->leave($__internal_6da02a405d9ee5f0a23f59063c5c856d988000aa975bb117eca835af23d58366_prof);

        
        $__internal_7c9911af64bd1b7f6efc27ff3f776b2b9d14ec97240b2171e58b6d0e9e07689b->leave($__internal_7c9911af64bd1b7f6efc27ff3f776b2b9d14ec97240b2171e58b6d0e9e07689b_prof);

    }

    // line 224
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_61ba8628c98258de88748d55b36ad89a5380b49e816bb9f27b37f3d2c5a840d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ba8628c98258de88748d55b36ad89a5380b49e816bb9f27b37f3d2c5a840d5->enter($__internal_61ba8628c98258de88748d55b36ad89a5380b49e816bb9f27b37f3d2c5a840d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_2c3102a3f1ecd62c992fac84a1cf685e0625e63642e79ee3b1a220bfe534dc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3102a3f1ecd62c992fac84a1cf685e0625e63642e79ee3b1a220bfe534dc78->enter($__internal_2c3102a3f1ecd62c992fac84a1cf685e0625e63642e79ee3b1a220bfe534dc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        
        $__internal_2c3102a3f1ecd62c992fac84a1cf685e0625e63642e79ee3b1a220bfe534dc78->leave($__internal_2c3102a3f1ecd62c992fac84a1cf685e0625e63642e79ee3b1a220bfe534dc78_prof);

        
        $__internal_61ba8628c98258de88748d55b36ad89a5380b49e816bb9f27b37f3d2c5a840d5->leave($__internal_61ba8628c98258de88748d55b36ad89a5380b49e816bb9f27b37f3d2c5a840d5_prof);

    }

    // line 227
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_7908d81b4e0270169370b3f734d0925c06c50f1e54d1bb1dcc0ed7b7be6d3a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7908d81b4e0270169370b3f734d0925c06c50f1e54d1bb1dcc0ed7b7be6d3a86->enter($__internal_7908d81b4e0270169370b3f734d0925c06c50f1e54d1bb1dcc0ed7b7be6d3a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_6dbaa5d52f29cb9558872f62da04a7264bc6d25213f8468488328237dca31ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbaa5d52f29cb9558872f62da04a7264bc6d25213f8468488328237dca31ca1->enter($__internal_6dbaa5d52f29cb9558872f62da04a7264bc6d25213f8468488328237dca31ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_6dbaa5d52f29cb9558872f62da04a7264bc6d25213f8468488328237dca31ca1->leave($__internal_6dbaa5d52f29cb9558872f62da04a7264bc6d25213f8468488328237dca31ca1_prof);

        
        $__internal_7908d81b4e0270169370b3f734d0925c06c50f1e54d1bb1dcc0ed7b7be6d3a86->leave($__internal_7908d81b4e0270169370b3f734d0925c06c50f1e54d1bb1dcc0ed7b7be6d3a86_prof);

    }

    public function getTemplateName()
    {
        return "SenofficeBundle:Front:ajout-salle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 227,  342 => 224,  153 => 43,  144 => 42,  127 => 39,  110 => 36,  73 => 6,  64 => 5,  46 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Partager votre salle{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.nav-tabs {
    margin-bottom: 15px;
}
.sign-with {
    margin-top: 25px;
    padding: 20px;
}
div#OR {
    height: 30px;
    width: 30px;
    border: 1px solid #C2C2C2;
    border-radius: 50%;
    font-weight: bold;
    line-height: 28px;
    text-align: center;
    font-size: 12px;
    float: right;
    position: absolute;
    right: -16px;
    top: 40%;
    z-index: 1;
    background: #DFDFDF;
}
</style>
{% endblock %}



{% block slide %}
{% endblock %}

{% block recherche %}
{% endblock %}

{% block offre %}
<div class=\"mg-page-title parallax\" style=\"margin-top: 8.5%;\">
\t<div class=\"container \">
\t\t<div class=\"ro\">
            <div class=\"col-md-12\">
                <h2>Louer  votre salle</h2>
                <p style=\"text-shadow: 2px 2px #16262e; font-weight: bold; font-size: 18px;\">Sen Office vous permet de louer en toute sécurité votre salle de réunion, formation ou séminaire...</p>
            </div>
        </div>
    </div>
</div>

<!-- Large modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                    ×</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">
                    Login/Registration - <a href=\"http://www.jquery2dotnet.com\">jquery2dotnet.com</a></h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\" style=\"border-right: 1px dotted #C2C2C2;padding-right: 30px;\">
                        <!-- Nav tabs -->
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a href=\"#Login\" data-toggle=\"tab\">Login</a></li>
                            <li><a href=\"#Registration\" data-toggle=\"tab\">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"Login\">
                                <form role=\"form\" class=\"form-horizontal\">
                                <div class=\"form-group\">
                                    <label for=\"email\" class=\"col-sm-2 control-label\">
                                        Email</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"email\" class=\"form-control\" id=\"email1\" placeholder=\"Email\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputPassword1\" class=\"col-sm-2 control-label\">
                                        Password</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"email\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Email\" />
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-2\">
                                    </div>
                                    <div class=\"col-sm-10\">
                                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                                            Submit</button>
                                        <a href=\"javascript:;\">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class=\"tab-pane\" id=\"Registration\">
                                <form role=\"form\" class=\"form-horizontal\">
                                <div class=\"form-group\">
                                    <label for=\"email\" class=\"col-sm-2 control-label\">
                                        Name</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"col-md-3\">
                                                <select class=\"form-control\">
                                                    <option>Mr.</option>
                                                    <option>Ms.</option>
                                                    <option>Mrs.</option>
                                                </select>
                                            </div>
                                            <div class=\"col-md-9\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Name\" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"email\" class=\"col-sm-2 control-label\">
                                        Email</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"mobile\" class=\"col-sm-2 control-label\">
                                        Mobile</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"email\" class=\"form-control\" id=\"mobile\" placeholder=\"Mobile\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\" class=\"col-sm-2 control-label\">
                                        Password</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" />
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-2\">
                                    </div>
                                    <div class=\"col-sm-10\">
                                        <button type=\"button\" class=\"btn btn-primary btn-sm\">
                                            Save & Continue</button>
                                        <button type=\"button\" class=\"btn btn-default btn-sm\">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id=\"OR\" class=\"hidden-xs\">
                            OR</div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"row text-center sign-with\">
                            <div class=\"col-md-12\">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"btn-group btn-group-justified\">
                                    <a href=\"#\" class=\"btn btn-primary\">Facebook</a> <a href=\"#\" class=\"btn btn-danger\">
                                        Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"mg-testi-partners\" style=\"margin-top: 0.5%; margin-bottom: 5%;\">
    <div class=\"row\" style=\"margin-right: 0; padding: 5px;\">
        <div class=\"col-12 col-sm-6\">
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
        </div>
        <div class=\"col-12 col-sm-6\">
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                    <br>
                    <button class=\"btn btn-main\" data-toggle=\"modal\" data-target=\"#myModal\" style=\"\">
                        Louer ma salle
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block apropos %}
{% endblock %}

{% block partenaires %}
{% endblock %}
", "SenofficeBundle:Front:ajout-salle.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/src/ADOB/SenofficeBundle/Resources/views/Front/ajout-salle.html.twig");
    }
}
