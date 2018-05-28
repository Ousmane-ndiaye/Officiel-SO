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
        $__internal_ad1bdbba2676836bbd59d4052f772daf44be1c2a4ed2aaa992d28a6f06d20836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1bdbba2676836bbd59d4052f772daf44be1c2a4ed2aaa992d28a6f06d20836->enter($__internal_ad1bdbba2676836bbd59d4052f772daf44be1c2a4ed2aaa992d28a6f06d20836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f3003a4e8a98dff8a00182cf473268ef64b3ff0c34fa6c83c0110ccb512577f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3003a4e8a98dff8a00182cf473268ef64b3ff0c34fa6c83c0110ccb512577f7->enter($__internal_f3003a4e8a98dff8a00182cf473268ef64b3ff0c34fa6c83c0110ccb512577f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad1bdbba2676836bbd59d4052f772daf44be1c2a4ed2aaa992d28a6f06d20836->leave($__internal_ad1bdbba2676836bbd59d4052f772daf44be1c2a4ed2aaa992d28a6f06d20836_prof);

        
        $__internal_f3003a4e8a98dff8a00182cf473268ef64b3ff0c34fa6c83c0110ccb512577f7->leave($__internal_f3003a4e8a98dff8a00182cf473268ef64b3ff0c34fa6c83c0110ccb512577f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb0e8a8b981a766b4d1ee6c6daf061a7abd8ddb84dae5d3be94ee366e214cfd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0e8a8b981a766b4d1ee6c6daf061a7abd8ddb84dae5d3be94ee366e214cfd1->enter($__internal_eb0e8a8b981a766b4d1ee6c6daf061a7abd8ddb84dae5d3be94ee366e214cfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0f5c0901a77216785a3099f1af368ac9fe3fb1e464c3b8e35586c81db862cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f5c0901a77216785a3099f1af368ac9fe3fb1e464c3b8e35586c81db862cde->enter($__internal_e0f5c0901a77216785a3099f1af368ac9fe3fb1e464c3b8e35586c81db862cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e0f5c0901a77216785a3099f1af368ac9fe3fb1e464c3b8e35586c81db862cde->leave($__internal_e0f5c0901a77216785a3099f1af368ac9fe3fb1e464c3b8e35586c81db862cde_prof);

        
        $__internal_eb0e8a8b981a766b4d1ee6c6daf061a7abd8ddb84dae5d3be94ee366e214cfd1->leave($__internal_eb0e8a8b981a766b4d1ee6c6daf061a7abd8ddb84dae5d3be94ee366e214cfd1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a700d9d7e4a7db38947d4650fbd2dfa4ff81d8af67a8d6bfac63883631cf4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a700d9d7e4a7db38947d4650fbd2dfa4ff81d8af67a8d6bfac63883631cf4ff->enter($__internal_6a700d9d7e4a7db38947d4650fbd2dfa4ff81d8af67a8d6bfac63883631cf4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c4b8db298df4e35b0afe661c423602c019e0d96055bb0c11d0dd8c5a6d861621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b8db298df4e35b0afe661c423602c019e0d96055bb0c11d0dd8c5a6d861621->enter($__internal_c4b8db298df4e35b0afe661c423602c019e0d96055bb0c11d0dd8c5a6d861621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c4b8db298df4e35b0afe661c423602c019e0d96055bb0c11d0dd8c5a6d861621->leave($__internal_c4b8db298df4e35b0afe661c423602c019e0d96055bb0c11d0dd8c5a6d861621_prof);

        
        $__internal_6a700d9d7e4a7db38947d4650fbd2dfa4ff81d8af67a8d6bfac63883631cf4ff->leave($__internal_6a700d9d7e4a7db38947d4650fbd2dfa4ff81d8af67a8d6bfac63883631cf4ff_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c3a54a7c156f27ae1805d96311bd590ab5ef91b4b9b3f3e2413d755c43ae16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3a54a7c156f27ae1805d96311bd590ab5ef91b4b9b3f3e2413d755c43ae16e->enter($__internal_5c3a54a7c156f27ae1805d96311bd590ab5ef91b4b9b3f3e2413d755c43ae16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f2e2091bad6fdf0220c004920857aeeb2c70f7c8fb5c59e854ad06644cfdde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2e2091bad6fdf0220c004920857aeeb2c70f7c8fb5c59e854ad06644cfdde7->enter($__internal_2f2e2091bad6fdf0220c004920857aeeb2c70f7c8fb5c59e854ad06644cfdde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_2f2e2091bad6fdf0220c004920857aeeb2c70f7c8fb5c59e854ad06644cfdde7->leave($__internal_2f2e2091bad6fdf0220c004920857aeeb2c70f7c8fb5c59e854ad06644cfdde7_prof);

        
        $__internal_5c3a54a7c156f27ae1805d96311bd590ab5ef91b4b9b3f3e2413d755c43ae16e->leave($__internal_5c3a54a7c156f27ae1805d96311bd590ab5ef91b4b9b3f3e2413d755c43ae16e_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
