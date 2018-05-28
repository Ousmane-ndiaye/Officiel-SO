<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cd6991cadb18b369fd057f56f4cfbf0ac5cc12aa105ccf1faf8b3abd84b3f685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6991cadb18b369fd057f56f4cfbf0ac5cc12aa105ccf1faf8b3abd84b3f685->enter($__internal_cd6991cadb18b369fd057f56f4cfbf0ac5cc12aa105ccf1faf8b3abd84b3f685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1facdef12c2fd1a2eb7c29cd8eff319bd11db85997563f20eef0cea681fb3699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1facdef12c2fd1a2eb7c29cd8eff319bd11db85997563f20eef0cea681fb3699->enter($__internal_1facdef12c2fd1a2eb7c29cd8eff319bd11db85997563f20eef0cea681fb3699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd6991cadb18b369fd057f56f4cfbf0ac5cc12aa105ccf1faf8b3abd84b3f685->leave($__internal_cd6991cadb18b369fd057f56f4cfbf0ac5cc12aa105ccf1faf8b3abd84b3f685_prof);

        
        $__internal_1facdef12c2fd1a2eb7c29cd8eff319bd11db85997563f20eef0cea681fb3699->leave($__internal_1facdef12c2fd1a2eb7c29cd8eff319bd11db85997563f20eef0cea681fb3699_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0dd746131a97b35f7021f8a49614c7009b1eed3883768e3e5507df688baef9e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd746131a97b35f7021f8a49614c7009b1eed3883768e3e5507df688baef9e6->enter($__internal_0dd746131a97b35f7021f8a49614c7009b1eed3883768e3e5507df688baef9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a8a8df978b7829df81ced0122b19298dc9777f64627bc40a44a8d4bbf7e16ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8a8df978b7829df81ced0122b19298dc9777f64627bc40a44a8d4bbf7e16ea->enter($__internal_8a8a8df978b7829df81ced0122b19298dc9777f64627bc40a44a8d4bbf7e16ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8a8a8df978b7829df81ced0122b19298dc9777f64627bc40a44a8d4bbf7e16ea->leave($__internal_8a8a8df978b7829df81ced0122b19298dc9777f64627bc40a44a8d4bbf7e16ea_prof);

        
        $__internal_0dd746131a97b35f7021f8a49614c7009b1eed3883768e3e5507df688baef9e6->leave($__internal_0dd746131a97b35f7021f8a49614c7009b1eed3883768e3e5507df688baef9e6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ea6f76f836588d8788451213442ccc646c4bd85a72bde869ccb330191a7aa72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea6f76f836588d8788451213442ccc646c4bd85a72bde869ccb330191a7aa72->enter($__internal_8ea6f76f836588d8788451213442ccc646c4bd85a72bde869ccb330191a7aa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30c30b80362e42225c8dc52244157a0426ce3e45bb638d4d9a2ebab6084fe738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c30b80362e42225c8dc52244157a0426ce3e45bb638d4d9a2ebab6084fe738->enter($__internal_30c30b80362e42225c8dc52244157a0426ce3e45bb638d4d9a2ebab6084fe738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_30c30b80362e42225c8dc52244157a0426ce3e45bb638d4d9a2ebab6084fe738->leave($__internal_30c30b80362e42225c8dc52244157a0426ce3e45bb638d4d9a2ebab6084fe738_prof);

        
        $__internal_8ea6f76f836588d8788451213442ccc646c4bd85a72bde869ccb330191a7aa72->leave($__internal_8ea6f76f836588d8788451213442ccc646c4bd85a72bde869ccb330191a7aa72_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_412e5a8566b53f011ef066f4bc34a3c758414f9ead258357a64606500a1d0148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412e5a8566b53f011ef066f4bc34a3c758414f9ead258357a64606500a1d0148->enter($__internal_412e5a8566b53f011ef066f4bc34a3c758414f9ead258357a64606500a1d0148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0788b0233508a01bb2858fba78e706f52d445a1f1f8016f7f3b6fdb8f451128b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0788b0233508a01bb2858fba78e706f52d445a1f1f8016f7f3b6fdb8f451128b->enter($__internal_0788b0233508a01bb2858fba78e706f52d445a1f1f8016f7f3b6fdb8f451128b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0788b0233508a01bb2858fba78e706f52d445a1f1f8016f7f3b6fdb8f451128b->leave($__internal_0788b0233508a01bb2858fba78e706f52d445a1f1f8016f7f3b6fdb8f451128b_prof);

        
        $__internal_412e5a8566b53f011ef066f4bc34a3c758414f9ead258357a64606500a1d0148->leave($__internal_412e5a8566b53f011ef066f4bc34a3c758414f9ead258357a64606500a1d0148_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
