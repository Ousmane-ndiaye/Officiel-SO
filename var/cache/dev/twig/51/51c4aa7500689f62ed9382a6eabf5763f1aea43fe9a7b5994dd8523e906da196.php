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
        $__internal_b49ba574b286517a676ed028367bca1ed05357a03de82e32c6cc76ddfbf4cbcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49ba574b286517a676ed028367bca1ed05357a03de82e32c6cc76ddfbf4cbcd->enter($__internal_b49ba574b286517a676ed028367bca1ed05357a03de82e32c6cc76ddfbf4cbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c75273698655d314897dac665d2525d68f9cde985dca2bdb00ba84021d6791d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75273698655d314897dac665d2525d68f9cde985dca2bdb00ba84021d6791d8->enter($__internal_c75273698655d314897dac665d2525d68f9cde985dca2bdb00ba84021d6791d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b49ba574b286517a676ed028367bca1ed05357a03de82e32c6cc76ddfbf4cbcd->leave($__internal_b49ba574b286517a676ed028367bca1ed05357a03de82e32c6cc76ddfbf4cbcd_prof);

        
        $__internal_c75273698655d314897dac665d2525d68f9cde985dca2bdb00ba84021d6791d8->leave($__internal_c75273698655d314897dac665d2525d68f9cde985dca2bdb00ba84021d6791d8_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6f1ffb46151de7b5750f56be6c264fcad2ea466ad1dad90fceffc17ac272a5ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1ffb46151de7b5750f56be6c264fcad2ea466ad1dad90fceffc17ac272a5ee->enter($__internal_6f1ffb46151de7b5750f56be6c264fcad2ea466ad1dad90fceffc17ac272a5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8e003efaa27610e61f1e9a71ce0bd02cf296ff390bfb982c53e711f5b2646bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e003efaa27610e61f1e9a71ce0bd02cf296ff390bfb982c53e711f5b2646bdd->enter($__internal_8e003efaa27610e61f1e9a71ce0bd02cf296ff390bfb982c53e711f5b2646bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_8e003efaa27610e61f1e9a71ce0bd02cf296ff390bfb982c53e711f5b2646bdd->leave($__internal_8e003efaa27610e61f1e9a71ce0bd02cf296ff390bfb982c53e711f5b2646bdd_prof);

        
        $__internal_6f1ffb46151de7b5750f56be6c264fcad2ea466ad1dad90fceffc17ac272a5ee->leave($__internal_6f1ffb46151de7b5750f56be6c264fcad2ea466ad1dad90fceffc17ac272a5ee_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1be23ec118a3662acf5e4bcebf1e0c7b41e3ef074dc54fcaebc5b4b6f32b9fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be23ec118a3662acf5e4bcebf1e0c7b41e3ef074dc54fcaebc5b4b6f32b9fa6->enter($__internal_1be23ec118a3662acf5e4bcebf1e0c7b41e3ef074dc54fcaebc5b4b6f32b9fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_78d345a3bc55200b98e9df6001f8162df9f19bbadc636af6a1012a063c19e5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d345a3bc55200b98e9df6001f8162df9f19bbadc636af6a1012a063c19e5fb->enter($__internal_78d345a3bc55200b98e9df6001f8162df9f19bbadc636af6a1012a063c19e5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_78d345a3bc55200b98e9df6001f8162df9f19bbadc636af6a1012a063c19e5fb->leave($__internal_78d345a3bc55200b98e9df6001f8162df9f19bbadc636af6a1012a063c19e5fb_prof);

        
        $__internal_1be23ec118a3662acf5e4bcebf1e0c7b41e3ef074dc54fcaebc5b4b6f32b9fa6->leave($__internal_1be23ec118a3662acf5e4bcebf1e0c7b41e3ef074dc54fcaebc5b4b6f32b9fa6_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
