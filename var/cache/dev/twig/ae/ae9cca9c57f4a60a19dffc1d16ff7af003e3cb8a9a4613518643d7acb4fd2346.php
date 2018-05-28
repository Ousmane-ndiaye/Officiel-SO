<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_3ababdd0f30be7e902181b5f60717dcd8747c6aaa57d17d65898eedb6719f463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ababdd0f30be7e902181b5f60717dcd8747c6aaa57d17d65898eedb6719f463->enter($__internal_3ababdd0f30be7e902181b5f60717dcd8747c6aaa57d17d65898eedb6719f463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_bf7301f1a129c24067e6dd330a0d89842864797fcbaa6b40b62d13c0382fa2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7301f1a129c24067e6dd330a0d89842864797fcbaa6b40b62d13c0382fa2a2->enter($__internal_bf7301f1a129c24067e6dd330a0d89842864797fcbaa6b40b62d13c0382fa2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ababdd0f30be7e902181b5f60717dcd8747c6aaa57d17d65898eedb6719f463->leave($__internal_3ababdd0f30be7e902181b5f60717dcd8747c6aaa57d17d65898eedb6719f463_prof);

        
        $__internal_bf7301f1a129c24067e6dd330a0d89842864797fcbaa6b40b62d13c0382fa2a2->leave($__internal_bf7301f1a129c24067e6dd330a0d89842864797fcbaa6b40b62d13c0382fa2a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0acc400cd11f43a98b03f53e257091a98088173fe015f5aa7931e87e22446afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0acc400cd11f43a98b03f53e257091a98088173fe015f5aa7931e87e22446afa->enter($__internal_0acc400cd11f43a98b03f53e257091a98088173fe015f5aa7931e87e22446afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6dd630da6ba649ed8cd792876417f9a2941ce0406b5b012e1be85ab066434886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd630da6ba649ed8cd792876417f9a2941ce0406b5b012e1be85ab066434886->enter($__internal_6dd630da6ba649ed8cd792876417f9a2941ce0406b5b012e1be85ab066434886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6dd630da6ba649ed8cd792876417f9a2941ce0406b5b012e1be85ab066434886->leave($__internal_6dd630da6ba649ed8cd792876417f9a2941ce0406b5b012e1be85ab066434886_prof);

        
        $__internal_0acc400cd11f43a98b03f53e257091a98088173fe015f5aa7931e87e22446afa->leave($__internal_0acc400cd11f43a98b03f53e257091a98088173fe015f5aa7931e87e22446afa_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b9b24628f95ef4b50ae4337416dac024af0efc98527493c672a6f36271cc67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9b24628f95ef4b50ae4337416dac024af0efc98527493c672a6f36271cc67a->enter($__internal_1b9b24628f95ef4b50ae4337416dac024af0efc98527493c672a6f36271cc67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c81698094c8f21a53ed52df3d26e585590cf56c2cf88c7f14163c742bd8e8495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81698094c8f21a53ed52df3d26e585590cf56c2cf88c7f14163c742bd8e8495->enter($__internal_c81698094c8f21a53ed52df3d26e585590cf56c2cf88c7f14163c742bd8e8495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c81698094c8f21a53ed52df3d26e585590cf56c2cf88c7f14163c742bd8e8495->leave($__internal_c81698094c8f21a53ed52df3d26e585590cf56c2cf88c7f14163c742bd8e8495_prof);

        
        $__internal_1b9b24628f95ef4b50ae4337416dac024af0efc98527493c672a6f36271cc67a->leave($__internal_1b9b24628f95ef4b50ae4337416dac024af0efc98527493c672a6f36271cc67a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_162f92cc7ae298c8f446a5854349d9f90b540ef98df6bad977aef3b135edb533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162f92cc7ae298c8f446a5854349d9f90b540ef98df6bad977aef3b135edb533->enter($__internal_162f92cc7ae298c8f446a5854349d9f90b540ef98df6bad977aef3b135edb533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0f009703d12f8a48be4d9abe041d01b670f1782fb05dd06afb51a0f0df3649c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f009703d12f8a48be4d9abe041d01b670f1782fb05dd06afb51a0f0df3649c->enter($__internal_a0f009703d12f8a48be4d9abe041d01b670f1782fb05dd06afb51a0f0df3649c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a0f009703d12f8a48be4d9abe041d01b670f1782fb05dd06afb51a0f0df3649c->leave($__internal_a0f009703d12f8a48be4d9abe041d01b670f1782fb05dd06afb51a0f0df3649c_prof);

        
        $__internal_162f92cc7ae298c8f446a5854349d9f90b540ef98df6bad977aef3b135edb533->leave($__internal_162f92cc7ae298c8f446a5854349d9f90b540ef98df6bad977aef3b135edb533_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
