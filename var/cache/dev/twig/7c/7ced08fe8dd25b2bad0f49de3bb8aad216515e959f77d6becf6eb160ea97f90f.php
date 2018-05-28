<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_80510a88aaf2dd5f69b1390322441018455b468488e97e95a301dda3024907a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2aa782649aeec819a7f90b8aa60d4dc8366f205f9b69ae5a0e052d63eda0b187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa782649aeec819a7f90b8aa60d4dc8366f205f9b69ae5a0e052d63eda0b187->enter($__internal_2aa782649aeec819a7f90b8aa60d4dc8366f205f9b69ae5a0e052d63eda0b187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7c92f9294e8a6b1a3306f1ff9b9f83400a6463edca9a9f8badcf678723ed8dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c92f9294e8a6b1a3306f1ff9b9f83400a6463edca9a9f8badcf678723ed8dae->enter($__internal_7c92f9294e8a6b1a3306f1ff9b9f83400a6463edca9a9f8badcf678723ed8dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aa782649aeec819a7f90b8aa60d4dc8366f205f9b69ae5a0e052d63eda0b187->leave($__internal_2aa782649aeec819a7f90b8aa60d4dc8366f205f9b69ae5a0e052d63eda0b187_prof);

        
        $__internal_7c92f9294e8a6b1a3306f1ff9b9f83400a6463edca9a9f8badcf678723ed8dae->leave($__internal_7c92f9294e8a6b1a3306f1ff9b9f83400a6463edca9a9f8badcf678723ed8dae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_801c687786e8df60c6ebcd56293161675c4dbb5737fed204006b179a538e4ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801c687786e8df60c6ebcd56293161675c4dbb5737fed204006b179a538e4ec9->enter($__internal_801c687786e8df60c6ebcd56293161675c4dbb5737fed204006b179a538e4ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a4d117c45808ebe0aafa584ea1980143295729feeab444c7548b3f9fc28ff03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4d117c45808ebe0aafa584ea1980143295729feeab444c7548b3f9fc28ff03->enter($__internal_6a4d117c45808ebe0aafa584ea1980143295729feeab444c7548b3f9fc28ff03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6a4d117c45808ebe0aafa584ea1980143295729feeab444c7548b3f9fc28ff03->leave($__internal_6a4d117c45808ebe0aafa584ea1980143295729feeab444c7548b3f9fc28ff03_prof);

        
        $__internal_801c687786e8df60c6ebcd56293161675c4dbb5737fed204006b179a538e4ec9->leave($__internal_801c687786e8df60c6ebcd56293161675c4dbb5737fed204006b179a538e4ec9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5085399f20cf7d10e420783ebb4763502bde2b4ab2483dd9ae43f50fc5f6245d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5085399f20cf7d10e420783ebb4763502bde2b4ab2483dd9ae43f50fc5f6245d->enter($__internal_5085399f20cf7d10e420783ebb4763502bde2b4ab2483dd9ae43f50fc5f6245d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f3d2c9d50d3c168b806e6f4508dc585e0cf180c9737a2d2cef12290560de2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3d2c9d50d3c168b806e6f4508dc585e0cf180c9737a2d2cef12290560de2e1->enter($__internal_8f3d2c9d50d3c168b806e6f4508dc585e0cf180c9737a2d2cef12290560de2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8f3d2c9d50d3c168b806e6f4508dc585e0cf180c9737a2d2cef12290560de2e1->leave($__internal_8f3d2c9d50d3c168b806e6f4508dc585e0cf180c9737a2d2cef12290560de2e1_prof);

        
        $__internal_5085399f20cf7d10e420783ebb4763502bde2b4ab2483dd9ae43f50fc5f6245d->leave($__internal_5085399f20cf7d10e420783ebb4763502bde2b4ab2483dd9ae43f50fc5f6245d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
