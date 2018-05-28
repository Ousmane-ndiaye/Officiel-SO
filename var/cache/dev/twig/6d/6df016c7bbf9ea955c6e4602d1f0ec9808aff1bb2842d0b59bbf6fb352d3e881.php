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
        $__internal_dde7e5eaf53a2b7f819f2a87949a0127361a16652bbbb355293055932806c89d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde7e5eaf53a2b7f819f2a87949a0127361a16652bbbb355293055932806c89d->enter($__internal_dde7e5eaf53a2b7f819f2a87949a0127361a16652bbbb355293055932806c89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_67a37c5a006c06fa229c970522daba132ab57974ca716517cb4aedd7a65aef3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a37c5a006c06fa229c970522daba132ab57974ca716517cb4aedd7a65aef3d->enter($__internal_67a37c5a006c06fa229c970522daba132ab57974ca716517cb4aedd7a65aef3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde7e5eaf53a2b7f819f2a87949a0127361a16652bbbb355293055932806c89d->leave($__internal_dde7e5eaf53a2b7f819f2a87949a0127361a16652bbbb355293055932806c89d_prof);

        
        $__internal_67a37c5a006c06fa229c970522daba132ab57974ca716517cb4aedd7a65aef3d->leave($__internal_67a37c5a006c06fa229c970522daba132ab57974ca716517cb4aedd7a65aef3d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33d9fc070808a40ce99a44e981de41f6aa9258811d1c807ce1383ea2d03c0f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d9fc070808a40ce99a44e981de41f6aa9258811d1c807ce1383ea2d03c0f8c->enter($__internal_33d9fc070808a40ce99a44e981de41f6aa9258811d1c807ce1383ea2d03c0f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_68a2b3458300d0d92e63525c5a0f64e336e83e307b74b7a147cef5709a52fcf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a2b3458300d0d92e63525c5a0f64e336e83e307b74b7a147cef5709a52fcf3->enter($__internal_68a2b3458300d0d92e63525c5a0f64e336e83e307b74b7a147cef5709a52fcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_68a2b3458300d0d92e63525c5a0f64e336e83e307b74b7a147cef5709a52fcf3->leave($__internal_68a2b3458300d0d92e63525c5a0f64e336e83e307b74b7a147cef5709a52fcf3_prof);

        
        $__internal_33d9fc070808a40ce99a44e981de41f6aa9258811d1c807ce1383ea2d03c0f8c->leave($__internal_33d9fc070808a40ce99a44e981de41f6aa9258811d1c807ce1383ea2d03c0f8c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b19e6838c9a25224f1728f9d14c1da21fbd83cc27233d2db3f8e015681958e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b19e6838c9a25224f1728f9d14c1da21fbd83cc27233d2db3f8e015681958e67->enter($__internal_b19e6838c9a25224f1728f9d14c1da21fbd83cc27233d2db3f8e015681958e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_64632347f6a7d0fb1b467ee7c99d4b26efdad38f25c3d080cbb3a95fafdb8c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64632347f6a7d0fb1b467ee7c99d4b26efdad38f25c3d080cbb3a95fafdb8c80->enter($__internal_64632347f6a7d0fb1b467ee7c99d4b26efdad38f25c3d080cbb3a95fafdb8c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_64632347f6a7d0fb1b467ee7c99d4b26efdad38f25c3d080cbb3a95fafdb8c80->leave($__internal_64632347f6a7d0fb1b467ee7c99d4b26efdad38f25c3d080cbb3a95fafdb8c80_prof);

        
        $__internal_b19e6838c9a25224f1728f9d14c1da21fbd83cc27233d2db3f8e015681958e67->leave($__internal_b19e6838c9a25224f1728f9d14c1da21fbd83cc27233d2db3f8e015681958e67_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4ba3f7654dd3588be6cadea1a402481b27add0033596acfd8ad5cd0c6d79f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ba3f7654dd3588be6cadea1a402481b27add0033596acfd8ad5cd0c6d79f8e->enter($__internal_d4ba3f7654dd3588be6cadea1a402481b27add0033596acfd8ad5cd0c6d79f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8cccb3dd45213619bc2eb9f9c8f101f25a065d7802272fc57d63973b729208c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cccb3dd45213619bc2eb9f9c8f101f25a065d7802272fc57d63973b729208c8->enter($__internal_8cccb3dd45213619bc2eb9f9c8f101f25a065d7802272fc57d63973b729208c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8cccb3dd45213619bc2eb9f9c8f101f25a065d7802272fc57d63973b729208c8->leave($__internal_8cccb3dd45213619bc2eb9f9c8f101f25a065d7802272fc57d63973b729208c8_prof);

        
        $__internal_d4ba3f7654dd3588be6cadea1a402481b27add0033596acfd8ad5cd0c6d79f8e->leave($__internal_d4ba3f7654dd3588be6cadea1a402481b27add0033596acfd8ad5cd0c6d79f8e_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
