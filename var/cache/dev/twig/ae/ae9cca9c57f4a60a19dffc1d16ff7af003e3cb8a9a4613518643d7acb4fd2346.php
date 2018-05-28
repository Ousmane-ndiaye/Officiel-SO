<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e1c2f4e276af5691a9f491ce4795bfc3808e526c1af9a7a585762112b00dc880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c2f4e276af5691a9f491ce4795bfc3808e526c1af9a7a585762112b00dc880->enter($__internal_e1c2f4e276af5691a9f491ce4795bfc3808e526c1af9a7a585762112b00dc880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_81a2c738020ffc48ed537297b319a33e92e92c73b61551bc8ecc55f0f9fcbeb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a2c738020ffc48ed537297b319a33e92e92c73b61551bc8ecc55f0f9fcbeb8->enter($__internal_81a2c738020ffc48ed537297b319a33e92e92c73b61551bc8ecc55f0f9fcbeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1c2f4e276af5691a9f491ce4795bfc3808e526c1af9a7a585762112b00dc880->leave($__internal_e1c2f4e276af5691a9f491ce4795bfc3808e526c1af9a7a585762112b00dc880_prof);

        
        $__internal_81a2c738020ffc48ed537297b319a33e92e92c73b61551bc8ecc55f0f9fcbeb8->leave($__internal_81a2c738020ffc48ed537297b319a33e92e92c73b61551bc8ecc55f0f9fcbeb8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b614bc0804e16e39386eb8ae6bc79c49d24fab615edb076200871502fbd59f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b614bc0804e16e39386eb8ae6bc79c49d24fab615edb076200871502fbd59f7d->enter($__internal_b614bc0804e16e39386eb8ae6bc79c49d24fab615edb076200871502fbd59f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_298795ba752375fed965dba8728071f6c11a5de6320aea847cbfbac44e390ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298795ba752375fed965dba8728071f6c11a5de6320aea847cbfbac44e390ff5->enter($__internal_298795ba752375fed965dba8728071f6c11a5de6320aea847cbfbac44e390ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_298795ba752375fed965dba8728071f6c11a5de6320aea847cbfbac44e390ff5->leave($__internal_298795ba752375fed965dba8728071f6c11a5de6320aea847cbfbac44e390ff5_prof);

        
        $__internal_b614bc0804e16e39386eb8ae6bc79c49d24fab615edb076200871502fbd59f7d->leave($__internal_b614bc0804e16e39386eb8ae6bc79c49d24fab615edb076200871502fbd59f7d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_12a5c0a899670549956a7386da599e90114e69cb2259c494a186feffbc106201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a5c0a899670549956a7386da599e90114e69cb2259c494a186feffbc106201->enter($__internal_12a5c0a899670549956a7386da599e90114e69cb2259c494a186feffbc106201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_044045a1513ab9cda97bf0f865f0bdef3c37f34c1ab7a7a9c3fb2ff00e60e34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044045a1513ab9cda97bf0f865f0bdef3c37f34c1ab7a7a9c3fb2ff00e60e34b->enter($__internal_044045a1513ab9cda97bf0f865f0bdef3c37f34c1ab7a7a9c3fb2ff00e60e34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_044045a1513ab9cda97bf0f865f0bdef3c37f34c1ab7a7a9c3fb2ff00e60e34b->leave($__internal_044045a1513ab9cda97bf0f865f0bdef3c37f34c1ab7a7a9c3fb2ff00e60e34b_prof);

        
        $__internal_12a5c0a899670549956a7386da599e90114e69cb2259c494a186feffbc106201->leave($__internal_12a5c0a899670549956a7386da599e90114e69cb2259c494a186feffbc106201_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c9250e84a7196b19fa7d915d02302381003a16ae38b0ca3c44dcadbee78c35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9250e84a7196b19fa7d915d02302381003a16ae38b0ca3c44dcadbee78c35a->enter($__internal_3c9250e84a7196b19fa7d915d02302381003a16ae38b0ca3c44dcadbee78c35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4629775f82de76cffba2678e2987fccf242aa5c1603f33b3dde59a6ac7a8a767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4629775f82de76cffba2678e2987fccf242aa5c1603f33b3dde59a6ac7a8a767->enter($__internal_4629775f82de76cffba2678e2987fccf242aa5c1603f33b3dde59a6ac7a8a767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4629775f82de76cffba2678e2987fccf242aa5c1603f33b3dde59a6ac7a8a767->leave($__internal_4629775f82de76cffba2678e2987fccf242aa5c1603f33b3dde59a6ac7a8a767_prof);

        
        $__internal_3c9250e84a7196b19fa7d915d02302381003a16ae38b0ca3c44dcadbee78c35a->leave($__internal_3c9250e84a7196b19fa7d915d02302381003a16ae38b0ca3c44dcadbee78c35a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
