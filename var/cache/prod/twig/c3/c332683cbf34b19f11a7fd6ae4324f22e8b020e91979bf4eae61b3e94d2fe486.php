<?php

/* SenofficeBundle:Front:catalogue.html.twig */
class __TwigTemplate_463988ed41ac7ca9caba255d47f25c3e4db051e3ad385fb95e1dac7215ce94ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SenofficeBundle:Front:catalogue.html.twig", 1);
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
        echo "Nos Salles";
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
\t\t<div class=\"row \">
            <div class=\"col-md-12\">
                <h2>Consulter la liste de nos salles</h2>
                <p>Tous nos types de salles classés par rapport a vos activités.</p>
            </div>
        </div>
    </div>
</div>

<div class=\"mg-gallery-page\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"mg-filter\">
                    <form id=\"mg-filter\">
                        <fieldset>
                            <label class=\"btn btn-dark btn-main\"><input type=\"radio\" name=\"filter\" value=\"all\" checked=\"checked\">Tout</label>
                            <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"classic\">Seminaires/Formation</label>
                            <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"deluxe\">Informatiques</label>
                            <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Auditorium/Emphithéatre</label>
                            <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Coktails</label>
                            <label class=\"btn btn-dark\"><input type=\"radio\" name=\"filter\" value=\"royal\">Team Bulding</label>
                        </fieldset>
                    </form>
                </div>

                <div class=\"row\" id=\"mg-grid\">
                    <figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
                        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-1.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
                    </figure>
                    <figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"deluxe\"]'>
                        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
                    </figure>
                    <figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"royal\"]'>
                        <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
                    </figure>
                    <figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
                        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-4.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
                    </figure>
                    <figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"deluxe\"]'>
                        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-1.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
                    </figure>
                    <figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
                        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
                    </figure>
                    <figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"royal\"]'>
                        <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
                    </figure>
                    <figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"royal\"]'>
                        <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
                    </figure>
                    <figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
                        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
                    </figure>
                    <figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"royal\"]'>
                        <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
                    </figure>
                    <figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"deluxe\"]'>
                        <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
                    </figure>
                    <figure class=\"col-md-3 mg-gallery-item\" data-groups='[\"classic\"]'>
                        <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" data-lightbox-gallery=\"rooms\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" /><span class=\"mg-gallery-overlayer\"><i class=\"fa fa-search-plus\"></i></span></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 84
    public function block_apropos($context, array $blocks = array())
    {
    }

    // line 87
    public function block_partenaires($context, array $blocks = array())
    {
    }

    // line 90
    public function block_galerie($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SenofficeBundle:Front:catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 90,  192 => 87,  187 => 84,  173 => 75,  165 => 72,  157 => 69,  149 => 66,  141 => 63,  133 => 60,  125 => 57,  117 => 54,  109 => 51,  101 => 48,  93 => 45,  85 => 42,  53 => 12,  50 => 11,  45 => 8,  40 => 5,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SenofficeBundle:Front:catalogue.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/src/ADOB/SenofficeBundle/Resources/views/Front/catalogue.html.twig");
    }
}
