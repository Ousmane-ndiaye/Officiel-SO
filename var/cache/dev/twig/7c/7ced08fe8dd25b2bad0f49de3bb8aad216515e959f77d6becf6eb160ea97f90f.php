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
        $__internal_8491183c09b9d4fa94bc9e767745754f343deb7126c3cf005d69f66653d7082b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8491183c09b9d4fa94bc9e767745754f343deb7126c3cf005d69f66653d7082b->enter($__internal_8491183c09b9d4fa94bc9e767745754f343deb7126c3cf005d69f66653d7082b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2182188f85540c0a70fcaf6c512a9945cf4561ac811462d1d4267918f25547a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2182188f85540c0a70fcaf6c512a9945cf4561ac811462d1d4267918f25547a1->enter($__internal_2182188f85540c0a70fcaf6c512a9945cf4561ac811462d1d4267918f25547a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8491183c09b9d4fa94bc9e767745754f343deb7126c3cf005d69f66653d7082b->leave($__internal_8491183c09b9d4fa94bc9e767745754f343deb7126c3cf005d69f66653d7082b_prof);

        
        $__internal_2182188f85540c0a70fcaf6c512a9945cf4561ac811462d1d4267918f25547a1->leave($__internal_2182188f85540c0a70fcaf6c512a9945cf4561ac811462d1d4267918f25547a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1f7395b65136cb94c3753d0c4dda6df398eee4db63b4759732c81baddee9895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f7395b65136cb94c3753d0c4dda6df398eee4db63b4759732c81baddee9895->enter($__internal_c1f7395b65136cb94c3753d0c4dda6df398eee4db63b4759732c81baddee9895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6cfe07a8f052563f002c7c691701d839be57744ccc9931c90f25fb990c3d1de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfe07a8f052563f002c7c691701d839be57744ccc9931c90f25fb990c3d1de7->enter($__internal_6cfe07a8f052563f002c7c691701d839be57744ccc9931c90f25fb990c3d1de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6cfe07a8f052563f002c7c691701d839be57744ccc9931c90f25fb990c3d1de7->leave($__internal_6cfe07a8f052563f002c7c691701d839be57744ccc9931c90f25fb990c3d1de7_prof);

        
        $__internal_c1f7395b65136cb94c3753d0c4dda6df398eee4db63b4759732c81baddee9895->leave($__internal_c1f7395b65136cb94c3753d0c4dda6df398eee4db63b4759732c81baddee9895_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7719d603e1515784e0f22909e38524e4d888a5b2c4806c160fab8a9fad8a1326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7719d603e1515784e0f22909e38524e4d888a5b2c4806c160fab8a9fad8a1326->enter($__internal_7719d603e1515784e0f22909e38524e4d888a5b2c4806c160fab8a9fad8a1326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4d8957e7b39004b2dad97bee94275fa3a96592cec7669f70cda1bc0132c32c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d8957e7b39004b2dad97bee94275fa3a96592cec7669f70cda1bc0132c32c0->enter($__internal_d4d8957e7b39004b2dad97bee94275fa3a96592cec7669f70cda1bc0132c32c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d4d8957e7b39004b2dad97bee94275fa3a96592cec7669f70cda1bc0132c32c0->leave($__internal_d4d8957e7b39004b2dad97bee94275fa3a96592cec7669f70cda1bc0132c32c0_prof);

        
        $__internal_7719d603e1515784e0f22909e38524e4d888a5b2c4806c160fab8a9fad8a1326->leave($__internal_7719d603e1515784e0f22909e38524e4d888a5b2c4806c160fab8a9fad8a1326_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
