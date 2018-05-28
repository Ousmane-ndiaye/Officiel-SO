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
        $__internal_478242f0e8db82779f97ee4d58b1d2498a19f621a28028bf08dbd3f631c8c0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478242f0e8db82779f97ee4d58b1d2498a19f621a28028bf08dbd3f631c8c0ed->enter($__internal_478242f0e8db82779f97ee4d58b1d2498a19f621a28028bf08dbd3f631c8c0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_da106bba78e874d994cae8f7e3ced1c0169958ccf62179fb872b008a7a5110b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da106bba78e874d994cae8f7e3ced1c0169958ccf62179fb872b008a7a5110b8->enter($__internal_da106bba78e874d994cae8f7e3ced1c0169958ccf62179fb872b008a7a5110b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_478242f0e8db82779f97ee4d58b1d2498a19f621a28028bf08dbd3f631c8c0ed->leave($__internal_478242f0e8db82779f97ee4d58b1d2498a19f621a28028bf08dbd3f631c8c0ed_prof);

        
        $__internal_da106bba78e874d994cae8f7e3ced1c0169958ccf62179fb872b008a7a5110b8->leave($__internal_da106bba78e874d994cae8f7e3ced1c0169958ccf62179fb872b008a7a5110b8_prof);

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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
