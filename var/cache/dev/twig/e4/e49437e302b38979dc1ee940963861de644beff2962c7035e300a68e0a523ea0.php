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
        $__internal_68ac269b30af08d30e314d8eaf47b9e76a42b1581b29889a3daaac522f12ef26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ac269b30af08d30e314d8eaf47b9e76a42b1581b29889a3daaac522f12ef26->enter($__internal_68ac269b30af08d30e314d8eaf47b9e76a42b1581b29889a3daaac522f12ef26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_e8b296032ac3173dcff4bdadd3cd0f1c402c01eb86a27cf415a82f43af640767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b296032ac3173dcff4bdadd3cd0f1c402c01eb86a27cf415a82f43af640767->enter($__internal_e8b296032ac3173dcff4bdadd3cd0f1c402c01eb86a27cf415a82f43af640767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_68ac269b30af08d30e314d8eaf47b9e76a42b1581b29889a3daaac522f12ef26->leave($__internal_68ac269b30af08d30e314d8eaf47b9e76a42b1581b29889a3daaac522f12ef26_prof);

        
        $__internal_e8b296032ac3173dcff4bdadd3cd0f1c402c01eb86a27cf415a82f43af640767->leave($__internal_e8b296032ac3173dcff4bdadd3cd0f1c402c01eb86a27cf415a82f43af640767_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
