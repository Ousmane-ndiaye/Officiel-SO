<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baf291d1eda72fe74f3182c3fdb6264dd30377771e3ce6ef8ea91f5258fadfe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf291d1eda72fe74f3182c3fdb6264dd30377771e3ce6ef8ea91f5258fadfe9->enter($__internal_baf291d1eda72fe74f3182c3fdb6264dd30377771e3ce6ef8ea91f5258fadfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_80bfb7f28ea4e37d980666ebf26fe2a379bcedc834df7b06bb54a0a46fe2fbfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80bfb7f28ea4e37d980666ebf26fe2a379bcedc834df7b06bb54a0a46fe2fbfd->enter($__internal_80bfb7f28ea4e37d980666ebf26fe2a379bcedc834df7b06bb54a0a46fe2fbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_baf291d1eda72fe74f3182c3fdb6264dd30377771e3ce6ef8ea91f5258fadfe9->leave($__internal_baf291d1eda72fe74f3182c3fdb6264dd30377771e3ce6ef8ea91f5258fadfe9_prof);

        
        $__internal_80bfb7f28ea4e37d980666ebf26fe2a379bcedc834df7b06bb54a0a46fe2fbfd->leave($__internal_80bfb7f28ea4e37d980666ebf26fe2a379bcedc834df7b06bb54a0a46fe2fbfd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a42959b3c5542cd6fd46f87de74872872337ff59ca85483771f2553d40ed1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a42959b3c5542cd6fd46f87de74872872337ff59ca85483771f2553d40ed1fa->enter($__internal_6a42959b3c5542cd6fd46f87de74872872337ff59ca85483771f2553d40ed1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b53ed8258fbe0d1d0751a20343fe85470514e46d3a9d2871822cf655af5d2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b53ed8258fbe0d1d0751a20343fe85470514e46d3a9d2871822cf655af5d2d6->enter($__internal_7b53ed8258fbe0d1d0751a20343fe85470514e46d3a9d2871822cf655af5d2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7b53ed8258fbe0d1d0751a20343fe85470514e46d3a9d2871822cf655af5d2d6->leave($__internal_7b53ed8258fbe0d1d0751a20343fe85470514e46d3a9d2871822cf655af5d2d6_prof);

        
        $__internal_6a42959b3c5542cd6fd46f87de74872872337ff59ca85483771f2553d40ed1fa->leave($__internal_6a42959b3c5542cd6fd46f87de74872872337ff59ca85483771f2553d40ed1fa_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d88bb8ec98387dea82950840c7383169a49112bbbb33cb83ca774f488d90586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d88bb8ec98387dea82950840c7383169a49112bbbb33cb83ca774f488d90586->enter($__internal_2d88bb8ec98387dea82950840c7383169a49112bbbb33cb83ca774f488d90586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa1196c2d80f435bc586b8ddaffc43a693de85ea99488dadf28a67145fc591a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1196c2d80f435bc586b8ddaffc43a693de85ea99488dadf28a67145fc591a5->enter($__internal_fa1196c2d80f435bc586b8ddaffc43a693de85ea99488dadf28a67145fc591a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fa1196c2d80f435bc586b8ddaffc43a693de85ea99488dadf28a67145fc591a5->leave($__internal_fa1196c2d80f435bc586b8ddaffc43a693de85ea99488dadf28a67145fc591a5_prof);

        
        $__internal_2d88bb8ec98387dea82950840c7383169a49112bbbb33cb83ca774f488d90586->leave($__internal_2d88bb8ec98387dea82950840c7383169a49112bbbb33cb83ca774f488d90586_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_21efac80bc8ec93a15f4b05ea4fd4e9c94834c5029eefb2941cacd4adc01f169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21efac80bc8ec93a15f4b05ea4fd4e9c94834c5029eefb2941cacd4adc01f169->enter($__internal_21efac80bc8ec93a15f4b05ea4fd4e9c94834c5029eefb2941cacd4adc01f169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edc52eec7b43c983dcb2873465a35903103ecac06ae56d1aff52b64b83f31b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc52eec7b43c983dcb2873465a35903103ecac06ae56d1aff52b64b83f31b9e->enter($__internal_edc52eec7b43c983dcb2873465a35903103ecac06ae56d1aff52b64b83f31b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_edc52eec7b43c983dcb2873465a35903103ecac06ae56d1aff52b64b83f31b9e->leave($__internal_edc52eec7b43c983dcb2873465a35903103ecac06ae56d1aff52b64b83f31b9e_prof);

        
        $__internal_21efac80bc8ec93a15f4b05ea4fd4e9c94834c5029eefb2941cacd4adc01f169->leave($__internal_21efac80bc8ec93a15f4b05ea4fd4e9c94834c5029eefb2941cacd4adc01f169_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
