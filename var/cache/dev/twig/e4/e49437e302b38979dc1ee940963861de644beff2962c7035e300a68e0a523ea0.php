<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_45bf5c7d21036b1fd2c456510a44c89889dbb06d472826a666f9502bdc6ffb24 extends Twig_Template
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
        $__internal_55b350ba15b36bc1d8cca26836d352c123ccc57fd0de353321a5ce15f7511501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b350ba15b36bc1d8cca26836d352c123ccc57fd0de353321a5ce15f7511501->enter($__internal_55b350ba15b36bc1d8cca26836d352c123ccc57fd0de353321a5ce15f7511501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d1f4b02423b9dc750a11de9eca0802ffa3d694a6ac393dcd66ffed4df8bf92ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f4b02423b9dc750a11de9eca0802ffa3d694a6ac393dcd66ffed4df8bf92ab->enter($__internal_d1f4b02423b9dc750a11de9eca0802ffa3d694a6ac393dcd66ffed4df8bf92ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_55b350ba15b36bc1d8cca26836d352c123ccc57fd0de353321a5ce15f7511501->leave($__internal_55b350ba15b36bc1d8cca26836d352c123ccc57fd0de353321a5ce15f7511501_prof);

        
        $__internal_d1f4b02423b9dc750a11de9eca0802ffa3d694a6ac393dcd66ffed4df8bf92ab->leave($__internal_d1f4b02423b9dc750a11de9eca0802ffa3d694a6ac393dcd66ffed4df8bf92ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
