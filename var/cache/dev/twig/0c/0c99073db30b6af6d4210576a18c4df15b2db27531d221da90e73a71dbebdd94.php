<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05c77627d96f04dcc606d52df21d873292b2ce180d3cbdad71e23c80fb0cdfdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c77627d96f04dcc606d52df21d873292b2ce180d3cbdad71e23c80fb0cdfdd->enter($__internal_05c77627d96f04dcc606d52df21d873292b2ce180d3cbdad71e23c80fb0cdfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_f94e7498ea2f715e211c8ccf67726fb25708c1c9760ca90a86a4aed486e0a7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94e7498ea2f715e211c8ccf67726fb25708c1c9760ca90a86a4aed486e0a7e7->enter($__internal_f94e7498ea2f715e211c8ccf67726fb25708c1c9760ca90a86a4aed486e0a7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05c77627d96f04dcc606d52df21d873292b2ce180d3cbdad71e23c80fb0cdfdd->leave($__internal_05c77627d96f04dcc606d52df21d873292b2ce180d3cbdad71e23c80fb0cdfdd_prof);

        
        $__internal_f94e7498ea2f715e211c8ccf67726fb25708c1c9760ca90a86a4aed486e0a7e7->leave($__internal_f94e7498ea2f715e211c8ccf67726fb25708c1c9760ca90a86a4aed486e0a7e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_02d49b3aa6cb2b5b78ea0ed3eb170e463f86d61a89fc63e3a27b402e46569866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d49b3aa6cb2b5b78ea0ed3eb170e463f86d61a89fc63e3a27b402e46569866->enter($__internal_02d49b3aa6cb2b5b78ea0ed3eb170e463f86d61a89fc63e3a27b402e46569866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f6a2bde07e6072bb5c9cfd577ef40f03794666b33e9d4cfa9de6227d64759cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a2bde07e6072bb5c9cfd577ef40f03794666b33e9d4cfa9de6227d64759cab->enter($__internal_f6a2bde07e6072bb5c9cfd577ef40f03794666b33e9d4cfa9de6227d64759cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f6a2bde07e6072bb5c9cfd577ef40f03794666b33e9d4cfa9de6227d64759cab->leave($__internal_f6a2bde07e6072bb5c9cfd577ef40f03794666b33e9d4cfa9de6227d64759cab_prof);

        
        $__internal_02d49b3aa6cb2b5b78ea0ed3eb170e463f86d61a89fc63e3a27b402e46569866->leave($__internal_02d49b3aa6cb2b5b78ea0ed3eb170e463f86d61a89fc63e3a27b402e46569866_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_357ab2f2c68f07f6e4d3a418c3a094edc27ab0c7314f2f0b68e303d92d3f8d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357ab2f2c68f07f6e4d3a418c3a094edc27ab0c7314f2f0b68e303d92d3f8d40->enter($__internal_357ab2f2c68f07f6e4d3a418c3a094edc27ab0c7314f2f0b68e303d92d3f8d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1e0856f9fc47e4ac0b6ec3f7178f4e43c2e607a08a8549715461c879fd0ddad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0856f9fc47e4ac0b6ec3f7178f4e43c2e607a08a8549715461c879fd0ddad0->enter($__internal_1e0856f9fc47e4ac0b6ec3f7178f4e43c2e607a08a8549715461c879fd0ddad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1e0856f9fc47e4ac0b6ec3f7178f4e43c2e607a08a8549715461c879fd0ddad0->leave($__internal_1e0856f9fc47e4ac0b6ec3f7178f4e43c2e607a08a8549715461c879fd0ddad0_prof);

        
        $__internal_357ab2f2c68f07f6e4d3a418c3a094edc27ab0c7314f2f0b68e303d92d3f8d40->leave($__internal_357ab2f2c68f07f6e4d3a418c3a094edc27ab0c7314f2f0b68e303d92d3f8d40_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a8dd82481b0b03160d6d7d522548e7852d48f37db2fbe0c7cf5ed4fb7241335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8dd82481b0b03160d6d7d522548e7852d48f37db2fbe0c7cf5ed4fb7241335->enter($__internal_8a8dd82481b0b03160d6d7d522548e7852d48f37db2fbe0c7cf5ed4fb7241335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dd7acc7abdaa8b572465cafd6e512c037edcea2c7a007b3367f8fa538d0402ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7acc7abdaa8b572465cafd6e512c037edcea2c7a007b3367f8fa538d0402ce->enter($__internal_dd7acc7abdaa8b572465cafd6e512c037edcea2c7a007b3367f8fa538d0402ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dd7acc7abdaa8b572465cafd6e512c037edcea2c7a007b3367f8fa538d0402ce->leave($__internal_dd7acc7abdaa8b572465cafd6e512c037edcea2c7a007b3367f8fa538d0402ce_prof);

        
        $__internal_8a8dd82481b0b03160d6d7d522548e7852d48f37db2fbe0c7cf5ed4fb7241335->leave($__internal_8a8dd82481b0b03160d6d7d522548e7852d48f37db2fbe0c7cf5ed4fb7241335_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
