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
        $__internal_906e17f630a7171b42e665b347f7a94f69305baef318442a3264ff2461bc5049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906e17f630a7171b42e665b347f7a94f69305baef318442a3264ff2461bc5049->enter($__internal_906e17f630a7171b42e665b347f7a94f69305baef318442a3264ff2461bc5049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3661eb34bd4b31028618aa18778d33f057fa2c588c167097f5b29d9e947d8249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3661eb34bd4b31028618aa18778d33f057fa2c588c167097f5b29d9e947d8249->enter($__internal_3661eb34bd4b31028618aa18778d33f057fa2c588c167097f5b29d9e947d8249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_906e17f630a7171b42e665b347f7a94f69305baef318442a3264ff2461bc5049->leave($__internal_906e17f630a7171b42e665b347f7a94f69305baef318442a3264ff2461bc5049_prof);

        
        $__internal_3661eb34bd4b31028618aa18778d33f057fa2c588c167097f5b29d9e947d8249->leave($__internal_3661eb34bd4b31028618aa18778d33f057fa2c588c167097f5b29d9e947d8249_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88fd5cdfc2823355be49bd71f8f04c68ba877f4c4426d1afb967fa10854eb438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88fd5cdfc2823355be49bd71f8f04c68ba877f4c4426d1afb967fa10854eb438->enter($__internal_88fd5cdfc2823355be49bd71f8f04c68ba877f4c4426d1afb967fa10854eb438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e9502a2878b9832edb420a4963cf35e1cf931580db87c497bf63c7fe1f97b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9502a2878b9832edb420a4963cf35e1cf931580db87c497bf63c7fe1f97b29->enter($__internal_9e9502a2878b9832edb420a4963cf35e1cf931580db87c497bf63c7fe1f97b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9e9502a2878b9832edb420a4963cf35e1cf931580db87c497bf63c7fe1f97b29->leave($__internal_9e9502a2878b9832edb420a4963cf35e1cf931580db87c497bf63c7fe1f97b29_prof);

        
        $__internal_88fd5cdfc2823355be49bd71f8f04c68ba877f4c4426d1afb967fa10854eb438->leave($__internal_88fd5cdfc2823355be49bd71f8f04c68ba877f4c4426d1afb967fa10854eb438_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5caa99ca42a663f5d9fa3a5337aedfd8b0b983e608162dcebbcd6e3174a3482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5caa99ca42a663f5d9fa3a5337aedfd8b0b983e608162dcebbcd6e3174a3482->enter($__internal_c5caa99ca42a663f5d9fa3a5337aedfd8b0b983e608162dcebbcd6e3174a3482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2649d794d409290705f369549da5941814d2fa74864b6407d70f4b727ad93a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2649d794d409290705f369549da5941814d2fa74864b6407d70f4b727ad93a37->enter($__internal_2649d794d409290705f369549da5941814d2fa74864b6407d70f4b727ad93a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2649d794d409290705f369549da5941814d2fa74864b6407d70f4b727ad93a37->leave($__internal_2649d794d409290705f369549da5941814d2fa74864b6407d70f4b727ad93a37_prof);

        
        $__internal_c5caa99ca42a663f5d9fa3a5337aedfd8b0b983e608162dcebbcd6e3174a3482->leave($__internal_c5caa99ca42a663f5d9fa3a5337aedfd8b0b983e608162dcebbcd6e3174a3482_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_17697af5ac00198d859f1078c202b296bd9b26b5ddc0cdaae28bb8c79e3a53fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17697af5ac00198d859f1078c202b296bd9b26b5ddc0cdaae28bb8c79e3a53fa->enter($__internal_17697af5ac00198d859f1078c202b296bd9b26b5ddc0cdaae28bb8c79e3a53fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81246d61c7b752e427d74c3de0b06a99e6f4cc73540b12495dd8d0d5c10d4db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81246d61c7b752e427d74c3de0b06a99e6f4cc73540b12495dd8d0d5c10d4db4->enter($__internal_81246d61c7b752e427d74c3de0b06a99e6f4cc73540b12495dd8d0d5c10d4db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_81246d61c7b752e427d74c3de0b06a99e6f4cc73540b12495dd8d0d5c10d4db4->leave($__internal_81246d61c7b752e427d74c3de0b06a99e6f4cc73540b12495dd8d0d5c10d4db4_prof);

        
        $__internal_17697af5ac00198d859f1078c202b296bd9b26b5ddc0cdaae28bb8c79e3a53fa->leave($__internal_17697af5ac00198d859f1078c202b296bd9b26b5ddc0cdaae28bb8c79e3a53fa_prof);

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
", "@Twig/layout.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
