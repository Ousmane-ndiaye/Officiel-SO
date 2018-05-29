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
            'galerie' => array($this, 'block_galerie'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61d4c6a612cc5b8701973e767709c69419f70b4fdbda5cd6553372e55d1a3a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d4c6a612cc5b8701973e767709c69419f70b4fdbda5cd6553372e55d1a3a8c->enter($__internal_61d4c6a612cc5b8701973e767709c69419f70b4fdbda5cd6553372e55d1a3a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:ajout-salle.html.twig"));

        $__internal_99a73613b8aabc18cd387e349f3bcac4662bd170470d66b26353c04d9cbfdb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a73613b8aabc18cd387e349f3bcac4662bd170470d66b26353c04d9cbfdb21->enter($__internal_99a73613b8aabc18cd387e349f3bcac4662bd170470d66b26353c04d9cbfdb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:ajout-salle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61d4c6a612cc5b8701973e767709c69419f70b4fdbda5cd6553372e55d1a3a8c->leave($__internal_61d4c6a612cc5b8701973e767709c69419f70b4fdbda5cd6553372e55d1a3a8c_prof);

        
        $__internal_99a73613b8aabc18cd387e349f3bcac4662bd170470d66b26353c04d9cbfdb21->leave($__internal_99a73613b8aabc18cd387e349f3bcac4662bd170470d66b26353c04d9cbfdb21_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfb1a9e979d1caa8a8b5b6a95f29abf95df7b90e5db05db802e8a710bac89794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb1a9e979d1caa8a8b5b6a95f29abf95df7b90e5db05db802e8a710bac89794->enter($__internal_dfb1a9e979d1caa8a8b5b6a95f29abf95df7b90e5db05db802e8a710bac89794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63dd71aadfa1e9cbff41795c8d06b7dc7be29d7287c445edb72e61266564dcc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63dd71aadfa1e9cbff41795c8d06b7dc7be29d7287c445edb72e61266564dcc2->enter($__internal_63dd71aadfa1e9cbff41795c8d06b7dc7be29d7287c445edb72e61266564dcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partager votre salle";
        
        $__internal_63dd71aadfa1e9cbff41795c8d06b7dc7be29d7287c445edb72e61266564dcc2->leave($__internal_63dd71aadfa1e9cbff41795c8d06b7dc7be29d7287c445edb72e61266564dcc2_prof);

        
        $__internal_dfb1a9e979d1caa8a8b5b6a95f29abf95df7b90e5db05db802e8a710bac89794->leave($__internal_dfb1a9e979d1caa8a8b5b6a95f29abf95df7b90e5db05db802e8a710bac89794_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43951f84cdc94809f9ea55e23fb65ec715b5bcb9bfe933bba5f3a12dd76031c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43951f84cdc94809f9ea55e23fb65ec715b5bcb9bfe933bba5f3a12dd76031c4->enter($__internal_43951f84cdc94809f9ea55e23fb65ec715b5bcb9bfe933bba5f3a12dd76031c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ad121b6930c8054e7f6ea5d307ec93d04f0eff96c047fe47fb919b3b8ceec6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad121b6930c8054e7f6ea5d307ec93d04f0eff96c047fe47fb919b3b8ceec6c0->enter($__internal_ad121b6930c8054e7f6ea5d307ec93d04f0eff96c047fe47fb919b3b8ceec6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
.a-tab:hover{
    height: 25px;
}
</style>
";
        
        $__internal_ad121b6930c8054e7f6ea5d307ec93d04f0eff96c047fe47fb919b3b8ceec6c0->leave($__internal_ad121b6930c8054e7f6ea5d307ec93d04f0eff96c047fe47fb919b3b8ceec6c0_prof);

        
        $__internal_43951f84cdc94809f9ea55e23fb65ec715b5bcb9bfe933bba5f3a12dd76031c4->leave($__internal_43951f84cdc94809f9ea55e23fb65ec715b5bcb9bfe933bba5f3a12dd76031c4_prof);

    }

    // line 39
    public function block_slide($context, array $blocks = array())
    {
        $__internal_b185fb993d708b02323c357367ba5b24d1cc0667b5cf839c3b85b6b56243cdc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b185fb993d708b02323c357367ba5b24d1cc0667b5cf839c3b85b6b56243cdc2->enter($__internal_b185fb993d708b02323c357367ba5b24d1cc0667b5cf839c3b85b6b56243cdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_20e3ef0fd1367989631c17839f08e686cdcf50607067ea81118b67008d5ac9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e3ef0fd1367989631c17839f08e686cdcf50607067ea81118b67008d5ac9e9->enter($__internal_20e3ef0fd1367989631c17839f08e686cdcf50607067ea81118b67008d5ac9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_20e3ef0fd1367989631c17839f08e686cdcf50607067ea81118b67008d5ac9e9->leave($__internal_20e3ef0fd1367989631c17839f08e686cdcf50607067ea81118b67008d5ac9e9_prof);

        
        $__internal_b185fb993d708b02323c357367ba5b24d1cc0667b5cf839c3b85b6b56243cdc2->leave($__internal_b185fb993d708b02323c357367ba5b24d1cc0667b5cf839c3b85b6b56243cdc2_prof);

    }

    // line 42
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_97a29e0aeb881f095cfabba7e7fc92cb7124ce8a51ac2f57ca561cc6383b79fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a29e0aeb881f095cfabba7e7fc92cb7124ce8a51ac2f57ca561cc6383b79fd->enter($__internal_97a29e0aeb881f095cfabba7e7fc92cb7124ce8a51ac2f57ca561cc6383b79fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_ba29038eae2dd31b7db63d7e112004085b8e1f8fccfba905e4ac1ef8f2f7b7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba29038eae2dd31b7db63d7e112004085b8e1f8fccfba905e4ac1ef8f2f7b7e6->enter($__internal_ba29038eae2dd31b7db63d7e112004085b8e1f8fccfba905e4ac1ef8f2f7b7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_ba29038eae2dd31b7db63d7e112004085b8e1f8fccfba905e4ac1ef8f2f7b7e6->leave($__internal_ba29038eae2dd31b7db63d7e112004085b8e1f8fccfba905e4ac1ef8f2f7b7e6_prof);

        
        $__internal_97a29e0aeb881f095cfabba7e7fc92cb7124ce8a51ac2f57ca561cc6383b79fd->leave($__internal_97a29e0aeb881f095cfabba7e7fc92cb7124ce8a51ac2f57ca561cc6383b79fd_prof);

    }

    // line 45
    public function block_offre($context, array $blocks = array())
    {
        $__internal_8e4ad45f30cbf51509ecb8e8a32f58c6ae7fb743202432d3d715ba8b7b13c7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4ad45f30cbf51509ecb8e8a32f58c6ae7fb743202432d3d715ba8b7b13c7ad->enter($__internal_8e4ad45f30cbf51509ecb8e8a32f58c6ae7fb743202432d3d715ba8b7b13c7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_8dd30f3a8891026b6202f18a3b28e81e6b09d929c2d9940bdbdaf029b056a2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd30f3a8891026b6202f18a3b28e81e6b09d929c2d9940bdbdaf029b056a2e0->enter($__internal_8dd30f3a8891026b6202f18a3b28e81e6b09d929c2d9940bdbdaf029b056a2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 46
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
                    Connexion/Inscription</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\" style=\"border-right: 1px dotted #C2C2C2;padding-right: 30px;\">
                        <!-- Nav tabs -->
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a class=\"a-tab\" href=\"#Login\" data-toggle=\"tab\">Connexion</a></li>
                            <li><a class=\"a-tab\" href=\"#Registration\" data-toggle=\"tab\">Inscription</a></l>
                        </ul>
                        <!-- Tab panes -->
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"Login\">
                            <!-- formulaire de connexion -->
                                <form method=\"post\" action=\"\" role=\"form\" class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <label for=\"email\" class=\"col-sm-4 control-label\">
                                            Email</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email1\" placeholder=\"Email\" required/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputPassword1\" class=\"col-sm-4 control-label\">
                                            Mot de passe</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" />
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-2\">
                                        </div>
                                        <div class=\"col-sm-10\">
                                            <button type=\"submit\" class=\"btn btn-main\">
                                                Se connecter</button>
                                            <a href=\"javascript:;\">Mot de passe oublié ?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class=\"tab-pane\" id=\"Registration\">
                            <!-- formulaire de d'inscription -->
                                <form id=\"SignupForm\" method=\"post\" action=\"\" role=\"form\" class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <label for=\"nomComplet\" class=\"col-sm-4 control-label\">
                                            Prénom et nom</label>
                                        <div class=\"col-sm-8\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <select name=\"sexe\" class=\"form-control\" required />
                                                        <option value=\"\">Sexe fdjfjk</option>
                                                        <option value=\"m\">M.</option>
                                                        <option value=\"f\">Mme.</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-md-8\">
                                                    <input type=\"text\" name=\"nomComplet\" class=\"form-control\" placeholder=\"Prénom et nom\" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"email\" class=\"col-sm-4 control-label\">
                                            Email</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\" required/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"mobile\" class=\"col-sm-4 control-label\">
                                            Téléphone</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"number\" name=\"tel\" class=\"form-control\" id=\"mobile\" placeholder=\"775919686\" size=\"20\" minlength=\"9\" maxlength=\"14\" required />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"col-sm-4 control-label\">
                                            Mot de passe</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" minlength=\"4\" required/>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-2\">
                                        </div>
                                        <div class=\"col-sm-10\">
                                            <button type=\"submit\" class=\"btn btn-main\">
                                                S'inscrire & Continuer
                                            </button>
                                            <button type=\"button\" class=\"btn btn-default\">
                                                Annuler
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id=\"OR\" class=\"hidden-xs\">
                            OU
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"row text-center sign-with\">
                            <div class=\"col-md-12\">
                                <h3>
                                    S'inscrire avec</h3>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"btn-group btn-group-justified\">
                                    <a href=\"#\" class=\"btn\" style=\"background: #0d47a1; color: white; border-radius: 5px 0px 0px 5px;\">Facebook</a>
                                    <a href=\"#\" class=\"btn\" style=\"background: red; color: white; border-radius: 0px 5px 5px 0px;\">Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"container\" style=\"margin-top: 1%; margin-bottom: 5%;\">
    <div class=\"row\" style=\"margin-right: 0; padding: 5px;\">
        <div class=\"mg-testi-partners parallax col-12 col-sm-6\" style=\"padding: 20px; background: white; color: #16262e;\">
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
        <div class=\"mg-testi-partners parallax col-12 col-sm-6\" style=\"padding: 20px;\">
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
                <button class=\"btn btn-main\" data-toggle=\"modal\" data-target=\"#myModal\">
                    <span style=\"font-weight: bold; text-transform: upperCase;\">Je loue ma salle</span>
                </button>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_8dd30f3a8891026b6202f18a3b28e81e6b09d929c2d9940bdbdaf029b056a2e0->leave($__internal_8dd30f3a8891026b6202f18a3b28e81e6b09d929c2d9940bdbdaf029b056a2e0_prof);

        
        $__internal_8e4ad45f30cbf51509ecb8e8a32f58c6ae7fb743202432d3d715ba8b7b13c7ad->leave($__internal_8e4ad45f30cbf51509ecb8e8a32f58c6ae7fb743202432d3d715ba8b7b13c7ad_prof);

    }

    // line 231
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_331d54e06242d0adfd2af49c3d533dbdf8285bfc0af33f8d525d5cbac8180447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331d54e06242d0adfd2af49c3d533dbdf8285bfc0af33f8d525d5cbac8180447->enter($__internal_331d54e06242d0adfd2af49c3d533dbdf8285bfc0af33f8d525d5cbac8180447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_94c0b6b39084ebb5d2eef997cee82ed1ff3e34f6073959fb2669798501f4fd5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c0b6b39084ebb5d2eef997cee82ed1ff3e34f6073959fb2669798501f4fd5a->enter($__internal_94c0b6b39084ebb5d2eef997cee82ed1ff3e34f6073959fb2669798501f4fd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        
        $__internal_94c0b6b39084ebb5d2eef997cee82ed1ff3e34f6073959fb2669798501f4fd5a->leave($__internal_94c0b6b39084ebb5d2eef997cee82ed1ff3e34f6073959fb2669798501f4fd5a_prof);

        
        $__internal_331d54e06242d0adfd2af49c3d533dbdf8285bfc0af33f8d525d5cbac8180447->leave($__internal_331d54e06242d0adfd2af49c3d533dbdf8285bfc0af33f8d525d5cbac8180447_prof);

    }

    // line 234
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_a3c2b442b8b4030e4f98d9ad2f6f98cc086c8dee4eb8b8fa6c0b19cc61ef87b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c2b442b8b4030e4f98d9ad2f6f98cc086c8dee4eb8b8fa6c0b19cc61ef87b4->enter($__internal_a3c2b442b8b4030e4f98d9ad2f6f98cc086c8dee4eb8b8fa6c0b19cc61ef87b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_69acda531e8e054b1d985e13f9391521869a53071d42c98e4e7d09139b71769b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69acda531e8e054b1d985e13f9391521869a53071d42c98e4e7d09139b71769b->enter($__internal_69acda531e8e054b1d985e13f9391521869a53071d42c98e4e7d09139b71769b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_69acda531e8e054b1d985e13f9391521869a53071d42c98e4e7d09139b71769b->leave($__internal_69acda531e8e054b1d985e13f9391521869a53071d42c98e4e7d09139b71769b_prof);

        
        $__internal_a3c2b442b8b4030e4f98d9ad2f6f98cc086c8dee4eb8b8fa6c0b19cc61ef87b4->leave($__internal_a3c2b442b8b4030e4f98d9ad2f6f98cc086c8dee4eb8b8fa6c0b19cc61ef87b4_prof);

    }

    // line 237
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_854c784580f11d462bae646ff9649004fd5e95b2f860927b0bffeb2e90834b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854c784580f11d462bae646ff9649004fd5e95b2f860927b0bffeb2e90834b01->enter($__internal_854c784580f11d462bae646ff9649004fd5e95b2f860927b0bffeb2e90834b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_cca90b76189ffefa051fb53aaa5b14b77f8516b69bbe0160e887a21ab4df7c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca90b76189ffefa051fb53aaa5b14b77f8516b69bbe0160e887a21ab4df7c65->enter($__internal_cca90b76189ffefa051fb53aaa5b14b77f8516b69bbe0160e887a21ab4df7c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_cca90b76189ffefa051fb53aaa5b14b77f8516b69bbe0160e887a21ab4df7c65->leave($__internal_cca90b76189ffefa051fb53aaa5b14b77f8516b69bbe0160e887a21ab4df7c65_prof);

        
        $__internal_854c784580f11d462bae646ff9649004fd5e95b2f860927b0bffeb2e90834b01->leave($__internal_854c784580f11d462bae646ff9649004fd5e95b2f860927b0bffeb2e90834b01_prof);

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
        return array (  384 => 237,  367 => 234,  350 => 231,  157 => 46,  148 => 45,  131 => 42,  114 => 39,  74 => 6,  65 => 5,  47 => 3,  11 => 1,);
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
.a-tab:hover{
    height: 25px;
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
                    Connexion/Inscription</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\" style=\"border-right: 1px dotted #C2C2C2;padding-right: 30px;\">
                        <!-- Nav tabs -->
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a class=\"a-tab\" href=\"#Login\" data-toggle=\"tab\">Connexion</a></li>
                            <li><a class=\"a-tab\" href=\"#Registration\" data-toggle=\"tab\">Inscription</a></l>
                        </ul>
                        <!-- Tab panes -->
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"Login\">
                            <!-- formulaire de connexion -->
                                <form method=\"post\" action=\"\" role=\"form\" class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <label for=\"email\" class=\"col-sm-4 control-label\">
                                            Email</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email1\" placeholder=\"Email\" required/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputPassword1\" class=\"col-sm-4 control-label\">
                                            Mot de passe</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" />
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-2\">
                                        </div>
                                        <div class=\"col-sm-10\">
                                            <button type=\"submit\" class=\"btn btn-main\">
                                                Se connecter</button>
                                            <a href=\"javascript:;\">Mot de passe oublié ?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class=\"tab-pane\" id=\"Registration\">
                            <!-- formulaire de d'inscription -->
                                <form id=\"SignupForm\" method=\"post\" action=\"\" role=\"form\" class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <label for=\"nomComplet\" class=\"col-sm-4 control-label\">
                                            Prénom et nom</label>
                                        <div class=\"col-sm-8\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <select name=\"sexe\" class=\"form-control\" required />
                                                        <option value=\"\">Sexe fdjfjk</option>
                                                        <option value=\"m\">M.</option>
                                                        <option value=\"f\">Mme.</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-md-8\">
                                                    <input type=\"text\" name=\"nomComplet\" class=\"form-control\" placeholder=\"Prénom et nom\" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"email\" class=\"col-sm-4 control-label\">
                                            Email</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\" required/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"mobile\" class=\"col-sm-4 control-label\">
                                            Téléphone</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"number\" name=\"tel\" class=\"form-control\" id=\"mobile\" placeholder=\"775919686\" size=\"20\" minlength=\"9\" maxlength=\"14\" required />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"col-sm-4 control-label\">
                                            Mot de passe</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" minlength=\"4\" required/>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-2\">
                                        </div>
                                        <div class=\"col-sm-10\">
                                            <button type=\"submit\" class=\"btn btn-main\">
                                                S'inscrire & Continuer
                                            </button>
                                            <button type=\"button\" class=\"btn btn-default\">
                                                Annuler
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id=\"OR\" class=\"hidden-xs\">
                            OU
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"row text-center sign-with\">
                            <div class=\"col-md-12\">
                                <h3>
                                    S'inscrire avec</h3>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"btn-group btn-group-justified\">
                                    <a href=\"#\" class=\"btn\" style=\"background: #0d47a1; color: white; border-radius: 5px 0px 0px 5px;\">Facebook</a>
                                    <a href=\"#\" class=\"btn\" style=\"background: red; color: white; border-radius: 0px 5px 5px 0px;\">Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"container\" style=\"margin-top: 1%; margin-bottom: 5%;\">
    <div class=\"row\" style=\"margin-right: 0; padding: 5px;\">
        <div class=\"mg-testi-partners parallax col-12 col-sm-6\" style=\"padding: 20px; background: white; color: #16262e;\">
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
        <div class=\"mg-testi-partners parallax col-12 col-sm-6\" style=\"padding: 20px;\">
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
                <button class=\"btn btn-main\" data-toggle=\"modal\" data-target=\"#myModal\">
                    <span style=\"font-weight: bold; text-transform: upperCase;\">Je loue ma salle</span>
                </button>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block apropos %}
{% endblock %}

{% block partenaires %}
{% endblock %}

{% block galerie %}
{% endblock %}
", "SenofficeBundle:Front:ajout-salle.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/src/ADOB/SenofficeBundle/Resources/views/Front/ajout-salle.html.twig");
    }
}
