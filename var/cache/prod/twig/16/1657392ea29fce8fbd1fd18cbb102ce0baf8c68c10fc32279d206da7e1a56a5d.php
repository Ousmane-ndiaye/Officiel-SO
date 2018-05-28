<?php

/* SenofficeBundle:Front:ajout-salle.html.twig */
class __TwigTemplate_73912c067e3a22d2b8f33c39dda3dd861e6c06c17b58b6522594a7dcb029819a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Partager votre salle";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 36
    public function block_slide($context, array $blocks = array())
    {
    }

    // line 39
    public function block_recherche($context, array $blocks = array())
    {
    }

    // line 42
    public function block_offre($context, array $blocks = array())
    {
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

<div class=\"mg-testi-partners parallax\" style=\"margin-top: 0.5%; margin-bottom: 5%;\">
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
    }

    // line 224
    public function block_apropos($context, array $blocks = array())
    {
    }

    // line 227
    public function block_partenaires($context, array $blocks = array())
    {
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
        return array (  275 => 227,  270 => 224,  87 => 43,  84 => 42,  79 => 39,  74 => 36,  43 => 6,  40 => 5,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SenofficeBundle:Front:ajout-salle.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/src/ADOB/SenofficeBundle/Resources/views/Front/ajout-salle.html.twig");
    }
}
