<?php

/* SenofficeBundle:Front:index.html.twig */
class __TwigTemplate_9b982f0ac6108cb530399837c6dc339f7d569af0f3c45ac1df2451dfda6dfbd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SenofficeBundle:Front:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2dcee7afedb0d5a76a17d7ebb126300d61c60ee6c3942754a894a5f0826c729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2dcee7afedb0d5a76a17d7ebb126300d61c60ee6c3942754a894a5f0826c729->enter($__internal_c2dcee7afedb0d5a76a17d7ebb126300d61c60ee6c3942754a894a5f0826c729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:index.html.twig"));

        $__internal_b6a826e80b218d24a8c8508c6598d929c733422e5eb02a6fd37965909bb60abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a826e80b218d24a8c8508c6598d929c733422e5eb02a6fd37965909bb60abe->enter($__internal_b6a826e80b218d24a8c8508c6598d929c733422e5eb02a6fd37965909bb60abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2dcee7afedb0d5a76a17d7ebb126300d61c60ee6c3942754a894a5f0826c729->leave($__internal_c2dcee7afedb0d5a76a17d7ebb126300d61c60ee6c3942754a894a5f0826c729_prof);

        
        $__internal_b6a826e80b218d24a8c8508c6598d929c733422e5eb02a6fd37965909bb60abe->leave($__internal_b6a826e80b218d24a8c8508c6598d929c733422e5eb02a6fd37965909bb60abe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4efe13f1ee052892fe0d708d7a36c0845e38cffbd940095a6d5a698feacda8bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efe13f1ee052892fe0d708d7a36c0845e38cffbd940095a6d5a698feacda8bc->enter($__internal_4efe13f1ee052892fe0d708d7a36c0845e38cffbd940095a6d5a698feacda8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e8b7a7119a377f614f1ec376f3ea14fba1ed22e4c823c0fe9113e91afabfb42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8b7a7119a377f614f1ec376f3ea14fba1ed22e4c823c0fe9113e91afabfb42->enter($__internal_3e8b7a7119a377f614f1ec376f3ea14fba1ed22e4c823c0fe9113e91afabfb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sen Office";
        
        $__internal_3e8b7a7119a377f614f1ec376f3ea14fba1ed22e4c823c0fe9113e91afabfb42->leave($__internal_3e8b7a7119a377f614f1ec376f3ea14fba1ed22e4c823c0fe9113e91afabfb42_prof);

        
        $__internal_4efe13f1ee052892fe0d708d7a36c0845e38cffbd940095a6d5a698feacda8bc->leave($__internal_4efe13f1ee052892fe0d708d7a36c0845e38cffbd940095a6d5a698feacda8bc_prof);

    }

    public function getTemplateName()
    {
        return "SenofficeBundle:Front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  11 => 1,);
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

{% block title %}Sen Office{% endblock %}
", "SenofficeBundle:Front:index.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/src/ADOB/SenofficeBundle/Resources/views/Front/index.html.twig");
    }
}
