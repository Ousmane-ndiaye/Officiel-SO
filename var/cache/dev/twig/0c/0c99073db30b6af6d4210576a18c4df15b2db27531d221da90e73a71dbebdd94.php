<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_9bb07a85e26921eed1d82ad955e9d25feedd221e1c0e097f31eda38485a8f28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb07a85e26921eed1d82ad955e9d25feedd221e1c0e097f31eda38485a8f28c->enter($__internal_9bb07a85e26921eed1d82ad955e9d25feedd221e1c0e097f31eda38485a8f28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_800cd1083ee8033865a6dcd190c7e0404e713f5b61aab38378997866369b6232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800cd1083ee8033865a6dcd190c7e0404e713f5b61aab38378997866369b6232->enter($__internal_800cd1083ee8033865a6dcd190c7e0404e713f5b61aab38378997866369b6232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bb07a85e26921eed1d82ad955e9d25feedd221e1c0e097f31eda38485a8f28c->leave($__internal_9bb07a85e26921eed1d82ad955e9d25feedd221e1c0e097f31eda38485a8f28c_prof);

        
        $__internal_800cd1083ee8033865a6dcd190c7e0404e713f5b61aab38378997866369b6232->leave($__internal_800cd1083ee8033865a6dcd190c7e0404e713f5b61aab38378997866369b6232_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b14952b02760022e7c4cf07ed4c223d8746687fea7708bc1a5c181923f6fee92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14952b02760022e7c4cf07ed4c223d8746687fea7708bc1a5c181923f6fee92->enter($__internal_b14952b02760022e7c4cf07ed4c223d8746687fea7708bc1a5c181923f6fee92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_029cd68238b45c325499a870db81c572474e981249406462de5549da006a6497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029cd68238b45c325499a870db81c572474e981249406462de5549da006a6497->enter($__internal_029cd68238b45c325499a870db81c572474e981249406462de5549da006a6497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_029cd68238b45c325499a870db81c572474e981249406462de5549da006a6497->leave($__internal_029cd68238b45c325499a870db81c572474e981249406462de5549da006a6497_prof);

        
        $__internal_b14952b02760022e7c4cf07ed4c223d8746687fea7708bc1a5c181923f6fee92->leave($__internal_b14952b02760022e7c4cf07ed4c223d8746687fea7708bc1a5c181923f6fee92_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73241a47b2044f93af9234a18fc43e31d577499c677650f10fea8654bde08bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73241a47b2044f93af9234a18fc43e31d577499c677650f10fea8654bde08bf9->enter($__internal_73241a47b2044f93af9234a18fc43e31d577499c677650f10fea8654bde08bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e86acd2a03e13e8374352608d0d0c0d5c5493c834e930fadd0ec4b284d88a9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86acd2a03e13e8374352608d0d0c0d5c5493c834e930fadd0ec4b284d88a9c1->enter($__internal_e86acd2a03e13e8374352608d0d0c0d5c5493c834e930fadd0ec4b284d88a9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e86acd2a03e13e8374352608d0d0c0d5c5493c834e930fadd0ec4b284d88a9c1->leave($__internal_e86acd2a03e13e8374352608d0d0c0d5c5493c834e930fadd0ec4b284d88a9c1_prof);

        
        $__internal_73241a47b2044f93af9234a18fc43e31d577499c677650f10fea8654bde08bf9->leave($__internal_73241a47b2044f93af9234a18fc43e31d577499c677650f10fea8654bde08bf9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_130d8350b5e1cfed50f25deeee44fc31cdc40a213525defa517219d1cd32c470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130d8350b5e1cfed50f25deeee44fc31cdc40a213525defa517219d1cd32c470->enter($__internal_130d8350b5e1cfed50f25deeee44fc31cdc40a213525defa517219d1cd32c470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b09c8946a778141c693fc54083ef3acfa0143cef7f8c33528be5bff336630315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09c8946a778141c693fc54083ef3acfa0143cef7f8c33528be5bff336630315->enter($__internal_b09c8946a778141c693fc54083ef3acfa0143cef7f8c33528be5bff336630315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b09c8946a778141c693fc54083ef3acfa0143cef7f8c33528be5bff336630315->leave($__internal_b09c8946a778141c693fc54083ef3acfa0143cef7f8c33528be5bff336630315_prof);

        
        $__internal_130d8350b5e1cfed50f25deeee44fc31cdc40a213525defa517219d1cd32c470->leave($__internal_130d8350b5e1cfed50f25deeee44fc31cdc40a213525defa517219d1cd32c470_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
