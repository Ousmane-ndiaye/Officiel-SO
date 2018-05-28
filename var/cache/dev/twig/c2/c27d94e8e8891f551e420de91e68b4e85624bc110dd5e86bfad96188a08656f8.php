<?php

/* TwigBundle::layout.html.twig */
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
        $__internal_b91fff01715bff757652c89dafc51be159128d3e5470c8cac99ad8b8df86b19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91fff01715bff757652c89dafc51be159128d3e5470c8cac99ad8b8df86b19b->enter($__internal_b91fff01715bff757652c89dafc51be159128d3e5470c8cac99ad8b8df86b19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_88ce390765edfd6afe94a80671cabdf63d7b05ebfb4908166e8abdaee359f44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ce390765edfd6afe94a80671cabdf63d7b05ebfb4908166e8abdaee359f44c->enter($__internal_88ce390765edfd6afe94a80671cabdf63d7b05ebfb4908166e8abdaee359f44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_b91fff01715bff757652c89dafc51be159128d3e5470c8cac99ad8b8df86b19b->leave($__internal_b91fff01715bff757652c89dafc51be159128d3e5470c8cac99ad8b8df86b19b_prof);

        
        $__internal_88ce390765edfd6afe94a80671cabdf63d7b05ebfb4908166e8abdaee359f44c->leave($__internal_88ce390765edfd6afe94a80671cabdf63d7b05ebfb4908166e8abdaee359f44c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_24c3eb824cba744161ca3011e802921779eaa51363b7278aa1c5b82e8235e5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c3eb824cba744161ca3011e802921779eaa51363b7278aa1c5b82e8235e5df->enter($__internal_24c3eb824cba744161ca3011e802921779eaa51363b7278aa1c5b82e8235e5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_041b7385c472819376cac64aae8f2490956510fedfa797420788932c407c4a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041b7385c472819376cac64aae8f2490956510fedfa797420788932c407c4a62->enter($__internal_041b7385c472819376cac64aae8f2490956510fedfa797420788932c407c4a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_041b7385c472819376cac64aae8f2490956510fedfa797420788932c407c4a62->leave($__internal_041b7385c472819376cac64aae8f2490956510fedfa797420788932c407c4a62_prof);

        
        $__internal_24c3eb824cba744161ca3011e802921779eaa51363b7278aa1c5b82e8235e5df->leave($__internal_24c3eb824cba744161ca3011e802921779eaa51363b7278aa1c5b82e8235e5df_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ab202d5abafb85c8fd777bf805ab7c91a3adb4cba1937917df2269e4640b464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab202d5abafb85c8fd777bf805ab7c91a3adb4cba1937917df2269e4640b464->enter($__internal_9ab202d5abafb85c8fd777bf805ab7c91a3adb4cba1937917df2269e4640b464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f84c7b6009774800bfadded5cb978ea559f54c2b55d3f8495c52367458f79e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f84c7b6009774800bfadded5cb978ea559f54c2b55d3f8495c52367458f79e3->enter($__internal_0f84c7b6009774800bfadded5cb978ea559f54c2b55d3f8495c52367458f79e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0f84c7b6009774800bfadded5cb978ea559f54c2b55d3f8495c52367458f79e3->leave($__internal_0f84c7b6009774800bfadded5cb978ea559f54c2b55d3f8495c52367458f79e3_prof);

        
        $__internal_9ab202d5abafb85c8fd777bf805ab7c91a3adb4cba1937917df2269e4640b464->leave($__internal_9ab202d5abafb85c8fd777bf805ab7c91a3adb4cba1937917df2269e4640b464_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_44d7f2d8447f1f653f94634bf622a50f24e4e0c206e903a54117ae9bf33b859d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d7f2d8447f1f653f94634bf622a50f24e4e0c206e903a54117ae9bf33b859d->enter($__internal_44d7f2d8447f1f653f94634bf622a50f24e4e0c206e903a54117ae9bf33b859d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ca14559a8736c063d454dbb979b990f39c6b2dcc6dc0c88c55348a05ef24f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca14559a8736c063d454dbb979b990f39c6b2dcc6dc0c88c55348a05ef24f12->enter($__internal_1ca14559a8736c063d454dbb979b990f39c6b2dcc6dc0c88c55348a05ef24f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ca14559a8736c063d454dbb979b990f39c6b2dcc6dc0c88c55348a05ef24f12->leave($__internal_1ca14559a8736c063d454dbb979b990f39c6b2dcc6dc0c88c55348a05ef24f12_prof);

        
        $__internal_44d7f2d8447f1f653f94634bf622a50f24e4e0c206e903a54117ae9bf33b859d->leave($__internal_44d7f2d8447f1f653f94634bf622a50f24e4e0c206e903a54117ae9bf33b859d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
