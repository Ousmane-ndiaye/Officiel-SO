<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3cbe54f18bcd2ec7904b5046b285c12f82dcedd8c9426bd5b09c59d5318f0d1c extends Twig_Template
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
        $__internal_09c10596700f78a1e9574488069a71d7e73c5e90ea14d15d5f4d64878e004615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c10596700f78a1e9574488069a71d7e73c5e90ea14d15d5f4d64878e004615->enter($__internal_09c10596700f78a1e9574488069a71d7e73c5e90ea14d15d5f4d64878e004615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f580185df042883d2b271ec940d72078bccda190e383b439fdb1268fa088c9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f580185df042883d2b271ec940d72078bccda190e383b439fdb1268fa088c9ce->enter($__internal_f580185df042883d2b271ec940d72078bccda190e383b439fdb1268fa088c9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_09c10596700f78a1e9574488069a71d7e73c5e90ea14d15d5f4d64878e004615->leave($__internal_09c10596700f78a1e9574488069a71d7e73c5e90ea14d15d5f4d64878e004615_prof);

        
        $__internal_f580185df042883d2b271ec940d72078bccda190e383b439fdb1268fa088c9ce->leave($__internal_f580185df042883d2b271ec940d72078bccda190e383b439fdb1268fa088c9ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
