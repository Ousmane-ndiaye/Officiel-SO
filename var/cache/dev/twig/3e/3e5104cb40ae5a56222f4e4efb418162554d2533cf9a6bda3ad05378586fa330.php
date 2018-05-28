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
        $__internal_b3ad73f56ab98168420ab19a2557e20eb7154047ed8287b98b02854c20a6b0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ad73f56ab98168420ab19a2557e20eb7154047ed8287b98b02854c20a6b0cb->enter($__internal_b3ad73f56ab98168420ab19a2557e20eb7154047ed8287b98b02854c20a6b0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:ajout-salle.html.twig"));

        $__internal_ea325138b954340399cd11f6823cc13c7d6cc28639c1cded9a70c0ba6956077a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea325138b954340399cd11f6823cc13c7d6cc28639c1cded9a70c0ba6956077a->enter($__internal_ea325138b954340399cd11f6823cc13c7d6cc28639c1cded9a70c0ba6956077a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:ajout-salle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3ad73f56ab98168420ab19a2557e20eb7154047ed8287b98b02854c20a6b0cb->leave($__internal_b3ad73f56ab98168420ab19a2557e20eb7154047ed8287b98b02854c20a6b0cb_prof);

        
        $__internal_ea325138b954340399cd11f6823cc13c7d6cc28639c1cded9a70c0ba6956077a->leave($__internal_ea325138b954340399cd11f6823cc13c7d6cc28639c1cded9a70c0ba6956077a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69fa07197453abc744e11f28ab185b49d642f442d0f15d39eba613c6c7247fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69fa07197453abc744e11f28ab185b49d642f442d0f15d39eba613c6c7247fc8->enter($__internal_69fa07197453abc744e11f28ab185b49d642f442d0f15d39eba613c6c7247fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_30105c28ed28c7388d3c2fe3601509879f0782e336fa047dc62731d3af115a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30105c28ed28c7388d3c2fe3601509879f0782e336fa047dc62731d3af115a79->enter($__internal_30105c28ed28c7388d3c2fe3601509879f0782e336fa047dc62731d3af115a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partager votre salle";
        
        $__internal_30105c28ed28c7388d3c2fe3601509879f0782e336fa047dc62731d3af115a79->leave($__internal_30105c28ed28c7388d3c2fe3601509879f0782e336fa047dc62731d3af115a79_prof);

        
        $__internal_69fa07197453abc744e11f28ab185b49d642f442d0f15d39eba613c6c7247fc8->leave($__internal_69fa07197453abc744e11f28ab185b49d642f442d0f15d39eba613c6c7247fc8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89a6fdf6164a6f67ab6d18dbdfe7250392ff8d91d2a532aa88bc3ca443c83001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a6fdf6164a6f67ab6d18dbdfe7250392ff8d91d2a532aa88bc3ca443c83001->enter($__internal_89a6fdf6164a6f67ab6d18dbdfe7250392ff8d91d2a532aa88bc3ca443c83001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7d9c1a1aa178844e0e4c3cbe02b3238da58961219b8feb1cc709c758c9823a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9c1a1aa178844e0e4c3cbe02b3238da58961219b8feb1cc709c758c9823a61->enter($__internal_7d9c1a1aa178844e0e4c3cbe02b3238da58961219b8feb1cc709c758c9823a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7d9c1a1aa178844e0e4c3cbe02b3238da58961219b8feb1cc709c758c9823a61->leave($__internal_7d9c1a1aa178844e0e4c3cbe02b3238da58961219b8feb1cc709c758c9823a61_prof);

        
        $__internal_89a6fdf6164a6f67ab6d18dbdfe7250392ff8d91d2a532aa88bc3ca443c83001->leave($__internal_89a6fdf6164a6f67ab6d18dbdfe7250392ff8d91d2a532aa88bc3ca443c83001_prof);

    }

    // line 39
    public function block_slide($context, array $blocks = array())
    {
        $__internal_108b734eb0684b9296961c4649f2e0aa0fc948dbd50c0289ed2437fc1fd2b3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108b734eb0684b9296961c4649f2e0aa0fc948dbd50c0289ed2437fc1fd2b3f4->enter($__internal_108b734eb0684b9296961c4649f2e0aa0fc948dbd50c0289ed2437fc1fd2b3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_16d3e3eb44f0507aa633002138470f64b191cac4e781da258430acd86fed129a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d3e3eb44f0507aa633002138470f64b191cac4e781da258430acd86fed129a->enter($__internal_16d3e3eb44f0507aa633002138470f64b191cac4e781da258430acd86fed129a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_16d3e3eb44f0507aa633002138470f64b191cac4e781da258430acd86fed129a->leave($__internal_16d3e3eb44f0507aa633002138470f64b191cac4e781da258430acd86fed129a_prof);

        
        $__internal_108b734eb0684b9296961c4649f2e0aa0fc948dbd50c0289ed2437fc1fd2b3f4->leave($__internal_108b734eb0684b9296961c4649f2e0aa0fc948dbd50c0289ed2437fc1fd2b3f4_prof);

    }

    // line 42
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_cbc352c29ba553f657cce07c6af8152fab5096b90c731e46dcb59f733e6d60f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc352c29ba553f657cce07c6af8152fab5096b90c731e46dcb59f733e6d60f4->enter($__internal_cbc352c29ba553f657cce07c6af8152fab5096b90c731e46dcb59f733e6d60f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_63fafb3d7f328b4675e7bf6b143bf04c3953e392ef33f6a402cd4c6a029552af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fafb3d7f328b4675e7bf6b143bf04c3953e392ef33f6a402cd4c6a029552af->enter($__internal_63fafb3d7f328b4675e7bf6b143bf04c3953e392ef33f6a402cd4c6a029552af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_63fafb3d7f328b4675e7bf6b143bf04c3953e392ef33f6a402cd4c6a029552af->leave($__internal_63fafb3d7f328b4675e7bf6b143bf04c3953e392ef33f6a402cd4c6a029552af_prof);

        
        $__internal_cbc352c29ba553f657cce07c6af8152fab5096b90c731e46dcb59f733e6d60f4->leave($__internal_cbc352c29ba553f657cce07c6af8152fab5096b90c731e46dcb59f733e6d60f4_prof);

    }

    // line 45
    public function block_offre($context, array $blocks = array())
    {
        $__internal_5378e48377ddc1f4258f95a21c0a23b177acf6ba2ab2ad9382195e04d401912a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5378e48377ddc1f4258f95a21c0a23b177acf6ba2ab2ad9382195e04d401912a->enter($__internal_5378e48377ddc1f4258f95a21c0a23b177acf6ba2ab2ad9382195e04d401912a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_1c1d58a8388f20f1966d2f3f56a30403e710b62e4bbfb69ae07850e6437d5dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1d58a8388f20f1966d2f3f56a30403e710b62e4bbfb69ae07850e6437d5dbf->enter($__internal_1c1d58a8388f20f1966d2f3f56a30403e710b62e4bbfb69ae07850e6437d5dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

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
                                <form method=\"post\" action=\"\" role=\"form\" class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <label for=\"nomComplet\" class=\"col-sm-4 control-label\">
                                            Prénom et nom</label>
                                        <div class=\"col-sm-8\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <select name=\"sexe\" class=\"form-control\" required />
                                                        <option value=\"m\">Mr.</option>
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
                                            <input type=\"number\" name=\"tel\" class=\"form-control\" id=\"mobile\" placeholder=\"Mobile\" />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"col-sm-4 control-label\">
                                            Mot de passe</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" />
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
        
        $__internal_1c1d58a8388f20f1966d2f3f56a30403e710b62e4bbfb69ae07850e6437d5dbf->leave($__internal_1c1d58a8388f20f1966d2f3f56a30403e710b62e4bbfb69ae07850e6437d5dbf_prof);

        
        $__internal_5378e48377ddc1f4258f95a21c0a23b177acf6ba2ab2ad9382195e04d401912a->leave($__internal_5378e48377ddc1f4258f95a21c0a23b177acf6ba2ab2ad9382195e04d401912a_prof);

    }

    // line 230
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_f299d36fee7c7bc259ca53bc0ea75e11b22789d3ba700c4b6436f1bcaaf8c0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f299d36fee7c7bc259ca53bc0ea75e11b22789d3ba700c4b6436f1bcaaf8c0a2->enter($__internal_f299d36fee7c7bc259ca53bc0ea75e11b22789d3ba700c4b6436f1bcaaf8c0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_2bad629ccaee5a476d5491a5a53f91be24192fe55ebd642917fc4eac79482b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bad629ccaee5a476d5491a5a53f91be24192fe55ebd642917fc4eac79482b9b->enter($__internal_2bad629ccaee5a476d5491a5a53f91be24192fe55ebd642917fc4eac79482b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        
        $__internal_2bad629ccaee5a476d5491a5a53f91be24192fe55ebd642917fc4eac79482b9b->leave($__internal_2bad629ccaee5a476d5491a5a53f91be24192fe55ebd642917fc4eac79482b9b_prof);

        
        $__internal_f299d36fee7c7bc259ca53bc0ea75e11b22789d3ba700c4b6436f1bcaaf8c0a2->leave($__internal_f299d36fee7c7bc259ca53bc0ea75e11b22789d3ba700c4b6436f1bcaaf8c0a2_prof);

    }

    // line 233
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_65413cd1dbce236346a5c740e628037ed10aa706cb4d560ea47fd8c4b310e511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65413cd1dbce236346a5c740e628037ed10aa706cb4d560ea47fd8c4b310e511->enter($__internal_65413cd1dbce236346a5c740e628037ed10aa706cb4d560ea47fd8c4b310e511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_7c126a5a1532d607ecdb84287dc0aadf756e0595c410a10118ad59c810ee5b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c126a5a1532d607ecdb84287dc0aadf756e0595c410a10118ad59c810ee5b80->enter($__internal_7c126a5a1532d607ecdb84287dc0aadf756e0595c410a10118ad59c810ee5b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_7c126a5a1532d607ecdb84287dc0aadf756e0595c410a10118ad59c810ee5b80->leave($__internal_7c126a5a1532d607ecdb84287dc0aadf756e0595c410a10118ad59c810ee5b80_prof);

        
        $__internal_65413cd1dbce236346a5c740e628037ed10aa706cb4d560ea47fd8c4b310e511->leave($__internal_65413cd1dbce236346a5c740e628037ed10aa706cb4d560ea47fd8c4b310e511_prof);

    }

    // line 236
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_38a6c9a59bacca3b6d7177e447dbd2fd97541f5544526cd370b8a7fc8e452b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a6c9a59bacca3b6d7177e447dbd2fd97541f5544526cd370b8a7fc8e452b67->enter($__internal_38a6c9a59bacca3b6d7177e447dbd2fd97541f5544526cd370b8a7fc8e452b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_7bdfb6aa269b3aae79e0ce7c8840e46aea1549081588b4c76550d1bdf5f9cb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bdfb6aa269b3aae79e0ce7c8840e46aea1549081588b4c76550d1bdf5f9cb9a->enter($__internal_7bdfb6aa269b3aae79e0ce7c8840e46aea1549081588b4c76550d1bdf5f9cb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_7bdfb6aa269b3aae79e0ce7c8840e46aea1549081588b4c76550d1bdf5f9cb9a->leave($__internal_7bdfb6aa269b3aae79e0ce7c8840e46aea1549081588b4c76550d1bdf5f9cb9a_prof);

        
        $__internal_38a6c9a59bacca3b6d7177e447dbd2fd97541f5544526cd370b8a7fc8e452b67->leave($__internal_38a6c9a59bacca3b6d7177e447dbd2fd97541f5544526cd370b8a7fc8e452b67_prof);

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
        return array (  383 => 236,  366 => 233,  349 => 230,  157 => 46,  148 => 45,  131 => 42,  114 => 39,  74 => 6,  65 => 5,  47 => 3,  11 => 1,);
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
                                <form method=\"post\" action=\"\" role=\"form\" class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <label for=\"nomComplet\" class=\"col-sm-4 control-label\">
                                            Prénom et nom</label>
                                        <div class=\"col-sm-8\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <select name=\"sexe\" class=\"form-control\" required />
                                                        <option value=\"m\">Mr.</option>
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
                                            <input type=\"number\" name=\"tel\" class=\"form-control\" id=\"mobile\" placeholder=\"Mobile\" />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"col-sm-4 control-label\">
                                            Mot de passe</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" />
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
