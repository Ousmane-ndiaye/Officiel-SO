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
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
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
    public function block_slide($context, array $blocks = array())
    {
    }

    // line 8
    public function block_recherche($context, array $blocks = array())
    {
    }

    // line 11
    public function block_offre($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"mg-page-title parallax\" style=\"margin-top: 12%;\">
\t<div class=\"container \">
\t\t<div class=\"ro\">
            <div class=\"col-md-12\">
                <h2>Louer  votre salle</h2>
                <p style=\"text-shadow: 2px 2px #16262e; font-weight: bold; font-size: 18px;\">Sen Office vous permet de louer en toute sécurité votre salle de réunion, formation ou séminaire...</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\" style=\"margin-top: 5%; margin-bottom: 5%;\">
    <div class=\"row\">
        <div class=\"col-12 col-sm-6\">
            <div style=\"width: 100%; border: 1px solid blue;\">
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
            <!--
            <div id='progress'>
                <div id='progress-complete'></div>
            </div>

            <form id=\"SignupForm\" action=\"\" method=\"post\">
                <fieldset>
                    <legend>À propos de vous</legend>
                    <div class=\"form-group\">
                        <label for=\"Name\">Prénom et nom</label>
                        <input id=\"Name\" name=\"name\" type=\"text\" class=\"form-control\" size=\"20\" minlength=\"9\" maxlength=\"14\" required />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"Email\">Email</label>
                        <input id=\"Email\" name=\"email\" type=\"email\" class=\"form-control\" required />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"tel\">Téléphone</label>
                        <input id=\"tel\" name=\"tel\" type=\"number\" class=\"form-control\" size=\"9\" minlength=\"9\" maxlength=\"9\" required />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"Password\">Mot de passe</label>
                        <input id=\"Password\" type=\"password\" class=\"form-control\" />
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Company information</legend>
                    <div class=\"form-group\">
                        <label for=\"CompanyName\">Company Name</label>
                        <input id=\"CompanyName\" name=\"company-name\" type=\"text\" class=\"form-control\" required />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"Website\">Website</label>
                        <input id=\"Website\" type=\"text\" class=\"form-control\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"CompanyEmail\">CompanyEmail</label>
                        <input id=\"CompanyEmail\" type=\"text\" class=\"form-control\" />
                    </div>
                </fieldset>

                <fieldset class=\"form-horizontal\" role=\"form\">
                    <legend>Billing information</legend>
                    <div class=\"form-group\">
                        <label for=\"NameOnCard\" class=\"col-sm-2 control-label\">Name on Card</label>
                        <div class=\"col-sm-10\"><input id=\"NameOnCard\" type=\"text\" class=\"form-control\" name=\"name-on-card\" required /></div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"CardNumber\" class=\"col-sm-2 control-label\">Card Number</label>
                        <div class=\"col-sm-10\"><input id=\"CardNumber\" type=\"text\" class=\"form-control\" name=\"card-number\" required /></div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"CreditcardMonth\" class=\"col-sm-2 control-label\">Expiration</label>
                        <div class=\"col-sm-10\">
                            <div class=\"row\">
                                <div class=\"col-xs-3\">
                                    <select id=\"CreditcardMonth\" class=\"form-control col-sm-2\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                        <option value=\"6\">6</option>
                                        <option value=\"7\">7</option>
                                        <option value=\"8\">8</option>
                                        <option value=\"9\">9</option>
                                        <option value=\"10\">10</option>
                                        <option value=\"11\">11</option>
                                        <option value=\"12\">12</option>
                                    </select>
                                </div>
                                <div class=\"col-xs-3\">
                                    <select id=\"CreditcardYear\" class=\"form-control\">
                                        <option value=\"2009\">2009</option>
                                        <option value=\"2010\">2010</option>
                                        <option value=\"2011\">2011</option>
                                        <option value=\"2012\">2012</option>
                                        <option value=\"2013\">2013</option>
                                        <option value=\"2014\">2014</option>
                                        <option value=\"2015\">2015</option>
                                        <option value=\"2016\">2016</option>
                                        <option value=\"2017\">2017</option>
                                        <option value=\"2018\">2018</option>
                                        <option value=\"2019\">2019</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"Address1\" class=\"col-sm-2 control-label\">Address 1</label>
                        <div class=\"col-sm-10\"><input id=\"Address1\" type=\"text\" class=\"form-control\" /></div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"Address2\" class=\"col-sm-2 control-label\">Address 2</label>
                        <div class=\"col-sm-10\"><input id=\"Address2\" type=\"text\" class=\"form-control\" /></div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"Zip\" class=\"col-sm-2 control-label\">ZIP</label>
                        <div class=\"col-sm-4\"><input id=\"Zip\" type=\"text\" class=\"form-control\" /></div>
                        <label for=\"Country\" class=\"col-sm-2 control-label\">Country</label>
                        <div class=\"col-sm-4\">
                            <select id=\"Country\" class=\"form-control\">
                                <option value=\"KM\">Comoros</option>
                                <option value=\"CG\">Congo</option>
                                <option value=\"CK\">Cook Iislands</option>
                                <option value=\"CR\">Costa Rica</option>
                                <option value=\"HR\">Croatia</option>
                                <option value=\"CU\">Cuba</option>
                                <option value=\"CY\">Cyprus</option>
                                <option value=\"CZ\">Czech Republic</option>
                                <option value=\"CI\">Ivory Coast</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <button id=\"SaveAccount\" type=\"submit\" class=\"btn btn-primary submit\">Partager</button>
            </form>
            -->
        </div>
        <div class=\"col-12 col-sm-6\">
            <div style=\"width: 100%; border: 1px solid blue;\">
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
            ";
        // line 183
        echo "            <!--
            <div>
                <form action=\"\" method=\"post\">
                    <h4>Connexion</h4>
                    <div class=\"form-group\">
                        <label for=\"Email\">Email</label>
                        <input name=\"email\" type=\"email\" class=\"form-control\" required />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"Password\">Password</label>
                        <input name=\"password\" type=\"password\" class=\"form-control\" />
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary submit\">Se connecter</button>
                </form>
            </div>
            -->
        </div>
        <div class=\"col-12 col-sm-12\">
            <div style=\"border: 1px solid blue;\">
                jkfdxfdkc
            </div>
        </div>
    </div>
</div>

";
    }

    // line 210
    public function block_apropos($context, array $blocks = array())
    {
    }

    // line 213
    public function block_partenaires($context, array $blocks = array())
    {
    }

    // line 216
    public function block_galerie($context, array $blocks = array())
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
        return array (  264 => 216,  259 => 213,  254 => 210,  225 => 183,  53 => 12,  50 => 11,  45 => 8,  40 => 5,  34 => 3,  11 => 1,);
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
