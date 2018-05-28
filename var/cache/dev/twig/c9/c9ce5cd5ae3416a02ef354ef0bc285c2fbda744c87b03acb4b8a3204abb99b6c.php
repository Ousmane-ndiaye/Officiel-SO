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
        $__internal_73f04347039a34efe73d4423f61ac46c1577c77a6a4106a62a70c72585d2b69d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f04347039a34efe73d4423f61ac46c1577c77a6a4106a62a70c72585d2b69d->enter($__internal_73f04347039a34efe73d4423f61ac46c1577c77a6a4106a62a70c72585d2b69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f37a6d258b5eb622899e4f193beb3d012a4fe55edb261edec44a3624739fd327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37a6d258b5eb622899e4f193beb3d012a4fe55edb261edec44a3624739fd327->enter($__internal_f37a6d258b5eb622899e4f193beb3d012a4fe55edb261edec44a3624739fd327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_73f04347039a34efe73d4423f61ac46c1577c77a6a4106a62a70c72585d2b69d->leave($__internal_73f04347039a34efe73d4423f61ac46c1577c77a6a4106a62a70c72585d2b69d_prof);

        
        $__internal_f37a6d258b5eb622899e4f193beb3d012a4fe55edb261edec44a3624739fd327->leave($__internal_f37a6d258b5eb622899e4f193beb3d012a4fe55edb261edec44a3624739fd327_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
