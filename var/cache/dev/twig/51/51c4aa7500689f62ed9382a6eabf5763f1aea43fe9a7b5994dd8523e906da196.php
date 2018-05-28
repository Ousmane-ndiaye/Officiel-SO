<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b5d43fe3e85ca92b0ff46e869f5e860176ac738f3de27fed1fd1a33b641008e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_236f437497ad32d01dfc6f15272937ce615589b68e6e8ac868f1de045eab5cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236f437497ad32d01dfc6f15272937ce615589b68e6e8ac868f1de045eab5cfe->enter($__internal_236f437497ad32d01dfc6f15272937ce615589b68e6e8ac868f1de045eab5cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5f2fcba2c2d938b1f03ce3ef17b6192be61339e5cc39dd64805eca0fcaf1a0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2fcba2c2d938b1f03ce3ef17b6192be61339e5cc39dd64805eca0fcaf1a0bd->enter($__internal_5f2fcba2c2d938b1f03ce3ef17b6192be61339e5cc39dd64805eca0fcaf1a0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_236f437497ad32d01dfc6f15272937ce615589b68e6e8ac868f1de045eab5cfe->leave($__internal_236f437497ad32d01dfc6f15272937ce615589b68e6e8ac868f1de045eab5cfe_prof);

        
        $__internal_5f2fcba2c2d938b1f03ce3ef17b6192be61339e5cc39dd64805eca0fcaf1a0bd->leave($__internal_5f2fcba2c2d938b1f03ce3ef17b6192be61339e5cc39dd64805eca0fcaf1a0bd_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f80c495d772e40e2045845dd8722dfc03e74d73ccc931860cb3be8eefaf7bbc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80c495d772e40e2045845dd8722dfc03e74d73ccc931860cb3be8eefaf7bbc6->enter($__internal_f80c495d772e40e2045845dd8722dfc03e74d73ccc931860cb3be8eefaf7bbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3eb21480c67ac209893f33a3e5f618e83e2e4a64cbf565579dba3ca1713881d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb21480c67ac209893f33a3e5f618e83e2e4a64cbf565579dba3ca1713881d7->enter($__internal_3eb21480c67ac209893f33a3e5f618e83e2e4a64cbf565579dba3ca1713881d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_3eb21480c67ac209893f33a3e5f618e83e2e4a64cbf565579dba3ca1713881d7->leave($__internal_3eb21480c67ac209893f33a3e5f618e83e2e4a64cbf565579dba3ca1713881d7_prof);

        
        $__internal_f80c495d772e40e2045845dd8722dfc03e74d73ccc931860cb3be8eefaf7bbc6->leave($__internal_f80c495d772e40e2045845dd8722dfc03e74d73ccc931860cb3be8eefaf7bbc6_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d81eef3db1370b7c3a2b497a65f337614cb51cdb66fb30494a4841e45fda26be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81eef3db1370b7c3a2b497a65f337614cb51cdb66fb30494a4841e45fda26be->enter($__internal_d81eef3db1370b7c3a2b497a65f337614cb51cdb66fb30494a4841e45fda26be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_95803ebdc818059ea18f1f44a79d3fe1b83894e096b6a93c7d457ec3cf59a4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95803ebdc818059ea18f1f44a79d3fe1b83894e096b6a93c7d457ec3cf59a4e7->enter($__internal_95803ebdc818059ea18f1f44a79d3fe1b83894e096b6a93c7d457ec3cf59a4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_95803ebdc818059ea18f1f44a79d3fe1b83894e096b6a93c7d457ec3cf59a4e7->leave($__internal_95803ebdc818059ea18f1f44a79d3fe1b83894e096b6a93c7d457ec3cf59a4e7_prof);

        
        $__internal_d81eef3db1370b7c3a2b497a65f337614cb51cdb66fb30494a4841e45fda26be->leave($__internal_d81eef3db1370b7c3a2b497a65f337614cb51cdb66fb30494a4841e45fda26be_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
