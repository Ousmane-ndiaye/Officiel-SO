<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35adecb451e73ce7cceefb6918fd41de51bebb7b720e57934a1b209162db4a81 extends Twig_Template
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
        $__internal_5ddd31efc0a5781938c5c814e04525984f11d1823607f7468547502056d428a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ddd31efc0a5781938c5c814e04525984f11d1823607f7468547502056d428a2->enter($__internal_5ddd31efc0a5781938c5c814e04525984f11d1823607f7468547502056d428a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_953fdbb9732331f0904f6c60414889120aaac214171a060c1c0a89cd503f0142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953fdbb9732331f0904f6c60414889120aaac214171a060c1c0a89cd503f0142->enter($__internal_953fdbb9732331f0904f6c60414889120aaac214171a060c1c0a89cd503f0142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5ddd31efc0a5781938c5c814e04525984f11d1823607f7468547502056d428a2->leave($__internal_5ddd31efc0a5781938c5c814e04525984f11d1823607f7468547502056d428a2_prof);

        
        $__internal_953fdbb9732331f0904f6c60414889120aaac214171a060c1c0a89cd503f0142->leave($__internal_953fdbb9732331f0904f6c60414889120aaac214171a060c1c0a89cd503f0142_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
