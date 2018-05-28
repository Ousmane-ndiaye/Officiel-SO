<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_05c675fbdfb49a052cb5ce133271eca023ace22c43429e5dba605e0b95730305 extends Twig_Template
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
        $__internal_b0fa1c86a8739b555a29f682a422178d76a328a142ac3decc5cf7a867f19675a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0fa1c86a8739b555a29f682a422178d76a328a142ac3decc5cf7a867f19675a->enter($__internal_b0fa1c86a8739b555a29f682a422178d76a328a142ac3decc5cf7a867f19675a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_4aff3a8d603a2d7a2b7e5e8628080f9b045ae895ad1076c24cfd5630014acecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aff3a8d603a2d7a2b7e5e8628080f9b045ae895ad1076c24cfd5630014acecc->enter($__internal_4aff3a8d603a2d7a2b7e5e8628080f9b045ae895ad1076c24cfd5630014acecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b0fa1c86a8739b555a29f682a422178d76a328a142ac3decc5cf7a867f19675a->leave($__internal_b0fa1c86a8739b555a29f682a422178d76a328a142ac3decc5cf7a867f19675a_prof);

        
        $__internal_4aff3a8d603a2d7a2b7e5e8628080f9b045ae895ad1076c24cfd5630014acecc->leave($__internal_4aff3a8d603a2d7a2b7e5e8628080f9b045ae895ad1076c24cfd5630014acecc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
