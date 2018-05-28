<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c8bb9c4e15bb7aaabdef164dddeda6fc2bbafd00fd8e56a75c745fd192671372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2fe15bc984f5a1f215ef8454c5ddc225dc47be54d9a63651bca306f62fb1826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2fe15bc984f5a1f215ef8454c5ddc225dc47be54d9a63651bca306f62fb1826->enter($__internal_f2fe15bc984f5a1f215ef8454c5ddc225dc47be54d9a63651bca306f62fb1826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_bf4d8ce42aa93f10b5c64ef91df62e6da9e010b0b72e19a8e3843f4d67e69040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4d8ce42aa93f10b5c64ef91df62e6da9e010b0b72e19a8e3843f4d67e69040->enter($__internal_bf4d8ce42aa93f10b5c64ef91df62e6da9e010b0b72e19a8e3843f4d67e69040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f2fe15bc984f5a1f215ef8454c5ddc225dc47be54d9a63651bca306f62fb1826->leave($__internal_f2fe15bc984f5a1f215ef8454c5ddc225dc47be54d9a63651bca306f62fb1826_prof);

        
        $__internal_bf4d8ce42aa93f10b5c64ef91df62e6da9e010b0b72e19a8e3843f4d67e69040->leave($__internal_bf4d8ce42aa93f10b5c64ef91df62e6da9e010b0b72e19a8e3843f4d67e69040_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
