<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_00d473b1bc5ec8a1fce5cf7751332a771fa11b4b98ff1980c3827c2b5e3734a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cd04ddf97e22b0dda7f03ead814931206000da07fc01171ba64e444c4530f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd04ddf97e22b0dda7f03ead814931206000da07fc01171ba64e444c4530f46->enter($__internal_6cd04ddf97e22b0dda7f03ead814931206000da07fc01171ba64e444c4530f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_dc11e046f74102db1799e8c05707c42ab75849b6a7318d480b94a6cfd761e14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc11e046f74102db1799e8c05707c42ab75849b6a7318d480b94a6cfd761e14d->enter($__internal_dc11e046f74102db1799e8c05707c42ab75849b6a7318d480b94a6cfd761e14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cd04ddf97e22b0dda7f03ead814931206000da07fc01171ba64e444c4530f46->leave($__internal_6cd04ddf97e22b0dda7f03ead814931206000da07fc01171ba64e444c4530f46_prof);

        
        $__internal_dc11e046f74102db1799e8c05707c42ab75849b6a7318d480b94a6cfd761e14d->leave($__internal_dc11e046f74102db1799e8c05707c42ab75849b6a7318d480b94a6cfd761e14d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ae15f3a77d05fcbb63558d3ed24ba46427e0a63dc5fae4e9b920cd567ab6510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae15f3a77d05fcbb63558d3ed24ba46427e0a63dc5fae4e9b920cd567ab6510->enter($__internal_8ae15f3a77d05fcbb63558d3ed24ba46427e0a63dc5fae4e9b920cd567ab6510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_01ef21a140556d2c8b7c146aa19acf462c7cbbb875dcd31c5026e14ec6a2e9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ef21a140556d2c8b7c146aa19acf462c7cbbb875dcd31c5026e14ec6a2e9d1->enter($__internal_01ef21a140556d2c8b7c146aa19acf462c7cbbb875dcd31c5026e14ec6a2e9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_01ef21a140556d2c8b7c146aa19acf462c7cbbb875dcd31c5026e14ec6a2e9d1->leave($__internal_01ef21a140556d2c8b7c146aa19acf462c7cbbb875dcd31c5026e14ec6a2e9d1_prof);

        
        $__internal_8ae15f3a77d05fcbb63558d3ed24ba46427e0a63dc5fae4e9b920cd567ab6510->leave($__internal_8ae15f3a77d05fcbb63558d3ed24ba46427e0a63dc5fae4e9b920cd567ab6510_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6c2bb10339fee5ff146dfe3484c48ee6928e3d1a4e1777c854262ac32dbed65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c2bb10339fee5ff146dfe3484c48ee6928e3d1a4e1777c854262ac32dbed65->enter($__internal_e6c2bb10339fee5ff146dfe3484c48ee6928e3d1a4e1777c854262ac32dbed65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f02a972517b2b57b3fabc9c2eaf40dee9368575924f6edf699f66df1560f3eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02a972517b2b57b3fabc9c2eaf40dee9368575924f6edf699f66df1560f3eb1->enter($__internal_f02a972517b2b57b3fabc9c2eaf40dee9368575924f6edf699f66df1560f3eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_f02a972517b2b57b3fabc9c2eaf40dee9368575924f6edf699f66df1560f3eb1->leave($__internal_f02a972517b2b57b3fabc9c2eaf40dee9368575924f6edf699f66df1560f3eb1_prof);

        
        $__internal_e6c2bb10339fee5ff146dfe3484c48ee6928e3d1a4e1777c854262ac32dbed65->leave($__internal_e6c2bb10339fee5ff146dfe3484c48ee6928e3d1a4e1777c854262ac32dbed65_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
