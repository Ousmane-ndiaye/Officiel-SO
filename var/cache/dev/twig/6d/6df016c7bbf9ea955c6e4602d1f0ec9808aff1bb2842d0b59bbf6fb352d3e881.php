<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_5780bdd1585d8faa5944a0f06abd57cf6c26fc62e220d1c7b507f89cca3008c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5780bdd1585d8faa5944a0f06abd57cf6c26fc62e220d1c7b507f89cca3008c6->enter($__internal_5780bdd1585d8faa5944a0f06abd57cf6c26fc62e220d1c7b507f89cca3008c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f1e8d62f4bf4751b58d4a60329242211262b10aecb3ff3c7e1f371816fdaaf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e8d62f4bf4751b58d4a60329242211262b10aecb3ff3c7e1f371816fdaaf7e->enter($__internal_f1e8d62f4bf4751b58d4a60329242211262b10aecb3ff3c7e1f371816fdaaf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5780bdd1585d8faa5944a0f06abd57cf6c26fc62e220d1c7b507f89cca3008c6->leave($__internal_5780bdd1585d8faa5944a0f06abd57cf6c26fc62e220d1c7b507f89cca3008c6_prof);

        
        $__internal_f1e8d62f4bf4751b58d4a60329242211262b10aecb3ff3c7e1f371816fdaaf7e->leave($__internal_f1e8d62f4bf4751b58d4a60329242211262b10aecb3ff3c7e1f371816fdaaf7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65bd5f2e86c4dc66237bed7c7e65c89a2ca67b961cb2762e8f3320453701d61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bd5f2e86c4dc66237bed7c7e65c89a2ca67b961cb2762e8f3320453701d61c->enter($__internal_65bd5f2e86c4dc66237bed7c7e65c89a2ca67b961cb2762e8f3320453701d61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_18acfaca4fa9747b21508de850694361e813b3388ddff7153ec78dc44fc0f9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18acfaca4fa9747b21508de850694361e813b3388ddff7153ec78dc44fc0f9c3->enter($__internal_18acfaca4fa9747b21508de850694361e813b3388ddff7153ec78dc44fc0f9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_18acfaca4fa9747b21508de850694361e813b3388ddff7153ec78dc44fc0f9c3->leave($__internal_18acfaca4fa9747b21508de850694361e813b3388ddff7153ec78dc44fc0f9c3_prof);

        
        $__internal_65bd5f2e86c4dc66237bed7c7e65c89a2ca67b961cb2762e8f3320453701d61c->leave($__internal_65bd5f2e86c4dc66237bed7c7e65c89a2ca67b961cb2762e8f3320453701d61c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99246e27b7f024124a9059b51e7e487b36cc2f7e79eb93e459fbba0199a77341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99246e27b7f024124a9059b51e7e487b36cc2f7e79eb93e459fbba0199a77341->enter($__internal_99246e27b7f024124a9059b51e7e487b36cc2f7e79eb93e459fbba0199a77341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_04432edc77fed9e25fc4578288fb5d4d899022e6017ab8cd0e8c9515c6b68794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04432edc77fed9e25fc4578288fb5d4d899022e6017ab8cd0e8c9515c6b68794->enter($__internal_04432edc77fed9e25fc4578288fb5d4d899022e6017ab8cd0e8c9515c6b68794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_04432edc77fed9e25fc4578288fb5d4d899022e6017ab8cd0e8c9515c6b68794->leave($__internal_04432edc77fed9e25fc4578288fb5d4d899022e6017ab8cd0e8c9515c6b68794_prof);

        
        $__internal_99246e27b7f024124a9059b51e7e487b36cc2f7e79eb93e459fbba0199a77341->leave($__internal_99246e27b7f024124a9059b51e7e487b36cc2f7e79eb93e459fbba0199a77341_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8771c6d108bf87caf2ec62c8299e42269dc48f5ff18fe74ce39da37c658c0ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8771c6d108bf87caf2ec62c8299e42269dc48f5ff18fe74ce39da37c658c0ae9->enter($__internal_8771c6d108bf87caf2ec62c8299e42269dc48f5ff18fe74ce39da37c658c0ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57c3fe08988f0aa842cbf3af4f4ed8c9ef5cc6e620b9440560836b5d66f4d46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c3fe08988f0aa842cbf3af4f4ed8c9ef5cc6e620b9440560836b5d66f4d46d->enter($__internal_57c3fe08988f0aa842cbf3af4f4ed8c9ef5cc6e620b9440560836b5d66f4d46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_57c3fe08988f0aa842cbf3af4f4ed8c9ef5cc6e620b9440560836b5d66f4d46d->leave($__internal_57c3fe08988f0aa842cbf3af4f4ed8c9ef5cc6e620b9440560836b5d66f4d46d_prof);

        
        $__internal_8771c6d108bf87caf2ec62c8299e42269dc48f5ff18fe74ce39da37c658c0ae9->leave($__internal_8771c6d108bf87caf2ec62c8299e42269dc48f5ff18fe74ce39da37c658c0ae9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
